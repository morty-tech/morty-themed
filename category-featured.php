<!--
FEATURED CARD
must set catId in parent template
-->
<?php
  $the_query = new WP_Query(array(
      'posts_per_page' => 1,
      'cat' => $catId,
      'meta_key' => '_is_ns_featured_post',
      'meta_value' => 'yes'
  )); ?>

<?php if ( $the_query->have_posts() ) : ?>

  <?php while ( $the_query->have_posts() ) : $the_query->the_post();
    $featuredId = get_the_ID(); ?>
    <?php get_template_part( 'card', 'featured' ); ?>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php endif; ?>
