<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;

/**
 * Template Name: Custom Post Template
 *
 * @package WordPress
 * @subpackage helthcare
 * @since helthcare 1.0
 */
//get_header(); 
wp_head();
$categories = get_terms(
        array (
            'taxonomy'   => HELTHCARE_RESOURCES_POST_TAX,
            'hide_empty' => false,
        )
);
$terms      = get_terms(
        array (
            'taxonomy'   => HELTHCARE_RESOURCES_POST_TAG,
            'hide_empty' => false,
        )
);
?>
<h1>Media Type</h1>

<ul style= "list-style-type: none">
    <?php foreach ( $terms as $term ) {
        ?>
        <li>
            <input type="checkbox" name="media" class="resources_media" id="media_<?php echo $term->term_id; ?>" value="<?php echo $term->term_id; ?>">
            <?php echo $term->name; ?>
        </li>
    <?php } ?>
</ul>
<hr>
<h1>category</h1>

<ul style= "list-style-type: none">
    <?php foreach ( $categories as $category ) {
        ?>
        <li>
            <input type="checkbox" name="category" class="resources_category" id="category_<?php echo $category->term_id; ?>" value="<?php echo $category->term_id; ?>">
            <?php echo $category->name; ?>
        </li>
    <?php } ?>
</ul>

<hr>

<div class="pagination_links">
    <?php // get_posts_for_pagination(); ?>
</div>


<!--custom Template-->
<?php
//$args  = array (
//    'post_type'      => HELTHCARE_RESOURCES_POST_TYPE,
//    'order'          => 'ASC',
//    'posts_per_page' => -1,
//    'tax_query'      => array (
//        array (
//            'taxonomy' => HELTHCARE_RESOURCES_POST_TAG,
//            'field'    => 'term_id',
//            'terms'    => 31,
//        ),
//    ),
//);
$query = new WP_Query( $args );
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        $resourses_id = get_the_ID();
//        echo "<pre>";
//        print_r( $resourses_id );
//        echo "</pre>";
//        $helthcare_reso_media_type_btn = get_field( 'helthcare_reso_media_type_btn', $resourses_id );
//        echo "<pre>";
//        print_r( $helthcare_reso_media_type_btn );
//        echo "</pre>";
//        $arr          = array (
//            'title'  => 'Register',
//            'url'    => '#',
//            'target' => '_blank'
//        );

//        echo "<pre>";
//        print_r( $helthcare_reso_media_type_btn[ 'title' ] );
//        echo "</pre>";
//        $helthcare_reso_date = get_field( 'helthcare_reso_date', $resourses_id );
//        $helthcare_reso_time = get_field( 'helthcare_reso_time', $resourses_id );

//        update_field( 'helthcare_reso_media_type_btn', $arr, $resourses_id );
//        update_field( 'helthcare_reso_date', 'December 20, 2021', $resourses_id );
//        update_field( 'helthcare_reso_time', '45 minutes', $resourses_id );

    }
}
wp_reset_query();
wp_reset_postdata();
//$terms         = get_the_terms( $resourse_id, 'resourses_media_type' );
//$term_first_id = is_array( $terms ) ? $terms[ 0 ]->term_id : '';
//echo "<pre>";
//print_r( $term_first_id );
//echo "</pre>";
//wp_footer();
// get_footer();
?>