<?php
/**
 * Seg back compat functionality
 *
 * Prevents Seg from running on WordPress versions prior to 4.4,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.4.
 *
 * @package WordPress
 * @subpackage SEG
 * @since Seg 1.0
 */

/**
 * Prevent switching to Seg on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Seg 1.0
 */
function seg_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );

	unset( $_GET['activated'] );

	add_action( 'admin_notices', 'seg_upgrade_notice' );
}
add_action( 'after_switch_theme', 'seg_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Seg on WordPress versions prior to 4.4.
 *
 * @since Seg 1.0
 *
 * @global string $wp_version WordPress version.
 */
function seg_upgrade_notice() {
	$message = sprintf( __( 'Seg requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'seg' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.4.
 *
 * @since Seg 1.0
 *
 * @global string $wp_version WordPress version.
 */
function seg_customize() {
	wp_die( sprintf( __( 'Seg requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'seg' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'seg_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.4.
 *
 * @since Seg 1.0
 *
 * @global string $wp_version WordPress version.
 */
function seg_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Seg requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'seg' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'seg_preview' );
