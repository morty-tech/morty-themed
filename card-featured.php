<!-- featured card -->
<div class="card featured-card">
  <a class="card-img" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
    <?php if ( has_post_thumbnail() ) : ?>
     <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>"/>
   <?php endif; ?>
   <label class="feature-label">Featured</label>
	</a>
  <div class="card-body">
    <h5 class="card-title">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h5>
    <p class="card-intro d-none d-md-block">
      <?php echo strip_tags(get_the_excerpt()); ?>
    </p>
  </div>
</div>
