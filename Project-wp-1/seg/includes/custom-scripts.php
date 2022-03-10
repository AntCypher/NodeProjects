<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;
/*
 * Enqueue scripts and styles for the back end.
 */

function seg_admin_scripts() {
    global $wp_version;
    // Load our admin stylesheet.
    wp_enqueue_style( 'seg-admin-style', get_template_directory_uri() . '/css/admin-style.css' );
    // Load our admin script.
    wp_enqueue_script( 'seg-admin-script', get_template_directory_uri() . '/js/admin-script.js' );
    //localize admin script
    wp_localize_script( 'seg-admin-script', 'SEGADMIN', array (
        'ajaxurl' => admin_url( 'admin-ajax.php', ( is_ssl() ? 'https' : 'http' ) ),
    ) );
    wp_enqueue_media();
}

/*
 * Enqueue scripts and styles for the front end.
 */

function seg_public_scripts() {

    // Load our public style stylesheet.
    wp_enqueue_style( 'seg-select2-style', get_template_directory_uri() . '/css/select2.min.css', array (), NULL );
    wp_enqueue_style( 'seg-slick-style', get_template_directory_uri() . '/css/slick.css', array (), NULL );
    wp_enqueue_style( 'seg-magnific-fancybox-style', get_template_directory_uri() . '/css/fancybox.css', array (), NULL );
    wp_enqueue_style( 'seg-magnific-popup-style', get_template_directory_uri() . '/css/magnific-popup.css', array (), NULL );

    // Load our main stylesheet.
    wp_enqueue_style( 'seg-style', get_stylesheet_uri(), array (), NULL );
    
    // Load our public style stylesheet.
    wp_enqueue_style( 'seg-public-style', get_template_directory_uri() . '/css/public-style.css', array (), NULL );
    
    // Load main jquery
    wp_enqueue_script( 'jquery', array (), NULL );
    // Load public script
    wp_enqueue_script( 'seg-select2-script', get_template_directory_uri() . '/js/select2.min.js', array (), NULL, true );
    wp_enqueue_script( 'seg-slick-script', get_template_directory_uri() . '/js/slick.min.js', array (), NULL, true );
    wp_enqueue_script( 'seg-magnific-fancybox-script', get_template_directory_uri() . '/js/fancybox.js', array (), NULL, true );
    wp_enqueue_script( 'seg-magnific-popup-script', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array (), NULL, true );
    wp_enqueue_script( 'seg-public-script', get_template_directory_uri() . '/js/public-script.js', array (), NULL, true );
    wp_enqueue_script( 'seg-filter-script', get_template_directory_uri() . '/js/cat-filter-script.js', array (), NULL );
    //localize public script
    wp_localize_script( 'seg-public-script', 'SEGPUBLIC', array (
        'ajaxurl' => admin_url( 'admin-ajax.php', ( is_ssl() ? 'https' : 'http' ) ),
        'readmore'=> get_field( 'seg_press_read_cta'),
        'readless'=> get_field( 'seg_press_read_less_cta'),
        'testinomial_count'=> get_field( 'seg_trans_testinomial_count'),
        'globalpageid'=> get_the_ID(),
    ) );
}

/*
 * Enqueue scripts and styles for the admin login screen.
 */

function seg_login_stylesheet() {
    wp_enqueue_style( 'seg-login-style', get_stylesheet_directory_uri() . '/css/login-style.css' );
}

//add action to load scripts and styles for the back end
add_action( 'admin_enqueue_scripts', 'seg_admin_scripts' );
//add action load scripts and styles for the front end
add_action( 'wp_enqueue_scripts', 'seg_public_scripts' );
//add action load scripts and styles for admin login screen
add_action( 'login_enqueue_scripts', 'seg_login_stylesheet' );
