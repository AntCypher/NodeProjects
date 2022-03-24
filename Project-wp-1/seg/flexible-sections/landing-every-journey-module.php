<?php
if ( class_exists( 'acf' ) ) {
    $title        = get_sub_field( 'title' );
    $description  = get_sub_field( 'description' );
    $img          = get_sub_field( 'image' );
    $img_url      = ! empty( $img ) ? $img[ 'url' ] : '#';
    $img_alt      = ! empty( $img[ 'alt' ] ) ? $img[ 'alt' ] : get_bloginfo();
    $cta_label    = get_sub_field( 'popup_cta_label' );
    $form_subtext = get_sub_field( 'popup_form_subtext' );
    $form_title   = get_sub_field( 'popup_form_title' );
    $form_sd      = get_sub_field( 'popup_form_shortcode' );
}
if ( ! empty( $title ) || ! empty( $description ) || ! empty( $img ) || ! empty( $cta_label ) || ! empty( $form_subtext ) || ! empty( $form_title ) || ! empty( $form_sd ) ) {
    ?>
    <div class="journey-section">
        <div class="journey-two-column">
            <div class="journey-left-column">
                <div class="journey-content">
                    <?php if ( ! empty( $title ) ) { ?>
                        <h2><?php echo $title; ?></h2>
                    <?php } echo $description; ?>
                    <!--<a href="" class="btn btn-primary">Download the 18 factors</a>-->
                    <?php if ( ! empty( $cta_label ) ) { ?>
                        <div class="download-btn-wrap">
                            <a data-fancybox data-src="#landing-hero-popup1" href="javascript:;" class="btn btn-primary"><?php echo $cta_label; ?></a>
                            <div style="display: none;" id="landing-hero-popup1" class="landing-hero-popup">
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
            <div class="journey-right-column" style="background-image: url(<?php echo $img_url; ?>)">
                <span class="journey-shapes"></span>
                <div class="journey-aerrow">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/score-aerrow.png"/>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
