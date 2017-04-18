<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding">
	<div class="wrap">
		<?php if ( !is_front_page() ) : ?>
			<?php the_custom_logo(); ?>
		<?php endif; ?>
		<div class="site-branding-text">
			<?php if ( is_front_page() ) : ?>
				<img id="blog-brand" src="<?php echo get_parent_theme_file_uri('/assets/images/mortybloglogo2.png') ?>" />
				<?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
						<a href="#content" class="menu-scroll-down">
							<svg class="icon icon-arrow-right" aria-hidden="true" role="img">
							<use href="#icon-arrow-right" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrow-right"></use> </svg>
							<span class="screen-reader-text">Scroll down to content</span>
						</a>
			<?php endif; ?>


		</div><!-- .site-branding-text -->
	</div><!-- .wrap -->
</div><!-- .site-branding -->
