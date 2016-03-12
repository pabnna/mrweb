<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
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
    <link rel="shortcut icon" href="http:///imagenes/logo_final.png">
    <meta charset="utf-8">
    <title>Blog Hazlo Personal Marketing</title>
    <!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
    <script>var __adobewebfontsappname__="dreamweaver"</script>
    <script src="http://use.edgefonts.net/crushed:n4:default;abel:n4:default;abril-fatface:n4:default.js" type="text/javascript"></script>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="portada">
	<div id="header">
	 	<ul id="mainmenu">
		  <li><a href="http://mariaramosrodriguez.com/index.html">INICIO</a></li>
		  <li><a href="http://mariaramosrodriguez.com/ciudades.html">CIUDADES</a></li>
		  <li><a href="http://mariaramosrodriguez.com/loquesehacer.html">LO QUE SÉ HACER</a></li>
		  <li><a href="http://mariaramosrodriguez.com/http://lahuerfanaprofesional.blogspot.ie/" target="_blank">BLOG</a></li>
		  <li><a href="#contacto">CONTACTO</a></li>
		</ul>
		<div class="logonuevo" style="left:0%; top:3.2%; width:150px;">
	<a href="http://mariaramosrodriguez.com/index.html"><img src="http://mariaramosrodriguez.com/imagenes/espanol.png" alt="Option Spanish language"></a>
	<a href="http://mariaramosrodriguez.com/indexingles.html"><img src="http://mariaramosrodriguez.com/imagenes/english.png" alt="Optioin English language"></a>
	 	</div>
	<a href="http://mariaramosrodriguez.com/index.html"><img src="http://mariaramosrodriguez.com/imagenes/logonuevo.png" alt="Logo MR Digital Marketing Specialist" class="logonuevo" height="160px;" width="160px"></a>
	</div>
 
<img src="http://mariaramosrodriguez.com/imagenes/wireframe1prueba3.png" alt="Portada ¿Sabes cómo hacer para conectar con tu audiencia?" height="50%;" width="100%">
		<h2 class="h2maria">Maria Ramos, experta en Marketing Digital, Marketing de Contenidos, 
		SEO y Redes Sociales</h2>
		<a href="presentacion.html" style="position: absolute; bottom: 8%; right: 40%; display: block; width: 16%;"> 
		  <button class="buttonmaria" type="button">Más información</button>
		</a>   
</div>
<div id="page" class="site">
	<div class="site-inner" style="margin-top:12%;">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

	

		<div id="content" class="site-content">
