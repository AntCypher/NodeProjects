
<?php
if ( class_exists( 'acf' ) ) {
    $title          = get_sub_field( 'title' );
    $slider_content = get_sub_field( 'slider_content' );
}
if ( ! empty( $title ) || ! empty( $slider_content ) ) {
    ?>
    <div class="ty-whitepaper-section">
        <div class="container">
            <div class="ty-section-header">
                <h3><?php echo $title; ?></h3>
            </div>
            <?php if ( ! empty( $slider_content ) ) { ?>
                <div class="ty-seg-slider">
                    <?php
                    foreach ( $slider_content as $key => $img ) {
                        $img_url = ! empty( $img ) ? $img[ 'url' ] : '#';
                        $img_alt = ! empty( $img[ 'alt' ] ) ? $img[ 'alt' ] : get_bloginfo();
                        ?>
                        <div class="ty-item">
                            <?php if ( ! empty( $img ) ) { ?>
                                <div class="ty-image-wrap">
                                    <img src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>"/>
                                </div>
                            <?php } ?>
                        </div>

                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
