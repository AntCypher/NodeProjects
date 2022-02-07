<?php
if ( class_exists( 'acf' ) ) {
    $is_service_guide   = get_sub_field( 'helthacare_is_service_guide' );
    $ser_guide_subtitle = get_sub_field( 'Helthcare_ser_guide_subtitle' );
    $ser_guide_title    = get_sub_field( 'Helthcare_ser_guide_title' );
    $ser_guide_info     = get_sub_field( 'Helthcare_ser_guide_info' );
    $ser_guide_logo     = get_sub_field( 'Helthcare_ser_guide_logo' );
    $ser_guide_logo_url = ! empty( $ser_guide_logo[ 'url' ] ) ? $ser_guide_logo[ 'url' ] : '#';
    $ser_guide_logo_alt = ! empty( $ser_guide_logo[ 'alt' ] ) ? $ser_guide_logo[ 'alt' ] : get_bloginfo();
    $ser_guide_img      = get_sub_field( 'Helthcare_ser_guide_img' );
    $ser_guide_img_url  = ! empty( $ser_guide_img[ 'url' ] ) ? $ser_guide_img[ 'url' ] : '#';
    $ser_guide_img_alt  = ! empty( $ser_guide_img[ 'alt' ] ) ? $ser_guide_img[ 'alt' ] : get_bloginfo();
    $is_service_logo    = get_sub_field( 'helthacare_is_service_logo' );
    $ser_logo_title     = get_sub_field( 'helthacare_is_ser_logo_title' );
    $ser_logo_gallery   = get_sub_field( 'helthacare_is_ser_logo_gallery' );
}
?>
<?php
if ( $is_service_guide ) {
    if ( ! empty( $ser_guide_subtitle ) || ! empty( $ser_guide_title ) || ! empty( $ser_guide_logo ) || ! empty( $ser_guide_img ) || ! empty( $ser_guide_info ) ) {
        ?>
        <section class="guiding-way-section" id="guiding-way-section">
            <div  class="container">
                <div class="guiding-way-row">
                    <div class="guiding-way-left">
                        <div class="guiding-way-heading">
                            <?php if ( ! empty( $ser_guide_subtitle ) ) { ?>
                                <div class="guiding-way-subtitle"><?php echo $ser_guide_subtitle; ?></div>
                            <?php } if ( ! empty( $ser_guide_title ) || ! empty( $ser_guide_logo ) ) { ?>
                                <h1>
                                    <?php echo $ser_guide_title; ?>
                                    <i class="brand-rounded-icon"><img src="<?php echo $ser_guide_logo_url; ?>" alt="<?php echo $ser_guide_logo_alt; ?>"></i>
                                </h1>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if ( ! empty( $ser_guide_img ) ) { ?>
                        <div class="guiding-way-right">
                            <div class="guiding-way-img">
                                <img src="<?php echo $ser_guide_img_url; ?>" alt="<?php echo $ser_guide_img_alt; ?>">
                            </div>
                        </div>
                    <?php } if ( ! empty( $ser_guide_info ) ) { ?>
                        <div class="guiding-way-full">
                            <div class="guiding-way-info">
                                <?php echo $ser_guide_info; ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <?php
    }
}
?>
<?php
if ( $is_service_logo ) {
    if ( ! empty( $ser_logo_title ) || ! empty( $ser_logo_gallery ) ) {
        ?>
        <section class="hundreds-them-section fix-logo-section" id="hundreds-them-section">
            <div class="container">
                <?php if ( ! empty( $ser_logo_title ) ) { ?>
                    <div class="hundreds-them-heading">
                        <h4><?php echo $ser_logo_title; ?></h4>
                    </div>     
                <?php } ?>
                <div class="hundreds-them-slider">
                    <div class="hundreds-them-slider">
                        <?php if ( ! empty( $ser_logo_gallery ) ) { ?>
                            <div class="slide-track-climate">
                                <?php
                                foreach ( $ser_logo_gallery as $ser_logo_key => $ser_logos ) {
                                    $ser_logos_url = ! empty( $ser_logos[ 'url' ] ) ? $ser_logos[ 'url' ] : '#';
                                    $ser_logos_alt = ! empty( $ser_logos[ 'alt' ] ) ? $ser_logos[ 'alt' ] : get_bloginfo();
                                    ?>
                                    <div class="slide"><img src="<?php echo $ser_logos_url; ?>" alt="<?php echo $ser_logos_alt; ?>"></div>
                                    <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}
?>
