<?php
if ( class_exists( 'acf' ) ) {
    $red_title   = get_sub_field( 'helthcare_reduction_sol_title' );
    $red_content = get_sub_field( 'helthcare_reduction_sol_con' );
}
?>
<?php if ( ! empty( $red_title ) || ! empty( $red_content ) ) { ?>
    <section class="reduction-solutions"   id="js-wrapper">
        <div class="solution-wrap">
            <?php if ( ! empty( $red_title ) ) { ?>
                <h2><?php echo $red_title; ?></h2>
            <?php } ?>
            <div class="reduction-js">
                <?php if ( ! empty( $red_content ) ) { ?>
                    <div class="reduction-solutions-wrap" id="js-slideContainer">
                        <?php
                        foreach ( $red_content as $red_cont ) {
                            $reduction_title   = $red_cont[ 'reduction_title' ];
                            $reduction_con     = $red_cont[ 'reduction_con' ];
                            $reduction_img     = $red_cont[ 'reduction_img' ];
                            $reduction_img_url = ! empty( $reduction_img ) ? $reduction_img[ 'url' ] : '#';
                            $reduction_img_alt = ! empty( $reduction_img['alt'] ) ? $reduction_img[ 'alt' ] : get_bloginfo();
                            $reduction_cta     = $red_cont[ 'reduction_cta' ];
                            if ( ! empty( $reduction_cta ) ) {
                                $reduction_cta_title  = $reduction_cta[ 'title' ];
                                $reduction_cta_link   = $reduction_cta[ 'url' ];
                                $reduction_cta_target = $reduction_cta[ 'target' ];
                            }
                            ?>
                            <div class="inner-list">
                                <?php if ( ! empty( $reduction_img ) ) { ?>
                                    <div class="inner-img">
                                        <div class="img-wrap"><img src="<?php echo $reduction_img_url; ?>" alt="<?php echo $reduction_img_alt; ?>"></div>
                                    </div>
                                <?php } ?>
                                <div class="info-wrap">
                                    <?php if ( ! empty( $reduction_title ) ) { ?>
                                        <h6><?php echo $reduction_title; ?></h6>
                                    <?php } ?>
                                    <?php if ( ! empty( $reduction_con ) ) { ?>
                                        <div class="content">
                                            <?php echo $reduction_con; ?>
                                        </div>
                                    <?php } ?>
                                    <?php if ( ! empty( $reduction_cta ) ) { ?>
                                        <a href="<?php echo $reduction_cta_link; ?>" class="round-icon-btn" target="<?php echo $reduction_cta_target; ?>">
                                            <span>
                                                <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"/>
                                                </svg>
                                            </span><?php echo $reduction_cta_title; ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>	
    </section> 
<?php } ?>
