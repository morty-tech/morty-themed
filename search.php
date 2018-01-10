<?php get_header(); ?>

  <div class="container py-2">
    <?php if ( have_posts() ) : ?>
      <div class="section">
        <div class="row">
          <div class="col-12">
            <div class="category-heading">
              <h4 class="category-name">
                <?php printf( __( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?>
              </h4>
            </div>
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="section-row">
                <?php get_template_part( 'card', 'horizontal' ); ?>
              </div>
            <?php endwhile; ?>
            <?php get_template_part( 'nav', 'below' ); ?>
          </div>
        </div>
      </div>
    <?php else : ?>
      <div class="section">
        <div class="row">
          <div class="col-12">
            <div class="category-heading">
              <h4 class="category-name">
                Nothing Found
              </h4>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-12 col-md-6 mt-4">
            <p class="mb-4">It seems we can’t find what you’re looking for. Try searching again.</p>
            <?php get_template_part( 'search', 'container' ); ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>

<?php get_footer(); ?>
