<?php
/**
 * WordPress Administration Template Footer
 *
 * @package WordPress
 * @subpackage Administration
 */

// don't load directly
if ( !defined('ABSPATH') )
	die('-1');
?>

<div class="clear"></div></div><!-- wpbody-content -->
<div class="clear"></div></div><!-- wpbody -->
<div class="clear"></div></div><!-- wpcontent -->

<div id="wpfooter" role="contentinfo">
	<?php
	/**
	 * Fires after the opening tag for the admin footer.
	 *
	 * @since 2.5.0
	 */
	do_action( 'in_admin_footer' );
	?>
	<div id="contacto" class="presentacion">
      <br><br><br><br><br>
	  <h1 class="h1maria" style="text-align: center;
        color:#FFFFFF;">Contacto</h1>
      <img src="http://mariaramosrodriguez.com/imagenes/logonuevo.png" alt="Logo MR Digital Marketing Specialist" class="fotocentrada"
        alt="Maria Ramos" height="250" width="250"> <br>
      <h4 class="h4maria" style="text-align: center; color:#FFFFFF;">Ahora estoy aquí,
        pero si me necesitas voy volando.<br><br>Si necesitas ponerte en contacto conmigo escríbeme:<br><strong>ramosrodriguezmar@gmail.com</strong></h4>
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
          href="http://mariaramosrodriguez.com/imagenes/cv_es.pdf" target="_blank"
          class="w3-btn w3-theme-dark fotocentrada"
          style="font-size:25px;">Descarga
          mi CV</a> </div>
    </div>
	<p id="footer-upgrade" class="alignright">
		<?php
		/**
		 * Filter the version/update text displayed in the admin footer.
		 *
		 * WordPress prints the current version and update information,
		 * using core_update_footer() at priority 10.
		 *
		 * @since 2.3.0
		 *
		 * @see core_update_footer()
		 *
		 * @param string $content The content that will be printed.
		 */
		echo apply_filters( 'update_footer', '' );
		?>
	</p>
	<div class="clear"></div>
</div>
<?php
/**
 * Print scripts or data before the default footer scripts.
 *
 * @since 1.2.0
 *
 * @param string $data The data to print.
 */
do_action( 'admin_footer', '' );

/**
 * Prints any scripts and data queued for the footer.
 *
 * @since 2.8.0
 */
do_action( 'admin_print_footer_scripts' );

/**
 * Print scripts or data after the default footer scripts.
 *
 * The dynamic portion of the hook name, `$GLOBALS['hook_suffix']`,
 * refers to the global hook suffix of the current page.
 *
 * @since 2.8.0
 *
 * @global string $hook_suffix
 * @param string $hook_suffix The current admin page.
 */
do_action( "admin_footer-" . $GLOBALS['hook_suffix'] );

// get_site_option() won't exist when auto upgrading from <= 2.7
if ( function_exists('get_site_option') ) {
	if ( false === get_site_option('can_compress_scripts') )
		compression_test();
}

?>

<div class="clear"></div></div><!-- wpwrap -->
<script type="text/javascript">if(typeof wpOnload=='function')wpOnload();</script>
</body>
</html>

