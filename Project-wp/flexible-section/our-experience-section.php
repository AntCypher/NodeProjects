<?php
if ( class_exists( 'acf' ) ) {
    $title         = get_sub_field( 'helthcare_our_experience_title' );
    $content       = get_sub_field( 'helthcare_our_experience_content' );
    $first_img     = get_sub_field( 'helthcare_our_experience_first_img' );
    $first_img_url = ! empty( $first_img ) ? $first_img[ 'url' ] : '#';
    $first_img_alt = ! empty( $first_img['alt'] ) ? $first_img[ 'alt' ] : get_bloginfo();
    $s_image       = get_sub_field( 'helthcare_our_experience_s_img' );
    $s_image_url   = ! empty( $s_image ) ? $s_image[ 'url' ] : '#';
    $s_image_alt   = ! empty( $s_image['alt'] ) ? $s_image[ 'alt' ] : get_bloginfo();
}
?>
<?php if ( ! empty( $s_image ) || ! empty( $first_img ) || ! empty( $title ) || ! empty( $content ) ) { ?>
    <section class="experience left-space" style="padding-left: 271.5px;" id="experience">
        <div class="experience-inner">
            <?php if ( ! empty( $title ) ) { ?>
                <div class="left">
                    <h2><?php echo $title; ?></h2>
                </div>
            <?php } if ( ! empty( $first_img ) || ! empty( $s_image ) ) { ?>
                <div class="right">
                    <div class="experience-img-wrap">
                        <?php if ( ! empty( $first_img ) ) { ?>
                            <div class="img-inner">
                                <img src="<?php echo $first_img_url; ?>" alt="<?php echo $first_img_alt; ?>">
                            </div>
                        <?php } if ( ! empty( $s_image ) ) { ?>
                            <div class="img-inner">
                                <img src="<?php echo $s_image_url; ?>" alt="<?php echo $s_image_alt; ?>">
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <<?php } ?>
        </div>
        <?php if ( ! empty( $content ) ) { ?>
            <div class="experience-info">
                <div class="info-inner">
                    <?php echo $content; ?>
                </div>
            </div>
        <?php } ?>
    </section>
<?php } ?>