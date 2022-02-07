<?php
if ( class_exists( 'acf' ) ) {
    $eight_logo_title   = get_sub_field( 'helthcare_eight_logo_title' );
    $eight_logo_gallery = get_sub_field( 'helthcare_eight_logo_gallery' );
}
?>
<?php if ( ! empty( $eight_logo_title ) || ! empty( $eight_logo_gallery ) ) { ?>
    <section class="landing-health" id="landing-health">
        <div class="container">
            <?php if ( ! empty( $eight_logo_title ) ) { ?>
                <h5><?php echo $eight_logo_title; ?></h5>
            <?php } ?>
            <div class="health-wrap">
                <?php
                if ( ! empty( $eight_logo_gallery ) ) {
                    foreach ( $eight_logo_gallery as $gallery ) {
                        $gallery_link = ! empty( $gallery ) ? $gallery[ 'url' ] : '#';
                        $gallery_alt  = ! empty( $gallery['alt'] ) ? $gallery[ 'alt' ] : get_bloginfo();
                        ?>
                        <div class="list">
                            <img src="<?php echo $gallery_link; ?>" alt="<?php echo $gallery_alt; ?>">
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
        </div>
    </section>
<?php } ?>
