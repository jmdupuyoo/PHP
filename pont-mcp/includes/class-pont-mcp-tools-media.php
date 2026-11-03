<?php
/**
 * Outils médias : recherche de photos libres de droits et insertion d'images ou de vidéos
 * à un endroit précis d'un contenu.
 */

defined( 'ABSPATH' ) || exit;

class Pont_MCP_Tools_Media {

	const OPENVERSE_API = 'https://api.openverse.org/v1/images/';

	/** Fournisseurs de vidéo reconnus pour l'intégration (bloc Embed). */
	const VIDEO_PROVIDERS = array(
		'youtube'     => '#^https?://(www\.|m\.)?(youtube\.com|youtu\.be)/#i',
		'vimeo'       => '#^https?://(www\.|player\.)?vimeo\.com/#i',
		'dailymotion' => '#^https?://(www\.)?(dailymotion\.com|dai\.ly)/#i',
	);

	public static function definitions() {
		return array(
			'search_free_images' => array(
				'title'       => 'Chercher des photos libres de droits',
				'description' => 'Cherche des photos sous licence Creative Commons ou domaine public (Openverse : Flickr, Wikimedia Commons…). Renvoie l’URL à passer à upload_media et l’attribution à citer en légende.',
				'level'       => Pont_MCP_Settings::LEVEL_READ,
				'handler'     => array( __CLASS__, 'search_free_images' ),
				'open_world'  => true,
				'properties'  => array(
					'query'      => array( 'type' => 'string', 'description' => 'Mots-clés (en anglais pour plus de résultats, ex. « zookeeper », « echeveria »).' ),
					'commercial' => array( 'type' => 'boolean', 'description' => 'Seulement les licences autorisant l’usage commercial (défaut : true).' ),
					'per_page'   => array( 'type' => 'integer', 'description' => 'Nombre de résultats (défaut 10, max 20).' ),
					'page'       => array( 'type' => 'integer', 'description' => 'Page de résultats.' ),
				),
				'required'    => array( 'query' ),
			),
			'insert_media'       => array(
				'title'       => 'Insérer une image ou une vidéo dans un contenu',
				'description' => 'Insère dans un article ou une page une image de la médiathèque (media_id), une vidéo de la médiathèque (media_id) ou une vidéo YouTube, Vimeo ou Dailymotion (video_url), au début, à la fin, ou avant/après l’intertitre indiqué. Le reste du contenu n’est pas modifié.',
				'level'       => Pont_MCP_Settings::LEVEL_DRAFTS,
				'handler'     => array( __CLASS__, 'insert_media' ),
				'properties'  => array(
					'id'        => array( 'type' => 'integer', 'description' => 'ID du contenu.' ),
					'media_id'  => array( 'type' => 'integer', 'description' => 'ID d’une image ou d’une vidéo de la médiathèque (voir upload_media, list_media).' ),
					'video_url' => array( 'type' => 'string', 'description' => 'Adresse d’une vidéo YouTube, Vimeo ou Dailymotion.' ),
					'position'  => array( 'type' => 'string', 'enum' => array( 'end', 'start', 'after_heading', 'before_heading' ), 'description' => 'Emplacement (défaut : end).' ),
					'heading'   => array( 'type' => 'string', 'description' => 'Texte (ou début du texte) de l’intertitre, pour after_heading / before_heading.' ),
					'caption'   => array( 'type' => 'string', 'description' => 'Légende (pensez à l’attribution pour les photos sous licence).' ),
					'alt'       => array( 'type' => 'string', 'description' => 'Texte alternatif de l’image (défaut : celui de la médiathèque).' ),
					'size'      => array( 'type' => 'string', 'enum' => array( 'thumbnail', 'medium', 'large', 'full' ), 'description' => 'Taille de l’image (défaut : large).' ),
				),
				'required'    => array( 'id' ),
			),
		);
	}

	public static function search_free_images( array $args ) {
		$query = array(
			'q'         => $args['query'],
			'page_size' => min( 20, max( 1, (int) ( $args['per_page'] ?? 10 ) ) ),
			'page'      => max( 1, (int) ( $args['page'] ?? 1 ) ),
			'mature'    => 'false',
		);
		if ( $args['commercial'] ?? true ) {
			$query['license_type'] = 'commercial';
		}

		$response = wp_remote_get(
			add_query_arg( $query, self::OPENVERSE_API ),
			array(
				'timeout'    => 20,
				'user-agent' => 'PontMCP/' . PONT_MCP_VERSION . ' (WordPress; ' . home_url() . ')',
			)
		);
		if ( is_wp_error( $response ) ) {
			throw new Pont_MCP_Tool_Error( 'Recherche impossible : ' . $response->get_error_message() );
		}
		$code = (int) wp_remote_retrieve_response_code( $response );
		$data = json_decode( wp_remote_retrieve_body( $response ), true );
		if ( 200 !== $code || ! is_array( $data ) ) {
			throw new Pont_MCP_Tool_Error( 'Openverse a répondu ' . $code . ( 429 === $code ? ' (trop de recherches, réessayez dans une minute).' : '.' ) );
		}

		$images = array();
		foreach ( (array) ( $data['results'] ?? array() ) as $item ) {
			$license = strtoupper( (string) ( $item['license'] ?? '' ) );
			$license = in_array( $license, array( 'CC0', 'PDM' ), true ) ? $license : 'CC ' . $license . ' ' . ( $item['license_version'] ?? '' );
			$images[] = array(
				'title'       => $item['title'] ?? '',
				'url'         => $item['url'] ?? '',
				'thumbnail'   => $item['thumbnail'] ?? '',
				'width'       => $item['width'] ?? null,
				'height'      => $item['height'] ?? null,
				'creator'     => $item['creator'] ?? '',
				'license'     => trim( $license ),
				'license_url' => $item['license_url'] ?? '',
				'source_page' => $item['foreign_landing_url'] ?? '',
				'attribution' => $item['attribution'] ?? '',
			);
		}

		return array(
			'total'  => (int) ( $data['result_count'] ?? count( $images ) ),
			'images' => $images,
			'note'   => 'Citez l’auteur et la licence en légende (champ attribution), sauf CC0 / domaine public.',
		);
	}

	public static function insert_media( array $args ) {
		$post = get_post( $args['id'] );
		if ( ! $post || ! current_user_can( 'edit_post', $post->ID ) ) {
			throw new Pont_MCP_Tool_Error( 'Contenu ' . $args['id'] . ' introuvable ou non modifiable.' );
		}
		Pont_MCP_Tools::require_live_access_for_post( $post );

		if ( empty( $args['media_id'] ) === empty( $args['video_url'] ) ) {
			throw new Pont_MCP_Tool_Error( 'Indiquez soit media_id, soit video_url.' );
		}

		$block   = ! empty( $args['media_id'] ) ? self::attachment_block( $args ) : self::embed_block( $args['video_url'], $args['caption'] ?? '' );
		$content = self::insert_block( $post->post_content, $block, $args['position'] ?? 'end', $args['heading'] ?? '' );

		$result = wp_update_post(
			wp_slash(
				array(
					'ID'           => $post->ID,
					'post_content' => $content,
				)
			),
			true
		);
		if ( is_wp_error( $result ) ) {
			throw new Pont_MCP_Tool_Error( $result->get_error_message() );
		}

		return array(
			'message' => 'Média inséré.',
			'id'      => $post->ID,
			'link'    => get_permalink( $post ),
			'block'   => $block,
		);
	}

	private static function attachment_block( array $args ) {
		$id   = (int) $args['media_id'];
		$post = get_post( $id );
		if ( ! $post || 'attachment' !== $post->post_type ) {
			throw new Pont_MCP_Tool_Error( 'Média ' . $id . ' introuvable dans la médiathèque.' );
		}

		$caption = isset( $args['caption'] ) ? $args['caption'] : '';
		$figcap  = '' !== $caption ? '<figcaption class="wp-element-caption">' . wp_kses_post( $caption ) . '</figcaption>' : '';

		if ( 0 === strpos( $post->post_mime_type, 'video/' ) ) {
			return '<!-- wp:video ' . wp_json_encode( array( 'id' => $id ) ) . " -->\n"
				. '<figure class="wp-block-video"><video controls src="' . esc_url( wp_get_attachment_url( $id ) ) . '"></video>' . $figcap . "</figure>\n"
				. '<!-- /wp:video -->';
		}
		if ( 0 !== strpos( $post->post_mime_type, 'image/' ) ) {
			throw new Pont_MCP_Tool_Error( 'Ce média n’est ni une image ni une vidéo.' );
		}

		$size = $args['size'] ?? 'large';
		$src  = wp_get_attachment_image_src( $id, $size );
		$alt  = isset( $args['alt'] ) ? $args['alt'] : (string) get_post_meta( $id, '_wp_attachment_image_alt', true );
		$attr = array(
			'id'              => $id,
			'sizeSlug'        => $size,
			'linkDestination' => 'none',
		);

		return '<!-- wp:image ' . wp_json_encode( $attr ) . " -->\n"
			. '<figure class="wp-block-image size-' . esc_attr( $size ) . '"><img src="' . esc_url( $src ? $src[0] : wp_get_attachment_url( $id ) ) . '" alt="' . esc_attr( $alt ) . '" class="wp-image-' . $id . '"/>' . $figcap . "</figure>\n"
			. '<!-- /wp:image -->';
	}

	private static function embed_block( $url, $caption ) {
		$provider = null;
		foreach ( self::VIDEO_PROVIDERS as $slug => $pattern ) {
			if ( preg_match( $pattern, $url ) ) {
				$provider = $slug;
				break;
			}
		}
		if ( ! $provider ) {
			throw new Pont_MCP_Tool_Error( 'Vidéo non reconnue : utilisez une adresse YouTube, Vimeo ou Dailymotion, ou importez le fichier avec upload_media.' );
		}

		$url   = esc_url_raw( $url );
		$attr  = array(
			'url'              => $url,
			'type'             => 'video',
			'providerNameSlug' => $provider,
			'responsive'       => true,
			'className'        => 'wp-embed-aspect-16-9 wp-has-aspect-ratio',
		);
		$figcap = '' !== $caption ? '<figcaption class="wp-element-caption">' . wp_kses_post( $caption ) . '</figcaption>' : '';

		return '<!-- wp:embed ' . wp_json_encode( $attr, JSON_UNESCAPED_SLASHES ) . " -->\n"
			. '<figure class="wp-block-embed is-type-video is-provider-' . $provider . ' wp-block-embed-' . $provider . ' wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">' . "\n" . esc_url( $url ) . "\n</div>" . $figcap . "</figure>\n"
			. '<!-- /wp:embed -->';
	}

	/**
	 * Insère un bloc dans un contenu, en respectant les délimiteurs de blocs Gutenberg.
	 */
	public static function insert_block( $content, $block, $position, $heading ) {
		$content = (string) $content;
		if ( 'start' === $position ) {
			return $block . "\n\n" . ltrim( $content );
		}
		if ( 'end' === $position ) {
			// La mention des liens affiliés reste toujours en dernier.
			$marker = '<!-- wp:paragraph {"className":"' . Pont_MCP_Tools_Affiliate::DISCLOSURE_CLASS;
			$pos    = strrpos( $content, $marker );
			if ( false !== $pos ) {
				return rtrim( substr( $content, 0, $pos ) ) . "\n\n" . $block . "\n\n" . substr( $content, $pos );
			}
			return rtrim( $content ) . "\n\n" . $block;
		}

		if ( '' === trim( $heading ) ) {
			throw new Pont_MCP_Tool_Error( 'Indiquez le texte de l’intertitre (heading).' );
		}
		if ( ! preg_match_all( '#<h([1-6])\b[^>]*>(.*?)</h\1>#is', $content, $matches, PREG_OFFSET_CAPTURE ) ) {
			throw new Pont_MCP_Tool_Error( 'Ce contenu ne contient aucun intertitre.' );
		}

		$needle = self::normalize( $heading );
		$found  = null;
		$titles = array();
		foreach ( $matches[0] as $i => $match ) {
			$text     = self::normalize( wp_strip_all_tags( $matches[2][ $i ][0] ) );
			$titles[] = trim( wp_strip_all_tags( $matches[2][ $i ][0] ) );
			if ( null === $found && '' !== $needle && false !== strpos( $text, $needle ) ) {
				$found = $match;
			}
		}
		if ( null === $found ) {
			throw new Pont_MCP_Tool_Error( 'Intertitre introuvable. Intertitres du contenu : « ' . implode( ' », « ', $titles ) . ' ».' );
		}

		list( $tag, $offset ) = $found;
		if ( 'after_heading' === $position ) {
			$end   = $offset + strlen( $tag );
			$close = strpos( $content, '<!-- /wp:heading -->', $end );
			// N'utiliser le délimiteur que s'il suit immédiatement l'intertitre.
			if ( false !== $close && '' === trim( substr( $content, $end, $close - $end ) ) ) {
				$end = $close + strlen( '<!-- /wp:heading -->' );
			}
			return substr( $content, 0, $end ) . "\n\n" . $block . substr( $content, $end );
		}

		$start = $offset;
		$open  = strrpos( substr( $content, 0, $offset ), '<!-- wp:heading' );
		if ( false !== $open && '' === trim( preg_replace( '#^<!-- wp:heading.*?-->#s', '', substr( $content, $open, $offset - $open ) ) ) ) {
			$start = $open;
		}
		return substr( $content, 0, $start ) . $block . "\n\n" . substr( $content, $start );
	}

	private static function normalize( $text ) {
		$text = html_entity_decode( (string) $text, ENT_QUOTES, 'UTF-8' );
		$text = remove_accents( $text );
		$text = preg_replace( '/[\x{2019}\x{2018}`]/u', "'", $text );
		return strtolower( trim( preg_replace( '/\s+/', ' ', $text ) ) );
	}
}
