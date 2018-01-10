<?php
/**
 * Template Name: Optin
 */


$background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' );
get_header(); ?>


<style>
#content {
	background: url(<?php echo $background[0]; ?>);
	background-size: cover;
	background-position: center center;
	background-repeat: no-repeat;
	min-height: calc(100vh - 95px);
}
/*
Specific to this page, don't move to main stylesheet
*/
.single-featured-title	{
	display:none;
}
</style>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php // Start the loop
			while ( have_posts() ) : the_post();?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="optin-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->


			<?php endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();