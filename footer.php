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
					<img class="footer-logo-image" src="<?php echo get_parent_theme_file_uri('/assets/images/mortylogo-cream.png') ?>" />
					<div class="footer-section--content">
						<ul class="footer-section--content--list footer-section--content--list--morespacing">
							<li>
								The smart home mortgage. Find the right mortgage from the right lender at a great price.
							</li>

	            <li>
	              NMLS ID # 1429243 <br />
	              <a className="text-underline"
	                target="_blank" href="http://www.nmlsconsumeraccess.org/EntityDetails.aspx/COMPANY/1429243">NMLS Consumer Access</a>
	            </li>
	            <li>
	              Morty is not yet approved or licensed to originate loans in New York State.
	            </li>
	            <li>
	              &copy; 2017 Morty, Inc.
	            </li>
						</ul>
					</div>
				</div>
				<div class="footer-section">
					<h4 class="footer-section--heading">Resources</h4>
					<div class="footer-section--content">
						<ul class="footer-section--content--list">
							<li><a href="http://blog.himorty.com/all">All Posts</a></li>
							<li><a href="http://blog.himorty.com/search">Search Posts</a></li>
							<li><a href="https://www.himorty.com/how-it-works">How Morty Works</a></li>
							<li><a href="https://www.himorty.com/signup/profile">Get Started</a></li>
						</ul>
					</div>
				</div>
				<div class="footer-section">
					<h4 class="footer-section--heading">Company</h4>
					<div class="footer-section--content">
						<ul class="footer-section--content--list">
							<li><a href="https://www.himorty.com">Morty Home</a></li>
							<li><a href="https://www.himorty.com/contact">Contact</a></li>
							<li><a href="https://www.himorty.com/terms">Terms of Service</a></li>
							<li><a href="https://www.himorty.com/privacy">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
				<div class="footer-section">
					<h4 class="footer-section--heading">Connect</h4>
					<div class="footer-section--content">
						<ul class="footer-section--content--list">
							<li><a href="tel:844-457-8564"><i class="fa fa-phone"></i> (844) 457-8564</a></li>
							<li><a href="mailto:hello@himorty.com"><i class="fa fa-envelope"></i> Email</a></li>
							<li><a target="_blank" href="https://twitter.com/HiMorty"><i class="fa fa-twitter"></i> Twitter</a></li>
							<li><a target="_blank" href="https://www.facebook.com/HiMorty/"><i class="fa fa-facebook"></i> Facebook</a></li>
							<li><a target="_blank" href="https://www.linkedin.com/company/morty-inc."><i class="fa fa-linkedin"></i> LinkedIn</a></li>
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

	<!-- This site is converting visitors into subscribers and customers with OptinMonster - http://optinmonster.com -->
	<script>var om496781,om496781_poll=function(){var r=0;return function(n,l){clearInterval(r),r=setInterval(n,l)}}();!function(e,t,n){if(e.getElementById(n)){om496781_poll(function(){if(window['om_loaded']){if(!om496781){om496781=new OptinMonsterApp();return om496781.init({"s":"20568.496781","staging":0,"dev":0,"beta":0});}}},25);return;}var d=false,o=e.createElement(t);o.id=n,o.src="//a.optnmnstr.com/app/js/api.min.js",o.async=true,o.onload=o.onreadystatechange=function(){if(!d){if(!this.readyState||this.readyState==="loaded"||this.readyState==="complete"){try{d=om_loaded=true;om496781=new OptinMonsterApp();om496781.init({"s":"20568.496781","staging":0,"dev":0,"beta":0});o.onload=o.onreadystatechange=null;}catch(t){}}}};(document.getElementsByTagName("head")[0]||document.documentElement).appendChild(o)}(document,"script","omapi-script");</script><!-- / OptinMonster -->
<?php endif; ?>

</body>
</html>
