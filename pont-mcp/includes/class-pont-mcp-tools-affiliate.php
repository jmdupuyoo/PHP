<?php
/**
 * Liens affiliés Amazon (Partenaires Amazon).
 *
 * L'identifiant Partenaire (tag) est réglé une fois par site dans Réglages › Pont MCP.
 * Chaque lien reçoit rel="sponsored" (exigé par Google pour les liens rémunérés) et la mention
 * obligatoire du programme est ajoutée en fin de contenu si elle n'y figure pas déjà.
 */

defined( 'ABSPATH' ) || exit;

class Pont_MCP_Tools_Affiliate {

	const DEFAULT_DISCLOSURE = 'En tant que Partenaire Amazon, je réalise un bénéfice sur les achats remplissant les conditions requises.';
	const DISCLOSURE_CLASS   = 'pont-affiliate-disclosure';

	public static function definitions() {
		return array(
			'insert_affiliate_link' => array(
				'title'       => 'Insérer un lien affilié Amazon',
				'description' => 'Insère dans un contenu un lien ou un bouton vers un produit Amazon (ASIN ou adresse du produit) ou vers une recherche Amazon, avec l’identifiant Partenaire du site, rel="sponsored", et la mention obligatoire du programme en fin de contenu. Ne pas écrire de prix (interdit par Amazon s’il n’est pas mis à jour en temps réel).',
				'level'       => Pont_MCP_Settings::LEVEL_DRAFTS,
				'handler'     => array( __CLASS__, 'insert_affiliate_link' ),
				'properties'  => array(
					'id'       => array( 'type' => 'integer', 'description' => 'ID du contenu.' ),
					'product'  => array( 'type' => 'string', 'description' => 'ASIN (ex. B08N5WRWNW) ou adresse d’une page produit Amazon.' ),
					'search'   => array( 'type' => 'string', 'description' => 'À défaut de produit précis : mots-clés d’une recherche Amazon.' ),
					'text'     => array( 'type' => 'string', 'description' => 'Texte du lien ou du bouton (ex. « Voir ce kit d’apiculture sur Amazon »).' ),
					'style'    => array( 'type' => 'string', 'enum' => array( 'link', 'button' ), 'description' => 'Paragraphe avec lien (défaut) ou bouton.' ),
					'intro'    => array( 'type' => 'string', 'description' => 'Phrase placée avant le lien (style link uniquement), ex. « Pour débuter, un enfumoir de qualité est indispensable : ».' ),
					'position' => array( 'type' => 'string', 'enum' => array( 'end', 'start', 'after_heading', 'before_heading' ), 'description' => 'Emplacement (défaut : end).' ),
					'heading'  => array( 'type' => 'string', 'description' => 'Texte de l’intertitre, pour after_heading / before_heading.' ),
				),
				'required'    => array( 'id', 'text' ),
			),
		);
	}

	public static function insert_affiliate_link( array $args ) {
		$settings = Pont_MCP_Settings::get();
		$tag      = trim( (string) $settings['amazon_tag'] );
		if ( '' === $tag ) {
			throw new Pont_MCP_Tool_Error( 'Aucun identifiant Partenaire Amazon n’est réglé pour ce site. Renseignez-le dans Réglages › Pont MCP (ex. monsite-21).' );
		}

		$post = get_post( $args['id'] );
		if ( ! $post || ! current_user_can( 'edit_post', $post->ID ) ) {
			throw new Pont_MCP_Tool_Error( 'Contenu ' . $args['id'] . ' introuvable ou non modifiable.' );
		}
		Pont_MCP_Tools::require_live_access_for_post( $post );

		$url   = self::build_url( $args, $tag, $settings['amazon_domain'] );
		$link  = '<a href="' . esc_url( $url ) . '" target="_blank" rel="sponsored nofollow noopener">' . esc_html( $args['text'] ) . '</a>';
		$style = $args['style'] ?? 'link';

		if ( 'button' === $style ) {
			$block = "<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button -->\n"
				. '<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $url ) . '" target="_blank" rel="sponsored nofollow noopener">' . esc_html( $args['text'] ) . "</a></div>\n"
				. "<!-- /wp:button --></div>\n<!-- /wp:buttons -->";
		} else {
			$intro = isset( $args['intro'] ) && '' !== trim( $args['intro'] ) ? esc_html( trim( $args['intro'] ) ) . ' ' : '';
			$block = "<!-- wp:paragraph -->\n<p>" . $intro . $link . "</p>\n<!-- /wp:paragraph -->";
		}

		$content = Pont_MCP_Tools_Media::insert_block( $post->post_content, $block, $args['position'] ?? 'end', $args['heading'] ?? '' );

		$disclosure_added = false;
		if ( false === strpos( $content, self::DISCLOSURE_CLASS ) ) {
			$text              = trim( (string) $settings['amazon_disclosure'] ) ?: self::DEFAULT_DISCLOSURE;
			$content           = rtrim( $content ) . "\n\n<!-- wp:paragraph {\"className\":\"" . self::DISCLOSURE_CLASS . "\",\"fontSize\":\"small\"} -->\n"
				. '<p class="' . self::DISCLOSURE_CLASS . ' has-small-font-size"><em>' . esc_html( $text ) . "</em></p>\n<!-- /wp:paragraph -->";
			$disclosure_added  = true;
		}

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
			'message'          => 'Lien affilié inséré.',
			'url'              => $url,
			'disclosure_added' => $disclosure_added,
			'link'             => get_permalink( $post ),
		);
	}

	private static function build_url( array $args, $tag, $domain ) {
		$domain = preg_replace( '#[^a-z0-9.\-]#i', '', (string) $domain ) ?: 'amazon.fr';
		$base   = 'https://www.' . $domain;

		if ( ! empty( $args['product'] ) ) {
			$product = trim( $args['product'] );
			if ( preg_match( '#^[A-Z0-9]{10}$#', strtoupper( $product ) ) ) {
				$asin = strtoupper( $product );
			} elseif ( preg_match( '#^https?://(www\.)?amazon\.[a-z.]+/.*?(?:/dp/|/gp/product/|/gp/aw/d/)([A-Z0-9]{10})#i', $product, $m ) ) {
				$asin = strtoupper( $m[2] );
			} else {
				throw new Pont_MCP_Tool_Error( 'Produit non reconnu : indiquez un ASIN (10 caractères) ou l’adresse complète d’une page produit Amazon. Les liens courts amzn.to ne sont pas acceptés.' );
			}
			return $base . '/dp/' . $asin . '?tag=' . rawurlencode( $tag );
		}

		if ( ! empty( $args['search'] ) ) {
			return add_query_arg(
				array(
					'k'   => rawurlencode( $args['search'] ),
					'tag' => rawurlencode( $tag ),
				),
				$base . '/s'
			);
		}

		throw new Pont_MCP_Tool_Error( 'Indiquez product (ASIN ou adresse) ou search (mots-clés).' );
	}
}
