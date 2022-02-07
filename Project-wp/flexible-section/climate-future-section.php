<?php
if ( class_exists( 'acf' ) ) {
    $climate_bg      = get_sub_field( 'helthcare_climate_bg' );
    $climate_bg_url  = ! empty( $climate_bg ) ? $climate_bg[ 'url' ] : '#';
    $climate_bg_alt  = ! empty( $climate_bg['alt'] ) ? $climate_bg[ 'alt' ] : get_bloginfo();
    $climate_title   = get_sub_field( 'helthcare_climate_title' );
    $climate_descr   = get_sub_field( 'helthcare_climate_descr' );
    $climate_content = get_sub_field( 'helthcare_climate_content' );
    $climate_cta     = get_sub_field( 'helthcare_climate_cta' );
    if ( ! empty( $climate_cta ) ) {
        $climate_cta_title  = $climate_cta[ 'title' ];
        $climate_cta_link   = $climate_cta[ 'url' ];
        $climate_cta_target = $climate_cta[ 'target' ];
    }
}
?>
<?php if ( ! empty( $climate_bg ) || ! empty( $climate_title ) || ! empty( $climate_descr ) || ! empty( $climate_content ) || ! empty( $climate_cta ) ) { ?>
    <section class="climate-future-section" id="climate-future-section">
        <div class="container">
            <?php if ( ! empty( $climate_bg_url ) ) { ?>
                <div class="climate-future-site-icon">
                    <img src="<?php echo $climate_bg_url; ?>" alt="<?php echo $climate_bg_alt; ?>">
                </div>
            <?php } if ( ! empty( $climate_title ) || ! empty( $climate_descr ) ) { ?>
                <div class="climate-future-heading">
                    <?php if ( ! empty( $climate_title ) ) { ?>
                        <h2><?php echo $climate_title; ?></h2>
                    <?php } if ( ! empty( $climate_descr ) ) { ?>
                        <p><?php echo $climate_descr; ?></p>
                    <?php } ?>
                </div>
            <?php } if ( ! empty( $climate_content ) ) { ?>
                <div class="climate-future-row">
                    <?php
                    foreach ( $climate_content as $climate_con_value ) {
                        $climate_con_index = $climate_con_value[ 'index' ];
                        $climate_con_title = $climate_con_value[ 'title' ];
                        ?>
                        <div class="climate-future-col">
                            <div class="climate-future-box"><span><?php echo $climate_con_index; ?></span> <?php echo $climate_con_title; ?></div>
                        </div>
                    <?php } ?>
                </div>
            <?php } if ( ! empty( $climate_cta ) ) { ?>
                <div class="climate-future-btn">
                    <a href="<?php echo $climate_cta_link; ?>" class="btn btn-tertiary" target="<?php echo $climate_cta_target; ?>"><?php echo $climate_cta_title; ?> 
                        <span>
                            <?php include( get_stylesheet_directory() . '/images/btn-arrow-whaite.svg' ); ?>
                        </span>
                    </a>
                </div>
            <?php } ?>
        </div>
    </section>  
<?php } ?>