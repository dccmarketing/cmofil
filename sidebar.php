<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Children's Museum of Illinois
 */

if ( ! is_active_sidebar( 'sidebar' ) ) { return; }

?><div id="secondary" class="widget-area" role="complementary">
	<div class="sidebar-menu"><?php

		if ( has_nav_menu( 'sidebar' ) ) {

			$menu['theme_location'] 	= 'sidebar';
			$menu['container'] 			= 'div';
			$menu['container_id']    	= 'menu-sidebar';
			$menu['container_class'] 	= 'menu nav-sidebar';
			$menu['menu_id']         	= 'menu-sidebar-items';
			$menu['menu_class']      	= 'menu-items';
			$menu['depth']           	= 1;
			$menu['fallback_cb']     	= '';

			wp_nav_menu( $menu );

		}

	?></div><?php

	dynamic_sidebar( 'sidebar' );

?></div><!-- #secondary -->