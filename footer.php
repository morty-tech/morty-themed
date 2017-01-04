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
							<li><a href="https://blog.morty.co">Our Blog</a></li>
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

<?php if ( is_prod() ) : ?>
	<!-- GA -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-65061731-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<!-- end GA -->
	<!-- Twitter universal website tag code -->
	<script>
	!function(e,n,u,a){e.twq||(a=e.twq=function(){a.exe?a.exe.apply(a,arguments):
	a.queue.push(arguments);},a.version='1',a.queue=[],t=n.createElement(u),
	t.async=!0,t.src='//static.ads-twitter.com/uwt.js',s=n.getElementsByTagName(u)[0],
	s.parentNode.insertBefore(t,s))}(window,document,'script');
	// Insert Twitter Pixel ID and Standard Event data below
	twq('init','nvdox');
	twq('track','PageView');
	</script>
	<!-- End Twitter universal website tag code -->
<?php endif; ?>

</body>
</html>
