<?php
if ( class_exists( 'acf' ) ) {
    $zero_future_title = get_sub_field( 'helthcare_net_zero_futur_title' );
    $galleries         = get_sub_field( 'helthcare_net_zero_futur_galleries' );
}
?>
<?php if ( ! empty( $zero_future_title ) || ! empty( $galleries ) ) { ?>
    <section class="zero-future" id="zero-future">
        <?php if ( ! empty( $zero_future_title ) ) { ?>
            <div class="container">
                <h2><?php echo $zero_future_title; ?></h2>
            </div>
        <?php } ?>
        <div class="container">
            <div class="banner-climate-slider">
                <?php
                if ( ! empty( $galleries ) ) {
                    foreach ( $galleries as $gallery_key => $gallery ) {
                        $gallery_logos = $gallery[ 'gallery' ];
                        $g_class       = (($gallery_key % 2) == 0) ? '' : 'climate-slider-two';
                        ?>
                        <div class="climate-slider <?php echo $g_class; ?>">
                            <div class="slide-track-climate">
                                <?php
                                if ( ! empty( $gallery_logos ) ) {
                                    foreach ( $gallery_logos as $gallery_img ) {
                                        $gallery_img_url = ! empty( $gallery_img ) ? $gallery_img[ 'url' ] : '#';
                                        $gallery_img_alt = ! empty( $gallery_img['alt'] ) ? $gallery_img[ 'alt' ] : get_bloginfo();
                                        ?>
                                        <div class="slide"><img src="<?php echo $gallery_img_url; ?>" alt="<?php echo $gallery_img_alt; ?>"></div>
                                        <?php }
                                    }
                                    ?>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
<?php } ?>
