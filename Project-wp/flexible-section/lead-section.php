<?php
if ( class_exists( 'acf' ) ) {
    $bg_image      = get_sub_field( 'helthcare_lead_bg_image' );
    $bg_image_url  = ! empty( $bg_image[ 'url' ] ) ? $bg_image[ 'url' ] : '#';
    $bg_image_alt  = ! empty( $bg_image[ 'alt' ] ) ? $bg_image[ 'alt' ] : get_bloginfo();
    $lead_icon     = get_sub_field( 'helthcare_lead_icon' );
    $lead_icon_url = ! empty( $lead_icon[ 'url' ] ) ? $lead_icon[ 'url' ] : '#';
    $lead_icon_alt = ! empty( $lead_icon[ 'alt' ] ) ? $lead_icon[ 'alt' ] : get_bloginfo();
    $lead_title    = get_sub_field( 'helthcare_lead_tilte' );
    $lead_content  = get_sub_field( 'helthcare_lead_content' );
    $lead_popup    = get_sub_field( 'helthcare_lead_popup' );
    $lead_cta      = get_sub_field( 'helthcare_lead_cta' );
    if ( ! empty( $lead_cta ) ) {
        $lead_cta_title  = $lead_cta[ 'title' ];
        $lead_cta_link   = $lead_cta[ 'url' ];
        $lead_cta_target = $lead_cta[ 'target' ];
    }
}
?>
<?php if ( ! empty( $lead_title ) || ! empty( $lead_icon ) || ! empty( $lead_content ) || ! empty( $lead_popup ) || ! empty( $lead_cta ) || ! empty( $bg_image ) ) { ?>
    <section class="brighter-future-section">
        <?php if ( ! empty( $lead_title ) || ! empty( $lead_icon ) || ! empty( $lead_content ) ) { ?>
            <div class="brighter-future-section-heading">
                <div class="container">
                    <div class="brighter-future-heading">
                        <?php if ( ! empty( $lead_title ) || ! empty( $lead_icon ) ) { ?>
                            <div class="brighter-future-title">
                                <h2>
                                    <?php echo $lead_title; ?>
                                    <i class="brand-rounded-icon"><img src="<?php echo $lead_icon_url; ?>" alt="<?php echo $lead_icon_alt; ?>"></i>
                                </h2>
                            </div>
                        <?php } if ( ! empty( $lead_content ) ) { ?>
                            <div class="brighter-future-subtitle">
                                <?php echo $lead_content; ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="brighter-future-section-background">

            <div class="slider-brighter-background">
                <?php
                foreach ( $lead_popup as $popup ) {
                    $pop_bg       = $popup[ 'background_img' ];
                    $pop_bg_url   = ! empty( $pop_bg[ 'url' ] ) ? $pop_bg[ 'url' ] : '#';
                    $pop_bg_alt   = ! empty( $pop_bg[ 'alt' ] ) ? $pop_bg[ 'alt' ] : get_bloginfo();
                    $pop_logo     = $popup[ 'logo' ];
                    $pop_logo_url = ! empty( $pop_logo[ 'url' ] ) ? $pop_logo[ 'url' ] : '#';
                    $pop_logo_alt = ! empty( $pop_logo[ 'alt' ] ) ? $pop_logo[ 'alt' ] : get_bloginfo();
                    $pop_title    = $popup[ 'title' ];
                    $pop_descr    = $popup[ 'description' ];
                    ?>

                    <div>
                        <div class="slider-brighter-background-col">
                            <img src="<?php echo $pop_bg_url; ?>" alt="<?php echo $pop_bg_alt; ?>">
                            <img class="hover_img">
                        </div>
                    </div>
                <?php } ?>
            </div>

            <?php if ( ! empty( $lead_popup ) ) { ?>
                <div class="brighter-future-inner">
                    <div class="brighter-future-row brighter-future-carousel">
                        <?php
                        foreach ( $lead_popup as $popup ) {
                            $pop_bg       = $popup[ 'background_img' ];
                            $pop_bg_url   = ! empty( $pop_bg[ 'url' ] ) ? $pop_bg[ 'url' ] : '#';
                            $pop_bg_alt   = ! empty( $pop_bg[ 'alt' ] ) ? $pop_bg[ 'alt' ] : get_bloginfo();
                            $pop_logo     = $popup[ 'logo' ];
                            $pop_logo_url = ! empty( $pop_logo[ 'url' ] ) ? $pop_logo[ 'url' ] : '#';
                            $pop_logo_alt = ! empty( $pop_logo[ 'alt' ] ) ? $pop_logo[ 'alt' ] : get_bloginfo();
                            $pop_title    = $popup[ 'title' ];
                            $pop_descr    = $popup[ 'description' ];
                            ?>
                            <div class="brighter-future-col">
                                <img class="brighter-future-img-wrap" src="<?php echo $pop_bg_url; ?>" style="display: none">
                                <div class="brighter-future-box">
                                    <div class="brighter-future-box-inner">
                                        <?php if ( ! empty( $pop_logo ) || ! empty( $pop_title ) ) { ?>
                                            <div class="brighter-future-icon">
                                                <?php if ( ! empty( $pop_logo ) ) { ?>
                                                    <span><img src="<?php echo $pop_logo_url; ?>" alt="<?php echo $pop_logo_alt; ?>"></span>
                                                <?php } if ( ! empty( $pop_title ) ) { ?>
                                                    <h3><?php echo $pop_title; ?></h3>
                                                <?php } ?>
                                            </div>
                                        <?php } if ( ! empty( $pop_descr ) ) { ?>
                                            <div class="brighter-future-contain">
                                                <?php echo $pop_descr; ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php if ( ! empty( $lead_cta ) ) { ?>
            <div class="brighter-future-section-btn">
                <a href="<?php echo $lead_cta_link; ?>" target="<?php echo $lead_cta_target; ?>" class="btn btn-tertiary-transparent"><?php echo $lead_cta_title; ?><span><?php include( get_stylesheet_directory() . '/images/btn-arrow-whaite.svg' ); ?></span></a>
            </div>
        <?php } ?>
    </section>
<?php } ?>

