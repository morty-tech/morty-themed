<div class="section">
  <div class="row">
    <div class="col-lg-4">
      <div class="card action-card action-card-light">
        <div class="card-title action-card-title">
          <h5 class="title">Great Reads</h5></div>
        <div class="action-card-inner">
          <div class="card-body">
            <ol>
              <?php
              	$args = array( 'numberposts' => '3' );
              	$recent_posts = wp_get_recent_posts( $args );
              	foreach( $recent_posts as $recent ){
              		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
              	}
              	wp_reset_query();
              ?>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="card action-card action-card-light">
        <div class="card-title action-card-title">
          <h5 class="title">Next Up!</h5></div>
        <div class="action-card-inner">
          <div class="card-body">
            <?php
              $cat_ID = get_the_category()[0]->cat_ID;
              $the_query = new WP_Query(array(
                  'posts_per_page' => 1,
                  'cat' => $cat_ID,
                  'meta_key' => '_is_ns_featured_post',
                  'meta_value' => 'yes',
                  'post__not_in' => array( get_the_ID() )
              ));

              if ( !$the_query->have_posts() ) {
                $the_query = new WP_Query(array(
                    'posts_per_page' => 1,
                    'cat' => $cat_ID,
                    'post__not_in' => array( get_the_ID() )
                ));
              }
            ?>

            <?php if ( $the_query->have_posts() ) : ?>

            	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            		<?php get_template_part( 'card', 'horizontal' ); ?>
            	<?php endwhile; ?>
            	<?php wp_reset_postdata(); ?>

            <?php endif; ?>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>
