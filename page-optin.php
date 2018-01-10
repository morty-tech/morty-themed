<?php get_header(); ?>

  <div class="container py-2">
    <?php if ( have_posts() ) : ?>
      <div class="section">
        <div class="row">
          <div class="col-12">

            <?php while ( have_posts() ) : the_post(); ?>
              <div class="optin-content">
    						<?php the_content(); ?>
    					</div>
            <?php endwhile; ?>

          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>

<?php get_footer(); ?>
