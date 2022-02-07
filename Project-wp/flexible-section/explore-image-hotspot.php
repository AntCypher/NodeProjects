<?php
if ( class_exists( 'acf' ) ) {
    $explore_title    = get_sub_field( 'helthcare_explore_title' );
    $explore_logo     = get_sub_field( 'helthcare_explore_logo' );
    $explore_logo_url = ! empty( $explore_logo[ 'url' ] ) ? $explore_logo[ 'url' ] : '#';
    $explore_logo_alt = ! empty( $explore_logo[ 'alt' ] ) ? $explore_logo[ 'alt' ] : get_bloginfo();
    $explore_bg       = get_sub_field( 'helthcare_explore_bg' );
    $explore_bg_url   = ! empty( $explore_bg[ 'url' ] ) ? $explore_bg[ 'url' ] : '#';
    $explore_bg_alt   = ! empty( $explore_bg[ 'alt' ] ) ? $explore_bg[ 'alt' ] : get_bloginfo();
    $explore_content  = get_sub_field( 'helthcare_explore_content' );
    $hotspot_content  = get_sub_field( 'helthcare_explore_hot_con' );
}
?>
<?php if ( ! empty( $explore_title ) || ! empty( $explore_logo ) || ! empty( $explore_bg ) || ! empty( $explore_content ) || ! empty( $hotspot_content ) ) { ?>
    <section class="health-campus-explore health-campus-in">
        <div class="container">
            <div class="health-campus-explore-heading">
                <?php if ( ! empty( $explore_title ) || ! empty( $explore_logo ) ) { ?>
                    <h2><?php echo $explore_title; ?>
                        <i class="brand-rounded-icon"><img src="<?php echo $explore_logo_url; ?>" alt="<?php echo $explore_logo_alt; ?>"></i>
                    </h2>
                <?php } ?>
                <?php if ( ! empty( $explore_content ) ) { ?>
                    <p><?php echo $explore_content; ?></p>
                <?php } ?>
            </div>
            <div class="health-campus-explore-box">
                <div class="health-campus-explore-bg">
                    <img src="<?php echo $explore_bg_url; ?>" alt="">
                </div>
                <div class="health-campus-explore-info">
                    <?php
                    if ( ! empty( $hotspot_content ) ) {
                        foreach ( $hotspot_content as $hotspot_con ) {
                            $top_margin  = $hotspot_con[ 'top_margin' ];
                            $left_margin = $hotspot_con[ 'left_margin' ];
                            $h_descr     = $hotspot_con[ 'descr' ];
                            $h_cta       = $hotspot_con[ 'cta' ];
                            if ( ! empty( $top_margin ) || ! empty( $left_margin ) ) {
                                ?>
                                <div class='hotspot' style='top: <?php echo $top_margin . '%'; ?>;left: <?php echo $left_margin . '%'; ?>;'>
                                    <div class='icon'>+</div>
                                    <div class='content'>
                                        <?php
                                        if ( ! empty( $h_descr ) ) {
                                            echo $h_descr;
                                        }
                                        ?>
                                        <?php if ( ! empty( $h_cta ) ) { ?>
                                            <a class='round-icon-btn' href='<?php echo $h_cta[ 'url' ]; ?>' target="<?php echo $h_cta[ 'target' ]; ?>">
                                                <span>
                                                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path>
                                                    </svg>
                                                </span>
                                                <?php echo $h_cta[ 'title' ]; ?>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
