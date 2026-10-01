<?php
/**
 * Succulentes.net : formulaire d'inscription Brevo inséré au milieu des pages.
 *
 * À coller dans l'extension Code Snippets (type « PHP », exécution « partout » ou « front-end »).
 *
 * - Insère le formulaire de la langue courante (Polylang) avant l'intertitre H2 situé au milieu du texte.
 * - Ne touche ni à l'introduction ni au sommaire : jamais avant le 2e H2.
 * - Pas de balise de titre (h2/h3) dans l'encadré : le sommaire et la structure SEO ne changent pas.
 * - Ignoré si la page contient déjà un formulaire Brevo, sur l'accueil et sur les pages trop courtes.
 * - Une langue sans formulaire (valeur 0) n'affiche rien.
 *
 * Formulaires de l'extension Brevo (Brevo > Formulaires) :
 *   fr : id 1 (liste succulentes-FR, 17)
 *   en : id 2 (liste succulentes-EN, 30)
 *   it : id 3 (liste succulentes-IT, 29)
 *   es : id 4 (liste succulentes-ES, 31)
 */

add_filter( 'the_content', 'succulentes_newsletter_milieu', 20 );

function succulentes_newsletter_milieu( $content ) {
	if ( is_admin() || is_feed() || is_front_page() || ! is_singular( array( 'page', 'post' ) ) || ! in_the_loop() || ! is_main_query() ) {
		return $content;
	}
	if ( false !== strpos( $content, 'sib_signup_form' ) || false !== strpos( $content, 'sibwp_form' ) ) {
		return $content;
	}

	$forms = array(
		'fr' => 1,
		'en' => 2,
		'it' => 3,
		'es' => 4,
	);
	$texts = array(
		'fr' => array( 'Abonnez-vous à la newsletter de Succulentes', 'Conseils de culture, éclairages botaniques et nouvelles fiches, directement dans votre boîte mail. Désinscription possible à tout moment.' ),
		'en' => array( 'Subscribe to the Succulentes newsletter', 'Growing tips, botanical insights and new plant profiles, straight to your inbox. Unsubscribe at any time.' ),
		'it' => array( 'Iscriviti alla newsletter di Succulentes', 'Consigli di coltivazione, approfondimenti botanici e nuove schede, direttamente nella tua casella di posta. Disiscrizione possibile in qualsiasi momento.' ),
		'es' => array( 'Suscríbase al boletín de Succulentes', 'Consejos de cultivo, apuntes de botánica y nuevas fichas, directamente en su correo. Puede darse de baja en cualquier momento.' ),
	);

	$lang = function_exists( 'pll_current_language' ) ? pll_current_language( 'slug' ) : 'fr';
	if ( empty( $forms[ $lang ] ) ) {
		return $content;
	}

	// Positions des H2 ; au moins 4 pour que la page soit assez longue.
	if ( ! preg_match_all( '/<h2[\s>]/i', $content, $matches, PREG_OFFSET_CAPTURE ) || count( $matches[0] ) < 4 ) {
		return $content;
	}
	$h2    = $matches[0];
	$index = max( 2, (int) floor( count( $h2 ) / 2 ) ); // Jamais avant le 3e H2 (après « L'essentiel »).
	$pos   = $h2[ $index ][1];

	$box  = '<aside class="succulentes-newsletter" aria-label="Newsletter">';
	$box .= '<p class="succulentes-newsletter__titre"><strong>' . esc_html( $texts[ $lang ][0] ) . '</strong></p>';
	$box .= '<p class="succulentes-newsletter__texte">' . esc_html( $texts[ $lang ][1] ) . '</p>';
	$box .= do_shortcode( '[sibwp_form id=' . (int) $forms[ $lang ] . ']' );
	$box .= '</aside>';

	return substr( $content, 0, $pos ) . $box . substr( $content, $pos );
}

add_action( 'wp_head', 'succulentes_newsletter_style' );

function succulentes_newsletter_style() {
	echo '<style>.succulentes-newsletter{background:#a0cbdf;padding:1.5em;margin:2em 0;border-radius:6px}.succulentes-newsletter__titre{margin:0 0 .5em;font-size:1.15em}.succulentes-newsletter__texte{margin:0 0 1em}</style>';
}
