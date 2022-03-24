<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SEG
 * @since Seg 1.0
 */
get_header();

$page_id    = get_option( 'page_for_posts' );
$page_title = get_the_title( $page_id );
$page_link  = get_the_permalink( $page_id );

if ( class_exists( 'acf' ) ) {
    $page_subtitle  = get_field( 'seg_blog_page_subtitle', $page_id );
    $page_content   = get_field( 'seg_blog_page_content', $page_id );
    $form_title     = get_field( 'seg_blog_page_form_title', $page_id );
    $form_content   = get_field( 'seg_blog_page_form_content', $page_id );
    $blog_cta_label = get_field( 'seg_blog_cta_label', 'option' );
}
$categories = get_categories(
        array (
            'hide_empty' => true,
        )
);
$paged      = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$loop = new WP_Query(
        array (
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 10,
    'order'          => 'ASC',
    'paged'          => $paged,
        ) );
?>
<section class="blog-listing-top-section">
    <div class="container">
        <div class="row">
            <div class="col-75">
                <div class="left-details">
                    <?php if ( ! empty( $page_subtitle ) ) { ?>
                        <h6 class="sub-title"><?php echo $page_subtitle; ?></h6>
                    <?php } ?>
                    <?php if ( ! empty( $page_title ) ) { ?>
                        <h1 class="main-heading"><?php echo $page_title; ?></h1>
                    <?php } echo $page_content; ?>
                </div>
            </div>
            <div class="col-25">
                <div class="right-Sform">
                    <div class="subscribe-form">
                        <div class="subscribe-form-inner">
                            <div class="subscribe-form-ps-inner">
                                <?php if ( ! empty( $form_title ) ) { ?>
                                    <h2 class="form-title"><?php echo $form_title; ?></h2>
                                <?php } echo do_shortcode( $form_content ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog-tags-search">
            <div class="left-tags">
                <div class="inner-wrapper">
                    <ul class="tags-list">
                        <li class="tag-item active"><a href="<?php echo $page_link; ?>" class="tag-link"><?php _e( 'All', 'seg' ); ?></a></li>
                        <?php foreach ( $categories as $key => $category ) { ?>
                            <li class="tag-item"><a href="<?php echo get_category_link( $category ); ?>" class="tag-link" data-slug="<?php echo $category->slug; ?>"><?php echo $category->name; ?></a></li>
                        <?php } ?>
                        <!--                        <li class="tag-item"><a href="#" class="tag-link">Market Insights</a></li>
                                                <li class="tag-item"><a href="#" class="tag-link">M&A Process</a></li>
                                                <li class="tag-item"><a href="#" class="tag-link">Operations</a></li>-->
                    </ul>
                </div>
            </div>
            <div class="right-search">
                <div class="inner-wrapper">
                    <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <input class="search-input" type="search" name="s" placeholder="Search articles" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="new-insight-listing">
    <div class="container">
        <?php if ( $loop->have_posts() ) {
            ?>
            <div class="row">
                <?php
                while ( $loop->have_posts() ) {
                    $loop->the_post();
                    $post_id          = get_the_ID();
                    $post_title       = get_the_title();
                    $post_content     = wp_trim_words( get_the_content(), 30 );
                    $post_thumbnail   = get_the_post_thumbnail_url();
                    $post_permalink   = get_the_permalink();
                    $img_id           = get_post_thumbnail_id( $post_id );
                    $image_alt        = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
//                    $category       = wp_get_post_terms( get_the_ID(), 'category', array ( 'fields' => 'all' ) );
//                    $cat_id         = $category[ 0 ]->term_id;
//                    $cat_name       = $category[ 0 ]->name;
                    $primary_cat_obj  = get_post_primary_category( $post_id, 'category' );
                    $primary_cat      = $primary_cat_obj[ 'primary_category' ];
                    $primary_cat_name = $primary_cat->name;
                    $date             = get_the_date();
                    $author           = get_the_author();
                    $hide_blog        = get_field( 'seg_blog_hide_author', $post_id );
                    ?>
                    <div class="col-33">
                        <div class="research-overview-box">
                            <div class="research-overview-box-inner">
                                <a href="<?php echo $post_permalink; ?>">
                                    <div class="research-overview-box-col">
                                        <div class="research-overview-logo-box">
                                            <?php if ( ! empty( $post_thumbnail ) ) { ?>
                                                <div class="research-overview-logo-inner">
                                                    <img src="<?php echo $post_thumbnail; ?>" alt="<?php echo $image_alt; ?>">
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="research-overview-box-contain">
                                            <div class="research-overview-box-contain-inner">
                                                <?php if ( ! empty( $primary_cat_name ) ) { ?>
                                                    <h3 class="research-overview-box-title"><?php echo strtoupper( $primary_cat_name ); ?></h3>
                                                <?php } if ( ! empty( $post_title ) ) { ?>
                                                    <h5 class="research-overview-box-subtitle"><?php echo $post_title; ?></h5>
                                                    <?php
                                                }
                                                if ( ! empty( $author ) || ! empty( $date ) ) {
                                                    ?>
                                                    <h6 class="g-label">
                                                        <?php if ( ! $hide_blog ) { ?>
                                                            <?php _e( 'By', 'seg' ); ?> <?php echo strtoupper( $author ); ?>, 
                                                        <?php } ?>
                                                        <?php echo $date; ?></h6>
                                                    <?php
                                                }if ( ! empty( $post_content ) ) {
                                                    ?>
                                                    <p class="research-overview-box-text"><?php echo $post_content; ?></p>
                                                <?php } if ( ! empty( $blog_cta_label ) ) { ?>
                                                    <span class="btn-arrow"><?php echo $blog_cta_label; ?><span><img src="<?php echo get_template_directory_uri() ?>/images/btn-arrow.png" alt=""></span></span>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_query();
                wp_reset_postdata();
                ?>


            </div>
        <?php }
        ?>
    </div>
</section>
<div class="pagination">
    <?php
    echo paginate_links( array (
        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
        'total'        => $loop->max_num_pages,
        'current'      => max( 1, get_query_var( 'paged' ) ),
        'format'       => '?paged=%#%',
        'show_all'     => false,
        'prev_next'    => true,
        'prev_text'    => sprintf( '<i></i> %1$s', __( 'Prev', 'seg' ) ),
        'next_text'    => sprintf( '%1$s <i></i>', __( 'Next', 'seg' ) ),
        'add_args'     => false,
        'add_fragment' => '',
    ) );
    ?>
</div>
<?php get_footer(); ?>