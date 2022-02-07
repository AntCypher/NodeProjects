<?php
$site_title = get_bloginfo( 'name' );
if ( class_exists( 'acf' ) ) {
    $guide_img       = get_sub_field( 'helthcare_dwl_guide_image' );
    $dwnld_logo      = get_sub_field( 'helthcare_dwl_logo' );
    $dwnld_cta       = get_sub_field( 'helthcare_dwl_cta' );
    $dwnld_subtitle  = get_sub_field( 'helthcare_dwl_subtitle' );
    $dwnld_title     = get_sub_field( 'helthcare_dwl_title' );
    $guide_img_url   = ! empty( $guide_img[ 'url' ] ) ? $guide_img[ 'url' ] : '#';
    $guide_img_alt   = ! empty( $guide_img[ 'alt' ] ) ? $guide_img[ 'alt' ] : $site_title;
    $dwnld_logo_url  = ! empty( $dwnld_logo[ 'url' ] ) ? $dwnld_logo[ 'url' ] : '#';
    $dwnld_logo_alt  = ! empty( $dwnld_logo[ 'alt' ] ) ? $dwnld_logo[ 'alt' ] : $site_title;
    $how_it_work_cta = get_sub_field( 'helthcare_how_it_works_cta' );
    if ( ! empty( $dwnld_cta ) ) {
        $dwnld_cta_title  = $dwnld_cta[ 'title' ];
        $dwnld_cta_link   = $dwnld_cta[ 'url' ];
        $dwnld_cta_target = $dwnld_cta[ 'target' ];
    }
}
?>
<?php if ( ! empty( $guide_img ) || ! empty( $dwnld_subtitle ) || ! empty( $dwnld_title ) || ! empty( $dwnld_cta ) || ! empty( $dwnld_logo ) ) { ?>
    <section class="download-guide" id="download-guide">
        <div class="container">
            <div class="download-wrap">
                <?php if ( ! empty( $guide_img ) ) { ?>
                    <div class="guide-img">
                        <img class="case-study-main-img" src="<?php echo $guide_img_url; ?>" alt="<?php echo $guide_img_alt; ?>">
                    </div>
                <?php } ?>
                <div class="guide-info">
                    <div>
                        <?php if ( ! empty( $dwnld_subtitle ) ) { ?>
                            <div class="subtitle"><?php echo $dwnld_subtitle; ?></div>
                        <?php } if ( ! empty( $dwnld_title ) ) { ?>
                            <h2 class="title"><?php echo $dwnld_title; ?></h2>
                        <?php } if ( ! empty( $dwnld_cta ) ) { ?>
                            <a href="<?php echo $dwnld_cta_link; ?>" class="round-icon-btn" target="<?php echo $dwnld_cta_target; ?>"><span><svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path>
                                    </svg>
                                </span><?php echo $dwnld_cta_title; ?></a>
                        <?php } if ( ! empty( $dwnld_logo ) ) { ?>
                            <i class="brand-rounded-icon"><img src="<?php echo $dwnld_logo_url; ?>" alt="<?php echo $dwnld_logo_alt; ?>"></i>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }
?>