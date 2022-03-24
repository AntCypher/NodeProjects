<?php
/*
 * custom ajax functions
 */

add_action( 'wp_ajax_transaction_cat_filter', 'transaction_cat_filter' );
add_action( 'wp_ajax_nopriv_transaction_cat_filter', 'transaction_cat_filter' );

add_action( 'wp_ajax_research_tax_filter', 'research_tax_filter' );
add_action( 'wp_ajax_nopriv_research_tax_filter', 'research_tax_filter' );

function transaction_cat_filter() {
    $page_id      = isset( $_POST[ 'page_id' ] ) ? $_POST[ 'page_id' ] : get_the_ID();
    $banner_cta   = get_field( 'seg_trans_banner_cta', $page_id );
    $search_text  = isset( $_POST[ 'search_text' ] ) ? $_POST[ 'search_text' ] : '';
    $product_cat  = isset( $_POST[ 'product_cat' ] ) ? $_POST[ 'product_cat' ] : '';
    $vertical_cat = isset( $_POST[ 'vertical_cat' ] ) ? $_POST[ 'vertical_cat' ] : '';
    $pagenumber   = isset( $_POST[ 'pagenumber' ] ) ? $_POST[ 'pagenumber' ] : 1;
    $args         = array (
        'post_type'      => SEG_TRANSACTION_POST_TYPE,
        'posts_per_page' => 15,
        'paged'          => $pagenumber,
    );

    if ( ! empty( $product_cat[ 0 ] ) ) {
        $args[ 'tax_query' ][] = array (
            'taxonomy' => SEG_PRODUCT_TAX,
            'field'    => 'id',
            'terms'    => $product_cat,
        );
    }
    if ( ! empty( $vertical_cat[ 0 ] ) ) {
        $args[ 'tax_query' ][] = array (
            'taxonomy' => SEG_VERTICAL_TAX,
            'field'    => 'id',
            'terms'    => $vertical_cat,
        );
    }

    if ( ! empty( $search_text ) ) {
        $args[ 's' ] = $search_text;
    }
    $transaction_query = new WP_Query( $args );

    if ( $transaction_query->have_posts() ) {
        ?>
        <div class="row appenddata" id="appenddata">
            <input type="hidden" name="page_id" value="<?php echo $page_id; ?>" id="page_id">
            <?php
            while ( $transaction_query->have_posts() ) {
                $transaction_query->the_post();
                $transaction_id           = get_the_ID();
                $trans_images             = get_field( 'seg_trans_images', $transaction_id );
                $trans_highlight          = get_field( 'seg_trans_highlight_cta', $transaction_id );
                $trans_content            = get_the_title();
                $trans_permalink          = get_the_permalink();
//                $product_category         = wp_get_post_terms( get_the_ID(), SEG_PRODUCT_TAX, array ( 'fields' => 'all' ) );
//                $product_category_id      = $product_category[ 0 ]->term_id;
//                $product_category_slug    = $product_category[ 0 ]->slug;
                $primary_product_cat_obj  = get_post_primary_category( $transaction_id, SEG_PRODUCT_TAX );
                $primary_product_cat      = $primary_product_cat_obj[ 'primary_category' ];
                $primary_product_cat_slug = $primary_product_cat->slug;
                ?>
                <div class="col-20">
                    <a href="<?php echo $trans_permalink; ?>" class="btn-arrow">
                        <div class="transactions-box">
                            <div class="transactions-box-inner">
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
                                        <div class="transactions-tag"><?php echo strtoupper( $primary_product_cat_slug ); ?></div>
                                        <h6 class="transactions-box-title"><?php echo $trans_content; ?></h6>
                                        <?php if ( ! empty( $trans_highlight ) ) { ?>
                                            <span class="btn-arrow" ><?php echo $trans_highlight; ?><span><img src="<?php echo get_template_directory_uri() ?>/images/btn-arrow.png" alt=""></span></span>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <?php
            }
            wp_reset_query();
            wp_reset_postdata();
            ?>
        </div>
        <?php
        if ( $transaction_query->max_num_pages > $pagenumber ) {
            if ( ! empty( $banner_cta ) ) {
                ?>
                <div class = "row load-click" >
                    <div class="col-100">
                        <div class="transactions-see-more">
                            <a id="load-click" class="btn btn-primary" data-page="<?php echo $pagenumber + 1; ?>" target=""><?php echo $banner_cta; ?></a>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
    } else {
        ?>
        <h3 style="color:white"><center><?php _e( 'No  Found.', 'seg' ); ?></center></h3>
        <?php
    }
    if ( isset( $_POST ) && ! empty( $_POST ) ) {
        exit();
    }
}

function research_tax_filter() {
    $page_id       = isset( $_POST[ 'page_id' ] ) ? $_POST[ 'page_id' ] : get_the_ID();
    $banner_cta    = get_field( 'seg_research_banner_cta', $page_id );
    $report_tax    = isset( $_POST[ 'report_tax' ] ) ? $_POST[ 'report_tax' ] : '';
    $frequency_tax = isset( $_POST[ 'frequency_tax' ] ) ? $_POST[ 'frequency_tax' ] : '';
    $industry_tax  = isset( $_POST[ 'industry_tax' ] ) ? $_POST[ 'industry_tax' ] : '';
    $pagenumber    = isset( $_POST[ 'pagenumber' ] ) ? $_POST[ 'pagenumber' ] : 1;
    $args          = array (
        'post_type'      => SEG_RESEARCH_POST_TYPE,
        'posts_per_page' => 9,
        'paged'          => $pagenumber,
        'order'          => 'ASC',
    );

    if ( ! empty( $report_tax[ 0 ] ) ) {
        $args[ 'tax_query' ][] = array (
            'taxonomy' => SEG_REPORT_TAX,
            'field'    => 'id',
            'terms'    => $report_tax,
        );
    }
    if ( ! empty( $frequency_tax[ 0 ] ) ) {
        $args[ 'tax_query' ][] = array (
            'taxonomy' => SEG_FREQUENCY_TAX,
            'field'    => 'id',
            'terms'    => $frequency_tax,
        );
    }
    if ( ! empty( $industry_tax[ 0 ] ) ) {
        $args[ 'tax_query' ][] = array (
            'taxonomy' => SEG_INDUSTRY_TAX,
            'field'    => 'id',
            'terms'    => $industry_tax,
        );
    }
    $research_query = new WP_Query( $args );

    if ( $research_query->have_posts() ) {
        ?>
        <div class="row appenddata" id="appendd">
            <?php
            while ( $research_query->have_posts() ) {
                $research_query->the_post();
                $research_id             = get_the_ID();
                $research_title          = get_the_title();
                $research_permalink      = get_the_permalink();
                $img_id                  = get_post_thumbnail_id( $research_id );
                $research_img_alt        = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
                $research_img_url        = get_the_post_thumbnail_url();
                $research_subtitle       = get_field( 'seg_research_subtitle', $research_id );
                $research_description    = get_field( 'seg_research_description', $research_id );
                $research_cta_label      = get_field( 'seg_research_access_cta_label', $research_id );
                $research_permalink      = get_the_permalink();
//                $post_tax             = wp_get_post_terms( get_the_ID(), SEG_REPORT_TAX, array ( 'fields' => 'all' ) );
//                $post_tax_slug        = $post_tax[ 0 ]->slug;
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
        <?php
        if ( $research_query->max_num_pages > $pagenumber ) {
            if ( ! empty( $banner_cta ) ) {
                ?>
                <div class = "row load-click" >
                    <div class="col-100">
                        <div class="research-overview-see-more">
                            <a id="load-click" class="btn btn-primary" data-page="<?php echo $pagenumber + 1; ?>" target=""><?php echo $banner_cta; ?></a>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
    } else {
        ?>
        <h3><center><?php _e( 'No  Found.', 'seg' ); ?></center></h3>
        <?php
    }
    if ( isset( $_POST ) && ! empty( $_POST ) ) {
        exit();
    }
}
