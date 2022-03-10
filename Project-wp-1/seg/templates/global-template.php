<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Template Name: Global Template
 *
 * @package WordPress
 * @subpackage seg
 * @since seg 1.0
 */

get_header(); 
get_template_part ( 'template-parts/flexible-sections' );

?>
<!--Global Template-->
<?php get_footer(); ?>