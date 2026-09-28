<?php
/**
 * Outils d'apparence : menus, widgets et réglages du Customizer (options du thème).
 *
 * Les réglages du Customizer passent par WP_Customize_Manager, exactement comme l'écran
 * Apparence › Personnaliser : les valeurs sont validées et assainies par le thème lui-même.
 */

defined( 'ABSPATH' ) || exit;

class Pont_MCP_Tools_Appearance {

	/** Sections du Customizer gérées par d'autres outils ou sans intérêt ici. */
	const SKIPPED_SECTION_PREFIXES = array( 'sidebar-widgets-', 'nav_menu', 'menu_locations', 'add_menu', 'installed_themes', 'wporg_themes', 'custom_css' );

	public static function definitions() {
		$read = Pont_MCP_Settings::LEVEL_READ;
		$full = Pont_MCP_Settings::LEVEL_FULL;

		return array(
			'create_menu'               => array(
				'title'       => 'Créer un menu',
				'description' => 'Crée un menu de navigation (thème classique) et peut l’affecter à un emplacement (voir theme_info.nav_menu_locations).',
				'level'       => $full,
				'handler'     => array( __CLASS__, 'create_menu' ),
				'properties'  => array(
					'name'     => array( 'type' => 'string', 'description' => 'Nom du menu.' ),
					'location' => array( 'type' => 'string', 'description' => 'Emplacement à lui affecter (ex. primary).' ),
				),
				'required'    => array( 'name' ),
			),
			'add_menu_item'             => array(
				'title'       => 'Ajouter un lien à un menu',
				'description' => 'Ajoute une page, un article, une catégorie ou un lien personnalisé à un menu.',
				'level'       => $full,
				'handler'     => array( __CLASS__, 'add_menu_item' ),
				'properties'  => array(
					'menu_id'   => array( 'type' => 'integer', 'description' => 'ID du menu (voir list_menus).' ),
					'type'      => array( 'type' => 'string', 'enum' => array( 'page', 'post', 'category', 'custom', 'language_switcher' ), 'description' => 'Type de lien (défaut : page). language_switcher : sélecteur de langues Polylang (une entrée par langue).' ),
					'show_flags' => array( 'type' => 'boolean', 'description' => 'language_switcher : afficher les drapeaux de Polylang (défaut : false).' ),
					'object_id' => array( 'type' => 'integer', 'description' => 'ID de la page, de l’article ou de la catégorie (sauf type custom).' ),
					'url'       => array( 'type' => 'string', 'description' => 'Adresse (type custom uniquement).' ),
					'title'     => array( 'type' => 'string', 'description' => 'Libellé (défaut : titre de l’élément lié).' ),
					'parent_id' => array( 'type' => 'integer', 'description' => 'ID de l’élément de menu parent, pour un sous-menu.' ),
					'position'  => array( 'type' => 'integer', 'description' => 'Position (1 = premier). Défaut : à la fin.' ),
				),
				'required'    => array( 'menu_id' ),
			),
			'delete_menu_item'          => array(
				'title'       => 'Retirer un lien d’un menu',
				'description' => 'Supprime un élément de menu (le contenu lié n’est pas touché).',
				'level'       => $full,
				'destructive' => true,
				'handler'     => array( __CLASS__, 'delete_menu_item' ),
				'properties'  => array( 'item_id' => array( 'type' => 'integer', 'description' => 'ID de l’élément de menu (voir list_menus).' ) ),
				'required'    => array( 'item_id' ),
			),
			'assign_menu_location'      => array(
				'title'       => 'Affecter un menu à un emplacement',
				'description' => 'Place un menu dans un emplacement du thème (0 pour vider l’emplacement).',
				'level'       => $full,
				'handler'     => array( __CLASS__, 'assign_menu_location' ),
				'properties'  => array(
					'location' => array( 'type' => 'string', 'description' => 'Emplacement (voir theme_info.nav_menu_locations).' ),
					'menu_id'  => array( 'type' => 'integer', 'description' => 'ID du menu, ou 0.' ),
					'language' => array( 'type' => 'string', 'description' => 'Sites multilingues (Polylang) : langue pour laquelle affecter ce menu.' ),
				),
				'required'    => array( 'location', 'menu_id' ),
			),
			'list_widgets'              => array(
				'title'       => 'Lister les widgets',
				'description' => 'Zones de widgets du thème (barres latérales, pied de page) avec leurs widgets et réglages, et les types de widgets disponibles.',
				'level'       => $read,
				'handler'     => array( __CLASS__, 'list_widgets' ),
				'properties'  => array(),
			),
			'save_widget'               => array(
				'title'       => 'Ajouter ou modifier un widget',
				'description' => 'Sans widget_id : ajoute un widget (type + sidebar requis). Avec widget_id : fusionne les réglages fournis et peut déplacer le widget. Réglages courants : text → title, text ; custom_html → title, content ; block → content (HTML de blocs) ; nav_menu → title, nav_menu (ID).',
				'level'       => $full,
				'handler'     => array( __CLASS__, 'save_widget' ),
				'properties'  => array(
					'widget_id' => array( 'type' => 'string', 'description' => 'ID du widget à modifier (ex. text-3).' ),
					'type'      => array( 'type' => 'string', 'description' => 'Type de widget à créer (ex. text, custom_html, block, nav_menu, categories).' ),
					'sidebar'   => array( 'type' => 'string', 'description' => 'Zone de destination (ex. sidebar-1).' ),
					'position'  => array( 'type' => 'integer', 'description' => 'Position dans la zone (1 = premier). Défaut : à la fin, ou inchangée.' ),
					'settings'  => array( 'type' => 'object', 'description' => 'Réglages du widget.' ),
				),
			),
			'remove_widget'             => array(
				'title'       => 'Retirer un widget',
				'description' => 'Retire un widget de sa zone. Il est conservé dans les « Widgets inactifs » (récupérable).',
				'level'       => $full,
				'destructive' => true,
				'handler'     => array( __CLASS__, 'remove_widget' ),
				'properties'  => array( 'widget_id' => array( 'type' => 'string', 'description' => 'ID du widget.' ) ),
				'required'    => array( 'widget_id' ),
			),
			'list_customizer_settings'  => array(
				'title'       => 'Lister les options du thème',
				'description' => 'Options d’Apparence › Personnaliser (identité du site, page d’accueil, options propres au thème : diaporama, mise en page, couleurs…). Sans section : liste des sections. Avec section : réglages, libellés, choix possibles et valeurs actuelles.',
				'level'       => $read,
				'handler'     => array( __CLASS__, 'list_customizer_settings' ),
				'properties'  => array(
					'section' => array( 'type' => 'string', 'description' => 'ID de section (voir la liste sans paramètre).' ),
					'search'  => array( 'type' => 'string', 'description' => 'Filtre sur le libellé ou l’ID des réglages, toutes sections confondues.' ),
				),
			),
			'update_customizer_settings' => array(
				'title'       => 'Modifier les options du thème',
				'description' => 'Enregistre des réglages du Customizer, validés par le thème comme dans Apparence › Personnaliser. Clés : IDs renvoyés par list_customizer_settings.',
				'level'       => $full,
				'handler'     => array( __CLASS__, 'update_customizer_settings' ),
				'properties'  => array(
					'values' => array( 'type' => 'object', 'description' => 'Objet { id_du_réglage: valeur }.' ),
				),
				'required'    => array( 'values' ),
			),
		);
	}

	/* ------------------------------------------------------------------ */
	/* Menus                                                               */
	/* ------------------------------------------------------------------ */

	public static function create_menu( array $args ) {
		self::require_cap( 'edit_theme_options' );
		$menu_id = wp_create_nav_menu( $args['name'] );
		if ( is_wp_error( $menu_id ) ) {
			throw new Pont_MCP_Tool_Error( $menu_id->get_error_message() );
		}
		$result = array( 'message' => 'Menu créé.', 'menu_id' => (int) $menu_id );
		if ( ! empty( $args['location'] ) ) {
			self::set_location( $args['location'], $menu_id );
			$result['location'] = $args['location'];
		}
		return $result;
	}

	public static function add_menu_item( array $args ) {
		self::require_cap( 'edit_theme_options' );
		$menu = wp_get_nav_menu_object( $args['menu_id'] );
		if ( ! $menu ) {
			throw new Pont_MCP_Tool_Error( 'Menu ' . $args['menu_id'] . ' introuvable.' );
		}

		$type = $args['type'] ?? 'page';
		$item = array(
			'menu-item-status'    => 'publish',
			'menu-item-parent-id' => (int) ( $args['parent_id'] ?? 0 ),
		);
		if ( isset( $args['title'] ) ) {
			$item['menu-item-title'] = $args['title'];
		}
		if ( isset( $args['position'] ) ) {
			$item['menu-item-position'] = max( 1, (int) $args['position'] );
		}

		if ( 'language_switcher' === $type ) {
			if ( ! Pont_MCP_Polylang::active() ) {
				throw new Pont_MCP_Tool_Error( 'Le sélecteur de langues nécessite Polylang.' );
			}
			$item['menu-item-type']  = 'custom';
			$item['menu-item-url']   = '#pll_switcher';
			$item['menu-item-title'] = $args['title'] ?? 'Langues';
		} elseif ( 'custom' === $type ) {
			if ( empty( $args['url'] ) ) {
				throw new Pont_MCP_Tool_Error( 'Paramètre url requis pour un lien personnalisé.' );
			}
			if ( empty( $args['title'] ) ) {
				throw new Pont_MCP_Tool_Error( 'Paramètre title requis pour un lien personnalisé.' );
			}
			$item['menu-item-type'] = 'custom';
			$item['menu-item-url']  = esc_url_raw( $args['url'] );
		} elseif ( 'category' === $type ) {
			$term = get_term( (int) ( $args['object_id'] ?? 0 ), 'category' );
			if ( ! $term || is_wp_error( $term ) ) {
				throw new Pont_MCP_Tool_Error( 'Catégorie introuvable.' );
			}
			$item['menu-item-type']      = 'taxonomy';
			$item['menu-item-object']    = 'category';
			$item['menu-item-object-id'] = $term->term_id;
		} else {
			$post = get_post( (int) ( $args['object_id'] ?? 0 ) );
			if ( ! $post || $post->post_type !== $type ) {
				throw new Pont_MCP_Tool_Error( ucfirst( $type ) . ' introuvable : indiquez object_id.' );
			}
			if ( 'publish' !== $post->post_status ) {
				throw new Pont_MCP_Tool_Error( 'Ce contenu n’est pas publié : le lien ne s’afficherait pas dans le menu.' );
			}
			$item['menu-item-type']      = 'post_type';
			$item['menu-item-object']    = $type;
			$item['menu-item-object-id'] = $post->ID;
		}

		$item_id = wp_update_nav_menu_item( $menu->term_id, 0, wp_slash( $item ) );
		if ( is_wp_error( $item_id ) ) {
			throw new Pont_MCP_Tool_Error( $item_id->get_error_message() );
		}
		if ( 'language_switcher' === $type ) {
			update_post_meta( $item_id, '_pll_menu_item', Pont_MCP_Polylang::switcher_meta( ! empty( $args['show_flags'] ) ) );
		}
		return array( 'message' => 'Lien ajouté au menu « ' . $menu->name . ' ».', 'item_id' => (int) $item_id );
	}

	public static function delete_menu_item( array $args ) {
		self::require_cap( 'edit_theme_options' );
		$item = get_post( $args['item_id'] );
		if ( ! $item || 'nav_menu_item' !== $item->post_type ) {
			throw new Pont_MCP_Tool_Error( 'Élément de menu introuvable.' );
		}
		$label = wp_setup_nav_menu_item( $item )->title;
		wp_delete_post( $item->ID, true );
		return array( 'message' => 'Lien « ' . $label . ' » retiré du menu.' );
	}

	public static function assign_menu_location( array $args ) {
		self::require_cap( 'edit_theme_options' );
		if ( $args['menu_id'] && ! wp_get_nav_menu_object( $args['menu_id'] ) ) {
			throw new Pont_MCP_Tool_Error( 'Menu ' . $args['menu_id'] . ' introuvable.' );
		}
		if ( ! empty( $args['language'] ) ) {
			$registered = get_registered_nav_menus();
			if ( ! isset( $registered[ $args['location'] ] ) ) {
				throw new Pont_MCP_Tool_Error( 'Emplacement inconnu : ' . $args['location'] . '.' );
			}
			Pont_MCP_Polylang::set_menu_location( $args['location'], $args['menu_id'], $args['language'] );
			if ( pll_default_language( 'slug' ) === $args['language'] ) {
				self::set_location( $args['location'], $args['menu_id'] );
			}
			return array( 'message' => 'Menu affecté à l’emplacement pour la langue « ' . $args['language'] . ' ».' );
		}
		self::set_location( $args['location'], $args['menu_id'] );
		return array( 'message' => $args['menu_id'] ? 'Menu affecté à l’emplacement.' : 'Emplacement vidé.' );
	}

	private static function set_location( $location, $menu_id ) {
		$registered = get_registered_nav_menus();
		if ( ! isset( $registered[ $location ] ) ) {
			throw new Pont_MCP_Tool_Error( 'Emplacement inconnu : ' . $location . '. Emplacements du thème : ' . implode( ', ', array_keys( $registered ) ) . '.' );
		}
		$locations              = get_nav_menu_locations();
		$locations[ $location ] = (int) $menu_id;
		set_theme_mod( 'nav_menu_locations', $locations );
	}

	/* ------------------------------------------------------------------ */
	/* Widgets                                                             */
	/* ------------------------------------------------------------------ */

	public static function list_widgets() {
		global $wp_registered_sidebars, $wp_widget_factory;

		$sidebars_widgets = self::sidebars_widgets();
		$areas            = array();
		foreach ( $sidebars_widgets as $sidebar_id => $widget_ids ) {
			if ( 'array_version' === $sidebar_id ) {
				continue;
			}
			$registered = $wp_registered_sidebars[ $sidebar_id ] ?? null;
			if ( ! $registered && 'wp_inactive_widgets' !== $sidebar_id ) {
				continue;
			}
			$widgets = array();
			foreach ( (array) $widget_ids as $widget_id ) {
				$widgets[] = self::describe_widget( $widget_id );
			}
			$areas[] = array(
				'id'          => $sidebar_id,
				'name'        => $registered ? $registered['name'] : 'Widgets inactifs',
				'description' => $registered ? $registered['description'] : '',
				'widgets'     => $widgets,
			);
		}
		// Zones déclarées par le thème mais encore vides.
		foreach ( (array) $wp_registered_sidebars as $sidebar_id => $registered ) {
			if ( ! isset( $sidebars_widgets[ $sidebar_id ] ) ) {
				$areas[] = array(
					'id'          => $sidebar_id,
					'name'        => $registered['name'],
					'description' => $registered['description'],
					'widgets'     => array(),
				);
			}
		}

		$types = array();
		foreach ( $wp_widget_factory->widgets as $widget ) {
			$types[ $widget->id_base ] = $widget->name;
		}

		return array(
			'areas'           => $areas,
			'available_types' => $types,
			'block_widgets'   => function_exists( 'wp_use_widgets_block_editor' ) && wp_use_widgets_block_editor(),
		);
	}

	public static function save_widget( array $args ) {
		self::require_cap( 'edit_theme_options' );
		$settings = isset( $args['settings'] ) ? (array) $args['settings'] : array();

		if ( ! empty( $args['widget_id'] ) ) {
			list( $widget, $number ) = self::parse_widget_id( $args['widget_id'] );
			$widget_id               = $args['widget_id'];
			$current_sidebar         = self::widget_sidebar( $widget_id );
			if ( null === $current_sidebar ) {
				throw new Pont_MCP_Tool_Error( 'Widget ' . $widget_id . ' introuvable dans les zones de widgets.' );
			}
		} else {
			if ( empty( $args['type'] ) || empty( $args['sidebar'] ) ) {
				throw new Pont_MCP_Tool_Error( 'Pour créer un widget, indiquez type et sidebar (voir list_widgets).' );
			}
			$widget          = self::widget_type( $args['type'] );
			$all             = $widget->get_settings();
			$number          = $all ? max( array_filter( array_keys( $all ), 'is_int' ) + array( 0 ) ) + 1 : 2;
			$number          = max( 2, $number );
			$widget_id       = $widget->id_base . '-' . $number;
			$current_sidebar = null;
		}

		// Assainissement par le widget lui-même, comme dans l'administration.
		$all      = $widget->get_settings();
		$old      = isset( $all[ $number ] ) ? $all[ $number ] : array();
		$instance = $widget->update( array_merge( $old, $settings ), $old );
		if ( false === $instance ) {
			throw new Pont_MCP_Tool_Error( 'Réglages refusés par le widget.' );
		}
		$all[ $number ] = $instance;
		$widget->save_settings( $all );

		$target = $args['sidebar'] ?? $current_sidebar;
		if ( $target !== $current_sidebar || isset( $args['position'] ) ) {
			self::place_widget( $widget_id, $target, $args['position'] ?? null );
		}

		return array(
			'message'   => $current_sidebar ? 'Widget modifié.' : 'Widget ajouté.',
			'widget'    => self::describe_widget( $widget_id ),
			'sidebar'   => $target,
		);
	}

	public static function remove_widget( array $args ) {
		self::require_cap( 'edit_theme_options' );
		if ( null === self::widget_sidebar( $args['widget_id'] ) ) {
			throw new Pont_MCP_Tool_Error( 'Widget ' . $args['widget_id'] . ' introuvable.' );
		}
		self::place_widget( $args['widget_id'], 'wp_inactive_widgets', null );
		return array( 'message' => 'Widget déplacé dans les widgets inactifs (récupérable dans Apparence › Widgets).' );
	}

	private static function sidebars_widgets() {
		$sidebars = get_option( 'sidebars_widgets', array() );
		return is_array( $sidebars ) ? $sidebars : array();
	}

	private static function widget_sidebar( $widget_id ) {
		foreach ( self::sidebars_widgets() as $sidebar_id => $ids ) {
			if ( 'array_version' !== $sidebar_id && in_array( $widget_id, (array) $ids, true ) ) {
				return $sidebar_id;
			}
		}
		return null;
	}

	private static function place_widget( $widget_id, $sidebar, $position ) {
		global $wp_registered_sidebars;
		if ( 'wp_inactive_widgets' !== $sidebar && ! isset( $wp_registered_sidebars[ $sidebar ] ) ) {
			throw new Pont_MCP_Tool_Error( 'Zone de widgets inconnue : ' . $sidebar . '. Zones : ' . implode( ', ', array_keys( (array) $wp_registered_sidebars ) ) . '.' );
		}
		$sidebars = self::sidebars_widgets();
		foreach ( $sidebars as $id => $ids ) {
			if ( 'array_version' !== $id && is_array( $ids ) ) {
				$sidebars[ $id ] = array_values( array_diff( $ids, array( $widget_id ) ) );
			}
		}
		$list  = isset( $sidebars[ $sidebar ] ) ? (array) $sidebars[ $sidebar ] : array();
		$index = null === $position ? count( $list ) : min( count( $list ), max( 0, (int) $position - 1 ) );
		array_splice( $list, $index, 0, array( $widget_id ) );
		$sidebars[ $sidebar ] = $list;
		wp_set_sidebars_widgets( $sidebars );
	}

	private static function describe_widget( $widget_id ) {
		try {
			list( $widget, $number ) = self::parse_widget_id( $widget_id );
		} catch ( Pont_MCP_Tool_Error $e ) {
			return array( 'id' => $widget_id, 'type' => null, 'settings' => null );
		}
		$all = $widget->get_settings();
		return array(
			'id'       => $widget_id,
			'type'     => $widget->id_base,
			'name'     => $widget->name,
			'settings' => $all[ $number ] ?? array(),
		);
	}

	private static function parse_widget_id( $widget_id ) {
		if ( ! preg_match( '/^(.+)-(\d+)$/', (string) $widget_id, $m ) ) {
			throw new Pont_MCP_Tool_Error( 'ID de widget invalide : ' . $widget_id );
		}
		return array( self::widget_type( $m[1] ), (int) $m[2] );
	}

	private static function widget_type( $id_base ) {
		global $wp_widget_factory;
		foreach ( $wp_widget_factory->widgets as $widget ) {
			if ( $widget->id_base === $id_base ) {
				return $widget;
			}
		}
		throw new Pont_MCP_Tool_Error( 'Type de widget inconnu : ' . $id_base . ' (voir list_widgets.available_types).' );
	}

	/* ------------------------------------------------------------------ */
	/* Customizer                                                          */
	/* ------------------------------------------------------------------ */

	public static function list_customizer_settings( array $args ) {
		self::require_cap( 'customize' );
		$manager = self::customizer();

		if ( empty( $args['section'] ) && empty( $args['search'] ) ) {
			$sections = array();
			foreach ( self::controls_by_section( $manager ) as $section_id => $controls ) {
				$section    = $manager->get_section( $section_id );
				$panel      = $section && $section->panel ? $manager->get_panel( $section->panel ) : null;
				$sections[] = array(
					'id'       => $section_id,
					'title'    => $section ? wp_strip_all_tags( $section->title ) : $section_id,
					'panel'    => $panel ? wp_strip_all_tags( $panel->title ) : null,
					'settings' => count( $controls ),
				);
			}
			return array(
				'sections' => $sections,
				'hint'     => 'Appelez à nouveau avec section pour voir les réglages et leurs valeurs.',
			);
		}

		$search  = isset( $args['search'] ) ? strtolower( $args['search'] ) : '';
		$results = array();
		foreach ( self::controls_by_section( $manager ) as $section_id => $controls ) {
			if ( ! empty( $args['section'] ) && $section_id !== $args['section'] ) {
				continue;
			}
			foreach ( $controls as $control ) {
				$setting = $control->setting;
				$label   = wp_strip_all_tags( (string) $control->label );
				if ( $search && false === strpos( strtolower( $label . ' ' . $setting->id ), $search ) ) {
					continue;
				}
				$entry = array(
					'id'      => $setting->id,
					'label'   => $label,
					'type'    => $control->type,
					'section' => $section_id,
					'value'   => $setting->value(),
					'default' => $setting->default,
				);
				if ( $control->description ) {
					$entry['description'] = wp_strip_all_tags( (string) $control->description );
				}
				if ( ! empty( $control->choices ) ) {
					$entry['choices'] = array_map( 'wp_strip_all_tags', array_map( 'strval', (array) $control->choices ) );
				}
				$results[] = $entry;
			}
		}
		if ( ! $results ) {
			throw new Pont_MCP_Tool_Error( 'Aucun réglage trouvé. Appelez list_customizer_settings sans paramètre pour voir les sections.' );
		}
		return $results;
	}

	public static function update_customizer_settings( array $args ) {
		self::require_cap( 'customize' );
		$manager = self::customizer();
		$values  = (array) $args['values'];
		if ( ! $values ) {
			throw new Pont_MCP_Tool_Error( 'Aucune valeur fournie.' );
		}

		$validities = $manager->validate_setting_values(
			$values,
			array(
				'validate_capability' => true,
				'validate_existence'  => true,
			)
		);
		$errors = array();
		foreach ( $validities as $id => $validity ) {
			if ( is_wp_error( $validity ) ) {
				$errors[] = $id . ' : ' . $validity->get_error_message();
			}
		}
		if ( $errors ) {
			throw new Pont_MCP_Tool_Error( 'Rien n’a été enregistré. Valeurs refusées — ' . implode( ' ; ', $errors ) );
		}

		$saved = array();
		foreach ( $values as $id => $value ) {
			$manager->set_post_value( $id, $value );
		}
		foreach ( array_keys( $values ) as $id ) {
			$setting = $manager->get_setting( $id );
			if ( false !== $setting->save() ) {
				$saved[ $id ] = $setting->value();
			}
		}

		return array(
			'message' => count( $saved ) . ' réglage(s) enregistré(s), visibles immédiatement sur le site.',
			'saved'   => $saved,
		);
	}

	/**
	 * Construit le gestionnaire du Customizer hors de l'écran Personnaliser.
	 */
	private static function customizer() {
		global $wp_customize;
		if ( $wp_customize instanceof WP_Customize_Manager ) {
			return $wp_customize;
		}
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php';
		$wp_customize = new WP_Customize_Manager( array( 'settings_previewed' => false ) );
		$wp_customize->wp_loaded(); // Déclenche customize_register (thème, extensions, cœur).
		return $wp_customize;
	}

	/**
	 * Contrôles regroupés par section, hors widgets, menus, thèmes et CSS (gérés par d'autres outils).
	 *
	 * @return array<string, WP_Customize_Control[]>
	 */
	private static function controls_by_section( WP_Customize_Manager $manager ) {
		$grouped = array();
		foreach ( $manager->controls() as $control ) {
			if ( ! $control->setting || ! $control->section || ! $control->check_capabilities() ) {
				continue;
			}
			foreach ( self::SKIPPED_SECTION_PREFIXES as $prefix ) {
				if ( 0 === strpos( $control->section, $prefix ) ) {
					continue 2;
				}
			}
			if ( 'active_theme' === $control->setting->id ) {
				continue;
			}
			$grouped[ $control->section ][] = $control;
		}
		return $grouped;
	}

	private static function require_cap( $cap ) {
		if ( ! current_user_can( $cap ) ) {
			throw new Pont_MCP_Tool_Error( 'Droits insuffisants (' . $cap . ').' );
		}
	}
}
