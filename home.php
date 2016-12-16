<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<!--  could potentially put list of categories here -->
	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
				// get all the categories from the database
				$cats = get_categories();

				// loop through the categries
				foreach ($cats as $cat) {
					// setup the cateogory ID
					$cat_id= $cat->term_id;
					// Make a header for the cateogry

					echo '<div class="items"><div class="items-heading"><a href="'.get_category_link( $cat->term_id ).'">'.$cat->name.'</a></div><div class="items-row">';
					// create a custom wordpress query
					query_posts("cat=$cat_id&posts_per_page=3");
					// start the wordpress loop!
					while (have_posts()) : the_post();

						get_template_part( 'template-parts/post/content-card', get_post_format() );

					endwhile; // done our wordpress loop. Will start again for each category

					echo '</div></div>';
				} // done the foreach statement ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
