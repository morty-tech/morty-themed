<?php
/**
 * Template Name: Optin
 */

if (get_field('background_image') != "") {
	$bgimage = get_field('background_image');
}
get_header(); ?>


<style>
#content {
	background: url(<?php echo $bgimage; ?>);
	background-size: cover;
	background-position: top center;
	min-height: 700px;
}
.optin-content {
	width:65%;
	margin: 0 auto;
	position: relative;
	top:12%;
}
.optin-form {
	
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
						<div class="optin-form">
							<?php the_field('form_code');?>
						<div>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->


			<?php endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
