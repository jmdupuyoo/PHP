/**
 * Adresses /product/… créées lors du piratage (le site n'a pas de boutique) :
 * réponse 410 au lieu de 404, pour que Google les retire plus vite de son index.
 */
add_action( 'template_redirect', function () {
	if ( ! is_404() ) {
		return;
	}
	$path = (string) wp_parse_url( $_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH );
	if ( 0 === strpos( $path, '/product/' ) ) {
		status_header( 410 );
	}
} );
