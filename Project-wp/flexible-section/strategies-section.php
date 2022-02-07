<?php
if ( class_exists( 'acf' ) ) {
    $strate_bg      = get_sub_field( 'helthcare_strate_bg' );
    $strate_bg_url  = ! empty( $strate_bg ) ? $strate_bg[ 'url' ] : '#';
    $strate_title   = get_sub_field( 'helthcare_strate_title' );
    $strate_descr   = get_sub_field( 'helthcare_strate_descr' );
    $strate_explore = get_sub_field( 'helthcare_strate_explore' );
    if ( ! empty( $strate_explore ) ) {
        $strate_explore_title  = $strate_explore[ 'title' ];
        $strate_explore_link   = $strate_explore[ 'url' ];
        $strate_explore_target = $strate_explore[ 'target' ];
    }
}
?>
<?php
if ( ! empty( $strate_bg ) || ! empty( $strate_title ) || ! empty( $strate_descr ) || ! empty( $strate_explore ) ) {
    $paralle_class = ! empty( $strate_bg ) ? 'action-section-cover-image ' : '';
    ?>
    <section class="action-section <?php echo $paralle_class ?>" style="background-image:url('<?php echo $strate_bg_url; ?>')" id="strategy-section">
        <?php /* if ( ! empty( $strate_bg ) ) { ?>
          <div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="<?php echo $strate_bg_url; ?>" data-natural-width="1920" data-natural-height="900"></div>
          <?php } */ ?>
        <div class="container">
            <div class="action-box">
                <div class="action-box-inner">
                    <?php if ( ! empty( $strate_title ) ) { ?>
                        <h2>
                            <?php echo $strate_title; ?>
                            <i class="brand-rounded-icon"><img src="<?php echo site_url(); ?>/wp-content/themes/Helthcare/images/words-round-secondary.svg" alt=""></i>
                        </h2>
                    <?php } if ( ! empty( $strate_descr ) ) { ?>
                        <div class="action-info">
                            <?php echo $strate_descr; ?>
                        </div>
                    <?php } if ( ! empty( $strate_explore ) ) { ?>
                        <div class="action-btn">
                            <a target="<?php echo $strate_explore_target; ?>" href="<?php echo $strate_explore_link; ?>" class="round-icon-btn">
                                <span>
                                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"/>
                                    </svg>
                                </span><?php echo $strate_explore_title; ?>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
