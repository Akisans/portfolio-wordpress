<?php
/**
 * axes back compat functionality
 *
 * @package WordPress
 * @subpackage Axes
 * @since Axes 1.0
 */

function axes_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'axes_upgrade_notice' );
}
add_action( 'after_switch_theme', 'axes_switch_theme' );

function axes_upgrade_notice() {
	$message = sprintf( __( 'Twenty Fifteen requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'axes' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

function axes_customize() {
	wp_die( sprintf( __( 'axes requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'axes' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'axes_customize' );

function axes_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Twenty Fifteen requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'axes' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'axes_preview' );
