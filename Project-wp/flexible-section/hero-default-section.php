<?php
if ( class_exists( 'acf' ) ) {
    $is_guide_section   = get_sub_field( 'helthcare_default_is_guide_section' );
    $is_mission_section = get_sub_field( 'helthcare_default_is_mission_sec' );
    if ( $is_guide_section ) {
        $subtitle     = get_sub_field( 'helthcare_hero_default_subtitle' );
        $title        = get_sub_field( 'helthcare_hero_default_title' );
        $default_logo = get_sub_field( 'helthcare_hero_default_logo' );
        $logo_url     = ! empty( $default_logo[ 'url' ] ) ? $default_logo[ 'url' ] : '#';
        $logo_alt     = ! empty( $default_logo[ 'alt' ] ) ? $default_logo[ 'alt' ] : get_bloginfo();
        $image        = get_sub_field( 'imagehelthcare_hero_default_img' );
        $image_url    = ! empty( $image[ 'url' ] ) ? $image[ 'url' ] : '#';
        $image_alt    = ! empty( $image[ 'alt' ] ) ? $image[ 'alt' ] : get_bloginfo();
    }
    if ( $is_mission_section ) {
        $mission_title    = get_sub_field( 'helthcare_hero_default_mission_title' );
        $mission_content  = get_sub_field( 'helthcare_hero_default_mission_content' );
        $mission_logo     = get_sub_field( 'helthcare_hero_default_mission_logo' );
        $mission_logo_url = ! empty( $mission_logo[ 'url' ] ) ? $mission_logo[ 'url' ] : '#';
        $mission_logo_alt = ! empty( $mission_logo[ 'alt' ] ) ? $mission_logo[ 'alt' ] : get_bloginfo();
    }
}
?>
<?php
if ( ! empty( $is_guide_section ) ) {
    if ( ! empty( $subtitle ) || ! empty( $title ) || ! empty( $default_logo ) || ! empty( $image ) ) {
        ?>
        <section class="guiding-way-section" id="guiding-way-section">
            <div class="container">
                <div class="guiding-way-row">
                    <?php if ( ! empty( $title ) || ! empty( $default_logo ) || ! empty( $subtitle ) ) { ?>
                        <div class="guiding-way-left">
                            <div class="guiding-way-heading">
                                <?php if ( ! empty( $subtitle ) ) { ?>
                                    <div class="guiding-way-subtitle"><?php echo $subtitle; ?></div>
                                <?php } if ( ! empty( $title ) || ! empty( $default_logo ) ) { ?>
                                    <h1>
                                        <?php echo $title; ?>
                                        <i class="brand-rounded-icon"><img src="<?php echo $logo_url; ?>" alt="<?php echo $logo_alt; ?>"></i>
                                    </h1>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } if ( ! empty( $image ) ) { ?>
                        <div class="guiding-way-right">
                            <div class="guiding-way-img">
                                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <?php
    }
}
if ( ! empty( $is_mission_section ) ) {
    if ( ! empty( $mission_subtitle ) || ! empty( $mission_title ) || ! empty( $mission_logo ) ) {
        ?>
        <section class="our-mission left-space" style="padding-left: 271.5px;" id="our-mission">
            <div class="content-inner">
                <?php if ( ! empty( $mission_title ) || ! empty( $mission_content ) ) { ?>
                    <div class="content-part">
                        <div>
                            <?php if ( ! empty( $mission_title ) ) { ?>
                                <h2><?php echo $mission_title; ?></h2>
                            <?php } if ( ! empty( $mission_content ) ) { ?>
                                <div class="content">
                                    <?php echo $mission_content; ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } if ( ! empty( $mission_logo ) ) { ?>
                    <div class="img-part">
                        <img src="<?php echo $mission_logo_url; ?>" alt="<?php echo $mission_logo_alt; ?>">
                    </div>
                <?php } ?>
            </div>
        </section>
        <?php
    }
}
?>