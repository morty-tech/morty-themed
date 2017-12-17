<div class="section">
  <div class="row">
    <div class="col-lg-4">
      <div class="card action-card action-card-light">
        <div class="card-title action-card-title">
          <h5 class="title">Great Reads</h5></div>
        <div class="action-card-inner">
          <div class="card-body">
            <ol>
              <?php
              	$args = array( 'numberposts' => '3' );
              	$recent_posts = wp_get_recent_posts( $args );
              	foreach( $recent_posts as $recent ){
              		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
              	}
              	wp_reset_query();
              ?>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="card action-card action-card-light">
        <div class="card-title action-card-title">
          <h5 class="title">Next Up!</h5></div>
        <div class="action-card-inner">
          <div class="card-body">
            <div class="card card-horizontal row">
              <?php
                $args = array( 'numberposts' => '1' );
                $recent_post = wp_get_recent_posts( $args )[0];
              ?>
              <div class="col-6 col-md-4">
                <?php echo '<a class="card-img" href="' . get_permalink($recent_post["ID"]) . '"><img class="card-img-top" alt="" src="' . get_the_post_thumbnail_url( $recent_post["ID"] )  . '"/></a>'; ?>

              </div>
              <div class="col-6 col-md-8">
                <div class="card-body">
                  <h4 class="card-title">
                    <?php echo '<a href="' . get_permalink($recent_post["ID"]) . '">' .   $recent_post["post_title"].'</a>'; ?>
                  </h4>
                  <small class="text-muted">
                    <?php echo get_the_date( "F j, Y", $recent_post["ID"] ); ?>
                  </small>
                  <p class="card-intro d-none d-md-block">
                    <?php echo substr($recent_post["post_content"], 0, 170); ?>
                  </p>
                </div>
              </div>
              <?php
                wp_reset_query();
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
