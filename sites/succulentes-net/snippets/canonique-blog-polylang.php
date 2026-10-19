/**
 * Page des articles (Blog) traduite avec Polylang : Rank Math ajoute le chemin de
 * l'accueil de la langue à la canonique et à og:url, ce qui donne des adresses en 404.
 * On les remplace par l'adresse réelle de la page des articles, paginée si besoin.
 */
function succulentes_canonique_blog( $url ) {
	if ( ! is_home() || is_front_page() ) {
		return $url;
	}
	$page_id = get_queried_object_id();
	if ( ! $page_id ) {
		return $url;
	}
	$canonique = get_permalink( $page_id );
	if ( ! $canonique ) {
		return $url;
	}
	$paged = (int) get_query_var( 'paged' );
	if ( $paged > 1 ) {
		global $wp_rewrite;
		$canonique = trailingslashit( $canonique ) . user_trailingslashit( $wp_rewrite->pagination_base . '/' . $paged, 'paged' );
	}
	return $canonique;
}
add_filter( 'rank_math/frontend/canonical', 'succulentes_canonique_blog', 20 );
add_filter( 'rank_math/opengraph/url', 'succulentes_canonique_blog', 20 );
