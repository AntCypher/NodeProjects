<?php
if ( class_exists( 'acf' ) ) {
    $is_banner              = get_sub_field( 'helthcare_hero_is_banner' );
    $banner_bg              = get_sub_field( 'helthcare_hero_banner_bg' );
    $banner_image_url       = ! empty( $banner_bg[ 'url' ] ) ? $banner_bg[ 'url' ] : '#';
    $banner_image_alt       = ! empty( $banner_bg[ 'alt' ] ) ? $banner_bg[ 'alt' ] : get_bloginfo();
    $banner_title           = get_sub_field( 'helthcare_hero_banner_title' );
    $banner_descr           = get_sub_field( 'helthcare_hero_banner_descr' );
    $banner_cta             = get_sub_field( 'helthcare_hero_banner_cta' );
    $banner_feature_img     = get_sub_field( 'helthcare_hero_banner_feature_img' );
    $banner_feature_img_url = ! empty( $banner_feature_img[ 'url' ] ) ? $banner_feature_img[ 'url' ] : '#';
    $banner_feature_img_alt = ! empty( $banner_feature_img[ 'alt' ] ) ? $banner_feature_img[ 'alt' ] : get_bloginfo();
    $banner_feature_title   = get_sub_field( 'helthcare_hero_banner_feature_title' );
    $banner_feature_descr   = get_sub_field( 'helthcare_hero_banner_feature_descr' );
    $banner_feature_cta     = get_sub_field( 'helthcare_hero_banner_feature_cta' );

    $is_climate    = get_sub_field( 'helthcare_hero_is_climate_section' );
    $climate_title = get_sub_field( 'helthcare_hero_climate_title' );
    $climate_descr = get_sub_field( 'helthcare_hero_climate_descr' );
    $climate_logos = get_sub_field( 'helthcare_hero_climate_logos' );

    if ( ! empty( $banner_cta ) ) {
        $banner_cta_title  = $banner_cta[ 'title' ];
        $banner_cta_link   = $banner_cta[ 'url' ];
        $banner_cta_target = $banner_cta[ 'target' ];
    }
    if ( ! empty( $banner_feature_cta ) ) {
        $banner_feature_cta_title  = $banner_feature_cta[ 'title' ];
        $banner_feature_cta_link   = $banner_feature_cta[ 'url' ];
        $banner_feature_cta_target = $banner_feature_cta[ 'target' ];
    }
}
?>
<?php
if ( ! empty( $banner_bg ) || ! empty( $banner_title ) || ! empty( $banner_descr ) || ! empty( $banner_feature_img ) || ! empty( $banner_feature_title ) || ! empty( $banner_feature_descr ) || ! empty( $banner_feature_cta ) || ! empty( $is_climate ) || ! empty( $climate_title ) || ! empty( $climate_descr ) || ! empty( $climate_logos ) ) {
    ?>
    <section class="hm-banner" id="hm-banner-home">
        <div class="banner-inner">
            <div class="container">
                <?php
                if ( $is_banner ) {
                    if ( ! empty( $banner_bg ) || ! empty( $banner_title ) || ! empty( $banner_descr ) || ! empty( $banner_cta ) || ! empty( $banner_feature_img ) || ! empty( $banner_feature_title ) || ! empty( $banner_feature_descr ) || ! empty( $banner_cta ) ) {
                        ?>
                        <div class="banner-inner-section">
                            <?php if ( ! empty( $banner_bg ) ) { ?>
                                <img src="<?php echo $banner_image_url; ?>" alt="<?php echo $banner_image_alt; ?>">
                                <?php } ?>
                                <div class="banner-contain-row">
                                    <div class="banner-contain-left">
                                        <?php if ( ! empty( $banner_title ) ) { ?>
                                            <div class="banner-contain-heading">
                                                <h1><?php echo $banner_title; ?></h1>
                                            </div>
                                        <?php } ?>
                                        <div class="banner-contain-info">
                                            <?php if ( ! empty( $banner_descr ) ) { ?>
                                                <p><?php echo $banner_descr; ?></p>
                                            <?php } if ( ! empty( $banner_cta ) ) { ?>
                                                <a href="<?php echo $banner_cta_link; ?>" class="btn btn-secondary" target="<?php echo $banner_cta_target; ?>"><?php echo $banner_cta_title; ?><span><svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"/>
                                                        </svg>
                                                    </span>
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="banner-contain-right">
                                        <div class="featured_guide-box">
                                            <?php if ( ! empty( $banner_feature_img ) ) { ?>
                                                <div class="featured_guide-img">
                                                    <img src="<?php echo $banner_feature_img_url; ?>" alt="<?php echo $banner_feature_img_alt; ?>">
                                                </div>
                                            <?php } ?>
                                            <div class="featured_guide-info">
                                                <?php if ( ! empty( $banner_feature_title ) ) { ?>
                                                    <div class="featured_guide-cat"><?php echo $banner_feature_title; ?></div>
                                                <?php } if ( ! empty( $banner_feature_descr ) || ! empty( $banner_feature_cta ) ) { ?>
                                                    <h3><a href="<?php echo $banner_feature_cta_link; ?>" target="<?php echo $banner_feature_cta_target; ?>"><?php echo $banner_feature_descr; ?></a></h3>
                                                <?php } if ( ! empty( $banner_feature_cta ) ) { ?>
                                                    <a href="<?php echo $banner_feature_cta_link; ?>" class="round-icon-btn featured_guide-btn" target="<?php echo $banner_feature_cta_target; ?>" >
                                                        <span>
                                                            <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"/>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <?php
                    }
                }
                if ( $is_climate ) {
                    if ( ! empty( $climate_title ) || ! empty( $climate_descr ) || ! empty( $climate_logos ) ) {
                        ?>
                        <div class="banner-climate-section">
                            <div class="banner-climate-heading">
                                <?php if ( ! empty( $climate_title ) ) { ?>
                                    <div class="banner-climate-title">
                                        <h2><?php echo $climate_title; ?></h2>
                                    </div>
                                <?php } if ( ! empty( $climate_descr ) ) { ?>
                                    <div class="banner-climate-subtitle">
                                        <p><?php echo $climate_descr; ?></p>
                                    </div>
                                <?php } ?>
                            </div>

                            <div class="banner-climate-slider">
                                <?php
                                if ( ! empty( $climate_logos ) ) {
                                    foreach ( $climate_logos as $climate_logos_key => $climate_logos_val ) {
                                        $gallary = $climate_logos_val[ 'logo_gallery' ];
                                        $class   = (($climate_logos_key % 2) == 0) ? '' : 'climate-slider-two';
                                        ?>
                                        <div class="climate-slider <?php echo $class; ?>">
                                            <?php if ( ! empty( $gallary ) ) { ?>
                                                <div class="slide-track-climate ">
                                                    <?php
                                                    foreach ( $gallary as $gallary_logo ) {
                                                        $gallary_logo_url = ! empty( $gallary_logo[ 'url' ] ) ? $gallary_logo[ 'url' ] : '#';
                                                        $gallary_logo_alt = ! empty( $gallery_img[ 'alt' ] ) ? $gallary_logo[ 'alt' ] : get_bloginfo();
                                                        ?>
                                                        <div class="slide"><img src="<?php echo $gallary_logo_url; ?>" alt="<?php echo $gallary_logo_alt; ?>"></div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <?php
                                    }
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
