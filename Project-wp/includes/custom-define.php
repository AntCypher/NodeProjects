<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

if( !defined( 'HELTHCARE_POST_POST_TYPE' ) ) {
    define( 'HELTHCARE_POST_POST_TYPE', 'post' );
}
if( !defined( 'HELTHCARE_PAGE_POST_TYPE' ) ) {
    define( 'HELTHCARE_PAGE_POST_TYPE', 'page' );
}
if( !defined( 'HELTHCARE_RESOURCES_POST_TYPE' ) ) {
    define( 'HELTHCARE_RESOURCES_POST_TYPE', 'resourses' );
}
if( !defined( 'HELTHCARE_RESOURCES_POST_TAX' ) ) {
    define( 'HELTHCARE_RESOURCES_POST_TAX', 'resourses_tax' );
}
if( !defined( 'HELTHCARE_RESOURCES_POST_TAG' ) ) {
    define( 'HELTHCARE_RESOURCES_POST_TAG', 'resourses_media_type' );
}
if( !defined( 'HELTHCARE_TEAM_POST_TYPE' ) ) {
    define( 'HELTHCARE_TEAM_POST_TYPE', 'team' );
}
if( !defined( 'HELTHCARE_TEAM_POST_TAX' ) ) {
    define( 'HELTHCARE_TEAM_POST_TAX', 'team_tax' );
}
if( !defined( 'HELTHCARE_IMAGE_PATH' ) ) {
    define( 'HELTHCARE_IMAGE_PATH', get_template_directory_uri().'/images');
}
if( !defined( 'HELTHCARE_META_PREFIX' ) ) {
    define( 'HELTHCARE_META_PREFIX', '_helthcare_' );
}