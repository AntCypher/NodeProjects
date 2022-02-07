<?php
if ( class_exists( 'acf' ) ) {
    $case_bg        = get_sub_field( 'helthcare_case_image' );
    $case_bg_url    = ! empty( $case_bg) ? $case_bg[ 'url' ] : '#';
    $case_bg_alt    = ! empty( $case_bg['alt']) ? $case_bg[ 'alt' ] : get_bloginfo();
    $case_title     = get_sub_field( 'helthcare_case_title' );
    $case_cotent    = get_sub_field( 'helthcare_case_content' );
    $case_descr     = get_sub_field( 'helthcare_case_descr' );
    $case_cta       = get_sub_field( 'helthcare_case_cta' );
    $case_cta_color = get_sub_field( 'helthcare_case_cta_button_color' );
    $class          = ($case_cta_color) ? 'solution-case-study' : '';
    if ( ! empty( $case_cta ) ) {
        $case_cta_title  = $case_cta[ 'title' ];
        $case_cta_link   = $case_cta[ 'url' ];
        $case_cta_target = $case_cta[ 'target' ];
    }
}
if ( ! empty( $case_bg ) || ! empty( $case_title ) || ! empty( $case_descr ) || ! empty( $case_cta ) || ! empty( $case_cotent ) || ! empty( $case_cta_color ) ) {
    ?>
    <section class="case-study-section <?php echo $class; ?>" id="case-study-section">
        <div class="container">
            <div class="case-study-row">
                <?php if ( ! empty( $case_bg ) ) { ?>
                    <div class="case-study-col-img">
                        <div class="case-study-img">
                            <img class="case-study-main-img" src="<?php echo $case_bg_url; ?>" alt="<?php echo $case_bg_alt; ?>">
                        </div>
                        <i class="brand-rounded-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/words-round-with-icon-secondary.svg" alt="<?php bloginfo( 'name' ); ?>"></i>
                    </div>
                <?php } ?>
                <div class="case-study-col-info">
                    <div class="case-study-info">
                        <?php if ( ! empty( $case_title ) ) { ?>
                            <div class="case-study-info-subtitle"><?php echo $case_title; ?></div>
                        <?php } if ( ! empty( $case_cotent ) ) { ?>
                            <h2 class="case-study-info-title"><?php echo $case_cotent; ?></h2>
                        <?php } if ( ! empty( $case_descr ) ) { ?>
                            <div class="content"><?php echo $case_descr; ?></div>
                        <?php } if ( ! empty( $case_cta ) ) { ?>
                            <a href="<?php echo $case_cta_link; ?>" class="round-icon-btn" target="<?php echo $case_cta_target; ?>"><span><svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path>
                                    </svg>
                                </span><?php echo $case_cta_title; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>