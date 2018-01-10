<?php
/**
 * Template Name: Optin
 */
<?php get_header(); ?>
  
  <?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ); ?>

  <style>
  #content {
  	background: url(<?php echo $background[0]; ?>);
  	background-size: cover;
  	background-position: center center;
  	background-repeat: no-repeat;
  	min-height: calc(100vh - 95px);
  }
  /*
  Specific to this page, don't move to main stylesheet
  */
  .single-featured-title	{
  	display:none;
  }
  </style>

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
