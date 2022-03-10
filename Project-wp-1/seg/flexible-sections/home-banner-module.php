<?php
if ( class_exists( 'acf' ) ) {
    $banner_images   = get_sub_field( 'banner_images' );
    $subtext         = get_sub_field( 'subtext' );
    $title_desc      = get_sub_field( 'title_description_content_with_form' );
    $form_subtext    = get_sub_field( 'form_subtext' );
    $form_conclution = get_sub_field( 'form_conclution' );
    $cta             = get_sub_field( 'cta' );
}
if ( ! empty( $banner_images ) || ! empty( $title_desc ) || ! empty( $cta ) || ! empty( $subtext ) || ! empty( $form_subtext ) || ! empty( $form_conclution ) ) {
    ?>
    <section class="hero-banner-section">
        <div class="seg-left-content">
            <div class="container">
                <div class="hero-banner-image-wrap">
                    <img src="<?php echo get_theme_file_uri(); ?>/images/home-banner-triangle.png"/>
                </div>
                <div class="seg-content-inner">
                    <?php if ( ! empty( $subtext ) ) { ?>
                        <h6><?php echo $subtext; ?></h6>
                        <?php
                    } echo $title_desc;
                    if ( ! empty( $form_subtext ) ) {
                        ?>
                    <div class="banner-talk">
                        <h4><?php echo $form_subtext; ?></h4>
                        <?php } if ( ! empty( $form_conclution ) ) { ?>
                            <p><?php echo $form_conclution; ?></p>
                        <?php } if ( ! empty( $cta ) ) { ?>
                            <div class="btn-wrap">
                                <a href="<?php echo $cta[ 'url' ]; ?>" class="btn btn-primary" target="<?php echo $cta[ 'target' ]; ?>"><?php echo $cta[ 'title' ]; ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-section-inner">
            <div class="col-wrap">
                <?php
                if ( ! empty( $banner_images ) ) {
                    foreach ( $banner_images as $banner_img_key => $banner_img_val ) {
                        ?>
                        <div class="col">
                            <div class="item-wrap">
                                <div class="image-wrap">
                                    <img src="<?php echo $banner_img_val[ 'url' ]; ?>">
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
<?php } ?>
