
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
                <img alt="selling your home" src="<?php echo get_parent_theme_file_uri('/assets/images/svg/018-mortgage.svg') ?>">
              </div>
              <a
                href="<?php echo esc_url(get_category_link( $catMorgage->cat_ID )); ?>">
                  <?php echo $catMorgage->cat_name; ?>
              </a>
            </li>
            <li class="category-list-item">
              <div class="item-icon">
                <img alt="selling your home" src="<?php echo get_parent_theme_file_uri('/assets/images/svg/009-atm.svg') ?>">
              </div>
              <a
                href="<?php echo esc_url(get_category_link( $catMoney->cat_ID )); ?>">
                  <?php echo $catMoney->cat_name; ?>
              </a>
            <li class="category-list-item">
              <div class="item-icon">
                <img alt="selling your home" src="<?php echo get_parent_theme_file_uri('/assets/images/svg/011-light-bulb.svg') ?>">
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
                <img alt="paint roller" src="<?php echo get_parent_theme_file_uri('/assets/images/svg/014-paint-roller.svg') ?>">
              </div>
              <a
                href="<?php echo esc_url(get_category_link( $catHome->cat_ID )); ?>">
                  <?php echo $catHome->cat_name; ?>
              </a>
            </li>
            <li class="category-list-item">
              <div class="item-icon">
                <img alt="selling your home" src="<?php echo get_parent_theme_file_uri('/assets/images/svg/017-for-sale.svg') ?>">
              </div>
              <a
                href="<?php echo esc_url(get_category_link( $catSelling->cat_ID )); ?>">
                  <?php echo $catSelling->cat_name; ?>
              </a>
            </li>
            <li class="category-list-item">
              <div class="item-icon">
                <img alt="selling your home" src="<?php echo get_parent_theme_file_uri('/assets/images/svg/000-morty.svg') ?>">
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
