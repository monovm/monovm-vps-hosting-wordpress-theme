<?php
/**
 * Theme setup and asset loading.
 *
 * @package MonoVM_VPS
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sets up editor parity and translation support.
 *
 * @return void
 */
function monovm_vps_setup() {
	load_theme_textdomain( 'monovm-vps', get_template_directory() . '/languages' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( array( 'style.css', 'assets/css/theme.css' ) );
}
add_action( 'after_setup_theme', 'monovm_vps_setup' );

/**
 * Enqueues the theme styles without a remote dependency.
 *
 * @return void
 */
function monovm_vps_enqueue_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'monovm-vps-style',
		get_stylesheet_uri(),
		array(),
		$theme_version
	);

	wp_enqueue_style(
		'monovm-vps-theme',
		get_theme_file_uri( 'assets/css/theme.css' ),
		array( 'monovm-vps-style' ),
		$theme_version
	);
}
add_action( 'wp_enqueue_scripts', 'monovm_vps_enqueue_styles' );

/**
 * Registers the theme's pattern category.
 *
 * @return void
 */
function monovm_vps_register_pattern_category() {
	register_block_pattern_category(
		'monovm-vps',
		array(
			'label' => __( 'MonoVM VPS', 'monovm-vps' ),
		)
	);
}
add_action( 'init', 'monovm_vps_register_pattern_category' );
