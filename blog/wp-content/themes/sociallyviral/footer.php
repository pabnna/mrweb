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
      <h4 class="h4maria" style="text-align: center; color:#FFFFFF;">I am here now, but if you need me I can go at the drop of a hat.<br><br>
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
      <iframe class="fotocentrada"
src="https://www.google.com/maps/embed?pb=%211m18%211m12%211m3%211d2381.77742852601%212d-6.259205900000009%213d53.34724030000001%212m3%211f0%212f0%213f0%213m2%211i1024%212i768%214f13.1%213m3%211m2%211s0x48670e84e5c32bd3%3A0x710bebed7bc1eeed%212sO%27Connell+Bridge%2C+Dublin%215e0%213m2%211ses%212sie%214v1444084113940"
        style="border:0" allowfullscreen="" frameborder="0" height="350"
        width="600"></iframe> <br>
      <br>
      <div class="w3-padding-32"> <a
          href="http://mariaramosrodriguez.com/imagenes/cv.pdf" target="_blank"
          class="w3-btn w3-theme-dark fotocentrada"
          style="font-size:25px; font-family: Caviar Dreams;">Download my CV</a> </div>
    </div>
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

</body>
</html>