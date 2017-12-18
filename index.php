<?php get_header(); ?>

<?php
  $the_query = new WP_Query(array(
      'meta_key' => '_is_ns_featured_post',
      'meta_value' => 'yes'
  )); ?>

<?php if ( $the_query->have_posts() ) : ?>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
    <ol class="carousel-indicators">
      <?php $count = $the_query->post_count;
        for ($x = 0; $x < $count; $x++) { ?>
          <li data-target="#carouselExampleIndicators"
              data-slide-to="<?php echo $x ?>"
              class="<?php if ( $x == 0 ) echo 'active'; ?>"></li>
      <?php } ?>
    </ol>

    <div class="carousel-inner">
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="carousel-item <?php if ( $the_query->current_post == 0 ) echo 'active'; ?>">
          <div class="carousel-image">
            <img class="d-block w-100"
              src="<?php the_post_thumbnail_url(); ?>"/>
          </div>
          <div class="carousel-caption d-none d-md-block">
            <h2 class="caption"><a href="<?php the_permalink(); ?>">
                <?php the_title(); ?></a></h2>
          </div>
        </div>
      <?php endwhile; ?>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <?php wp_reset_postdata(); ?>
<?php endif; ?>



<?php get_footer(); ?>
