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

				$exclude_cat_slugs = array('morty');
				$exclude_cat_ids = array();

				foreach ( $exclude_cat_slugs as $slug ) {
					$c = get_category_by_slug( $slug );
					if (c) {
						$exclude_cat_ids[] = $c->term_id;
					}
				}

				$args = array('exclude' => $exclude_cat_ids, 'number' => 5);
				$cats = get_categories( $args );

				// loop through the categries
				foreach ($cats as $cat) {
					// setup the cateogory ID
					$cat_id= $cat->term_id;
					// Make a header for the cateogry

					echo '<div class="items"><div class="items-heading"><a href="'.get_category_link( $cat->term_id ).'">'.$cat->name.'</a></div><div class="items-row">';
					// create a custom wordpress query
					query_posts( array(
						'cat' => $cat_id,
						'posts_per_page' => 3,
						'order_by' => 'date'
					));
					// start the wordpress loop!
					while (have_posts()) : the_post();

						get_template_part( 'template-parts/post/content-card', get_post_format() );

					endwhile; // done our wordpress loop. Will start again for each category

					echo '</div></div>';
				} // done the foreach statement ?>

				<div class="entry-supplements entry-supplements__extra_margin">
					<div class="entry-supplemental-section">
						<!-- This site is converting visitors into subscribers and customers with OptinMonster - http://optinmonster.com :: Campaign Title: Blog Newsletter Signup --><div id="om-hpogfvcg5knjlp7n-holder"></div><script>var hpogfvcg5knjlp7n,hpogfvcg5knjlp7n_poll=function(){var r=0;return function(n,l){clearInterval(r),r=setInterval(n,l)}}();!function(e,t,n){if(e.getElementById(n)){hpogfvcg5knjlp7n_poll(function(){if(window['om_loaded']){if(!hpogfvcg5knjlp7n){hpogfvcg5knjlp7n=new OptinMonsterApp();return hpogfvcg5knjlp7n.init({"u":"20568.479597","staging":0,"dev":0,"beta":0});}}},25);return;}var d=false,o=e.createElement(t);o.id=n,o.src="//a.optnmnstr.com/app/js/api.min.js",o.async=true,o.onload=o.onreadystatechange=function(){if(!d){if(!this.readyState||this.readyState==="loaded"||this.readyState==="complete"){try{d=om_loaded=true;hpogfvcg5knjlp7n=new OptinMonsterApp();hpogfvcg5knjlp7n.init({"u":"20568.479597","staging":0,"dev":0,"beta":0});o.onload=o.onreadystatechange=null;}catch(t){}}}};(document.getElementsByTagName("head")[0]||document.documentElement).appendChild(o)}(document,"script","omapi-script");</script><!-- / OptinMonster -->
					</div>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
