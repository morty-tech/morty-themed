<footer>
	footer
</footer>

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

	<!-- Segment -->
	<script type="text/javascript">
	  !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="4.0.0";
	  analytics.load("F9LUUShvCTQuGKevSyRTm3BPZK8JtAdc");
	  analytics.page();
	  }}();
	</script>
	<!-- End Segment -->

<?php endif; ?>

</body>
</html>
