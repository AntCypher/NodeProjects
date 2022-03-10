<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;
/*
 * Custom Theme Options
 */
if ( function_exists( 'acf_add_options_page' ) ) {
    // Seg General Settings
    $general_settings = array (
        'page_title' => __( 'Seg Settings', 'seg' ),
        'menu_title' => __( 'Seg Settings', 'seg' ),
        'menu_slug'  => 'seg-general-settings',
        'capability' => 'edit_posts',
        'redirect'   => false,
        'icon_url'   => 'dashicons-admin-customizer'
    );
    acf_add_options_page( $general_settings );
}
$social_settings = array (
    'page_title'  => __( 'Post General Settings', 'seg' ),
    'menu_title'  => __( 'Post General Settings', 'seg' ),
    'parent_slug' => 'edit.php',
);
acf_add_options_sub_page( $social_settings );
