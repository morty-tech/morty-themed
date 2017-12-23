<div class="card action-card action-card-dark">
  <div class="card-title action-card-title">
    <h5 class="title">Pre-Approval Series</h5></div>
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
