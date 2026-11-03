<?php
/**
 * Suivi d'audience et validation des outils pour webmasters.
 *
 * - Google Analytics 4 (gtag.js) ou Google Tag Manager, en Consent Mode v2 :
 *   tout est refusé par défaut, jusqu'à l'accord du visiteur (exigence CNIL).
 * - Bandeau de consentement minimal (Accepter / Refuser), désactivable si le site en a déjà un.
 * - Balises de validation Google Search Console et Bing Webmaster Tools.
 */

defined( 'ABSPATH' ) || exit;

class Pont_MCP_Tracking {

	const OPTION        = 'pont_mcp_tracking';
	const CONSENT_KEY   = 'pont_mcp_consent';
	const CONSENT_DAYS  = 180;

	public static function init() {
		add_action( 'wp_head', array( __CLASS__, 'head' ), 1 );
		add_action( 'wp_body_open', array( __CLASS__, 'body_open' ) );
		add_action( 'wp_footer', array( __CLASS__, 'banner' ), 99 );
		add_shortcode( 'pont_cookies', array( __CLASS__, 'manage_link' ) );
	}

	/**
	 * [pont_cookies] : lien permettant au visiteur de revenir sur son choix (exigence CNIL).
	 */
	public static function manage_link( $atts ) {
		$atts = shortcode_atts( array( 'texte' => 'Gérer les cookies' ), $atts, 'pont_cookies' );
		$key  = esc_js( self::CONSENT_KEY );
		return '<a href="#" onclick="document.cookie=\'' . $key . '=;path=/;max-age=0\';location.reload();return false;">' . esc_html( $atts['texte'] ) . '</a>';
	}

	public static function get() {
		$settings = get_option( self::OPTION, array() );
		return wp_parse_args(
			is_array( $settings ) ? $settings : array(),
			array(
				'ga4_id'              => '',
				'gtm_id'              => '',
				'google_verification' => '',
				'bing_verification'   => '',
				'consent_banner'      => true,
				'privacy_url'         => '',
			)
		);
	}

	public static function definitions() {
		return array(
			'get_tracking' => array(
				'title'       => 'Lire la configuration de suivi',
				'description' => 'Google Analytics 4, Google Tag Manager, balises de validation Search Console et Bing, bandeau de consentement, et tags de suivi déjà présents dans le code des pages (pour éviter les doublons).',
				'level'       => Pont_MCP_Settings::LEVEL_READ,
				'handler'     => array( __CLASS__, 'get_tracking' ),
				'properties'  => array(),
			),
			'set_tracking' => array(
				'title'       => 'Configurer le suivi (Analytics, Search Console)',
				'description' => 'Enregistre l’identifiant Google Analytics 4 (G-…) ou Google Tag Manager (GTM-…), les codes de validation Search Console et Bing, et le bandeau de consentement. Chaîne vide : retire l’élément. Effet immédiat sur tout le site.',
				'level'       => Pont_MCP_Settings::LEVEL_FULL,
				'handler'     => array( __CLASS__, 'set_tracking' ),
				'properties'  => array(
					'ga4_id'              => array( 'type' => 'string', 'description' => 'Identifiant de mesure GA4, ex. G-ABC123XYZ.' ),
					'gtm_id'              => array( 'type' => 'string', 'description' => 'Identifiant de conteneur Google Tag Manager, ex. GTM-ABCD123 (à la place de ga4_id si GA4 est configuré dans GTM).' ),
					'google_verification' => array( 'type' => 'string', 'description' => 'Code de validation Google Search Console (contenu de la balise meta google-site-verification, ou la balise entière).' ),
					'bing_verification'   => array( 'type' => 'string', 'description' => 'Code de validation Bing Webmaster Tools (msvalidate.01).' ),
					'consent_banner'      => array( 'type' => 'boolean', 'description' => 'Afficher le bandeau de consentement Pont MCP (défaut : true). false seulement si le site a déjà une solution de consentement compatible Consent Mode.' ),
					'privacy_url'         => array( 'type' => 'string', 'description' => 'Adresse de la page de confidentialité / mentions légales, liée depuis le bandeau.' ),
				),
			),
		);
	}

	public static function get_tracking() {
		$settings = self::get();
		$found    = array();
		$response = wp_remote_get( home_url( '/' ), array( 'timeout' => 15, 'sslverify' => apply_filters( 'https_local_ssl_verify', false ) ) );
		if ( ! is_wp_error( $response ) ) {
			$html = (string) wp_remote_retrieve_body( $response );
			if ( preg_match_all( '#\b(G-[A-Z0-9]{6,12}|GTM-[A-Z0-9]{4,10}|UA-\d{4,10}-\d{1,4})\b#', $html, $m ) ) {
				$found = array_values( array_unique( $m[1] ) );
			}
		}
		$own = array_filter( array( $settings['ga4_id'], $settings['gtm_id'] ) );

		return array(
			'settings'           => $settings,
			'tags_found_on_site' => $found,
			'other_tags'         => array_values( array_diff( $found, $own ) ),
			'note'               => array_diff( $found, $own ) ? 'Des identifiants de suivi présents dans la page ne viennent pas de Pont MCP (autre extension ou thème) : évitez les doublons.' : null,
		);
	}

	public static function set_tracking( array $args ) {
		if ( ! current_user_can( 'manage_options' ) ) {
			throw new Pont_MCP_Tool_Error( 'Droits insuffisants.' );
		}
		$settings = self::get();

		if ( array_key_exists( 'ga4_id', $args ) ) {
			$id = strtoupper( trim( $args['ga4_id'] ) );
			if ( '' !== $id && ! preg_match( '/^G-[A-Z0-9]{4,15}$/', $id ) ) {
				throw new Pont_MCP_Tool_Error( 'Identifiant GA4 invalide : il commence par « G- » (ex. G-ABC123XYZ).' );
			}
			$settings['ga4_id'] = $id;
		}
		if ( array_key_exists( 'gtm_id', $args ) ) {
			$id = strtoupper( trim( $args['gtm_id'] ) );
			if ( '' !== $id && ! preg_match( '/^GTM-[A-Z0-9]{4,12}$/', $id ) ) {
				throw new Pont_MCP_Tool_Error( 'Identifiant Google Tag Manager invalide : il commence par « GTM- ».' );
			}
			$settings['gtm_id'] = $id;
		}
		foreach ( array( 'google_verification', 'bing_verification' ) as $key ) {
			if ( array_key_exists( $key, $args ) ) {
				$value = trim( $args[ $key ] );
				if ( preg_match( '#content=["\']([^"\']+)["\']#i', $value, $m ) ) {
					$value = $m[1]; // Balise meta entière collée.
				}
				if ( '' !== $value && ! preg_match( '/^[A-Za-z0-9_\-]{10,100}$/', $value ) ) {
					throw new Pont_MCP_Tool_Error( 'Code de validation invalide (' . $key . ').' );
				}
				$settings[ $key ] = $value;
			}
		}
		if ( array_key_exists( 'consent_banner', $args ) ) {
			$settings['consent_banner'] = (bool) $args['consent_banner'];
		}
		if ( array_key_exists( 'privacy_url', $args ) ) {
			$settings['privacy_url'] = esc_url_raw( $args['privacy_url'] );
		}

		update_option( self::OPTION, $settings );

		$warnings = array();
		if ( $settings['ga4_id'] && $settings['gtm_id'] ) {
			$warnings[] = 'GA4 et Tag Manager sont tous deux configurés : si GA4 est aussi paramétré dans Tag Manager, les visites seront comptées deux fois.';
		}
		if ( ( $settings['ga4_id'] || $settings['gtm_id'] ) && ! $settings['consent_banner'] ) {
			$warnings[] = 'Bandeau désactivé : le suivi reste en mode « refusé » tant qu’une autre solution de consentement ne met pas à jour le Consent Mode.';
		}

		return array(
			'message'  => 'Configuration de suivi enregistrée, active sur tout le site.',
			'settings' => $settings,
			'warnings' => $warnings,
		);
	}

	/* ------------------------------------------------------------------ */
	/* Sortie dans les pages                                               */
	/* ------------------------------------------------------------------ */

	private static function should_track() {
		// Pas de suivi des administrateurs connectés ni des aperçus.
		return ! is_admin() && ! current_user_can( 'edit_posts' ) && ! is_customize_preview();
	}

	public static function head() {
		$s = self::get();

		if ( $s['google_verification'] ) {
			echo '<meta name="google-site-verification" content="' . esc_attr( $s['google_verification'] ) . '">' . "\n";
		}
		if ( $s['bing_verification'] ) {
			echo '<meta name="msvalidate.01" content="' . esc_attr( $s['bing_verification'] ) . '">' . "\n";
		}
		if ( ( ! $s['ga4_id'] && ! $s['gtm_id'] ) || ! self::should_track() ) {
			return;
		}

		// Consent Mode v2 : refus par défaut, puis restauration du choix mémorisé.
		$consent_key = self::CONSENT_KEY;
		echo "<script>\n"
			. "window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}\n"
			. "gtag('consent','default',{ad_storage:'denied',ad_user_data:'denied',ad_personalization:'denied',analytics_storage:'denied',wait_for_update:500});\n"
			. "(function(){try{var m=document.cookie.match(/(?:^|; )" . esc_js( $consent_key ) . "=(granted|denied)/);if(m&&m[1]==='granted'){gtag('consent','update',{analytics_storage:'granted'});}}catch(e){}})();\n"
			. "</script>\n";

		if ( $s['gtm_id'] ) {
			echo "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','" . esc_js( $s['gtm_id'] ) . "');</script>\n";
		}
		if ( $s['ga4_id'] ) {
			echo '<script async src="https://www.googletagmanager.com/gtag/js?id=' . esc_attr( $s['ga4_id'] ) . '"></script>' . "\n"
				. "<script>gtag('js',new Date());gtag('config','" . esc_js( $s['ga4_id'] ) . "');</script>\n";
		}
	}

	public static function body_open() {
		$s = self::get();
		if ( $s['gtm_id'] && self::should_track() ) {
			echo '<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=' . esc_attr( $s['gtm_id'] ) . '" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>' . "\n";
		}
	}

	public static function banner() {
		$s = self::get();
		if ( ( ! $s['ga4_id'] && ! $s['gtm_id'] ) || ! $s['consent_banner'] || ! self::should_track() ) {
			return;
		}
		$privacy = $s['privacy_url'] ? $s['privacy_url'] : get_privacy_policy_url();
		$key     = esc_js( self::CONSENT_KEY );
		$max_age = self::CONSENT_DAYS * DAY_IN_SECONDS;
		?>
		<div id="pont-consent" role="dialog" aria-live="polite" aria-label="Mesure d’audience" hidden
			style="position:fixed;left:16px;right:16px;bottom:16px;z-index:99999;max-width:560px;margin:0 auto;background:#fff;color:#222;border-radius:12px;box-shadow:0 8px 30px rgba(0,0,0,.18);padding:16px 18px;font:15px/1.5 system-ui,-apple-system,'Segoe UI',Roboto,sans-serif">
			<p style="margin:0 0 12px">Nous utilisons Google Analytics pour mesurer l’audience de ce site et l’améliorer. Acceptez-vous ces cookies de mesure ?<?php if ( $privacy ) : ?> <a href="<?php echo esc_url( $privacy ); ?>" style="color:inherit">En savoir plus</a><?php endif; ?></p>
			<div style="display:flex;gap:10px;flex-wrap:wrap;justify-content:flex-end">
				<button type="button" data-consent="denied" style="padding:8px 16px;border-radius:999px;border:1px solid #888;background:#fff;color:#222;cursor:pointer;font:inherit">Refuser</button>
				<button type="button" data-consent="granted" style="padding:8px 16px;border-radius:999px;border:1px solid #222;background:#222;color:#fff;cursor:pointer;font:inherit">Accepter</button>
			</div>
		</div>
		<script>
		(function () {
			var box = document.getElementById('pont-consent');
			if (!box || document.cookie.match(/(?:^|; )<?php echo $key; // phpcs:ignore WordPress.Security.EscapeOutput ?>=/)) { return; }
			box.hidden = false;
			box.addEventListener('click', function (e) {
				var choice = e.target && e.target.getAttribute('data-consent');
				if (!choice) { return; }
				document.cookie = '<?php echo $key; // phpcs:ignore WordPress.Security.EscapeOutput ?>=' + choice + ';path=/;max-age=<?php echo (int) $max_age; ?>;SameSite=Lax';
				if (choice === 'granted' && window.gtag) { gtag('consent', 'update', { analytics_storage: 'granted' }); }
				box.remove();
			});
		})();
		</script>
		<?php
	}
}
