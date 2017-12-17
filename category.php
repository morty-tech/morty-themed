<?php get_header(); ?>
<div class="hero">
  <img class="hero-image" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>" alt="">
  <div class="hero-heading">
    <h1 class="heading">
      <?php if (category_description()) echo category_description(); else echo single_cat_title();?></h1>
  </div>
</div>

<div class="container">
  <div class="section">
    <div class="row">
      <div class="col-sm-8">
        <!-- FEATURED CARD -->
        <?php
          $the_query = new WP_Query(array(
              'posts_per_page' => 1,
              'cat' => get_the_category()[0]->cat_ID,
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
      </div>

      <div class="col-sm-4">
        <?php get_template_part( 'card', 'cta' ); ?>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="row">
      <div class="col-12">
        <div class="category-heading">
          <h4 class="category-name">Most Recent Articles</h4>
        </div>

        <!-- EVERYTHING BUT THE FEATURED CARD -->
        <?php
          $the_query = new WP_Query(array(
              'posts_per_page' => 10,
              'cat' => get_the_category()[0]->cat_ID,
              'post__not_in' => array( $featuredId )
          )); ?>

        <?php if ( $the_query->have_posts() ) : ?>

        	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="section-row">
              <?php get_template_part( 'card', 'horizontal' ); ?>
            </div>
        	<?php endwhile; ?>
        	<?php wp_reset_postdata(); ?>

        <?php endif; ?>

      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>
