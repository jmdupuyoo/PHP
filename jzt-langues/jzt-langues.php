<?php
/**
 * Plugin Name: JZT Gestion des langues
 * Description: Barre de drapeaux et traduction du menu d'en-tête pour le Jardin zoologique tropical. S'appuie sur Polylang.
 * Version: 2.0.1
 * Author: Jardin zoologique tropical
 * Requires Plugins: polylang
 * Text Domain: jzt-langues
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Polylang est-il disponible ? */
function jztl_polylang_ok() {
	return function_exists( 'pll_current_language' ) && function_exists( 'pll_the_languages' ) && function_exists( 'pll_get_post' );
}

/** Drapeaux (SVG en ligne, sans requête externe). */
function jztl_flags() {
	return array(
		'fr' => '<svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect width="20" height="40" fill="#002395"/><rect x="20" width="20" height="40" fill="#FFFFFF"/><rect x="40" width="20" height="40" fill="#ED2939"/></svg>',
		'en' => '<svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><clipPath id="jztuk"><path d="M30,20 h30 v20 z v20 h-30 z h-30 v-20 z v-20 h30 z"/></clipPath><rect width="60" height="40" fill="#012169"/><path d="M0,0 60,40 M60,0 0,40" stroke="#FFFFFF" stroke-width="8"/><path d="M0,0 60,40 M60,0 0,40" clip-path="url(#jztuk)" stroke="#C8102E" stroke-width="5"/><path d="M30,0 v40 M0,20 h60" stroke="#FFFFFF" stroke-width="13"/><path d="M30,0 v40 M0,20 h60" stroke="#C8102E" stroke-width="8"/></svg>',
		'de' => '<svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect width="60" height="13.33" fill="#000000"/><rect y="13.33" width="60" height="13.33" fill="#DD0000"/><rect y="26.66" width="60" height="13.34" fill="#FFCE00"/></svg>',
		'it' => '<svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect width="20" height="40" fill="#009246"/><rect x="20" width="20" height="40" fill="#FFFFFF"/><rect x="40" width="20" height="40" fill="#CE2B37"/></svg>',
	);
}

/** Libellés du menu français et leurs traductions. */
function jztl_menu_labels() {
	return array(
		'Accueil'           => array( 'en' => 'Home', 'de' => 'Startseite', 'it' => 'Home' ),
		'Horaires & tarifs' => array( 'en' => 'Hours & prices', 'de' => 'Zeiten & Preise', 'it' => 'Orari e prezzi' ),
		'Nous trouver'      => array( 'en' => 'Getting here', 'de' => 'Anfahrt', 'it' => 'Come arrivare' ),
		'Nos animaux'       => array( 'en' => 'Our animals', 'de' => 'Unsere Tiere', 'it' => 'I nostri animali' ),
		'Les jardins'       => array( 'en' => 'The gardens', 'de' => 'Die Gärten', 'it' => 'I giardini' ),
		'Contact'           => array( 'en' => 'Contact', 'de' => 'Kontakt', 'it' => 'Contatti' ),
	);
}

/** Ancres de la page d'accueil française et leurs équivalents. */
function jztl_anchors() {
	return array(
		'horaires' => array( 'en' => 'hours', 'de' => 'zeiten', 'it' => 'orari' ),
		'tarifs'   => array( 'en' => 'prices', 'de' => 'preise', 'it' => 'prezzi' ),
		'acces'    => array( 'en' => 'access', 'de' => 'anfahrt', 'it' => 'accesso' ),
		'plan'     => array( 'en' => 'map', 'de' => 'plan', 'it' => 'mappa' ),
		'infos'    => array( 'en' => 'faq', 'de' => 'fragen', 'it' => 'domande' ),
		'soigneur' => array( 'en' => 'keeper', 'de' => 'tierpfleger', 'it' => 'guardiano' ),
		'suivre'   => array( 'en' => 'follow', 'de' => 'folgen', 'it' => 'seguire' ),
	);
}

/** Liens de secours quand une page française n'a pas encore de traduction. */
function jztl_fallbacks() {
	return array(
		'contact' => 'mailto:jardinzoologiquetropical@gmail.com',
	);
}

/** Traduit une adresse interne du menu vers la langue demandée. */
function jztl_translate_url( $url, $lang ) {
	$parts = wp_parse_url( $url );
	if ( ! $parts ) {
		return $url;
	}
	$site_host = wp_parse_url( get_option( 'home' ), PHP_URL_HOST );
	if ( ! empty( $parts['host'] ) && $parts['host'] !== $site_host ) {
		return $url;
	}

	$path     = isset( $parts['path'] ) ? trim( $parts['path'], '/' ) : '';
	$fragment = isset( $parts['fragment'] ) ? $parts['fragment'] : '';
	$front_id = (int) get_option( 'page_on_front' );

	if ( '' === $path ) {
		$post_id = $front_id;
	} else {
		$page    = get_page_by_path( $path, OBJECT, 'page' );
		$post_id = $page ? (int) $page->ID : (int) url_to_postid( $url );
	}
	if ( ! $post_id ) {
		return $url;
	}

	$translated = (int) pll_get_post( $post_id, $lang );
	if ( ! $translated ) {
		$fallbacks = jztl_fallbacks();
		return isset( $fallbacks[ $path ] ) ? $fallbacks[ $path ] : $url;
	}

	if ( $post_id === $front_id && function_exists( 'pll_home_url' ) ) {
		$new = pll_home_url( $lang );
	} else {
		$new = get_permalink( $translated );
	}

	if ( '' !== $fragment ) {
		$anchors  = jztl_anchors();
		$fragment = isset( $anchors[ $fragment ][ $lang ] ) ? $anchors[ $fragment ][ $lang ] : $fragment;
		$new     .= '#' . $fragment;
	}
	return $new;
}

/** Traduit les liens du bloc Navigation dans le HTML rendu (le bloc Navigation n'applique pas render_block_data à ses liens). */
add_filter(
	'render_block_core/navigation-link',
	function ( $html, $block ) {
		if ( ! jztl_polylang_ok() ) {
			return $html;
		}
		$lang = pll_current_language();
		if ( ! $lang || ( function_exists( 'pll_default_language' ) && pll_default_language() === $lang ) ) {
			return $html;
		}
		$attrs = isset( $block['attrs'] ) ? $block['attrs'] : array();

		if ( ! empty( $attrs['url'] ) ) {
			$new_url = jztl_translate_url( $attrs['url'], $lang );
			if ( $new_url !== $attrs['url'] ) {
				$html = preg_replace_callback(
					'/(<a\b[^>]*\shref=")[^"]*(")/',
					function ( $m ) use ( $new_url ) {
						return $m[1] . esc_url( $new_url ) . $m[2];
					},
					$html,
					1
				);
			}
		}

		if ( ! empty( $attrs['label'] ) ) {
			$label  = trim( html_entity_decode( wp_strip_all_tags( $attrs['label'] ), ENT_QUOTES, 'UTF-8' ) );
			$labels = jztl_menu_labels();
			if ( isset( $labels[ $label ][ $lang ] ) ) {
				$translated = esc_html( $labels[ $label ][ $lang ] );
				$html       = preg_replace_callback(
					'/(<span class="wp-block-navigation-item__label">).*?(<\/span>)/s',
					function ( $m ) use ( $translated ) {
						return $m[1] . $translated . $m[2];
					},
					$html,
					1
				);
			}
		}
		return $html;
	},
	10,
	2
);

/** Styles de la barre de drapeaux. */
add_action(
	'wp_head',
	function () {
		?>
<style id="jzt-langues-css">.jzt-langues{display:flex;align-items:center;gap:14px;flex-wrap:wrap}
.jzt-langue{display:inline-flex;align-items:center;gap:6px;text-decoration:none;line-height:1;opacity:.85;transition:opacity .15s}
.jzt-langue:hover{opacity:1}
.jzt-langue svg{width:24px;height:16px;border-radius:2px;box-shadow:0 0 0 1px rgba(0,0,0,.15);display:block}
.jzt-langue-code{font-size:12px;font-weight:600;color:inherit}
.jzt-langue-active{opacity:1;pointer-events:none}
.jzt-langue-active svg{box-shadow:0 0 0 2px rgba(0,0,0,.35)}
.jzt-langues-barre{display:flex;justify-content:flex-end;padding:6px 16px;background:#f5f5f5}
@media (max-width:600px){.jzt-langue-code{display:none}.jzt-langues{gap:10px}}</style>
		<?php
	}
);

/** Barre de drapeaux en haut de chaque page (vers la traduction de la page, sinon l'accueil de la langue). */
add_action(
	'wp_body_open',
	function () {
		if ( ! jztl_polylang_ok() ) {
			return;
		}
		$languages = pll_the_languages(
			array(
				'raw'                    => 1,
				'hide_if_empty'          => 0,
				'hide_if_no_translation' => 0,
			)
		);
		if ( empty( $languages ) || ! is_array( $languages ) ) {
			return;
		}
		$flags = jztl_flags();
		echo '<div class="jzt-langues-barre"><nav class="jzt-langues" aria-label="Langues / Languages">';
		foreach ( $languages as $language ) {
			$slug    = $language['slug'];
			$current = ! empty( $language['current_lang'] );
			printf(
				'<a class="jzt-langue%1$s" href="%2$s" hreflang="%3$s" lang="%3$s" aria-label="%4$s"%5$s>%6$s<span class="jzt-langue-code">%7$s</span></a>',
				$current ? ' jzt-langue-active' : '',
				esc_url( $language['url'] ),
				esc_attr( $slug ),
				esc_attr( $language['name'] ),
				$current ? ' aria-current="page"' : '',
				isset( $flags[ $slug ] ) ? $flags[ $slug ] : '',
				esc_html( strtoupper( $slug ) )
			);
		}
		echo '</nav></div>';
	}
);
