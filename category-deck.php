<!--
EVERYTHING BUT THE FEATURED CARD
must set catId in parent template
$featuredId is set in category-featured
-->

<?php
  $the_query = new WP_Query(array(
      'posts_per_page' => 3,
      'cat' => $catId,
      'post__not_in' => array( $featuredId )
  )); ?>

<?php if ( $the_query->have_posts() ) : ?>

  <div class="card-deck">
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <?php get_template_part( 'card' ); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </div>
<?php endif; ?>
