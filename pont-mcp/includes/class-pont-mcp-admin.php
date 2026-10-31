<?php
/**
 * Page Réglages › Pont MCP : clé de connexion, niveau d'accès, journal d'activité.
 */

defined( 'ABSPATH' ) || exit;

class Pont_MCP_Admin {

	const PAGE          = 'pont-mcp';
	const NEW_URL_TRANS = 'pont_mcp_new_url_';

	public static function init() {
		add_action( 'admin_menu', array( __CLASS__, 'add_page' ) );
	}

	public static function add_page() {
		$hook = add_options_page( 'Pont MCP', 'Pont MCP', 'manage_options', self::PAGE, array( __CLASS__, 'render' ) );
		add_action( 'load-' . $hook, array( __CLASS__, 'handle_actions' ) );
	}

	public static function handle_actions() {
		if ( 'POST' !== ( $_SERVER['REQUEST_METHOD'] ?? '' ) || empty( $_POST['pont_mcp_action'] ) ) {
			return;
		}
		check_admin_referer( 'pont_mcp_settings' );
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die( esc_html__( 'Droits insuffisants.', 'pont-mcp' ) );
		}

		$notice = '';
		switch ( sanitize_key( wp_unslash( $_POST['pont_mcp_action'] ) ) ) {
			case 'generate':
				$key = Pont_MCP_Auth::generate_key( get_current_user_id() );
				set_transient( self::NEW_URL_TRANS . get_current_user_id(), Pont_MCP_Auth::connector_url( $key ), 10 * MINUTE_IN_SECONDS );
				$notice = 'generated';
				break;
			case 'revoke':
				Pont_MCP_Auth::revoke_key();
				$notice = 'revoked';
				break;
			case 'level':
				$level = sanitize_key( wp_unslash( $_POST['pont_mcp_level'] ?? '' ) );
				if ( array_key_exists( $level, Pont_MCP_Settings::levels() ) ) {
					Pont_MCP_Settings::update( array( 'level' => $level ) );
					$notice = 'saved';
				}
				break;
			case 'amazon':
				$domain = strtolower( sanitize_text_field( wp_unslash( $_POST['pont_mcp_amazon_domain'] ?? 'amazon.fr' ) ) );
				Pont_MCP_Settings::update(
					array(
						'amazon_tag'        => sanitize_text_field( wp_unslash( $_POST['pont_mcp_amazon_tag'] ?? '' ) ),
						'amazon_domain'     => preg_match( '/^amazon\.[a-z.]{2,6}$/', $domain ) ? $domain : 'amazon.fr',
						'amazon_disclosure' => sanitize_text_field( wp_unslash( $_POST['pont_mcp_amazon_disclosure'] ?? '' ) ),
					)
				);
				$notice = 'saved';
				break;
			case 'snippets':
				Pont_MCP_Settings::update( array( 'allow_snippets' => ! empty( $_POST['pont_mcp_allow_snippets'] ) ) );
				$notice = 'saved';
				break;
			case 'clear_log':
				delete_option( Pont_MCP_Settings::LOG_OPTION );
				$notice = 'cleared';
				break;
		}

		wp_safe_redirect( add_query_arg( array( 'page' => self::PAGE, 'pont_mcp_notice' => $notice ), admin_url( 'options-general.php' ) ) );
		exit;
	}

	public static function render() {
		$settings = Pont_MCP_Settings::get();
		$has_key  = '' !== $settings['key_hash'];
		$owner    = $has_key ? get_userdata( (int) $settings['user_id'] ) : null;
		$new_url  = get_transient( self::NEW_URL_TRANS . get_current_user_id() );
		if ( $new_url ) {
			delete_transient( self::NEW_URL_TRANS . get_current_user_id() );
		}
		// phpcs:ignore WordPress.Security.NonceVerification.Recommended
		$notice   = isset( $_GET['pont_mcp_notice'] ) ? sanitize_key( wp_unslash( $_GET['pont_mcp_notice'] ) ) : '';
		$messages = array(
			'revoked' => 'Clé révoquée : Claude n’a plus accès au site.',
			'saved'   => 'Niveau d’accès enregistré.',
			'cleared' => 'Journal vidé.',
		);
		$level    = Pont_MCP_Settings::level();
		?>
		<div class="wrap pont-mcp">
			<h1>Pont MCP</h1>
			<p>Connecte ce site à Claude comme <strong>connecteur personnalisé</strong> : Claude peut alors lire vos contenus, rédiger des brouillons, importer des images et, si vous l’autorisez, retoucher le design (CSS) du site.</p>

			<?php if ( isset( $messages[ $notice ] ) ) : ?>
				<div class="notice notice-success is-dismissible"><p><?php echo esc_html( $messages[ $notice ] ); ?></p></div>
			<?php endif; ?>

			<h2>1. Adresse du connecteur</h2>
			<?php if ( $new_url ) : ?>
				<div class="notice notice-warning inline"><p><strong>Copiez cette adresse maintenant : elle ne sera plus affichée.</strong> Elle contient une clé secrète ; ne la partagez pas.</p></div>
				<p>
					<input type="text" id="pont-mcp-url" class="large-text code" readonly value="<?php echo esc_attr( $new_url ); ?>" onfocus="this.select();">
				</p>
				<p><button type="button" class="button button-primary" id="pont-mcp-copy">Copier l’adresse</button> <span id="pont-mcp-copied" hidden>Copiée ✓</span></p>
				<script>
					document.getElementById( 'pont-mcp-copy' ).addEventListener( 'click', function () {
						var field = document.getElementById( 'pont-mcp-url' );
						field.select();
						( navigator.clipboard ? navigator.clipboard.writeText( field.value ) : Promise.resolve( document.execCommand( 'copy' ) ) )
							.then( function () { document.getElementById( 'pont-mcp-copied' ).hidden = false; } );
					} );
				</script>
			<?php elseif ( $has_key ) : ?>
				<p>
					Une clé est active depuis le <?php echo esc_html( mysql2date( get_option( 'date_format' ) . ' H:i', $settings['created'] ) ); ?>.
					Claude agit au nom de <strong><?php echo esc_html( $owner ? $owner->display_name : '?' ); ?></strong>.
					<br>Adresse perdue ? Générez-en une nouvelle (l’ancienne cessera de fonctionner).
				</p>
			<?php else : ?>
				<p>Aucune clé pour l’instant. Générez une adresse : Claude agira au nom de votre compte administrateur.</p>
			<?php endif; ?>

			<form method="post" style="display:inline-block;margin-right:8px">
				<?php wp_nonce_field( 'pont_mcp_settings' ); ?>
				<input type="hidden" name="pont_mcp_action" value="generate">
				<?php submit_button( $has_key ? 'Générer une nouvelle adresse' : 'Générer l’adresse du connecteur', $has_key ? 'secondary' : 'primary', 'submit', false ); ?>
			</form>
			<?php if ( $has_key ) : ?>
				<form method="post" style="display:inline-block" onsubmit="return confirm( 'Couper l’accès de Claude à ce site ?' );">
					<?php wp_nonce_field( 'pont_mcp_settings' ); ?>
					<input type="hidden" name="pont_mcp_action" value="revoke">
					<?php submit_button( 'Révoquer l’accès', 'delete', 'submit', false ); ?>
				</form>
			<?php endif; ?>

			<h2>2. Ajouter le connecteur dans Claude</h2>
			<ol>
				<li>Sur claude.ai (ou l’application Claude) : <strong>Paramètres › Connecteurs › Ajouter un connecteur personnalisé</strong>.</li>
				<li>Nom : par exemple « <?php echo esc_html( get_bloginfo( 'name' ) ); ?> ». URL : collez l’adresse ci-dessus. Laissez les réglages OAuth vides.</li>
				<li>Dans une conversation, activez le connecteur puis demandez par exemple : « Analyse le design de mon site et propose des améliorations ».</li>
			</ol>

			<h2>3. Niveau d’accès</h2>
			<form method="post">
				<?php wp_nonce_field( 'pont_mcp_settings' ); ?>
				<input type="hidden" name="pont_mcp_action" value="level">
				<fieldset>
					<?php foreach ( Pont_MCP_Settings::levels() as $value => $label ) : ?>
						<label style="display:block;margin:6px 0">
							<input type="radio" name="pont_mcp_level" value="<?php echo esc_attr( $value ); ?>" <?php checked( $level, $value ); ?>>
							<?php echo esc_html( $label ); ?>
						</label>
					<?php endforeach; ?>
				</fieldset>
				<p class="description">Au niveau « Complet », Claude peut modifier le CSS du site : chaque version précédente est conservée et restaurable (outil restore_custom_css, ou Apparence › Personnaliser › CSS additionnel).</p>
				<?php submit_button( 'Enregistrer' ); ?>
			</form>

			<h2>4. Liens affiliés Amazon (facultatif)</h2>
			<form method="post">
				<?php wp_nonce_field( 'pont_mcp_settings' ); ?>
				<input type="hidden" name="pont_mcp_action" value="amazon">
				<table class="form-table" role="presentation">
					<tr>
						<th scope="row"><label for="pont_mcp_amazon_tag">Identifiant Partenaire</label></th>
						<td><input type="text" id="pont_mcp_amazon_tag" name="pont_mcp_amazon_tag" class="regular-text" value="<?php echo esc_attr( $settings['amazon_tag'] ); ?>" placeholder="monsite-21">
							<p class="description">Votre « tag » Partenaires Amazon, ajouté à chaque lien créé par Claude (outil insert_affiliate_link).</p></td>
					</tr>
					<tr>
						<th scope="row"><label for="pont_mcp_amazon_domain">Boutique</label></th>
						<td><input type="text" id="pont_mcp_amazon_domain" name="pont_mcp_amazon_domain" class="regular-text" value="<?php echo esc_attr( $settings['amazon_domain'] ); ?>"></td>
					</tr>
					<tr>
						<th scope="row"><label for="pont_mcp_amazon_disclosure">Mention obligatoire</label></th>
						<td><input type="text" id="pont_mcp_amazon_disclosure" name="pont_mcp_amazon_disclosure" class="large-text" value="<?php echo esc_attr( $settings['amazon_disclosure'] ); ?>" placeholder="<?php echo esc_attr( Pont_MCP_Tools_Affiliate::DEFAULT_DISCLOSURE ); ?>">
							<p class="description">Ajoutée automatiquement en fin d’article lors de l’insertion d’un premier lien. Vide : texte officiel ci-dessus.</p></td>
					</tr>
				</table>
				<?php submit_button( 'Enregistrer' ); ?>
			</form>

			<h2>5. Extraits de code (Code Snippets)</h2>
			<form method="post">
				<?php wp_nonce_field( 'pont_mcp_settings' ); ?>
				<input type="hidden" name="pont_mcp_action" value="snippets">
				<label>
					<input type="checkbox" name="pont_mcp_allow_snippets" value="1" <?php checked( ! empty( $settings['allow_snippets'] ) ); ?>>
					Autoriser Claude à créer et activer des extraits de code
				</label>
				<p class="description">Un extrait de code exécute du PHP sur le site. Avec cette case cochée et le niveau « Complet », Claude peut créer des extraits (toujours inactifs à la création, syntaxe vérifiée), puis les activer ou les désactiver. Laissez décoché si vous n’en avez pas besoin. Les extraits restent visibles et modifiables dans le menu Extraits.</p>
				<?php submit_button( 'Enregistrer' ); ?>
			</form>

			<h2>Journal d’activité</h2>
			<?php $log = Pont_MCP_Settings::get_log(); ?>
			<?php if ( ! $log ) : ?>
				<p>Aucune action pour l’instant.</p>
			<?php else : ?>
				<table class="widefat striped" style="max-width:900px">
					<thead><tr><th>Date</th><th>Outil</th><th>Résultat</th></tr></thead>
					<tbody>
					<?php foreach ( $log as $entry ) : ?>
						<tr>
							<td><?php echo esc_html( wp_date( get_option( 'date_format' ) . ' H:i:s', $entry['time'] ) ); ?></td>
							<td><code><?php echo esc_html( $entry['tool'] ); ?></code></td>
							<td><?php echo $entry['ok'] ? '✓' : '✗ ' . esc_html( $entry['message'] ); ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
				<form method="post">
					<?php wp_nonce_field( 'pont_mcp_settings' ); ?>
					<input type="hidden" name="pont_mcp_action" value="clear_log">
					<?php submit_button( 'Vider le journal', 'secondary small' ); ?>
				</form>
			<?php endif; ?>
		</div>
		<?php
	}
}
