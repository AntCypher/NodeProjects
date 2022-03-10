<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;

/**
 * Template Name: Transaction Template
 *
 * @package WordPress
 * @subpackage seg
 * @since seg 1.0
 */
get_header();
$product_cat  = get_terms(
        array (
            'taxonomy'   => SEG_PRODUCT_TAX,
            'hide_empty' => false,
        )
);
$vertical_cat = get_terms(
        array (
            'taxonomy'   => SEG_VERTICAL_TAX,
            'hide_empty' => false,
        )
);
if ( class_exists( 'acf' ) ) {
    $page_id            = get_the_ID();
    $banner_subtext     = get_field( 'seg_trans_banner_subtext', $page_id );
    $banner_title       = get_field( 'seg_trans_banner_title', $page_id );
    $banner_cta         = get_field( 'seg_trans_banner_cta', $page_id );
    $banner_descr       = get_field( 'seg_trans_banner_descr', $page_id );
    $testinomials_count = get_field( 'seg_trans_testinomial_count', $page_id );
    $testinomials       = get_field( 'seg_trans_testinomials', $page_id );
    $testinomia_cta     = get_field( 'seg_trans_testi_cta', $page_id );
    if ( ! empty( $banner_cta ) ) {
        $banner_cta_title  = $banner_cta[ 'title' ];
        $banner_cta_link   = $banner_cta[ 'url' ];
        $banner_cta_target = $banner_cta[ 'target' ];
    }
}
?>

<div class="main-container">
    <section class="transactions-banner-section">
        <div class="container">
            <?php if ( ! empty( $banner_title ) | ! empty( $banner_subtext ) ) { ?>
                    <h1 class="transactions-banner-title">
                        <?php if ( ! empty( $banner_subtext ) ) { ?>
                            <span><?php echo $banner_subtext; ?></span>
                        <?php } 
                        echo $banner_title; 
                        ?>
                    </h1>
            <?php } ?>
            <?php if ( ! empty( $banner_descr ) ) { ?>
                    <div class="transactions-banner-subtitle">
                        <?php echo $banner_descr; ?>
                    </div>
            <?php } ?>

            <div class="transactions-search">
                <div class="row">
                    <div class="col-33">
                        <div class="transactions-search-inner">
                            <select class="form-select" id="productcat">
                                <option value=""><?php _e( 'Product', 'seg' ); ?></option>
                                <?php
                                if ( ! empty( $product_cat ) ) {
                                    foreach ( $product_cat as $key => $value ) {
                                        ?>
                                        <option value="<?php echo $value->term_id; ?>" data-badge=""><?php echo $value->name; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-33">
                        <div class="transactions-search-inner">
                            <select class="form-select" id="verticalcat">
                                <option value=""><?php _e( 'Vertical', 'seg' ); ?></option>
                                <?php
                                if ( ! empty( $vertical_cat ) ) {
                                    foreach ( $vertical_cat as $key => $value ) {
                                        ?>
                                        <option value="<?php echo $value->term_id; ?>" data-badge=""><?php echo $value->name; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-33">
                        <div class="transactions-search-inner">
                            <div class="transactions-search-form">
                                <input type="text"  name="searchText" id="searchText" value="" class="transactions-search-input" placeholder="Search">
                                <button class="transactions-search-button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="transactions-section">
        <div class="container transFilter">
            <?php transaction_cat_filter(); ?>
        </div>
    </section>
    <section class="client-video-section">
        <div class="container" id="load-data">
            <?php
            if ( ! empty( $testinomials ) ) {
                foreach ( $testinomials as $testinomialkey => $testinomial ) {
                    $iframe         = $testinomial[ 'iframe' ];
                    $video_img      = $testinomial[ 'video_image' ];
                    $video_subtitle = $testinomial[ 'video_subtitle' ];
                    $description    = $testinomial[ 'description' ];
                    $name           = $testinomial[ 'testinomial_name' ];
                    $logos          = $testinomial[ 'logos' ];
                    $video_img_url  = ! empty( $video_img ) ? $video_img[ 'url' ] : '#';
                    $video_img_alt  = ! empty( $video_img[ 'alt' ] ) ? $video_img[ 'alt' ] : get_bloginfo();
                    ?>
                    <div class="row client-video-row">
                        <div class="col-client-video-left" >
                            <div class="client-video-box">
                                <span class="client-video-box-shap"></span>
                                <div class="client-video-box-inner">
                                    <div class="client-video-box-img">
                                        <img src="<?php echo $video_img_url; ?>" alt="<?php echo $video_img_alt; ?>">
                                    </div>
                                    <div class="client-video-box-btn">
                                        <a class="popup-modal1" data-fancybox href="#popup-modal-<?php echo $testinomialkey; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/video-play-icon.png" alt=""></a>

                                        <div id="popup-modal-<?php echo $testinomialkey; ?>" class="client-video-box-popup" style="display:none;">
                                            <!--<a class="mfp-close popup-modal-dismiss" href="#">x</a>-->
                                            <?php // if ( ! empty( $iframe ) ) { ?>
                                                    <div class=" client-video-box-popup-box client-video-iframe">
                                                        <?php echo $iframe; ?>
                                                    </div>
                                            <?php // } ?>
                                        </div>
                                    </div>
                                    <?php
                                    if ( ! empty( $video_subtitle ) ) {
                                        $sub_arr = array_map( function ($item) {
                                            return "<span>" . $item[ 'subtitle' ] . "</span>";
                                        }, $video_subtitle );
                                        $sub_arr = implode( ' / ', $sub_arr );
                                        ?>
                                        <div class="client-video-box-info">
                                            <?php echo $sub_arr; ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-client-video-right">
                            <div class="client-video-contain">
                                <?php if ( ! empty( $description ) ) { ?>
                                    <div class="client-video-contain-title">
                                        <?php echo $description; ?>
                                    </div>
                                <?php } ?>
                                <div class="client-video-contain-name">
                                    <?php echo $name; ?>
                                </div>
                                <?php if ( ! empty( $logos ) ) { ?>
                                    <div class="client-video-logo-box">
                                        <?php
                                        foreach ( $logos as $logo ) {
                                            $logo     = $logo[ 'logo' ];
                                            $logo_url = ! empty( $logo ) ? $logo[ 'url' ] : '#';
                                            $logo_alt = ! empty( $logo[ 'alt' ] ) ? $logo[ 'alt' ] : get_bloginfo();
                                            if ( ! empty( $logo ) ) {
                                                ?>
                                                <div class="client-video-logo">
                                                    <img src="<?php echo $logo_url; ?>" alt="<?php echo $logo_alt; ?>">
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
            <div class="row">
                <div class="col-100">
                    <?php if ( ! empty( $testinomia_cta ) ) { ?>
                        <div class="client-video-see-more">
                            <a href="" id="load-testinomial" class="btn btn-primary"><?php echo $testinomia_cta; ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</div>

<!--Transaction Template-->
<?php get_footer(); ?>