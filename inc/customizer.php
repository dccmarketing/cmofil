<?php
/**
 * Children's Museum of Illinois Theme Customizer
 *
 * @package Children's Museum of Illinois
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 *
 * @uses 	get_setting()
 */
function cmofil_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Promo Box Image
	$settingargs['default'] 			= '';
	$settingargs['transport'] 			= 'postMessage';
	$wp_customize->add_setting( 'promo_box_image', $settingargs );

	$controlargs['label'] 				= __( 'Promo Box Image', 'cmofil' );
	$controlargs['section'] 			= 'static_front_page';
	$controlargs['settings'] 			= 'promo_box_image';
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'promo_box_image', $controlargs ) );

	// Promo Box URL
	$settingargs['default'] 			= '';
	$settingargs['transport'] 			= 'postMessage';
	$wp_customize->add_setting( 'promo_box_url', $settingargs );

	$controlargs['label'] 				= __( 'Promo Box URL', 'cmofil' );
	$controlargs['section'] 			= 'static_front_page';
	$controlargs['settings'] 			= 'promo_box_url';
	$controlargs['type'] 				= 'url';
	$wp_customize->add_control( 'promo_box_url', $controlargs );

	// Winter Hours
	$settingargs['default'] 			= 'false';
	$settingargs['transport'] 			= 'postMessage';
	$wp_customize->add_setting( 'winter_hours', $settingargs );

	$controlargs['label'] 				= __( 'Display Winter Hours', 'cmofil' );
	$controlargs['section'] 			= 'static_front_page';
	$controlargs['settings'] 			= 'winter_hours';
	$controlargs['type'] 				= 'checkbox';
	$wp_customize->add_control( 'winter_hours', $controlargs );

	// Display Closed
	$settingargs['default'] 			= 'false';
	$settingargs['transport'] 			= 'postMessage';
	$wp_customize->add_setting( 'display_closed', $settingargs );

	$controlargs['label'] 				= __( 'Display Closed', 'cmofil' );
	$controlargs['section'] 			= 'static_front_page';
	$controlargs['settings'] 			= 'display_closed';
	$controlargs['type'] 				= 'checkbox';
	$wp_customize->add_control( 'display_closed', $controlargs );

} // cmofil_customize_register()
add_action( 'customize_register', 'cmofil_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @uses 	wp_enqueue_script()
 * @uses 	get_template_directory_uri()
 */
function cmofil_customize_preview_js() {

	wp_enqueue_script( 'cmofil_customizer', get_template_directory_uri() . '/js/customizer.min.js', array( 'customize-preview' ), '20130508', true );

} // cmofil_customize_preview_js()
add_action( 'customize_preview_init', 'cmofil_customize_preview_js' );

/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */
function cmofil_customizer( $wp_customize ) {



} // cmofil_customizer()

add_action( 'customize_register', 'cmofil_customizer' );