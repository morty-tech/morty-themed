<div class="card action-card action-card-light">
  <div class="card-title action-card-title">
    <h5 class="title">Great Reads</h5></div>
  <div class="action-card-inner">
    <div class="card-body">
      <ul class="posts-list">
        <?php
          $args = array( 'numberposts' => '3' );
          $recent_posts = wp_get_recent_posts( $args );
          foreach( $recent_posts as $recent ){
            echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"].'</a> </li> ';
          }
          wp_reset_query();
        ?>
      </ul>
    </div>
  </div>
</div>
