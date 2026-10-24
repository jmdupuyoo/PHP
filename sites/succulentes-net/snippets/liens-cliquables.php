/**
 * Rend cliquables les adresses écrites en texte brut dans les pages et articles
 * (listes « Sites de référence », bibliographies), sans modifier le contenu enregistré.
 * Liens externes : nouvel onglet, rel="nofollow noopener". Liens vers succulentes.net : sans nofollow.
 */
add_filter( 'the_content', function ( $content ) {
	if ( is_admin() || ! is_singular() || false === strpos( $content, 'http' ) ) {
		return $content;
	}
	$content = make_clickable( $content );
	return preg_replace_callback(
		'#<a href="(https?://[^"]+)" rel="nofollow">#',
		function ( $m ) {
			$host = wp_parse_url( $m[1], PHP_URL_HOST );
			if ( $host && preg_match( '#(^|\.)succulentes\.net$#', $host ) ) {
				return '<a href="' . $m[1] . '">';
			}
			return '<a href="' . $m[1] . '" target="_blank" rel="nofollow noopener">';
		},
		$content
	);
}, 20 );
