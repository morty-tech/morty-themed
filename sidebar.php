<aside id="sidebar" role="complementary">
<?php if ( is_active_sidebar( 'post_sidebar' ) ) : ?>
<div id="primary" class="widget-area">
<div class="xoxo">
  <?php if ( is_front_page() ) :?>
    <?php dynamic_sidebar( 'homepage_sidebar' ); ?>
  <?php else : ?>
    <?php dynamic_sidebar( 'post_sidebar' ); ?>
  <?php endif; ?>
</div>
</div>
<?php endif; ?>
</aside>
