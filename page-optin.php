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
	background-position: top center;
	background-repeat: no-repeat;
	min-height: 700px;
}
.optin-content {
	width:65%;
	margin: 0 auto;
	position: relative;
	top:12%;
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
