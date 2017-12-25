<?php get_header(); ?>
<div class="container py-2">
  <?php if ( have_posts() ) : ?>
    <div class="section">
      <div class="row">
        <div class="col-12">
          <div class="category-heading">
            <h4 class="category-name">
              <?php
              if ( is_day() ) { printf( __( 'Daily Archives: %s', 'blankslate' ), get_the_time( get_option( 'date_format' ) ) ); }
              elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'blankslate' ), get_the_time( 'F Y' ) ); }
              elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'blankslate' ), get_the_time( 'Y' ) ); }
              else { _e( 'Archives', 'blankslate' ); }
              ?>
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
  <?php endif; ?>
</div>

<?php get_footer(); ?>
