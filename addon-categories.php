
<?php
  $catMorgage = get_category_by_slug('mortgage');
  $catMoney = get_category_by_slug('money-matters');
  $catHome = get_category_by_slug('home-improvement');
  $catTips = get_category_by_slug('tips-tricks');
  $catSelling = get_category_by_slug('selling');
  $catMorty = get_category_by_slug('morty');
?>

<div class="card action-card action-card-light">
  <div class="card-title action-card-title">
    <h5 class="title">Browse By Category</h5></div>
  <div class="action-card-inner">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-6">
          <ul class="category-list pl-md-4">
            <li class="category-list-item">
              <div class="item-icon">
                <i class="material-icons">vpn_key</i>
              </div>
              <a
                href="<?php echo esc_url(get_category_link( $catMorgage->cat_ID )); ?>">
                  <?php echo $catMorgage->cat_name; ?>
              </a>
            </li>
            <li class="category-list-item">
              <div class="item-icon">
                <i class="material-icons">account_balance_wallet</i>
              </div>
              <a
                href="<?php echo esc_url(get_category_link( $catMoney->cat_ID )); ?>">
                  <?php echo $catMoney->cat_name; ?>
              </a>
            <li class="category-list-item">
              <div class="item-icon">
                <i class="material-icons">my_location</i>
              </div>
              <a
                href="<?php echo esc_url(get_category_link( $catTips->cat_ID )); ?>">
                  <?php echo $catTips->cat_name; ?>
              </a>
          </ul>
        </div>
        <div class="col-sm-6">
          <ul class="category-list pr-4">
            <li class="category-list-item">
              <div class="item-icon">
                <i class="material-icons">nature_people</i>
              </div>
              <a
                href="<?php echo esc_url(get_category_link( $catHome->cat_ID )); ?>">
                  <?php echo $catHome->cat_name; ?>
              </a>
            </li>
            <li class="category-list-item">
              <div class="item-icon">
                <i class="material-icons">assignment_turned_in</i>
              </div>
              <a
                href="<?php echo esc_url(get_category_link( $catSelling->cat_ID )); ?>">
                  <?php echo $catSelling->cat_name; ?>
              </a>
            </li>
            <li class="category-list-item">
              <div class="item-icon">
                <i class="material-icons">view_array</i>
              </div>
              <a
                href="<?php echo esc_url(get_category_link( $catMorty->cat_ID )); ?>">
                  <?php echo $catMorty->cat_name; ?>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
