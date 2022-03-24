<?php
if ( class_exists( 'acf' ) ) {
    $logo        = get_sub_field( 'logo_image' );
    $logo_url    = ! empty( $logo ) ? $logo[ 'url' ] : '#';
    $logo_alt    = ! empty( $logo[ 'alt' ] ) ? $logo[ 'alt' ] : get_bloginfo();
    $title       = get_sub_field( 'title' );
    $description = get_sub_field( 'description' );
    $dwnld_pdf   = get_sub_field( 'download_pdf' );
    if ( ! empty( $dwnld_pdf ) ) {
        $dwnld_pdf_title  = $dwnld_pdf[ 'title' ];
        $dwnld_pdf_link   = $dwnld_pdf[ 'url' ];
        $dwnld_pdf_target = $dwnld_pdf[ 'target' ];
    }
}
if ( ! empty( $logo ) || ! empty( $title ) || ! empty( $description ) || ! empty( $dwnld_pdf ) ) {
    ?>
    <div class="ty-banner-section">
        <div class="container">
            <div class="ty-content-wrap">
                <?php if ( ! empty( $logo ) ) { ?>
                    <div class="logo-img-wrap">
                        <img src="<?php echo $logo_url; ?>" alt="<?php echo $logo_alt; ?>" />
                    </div>
                <?php } ?>
                <div class="ty-content">
                    <?php if ( ! empty( $title ) ) { ?>
                        <h1><?php echo $title; ?></h1>
                    <?php } ?>
                    <?php echo $description; ?>
                    <?php if ( ! empty( $dwnld_pdf ) ) { ?>
                        <div class="ty-btn-wrap">
                            <a class="btn btn-primary" href="<?php echo $dwnld_pdf_link; ?>"  target="<?php echo $dwnld_pdf_target; ?>" download=""><?php echo $dwnld_pdf_title; ?> <img src="<?php echo get_template_directory_uri(); ?>/images/download-icon.png"/> </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="ty-shadow">
            <img src="<?php echo get_template_directory_uri(); ?>/images/landing-image-shadow.png" />
        </div>
        <div class="ty-aerrow">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ty-banner-aerrow.png" />
        </div>
    </div>
<?php } ?>
