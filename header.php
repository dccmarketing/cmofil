<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Children's Museum of Illinois
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><?php

wp_head();

?></head>

<body <?php body_class(); ?>>
<div class="bg-bottom">
<div class="bg-top">
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'cmofil' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap wrap">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" class="logo-top" /></a>
			</div><!-- .site-branding -->

			<div class="header-info">
				<p class="phone"><a href="tel:2174235437">217-423-KIDS (5437)</a></p>
				<p class="addy"><a href="https://www.google.com/maps/place/55+S+Country+Club+Rd,+Decatur,+IL+62521/@39.8287643,-88.9067694" target="_blank"><address>55 South Country Club Road, Decatur, IL</address></a></p>
			</div>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Menu', 'cmofil' ); ?></button><?php

					wp_nav_menu( array( 'theme_location' => 'primary' ) );

			?></nav><!-- #site-navigation -->
		</div><!-- .header_wrap -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="content-wrap wrap">