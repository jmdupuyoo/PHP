<?php
/**
 * Outils exposés à Claude.
 *
 * Chaque outil déclare son schéma d'entrée (JSON Schema), le niveau d'accès minimal
 * requis et la méthode qui l'exécute. Les erreurs attendues lèvent Pont_MCP_Tool_Error,
 * dont le message est renvoyé tel quel à Claude.
 */

defined( 'ABSPATH' ) || exit;

class Pont_MCP_Tool_Error extends Exception {}

class Pont_MCP_Tools {

	const MAX_PER_PAGE      = 100;
	const DEFAULT_MAX_CHARS = 60000;

	/** @var array|null */
	private static $definitions = null;

	private static function definitions() {
		if ( null !== self::$definitions ) {
			return self::$definitions;
		}

		$read   = Pont_MCP_Settings::LEVEL_READ;
		$drafts = Pont_MCP_Settings::LEVEL_DRAFTS;
		$full   = Pont_MCP_Settings::LEVEL_FULL;

		$content_fields = array(
			'title'          => array( 'type' => 'string', 'description' => 'Titre.' ),
			'content'        => array( 'type' => 'string', 'description' => 'Contenu HTML (blocs Gutenberg acceptés).' ),
			'excerpt'        => array( 'type' => 'string', 'description' => 'Extrait.' ),
			'status'         => array(
				'type'        => 'string',
				'enum'        => array( 'draft', 'pending', 'private', 'publish', 'future' ),
				'description' => 'Statut. « publish » et « future » exigent le niveau Complet.',
			),
			'slug'           => array( 'type' => 'string', 'description' => 'Identifiant d’URL.' ),
			'date'           => array( 'type' => 'string', 'description' => 'Date de publication (AAAA-MM-JJ HH:MM:SS, heure du site). Requise pour « future ».' ),
			'parent'         => array( 'type' => 'integer', 'description' => 'ID de la page parente.' ),
			'menu_order'     => array( 'type' => 'integer', 'description' => 'Ordre des pages.' ),
			'template'       => array( 'type' => 'string', 'description' => 'Modèle de page (voir theme_info.page_templates).' ),
			'categories'     => array(
				'type'        => 'array',
				'items'       => array( 'type' => array( 'string', 'integer' ) ),
				'description' => 'Catégories (ID ou noms ; les noms inconnus sont créés). Remplace les catégories existantes.',
			),
			'tags'           => array(
				'type'        => 'array',
				'items'       => array( 'type' => 'string' ),
				'description' => 'Étiquettes (noms). Remplace les étiquettes existantes.',
			),
			'featured_media' => array( 'type' => 'integer', 'description' => 'ID du média à utiliser comme image mise en avant (0 pour la retirer).' ),
		);

		self::$definitions = array(
			'site_overview'      => array(
				'title'       => 'Vue d’ensemble du site',
				'description' => 'Nom, adresse, version de WordPress, thème actif, extensions actives, nombre de contenus, niveau d’accès accordé à Claude.',
				'level'       => $read,
				'properties'  => array(),
			),
			'list_content'       => array(
				'title'       => 'Lister les contenus',
				'description' => 'Liste les articles, pages ou autres types de contenu, avec recherche et filtres.',
				'level'       => $read,
				'properties'  => array(
					'type'     => array( 'type' => 'string', 'description' => 'Type de contenu : post (défaut), page, ou tout type public (ex. product).' ),
					'status'   => array( 'type' => 'string', 'enum' => array( 'any', 'publish', 'draft', 'pending', 'private', 'future', 'trash' ), 'description' => 'Statut (défaut : any).' ),
					'search'   => array( 'type' => 'string', 'description' => 'Recherche plein texte.' ),
					'category' => array( 'type' => array( 'string', 'integer' ), 'description' => 'Catégorie (ID ou slug), articles uniquement.' ),
					'orderby'  => array( 'type' => 'string', 'enum' => array( 'date', 'modified', 'title', 'menu_order' ), 'description' => 'Tri (défaut : date).' ),
					'per_page' => array( 'type' => 'integer', 'description' => 'Résultats par page (défaut 20, max 100).' ),
					'page'     => array( 'type' => 'integer', 'description' => 'Numéro de page (défaut 1).' ),
				),
			),
			'get_content'        => array(
				'title'       => 'Lire un contenu',
				'description' => 'Renvoie un contenu complet (HTML brut, extrait, statut, catégories, étiquettes, image mise en avant, modèle).',
				'level'       => $read,
				'properties'  => array( 'id' => array( 'type' => 'integer', 'description' => 'ID du contenu.' ) ),
				'required'    => array( 'id' ),
			),
			'create_content'     => array(
				'title'       => 'Créer un contenu',
				'description' => 'Crée un article, une page ou un autre type de contenu. Brouillon par défaut.',
				'level'       => $drafts,
				'properties'  => array_merge(
					array( 'type' => array( 'type' => 'string', 'description' => 'Type de contenu : post (défaut), page, etc.' ) ),
					$content_fields
				),
				'required'    => array( 'title' ),
			),
			'update_content'     => array(
				'title'       => 'Modifier un contenu',
				'description' => 'Modifie les champs fournis d’un contenu existant. Un contenu déjà publié exige le niveau Complet.',
				'level'       => $drafts,
				'properties'  => array_merge(
					array( 'id' => array( 'type' => 'integer', 'description' => 'ID du contenu.' ) ),
					$content_fields
				),
				'required'    => array( 'id' ),
			),
			'trash_content'      => array(
				'title'       => 'Mettre un contenu à la corbeille',
				'description' => 'Déplace un contenu dans la corbeille (récupérable depuis l’administration). Un contenu publié exige le niveau Complet.',
				'level'       => $drafts,
				'destructive' => true,
				'properties'  => array( 'id' => array( 'type' => 'integer', 'description' => 'ID du contenu.' ) ),
				'required'    => array( 'id' ),
			),
			'list_terms'         => array(
				'title'       => 'Lister catégories ou étiquettes',
				'description' => 'Liste les termes d’une taxonomie (category par défaut, post_tag, ou autre).',
				'level'       => $read,
				'properties'  => array(
					'taxonomy' => array( 'type' => 'string', 'description' => 'Taxonomie (défaut : category).' ),
					'search'   => array( 'type' => 'string', 'description' => 'Recherche.' ),
				),
			),
			'create_term'        => array(
				'title'       => 'Créer une catégorie ou étiquette',
				'description' => 'Crée un terme dans une taxonomie.',
				'level'       => $drafts,
				'properties'  => array(
					'taxonomy'    => array( 'type' => 'string', 'description' => 'Taxonomie (défaut : category).' ),
					'name'        => array( 'type' => 'string', 'description' => 'Nom.' ),
					'slug'        => array( 'type' => 'string', 'description' => 'Slug.' ),
					'parent'      => array( 'type' => 'integer', 'description' => 'ID du terme parent.' ),
					'description' => array( 'type' => 'string', 'description' => 'Description.' ),
				),
				'required'    => array( 'name' ),
			),
			'list_media'         => array(
				'title'       => 'Lister les médias',
				'description' => 'Liste la médiathèque (URL, texte alternatif, dimensions).',
				'level'       => $read,
				'properties'  => array(
					'search'    => array( 'type' => 'string', 'description' => 'Recherche.' ),
					'mime_type' => array( 'type' => 'string', 'description' => 'Filtre de type (défaut : image).' ),
					'per_page'  => array( 'type' => 'integer', 'description' => 'Résultats par page (défaut 20, max 100).' ),
					'page'      => array( 'type' => 'integer', 'description' => 'Numéro de page.' ),
				),
			),
			'upload_media'       => array(
				'title'       => 'Importer un média depuis une URL',
				'description' => 'Télécharge un fichier depuis une URL publique vers la médiathèque, avec titre et texte alternatif, et peut le définir comme image mise en avant.',
				'level'       => $drafts,
				'properties'  => array(
					'url'          => array( 'type' => 'string', 'description' => 'URL du fichier.' ),
					'filename'     => array( 'type' => 'string', 'description' => 'Nom de fichier souhaité (ex. echeveria-elegans.jpg).' ),
					'title'        => array( 'type' => 'string', 'description' => 'Titre.' ),
					'alt'          => array( 'type' => 'string', 'description' => 'Texte alternatif (accessibilité, SEO).' ),
					'caption'      => array( 'type' => 'string', 'description' => 'Légende.' ),
					'post_id'      => array( 'type' => 'integer', 'description' => 'Contenu auquel rattacher le média.' ),
					'set_featured' => array( 'type' => 'boolean', 'description' => 'Définir comme image mise en avant de post_id.' ),
				),
				'required'    => array( 'url' ),
			),
			'get_custom_css'     => array(
				'title'       => 'Lire le CSS additionnel',
				'description' => 'Renvoie le CSS additionnel du thème actif (Personnaliser › CSS additionnel) et ses dernières révisions.',
				'level'       => $read,
				'properties'  => array(),
			),
			'update_custom_css'  => array(
				'title'       => 'Modifier le CSS additionnel',
				'description' => 'Remplace ou complète le CSS additionnel du thème actif. Effet immédiat sur le site en ligne ; l’ancienne version reste en révision.',
				'level'       => $full,
				'properties'  => array(
					'css'  => array( 'type' => 'string', 'description' => 'Code CSS.' ),
					'mode' => array( 'type' => 'string', 'enum' => array( 'replace', 'append', 'prepend' ), 'description' => 'replace (défaut) remplace tout ; append/prepend ajoute après/avant l’existant.' ),
				),
				'required'    => array( 'css' ),
			),
			'restore_custom_css' => array(
				'title'       => 'Restaurer une révision du CSS',
				'description' => 'Remet en place une révision précédente du CSS additionnel (voir get_custom_css.revisions).',
				'level'       => $full,
				'properties'  => array( 'revision_id' => array( 'type' => 'integer', 'description' => 'ID de la révision.' ) ),
				'required'    => array( 'revision_id' ),
			),
			'theme_info'         => array(
				'title'       => 'Informations sur le thème',
				'description' => 'Thème actif (parent/enfant, thème de blocs ou classique), réglages du Customizer, modèles de page, styles globaux, thèmes installés.',
				'level'       => $read,
				'properties'  => array(),
			),
			'list_menus'         => array(
				'title'       => 'Lister les menus',
				'description' => 'Menus de navigation classiques, leurs emplacements et leurs liens.',
				'level'       => $read,
				'properties'  => array(),
			),
			'list_plugins'       => array(
				'title'       => 'Lister les extensions',
				'description' => 'Extensions installées, version et état.',
				'level'       => $read,
				'properties'  => array(),
			),
			'fetch_site_url'     => array(
				'title'       => 'Lire une page du site',
				'description' => 'Récupère le code HTML (ou CSS) tel que servi aux visiteurs pour une adresse de ce site : utile pour analyser le design réel, les classes CSS et les feuilles de style chargées.',
				'level'       => $read,
				'properties'  => array(
					'path'          => array( 'type' => 'string', 'description' => 'Chemin ou URL complète sur ce site (défaut : page d’accueil).' ),
					'strip_scripts' => array( 'type' => 'boolean', 'description' => 'Retirer les balises <script> et le SVG en ligne (défaut : true).' ),
					'max_chars'     => array( 'type' => 'integer', 'description' => 'Taille maximale renvoyée (défaut 60000).' ),
				),
			),
		);

		return self::$definitions;
	}

	public static function exists( $name ) {
		return isset( self::definitions()[ $name ] );
	}

	/**
	 * Liste au format MCP « tools/list ».
	 *
	 * Tous les outils sont toujours listés : les clients gardent la liste en cache pendant toute
	 * une conversation, et un changement de niveau d'accès doit prendre effet sans reconnexion.
	 * Le niveau est vérifié à chaque appel (voir call()).
	 */
	public static function list_for_client() {
		$levels = Pont_MCP_Settings::levels();
		$tools  = array();
		foreach ( self::definitions() as $name => $def ) {
			$description = $def['description'];
			if ( Pont_MCP_Settings::LEVEL_READ !== $def['level'] ) {
				$description .= ' Niveau d’accès requis : ' . strtok( $levels[ $def['level'] ], ' ' ) . '.';
			}
			$schema = array(
				'type'       => 'object',
				'properties' => $def['properties'] ? $def['properties'] : new stdClass(),
			);
			if ( ! empty( $def['required'] ) ) {
				$schema['required'] = $def['required'];
			}
			$read_only = Pont_MCP_Settings::LEVEL_READ === $def['level'];
			$tools[]   = array(
				'name'        => $name,
				'title'       => $def['title'],
				'description' => $description,
				'inputSchema' => $schema,
				'annotations' => array(
					'title'           => $def['title'],
					'readOnlyHint'    => $read_only,
					'destructiveHint' => ! empty( $def['destructive'] ) || 'update_custom_css' === $name,
					'openWorldHint'   => 'upload_media' === $name,
				),
			);
		}
		return $tools;
	}

	public static function call( $name, array $args ) {
		$def = self::definitions()[ $name ];
		if ( ! Pont_MCP_Settings::allows( $def['level'] ) ) {
			$levels = Pont_MCP_Settings::levels();
			throw new Pont_MCP_Tool_Error(
				sprintf(
					'Cette action demande le niveau d’accès « %s » (niveau actuel : « %s »). Il se règle dans Réglages › Pont MCP.',
					strtok( $levels[ $def['level'] ], ' ' ),
					strtok( $levels[ Pont_MCP_Settings::level() ], ' ' )
				)
			);
		}
		$args = self::validate( $args, $def );
		return call_user_func( array( __CLASS__, 'tool_' . $name ), $args );
	}

	/* ------------------------------------------------------------------ */
	/* Site                                                                */
	/* ------------------------------------------------------------------ */

	private static function tool_site_overview() {
		require_once ABSPATH . 'wp-admin/includes/plugin.php';

		$theme  = wp_get_theme();
		$counts = array();
		foreach ( get_post_types( array( 'public' => true ), 'objects' ) as $type ) {
			if ( 'attachment' === $type->name ) {
				continue;
			}
			$c                     = wp_count_posts( $type->name );
			$counts[ $type->name ] = array(
				'label'   => $type->label,
				'publish' => (int) ( $c->publish ?? 0 ),
				'draft'   => (int) ( $c->draft ?? 0 ),
			);
		}

		$all_plugins = get_plugins();
		$active      = array();
		foreach ( (array) get_option( 'active_plugins', array() ) as $file ) {
			$active[] = isset( $all_plugins[ $file ] ) ? $all_plugins[ $file ]['Name'] . ' ' . $all_plugins[ $file ]['Version'] : $file;
		}

		$levels = Pont_MCP_Settings::levels();

		return array(
			'name'              => get_bloginfo( 'name' ),
			'tagline'           => get_bloginfo( 'description' ),
			'url'               => home_url( '/' ),
			'language'          => get_bloginfo( 'language' ),
			'timezone'          => wp_timezone_string(),
			'wordpress_version' => get_bloginfo( 'version' ),
			'php_version'       => PHP_VERSION,
			'theme'             => array(
				'name'        => $theme->get( 'Name' ),
				'version'     => $theme->get( 'Version' ),
				'parent'      => $theme->parent() ? $theme->parent()->get( 'Name' ) : null,
				'block_theme' => function_exists( 'wp_is_block_theme' ) && wp_is_block_theme(),
			),
			'front_page'        => 'page' === get_option( 'show_on_front' )
				? array( 'type' => 'page', 'id' => (int) get_option( 'page_on_front' ), 'posts_page_id' => (int) get_option( 'page_for_posts' ) )
				: array( 'type' => 'latest_posts' ),
			'permalinks'        => get_option( 'permalink_structure' ) ? get_option( 'permalink_structure' ) : 'simples (?p=123)',
			'content_counts'    => $counts,
			'active_plugins'    => $active,
			'access_level'      => $levels[ Pont_MCP_Settings::level() ],
		);
	}

	private static function tool_theme_info() {
		$theme = wp_get_theme();
		$block = function_exists( 'wp_is_block_theme' ) && wp_is_block_theme();

		$mods = array();
		foreach ( (array) get_theme_mods() as $key => $value ) {
			if ( is_scalar( $value ) || null === $value ) {
				$mods[ $key ] = is_string( $value ) && strlen( $value ) > 500 ? substr( $value, 0, 500 ) . '…' : $value;
			}
		}

		$installed = array();
		foreach ( wp_get_themes() as $slug => $t ) {
			$installed[] = array(
				'slug'    => $slug,
				'name'    => $t->get( 'Name' ),
				'version' => $t->get( 'Version' ),
				'parent'  => $t->get_template() !== $slug ? $t->get_template() : null,
				'active'  => get_stylesheet() === $slug,
			);
		}

		$info = array(
			'name'               => $theme->get( 'Name' ),
			'slug'               => get_stylesheet(),
			'version'            => $theme->get( 'Version' ),
			'author'             => $theme->get( 'Author' ),
			'parent'             => $theme->parent() ? array( 'name' => $theme->parent()->get( 'Name' ), 'slug' => get_template() ) : null,
			'block_theme'        => $block,
			'stylesheet_url'     => get_stylesheet_uri(),
			'page_templates'     => $theme->get_page_templates(),
			'theme_mods'         => $mods,
			'customizer_url'     => admin_url( 'customize.php' ),
			'installed_themes'   => $installed,
			'custom_css_length'  => strlen( wp_get_custom_css() ),
			'nav_menu_locations' => get_registered_nav_menus(),
		);

		if ( $block && class_exists( 'WP_Theme_JSON_Resolver' ) ) {
			$user_styles = WP_Theme_JSON_Resolver::get_user_data()->get_raw_data();
			unset( $user_styles['version'] );
			$info['global_styles_user'] = $user_styles;
			$palette                    = wp_get_global_settings( array( 'color', 'palette' ) );
			$fonts                      = wp_get_global_settings( array( 'typography', 'fontFamilies' ) );
			$info['palette']            = $palette;
			$info['font_families']      = $fonts;
			$info['site_editor_url']    = admin_url( 'site-editor.php' );
		}

		return $info;
	}

	private static function tool_list_menus() {
		$locations = get_nav_menu_locations();
		$menus     = array();
		foreach ( wp_get_nav_menus() as $menu ) {
			$items = array();
			foreach ( (array) wp_get_nav_menu_items( $menu->term_id ) as $item ) {
				$items[] = array(
					'id'        => (int) $item->ID,
					'title'     => $item->title,
					'url'       => $item->url,
					'parent_id' => (int) $item->menu_item_parent,
					'order'     => (int) $item->menu_order,
					'object'    => $item->object,
				);
			}
			$menus[] = array(
				'id'        => (int) $menu->term_id,
				'name'      => $menu->name,
				'locations' => array_keys( $locations, $menu->term_id, true ),
				'items'     => $items,
			);
		}

		$result = array( 'menus' => $menus );
		if ( function_exists( 'wp_is_block_theme' ) && wp_is_block_theme() ) {
			$result['note'] = 'Thème de blocs : la navigation est aussi gérée par des blocs « Navigation » (éditeur de site).';
		}
		return $result;
	}

	private static function tool_list_plugins() {
		require_once ABSPATH . 'wp-admin/includes/plugin.php';
		$plugins = array();
		foreach ( get_plugins() as $file => $data ) {
			$plugins[] = array(
				'file'    => $file,
				'name'    => $data['Name'],
				'version' => $data['Version'],
				'active'  => is_plugin_active( $file ),
			);
		}
		return $plugins;
	}

	private static function tool_fetch_site_url( array $args ) {
		$path = isset( $args['path'] ) ? trim( $args['path'] ) : '/';
		$url  = preg_match( '#^https?://#i', $path ) ? $path : home_url( '/' . ltrim( $path, '/' ) );

		$home_host = wp_parse_url( home_url(), PHP_URL_HOST );
		if ( strtolower( (string) wp_parse_url( $url, PHP_URL_HOST ) ) !== strtolower( (string) $home_host ) ) {
			throw new Pont_MCP_Tool_Error( 'Seules les adresses de ce site (' . $home_host . ') peuvent être lues.' );
		}

		$response = wp_remote_get(
			$url,
			array(
				'timeout'     => 20,
				'redirection' => 3,
				'user-agent'  => 'PontMCP/' . PONT_MCP_VERSION . '; ' . home_url(),
				'sslverify'   => apply_filters( 'https_local_ssl_verify', false ),
			)
		);
		if ( is_wp_error( $response ) ) {
			throw new Pont_MCP_Tool_Error( 'Impossible de lire ' . $url . ' : ' . $response->get_error_message() . ' (l’hébergeur bloque peut-être les requêtes du site vers lui-même).' );
		}

		$body = (string) wp_remote_retrieve_body( $response );
		$type = (string) wp_remote_retrieve_header( $response, 'content-type' );

		$stylesheets = array();
		if ( false !== stripos( $type, 'html' ) ) {
			if ( preg_match_all( '#<link[^>]+rel=["\']stylesheet["\'][^>]*>#i', $body, $links ) ) {
				foreach ( $links[0] as $tag ) {
					if ( preg_match( '#href=["\']([^"\']+)["\']#i', $tag, $href ) ) {
						$stylesheets[] = html_entity_decode( $href[1] );
					}
				}
			}
			if ( $args['strip_scripts'] ?? true ) {
				$body = preg_replace( '#<script\b[^>]*>.*?</script>#is', '<script>…</script>', $body );
				$body = preg_replace( '#<svg\b[^>]*>.*?</svg>#is', '<svg>…</svg>', $body );
			}
		}

		$max       = max( 1000, (int) ( $args['max_chars'] ?? self::DEFAULT_MAX_CHARS ) );
		$truncated = strlen( $body ) > $max;

		return array(
			'url'          => $url,
			'status'       => (int) wp_remote_retrieve_response_code( $response ),
			'content_type' => $type,
			'stylesheets'  => $stylesheets,
			'length'       => strlen( $body ),
			'truncated'    => $truncated,
			'body'         => $truncated ? mb_strcut( $body, 0, $max ) : $body,
		);
	}

	/* ------------------------------------------------------------------ */
	/* Contenus                                                            */
	/* ------------------------------------------------------------------ */

	private static function tool_list_content( array $args ) {
		$type = self::post_type( $args['type'] ?? 'post' );

		$query_args = array(
			'post_type'           => $type,
			'post_status'         => $args['status'] ?? 'any',
			'posts_per_page'      => self::per_page( $args ),
			'paged'               => max( 1, (int) ( $args['page'] ?? 1 ) ),
			'orderby'             => $args['orderby'] ?? 'date',
			'order'               => in_array( $args['orderby'] ?? 'date', array( 'title', 'menu_order' ), true ) ? 'ASC' : 'DESC',
			'ignore_sticky_posts' => true,
			'no_found_rows'       => false,
		);
		if ( ! empty( $args['search'] ) ) {
			$query_args['s'] = $args['search'];
		}
		if ( isset( $args['category'] ) && '' !== $args['category'] ) {
			if ( is_numeric( $args['category'] ) ) {
				$query_args['cat'] = (int) $args['category'];
			} else {
				$query_args['category_name'] = $args['category'];
			}
		}

		$query = new WP_Query( $query_args );
		$items = array();
		foreach ( $query->posts as $post ) {
			$items[] = array(
				'id'       => $post->ID,
				'title'    => get_the_title( $post ),
				'status'   => $post->post_status,
				'date'     => $post->post_date,
				'modified' => $post->post_modified,
				'link'     => get_permalink( $post ),
				'excerpt'  => wp_trim_words( $post->post_excerpt ? $post->post_excerpt : wp_strip_all_tags( $post->post_content ), 25 ),
			);
		}

		return array(
			'total'       => (int) $query->found_posts,
			'total_pages' => (int) $query->max_num_pages,
			'page'        => $query_args['paged'],
			'items'       => $items,
		);
	}

	private static function tool_get_content( array $args ) {
		$post = self::get_post( $args['id'] );

		$data = array(
			'id'             => $post->ID,
			'type'           => $post->post_type,
			'title'          => $post->post_title,
			'status'         => $post->post_status,
			'slug'           => $post->post_name,
			'link'           => get_permalink( $post ),
			'date'           => $post->post_date,
			'modified'       => $post->post_modified,
			'author'         => get_the_author_meta( 'display_name', $post->post_author ),
			'parent'         => (int) $post->post_parent,
			'template'       => get_page_template_slug( $post ),
			'excerpt'        => $post->post_excerpt,
			'content'        => $post->post_content,
			'featured_media' => null,
		);

		$thumb_id = (int) get_post_thumbnail_id( $post );
		if ( $thumb_id ) {
			$data['featured_media'] = array(
				'id'  => $thumb_id,
				'url' => wp_get_attachment_url( $thumb_id ),
				'alt' => get_post_meta( $thumb_id, '_wp_attachment_image_alt', true ),
			);
		}
		if ( is_object_in_taxonomy( $post->post_type, 'category' ) ) {
			$data['categories'] = self::term_names( $post, 'category' );
		}
		if ( is_object_in_taxonomy( $post->post_type, 'post_tag' ) ) {
			$data['tags'] = self::term_names( $post, 'post_tag' );
		}

		return $data;
	}

	private static function tool_create_content( array $args ) {
		$type   = self::post_type( $args['type'] ?? 'post' );
		$status = $args['status'] ?? 'draft';
		self::require_live_access_for_status( $status );

		$post_type_object = get_post_type_object( $type );
		if ( ! current_user_can( $post_type_object->cap->create_posts ) ) {
			throw new Pont_MCP_Tool_Error( 'Droits insuffisants pour créer ce type de contenu.' );
		}

		$data = array_merge( array( 'post_type' => $type, 'post_status' => $status ), self::post_fields( $args ) );
		$id   = wp_insert_post( wp_slash( $data ), true );
		if ( is_wp_error( $id ) ) {
			throw new Pont_MCP_Tool_Error( $id->get_error_message() );
		}

		self::apply_relations( $id, $args );

		return array_merge( array( 'message' => 'Contenu créé.' ), self::summary( $id ) );
	}

	private static function tool_update_content( array $args ) {
		$post = self::get_post( $args['id'] );
		if ( ! current_user_can( 'edit_post', $post->ID ) ) {
			throw new Pont_MCP_Tool_Error( 'Droits insuffisants pour modifier ce contenu.' );
		}
		self::require_live_access_for_post( $post );
		if ( isset( $args['status'] ) ) {
			self::require_live_access_for_status( $args['status'] );
		}

		$data = self::post_fields( $args );
		if ( isset( $args['status'] ) ) {
			$data['post_status'] = $args['status'];
		}
		if ( $data ) {
			$data['ID'] = $post->ID;
			$result     = wp_update_post( wp_slash( $data ), true );
			if ( is_wp_error( $result ) ) {
				throw new Pont_MCP_Tool_Error( $result->get_error_message() );
			}
		}

		self::apply_relations( $post->ID, $args );

		return array_merge( array( 'message' => 'Contenu modifié.' ), self::summary( $post->ID ) );
	}

	private static function tool_trash_content( array $args ) {
		$post = self::get_post( $args['id'] );
		if ( ! current_user_can( 'delete_post', $post->ID ) ) {
			throw new Pont_MCP_Tool_Error( 'Droits insuffisants pour supprimer ce contenu.' );
		}
		self::require_live_access_for_post( $post );

		if ( ! wp_trash_post( $post->ID ) ) {
			throw new Pont_MCP_Tool_Error( 'La mise à la corbeille a échoué.' );
		}
		return array(
			'message' => 'Contenu « ' . $post->post_title . ' » placé dans la corbeille (récupérable depuis l’administration).',
			'id'      => $post->ID,
		);
	}

	/* ------------------------------------------------------------------ */
	/* Taxonomies                                                          */
	/* ------------------------------------------------------------------ */

	private static function tool_list_terms( array $args ) {
		$taxonomy = self::taxonomy( $args['taxonomy'] ?? 'category' );
		$terms    = get_terms(
			array(
				'taxonomy'   => $taxonomy,
				'hide_empty' => false,
				'search'     => $args['search'] ?? '',
				'number'     => 500,
			)
		);
		if ( is_wp_error( $terms ) ) {
			throw new Pont_MCP_Tool_Error( $terms->get_error_message() );
		}
		return array_map(
			static function ( $term ) {
				return array(
					'id'          => $term->term_id,
					'name'        => $term->name,
					'slug'        => $term->slug,
					'parent'      => $term->parent,
					'count'       => $term->count,
					'description' => $term->description,
				);
			},
			$terms
		);
	}

	private static function tool_create_term( array $args ) {
		$taxonomy = self::taxonomy( $args['taxonomy'] ?? 'category' );
		if ( ! current_user_can( get_taxonomy( $taxonomy )->cap->edit_terms ) ) {
			throw new Pont_MCP_Tool_Error( 'Droits insuffisants pour créer ce terme.' );
		}
		$result = wp_insert_term(
			wp_slash( $args['name'] ),
			$taxonomy,
			wp_slash(
				array_filter(
					array(
						'slug'        => $args['slug'] ?? '',
						'parent'      => $args['parent'] ?? 0,
						'description' => $args['description'] ?? '',
					)
				)
			)
		);
		if ( is_wp_error( $result ) ) {
			throw new Pont_MCP_Tool_Error( $result->get_error_message() );
		}
		return array( 'message' => 'Terme créé.', 'id' => (int) $result['term_id'] );
	}

	/* ------------------------------------------------------------------ */
	/* Médias                                                              */
	/* ------------------------------------------------------------------ */

	private static function tool_list_media( array $args ) {
		$query = new WP_Query(
			array(
				'post_type'      => 'attachment',
				'post_status'    => 'inherit',
				'post_mime_type' => $args['mime_type'] ?? 'image',
				's'              => $args['search'] ?? '',
				'posts_per_page' => self::per_page( $args ),
				'paged'          => max( 1, (int) ( $args['page'] ?? 1 ) ),
			)
		);
		$items = array();
		foreach ( $query->posts as $post ) {
			$meta    = wp_get_attachment_metadata( $post->ID );
			$items[] = array(
				'id'        => $post->ID,
				'title'     => $post->post_title,
				'url'       => wp_get_attachment_url( $post->ID ),
				'alt'       => get_post_meta( $post->ID, '_wp_attachment_image_alt', true ),
				'mime_type' => $post->post_mime_type,
				'width'     => $meta['width'] ?? null,
				'height'    => $meta['height'] ?? null,
				'date'      => $post->post_date,
			);
		}
		return array( 'total' => (int) $query->found_posts, 'items' => $items );
	}

	private static function tool_upload_media( array $args ) {
		if ( ! current_user_can( 'upload_files' ) ) {
			throw new Pont_MCP_Tool_Error( 'Droits insuffisants pour importer des fichiers.' );
		}
		if ( ! wp_http_validate_url( $args['url'] ) ) {
			throw new Pont_MCP_Tool_Error( 'URL invalide ou non autorisée.' );
		}

		$post_id = (int) ( $args['post_id'] ?? 0 );
		if ( $post_id ) {
			$post = self::get_post( $post_id );
			if ( ! empty( $args['set_featured'] ) ) {
				self::require_live_access_for_post( $post );
			}
		}

		require_once ABSPATH . 'wp-admin/includes/file.php';
		require_once ABSPATH . 'wp-admin/includes/media.php';
		require_once ABSPATH . 'wp-admin/includes/image.php';

		$tmp = download_url( $args['url'], 60 );
		if ( is_wp_error( $tmp ) ) {
			throw new Pont_MCP_Tool_Error( 'Téléchargement impossible : ' . $tmp->get_error_message() );
		}

		$filename = $args['filename'] ?? '';
		if ( '' === $filename ) {
			$filename = wp_basename( (string) wp_parse_url( $args['url'], PHP_URL_PATH ) );
		}
		$filename = sanitize_file_name( $filename );
		if ( '' === pathinfo( $filename, PATHINFO_EXTENSION ) ) {
			$mime = function_exists( 'mime_content_type' ) ? mime_content_type( $tmp ) : '';
			$exts = array_flip( wp_get_mime_types() );
			if ( $mime && isset( $exts[ $mime ] ) ) {
				$filename .= '.' . strtok( $exts[ $mime ], '|' );
			}
		}

		$post_data = array();
		if ( isset( $args['title'] ) ) {
			$post_data['post_title'] = $args['title'];
		}
		if ( isset( $args['caption'] ) ) {
			$post_data['post_excerpt'] = $args['caption'];
		}

		$attachment_id = media_handle_sideload( array( 'name' => $filename, 'tmp_name' => $tmp ), $post_id, null, $post_data );
		if ( is_wp_error( $attachment_id ) ) {
			wp_delete_file( $tmp );
			throw new Pont_MCP_Tool_Error( 'Import impossible : ' . $attachment_id->get_error_message() );
		}

		if ( isset( $args['alt'] ) ) {
			update_post_meta( $attachment_id, '_wp_attachment_image_alt', sanitize_text_field( $args['alt'] ) );
		}
		if ( $post_id && ! empty( $args['set_featured'] ) ) {
			set_post_thumbnail( $post_id, $attachment_id );
		}

		return array(
			'message'  => 'Média importé.',
			'id'       => (int) $attachment_id,
			'url'      => wp_get_attachment_url( $attachment_id ),
			'featured' => $post_id && ! empty( $args['set_featured'] ),
		);
	}

	/* ------------------------------------------------------------------ */
	/* CSS                                                                 */
	/* ------------------------------------------------------------------ */

	private static function tool_get_custom_css() {
		$post      = wp_get_custom_css_post();
		$revisions = array();
		if ( $post ) {
			foreach ( wp_get_post_revisions( $post->ID, array( 'posts_per_page' => 10 ) ) as $revision ) {
				$revisions[] = array(
					'revision_id' => $revision->ID,
					'date'        => $revision->post_modified,
					'length'      => strlen( $revision->post_content ),
				);
			}
		}
		return array(
			'theme'     => get_stylesheet(),
			'css'       => wp_get_custom_css(),
			'revisions' => $revisions,
		);
	}

	private static function tool_update_custom_css( array $args ) {
		self::require_css_access();

		$current = wp_get_custom_css();
		$css     = $args['css'];
		switch ( $args['mode'] ?? 'replace' ) {
			case 'append':
				$css = rtrim( $current ) . "\n\n" . $css;
				break;
			case 'prepend':
				$css = $css . "\n\n" . ltrim( $current );
				break;
		}
		$css = trim( $css ) . "\n";
		self::validate_css( $css );

		$result = wp_update_custom_css_post( $css );
		if ( is_wp_error( $result ) ) {
			throw new Pont_MCP_Tool_Error( $result->get_error_message() );
		}

		return array(
			'message'         => 'CSS additionnel mis à jour (visible immédiatement sur le site).',
			'previous_length' => strlen( $current ),
			'new_length'      => strlen( $css ),
			'undo'            => 'restore_custom_css avec une révision listée par get_custom_css.',
		);
	}

	private static function tool_restore_custom_css( array $args ) {
		self::require_css_access();

		$post     = wp_get_custom_css_post();
		$revision = wp_get_post_revision( $args['revision_id'] );
		if ( ! $post || ! $revision || (int) $revision->post_parent !== (int) $post->ID ) {
			throw new Pont_MCP_Tool_Error( 'Révision introuvable pour le CSS du thème actif.' );
		}

		$result = wp_update_custom_css_post( $revision->post_content );
		if ( is_wp_error( $result ) ) {
			throw new Pont_MCP_Tool_Error( $result->get_error_message() );
		}
		return array(
			'message' => 'CSS restauré à la révision du ' . $revision->post_modified . '.',
			'length'  => strlen( $revision->post_content ),
		);
	}

	/* ------------------------------------------------------------------ */
	/* Aides                                                               */
	/* ------------------------------------------------------------------ */

	private static function validate( array $args, array $def ) {
		foreach ( $def['required'] ?? array() as $key ) {
			if ( ! isset( $args[ $key ] ) || '' === $args[ $key ] ) {
				throw new Pont_MCP_Tool_Error( 'Paramètre obligatoire manquant : ' . $key );
			}
		}

		$clean = array();
		foreach ( $def['properties'] as $key => $schema ) {
			if ( ! array_key_exists( $key, $args ) || null === $args[ $key ] ) {
				continue;
			}
			$value = $args[ $key ];
			$types = (array) $schema['type'];

			if ( in_array( 'integer', $types, true ) && is_numeric( $value ) && (int) $value == $value ) { // phpcs:ignore Universal.Operators.StrictComparisons
				$value = (int) $value;
			} elseif ( in_array( 'boolean', $types, true ) && is_string( $value ) ) {
				$value = in_array( strtolower( $value ), array( '1', 'true', 'oui', 'yes' ), true );
			}

			$ok = ( in_array( 'string', $types, true ) && is_string( $value ) )
				|| ( in_array( 'integer', $types, true ) && is_int( $value ) )
				|| ( in_array( 'boolean', $types, true ) && is_bool( $value ) )
				|| ( in_array( 'array', $types, true ) && is_array( $value ) );
			if ( ! $ok ) {
				throw new Pont_MCP_Tool_Error( 'Type invalide pour « ' . $key . ' » (attendu : ' . implode( ' ou ', $types ) . ').' );
			}
			if ( isset( $schema['enum'] ) && ! in_array( $value, $schema['enum'], true ) ) {
				throw new Pont_MCP_Tool_Error( 'Valeur invalide pour « ' . $key . ' ». Valeurs possibles : ' . implode( ', ', $schema['enum'] ) . '.' );
			}
			$clean[ $key ] = $value;
		}
		return $clean;
	}

	private static function post_fields( array $args ) {
		$map  = array(
			'title'      => 'post_title',
			'content'    => 'post_content',
			'excerpt'    => 'post_excerpt',
			'slug'       => 'post_name',
			'parent'     => 'post_parent',
			'menu_order' => 'menu_order',
			'template'   => 'page_template',
		);
		$data = array();
		foreach ( $map as $arg => $field ) {
			if ( isset( $args[ $arg ] ) ) {
				$data[ $field ] = $args[ $arg ];
			}
		}
		if ( isset( $args['date'] ) ) {
			$timestamp = strtotime( $args['date'] );
			if ( false === $timestamp ) {
				throw new Pont_MCP_Tool_Error( 'Date invalide : ' . $args['date'] );
			}
			$data['post_date']     = gmdate( 'Y-m-d H:i:s', $timestamp );
			$data['post_date_gmt'] = get_gmt_from_date( $data['post_date'] );
		}
		return $data;
	}

	private static function apply_relations( $post_id, array $args ) {
		$type = get_post_type( $post_id );

		if ( isset( $args['categories'] ) && is_object_in_taxonomy( $type, 'category' ) ) {
			$ids = array();
			foreach ( $args['categories'] as $category ) {
				$ids[] = self::resolve_term( $category, 'category' );
			}
			wp_set_post_categories( $post_id, $ids );
		}
		if ( isset( $args['tags'] ) && is_object_in_taxonomy( $type, 'post_tag' ) ) {
			wp_set_post_tags( $post_id, array_map( 'strval', $args['tags'] ) );
		}
		if ( isset( $args['featured_media'] ) ) {
			if ( 0 === $args['featured_media'] ) {
				delete_post_thumbnail( $post_id );
			} elseif ( 'attachment' !== get_post_type( $args['featured_media'] ) || ! set_post_thumbnail( $post_id, $args['featured_media'] ) ) {
				throw new Pont_MCP_Tool_Error( 'Média ' . $args['featured_media'] . ' introuvable : image mise en avant non définie (le reste a été enregistré).' );
			}
		}
	}

	private static function resolve_term( $value, $taxonomy ) {
		if ( is_int( $value ) || ctype_digit( (string) $value ) ) {
			if ( ! term_exists( (int) $value, $taxonomy ) ) {
				throw new Pont_MCP_Tool_Error( 'Terme ' . $value . ' introuvable dans ' . $taxonomy . '.' );
			}
			return (int) $value;
		}
		$existing = get_term_by( 'name', $value, $taxonomy );
		if ( ! $existing ) {
			$existing = get_term_by( 'slug', sanitize_title( $value ), $taxonomy );
		}
		if ( $existing ) {
			return (int) $existing->term_id;
		}
		$created = wp_insert_term( wp_slash( $value ), $taxonomy );
		if ( is_wp_error( $created ) ) {
			throw new Pont_MCP_Tool_Error( $created->get_error_message() );
		}
		return (int) $created['term_id'];
	}

	private static function summary( $post_id ) {
		$post = get_post( $post_id );
		return array(
			'id'        => $post->ID,
			'type'      => $post->post_type,
			'title'     => $post->post_title,
			'status'    => $post->post_status,
			'link'      => get_permalink( $post ),
			'edit_link' => admin_url( 'post.php?post=' . $post->ID . '&action=edit' ),
		);
	}

	private static function get_post( $id ) {
		$post = get_post( (int) $id );
		if ( ! $post || in_array( $post->post_type, array( 'revision', 'nav_menu_item', 'custom_css', 'customize_changeset', 'wp_global_styles' ), true ) ) {
			throw new Pont_MCP_Tool_Error( 'Contenu ' . $id . ' introuvable.' );
		}
		if ( ! current_user_can( 'read_post', $post->ID ) ) {
			throw new Pont_MCP_Tool_Error( 'Droits insuffisants pour lire ce contenu.' );
		}
		return $post;
	}

	private static function post_type( $type ) {
		$object = get_post_type_object( $type );
		if ( ! $object || ( ! $object->public && ! $object->show_ui ) || 'attachment' === $type ) {
			$public = array_diff( get_post_types( array( 'public' => true ) ), array( 'attachment' ) );
			throw new Pont_MCP_Tool_Error( 'Type de contenu inconnu : ' . $type . '. Types disponibles : ' . implode( ', ', $public ) . '.' );
		}
		return $type;
	}

	private static function taxonomy( $taxonomy ) {
		if ( ! taxonomy_exists( $taxonomy ) ) {
			throw new Pont_MCP_Tool_Error( 'Taxonomie inconnue : ' . $taxonomy . '.' );
		}
		return $taxonomy;
	}

	private static function term_names( $post, $taxonomy ) {
		$terms = get_the_terms( $post, $taxonomy );
		if ( ! $terms || is_wp_error( $terms ) ) {
			return array();
		}
		return array_map(
			static function ( $term ) {
				return array( 'id' => $term->term_id, 'name' => $term->name );
			},
			$terms
		);
	}

	private static function per_page( array $args ) {
		return min( self::MAX_PER_PAGE, max( 1, (int) ( $args['per_page'] ?? 20 ) ) );
	}

	/**
	 * Tout ce qui est visible par les visiteurs exige le niveau Complet.
	 */
	private static function require_live_access_for_status( $status ) {
		if ( in_array( $status, array( 'publish', 'future' ), true ) && ! Pont_MCP_Settings::allows( Pont_MCP_Settings::LEVEL_FULL ) ) {
			throw new Pont_MCP_Tool_Error( 'Le niveau « Brouillons » ne permet pas de publier. Enregistrez en brouillon, ou passez au niveau « Complet » dans Réglages › Pont MCP.' );
		}
	}

	private static function require_live_access_for_post( WP_Post $post ) {
		if ( in_array( $post->post_status, array( 'publish', 'future', 'private' ), true ) && ! Pont_MCP_Settings::allows( Pont_MCP_Settings::LEVEL_FULL ) ) {
			throw new Pont_MCP_Tool_Error( 'Ce contenu est en ligne : le niveau « Brouillons » ne permet pas de le modifier. Passez au niveau « Complet » dans Réglages › Pont MCP.' );
		}
	}

	private static function require_css_access() {
		if ( ! current_user_can( 'edit_css' ) ) {
			throw new Pont_MCP_Tool_Error( 'Droits insuffisants pour modifier le CSS du site.' );
		}
	}

	/**
	 * Mêmes contrôles que le Customizer de WordPress.
	 */
	private static function validate_css( $css ) {
		if ( false !== stripos( $css, '</style' ) ) {
			throw new Pont_MCP_Tool_Error( 'Le CSS ne doit pas contenir de balise </style>.' );
		}
		$stripped = preg_replace( '#/\*.*?\*/#s', '', $css );
		$stripped = preg_replace( '#"(?:\\\\.|[^"\\\\])*"|\'(?:\\\\.|[^\'\\\\])*\'#s', '""', $stripped );
		if ( substr_count( $stripped, '{' ) !== substr_count( $stripped, '}' ) ) {
			throw new Pont_MCP_Tool_Error( 'CSS invalide : accolades { } non équilibrées.' );
		}
		if ( substr_count( $stripped, '/*' ) !== substr_count( $stripped, '*/' ) ) {
			throw new Pont_MCP_Tool_Error( 'CSS invalide : commentaire non fermé.' );
		}
	}
}
