<?php

/**

 * The header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="content">

 *

 * @package SociallyViral

 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>  

<meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Especialista en Marketing Digital,

      Comunicacion y Redes Sociales y en creacion y optimizacion de

      contenidos web">

	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

	<link rel="alternate" hreflang="en" href="http://www.mariaramosrodriguez.com/en/">

    <link rel="stylesheet" type="text/css" href="http://mariaramosrodriguez.com/css/index.css">

    <style type="text/css">



</style>

    <link rel="shortcut icon" href="http://mariaramosrodriguez.com/imagenes/logo_final.png">

    <meta charset="utf-8">

    <title>Maria Ramos. Marketing y Comunicación Digital</title>

    <!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->

    <script>var __adobewebfontsappname__="dreamweaver"</script>

    <script src="http://use.edgefonts.net/crushed:n4:default;abel:n4:default;abril-fatface:n4:default.js" type="text/javascript"></script>  	

<meta charset="<?php bloginfo( 'charset' ); ?>">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--iOS/android/handheld specific -->

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta itemprop="name" content="<?php bloginfo( 'name' ); ?>" />

	<meta itemprop="url" content="<?php echo site_url(); ?>" />

	<?php if ( is_singular() ) { ?>

	<meta itemprop="creator accountablePerson" content="<?php $user_info = get_userdata($post->post_author); echo $user_info->first_name.' '.$user_info->last_name; ?>" />

	<?php }

	wp_head(); ?>

</head>



<body <?php body_class(); ?>>

 <!-- Google Tag Manager -->

<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-542FDH"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-542FDH');</script>

<!-- End Google Tag Manager -->

<div id="portada">

     <div id="header">

	 <ul id="mainmenu">

		  <li><a href="index.html">INICIO</a></li>

		  <li><a href="ciudades.html">CIUDADES</a></li>

		  <li><a href="loquesehacer.html">LO QUE SÉ HACER</a></li>

		  <li><a href="http://lahuerfanaprofesional.blogspot.ie/" target="_blank">BLOG</a></li>

		  <li><a href="#contacto">CONTACTO</a></li>

	</ul>

	  <div class="logonuevo" style="left:0%; top:3.2%; width:150px;">

	<a href="index.html"><img src="http://mariaramosrodriguez.com/imagenes/espanol.png" alt="Optioin Spanish language"></a>

	<a href="indexingles.html"><img src="http://mariaramosrodriguez.com/imagenes/english.png" alt="Optioin English language"></a>

	 </div>

	<a href="http://mariaramosrodriguez.com"><img src="http://mariaramosrodriguez.com/imagenes/logonuevo.png" alt="Logo MR Digital Marketing Specialist" class="logonuevo" height="160px;" width="160px"></a>

	  </div>

		<img src="http://mariaramosrodriguez.com/imagenes/portadablog.png" alt="Portada blog Hazlo Personal Marketing" height="50%;" width="100%" style="margin-top: 95px;">

		<h2 class="h2portada">Utiliza las técnicas del mejor Digital Marketing para promocionar la más importante de las marcas, tu marca personal.</h2>



		</div>      

    </div>

	<div id="page" class="hfeed site">

		<div class="main-container">

			<header id="masthead" class="site-header" role="banner">

				<div class="site-branding">

					<?php $header_image = get_header_image(); 

					if (!empty($header_image)) { ?>

						<?php if( is_front_page() || is_home() || is_404() ) { ?>

							<h1 id="logo" class="image-logo" itemprop="headline">

								<a href="<?php echo esc_url(home_url()); ?>"><img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php bloginfo( 'name' ); ?>"></a>

							</h1><!-- END #logo -->

						<?php } else { ?>

						    <h2 id="logo" class="image-logo" itemprop="headline">

								<a href="<?php echo esc_url(home_url()); ?>"><img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>"></a>

							</h2><!-- END #logo -->

						<?php } ?>

					<?php } else { ?>

						<?php if( is_front_page() || is_home() || is_404() ) { ?>

							<h1 id="logo" class="text-logo" itemprop="headline">

								<a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo( 'name' ); ?></a>

							</h1><!-- END #logo -->

						<?php } else { ?>

						    <h2 id="logo" class="text-logo" itemprop="headline">

								<a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo( 'name' ); ?></a>

							</h2><!-- END #logo -->

						<?php } ?>

					<?php } ?>

				</div><!-- .site-branding -->



				<?php $headerSearchEnable = get_theme_mod('sociallyviral_header_search');

				if( $headerSearchEnable == 1 ) { ?>

					<div class="header-search"><?php get_search_form( ); ?></div>

				<?php } ?>



				<div class="header-social">

					<?php 

					$sociallyviral_fb_url = get_theme_mod('sociallyviral_header_facebook');

					$sociallyviral_twt_url = get_theme_mod('sociallyviral_header_twitter');

					$sociallyviral_gp_url = get_theme_mod('sociallyviral_header_google_plus');

					$sociallyviral_yt_url = get_theme_mod('sociallyviral_header_youtube');



					if(!empty($sociallyviral_fb_url)) { ?>

						<a href="<?php echo esc_url(get_theme_mod('sociallyviral_header_facebook')); ?>" class="header-facebook" style="background: #375593">

							<i class="icon-facebook"></i>

						</a>

					<?php } 



					if(!empty($sociallyviral_twt_url)) { ?>

						<a href="<?php echo esc_url(get_theme_mod('sociallyviral_header_twitter')); ?>" class="header-twitter">

							<i class="icon-twitter"></i>

						</a>

					<?php }



					if(!empty($sociallyviral_gp_url)) { ?>

						<a href="<?php echo esc_url(get_theme_mod('sociallyviral_header_google_plus')); ?>" class="header-google-plus">

							<i class="icon-google-plus"></i>

						</a>

					<?php }



					if(!empty($sociallyviral_yt_url)) { ?>

						<a href="<?php echo esc_url(get_theme_mod('sociallyviral_header_youtube')); ?>" class="header-youtube-play">

							<i class="icon-youtube-play"></i>

						</a>

					<?php } ?>

				</div>



				<a href="#" id="pull" class="toggle-mobile-menu"><?php _e('Menu', 'sociallyviral'); ?></a>

				<nav id="navigation" class="primary-navigation mobile-menu-wrapper" role="navigation">

					<?php if ( has_nav_menu( 'primary' ) ) { ?>

						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu clearfix', 'container' => '' ) ); ?>

					<?php } else { ?>

						<ul class="menu clearfix">

							<?php wp_list_categories('title_li='); ?>

						</ul>

					<?php } ?>

				</nav><!-- #site-navigation -->

			</header><!-- #masthead -->



			<div id="content" class="site-content">