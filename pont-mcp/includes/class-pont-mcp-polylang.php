<?php
/**
 * Prise en charge de Polylang (sites multilingues), via son API publique pll_*().
 * Tout est inactif si Polylang n'est pas installé.
 */

defined( 'ABSPATH' ) || exit;

class Pont_MCP_Polylang {

	public static function active() {
		return function_exists( 'pll_languages_list' ) && function_exists( 'pll_set_post_language' );
	}

	public static function definitions() {
		return array(
			'list_languages' => array(
				'title'       => 'Lister les langues du site',
				'description' => 'Langues configurées dans Polylang (code à utiliser dans le paramètre language des autres outils), langue par défaut et nombre de contenus par langue.',
				'level'       => Pont_MCP_Settings::LEVEL_READ,
				'handler'     => array( __CLASS__, 'list_languages' ),
				'properties'  => array(),
			),
			'get_string_translations'    => array(
				'title'       => 'Lire les traductions de chaînes',
				'description' => 'Sites multilingues (Polylang) : traductions, dans chaque langue, de chaînes du site (Langues › Traductions). Par défaut : nom du site et slogan.',
				'level'       => Pont_MCP_Settings::LEVEL_READ,
				'handler'     => array( __CLASS__, 'get_string_translations' ),
				'properties'  => array(
					'strings' => array(
						'type'        => 'array',
						'items'       => array( 'type' => 'string' ),
						'description' => 'Chaînes originales (dans la langue par défaut). Défaut : nom du site et slogan.',
					),
				),
			),
			'update_string_translations' => array(
				'title'       => 'Traduire des chaînes',
				'description' => 'Sites multilingues (Polylang) : enregistre les traductions de chaînes du site (nom du site, slogan, titres de widgets…) pour une langue, comme dans Langues › Traductions.',
				'level'       => Pont_MCP_Settings::LEVEL_FULL,
				'handler'     => array( __CLASS__, 'update_string_translations' ),
				'properties'  => array(
					'language'     => array( 'type' => 'string', 'description' => 'Code de la langue cible (ex. en).' ),
					'translations' => array( 'type' => 'object', 'description' => 'Objet { chaîne originale: traduction }.' ),
				),
				'required'    => array( 'language', 'translations' ),
			),
		);
	}

	public static function list_languages() {
		if ( ! self::active() ) {
			return array(
				'multilingual' => false,
				'message'      => 'Polylang n’est pas actif sur ce site : il est monolingue (' . get_bloginfo( 'language' ) . ').',
			);
		}
		$languages = array();
		foreach ( pll_languages_list( array( 'fields' => '' ) ) as $language ) {
			$languages[] = array(
				'code'   => $language->slug,
				'name'   => $language->name,
				'locale' => $language->locale,
				'posts'  => isset( $language->count ) ? (int) $language->count : null,
				'home'   => function_exists( 'pll_home_url' ) ? pll_home_url( $language->slug ) : null,
			);
		}
		return array(
			'multilingual' => true,
			'default'      => pll_default_language( 'slug' ),
			'languages'    => $languages,
			'hint'         => 'Pour traduire un contenu : create_content avec language et translation_of (ID de l’original). Les catégories sont propres à chaque langue.',
		);
	}

	public static function get_string_translations( array $args ) {
		self::require_strings_api();
		$strings = ! empty( $args['strings'] ) ? array_map( 'strval', $args['strings'] ) : self::default_strings();

		$result = array();
		foreach ( pll_languages_list( array( 'fields' => 'slug' ) ) as $slug ) {
			$mo = self::load_mo( $slug );
			foreach ( $strings as $original ) {
				$translation                         = $mo->translate( $original );
				$result[ $original ][ $slug ] = array(
					'translation' => $translation,
					'translated'  => $translation !== $original,
				);
			}
		}
		return array(
			'default_language' => pll_default_language( 'slug' ),
			'strings'          => $result,
		);
	}

	public static function update_string_translations( array $args ) {
		self::require_strings_api();
		$language = self::check_language( $args['language'] );
		$mo       = self::load_mo( $language );
		$done     = array();
		foreach ( (array) $args['translations'] as $original => $translation ) {
			$original    = (string) $original;
			$translation = sanitize_text_field( (string) $translation );
			if ( '' === $original ) {
				continue;
			}
			$mo->add_entry( $mo->make_entry( $original, $translation ) );
			$done[ $original ] = $translation;
		}
		if ( ! $done ) {
			throw new Pont_MCP_Tool_Error( 'Aucune traduction fournie.' );
		}
		$mo->export_to_db( PLL()->model->get_language( $language ) );
		return array(
			'message'      => count( $done ) . ' traduction(s) enregistrée(s) pour « ' . $language . ' ».',
			'translations' => $done,
			'note'         => 'Seules les chaînes enregistrées par Polylang ou par le thème (visibles dans Langues › Traductions) sont utilisées sur le site.',
		);
	}

	private static function require_strings_api() {
		if ( ! self::active() ) {
			throw new Pont_MCP_Tool_Error( 'Ce site n’utilise pas Polylang.' );
		}
		if ( ! class_exists( 'PLL_MO' ) || ! function_exists( 'PLL' ) ) {
			throw new Pont_MCP_Tool_Error( 'Version de Polylang non prise en charge pour la traduction de chaînes.' );
		}
	}

	private static function load_mo( $slug ) {
		$language = PLL()->model->get_language( $slug );
		if ( ! $language ) {
			throw new Pont_MCP_Tool_Error( 'Langue inconnue : ' . $slug . '.' );
		}
		$mo = new PLL_MO();
		$mo->import_from_db( $language );
		return $mo;
	}

	/**
	 * Nom et slogan tels qu'enregistrés (sans le filtre de traduction de Polylang).
	 */
	private static function default_strings() {
		global $wpdb;
		$values = array();
		foreach ( array( 'blogname', 'blogdescription' ) as $option ) {
			$value = $wpdb->get_var( $wpdb->prepare( "SELECT option_value FROM {$wpdb->options} WHERE option_name = %s", $option ) );
			if ( '' !== (string) $value ) {
				$values[] = (string) $value;
			}
		}
		return $values;
	}

	/**
	 * Élément de menu « sélecteur de langues » de Polylang.
	 */
	public static function switcher_meta( $show_flags ) {
		return array(
			'hide_if_no_translation' => 0,
			'hide_current'           => 0,
			'force_home'             => 0,
			'show_flags'             => $show_flags ? 1 : 0,
			'show_names'             => 1,
			'dropdown'               => 0,
		);
	}

	/**
	 * Propriétés de schéma ajoutées aux outils de contenu.
	 */
	public static function content_properties( $with_translation_of ) {
		$props = array(
			'language' => array( 'type' => 'string', 'description' => 'Sites multilingues (Polylang) : code de langue, ex. fr, en (voir list_languages).' ),
		);
		if ( $with_translation_of ) {
			$props['translation_of'] = array( 'type' => 'integer', 'description' => 'Sites multilingues : ID du contenu dont celui-ci est la traduction (les deux seront liés).' );
		}
		return $props;
	}

	public static function check_language( $code ) {
		if ( ! self::active() ) {
			throw new Pont_MCP_Tool_Error( 'Ce site n’utilise pas Polylang : le paramètre language ne s’applique pas.' );
		}
		$codes = pll_languages_list( array( 'fields' => 'slug' ) );
		if ( ! in_array( $code, $codes, true ) ) {
			throw new Pont_MCP_Tool_Error( 'Langue inconnue : ' . $code . '. Langues du site : ' . implode( ', ', $codes ) . '.' );
		}
		return $code;
	}

	/**
	 * Argument de requête : une langue précise, ou toutes les langues (Polylang filtre sinon sur la langue courante).
	 */
	public static function query_args( $language ) {
		if ( ! self::active() ) {
			return array();
		}
		return array( 'lang' => $language ? self::check_language( $language ) : '' );
	}

	public static function post_language( $post_id ) {
		return self::active() ? ( pll_get_post_language( $post_id, 'slug' ) ?: null ) : null;
	}

	public static function post_translations( $post_id ) {
		if ( ! self::active() ) {
			return null;
		}
		$translations = array();
		foreach ( pll_get_post_translations( $post_id ) as $lang => $id ) {
			if ( (int) $id === (int) $post_id ) {
				continue;
			}
			$translations[ $lang ] = array(
				'id'     => (int) $id,
				'title'  => get_the_title( $id ),
				'status' => get_post_status( $id ),
			);
		}
		return $translations;
	}

	/**
	 * Vérifie language / translation_of avant toute écriture.
	 */
	public static function validate( array $args, $post_id = 0 ) {
		if ( empty( $args['language'] ) && empty( $args['translation_of'] ) ) {
			return;
		}
		if ( ! self::active() ) {
			throw new Pont_MCP_Tool_Error( 'Ce site n’utilise pas Polylang : les paramètres language et translation_of ne s’appliquent pas.' );
		}
		$language = ! empty( $args['language'] ) ? self::check_language( $args['language'] ) : ( $post_id ? self::post_language( $post_id ) : null );
		if ( ! empty( $args['translation_of'] ) ) {
			if ( ! $language ) {
				throw new Pont_MCP_Tool_Error( 'Indiquez la langue (language) de la traduction.' );
			}
			if ( ! get_post( (int) $args['translation_of'] ) ) {
				throw new Pont_MCP_Tool_Error( 'Contenu original ' . $args['translation_of'] . ' introuvable.' );
			}
			if ( self::post_language( (int) $args['translation_of'] ) === $language ) {
				throw new Pont_MCP_Tool_Error( 'L’original est déjà en « ' . $language . ' » : une traduction doit être dans une autre langue.' );
			}
		}
	}

	/**
	 * Définit la langue d'un contenu et, le cas échéant, le lie à l'original.
	 */
	public static function apply( $post_id, array $args ) {
		if ( empty( $args['language'] ) && empty( $args['translation_of'] ) ) {
			return;
		}
		if ( ! self::active() ) {
			throw new Pont_MCP_Tool_Error( 'Ce site n’utilise pas Polylang : language et translation_of ne s’appliquent pas (le contenu a été enregistré).' );
		}

		$language = ! empty( $args['language'] ) ? self::check_language( $args['language'] ) : self::post_language( $post_id );
		if ( ! $language ) {
			throw new Pont_MCP_Tool_Error( 'Indiquez la langue (language) de la traduction.' );
		}
		pll_set_post_language( $post_id, $language );

		if ( ! empty( $args['translation_of'] ) ) {
			$original = get_post( (int) $args['translation_of'] );
			if ( ! $original ) {
				throw new Pont_MCP_Tool_Error( 'Contenu original ' . $args['translation_of'] . ' introuvable (le contenu a été enregistré sans lien de traduction).' );
			}
			$original_language = self::post_language( $original->ID );
			if ( $original_language === $language ) {
				throw new Pont_MCP_Tool_Error( 'L’original est déjà en « ' . $language . ' » : une traduction doit être dans une autre langue.' );
			}
			$translations = pll_get_post_translations( $original->ID );
			if ( ! $translations && $original_language ) {
				$translations = array( $original_language => $original->ID );
			}
			$translations[ $language ] = $post_id;
			pll_save_post_translations( $translations );
		}
	}

	/**
	 * Recherche un terme par nom dans une langue donnée, pour ne pas mélanger les catégories des langues.
	 */
	public static function find_term( $name, $taxonomy, $language ) {
		if ( ! self::active() || ! $language ) {
			return null;
		}
		$terms = get_terms(
			array(
				'taxonomy'   => $taxonomy,
				'name'       => $name,
				'hide_empty' => false,
				'lang'       => $language,
			)
		);
		return ( $terms && ! is_wp_error( $terms ) ) ? $terms[0] : null;
	}

	public static function term_language( $term_id ) {
		return ( self::active() && function_exists( 'pll_get_term_language' ) ) ? pll_get_term_language( $term_id, 'slug' ) : null;
	}

	public static function set_term_language( $term_id, $language ) {
		if ( self::active() && $language && function_exists( 'pll_set_term_language' ) ) {
			pll_set_term_language( $term_id, $language );
		}
	}

	/**
	 * Emplacements de menus par langue : Polylang les stocke dans ses propres options.
	 */
	public static function set_menu_location( $location, $menu_id, $language ) {
		self::check_language( $language );
		$options = get_option( 'polylang' );
		if ( ! is_array( $options ) ) {
			throw new Pont_MCP_Tool_Error( 'Options Polylang introuvables.' );
		}
		$options['nav_menus'][ get_stylesheet() ][ $location ][ $language ] = (int) $menu_id;
		update_option( 'polylang', $options );
	}
}
