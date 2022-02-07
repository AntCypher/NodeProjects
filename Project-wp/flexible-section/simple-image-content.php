<?php
if ( class_exists( 'acf' ) ) {
    $simple_image_bg      = get_sub_field( 'helthcare_simple_image_bg' );
    $simple_image_title   = get_sub_field( 'helthcare_simple_image_title' );
    $simple_image_content = get_sub_field( 'helthcare_simple_image_content' );
    $simple_image_bg_url  = ! empty( $simple_image_bg ) ? $simple_image_bg[ 'url' ] : '#';
    $simple_image_bg_alt  = ! empty( $simple_image_bg['alt'] ) ? $simple_image_bg[ 'alt' ] : get_bloginfo();
}
?>
<?php if ( ! empty( $simple_image_bg ) || ! empty( $simple_image_title ) || ! empty( $simple_image_content ) ) { ?>
    <section class="right-space right-sideimg-section" id="right-space">
        <div class="right-side-wrap">
            <?php if ( ! empty( $simple_image_bg ) ) { ?>
                <div class="left" style="background-image:url('<?php echo $simple_image_bg_url; ?>');">
                </div>
            <?php } if ( ! empty( $simple_image_title ) || ! empty( $simple_image_content ) ) { ?>
                <div class="right">
                    <?php if ( ! empty( $simple_image_title ) ) { ?>
                        <h3><?php echo $simple_image_title; ?></h3>
                    <?php } ?>
                    <?php echo $simple_image_content; ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>