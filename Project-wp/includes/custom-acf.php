<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
/*
 * Custom Theme Options
 */
if( function_exists('acf_add_options_page') ) {
    // Helthcare General Settings
    $general_settings   = array(
                                'page_title' 	=> __( 'Helthcare Settings', 'helthcare' ),
                                'menu_title'	=> __( 'Helthcare Settings', 'helthcare' ),
                                'menu_slug' 	=> 'helthcare-general-settings',
                                'capability'	=> 'edit_posts',
                                'redirect'      => false,
                                'icon_url'      => 'dashicons-admin-customizer'
                            );
    acf_add_options_page( $general_settings );
}