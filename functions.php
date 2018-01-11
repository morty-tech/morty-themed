<?php

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/index.js', array (), 1.1, true);

// function wpmix_display_globals($content) {
// 	return $content . var_export($GLOBALS['post'], TRUE);
// }
// add_filter('the_content', 'wpmix_display_globals');

function is_prod() {
	$s = strpos(get_site_url(), 'himorty.com');
	return !empty($s);
}