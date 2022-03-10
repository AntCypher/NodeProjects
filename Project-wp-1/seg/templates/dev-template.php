<?php
// Exit if accessed directly
//if ( ! defined( 'ABSPATH' ) )
//    exit;
/*
 * Template Name: Dev Test Template
 *
 * @package WordPress
 * @subpackage seg
 * @since seg 1.0
 */
//get_header();
die;
//$args  = array (
//    'post_type'      => SEG_TRANSACTION_POST_TYPE,
//    'posts_per_page' => -1,
//    'post_status'    => 'publish'
//);
//$query = new WP_Query( $args );
//if ( $query->have_posts() ) {
//    while ( $query->have_posts() ) {
//        $query->the_post();
//        $transaction_id = get_the_ID();
//        $press_read_cta        = get_field( 'seg_press_read_cta', $transaction_id );
//        echo "<pre>";
//        print_r($press_read_cta);
//        echo "</pre>";

//        echo "<pre>";
//        print_r( $resourses_id );
//        echo "</pre>";
//        $helthcare_reso_media_type_btn = get_field( 'helthcare_reso_media_type_btn', $resourses_id );
//        echo "<pre>";
//        print_r( $helthcare_reso_media_type_btn );
//        echo "</pre>";
//        $arr          = array (
//            'title'  => 'Read  full press release',
//            'url'    => '#',
//            'target' => ''
//        );
//        update_field( 'seg_press_read_cta', $arr, $transaction_id );
//        echo "<pre>";
//        print_r( $helthcare_reso_media_type_btn[ 'title' ] );
//        echo "</pre>";
//        $helthcare_reso_date = get_field( 'helthcare_reso_date', $resourses_id );
//        $helthcare_reso_time = get_field( 'helthcare_reso_time', $resourses_id );
//        update_field( 'helthcare_reso_date', 'December 20, 2021', $resourses_id );
//        update_field( 'helthcare_reso_time', '45 minutes', $resourses_id );
//    }
//}