<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/app-icon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->
    <?php

    ?>

    <?php
    function endsWith($haystack, $needle)
    {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }

        return (substr($haystack, -$length) === $needle);
    }
    ?>

    <?php   if(endsWith($_SERVER['SERVER_NAME'], 'nl'))  :  ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-51482090-22', 'auto');
      ga('send', 'pageview');

    </script>

    <?php else : ?>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-51482090-23', 'auto');
      ga('send', 'pageview');

    </script>

    <?php endif; ?>


    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!--Google font-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>

  </head>
  <body <?php body_class(); ?> >

    <div class="nav-Full">
      <div class="Bot-Nav">
    	<div class="u-gridContainer relative">
    		<div class="Nav-toggle u-cf">
    			<a class="Navigation-menuToggle" id="js-navCollapse">
    				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
    					<use xlink:href="#icon-menu2"></use>
    				</svg>
    			</a>
    		</div>

            <a href="/home"><img class="logo-header" src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png"></a>

    		<?php include 'includes/navigation.php'; ?>
    		
    		<div class="Mob-contact-ico">
    			<a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:0765977170">
    				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
    					<use xlink:href="#icon-phone"></use>
    				</svg>
    			</a>
    		
                    <a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:info@cestmoi-bruidsmode.eu">
    				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
    					<use xlink:href="#icon-envelope"></use>
    				</svg>
    			</a>
    		</div><!-- header-contact -->
    	</div>
      </div>
    </div>
