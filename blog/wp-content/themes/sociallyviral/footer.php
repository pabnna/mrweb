<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SociallyViral
 */
?>

	</div><!-- #content -->
<div id="contacto" style="padding-bottom: 5%; margin-right: 3%; margin-left: 3%; padding-top: 0%;" class="presentacion">
      <br><br><br><br><br>
	  <h1 class="h1maria" style="text-align: center;
        color:#FFFFFF; margin-bottom: 70px; font-size: 31px;">Contact</h1>
      <img src="http://mariaramosrodriguez.com/imagenes/logonuevo.png" alt="Logo MR Digital Marketing Specialist" class="fotocentrada"
        alt="Maria Ramos" height="250" width="250"> <br>
      <h4 class="h4maria" style="text-align: center; color:#FFFFFF;">I am in Ireland right now, but if you need me I can go at the drop of a hat.<br><br>
	  If you want to contact me don't hesitate:<br><strong>ramosrodriguezmar@gmail.com</strong></h4>
	<div id="socialmedia2"><a
          href="https://ie.linkedin.com/in/mariaramosrodriguez"
          target="_blank"><img src="http://mariaramosrodriguez.com/imagenes/linkedin.png"
            alt="Linkedin" height="35;" width="35"></a> <a
          href="https://www.facebook.com/MRramosrodriguezmar/"
          target="_blank"><img
          src="http://mariaramosrodriguez.com/imagenes/facebook.png" alt="Facebook" height="35"
          width="35"></a><a
          href="https://twitter.com/mararamos14"
          target="_blank"><img src="http://mariaramosrodriguez.com/imagenes/twitter.png" alt="Twitter"
          height="35" width="35"></a>
	  </div>
      <br>
      <br>
      <div class="w3-padding-32"> <a
          href="http://mariaramosrodriguez.com/imagenes/cv.pdf" target="_blank"
          class="w3-btn w3-theme-dark fotocentrada"
          style="font-size:25px; font-family: Caviar Dreams;">Download my CV</a> </div>
      </div>
     <a href="https://ie.linkedin.com/in/sergiofernandezredondo/en"target="_blank">Translation supervised by Sergio Fernández</a>
</div><!-- .main-container -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<div class="copyrights">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'sociallyviral' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'sociallyviral' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( '%1$s Theme by %2$s.', 'sociallyviral' ), 'SociallyViral', '<a href="https://mythemeshop.com" rel="designer">MyThemeShop</a>' ); ?>
			</div>
			<a href="#blog" class="toplink" rel="nofollow"><i class="icon-angle-up"></i></a>
			<nav id="navigation" class="footer-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<a href="http://www.freepik.es/fotos-vectores-gratis/negocios" " target="_blank">Vector de Negocios diseñado por Freepik</a>
</body>
</html>