<?php
if ( class_exists( 'acf' ) ) {
    $title                     = get_sub_field( 'title' );
    $description               = get_sub_field( 'description' );
    $show_default              = get_sub_field( 'show_default_transactions' );
    $select_custom_transaction = get_sub_field( 'select_custom_transactions' );
}
$args = array (
    'post_type'   => SEG_TRANSACTION_POST_TYPE,
    'post_status' => 'publish',
);
if ( $show_default ) {
    $args[ 'posts_per_page' ] = -1;
}
if ( ! $show_default ) {
    $args[ 'posts_per_page' ] = -1;
    $args[ 'post__in' ]       = $select_custom_transaction;
    $args[ 'orderby' ]        = "post__in";
}

$transaction_query = new WP_Query( $args );
?>
<section class="client-trans-list-section">
    <div class="container">
        <div class="row">
            <div class="col-100">
                <div class="sect_header">
                    <?php if ( ! empty( $title ) ) { ?>
                        <h2><?php echo $title; ?></h2>
                    <?php } echo $description; ?>
                </div>
            </div>
            <div class="col-100">
                <?php if ( $transaction_query->have_posts() ) { ?>
                    <div class = "client-trans-list-carousel">
                        <?php
                        while ( $transaction_query->have_posts() ) {
                            $transaction_query->the_post();
                            $transaction_id           = get_the_ID();
                            $trans_hide               = get_field( 'seg_hide_in_transaction_slider', $transaction_id );
                            $trans_images             = get_field( 'seg_trans_images', $transaction_id );
                            $trans_highlight          = get_field( 'seg_trans_highlight_cta', $transaction_id );
                            $trans_content            = get_the_title();
                            $trans_permalink          = get_the_permalink();
//                            $product_category      = wp_get_post_terms( get_the_ID(), SEG_PRODUCT_TAX, array ( 'fields' => 'all' ) );
//                            $product_category_id   = $product_category[ 0 ]->term_id;
//                            $product_category_slug = $product_category[ 0 ]->slug;
                            $primary_product_cat_obj  = get_post_primary_category( $transaction_id, SEG_PRODUCT_TAX );
                            $primary_product_cat      = $primary_product_cat_obj[ 'primary_category' ];
                            $primary_product_cat_slug = $primary_product_cat->slug;
                            if ( ! $trans_hide ) {
                                ?>
                                <div class="client-trans-list-box">
                                    <div class="item">
                                        <a href="<?php echo $trans_permalink; ?>" class="btn-arrow" >
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
                                                                <span class="btn-arrow"><?php echo $trans_highlight; ?><span><img src="<?php echo get_template_directory_uri() ?>/images/btn-arrow.png" alt=""></span></span>
                                                                    <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <?php
                            }
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