<?php
if ( class_exists( 'acf' ) ) {
    $consult_title = get_sub_field( 'helthcare_consult_title' );
    $consult_cta   = get_sub_field( 'helthcare_consult_cta' );
    if ( ! empty( $consult_cta ) ) {
        $consult_cta_title  = $consult_cta[ 'title' ];
        $consult_cta_link   = $consult_cta[ 'url' ];
        $consult_cta_target = $consult_cta[ 'target' ];
    }
}
?>
<?php if ( ! empty( $consult_title ) || ! empty( $consult_cta ) ) { ?>
    <section class="halth-campus-schedule" id="halth-campus-schedule">
        <div class="container">
            <div class="halth-campus-schedule-row">
                <?php if ( ! empty( $consult_title ) ) { ?>
                    <div class="halth-campus-schedule-title">
                        <h2><?php echo $consult_title; ?></h2>
                    </div>
                <?php } if ( ! empty( $consult_cta ) ) { ?>
                    <div class="halth-campus-schedule-btn">
                        <a href="<?php echo $consult_cta_link; ?>" class="btn btn-secondary" target="<?php echo $consult_cta_target; ?>"><?php echo $consult_cta_title; ?> <span><?php include( get_stylesheet_directory() . '/images/btn-arrow-whaite.svg' ); ?></span></a>
                    </div>
                <?php } ?>
                <div>
                </div>
                </section>
            <?php } ?>