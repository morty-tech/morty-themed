<?php get_header(); ?>

  <div class="container py-2">
    <?php if ( have_posts() ) : ?>
      <div class="section">
        <div class="row">
          <div class="col-12">

            <?php while ( have_posts() ) : the_post(); ?>
    						<?php the_content(); ?>
            <?php endwhile; ?>

          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>

<?php get_footer(); ?>
