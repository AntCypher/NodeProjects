<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage SEG
 * @since Seg 1.0
 */
get_header();
$blog_page_id    = get_option( 'page_for_posts' );
$blog_page_link  = get_the_permalink( $blog_page_id );
$blog_page_title = get_the_title( get_option( 'page_for_posts', true ) );
$category        = wp_get_post_terms( get_the_ID(), 'category', array ( 'fields' => 'all' ) );
$cat_id          = $category[ 0 ]->term_id;
$cat_name        = $category[ 0 ]->name;
$date            = get_the_date();
$author          = get_the_author();
$post_id         = get_the_ID();
$post_permalink  = get_the_permalink();
$post_title      = get_the_title();
$post_thumbnail  = get_the_post_thumbnail_url();
$img_id          = get_post_thumbnail_id( $post_id );
$post_content    = get_the_content();
$image_alt       = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
$author_id       = get_the_author_ID();
$first_name      = get_the_author_meta( 'first_name', $author_id );
$author_link     = get_author_posts_url( $author_id );
$description     = get_the_author_meta( 'description', $author_id );
$linkedin        = get_the_author_meta( 'linkedin', $author_id );
$facebook        = get_the_author_meta( 'facebook', $author_id );
$twitter         = get_the_author_meta( 'twitter', $author_id );
//$email         = get_the_author_meta( 'email', $author_id );
if ( class_exists( 'acf' ) ) {
    $user_imag          = get_field( 'seg_author_image', 'user_' . $author_id );
    $user_imag_url      = ! empty( $user_imag ) ? $user_imag[ 'url' ] : '#';
    $user_imag_alt      = ! empty( $user_imag[ 'alt' ] ) ? $user_imag[ 'alt' ] : get_bloginfo();
    $about_author_title = get_field( 'seg_blog_about_author_title', 'option' );
    $blog_cta_label     = get_field( 'seg_blog_cta_label', 'option' );
    $related_title      = get_field( 'seg_blog_related_article_title', 'option' );
    $back_blog_cta      = get_field( 'seg_back_blog_cta', 'option' );
    $hide_blog          = get_field( 'seg_blog_hide_author', $post_id );
}
?>

<section class="single-blog-header">
    <div class="container">
        <div class="breadcums-wrapper">
            <a href="<?php echo $blog_page_link; ?>" class="breadcum-link"><?php echo $blog_page_title; ?></a>
            <a href="<?php echo get_category_link( $cat_id ); ?>" class="breadcum-link"><?php echo $cat_name; ?></a>
        </div>
        <?php if ( ! empty( $post_title ) ) { ?>
            <h1 class="blog-heading"><?php echo $post_title; ?></h1>
            <?php
        }
        ?>
        <p class="blog-date">
            <?php if ( ! $hide_blog ) { ?>
                <?php _e( 'By', 'seg' ); ?> <a href="<?php echo $author_link; ?>"><?php echo strtoupper( $author ); ?></a>, 
            <?php } ?>
            <?php echo $date; ?></p>

    </div>
</section>
<section class="blog-details">
    <div class="container">
        <?php if ( ! empty( $post_thumbnail ) ) { ?>
            <div class="blog-img-wrapper">
                <img src="<?php echo $post_thumbnail; ?>" alt="<?php echo $image_alt; ?>" />
            </div>
        <?php } ?>
    </div>
</section>
<section class="blog-text-area-section">
    <div class="container">
        <div class="blog-text-area">
            <div class="left-socialMedia-wrapper">
                <ul class="socialMedia-lists share-buttons">
                    <li class="social-item"><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $post_permalink; ?>&amp;title=<?php echo $post_title; ?>&amp;summary=<?php echo wp_trim_words( get_the_content(), 20 ); ?>" target="_blank" title="Share on LinkedIn" onclick="return !window.open(this.href, 'LinkedIn', 'width=600,height=500')"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="social-item">
                        <a href="https://twitter.com/intent/tweet?source=<?php echo $post_permalink; ?>&amp;text=<?php echo $post_title; ?>" target="_blank" title="Tweet" onclick="return !window.open(this.href, 'Facebook', 'width=600,height=500')"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-item">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_permalink; ?>&amp;title=<?php echo $post_title; ?>&amp;picture=<?php echo $post_thumbnail; ?>&amp;description=<?php echo wp_trim_words( get_the_content(), 20 ); ?>" title="Share on Facebook" target="_blank" onclick="return !window.open(this.href, 'Facebook', 'width=600,height=500')"><i class="fab fa-facebook-f"></i> </a></li>
                    <li class="social-item"><a href="mailto:?subject=<?php echo $post_title; ?>&amp;body=<?php echo wp_trim_words( get_the_content(), 20 ); ?>" title="Email"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="right-contant">
                <?php the_content(); ?>
                <?php if ( ! $hide_blog ) { ?>
                    <div class="blog-author-box">
                        <div class="inner-wrapper">
                            <?php if ( ! empty( $user_imag ) ) { ?>
                                <div class="author-img-wrapper">
                                    <img src="<?php echo $user_imag_url; ?>" alt="<?php echo $user_imag_alt; ?>" />
                                </div>
                            <?php } ?>
                            <div class="author-details-wrapper">
                                <div class="inner-wrapper">
                                    <?php if ( ! empty( $about_author_title ) ) { ?>
                                        <h6 class="sub-title"><?php echo $about_author_title; ?></h6>
                                    <?php } if ( ! empty( $first_name ) ) { ?>
                                        <h4 class="author-name"><?php echo $first_name; ?></h4>
                                    <?php } if ( ! empty( $description ) ) { ?>
                                        <p><?php echo $description; ?></p>
                                    <?php } ?>
                                    <ul class="socialMedia-lists">
                                        <?php if ( ! empty( $facebook ) ) { ?>
                                            <li class="social-item"><a href="<?php echo $facebook; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <?php } ?>
                                        <?php if ( ! empty( $twitter ) ) { ?>
                                            <li class="social-item"><a href="<?php echo $twitter; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <?php } ?>
                                        <?php if ( ! empty( $linkedin ) ) { ?>
                                            <li class="social-item"><a href="<?php echo $linkedin; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                        <?php } ?>
                                        <!--<li class="social-item mail"><a href=""></a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>
<?php
$args          = array (
    'post_type'      => 'post',
    'order'          => 'ASC',
    'posts_per_page' => 3,
    'post__not_in'   => array ( $post_id ),
    'tax_query'      => array (
        array (
            'taxonomy' => 'category',
            'field'    => 'term_id',
            'terms'    => $cat_id,
        ),
    ),
);
$related_query = new WP_Query( $args );
$post_count    = $related_query->post_count;
?>
<section class="new-insight-listing related-articles-section">
    <div class="container">
        <?php if ( ! empty( $related_title ) && ! empty( $post_count ) ) { ?>
            <h2 class="section-title"><?php echo $related_title; ?></h2>
            <?php
        }
        if ( $related_query->have_posts() ) {
            ?>
            <div class="row">
                <?php
                while ( $related_query->have_posts() ) {
                    $related_query->the_post();
                    $post_id          = get_the_ID();
                    $post_title       = get_the_title();
                    $post_content     = wp_trim_words( get_the_content(), 30 );
                    $post_thumbnail   = get_the_post_thumbnail_url();
                    $post_permalink   = get_the_permalink();
                    $img_id           = get_post_thumbnail_id( $post_id );
                    $image_alt        = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
//                    $categories       = wp_get_post_terms( get_the_ID(), 'category', array ( 'fields' => 'all' ) );
//                    $category_id      = $categories[ 0 ]->term_id;
//                    $cateroty_name    = $categories[ 0 ]->name;
                    $post_date        = get_the_date();
                    $post_author      = get_the_author();
                    $primary_cat_obj  = get_post_primary_category( $post_id, 'category' );
                    $primary_cat      = $primary_cat_obj[ 'primary_category' ];
                    $primary_cat_name = $primary_cat->name;
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
                                                <?php } if ( ! empty( $post_author ) || ! empty( $post_date ) ) { ?>
                                                    <h6 class="g-label">
                                                        <?php if ( ! $hide_blog ) { ?>
                                                            <?php _e( 'By', 'seg' ); ?> <?php echo strtoupper( $post_author ); ?>,
                                                        <?php } ?>
                                                        <?php echo $post_date; ?></h6>
                                                <?php } if ( ! empty( $post_content ) ) { ?>
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
        <?php } ?>
    </div>
</section>
<?php if ( ! empty( $back_blog_cta ) ) { ?>
    <div class="backtoblog">
        <a href="<?php echo $back_blog_cta[ 'url' ]; ?>"  target="<?php echo $back_blog_cta[ 'target' ]; ?>"class="btn btn-primary-transparent"><span><img src="https://seg.compview.co/wp-content/themes/seg/images/btn-arrow.png" alt=""></span><?php echo $back_blog_cta[ 'title' ]; ?></a>
    </div>
<?php } ?>
<?php get_footer(); ?>