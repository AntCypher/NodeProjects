<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage SEG
 * @since Seg 1.0
 */
get_header();
$our_title   = get_the_title( get_option( 'page_for_posts', true ) );
//$category    = get_the_category();
$category    = wp_get_post_terms( get_the_ID(), 'category', array ( 'fields' => 'all' ) );
$cat_id      = $category[ 0 ]->term_id;
$cat_slug    = $category[ 0 ]->slug;
$date        = get_the_date();
$author      = get_the_author();
//echo "<pre>";
//print_r( strtoupper($cat_slug) );
//echo "</pre>";
$post_id     = get_the_permalink();
$author_id   = get_the_author_ID();
//$display_name = get_the_author_meta( 'display_name',$author_id );
$first_name  = get_the_author_meta( 'first_name', $author_id );
$author_link = get_author_posts_url( $author_id );
$description = get_the_author_meta( 'description', $author_id );
$linkedin    = get_the_author_meta( 'linkedin', $author_id );
$facebook    = get_the_author_meta( 'facebook', $author_id );
$twitter     = get_the_author_meta( 'twitter', $author_id );
if ( class_exists( 'acf' ) ) {
    $user_imag          = get_field( 'seg_author_image', 'user_' . $author_id );
    $about_author_title = get_field( 'seg_blog_about_author_title', 'option' );
    $back_blog_cta      = get_field( 'seg_back_blog_cta', 'option' );
}
//echo do_shortcode('[contact-form-7 id="774" title="Subscribe to our News & Insights"]');
//echo 'user_'.$author_id;
?>



<?php get_footer(); ?>