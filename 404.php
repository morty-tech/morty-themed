<?php get_header(); ?>

  <div class="container py-2">

      <div class="section">
        <div class="row">
          <div class="col-12">
              <h4 class="text-center mb-4">
                Oops. Looks like you're a little lost.
              </h4>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-12 col-md-6 mt-4">
            <?php get_template_part( 'search', 'container' ); ?>
          </div>
        </div>
      </div>
  </div>

<?php get_footer(); ?>
