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

add_theme_support('post-thumbnails', array(
'post',
'page',
'custom-post-type-name',
));

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Post Sidebar',
		'id'            => 'post_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Homepage Sidebar',
		'id'            => 'homepage_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

  register_sidebar( array(
		'name'          => 'Newsletter Inline Sidebar',
		'id'            => 'newsletter_inline_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}

add_action( 'widgets_init', 'arphabet_widgets_init' );
