<?php
/**
 * Outils pour deux extensions tierces :
 * - Brevo (extension « mailin ») : formulaires d'inscription (table {prefix}sib_model_forms) ;
 * - Code Snippets : extraits de code PHP, CSS ou JS.
 *
 * L'extension Brevo n'offre pas d'interface de programmation pour ses formulaires : la table est lue
 * telle qu'elle existe (colonnes découvertes à l'exécution), et seules ses colonnes existantes sont écrites.
 * Les extraits de code exécutent du PHP sur le site : leur création et leur activation demandent le
 * niveau Complet ET l'autorisation explicite cochée dans Réglages › Pont MCP. Un extrait créé est inactif.
 */

defined( 'ABSPATH' ) || exit;

class Pont_MCP_Tools_Extensions {

	const BREVO_TABLE      = 'sib_model_forms';
	const BREVO_LANG_TABLE = 'sib_model_lang';
	const SNIPPET_SCOPES   = array( 'global', 'admin', 'front-end', 'single-use', 'site-css', 'admin-css', 'site-head-js', 'site-footer-js', 'content' );

	public static function definitions() {
		$read = Pont_MCP_Settings::LEVEL_READ;
		$full = Pont_MCP_Settings::LEVEL_FULL;

		return array(
			'brevo_list_forms' => array(
				'title'       => 'Lister les formulaires Brevo',
				'description' => 'Formulaires d’inscription de l’extension Brevo (code court [sibwp_form id=N]) : id, titre, liste(s) Brevo reliée(s), double validation, messages, et traductions Polylang éventuelles. Le HTML et le CSS sont résumés (voir brevo_get_form).',
				'level'       => $read,
				'handler'     => array( __CLASS__, 'brevo_list_forms' ),
				'properties'  => array(),
			),
			'brevo_get_form'   => array(
				'title'       => 'Lire un formulaire Brevo',
				'description' => 'Toutes les colonnes d’un formulaire de l’extension Brevo, HTML et CSS compris.',
				'level'       => $read,
				'handler'     => array( __CLASS__, 'brevo_get_form' ),
				'properties'  => array(
					'id' => array( 'type' => 'integer', 'description' => 'ID du formulaire.' ),
				),
				'required'    => array( 'id' ),
			),
			'brevo_save_form'  => array(
				'title'       => 'Créer ou modifier un formulaire Brevo',
				'description' => 'Avec id : modifie les colonnes fournies. Sans id : crée un formulaire en copiant source_id (même structure, mêmes réglages), puis applique les colonnes fournies ; title est alors requis. fields = { colonne: valeur } parmi les colonnes renvoyées par brevo_get_form (ex. title, html, css, listID, successMsg, errorMsg, existMsg, invalidMsg, requiredMsg, isDopt, templateID, confirmID). listID accepte un tableau d’ID de listes Brevo. Le formulaire s’insère ensuite avec [sibwp_form id=N].',
				'level'       => $full,
				'handler'     => array( __CLASS__, 'brevo_save_form' ),
				'properties'  => array(
					'id'        => array( 'type' => 'integer', 'description' => 'ID du formulaire à modifier.' ),
					'source_id' => array( 'type' => 'integer', 'description' => 'Création : ID du formulaire à copier.' ),
					'fields'    => array( 'type' => 'object', 'description' => 'Colonnes à écrire.' ),
				),
				'required'    => array( 'fields' ),
			),
			'list_snippets'    => array(
				'title'       => 'Lister les extraits de code',
				'description' => 'Extraits de l’extension Code Snippets : id, nom, description, portée, priorité, actif ou non. Avec id : renvoie aussi le code de cet extrait.',
				'level'       => $read,
				'handler'     => array( __CLASS__, 'list_snippets' ),
				'properties'  => array(
					'id' => array( 'type' => 'integer', 'description' => 'Optionnel : un extrait, avec son code.' ),
				),
			),
			'save_snippet'     => array(
				'title'       => 'Créer ou modifier un extrait de code',
				'description' => 'Crée (sans id) ou modifie (avec id) un extrait Code Snippets. Un extrait créé est INACTIF : l’activer avec set_snippet_active. Le code PHP est vérifié (syntaxe) avant l’enregistrement ; ne pas mettre la balise <?php d’ouverture. Modifier un extrait actif le laisse actif. Demande l’autorisation « extraits de code » cochée dans Réglages › Pont MCP.',
				'level'       => $full,
				'handler'     => array( __CLASS__, 'save_snippet' ),
				'properties'  => array(
					'id'          => array( 'type' => 'integer', 'description' => 'ID de l’extrait à modifier.' ),
					'name'        => array( 'type' => 'string', 'description' => 'Nom (requis à la création).' ),
					'code'        => array( 'type' => 'string', 'description' => 'Code (requis à la création), sans <?php.' ),
					'description' => array( 'type' => 'string', 'description' => 'Description.' ),
					'tags'        => array( 'type' => 'array', 'items' => array( 'type' => 'string' ), 'description' => 'Étiquettes.' ),
					'scope'       => array( 'type' => 'string', 'enum' => self::SNIPPET_SCOPES, 'description' => 'Portée (défaut : global). front-end = site public seulement.' ),
					'priority'    => array( 'type' => 'integer', 'description' => 'Priorité d’exécution (défaut 10).' ),
				),
			),
			'set_snippet_active' => array(
				'title'       => 'Activer ou désactiver un extrait de code',
				'description' => 'Active ou désactive un extrait Code Snippets. Après une activation, vérifier le site (fetch_site_url) ; en cas de problème, désactiver aussitôt. Demande l’autorisation « extraits de code » cochée dans Réglages › Pont MCP.',
				'level'       => $full,
				'handler'     => array( __CLASS__, 'set_snippet_active' ),
				'destructive' => true,
				'properties'  => array(
					'id'     => array( 'type' => 'integer', 'description' => 'ID de l’extrait.' ),
					'active' => array( 'type' => 'boolean', 'description' => 'true : activer ; false : désactiver.' ),
				),
				'required'    => array( 'id', 'active' ),
			),
		);
	}

	/* ------------------------------------------------------------------ */
	/* Brevo                                                               */
	/* ------------------------------------------------------------------ */

	private static function brevo_table() {
		global $wpdb;
		$table = $wpdb->prefix . self::BREVO_TABLE;
		if ( $wpdb->get_var( $wpdb->prepare( 'SHOW TABLES LIKE %s', $wpdb->esc_like( $table ) ) ) !== $table ) {
			throw new Pont_MCP_Tool_Error( 'Table des formulaires Brevo introuvable (' . $table . ') : l’extension Brevo est-elle installée et ses formulaires créés ?' );
		}
		return $table;
	}

	private static function brevo_columns( $table ) {
		global $wpdb;
		$cols = $wpdb->get_col( "SHOW COLUMNS FROM `{$table}`" ); // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
		return array_map( 'strval', (array) $cols );
	}

	private static function brevo_row( $table, $id ) {
		global $wpdb;
		$row = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM `{$table}` WHERE id = %d", $id ), ARRAY_A ); // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
		if ( ! $row ) {
			throw new Pont_MCP_Tool_Error( 'Formulaire Brevo ' . (int) $id . ' introuvable.' );
		}
		return $row;
	}

	private static function brevo_decode( array $row, $summary ) {
		foreach ( $row as $col => $value ) {
			if ( is_string( $value ) && is_serialized( $value ) ) {
				$row[ $col ] = maybe_unserialize( $value );
			}
		}
		if ( $summary ) {
			foreach ( array( 'html', 'css' ) as $col ) {
				if ( isset( $row[ $col ] ) && is_string( $row[ $col ] ) ) {
					$row[ $col ] = '(' . strlen( $row[ $col ] ) . ' caractères)';
				}
			}
		}
		return $row;
	}

	public static function brevo_list_forms( array $args ) {
		global $wpdb;
		$table = self::brevo_table();
		$rows  = $wpdb->get_results( "SELECT * FROM `{$table}` ORDER BY id", ARRAY_A ); // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
		$forms = array();
		foreach ( (array) $rows as $row ) {
			$forms[] = self::brevo_decode( $row, true );
		}

		$result = array(
			'count'     => count( $forms ),
			'forms'     => $forms,
			'shortcode' => '[sibwp_form id=N]',
		);

		$lang_table = $wpdb->prefix . self::BREVO_LANG_TABLE;
		if ( $wpdb->get_var( $wpdb->prepare( 'SHOW TABLES LIKE %s', $wpdb->esc_like( $lang_table ) ) ) === $lang_table ) {
			$result['translations'] = $wpdb->get_results( "SELECT * FROM `{$lang_table}`", ARRAY_A ); // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
		}
		return $result;
	}

	public static function brevo_get_form( array $args ) {
		$table = self::brevo_table();
		return array(
			'form'    => self::brevo_decode( self::brevo_row( $table, (int) $args['id'] ), false ),
			'columns' => self::brevo_columns( $table ),
		);
	}

	public static function brevo_save_form( array $args ) {
		global $wpdb;
		if ( ! current_user_can( 'manage_options' ) ) {
			throw new Pont_MCP_Tool_Error( 'Droits insuffisants pour gérer les formulaires Brevo.' );
		}
		$table   = self::brevo_table();
		$columns = self::brevo_columns( $table );
		$fields  = (array) $args['fields'];
		if ( ! $fields ) {
			throw new Pont_MCP_Tool_Error( 'Aucune colonne à écrire (fields).' );
		}

		$creating = empty( $args['id'] );
		if ( $creating ) {
			if ( empty( $args['source_id'] ) ) {
				throw new Pont_MCP_Tool_Error( 'Création : indiquez source_id (formulaire à copier, voir brevo_list_forms).' );
			}
			if ( empty( $fields['title'] ) && in_array( 'title', $columns, true ) ) {
				throw new Pont_MCP_Tool_Error( 'Création : indiquez fields.title.' );
			}
			$base = self::brevo_row( $table, (int) $args['source_id'] );
		} else {
			$base = self::brevo_row( $table, (int) $args['id'] );
		}

		$data    = array();
		$unknown = array();
		foreach ( $fields as $col => $value ) {
			$col = (string) $col;
			if ( 'id' === strtolower( $col ) ) {
				continue;
			}
			if ( ! in_array( $col, $columns, true ) ) {
				$unknown[] = $col;
				continue;
			}
			if ( is_array( $value ) || is_object( $value ) ) {
				$value = self::brevo_encode_like( array_values( (array) $value ), $base[ $col ] ?? '' );
			} elseif ( is_bool( $value ) ) {
				$value = $value ? 1 : 0;
			}
			$data[ $col ] = $value;
		}
		if ( $unknown ) {
			throw new Pont_MCP_Tool_Error( 'Colonnes inconnues : ' . implode( ', ', $unknown ) . '. Colonnes disponibles : ' . implode( ', ', $columns ) . '.' );
		}

		if ( $creating ) {
			$row = $base;
			unset( $row['id'] );
			if ( in_array( 'date', $columns, true ) && ! isset( $data['date'] ) ) {
				$row['date'] = current_time( 'mysql' );
			}
			if ( in_array( 'isDefault', $columns, true ) && ! isset( $data['isDefault'] ) ) {
				$row['isDefault'] = 0;
			}
			$row = array_merge( $row, $data );
			if ( false === $wpdb->insert( $table, $row ) ) {
				throw new Pont_MCP_Tool_Error( 'Création refusée par la base : ' . $wpdb->last_error );
			}
			$id = (int) $wpdb->insert_id;
		} else {
			$id = (int) $args['id'];
			if ( false === $wpdb->update( $table, $data, array( 'id' => $id ) ) ) {
				throw new Pont_MCP_Tool_Error( 'Modification refusée par la base : ' . $wpdb->last_error );
			}
		}

		return array(
			'message'   => $creating ? 'Formulaire créé.' : 'Formulaire modifié.',
			'id'        => $id,
			'shortcode' => '[sibwp_form id=' . $id . ']',
			'form'      => self::brevo_decode( self::brevo_row( $table, $id ), true ),
		);
	}

	/** Encode une liste au même format que la valeur existante (sérialisée, JSON ou séparée par des virgules). */
	private static function brevo_encode_like( array $list, $existing ) {
		$existing = (string) $existing;
		if ( '' === $existing || is_serialized( $existing ) ) {
			return maybe_serialize( array_map( 'intval', $list ) );
		}
		if ( '[' === substr( $existing, 0, 1 ) ) {
			return wp_json_encode( array_map( 'intval', $list ) );
		}
		return implode( ',', array_map( 'intval', $list ) );
	}

	/* ------------------------------------------------------------------ */
	/* Code Snippets                                                       */
	/* ------------------------------------------------------------------ */

	private static function snippets_api() {
		if ( ! function_exists( 'Code_Snippets\\get_snippets' ) || ! class_exists( 'Code_Snippets\\Snippet' ) ) {
			throw new Pont_MCP_Tool_Error( 'Extension Code Snippets (version 3 ou plus) introuvable ou inactive.' );
		}
	}

	private static function require_snippets_allowed() {
		if ( empty( Pont_MCP_Settings::get()['allow_snippets'] ) ) {
			throw new Pont_MCP_Tool_Error( 'Les extraits de code ne sont pas autorisés : cochez « Autoriser Claude à créer et activer des extraits de code » dans Réglages › Pont MCP.' );
		}
		if ( ! current_user_can( 'manage_options' ) ) {
			throw new Pont_MCP_Tool_Error( 'Droits insuffisants pour gérer les extraits de code.' );
		}
	}

	private static function describe_snippet( $snippet, $with_code ) {
		$out = array(
			'id'       => (int) $snippet->id,
			'name'     => (string) $snippet->name,
			'desc'     => wp_strip_all_tags( (string) $snippet->desc ),
			'tags'     => (array) $snippet->tags,
			'scope'    => (string) $snippet->scope,
			'priority' => (int) $snippet->priority,
			'active'   => (bool) $snippet->active,
			'modified' => (string) $snippet->modified,
		);
		if ( $with_code ) {
			$out['code'] = (string) $snippet->code;
		}
		return $out;
	}

	public static function list_snippets( array $args ) {
		self::snippets_api();
		if ( ! empty( $args['id'] ) ) {
			$snippet = \Code_Snippets\get_snippet( (int) $args['id'] );
			if ( ! $snippet || ! $snippet->id ) {
				throw new Pont_MCP_Tool_Error( 'Extrait ' . (int) $args['id'] . ' introuvable.' );
			}
			return array( 'snippet' => self::describe_snippet( $snippet, true ) );
		}
		$items = array();
		foreach ( \Code_Snippets\get_snippets() as $snippet ) {
			$items[] = self::describe_snippet( $snippet, false );
		}
		return array(
			'count'            => count( $items ),
			'snippets'         => $items,
			'writing_allowed'  => ! empty( Pont_MCP_Settings::get()['allow_snippets'] ),
		);
	}

	public static function save_snippet( array $args ) {
		self::snippets_api();
		self::require_snippets_allowed();

		$creating = empty( $args['id'] );
		if ( $creating ) {
			if ( empty( $args['name'] ) || ! isset( $args['code'] ) ) {
				throw new Pont_MCP_Tool_Error( 'Création : indiquez name et code.' );
			}
			$snippet         = new \Code_Snippets\Snippet();
			$snippet->active = false;
		} else {
			$snippet = \Code_Snippets\get_snippet( (int) $args['id'] );
			if ( ! $snippet || ! $snippet->id ) {
				throw new Pont_MCP_Tool_Error( 'Extrait ' . (int) $args['id'] . ' introuvable.' );
			}
		}

		if ( isset( $args['scope'] ) ) {
			$snippet->scope = $args['scope'];
		} elseif ( $creating ) {
			$snippet->scope = 'global';
		}
		if ( isset( $args['code'] ) ) {
			$code = preg_replace( '/^\s*<\?php\s*/i', '', (string) $args['code'] );
			if ( self::is_php_scope( $snippet->scope ) ) {
				self::check_php( $code );
			}
			$snippet->code = $code;
		}
		if ( isset( $args['name'] ) ) {
			$snippet->name = sanitize_text_field( $args['name'] );
		}
		if ( isset( $args['description'] ) ) {
			$snippet->desc = wp_kses_post( $args['description'] );
		}
		if ( isset( $args['tags'] ) ) {
			$snippet->tags = array_map( 'sanitize_text_field', (array) $args['tags'] );
		}
		if ( isset( $args['priority'] ) ) {
			$snippet->priority = (int) $args['priority'];
		}

		$saved = \Code_Snippets\save_snippet( $snippet );
		$id    = is_object( $saved ) ? (int) $saved->id : (int) $saved;
		if ( ! $id ) {
			throw new Pont_MCP_Tool_Error( 'Enregistrement refusé par Code Snippets.' );
		}

		return array(
			'message' => $creating ? 'Extrait créé (inactif).' : 'Extrait modifié.',
			'snippet' => self::describe_snippet( \Code_Snippets\get_snippet( $id ), false ),
		);
	}

	public static function set_snippet_active( array $args ) {
		self::snippets_api();
		self::require_snippets_allowed();

		$id      = (int) $args['id'];
		$snippet = \Code_Snippets\get_snippet( $id );
		if ( ! $snippet || ! $snippet->id ) {
			throw new Pont_MCP_Tool_Error( 'Extrait ' . $id . ' introuvable.' );
		}

		if ( $args['active'] ) {
			if ( self::is_php_scope( $snippet->scope ) ) {
				self::check_php( (string) $snippet->code );
			}
			$result = \Code_Snippets\activate_snippet( $id );
			if ( is_string( $result ) ) {
				throw new Pont_MCP_Tool_Error( 'Activation refusée par Code Snippets : ' . $result );
			}
		} else {
			\Code_Snippets\deactivate_snippet( $id );
		}

		$snippet = \Code_Snippets\get_snippet( $id );
		return array(
			'message' => $snippet->active ? 'Extrait actif.' : 'Extrait inactif.',
			'snippet' => self::describe_snippet( $snippet, false ),
		);
	}

	private static function is_php_scope( $scope ) {
		return in_array( $scope, array( 'global', 'admin', 'front-end', 'single-use' ), true );
	}

	/** Vérifie la syntaxe PHP sans exécuter le code. */
	private static function check_php( $code ) {
		try {
			token_get_all( '<?php ' . $code, TOKEN_PARSE );
		} catch ( ParseError $e ) {
			throw new Pont_MCP_Tool_Error( 'Erreur de syntaxe PHP (ligne ' . $e->getLine() . ') : ' . $e->getMessage() );
		}
	}
}
