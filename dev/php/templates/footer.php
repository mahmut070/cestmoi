	<div class="full-bg-footer">
		<div class="u-gridContainer">
			<div class="u-gridRow footer-balk">
				<div class="u-gridCol3 space">
				&nbsp;
				</div>

				<div class="u-gridCol9 footer-balk-tekst">
					<p>Wernhoutseweg 139, 4884 AT Wernhout (Zundert), Noord Brabant. Ca. 5 km van Wuustwezel (België)</p>
				</div>
			</div>	
		</div>		
	</div>

	<div class="Footer">
		<div class="u-gridContainer">		
			<div class="u-gridRow">
				<div class="u-gridCol3 social-media-buttons">
					<a href="/home"><img class="logo-footer" src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png"></a>
				
					<!--<a href="/home"><img class="logo-facebook" src="<?php echo get_stylesheet_directory_uri();?>/img/facebook.svg"></a>
					<a href="/home"><img class="logo-twitter" src="<?php echo get_stylesheet_directory_uri();?>/img/twitter.svg"></a>-->

				</div>


				<div class="u-gridCol3 social-media-responsive">
					<!--<a href="/home"><img  src="<?php echo get_stylesheet_directory_uri();?>/img/facebook.svg"></a>
					<a href="/home"><img  src="<?php echo get_stylesheet_directory_uri();?>/img/twitter.svg"></a>-->

				</div>

				<div class="u-gridCol3">
	 				<h4>CONTACT</h4>
					<p>Tel: 076.597.71.70</p>
					<p>Mob: 06.228.33.373<p>
					<p><b>Alleen op afspraak!</b></p>
				</div>

				<div class="u-gridCol3">
					<h4>OPENINGSTIJDEN</h4>
					<p>Maandag t/m zaterdag:</p>
					<p>10.00 uur - 18.00 uur<p>
					<p><b>Donderdag gesloten</b></p>
				</div>

				 <div class="u-gridCol3">
					<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
					<div class="Footer-inner u-gridRow">
						<?php dynamic_sidebar( 'footer-widgets' ); ?>
					</div>
					<?php endif; ?>
				</div>

			</div>
		</div>
	</div>


	<div class="Socket">
		<div class="u-gridContainer">
			<!-- Copyright info -->
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
					<a href="http://www.lokaalgevonden.nl" target="_blank"><span class="lg-blauw">Lokaal</span>Gevonden</a>
			</p>
		</div>
	</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script> 
  <script src="http://localhost:35729/livereload.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html-inspector/0.8.0/html-inspector.js"></script>
  <script>HTMLInspector.inspect();</script>
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
