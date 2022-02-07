<?php
if ( class_exists( 'acf' ) ) {
    $emission_title   = get_sub_field( 'helthcare_emissions_title' );
    $emission_content = get_sub_field( 'helthcare_emissions_content' );
    $emission_cta     = get_sub_field( 'helthcare_emissions_cta' );
}
?>
<?php if ( ! empty( $emission_title ) || ! empty( $emission_content ) || ! empty( $emission_cta ) ) { ?>
    <section class="emissions-section" id="emissions-section">
        <div class="container">
            <?php if ( ! empty( $emission_title ) ) { ?>
                <div class="emissions-heading">
                    <h2><?php echo $emission_title; ?></h2>
                </div>
            <?php } ?>
            <?php if ( ! empty( $emission_content ) ) { ?>
                <div class="emissions-row">
                    <?php
                    foreach ( $emission_content as $emi_con_value ) {
                        $emi_count    = $emi_con_value[ 'count' ];
                        $emi_title    = $emi_con_value[ 'title' ];
                        $emi_subtitle = $emi_con_value[ 'subtitle' ];
                        ?>
                        <div class="emissions-col">
                            <div class="emissions-box">
                                <?php if ( ! empty( $emi_count ) ) { ?>
                                    <div class="emissions-rank"><?php echo $emi_count; ?></div>
                                <?php } if ( ! empty( $emi_title ) ) { ?>
                                    <h3><?php echo $emi_title; ?></h3>
                                <?php } if ( ! empty( $emi_subtitle ) ) { ?>
                                    <p><?php echo $emi_subtitle; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="emissions-btn">
                <?php if ( ! empty( $emission_cta ) ) { ?>
                    <a href="<?php echo $emission_cta[ 'url' ]; ?>" target="<?php echo $emission_cta[ 'target' ]; ?>" class="btn btn-tertiary"><?php echo $emission_cta[ 'title' ]; ?>
                        <span>
                            <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"/>
                            </svg>
                        </span>
                    </a>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>