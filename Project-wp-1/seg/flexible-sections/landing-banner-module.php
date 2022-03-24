<?php
if ( class_exists( 'acf' ) ) {
    $book_img     = get_sub_field( 'book_image' );
    $book_img_url = ! empty( $book_img ) ? $book_img[ 'url' ] : '#';
    $book_img_alt = ! empty( $book_img[ 'alt' ] ) ? $book_img[ 'alt' ] : get_bloginfo();
    $subtitle     = get_sub_field( 'subtitle' );
    $title        = get_sub_field( 'title' );
    $description  = get_sub_field( 'description' );
    $cta_label    = get_sub_field( 'popup_cta_label' );
    $form_subtext = get_sub_field( 'popup_form_subtext' );
    $form_title   = get_sub_field( 'popup_form_title' );
    $form_sd      = get_sub_field( 'popup_form_sd' );
}
if ( ! empty( $book_img ) || ! empty( $subtitle ) || ! empty( $title ) || ! empty( $description ) || ! empty( $cta_label ) || ! empty( $form_subtext ) || ! empty( $form_title ) || ! empty( $form_sd ) ) {
    ?>
    <div class="landing-hero-section">        
        <div class="container">
            <div class="landing-hero">
                <?php if ( ! empty( $book_img ) ) { ?>
                    <div class="left-image-part">
                        <img src="<?php echo $book_img_url; ?>" alt="<?php echo $book_img_alt; ?>"/>
                    </div>
                <?php } ?>
                <div class="right-content-part">
                    <?php if ( ! empty( $subtitle ) ) { ?>
                        <h6><?php echo $subtitle; ?></h6>
                    <?php } if ( ! empty( $title ) ) { ?>
                        <h1><?php echo $title; ?></h1>
                    <?php } echo $description; ?>
                    <?php if ( ! empty( $cta_label ) || ! empty( $form_subtext ) || ! empty( $form_title ) || ! empty( $form_sd ) ) { ?>
                        <div class="download-btn-wrap">
                            <a data-fancybox data-src="#landing-hero-popup" href="javascript:;" class="btn"><?php echo $cta_label; ?></a>
                            <div style="display: none;" id="landing-hero-popup" class="landing-hero-popup">
                                <?php if ( ! empty( $form_subtext ) ) { ?>
                                    <h4><?php echo $form_subtext; ?></h4>
                                <?php } if ( ! empty( $form_title ) ) { ?>
                                    <h2><?php echo $form_title; ?></h2>
                                <?php } echo do_shortcode( $form_sd ); ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
