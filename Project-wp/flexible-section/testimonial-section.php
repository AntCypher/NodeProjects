<?php
if ( class_exists( 'acf' ) ) {
    $test_slider_item = get_sub_field( 'helthcare_test_slider_item' );
}
?>
<?php if ( ! empty( $test_slider_item ) ) { ?>
    <section class="quality-section" id="testinomials">
        <div class="container">
            <div class="quality-inner">
                <div class="main-content">
                    <?php
                    if ( ! empty( $test_slider_item ) ) {
                        foreach ( $test_slider_item as $slider_item ) {
                            $slider_title = $slider_item[ 'slider_title' ];
                            $slider_info  = $slider_item[ 'slider_info' ];
                            ?>
                            <div class="slider-item">
                                <div>
                                    <img src="<?php echo HELTHCARE_IMAGE_PATH ?>/quote.svg" alt="">
                                    <?php if ( ! empty( $slider_title ) ) { ?>
                                        <h5><?php echo $slider_title; ?></h5>
                                    <?php } if ( ! empty( $slider_info ) ) { ?>
                                        <div class="client-info"><?php echo $slider_info; ?></div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

<?php } ?>


















