<?php get_header(); ?>

  <div class="container py-2">
    <?php if ( have_posts() ) : ?>
      <div class="section">
        <div class="row">
          <div class="col-12">
            <div class="category-heading">
              <h4 class="category-name">
                All Posts
              </h4>
            </div>
            <?php
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
              query_posts( array(
                'order_by' => 'date',
                'paged' => $paged,
                'posts_per_page' => 10,
              ));
            ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="section-row">
                <?php get_template_part( 'card', 'horizontal' ); ?>
              </div>
            <?php endwhile; ?>

            <?php get_template_part( 'nav', 'below' ); ?>

          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>

<?php get_footer(); ?>
