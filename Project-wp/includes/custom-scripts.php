<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;
/*
 * Enqueue scripts and styles for the back end.
 */

function helthcare_admin_scripts() {
    global $wp_version;
    // Load our admin stylesheet.
    wp_enqueue_style( 'helthcare-admin-style', get_template_directory_uri() . '/css/admin-style.css' );
    // Load our admin script.
    wp_enqueue_script( 'helthcare-admin-script', get_template_directory_uri() . '/js/admin-script.js' );
    //localize admin script
    wp_localize_script( 'helthcare-admin-script', 'HELTHCAREADMIN', array (
        'ajaxurl' => admin_url( 'admin-ajax.php', ( is_ssl() ? 'https' : 'http' ) ),
    ) );
    wp_enqueue_media();
}

/*
 * Enqueue scripts and styles for the front end.
 */

function helthcare_public_scripts() {

    // Load Slick stylesheet.
    wp_enqueue_style( 'helthcare-slick-style', get_template_directory_uri() . '/css/slick.css', array (), NULL );

    // Load our main stylesheet.
    wp_enqueue_style( 'helthcare-style', get_stylesheet_uri(), array (), NULL );
    // Load our public style stylesheet.
    wp_enqueue_style( 'helthcare-public-style', get_template_directory_uri() . '/css/public-style.css', array (), NULL );
    // Load main jquery
    wp_enqueue_script( 'jquery', array (), NULL );
    // Load Slick script
    wp_enqueue_script( 'helthcare-slick-script', get_template_directory_uri() . '/js/slick.min.js', array (), NULL );
    // Load TweenMax script
    wp_enqueue_script( 'helthcare-TweenMax-script', get_template_directory_uri() . '/js/TweenMax.min.js', array (), NULL );
    // Load Parallax script
    wp_enqueue_script( 'helthcare-scrollmagic-script', get_template_directory_uri() . '/js/jquery.scrollmagic.js', array (), NULL );
    wp_enqueue_script( 'helthcare-animation-gsap-script', get_template_directory_uri() . '/js/animation.gsap.js', array (), NULL );
    // wp_enqueue_script( 'helthcare-scroll-magic-script', get_template_directory_uri() . '/js/ScrollMagic.js', array (), NULL);
    // wp_enqueue_script( 'helthcare-addIndicators-script', get_template_directory_uri() . '/js/debug.addIndicators.min.js', array (), NULL);
    // Load public script
    wp_enqueue_script( 'helthcare-public-script', get_template_directory_uri() . '/js/public-script.js', array (), microtime(), NULL );
    wp_enqueue_script( 'helthcare-filter-script', get_template_directory_uri() . '/js/filter-script.js', array (), NULL );
    //localize public script
    wp_localize_script( 'helthcare-public-script', 'HELTHCAREPUBLIC', array (
        'ajaxurl' => admin_url( 'admin-ajax.php', ( is_ssl() ? 'https' : 'http' ) ),
    ) );
}

/*
 * Enqueue scripts and styles for the admin login screen.
 */

function helthcare_login_stylesheet() {
    wp_enqueue_style( 'helthcare-login-style', get_stylesheet_directory_uri() . '/css/login-style.css' );
}

//add action to load scripts and styles for the back end
add_action( 'admin_enqueue_scripts', 'helthcare_admin_scripts' );
//add action load scripts and styles for the front end
add_action( 'wp_enqueue_scripts', 'helthcare_public_scripts' );
//add action load scripts and styles for admin login screen
add_action( 'login_enqueue_scripts', 'helthcare_login_stylesheet' );
