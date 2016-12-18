<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

		</div><!-- #content -->

		<footer class="footer" role="contentinfo">
			<div class="wrap">
				<div class="footer-section">
					<img class="footer-logo-image" src="<?php echo get_parent_theme_file_uri('/assets/images/logo-white.png') ?>" />
					<div class="footer-section--content">
						Morty is your modern, online mortgage. Find the right mortgage from the right lender at a great price.
					</div>
				</div>
				<div class="footer-section">
					<h4 class="footer-section--heading">Resources</h4>
					<div class="footer-section--content">
						<ul class="footer-section--content--list">
							<li><a href="https://www.morty.co">Home</a></li>
							<li><a href="https://www.morty.co/how-it-works">How Morty Works</a></li>
							<li><a href="http://learn.morty.co/blog/">Our Blog</a></li>
						</ul>
					</div>
				</div>
				<div class="footer-section">
					<h4 class="footer-section--heading">Company</h4>
					<div class="footer-section--content">
						<ul class="footer-section--content--list">
							<li><a href="https://www.morty.co/contact">Contact</a></li>
							<li><a href="https://www.morty.co/terms">Terms of Service</a></li>
							<li><a href="https://www.morty.co/privacy">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
				<div class="footer-section">
					<h4 class="footer-section--heading">Connect</h4>
					<div class="footer-section--content">
						<ul class="footer-section--content--list">
							<li><a target="_blank" href="https://twitter.com/HiMorty"><i class="fa fa-twitter"></i> Twitter</a></li>
							<li><a target="_blank" href="https://www.facebook.com/HiMorty/"><i class="fa fa-facebook"></i> Facebook</a></li>
							<li><a target="_blank" href="https://www.linkedin.com/company/morty-inc."><i class="fa fa-linkedin"></i> LinkedIn</a></li>
							<li><a href="tel:844-457-8564"><i class="fa fa-phone"></i> (844) 457-8564</a></li>
							<li><a href="mailto:hello@morty.co"><i class="fa fa-envelope"></i> Email</a></li>
						</ul>
					</div>
				</div>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
