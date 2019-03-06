<div class="card action-card action-card-dark">
  <div class="card-title action-card-title">
    <h5 class="title">Pre-Approval Series</h5></div>
  <div class="action-card-inner">
    <div class="card-body">
      <ul class="posts-list">
        <?php
          $the_query = new WP_Query(array(
              'posts_per_page' => 3,
              'tax_query' => array(
              		array(
              			'taxonomy' => 'series',
              			'field'    => 'slug',
              			'terms'    => 'pre-approval',
              		),
              ),
              'orderby' => 'date',
              'order'   => 'DESC'
          )); ?>

        <?php if ( $the_query->have_posts() ) : ?>

        	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li>
              <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></li>
        	<?php endwhile; ?>
        	<?php wp_reset_postdata(); ?>

        <?php endif; ?>

      </ul>
    </div>
  </div>
</div>
