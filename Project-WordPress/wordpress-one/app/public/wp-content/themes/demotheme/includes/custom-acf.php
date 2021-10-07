<?php
    // Exit if accessed directly
    if ( !defined( 'ABSPATH' ) ) exit;
    
    /*
     * Custom Theme Options
     */
    if( function_exists('acf_add_options_page') ) {

        // Demo Theme General Settings
        $general_settings   = array(
                                    'page_title' 	=> __( 'Demo Theme Settings(For Frontend View)', 'demotheme' ),
                                    'menu_title'	=> __( 'Demo Theme Settings', 'demotheme' ),
                                    'menu_slug' 	=> 'demotheme-general-settings',
                                    'capability'	=> 'edit_posts',
                                    'redirect'          => false,
                                    'icon_url'          => 'dashicons-admin-customizer'
                                );
        acf_add_options_page( $general_settings );

        // Demo Theme Header Settings
        $header_settings    = array(
                                        'page_title'    => __( 'Header Settings', 'demotheme' ),
                                        'menu_title'    => __( 'Header', 'demotheme' ),
                                        'parent_slug'   => 'demotheme-general-settings',
                                );
        acf_add_options_sub_page( $header_settings );
        
        // Demo Theme Social Settings
        $social_settings    = array(
                                        'page_title'    => __( 'Social Settings', 'demotheme' ),
                                        'menu_title'    => __( 'Social', 'demotheme' ),
                                        'parent_slug'   => 'demotheme-general-settings',
                                );
        acf_add_options_sub_page( $social_settings );

        // Demo Theme Footer Settings
        $footer_settings    = array(
                                        'page_title'    => __( 'Footer Settings', 'demotheme' ),
                                        'menu_title'    => __( 'Footer', 'demotheme' ),
                                        'parent_slug'   => 'demotheme-general-settings',
                                );
        acf_add_options_sub_page( $footer_settings );
        
        // Demo Theme Admin Settings
        $general_settings   = array(
                                    'page_title' 	=> __( 'Demo Theme Admin Settings(For Frontend View)', 'demotheme' ),
                                    'menu_title'	=> __( 'Demo Theme Admin Settings', 'demotheme' ),
                                    'menu_slug' 	=> 'demotheme-admin-settings',
                                    'capability'	=> 'edit_posts',
                                    'redirect'          => false,
                                    'icon_url'          => 'dashicons-admin-generic'
                                );
        acf_add_options_page( $general_settings );
    }