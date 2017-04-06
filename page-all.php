<?php
/**
 * Template Name: All
 */

 get_header(); ?>

 <div class="wrap">

 	<?php if ( have_posts() ) : ?>
 		<header class="page-header category-header">
 			<?php
 				the_title( '<h1 class="page-title">', '</h1>' );
 			?>
 		</header><!-- .page-header -->
 	<?php endif; ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main" role="main">

 		<?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

		query_posts( array(
			'order_by' => 'date',
      'paged' => $paged
		));
 		if ( have_posts() ) : ?>
 			<?php
 			/* Start the Loop */

 			echo '<div class="items"><div class="items-row">';

 			$count = 0;
 			$newRow = false;
 			while ( have_posts() ) : the_post();
 				if ($newRow) {
 					echo '</div><div class="items-row">';
 				}

 				$count++;
 				$newRow = $count % 3 == 0;
 				get_template_part( 'template-parts/post/content-card', get_post_format() );

 			endwhile;

 			echo '</div></div>';

 			the_posts_pagination( array(
 				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
 				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
 				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
 			) );

 		else :

 			get_template_part( 'template-parts/post/content', 'none' );

 		endif; ?>

 			<div class="entry-supplements entry-supplements__extra_margin">
				<div class="entry-supplemental-section">
					<?php get_search_form(); ?>
				</div>
 				<div class="entry-supplemental-section">
 					<!-- This site is converting visitors into subscribers and customers with OptinMonster - http://optinmonster.com :: Campaign Title: Blog Newsletter Signup --><div id="om-hpogfvcg5knjlp7n-holder"></div><script>var hpogfvcg5knjlp7n,hpogfvcg5knjlp7n_poll=function(){var r=0;return function(n,l){clearInterval(r),r=setInterval(n,l)}}();!function(e,t,n){if(e.getElementById(n)){hpogfvcg5knjlp7n_poll(function(){if(window['om_loaded']){if(!hpogfvcg5knjlp7n){hpogfvcg5knjlp7n=new OptinMonsterApp();return hpogfvcg5knjlp7n.init({"u":"20568.479597","staging":0,"dev":0,"beta":0});}}},25);return;}var d=false,o=e.createElement(t);o.id=n,o.src="//a.optnmnstr.com/app/js/api.min.js",o.async=true,o.onload=o.onreadystatechange=function(){if(!d){if(!this.readyState||this.readyState==="loaded"||this.readyState==="complete"){try{d=om_loaded=true;hpogfvcg5knjlp7n=new OptinMonsterApp();hpogfvcg5knjlp7n.init({"u":"20568.479597","staging":0,"dev":0,"beta":0});o.onload=o.onreadystatechange=null;}catch(t){}}}};(document.getElementsByTagName("head")[0]||document.documentElement).appendChild(o)}(document,"script","omapi-script");</script><!-- / OptinMonster -->
 				</div>
 			</div>
 		</main><!-- #main -->
 	</div><!-- #primary -->
 </div><!-- .wrap -->

<?php get_footer();
