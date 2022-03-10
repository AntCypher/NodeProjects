<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;

/**
 * Register Custom Post Types
 */
function seg_register_post_types() {

    $transaction_labels = array (
        'name'               => _x( 'Transactions', 'transactions', 'seg' ),
        'singular_name'      => _x( 'Transactions', 'transactions', 'seg' ),
        'menu_name'          => _x( 'Transactions', 'transactions', 'seg' ),
        'name_admin_bar'     => _x( 'Transaction', 'transactions', 'seg' ),
        'add_new'            => _x( 'Add New', 'transactions', 'seg' ),
        'add_new_item'       => __( 'Add New Transactions', 'seg' ),
        'new_item'           => __( 'New Transactions', 'seg' ),
        'edit_item'          => __( 'Edit Transactions', 'seg' ),
        'view_item'          => __( 'View Transactions', 'seg' ),
        'all_items'          => __( 'All Transactions', 'seg' ),
        'search_items'       => __( 'Search Transactions', 'seg' ),
        'parent_item_colon'  => __( 'Parent Transactions:', 'seg' ),
        'not_found'          => __( 'No Transactions Found.', 'seg' ),
        'not_found_in_trash' => __( 'No Transactions Found In Trash.', 'seg' ),
    );

    $transaction_args = array (
        'labels'             => $transaction_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array ( 'slug' => 'transactions', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-external',
        'supports'           => array ( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' )
    );

    register_post_type( SEG_TRANSACTION_POST_TYPE, $transaction_args );

    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array (
        'name'              => _x( 'Products Category', 'taxonomy general name', 'seg' ),
        'singular_name'     => _x( 'Product', 'taxonomy singular name', 'seg' ),
        'search_items'      => __( 'Search Products', 'seg' ),
        'all_items'         => __( 'All Products', 'seg' ),
        'parent_item'       => __( 'Parent Product', 'seg' ),
        'parent_item_colon' => __( 'Parent Product:', 'seg' ),
        'edit_item'         => __( 'Edit Product', 'seg' ),
        'update_item'       => __( 'Update Product', 'seg' ),
        'add_new_item'      => __( 'Add New Product', 'seg' ),
        'new_item_name'     => __( 'New Product Name', 'seg' ),
        'menu_name'         => __( 'Products Category', 'seg' )
    );

    $args = array (
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array ( 'slug' => 'product' )
    );

    register_taxonomy( SEG_PRODUCT_TAX, SEG_TRANSACTION_POST_TYPE, $args );
    // Add new taxonomy, make it hierarchical (like categories)


    $labels = array (
        'name'              => _x( 'Vertical Category', 'taxonomy general name', 'seg' ),
        'singular_name'     => _x( 'Vertical', 'taxonomy singular name', 'seg' ),
        'search_items'      => __( 'Search Vertical', 'seg' ),
        'all_items'         => __( 'All Vertical', 'seg' ),
        'parent_item'       => __( 'Parent Vertical', 'seg' ),
        'parent_item_colon' => __( 'Parent Vertical:', 'seg' ),
        'edit_item'         => __( 'Edit Vertical', 'seg' ),
        'update_item'       => __( 'Update Vertical', 'seg' ),
        'add_new_item'      => __( 'Add New Vertical', 'seg' ),
        'new_item_name'     => __( 'New Vertical Name', 'seg' ),
        'menu_name'         => __( 'Vertical Category', 'seg' )
    );

    $args = array (
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array ( 'slug' => 'vertical' )
    );

    register_taxonomy( SEG_VERTICAL_TAX, SEG_TRANSACTION_POST_TYPE, $args );
    //flush rewrite rules

    $team_labels = array (
        'name'               => _x( 'Team', 'team', 'seg' ),
        'singular_name'      => _x( 'Team', 'team', 'seg' ),
        'menu_name'          => _x( 'Team', 'team', 'seg' ),
        'name_admin_bar'     => _x( 'Team', 'team', 'seg' ),
        'add_new'            => _x( 'Add New', 'team', 'seg' ),
        'add_new_item'       => __( 'Add New Team', 'seg' ),
        'new_item'           => __( 'New Team', 'seg' ),
        'edit_item'          => __( 'Edit Team', 'seg' ),
        'view_item'          => __( 'View Team', 'seg' ),
        'all_items'          => __( 'All Team', 'seg' ),
        'search_items'       => __( 'Search Team', 'seg' ),
        'parent_item_colon'  => __( 'Parent Team:', 'seg' ),
        'not_found'          => __( 'No Team Found.', 'seg' ),
        'not_found_in_trash' => __( 'No Team Found In Trash.', 'seg' ),
    );

    $team_args = array (
        'labels'             => $team_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array ( 'slug' => 'team', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array ( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' )
    );

    register_post_type( SEG_TEAM_POST_TYPE, $team_args );

    $research_labels = array (
        'name'               => _x( 'Research', 'research', 'seg' ),
        'singular_name'      => _x( 'Research', 'research', 'seg' ),
        'menu_name'          => _x( 'Research', 'research', 'seg' ),
        'name_admin_bar'     => _x( 'Research', 'research', 'seg' ),
        'add_new'            => _x( 'Add New', 'research', 'seg' ),
        'add_new_item'       => __( 'Add New Research', 'seg' ),
        'new_item'           => __( 'New Research', 'seg' ),
        'edit_item'          => __( 'Edit Research', 'seg' ),
        'view_item'          => __( 'View Research', 'seg' ),
        'all_items'          => __( 'All Research', 'seg' ),
        'search_items'       => __( 'Search Research', 'seg' ),
        'parent_item_colon'  => __( 'Parent Research:', 'seg' ),
        'not_found'          => __( 'No Research Found.', 'seg' ),
        'not_found_in_trash' => __( 'No Research Found In Trash.', 'seg' ),
    );

    $research_args = array (
        'labels'             => $research_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array ( 'slug' => 'research', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-pressthis',
        'supports'           => array ( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' )
    );

    register_post_type( SEG_RESEARCH_POST_TYPE, $research_args );
    
     $labels = array (
        'name'              => _x( 'Report Type', 'taxonomy general name', 'seg' ),
        'singular_name'     => _x( 'Report Type', 'taxonomy singular name', 'seg' ),
        'search_items'      => __( 'Search Report Type', 'seg' ),
        'all_items'         => __( 'All Report Type', 'seg' ),
        'parent_item'       => __( 'Parent Report Type', 'seg' ),
        'parent_item_colon' => __( 'Parent Report Type:', 'seg' ),
        'edit_item'         => __( 'Edit Report Type', 'seg' ),
        'update_item'       => __( 'Update Report Type', 'seg' ),
        'add_new_item'      => __( 'Add New Report Type', 'seg' ),
        'new_item_name'     => __( 'New Report Type', 'seg' ),
        'menu_name'         => __( 'Report Type', 'seg' )
    );

    $args = array (
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array ( 'slug' => 'report_type' )
    );

    register_taxonomy( SEG_REPORT_TAX, SEG_RESEARCH_POST_TYPE, $args );
    
    $labels = array (
        'name'              => _x( 'Frequency', 'taxonomy general name', 'seg' ),
        'singular_name'     => _x( 'Frequency', 'taxonomy singular name', 'seg' ),
        'search_items'      => __( 'Search Frequency', 'seg' ),
        'all_items'         => __( 'All Frequency', 'seg' ),
        'parent_item'       => __( 'Parent Frequency', 'seg' ),
        'parent_item_colon' => __( 'Parent Frequency:', 'seg' ),
        'edit_item'         => __( 'Edit Frequency', 'seg' ),
        'update_item'       => __( 'Update Frequency', 'seg' ),
        'add_new_item'      => __( 'Add New Frequency', 'seg' ),
        'new_item_name'     => __( 'New Frequency Name', 'seg' ),
        'menu_name'         => __( 'Frequency', 'seg' )
    );

    $args = array (
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array ( 'slug' => 'frequency' )
    );

    register_taxonomy( SEG_FREQUENCY_TAX, SEG_RESEARCH_POST_TYPE, $args );
    
    $labels = array (
        'name'              => _x( 'Industry', 'taxonomy general name', 'seg' ),
        'singular_name'     => _x( 'Industry', 'taxonomy singular name', 'seg' ),
        'search_items'      => __( 'Search Industry', 'seg' ),
        'all_items'         => __( 'All Industry', 'seg' ),
        'parent_item'       => __( 'Parent Industry', 'seg' ),
        'parent_item_colon' => __( 'Parent Industry:', 'seg' ),
        'edit_item'         => __( 'Edit Industry', 'seg' ),
        'update_item'       => __( 'Update Industry', 'seg' ),
        'add_new_item'      => __( 'Add New Industry', 'seg' ),
        'new_item_name'     => __( 'New Industry Name', 'seg' ),
        'menu_name'         => __( 'Industry', 'seg' )
    );

    $args = array (
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array ( 'slug' => 'industry' )
    );

    register_taxonomy( SEG_INDUSTRY_TAX, SEG_RESEARCH_POST_TYPE, $args );
    flush_rewrite_rules();
}

//add action to create custom post type
add_action( 'init', 'seg_register_post_types' );
