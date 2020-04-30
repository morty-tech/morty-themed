<!-- single article -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <div class="hero">
      <?php if ( is_singular() && has_post_thumbnail() ) { the_post_thumbnail(); } ?>
    </div>

    <div class="post-header">
      
        <h1 class="post-title"><?php the_title(); ?></h1>
        <?php
          $terms = get_the_terms( $post->ID, 'series' );
          if ( !empty( $terms ) ){
            $series = $terms[0];
          ?>
          <div class="post-series">
            Part of our <a href="<?php echo esc_url(get_term_link($series)); ?>"><?php echo $series->name ?></a>
          </div>
        <?php } else { ?>
          <div class="post-about">
        <?php
              $cats = get_the_category();
              $cat = $cats[0];
        ?>
        Part of <a href="<?php echo esc_url(get_category_link( $cat->cat_ID )); ?>"><?php echo $cat->cat_name; ?></a></div>
        <?php }  ?>  
    </div>
  </header>

  <div class="container">
    <div class="row">

      <div class="col-xs-12 col-md-8 offset-lg-1">
        <?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
        <?php if ( is_singular() ) { get_template_part( 'entry-social' ); } ?>
      </div>

      <div class="col-xs-12 col-md-4 col-lg-3">
        <?php get_sidebar(); ?>
      </div>
    </div>

  <?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
  </div>

</article>
