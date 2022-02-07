<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;

/**
 * Register Custom Post Types
 */
function helthcare_register_post_types() {




    $resourses_labels = array (
        'name'               => _x( 'Resourses', 'resourses', 'helthcare' ),
        'singular_name'      => _x( 'Resourses', 'resourses', 'helthcare' ),
        'menu_name'          => _x( 'Resourses', 'resourses', 'helthcare' ),
        'name_admin_bar'     => _x( 'Resourses', 'resourses', 'helthcare' ),
        'add_new'            => _x( 'Add New', 'resourses', 'helthcare' ),
        'add_new_item'       => __( 'Add New Resourses', 'helthcare' ),
        'new_item'           => __( 'New Resourses', 'helthcare' ),
        'edit_item'          => __( 'Edit Resourses', 'helthcare' ),
        'view_item'          => __( 'View Resourses', 'helthcare' ),
        'all_items'          => __( 'All Resourses', 'helthcare' ),
        'search_items'       => __( 'Search Resourses', 'helthcare' ),
        'parent_item_colon'  => __( 'Parent Resourses:', 'helthcare' ),
        'not_found'          => __( 'No Resourses Found.', 'helthcare' ),
        'not_found_in_trash' => __( 'No Resourses Found In Trash.', 'helthcare' ),
    );

    $resourses_args = array (
        'labels'             => $resourses_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array ( 'slug' => 'resourses', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-pressthis',
        'supports'           => array ( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'post-formats' )
    );

    register_post_type( HELTHCARE_RESOURCES_POST_TYPE, $resourses_args );

    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array (
        'name'              => _x( 'Categories', 'taxonomy general name', 'helthcare' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name', 'helthcare' ),
        'search_items'      => __( 'Search Categories', 'helthcare' ),
        'all_items'         => __( 'All Categories', 'helthcare' ),
        'parent_item'       => __( 'Parent Category', 'helthcare' ),
        'parent_item_colon' => __( 'Parent Category:', 'helthcare' ),
        'edit_item'         => __( 'Edit Category', 'helthcare' ),
        'update_item'       => __( 'Update Category', 'helthcare' ),
        'add_new_item'      => __( 'Add New Category', 'helthcare' ),
        'new_item_name'     => __( 'New Category Name', 'helthcare' ),
        'menu_name'         => __( 'Categories', 'helthcare' )
    );

    $args = array (
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array ( 'slug' => 'resourses_tax' )
    );

    register_taxonomy( HELTHCARE_RESOURCES_POST_TAX, HELTHCARE_RESOURCES_POST_TYPE, $args );

    $labels = array (
        'name'              => _x( 'Media Types', 'taxonomy general name', 'helthcare' ),
        'singular_name'     => _x( 'Media Type', 'taxonomy singular name', 'helthcare' ),
        'search_items'      => __( 'Search Media Types', 'helthcare' ),
        'all_items'         => __( 'All Media Types', 'helthcare' ),
        'parent_item'       => __( 'Parent Media Type', 'helthcare' ),
        'parent_item_colon' => __( 'Parent Media Type:', 'helthcare' ),
        'edit_item'         => __( 'Edit Media Type', 'helthcare' ),
        'update_item'       => __( 'Update Media Type', 'helthcare' ),
        'add_new_item'      => __( 'Add New Media Type', 'helthcare' ),
        'new_item_name'     => __( 'New Media Type Name', 'helthcare' ),
        'menu_name'         => __( 'Media Types', 'helthcare' )
    );

    $args = array (
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array ( 'slug' => 'resourses_media_type' )
    );

    register_taxonomy( HELTHCARE_RESOURCES_POST_TAG, HELTHCARE_RESOURCES_POST_TYPE, $args );

    $team_labels = array (
        'name'               => _x( 'Team', 'team', 'helthcare' ),
        'singular_name'      => _x( 'Team', 'team', 'helthcare' ),
        'menu_name'          => _x( 'Team', 'team', 'helthcare' ),
        'name_admin_bar'     => _x( 'Team', 'team', 'helthcare' ),
        'add_new'            => _x( 'Add New', 'team', 'helthcare' ),
        'add_new_item'       => __( 'Add New Team', 'helthcare' ),
        'new_item'           => __( 'New Team', 'helthcare' ),
        'edit_item'          => __( 'Edit Team', 'helthcare' ),
        'view_item'          => __( 'View Team', 'helthcare' ),
        'all_items'          => __( 'All Team', 'helthcare' ),
        'search_items'       => __( 'Search Team', 'helthcare' ),
        'parent_item_colon'  => __( 'Parent Team:', 'helthcare' ),
        'not_found'          => __( 'No Team Found.', 'helthcare' ),
        'not_found_in_trash' => __( 'No Team Found In Trash.', 'helthcare' ),
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

    register_post_type( HELTHCARE_TEAM_POST_TYPE, $team_args );

    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array (
        'name'              => _x( 'Categories', 'taxonomy general name', 'helthcare' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name', 'helthcare' ),
        'search_items'      => __( 'Search Categories', 'helthcare' ),
        'all_items'         => __( 'All Categories', 'helthcare' ),
        'parent_item'       => __( 'Parent Category', 'helthcare' ),
        'parent_item_colon' => __( 'Parent Category:', 'helthcare' ),
        'edit_item'         => __( 'Edit Category', 'helthcare' ),
        'update_item'       => __( 'Update Category', 'helthcare' ),
        'add_new_item'      => __( 'Add New Category', 'helthcare' ),
        'new_item_name'     => __( 'New Category Name', 'helthcare' ),
        'menu_name'         => __( 'Categories', 'helthcare' )
    );

    $args = array (
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array ( 'slug' => 'team_tax' )
    );

    register_taxonomy( HELTHCARE_TEAM_POST_TAX, HELTHCARE_TEAM_POST_TYPE, $args );

    //flush rewrite rules
    flush_rewrite_rules();
}

//add action to create custom post type
add_action( 'init', 'helthcare_register_post_types' );
