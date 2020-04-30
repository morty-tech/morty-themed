    <div class="section">
      <div class="card banner-card banner-card-blue">
        <div class="card-title banner-title">
          <h3 class="title">Ready to Get Started?</h3>
        </div>
        <div class="banner-card-inner">
          <div class="card-body">
            <div class="text-center">
              <a href="https://www.morty.com/onboarding" class="btn btn-light btn-lg">See Your Loan Options</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <div class="row">

          <div class="col-xs-12 col-lg-4">
            <div class="footer__logo">
              <svg xmlns="http://www.w3.org/2000/svg" width="95" viewBox="0 0 1716 560">
                <g class="morty-logo-svg" fill="#473366"><path d="M508.44,225.74V433.87H406.75V234.55c0-33.89-16.27-55.58-48.81-55.58-33.9,0-52.87,23.72-52.87,63.72V433.87H203.37V234.55c0-33.89-16.27-55.58-48.81-55.58-33.9,0-52.88,23.72-52.88,63.72V433.87H0v-339H101.68v31.17c15.6-23,45.43-40.67,90.85-40.67,40,0,69.82,16.26,88.8,44.73,19-27.1,50.16-44.73,98.29-44.73C457.59,85.41,508.44,141,508.44,225.74Z"></path><path d="M520.61,264.38c0-101,80-179,179.64-179s179.66,78,179.66,179-80,179-179.66,179S520.61,365.38,520.61,264.38Zm257.61,0c0-48.13-33.9-80-78-80s-78,31.86-78,80,33.89,80,78,80S778.23,312.52,778.23,264.38Z"></path><path d="M1100.21,88.13V203.37c-42-6.78-101.69,10.17-101.69,77.29V433.87H896.84v-339H998.52v60.32C1012.09,109.82,1057.5,88.13,1100.21,88.13Z"></path><path d="M1273.06,192.52v120c0,29.14,25.09,31.85,69.83,29.14v92.2c-132.87,13.56-171.5-26.45-171.5-121.35v-120h-54.23V94.91h54.23V30.5L1273.06,0V94.91h69.83v97.61Z"></path><path d="M1715.73,94.91,1599.8,423.68c-38,107.8-98.29,150.5-193.21,145.76v-94.9c47.45,0,69.83-14.92,84.74-56.27L1356.42,94.91h111.87l75.23,207.43,63.73-207.43Z"></path></g>
              </svg>
            </div>
            <p>Morty is a licensed mortgage broker.</p>
            <p>
            NMLS ID # 1429243<br/>
              <a
                class="text-underline"
                target="_blank"
                href="http://www.nmlsconsumeraccess.org/EntityDetails.aspx/COMPANY/1429243">
                  NMLS Consumer Access
              </a>
            </p>
            <p>All loans originated by Morty are funded by third party lenders. Morty, Inc. is authorized to do business as “Morty” in certain states.</p>
            <p>© 2020 Morty, Inc.</p>

            <div class="footer__affiliate-logo">
                  <img
                    class="img-fluid"
                    src="<?php echo get_parent_theme_file_uri('/assets/images/eoh.png') ?>"
                    alt="Equal Housing Opportunity" />
                  <label>Equal Housing Opportunity</label>
                </div>
          </div>

          <div class="col-xs-12 col-md-8 col-lg-5 offset-lg-1">
            <div class="row">
              <div class="col-6">
                <h5>Company</h5>
                <ul class="footer__links">
                  <li><a href="https://www.morty.com/about">About Us</a></li>
                  <li><a href="https://www.morty.com/works">How it Works</a></li>
                  <li><a href="https://www.morty.com/faqs">FAQ</a></li>
                  <li><a href="https://www.morty.com/legal/licensing">Legal</a></li>
                  <li><a href="https://www.morty.com/legal/tos">Terms of Service</a></li>
                  <li><a href="https://www.morty.com/legal/privacy">Privacy Policy</a></li>
                  <li><a href="https://hire.withgoogle.com/public/jobs/himortycom">Join our Team</a></li>
                </ul>
              </div>
              <div class="col-6">
                <h5>Connect</h5>
                <ul class="footer__links">
                  <li>
                    <a target="_blank" href="https://twitter.com/HiMorty"><i class="fa fa-twitter"></i>Twitter</a>
                  </li>
                  <li>
                    <a target="_blank" href="https://www.facebook.com/HiMorty/"><i class="fa fa-facebook"></i>Facebook</a>
                  </li>
                  <li>
                    <a target="_blank" href="https://www.instagram.com/himortydotcom/"><i class="fa fa-instagram"></i>Instagram</a>
                  </li>
                  <li>
                    <a target="_blank" href="https://www.linkedin.com/company/morty-inc."><i class="fa fa-linkedin"></i>LinkedIn</a>
                  </li>

                  <li>
                    <a href="https://www.morty.com/contact"><i class="fa fa-envelope"></i>Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" />

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
    <?php wp_footer(); ?>

  </body>
</html>
