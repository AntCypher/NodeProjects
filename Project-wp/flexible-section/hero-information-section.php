<?php
if ( class_exists( 'acf' ) ) {
    $info_left_img     = get_sub_field( 'helthcare_hero_info_left_image' );
    $info_left_img_url = ! empty( $info_left_img[ 'url' ] ) ? $info_left_img[ 'url' ] : '#';
    $info_left_img_alt = ! empty( $info_left_img[ 'alt' ] ) ? $info_left_img[ 'alt' ] : get_bloginfo();
    $info_main_img     = get_sub_field( 'helthcare_hero_info_m_right_image' );
    $info_main_img_url = ! empty( $info_main_img[ 'url' ] ) ? $info_main_img[ 'url' ] : '#';
    $info_main_img_alt = ! empty( $info_main_img[ 'alt' ] ) ? $info_main_img[ 'alt' ] : get_bloginfo();
    $info_fg_img       = get_sub_field( 'helthcare_hero_info_fg_img' );
    $info_fg_img_url   = ! empty( $info_fg_img[ 'url' ] ) ? $info_fg_img[ 'url' ] : '#';
    $info_fg_img_alt   = ! empty( $info_fg_img[ 'alt' ] ) ? $info_fg_img[ 'alt' ] : get_bloginfo();
    $info_sg_img       = get_sub_field( 'helthcare_hero_info_sg_img' );
    $info_sg_img_url   = ! empty( $info_sg_img[ 'url' ] ) ? $info_sg_img[ 'url' ] : '#';
    $info_sg_img_alt   = ! empty( $info_sg_img[ 'alt' ] ) ? $info_sg_img[ 'alt' ] : get_bloginfo();
    $info_pre_title    = get_sub_field( 'helthcare_hero_info_pretitle' );
    $info_btm_title    = get_sub_field( 'helthcare_hero_info_btm_title' );
    $info_btm_content  = get_sub_field( 'helthcare_hero_info_btm_content' );
    $info_cta          = get_sub_field( 'helthcare_hero_info_cta' );
    if ( ! empty( $info_cta ) ) {
        $info_cta_title  = $info_cta[ 'title' ];
        $info_cta_link   = $info_cta[ 'url' ];
        $info_cta_target = $info_cta[ 'target' ];
    }
}
?>
<?php if ( ! empty( $info_left_img ) || ! empty( $info_pre_title ) || ! empty( $info_main_img ) || ! empty( $info_fg_img ) || ! empty( $info_sg_img ) || ! empty( $info_btm_title ) || ! empty( $info_btm_content ) || ! empty( $info_cta ) ) { ?>
    <section class="take-action" id="take-action">
        <div class="info-line" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/information-top-line.svg');">
        </div>
        <div class="container">
            <div class="action-wrap">
                <?php if ( ! empty( $info_left_img ) ) { ?>
                    <div class="left">
                        <img class="case-study-main-img" src="<?php echo $info_left_img_url; ?>" alt="<?php echo $info_left_img_alt; ?>">
                    </div>
                <?php } ?>
                <div class="right">
                    <div class="title">
                        <?php if ( ! empty( $info_pre_title ) ) { ?>
                            <h1><?php echo $info_pre_title; ?></h1>
                        <?php } if ( ! empty( $info_main_img ) ) { ?>
                            <div class="word-img">
                                <img src="<?php echo $info_main_img_url; ?>" alt="<?php echo $info_main_img_alt; ?>">
                            </div>
                        <?php } ?>
                    </div>
                    <div class="gallery-img">
                        <?php if ( ! empty( $info_fg_img ) ) { ?>
                            <div class="img-item">
                                <img class="case-study-main-img" src="<?php echo $info_fg_img_url; ?>" alt="<?php echo $info_fg_img_alt; ?>">
                            </div>
                        <?php } if ( ! empty( $info_sg_img ) ) { ?>
                            <div class="img-item">
                                <img class="case-study-main-img" src="<?php echo $info_sg_img_url; ?>" alt="<?php echo $info_sg_img_alt; ?>">
                            </div>
                        <?php } ?>
                    </div>
                    <div class="bottom-text">
                        <?php if ( ! empty( $info_btm_title ) ) { ?>
                            <h2><?php echo $info_btm_title; ?></h2>
                        <?php } if ( ! empty( $info_btm_content ) ) { ?>
                            <div class="content"><?php echo $info_btm_content; ?></div>
                        <?php } ?>
                    </div>
                    <?php if ( ! empty( $info_cta ) ) { ?>
                        <a href="<?php echo $info_cta_link; ?>" class="btn btn-secondary" target="<?php echo $info_cta_target; ?>"><?php echo $info_cta_title; ?> <span><svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path>
                                </svg>
                            </span></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
