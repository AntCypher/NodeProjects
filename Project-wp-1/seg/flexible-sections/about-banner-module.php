<?php
if ( class_exists( 'acf' ) ) {
    $banner_image     = get_sub_field( 'banner_image' );
    $banner_image_url = ! empty( $banner_image ) ? $banner_image[ 'url' ] : '#';
    $banner_image_alt = ! empty( $banner_image[ 'alt' ] ) ? $banner_image[ 'alt' ] : get_bloginfo();
    $subtext          = get_sub_field( 'about_banner_subtext');
    $title            = get_sub_field( 'about_banner_title' );
    $content          = get_sub_field( 'about_banner_content');
}
if ( ! empty( $banner_image ) || ! empty( $subtext ) || ! empty( $title ) || ! empty( $content ) ) {
    ?>
    <section class="about-us-banner">
        <div class="ab-banner-wrapper">
            <?php if ( ! empty( $banner_image ) ) { ?>
                <img src="<?php echo $banner_image_url; ?>" alt="<?php echo $banner_image_alt; ?>" />
            <?php } ?>
            <img class="arrow-img" src="<?php echo get_theme_file_uri(); ?>/images/about-us-banner-arrow-img.png" alt="" />
        </div>
        <div class="ab-banner-contant">
            <div class="container">
                <div class="cs-text-wrapper">
                    <div class="inner-wrapper">
                        <?php if ( ! empty( $subtext ) ) { ?>
                            <span class="sub-title"><?php echo $subtext; ?></span>
                        <?php } if ( ! empty( $title ) ) { ?>
                            <h1 class="page-title"><?php echo $title; ?></h1>
                        <?php } echo $content; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>  
<?php } ?>
