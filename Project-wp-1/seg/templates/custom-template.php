<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;

/**
 * Template Name: Custom Post Template
 *
 * @package WordPress
 * @subpackage seg
 * @since seg 1.0
 */
get_header();
?>
<?php
$page_id      = get_the_ID();
$page_title   = get_the_title();
$page_content = get_the_content();
$page_link    = get_the_permalink();
$categories   = get_categories( 
        array (
            'hide_empty' => true,
        )
);
if ( class_exists( 'acf' ) ) {
    $blog_cta_label     = get_field( 'seg_blog_cta_label', 'option' );
    $blog_page_subtitle = get_field( 'seg_blog_page_subtitle', $page_id );
}
?>
<div class="flooring-blog-cat-tab">
    <ul>
        <li class="cat-list_item active" data-slug="">All</li>
        <?php
        if ( ! empty( $categories ) ) {
            foreach ( $categories as $key => $category ) {
                ?>
                <a href="<?php echo get_category_link( $category ); ?>">
                    <li class="cat-list_item" data-slug="<?php echo $category->slug; ?>"><?php echo $category->name; ?></li>
                </a>
                <?php
            }
        }
        ?>
    </ul>
</div>
<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$loop = new WP_Query(
        array (
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 9,
    'order'          => 'ASC',
    'paged'          => $paged,
        ) );
if ( $loop->have_posts() ) {
    while ( $loop->have_posts() ) {
        $loop->the_post();
        $post_id        = get_the_ID();
        $post_title     = get_the_title();
        $post_content   = get_the_content();
        $post_thumbnail = get_the_post_thumbnail_url();
        $img_id         = get_post_thumbnail_id( $post_id );
        $image_alt      = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
        $category       = wp_get_post_terms( get_the_ID(), 'category', array ( 'fields' => 'all' ) );
        $cat_id         = $category[ 0 ]->term_id;
        $cat_slug       = $category[ 0 ]->slug;
        $date           = get_the_date();
        $author         = get_the_author();
        echo $post_title . '<br>';
        echo $cat_slug . '<br>';
        echo $date . '<br>';
        echo $author . '<br>';
        echo '88888888' . '<br>';
    }
    wp_reset_query();
    wp_reset_postdata();
}
?>
<div class="pagination">
    <?php
    echo paginate_links( array (
        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
        'total'        => $loop->max_num_pages,
        'current'      => max( 1, get_query_var( 'paged' ) ),
        'format'       => '?paged=%#%',
        'show_all'     => false,
        'prev_next'    => true,
        'prev_text'    => sprintf( '<i></i> %1$s', __( '>>', 'text-domain' ) ),
        'next_text'    => sprintf( '%1$s <i></i>', __( '<<', 'text-domain' ) ),
        'add_args'     => false,
        'add_fragment' => '',
    ) );
    ?>
</div>

<!--custom Template-->
<?php get_footer(); ?>