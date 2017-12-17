<!-- horizointal card -->
<div class="card card-horizontal row">
  <div class="col-6 col-md-4">
		<a class="card-img" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	    <?php if ( has_post_thumbnail() ) : ?>
	     <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>"/>
	   <?php endif; ?>
		</a>
	</div>
  <div class="col-6 col-md-8">
    <div class="card-body">
			<h4 class="card-title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h4>
			<small class="text-muted"><?php echo get_the_date('F j, Y'); ?></small>
			<p class="card-intro d-none d-md-block">
				<?php the_excerpt(); ?>
			</p>
    </div>
  </div>
</div>
