<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label class="sr-only">Search for</label>
  <div class="search-container">
    <input class="form-control search"
      type="search"
      name="s"
      placeholder="Search"
      aria-label="Search" />
    <div class="search-border"></div>

    <button type="submit" class="search-submit">
      <i class="material-icons form-icon">search</i>
    </button>
  </div>
</form>
