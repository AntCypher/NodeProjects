<?php
if ( class_exists( 'acf' ) ) {
    $is_green_sec    = get_sub_field( 'helthcare_green_is_green_sec' );
    $green_title     = get_sub_field( 'helthcare_green_title' );
    $green_subtitle  = get_sub_field( 'helthcare_green_subtitle' );
    $green_descr     = get_sub_field( 'helthcare_green_descr' );
    $green_content   = get_sub_field( 'helthcare_green_content' );
    $is_catalyst_Sec = get_sub_field( 'helthcare_catalyst_is_cat_sec' );
    $cat_title       = get_sub_field( 'helthcare_catalyst_title' );
    $cat_subtitle    = get_sub_field( 'helthcare_catalyst_subtitle' );
    $cat_img         = get_sub_field( 'helthcare_catalyst_img' );
    $cat_img_url     = ! empty( $cat_img[ 'url' ] ) ? $cat_img[ 'url' ] : '#';
    $cat_img_alt     = ! empty( $cat_img[ 'alt' ] ) ? $cat_img[ 'alt' ] : get_bloginfo();
    $cat_content     = get_sub_field( 'helthcare_catalyst_content' );
    $cat_accordian   = get_sub_field( 'helthcare_catalyst_accordions' );
}
if ( ! empty( $green_title ) || ! empty( $green_subtitle ) || ! empty( $green_descr ) || ! empty( $green_content ) || ! empty( $cat_img ) || ! empty( $cat_title ) || ! empty( $cat_subtitle ) || ! empty( $cat_content ) || ! empty( $cat_accordian ) ) {
    ?>
    <section class="hm-systems-section" id="hm-systems-section">
        <?php
        if ( $is_green_sec ) {
            if ( ! empty( $green_title ) || ! empty( $green_subtitle ) || ! empty( $green_descr ) || ! empty( $green_content ) ) {
                ?>
                <div class="health-systems-section">
                    <div class="container">
                        <div class="health-systems-row">
                            <div class="health-systems-left">
                                <?php if ( ! empty( $green_title ) ) { ?>
                                    <h2><?php echo $green_title; ?></h2>
                                <?php } if ( ! empty( $green_subtitle ) ) { ?>
                                    <h3><?php echo $green_subtitle; ?></h3>
                                <?php } ?>
                            </div>
                            <div class="health-systems-right">
                                <?php if ( ! empty( $green_descr ) || ! empty( $green_content ) ) { ?>
                                    <div class="health-systems-info">
                                        <?php echo $green_descr; ?>
                                        <?php echo $green_content; ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
        <?php
        if ( $is_catalyst_Sec ) {
            if ( ! empty( $cat_img ) || ! empty( $cat_title ) || ! empty( $cat_subtitle ) || ! empty( $cat_content ) || ! empty( $cat_accordian ) ) {
                ?>
                <div class="catalyst-section" id="catalyst-section">
                    <div class="catalyst-heading">
                        <?php if ( ! empty( $cat_img ) ) { ?>
                            <div class="catalyst-heading-img">
                                <img src="<?php echo $cat_img_url; ?>" alt="<?php echo $cat_img_alt; ?>">
                            </div>
                        <?php } if ( ! empty( $cat_title ) ) { ?>
                            <div class="container catalyst-heading-title">
                                <h2><?php echo $cat_title; ?></h2>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="container">
                        <div class="catalyst-row">
                            <?php if ( ! empty( $cat_subtitle ) || ! empty( $cat_content ) ) { ?>
                                <div class="catalyst-left">
                                    <div class="catalyst-info">
                                        <?php if ( ! empty( $cat_subtitle ) ) { ?>
                                            <h2><?php echo $cat_subtitle; ?></h2>
                                        <?php } echo $cat_content; ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ( ! empty( $cat_accordian ) ) { ?>
                                <div class="catalyst-right">
                                    <div class="catalyst-accordion">
                                        <?php
                                        foreach ( $cat_accordian as $accordian ) {
                                            $accordian_title   = $accordian[ 'accordian_title' ];
                                            $accordian_content = $accordian[ 'accordian_content' ];
                                            $accordian_cta     = $accordian[ 'accordian_cta' ];
                                            ?>
                                            <div class="catalyst-set">
                                                <?php if ( ! empty( $accordian_title ) ) { ?>
                                                    <div class="catalyst-title">
                                                        <h3><?php echo $accordian_title; ?></h3>
                                                        <span>
                                                            <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"/>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                <?php } if ( ! empty( $accordian_content ) ) { ?>
                                                    <div class="catalyst-content">
                                                        <?php echo $accordian_content; ?>
                                                        <?php if ( ! empty( $accordian_cta ) ) { ?>
                                                            <a class="round-icon-btn catalyst-icon-btn" href="<?php echo $accordian_cta[ 'url' ]; ?>" target="<?php echo $accordian_cta[ 'target' ]; ?>">
                                                                <span>
                                                                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path>
                                                                    </svg>
                                                                </span>
                                                                <?php echo $accordian_cta[ 'title' ]; ?>
                                                            </a>
                                                        <?php } ?>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </section>
<?php } ?>