<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<div class="error-404-image-container">
						<h1 class="page-title"><?php _e( 'Oops! Look&rsquo;s like you&rsquo;re a little lost.', 'twentyseventeen' ); ?></h1>
						<img class="error-404-image" src="<?php echo get_parent_theme_file_uri('/assets/images/space_dog.png') ?>" />
					</div>

					<?php get_search_form(); ?>

				</header><!-- .page-header -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
