<?php
get_header();
$research_id      = get_the_ID();
$title            = get_the_title();
$permalink        = get_the_permalink();
$report_category  = wp_get_post_terms( $research_id, SEG_REPORT_TAX, array ( 'fields' => 'all' ) );
$report_id        = $report_category[ 0 ]->term_id;
$report_slug      = $report_category[ 0 ]->slug;
$report_name      = $report_category[ 0 ]->name;
$img_id           = get_post_thumbnail_id( $research_id );
$research_img_alt = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
$research_img_url = get_the_post_thumbnail_url();
if ( class_exists( 'acf' ) ) {
    $flip                = get_field( 'seg_res_page_flip', $research_id );
    $subtitle            = get_field( 'seg_research_subtitle', $research_id );
    $description         = get_field( 'seg_research_description', $research_id );
    $share_title         = get_field( 'seg_res_page_share_title', $research_id );
    $form_title          = get_field( 'seg_res_page_form_title', $research_id );
    $form_sd             = get_field( 'seg_res_page_form_scode', $research_id );
    $select_img_or_video = get_field( 'seg_res_page_content_sel', $research_id );
    $video_image         = get_field( 'seg_res_page_report_img', $research_id );
    $video_image_url     = ! empty( $video_image ) ? $video_image[ 'url' ] : '#';
    $video_image_alt     = ! empty( $video_image[ 'alt' ] ) ? $video_image[ 'alt' ] : get_bloginfo();
    $video_iframe        = get_field( 'seg_res_page_report_video', $research_id );
    $report_description  = get_field( 'seg_res_page_report_desc', $research_id );
    $recent_report_title = get_field( 'seg_res_page_recent_title', $research_id );
    $show_default        = get_field( 'seg_res_page_report_selecter', $research_id );
    $select_research     = get_field( 'seg_res_page_report_list', $research_id );
    $class               = $flip ? 'rs-single-flip' : '';
}
?>
<div class="main-container">
    <section class="research-single-wrapper <?php echo $class; ?>">
        <div class="container">
            <div class="research-single-haader">
                <div class="row">
                    <?php if ( ! empty( $research_img_url ) ) { ?>
                        <div class="rs-image-wrapper">
                            <div class="rs-image-inner">
                                <img src="<?php echo $research_img_url; ?>" alt="<?php echo $research_img_alt; ?>" />
                            </div>
                        </div>
                    <?php } ?>
                    <div class="rs-details-wrapper">
                        <div class="rs-details-inner">
                            <?php if ( ! empty( $title ) || ! empty( $subtitle ) ) { ?>
                                <h1 class="research-single-title"><span><?php echo $title; ?></span><?php echo $subtitle; ?></h1>
                            <?php } ?>
                            <?php echo $description; ?>
                            <div class="socialMedia-wrapper">
                                <h3 class="s-title"><?php echo $share_title; ?></h3>
                                <ul class="share-buttons socialMedia-lists">
                                    <li class="social-item">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink; ?>&amp;title=<?php echo $title; ?>&amp;picture=<?php echo $research_img_url; ?>&amp;description=<?php echo wp_trim_words( $description, 20 ); ?>" title="Share on Facebook" target="_blank" onclick="return !window.open(this.href, 'Facebook', 'width=600,height=500')"><i class="fab fa-facebook-f"></i> </a></li>
                                    <li class="social-item">
                                        <a href="https://twitter.com/intent/tweet?source=<?php echo $permalink; ?>&amp;text=<?php echo $title; ?>" target="_blank" title="Tweet" onclick="return !window.open(this.href, 'Facebook', 'width=600,height=500')"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-item"><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $research_img_url; ?>&amp;title=<? echo $title; ?>&amp;summary=<?php echo wp_trim_words( $description, 20 ); ?>" target="_blank" title="Share on LinkedIn" onclick="return !window.open(this.href, 'LinkedIn', 'width=600,height=500')"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="social-item"><a href="mailto:?subject=<?php echo $title; ?>&amp;body=<?php echo wp_trim_words( $description, 20 ); ?>" title="Email"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rs-contant-wrapper">
                <div class="row">
                    <div class="rs-form-wrapper">
                        <div class="rs-form-inner">
                            <div class="rs-form">
                                <?php if ( ! empty( $form_title ) ) { ?>
                                    <h3 class="form-title"><?php echo $form_title; ?></h3>
                                <?php } ?>
                                <?php
                                echo do_shortcode( $form_sd );
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="rs-contant">
                        <div class="rs-contant-inner">
                            <?php if ( ! empty( $video_image ) || ! empty( $video_iframe ) ) { ?>
                                <div class="rs-video-wrapper">
                                    <?php
                                    if ( ! empty( $video_image ) ) {
                                        ?>
                                        <div class="client-video-box-img">
                                            <img src="<?php echo $video_image_url; ?>" alt="<?php echo $video_image_alt; ?>">
                                        </div>
                                    <?php } ?>
                                    <?php if ( ! empty( $select_img_or_video ) ) { ?>
                                        <div class="client-video-box-btn">
                                            <a class="popup-modal1 rs-video-btn" data-fancybox href="#popup-modal-1"><img src="<?php echo get_template_directory_uri(); ?>/images/video-play-icon.png" alt=""></a>
                                            <div id="popup-modal-1" class="client-video-box-popup" style="display:none;">
                                                <!--<a class="mfp-close popup-modal-dismiss" href="#">x</a>-->
                                                <?php if ( ! empty( $video_iframe ) ) { ?>
                                                    <div class="client-video-box-popup-box client-video-iframe">
                                                        <?php echo $video_iframe; ?>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>

                            <?php echo $report_description; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="recent-research-section">
        <?php
        if ( $show_default ) {
            $recent_args[ 'post_type' ]      = SEG_RESEARCH_POST_TYPE;
            $recent_args[ 'post__not_in' ]   = array ( $research_id );
            $recent_args[ 'posts_per_page' ] = 3;
            $recent_args[ 'order' ]          = 'DESC';
            $recent_args[ 'tax_query' ][]    = array (
                'taxonomy' => SEG_REPORT_TAX,
                'field'    => 'term_id',
                'terms'    => $report_id,
            );
        } else {
            $recent_args[ 'post_type' ]    = SEG_RESEARCH_POST_TYPE;
            $recent_args[ 'post__not_in' ] = array ( $research_id );
//            if ( ! $show_default ) {
//                  $recent_args[ 'posts_per_page' ] = 1;
            $recent_args[ 'post__in' ]     = $select_research;
            $recent_args[ 'orderby' ]      = "post__in";
            $recent_args[ 'tax_query' ][]  = array (
                'taxonomy' => SEG_REPORT_TAX,
                'field'    => 'term_id',
                'terms'    => $report_id,
            );
        }

        $recent_research_query = new WP_Query( $recent_args );
        $post_count            = $recent_research_query->post_count;
        if ( ! empty( $post_count ) ) {
            ?>
            <div class="container">
                <h2 class="section-title"><?php echo $recent_report_title; ?></h2>
                <?php
//            $recent_args = array (
//                'post_type'    => SEG_RESEARCH_POST_TYPE,
//                'post__not_in' => array ( $research_id ),
//                'posts_per_page' => 3,
//                'order' => 'DESC'
//                $recent_args[ 'posts_per_page' ] = 3;
//                'tax_query'    => array (
//                    array (
//                        'taxonomy' => SEG_REPORT_TAX,
//                        'field'    => 'term_id',
//                        'terms'    => $report_id,
//                    ),
//                ),
//            );
                ?>
                <div class="row">
                    <?php
                    while ( $recent_research_query->have_posts() ) {
                        $recent_research_query->the_post();
                        $res_id                  = get_the_ID();
                        $research_title          = get_the_title();
                        $research_permalink      = get_the_permalink();
                        $img_id                  = get_post_thumbnail_id( $res_id );
                        $research_img_url        = get_the_post_thumbnail_url();
                        $research_img_alt        = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
                        $research_subtitle       = get_field( 'seg_research_subtitle', $res_id );
                        $research_description    = get_field( 'seg_research_description', $res_id );
                        $research_cta_label      = get_field( 'seg_research_access_cta_label', $res_id );
                        $research_permalink      = get_the_permalink();
//                    $post_tax             = wp_get_post_terms( get_the_ID(), SEG_REPORT_TAX, array ( 'fields' => 'all' ) );
//                    $post_tax_slug        = $post_tax[ 0 ]->slug;
                        $primary_report_cat_obj  = get_post_primary_category( $research_id, SEG_REPORT_TAX );
                        $primary_report_cat      = $primary_report_cat_obj[ 'primary_category' ];
                        $primary_report_cat_slug = $primary_report_cat->slug;
                        ?>
                        <div class="col-33">
                            <div class="research-overview-box">
                                <div class="research-overview-box-inner">
                                    <div class="research-overview-box-col">
                                        <a href="<?php echo $research_permalink; ?>">
                                            <div class="research-overview-logo-box">
                                                <?php if ( ! empty( $research_img_url ) ) { ?>
                                                    <div class="research-overview-logo-inner">
                                                        <img src="<?php echo $research_img_url; ?>" alt="<?php echo $research_img_alt; ?>">
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <div class="research-overview-box-contain">
                                                <div class="research-overview-tag"><?php echo strtoupper( $primary_report_cat_slug ); ?></div>
                                                <div class="research-overview-box-contain-inner">
                                                    <?php if ( ! empty( $research_title ) ) { ?>
                                                        <h3 class="research-overview-box-title"><?php echo $research_title; ?></h3>
                                                    <?php } if ( ! empty( $research_subtitle ) ) { ?>
                                                        <h5 class="research-overview-box-subtitle"><?php echo $research_subtitle; ?></h5>
                                                    <?php } if ( ! empty( $research_description ) ) { ?>
                                                        <p class="research-overview-box-text"><?php echo $research_description; ?></p>
                                                    <?php } if ( ! empty( $research_cta_label ) || $research_permalink ) { ?>
                                                        <span class="btn-arrow"><?php echo $research_cta_label; ?><span><img src="<?php echo get_theme_file_uri(); ?>/images/btn-arrow.png" alt=""></span></span>
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
            </div>
        <?php } ?>
    </section>
</div>

<?php get_footer(); ?>