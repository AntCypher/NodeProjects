<?php
get_header();
$transaction_id        = get_the_ID();
$transaction_title     = get_post_type();
$product_category      = wp_get_post_terms( get_the_ID(), SEG_PRODUCT_TAX, array ( 'fields' => 'all' ) );
$product_category_id   = $product_category[ 0 ]->term_id;
$product_category_slug = $product_category[ 0 ]->slug;
$product_category_name = $product_category[ 0 ]->name;
//echo "<pre>";
//print_r($product_category);
//print_r($product_category_id);
//print_r($product_category_name);
//echo "</pre>";
$product_link          = get_term_link( $product_category_id );
$trasaction_page_link  = get_field( 'seg_options_transaction_page_link', 'options' );
$bread_title           = get_field( 'seg_trans_bread_title', $transaction_id );
$banner_title          = get_field( 'seg_trans_banner_title', $transaction_id );
$banner_content        = get_field( 'seg_trans_banner_content', $transaction_id );
$testinomial_content   = get_field( 'seg_trans_test_content', $transaction_id );
$descr_bg_subtext      = get_field( 'seg_trans_des_img_subtext', $transaction_id );
$descr_logos           = get_field( 'seg_trans_desr_logos', $transaction_id );
$right_title           = get_field( 'seg_trans_right_title', $transaction_id );
$left_title            = get_field( 'seg_trans_left_title', $transaction_id );
$right_content         = get_field( 'seg_trans_right_content', $transaction_id );
$left_content          = get_field( 'seg_trans_left_content', $transaction_id );
$trans_slider_hide     = get_field( 'seg_trans_slider_hide', $transaction_id );
$trans_slider_title    = get_field( 'seg_trans_slider_title', $transaction_id );
$press_subtitle        = get_field( 'seg_press_subtitle', $transaction_id );
$press_title           = get_field( 'seg_press_title', $transaction_id );
$press_content         = get_field( 'seg_press_content', $transaction_id );
$press_read_cta        = get_field( 'seg_press_read_cta', $transaction_id );
$video_iframe          = get_field( 'seg_trans_video_iframe', $transaction_id );
$video_img             = get_field( 'seg_trans_video_img', $transaction_id );
$video_img_url         = ! empty( $video_img ) ? $video_img[ 'url' ] : '#';
$video_img_alt         = ! empty( $video_img[ 'alt' ] ) ? $video_img[ 'alt' ] : get_bloginfo();
$person_name           = get_field( 'seg_trans_video_subtext', $transaction_id );
$person_designation    = get_field( 'seg_trans_video_designation', $transaction_id );
$video_subtitle        = get_field( 'seg_trans_video_subtitle', $transaction_id );
?>
<div class="main-container">
    <section class="trans-client-info-section">
        <div class="container">
            <div class="row trans-client-info-row">
                <span class="client-video-box-shap"></span>
                <div class="col-trans-client-info-left">
                    <div class="breadcrumb">
                        <ul>
                            <?php if ( ! empty( $trasaction_page_link ) || ! empty( $transaction_title ) ) { ?>
                                <li><a href="<?php echo $trasaction_page_link; ?>"><?php echo ucfirst( $transaction_title ); ?></a></li>
                            <?php } if ( ! empty( $product_link ) || ! empty( $product_category_name ) ) { ?>
                                <li><a href="<?php echo $product_link; ?>"><?php echo $product_category_name; ?></a></li>
                            <?php } if ( ! empty( $bread_title ) ) { ?>
                                <li><?php echo $bread_title; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php if ( ! empty( $banner_title ) ) { ?>
                        <h1 class="trans-client-info-title"><?php echo $banner_title; ?></h1>
                    <?php } if ( ! empty( $banner_content ) ) { ?>
                        <div class="trans-client-info-contain">
                            <?php echo $banner_content; ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="col-trans-client-info-right">
                    <div class="client-video-box">
                        <div class="client-video-box-inner">
                            <?php if(!empty($video_img)) { ?>
                            <div class="client-video-box-img">
                                <img src="<?php echo $video_img_url; ?>" alt="<?php echo $video_img_alt; ?>">
                            </div>
                            <?php } ?>
                            <div class="client-video-box-btn">
                                <a class="popup-modal1" data-fancybox href="#popup-modal-1"><img src="<?php echo get_template_directory_uri(); ?>/images/video-play-icon.png" alt=""></a>
                                <div id="popup-modal-1" class="client-video-box-popup" style="display:none;">
                                    <!--<a class="mfp-close popup-modal-dismiss" href="#">x</a>-->
                                    <?php if ( ! empty( $video_iframe ) ) { ?>
                                        <div class="client-video-box-popup-box client-video-iframe">
                                        <?php echo $video_iframe; ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php if ( ! empty( $person_name ) || ! empty( $person_designation ) ) { ?>
                                <div class="client-video-box-name">
                                    - <span><?php echo $person_name; ?></span>, <?php echo $person_designation; ?>
                                </div>
                            <?php } ?>
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

            </div>
            <div class="row">
                <div class="col-100">
                    <?php if ( ! empty( $testinomial_content ) ) { ?>
                        <div class="trans-client-quote-carousel">
                            <?php
                            foreach ( $testinomial_content as $value ) {
                                $description = $value[ 'description' ];
                                $name        = $value[ 'name' ];
                                $designation = $value[ 'designation' ];
                                ?>
                                <div class="trans-client-quote-iteam">
                                    <div class="trans-client-quote-box">
                                        <div class="trans-client-quote-info">
                                            <?php
                                            echo $description;
                                            if ( ! empty( $name ) || ! empty( $designation ) ) {
                                                ?>
                                                <div class="trans-client-quote-name">- <span><?php echo $name; ?></span>, <?php echo $designation; ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="client-description-section">
        <div class="container">
            <div class="row">
                <div class="col-66 client-description-col">
                    <div class="row client-description-row">
                        <div class="col-50 client-description-logo">
                            <div class="client-description-logo-box">
                                <div class="transactions-box">
                                    <div class="transactions-box-inner">
                                        <div class="transactions-box-col">
                                            <?php if ( ! empty( $descr_logos ) ) { ?>
                                                <div class="transactions-logo-box">
                                                    <?php
                                                    foreach ( $descr_logos as $logo ) {
                                                        $logo     = $logo[ 'logo' ];
                                                        $logo_url = ! empty( $logo ) ? $logo[ 'url' ] : '#';
                                                        $logo_alt = ! empty( $logo[ 'alt' ] ) ? $logo[ 'alt' ] : get_bloginfo();
                                                        if ( ! empty( $logo ) ) {
                                                            ?>
                                                            <div class="transactions-logo">
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
                                <?php if ( ! empty( $descr_bg_subtext ) ) { ?>
                                    <div class="client-description-logo-box-text">
                                        <span><?php echo $descr_bg_subtext; ?></span>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php if ( ! empty( $right_title ) || ! empty( $right_content ) ) { ?>
                            <div class="col-50 client-description-info">
                                <div class="client-description-contain">
                                    <?php if ( ! empty( $right_title ) ) { ?>
                                        <h4><?php echo $right_title; ?></h4>
                                        <?php
                                    }
                                    if ( ! empty( $right_content ) ) {
                                        foreach ( $right_content as $value ) {
                                            $title       = $value[ 'title' ];
                                            $description = $value[ 'description' ];
                                            if ( ! empty( $title ) ) {
                                                ?>
                                                <h6><?php echo $title; ?></h6>
                                            <?php }if ( ! empty( $description ) ) { ?>
                                                <p><?php echo $description; ?></p>
                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <?php if ( ! empty( $left_title ) || ! empty( $left_content ) ) { ?>
                    <div class="col-33 investor-description-col">
                        <div class="client-description-contain">
                            <?php if ( ! empty( $left_title ) ) { ?>
                                <h4><?php echo $left_title; ?></h4>
                                <?php
                            }
                            if ( ! empty( $left_content ) ) {
                                foreach ( $left_content as $value ) {
                                    $title       = $value[ 'title' ];
                                    $description = $value[ 'description' ];
                                    if ( ! empty( $title ) ) {
                                        ?>
                                        <h6><?php echo $title; ?></h6>
                                    <?php }if ( ! empty( $description ) ) { ?>
                                        <p><?php echo $description; ?></p>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php if ( ! $trans_slider_hide ) { ?>
        <section class="client-trans-list-section">
            <div class="container">
                <div class="row">
                    <?php if ( ! empty( $trans_slider_title ) ) { ?>
                        <div class="col-100">
                            <h2><?php echo $trans_slider_title; ?></h2>
                        </div>
                    <?php } ?>
                    <div class="col-100">
                        <?php
                        $args               = array (
                            'post_type'      => SEG_TRANSACTION_POST_TYPE,
                            'order'          => 'ASC',
                            'posts_per_page' => -1,
                            'post__not_in'   => array ( $transaction_id ),
                            'tax_query'      => array (
                                array (
                                    'taxonomy' => SEG_PRODUCT_TAX,
                                    'field'    => 'term_id',
                                    'terms'    => $product_category_id,
                                ),
                            ),
                        );
                        $recent_trans_query = new WP_Query( $args );
                        if ( $recent_trans_query->have_posts() ) {
                            ?>
                            <div class="client-trans-list-carousel">
                                <?php
                                while ( $recent_trans_query->have_posts() ) {
                                    $recent_trans_query->the_post();
                                    $transaction_id        = get_the_ID();
                                    $trans_images          = get_field( 'seg_trans_images', $transaction_id );
                                    $trans_highlight       = get_field( 'seg_trans_highlight_cta', $transaction_id );
                                    $trans_content         = get_the_title();
                                    $trans_permalink       = get_the_permalink();
                                    $product_category      = wp_get_post_terms( get_the_ID(), SEG_PRODUCT_TAX, array ( 'fields' => 'all' ) );
                                    $product_category_id   = $product_category[ 0 ]->term_id;
                                    $product_category_slug = $product_category[ 0 ]->slug;
                                    ?>
                                    <div class="client-trans-list-box">
                                        <div class="item">
                                            <div class="transactions-box">
                                                <div class="transactions-box-inner">
                                                    <a href="<?php echo $trans_permalink; ?>" class="btn-arrow" >
                                                        <div class="transactions-box-col">
                                                            <?php if ( ! empty( $trans_images ) ) { ?>
                                                                <div class="transactions-logo-box">
                                                                    <?php
                                                                    foreach ( $trans_images as $trans_image ) {
                                                                        $image     = $trans_image[ 'image' ];
                                                                        $image_url = ! empty( $image ) ? $image[ 'url' ] : '#';
                                                                        $image_alt = ! empty( $image[ 'alt' ] ) ? $image[ 'alt' ] : get_bloginfo();
                                                                        if ( ! empty( $image ) ) {
                                                                            ?>
                                                                            <div class="transactions-logo">
                                                                                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </div>
                                                            <?php } ?>
                                                            <div class="transactions-box-contain">
                                                                <div class="transactions-tag"><?php echo strtoupper( $product_category_slug ); ?></div>
                                                                <h6 class="transactions-box-title"><?php echo $trans_content; ?></h6>
                                                                <?php if ( ! empty( $trans_highlight ) ) { ?>
                                                                    <span class="btn-arrow"><?php echo $trans_highlight; ?><span><img src="<?php echo get_template_directory_uri() ?>/images/btn-arrow.png" alt=""></span></span>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
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
                </div>
            </div>
        </section>
    <?php } ?>
    <?php if ( ! empty( $press_subtitle ) || ! empty( $press_title ) || ! empty( $press_content ) || ! empty( $press_read_cta ) ) {
        ?>
        <section class="client-trans-overview-section">
            <div class="container">
                <div class="row">
                    <div class="col-100">
                        <div class="client-trans-overview-box">
                            <?php if ( ! empty( $press_subtitle ) ) { ?>
                                <h4><?php echo $press_subtitle; ?></h4>
                            <?php }if ( ! empty( $press_title ) ) { ?>
                                <h2><?php echo $press_title; ?></h2>
                            <?php } if ( ! empty( $press_content ) ) { ?>
                                <div class="client-trans-overview-contain-container">
                                    <div class="client-trans-overview-contain">
                                        <?php echo $press_content; ?>
                                    </div>
                                </div>
                            <?php } if ( ! empty( $press_read_cta ) ) { ?>
                                <a href="<?php echo $press_read_cta[ 'url' ]; ?>" class="btn btn-primary-transparent client-trans-overview-btn" target="<?php echo $press_read_cta[ 'target' ]; ?>"><?php echo $press_read_cta[ 'title' ]; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
</div>

<?php get_footer(); ?>