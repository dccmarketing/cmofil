<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Children's Museum of Illinois
 */

$dir = wp_upload_dir();

?>

		</div><!-- .wrap -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="footer-wrap wrap">
			<div class="partners">
				<h2 class="partners-header">Official Corporate Partners</h2>
				<ul><?php

				$images = get_field( 'corporate_partners', 'option' );

				if ( ! empty( $images ) ) {

					foreach ( $images as $image ) {

						?><li><img src="<?php echo $image['sizes']['medium']; ?>" class="partner-logo"></li><?php

					}

				}

				?></ul>
			</div>
			<div class="footer-logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" />
			</div>
			<div class="footer-menu"><?php

				if ( has_nav_menu( 'primary' ) ) {

					$menu['theme_location'] 	= 'primary';
					$menu['container'] 			= 'div';
					$menu['container_id']    	= 'menu-footer';
					$menu['container_class'] 	= 'menu nav-footer';
					$menu['menu_id']         	= 'menu-footer-items';
					$menu['menu_class']      	= 'menu-items';
					$menu['depth']           	= 1;
					$menu['fallback_cb']     	= '';

					wp_nav_menu( $menu );

				}

			?></div>
			<div class="mfa-logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mfa-logo.png" />
			</div>
			<div class="site-info"><?php

				printf( __( '<div class="copyright">&copy %1$s <a href="%2$s" title="Login">%3$s</a></a></div>', 'cmofil' ), date( 'Y' ), get_admin_url(), get_bloginfo( 'name' ) );

			?></div><!-- .site-info -->
			<div class="footer-right"><?php

				printf( __( '<div class="copyright">Designed and developed by <a href="%1$s">DCC Marketing</a></div>', 'cmofil' ), 'http://dccmarketing.com' );

			?></div><!-- .site-info -->

		</div><!-- .footer-wrap -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</div>
</div>
</body>
</html>