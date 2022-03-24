<?php
if ( class_exists( 'acf' ) ) {
    $img                = get_sub_field( 'image' );
    $img_url            = ! empty( $img ) ? $img[ 'url' ] : '#';
    $img_alt            = ! empty( $img[ 'alt' ] ) ? $img[ 'alt' ] : get_bloginfo();
    $person_name        = get_sub_field( 'person_name' );
    $person_designation = get_sub_field( 'person_designation' );
    $title              = get_sub_field( 'title' );
    $subtitle           = get_sub_field( 'subtitle' );
    $description        = get_sub_field( 'description' );
    $show_popup         = get_sub_field( 'show_popup' );
    $cta_label          = get_sub_field( 'popup_cta_label' );
    $form_subtext       = get_sub_field( 'popup_form_subtext' );
    $form_title         = get_sub_field( 'popup_form_title' );
    $form_sd            = get_sub_field( 'popup_form_shortcode' );
    $cta                = get_sub_field( 'cta' );
    if ( ! empty( $cta ) ) {
        $cta_title  = $cta[ 'title' ];
        $cta_link   = $cta[ 'url' ];
        $cta_target = $cta[ 'target' ];
    }
}
if ( ! empty( $img ) || ! empty( $person_name ) || ! empty( $person_designation ) || ! empty( $title ) || ! empty( $subtitle ) || ! empty( $description ) || ! empty( $show_popup ) || ! empty( $cta_label ) || ! empty( $form_subtext ) || ! empty( $form_title ) || ! empty( $form_sd ) || ! empty( $cta ) ) {
    ?>
    <div class="experience-section">
        <div class="experience-two-column">
            <div class="experience-left-column">
                <span class="experience-shapes"></span>
                <div class="experience-aerrow">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/score-aerrow.png"/>
                </div>
                <div class="experience-detail">
                    <?php if ( ! empty( $img ) ) { ?>
                        <img src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>"/>
                    <?php } ?>
                    <?php if ( ! empty( $person_designation ) || ! empty( $person_name ) ) { ?>
                        <div class="experience-info">
                            <sapn>
                                <?php if ( ! empty( $person_name ) ) { ?>
                                    <strong><?php echo $person_name; ?>,</strong> 
                                <?php } echo $person_designation; ?> </sapn> 
                        </div>
                    <?php } ?>
                </div>              
            </div>
            <div class="experience-right-column"> 
                <div class="experience-content">
                    <h2><?php echo $title; ?></h2>
                    <h3><?php echo $subtitle; ?></h3>
                    <?php echo $description; ?>
                    <?php if ( ! empty( $cta ) && ( ! $show_popup) ) { ?>
                        <a href="<?php echo $cta_link; ?>" target="<?php echo $cta_target; ?>" class="btn btn-primary"><?php echo $cta_title; ?></a>
                    <?php } ?>
                    <?php if ( ( ! empty( $cta_label ) || ! empty( $form_subtext ) || ! empty( $form_title ) || ! empty( $form_sd ) ) && ($show_popup) ) { ?>
                        <div class="download-btn-wrap">
                            <a data-fancybox data-src="#landing-hero-popup2" href="javascript:;" class="btn btn-primary"><?php echo $cta_label; ?></a>
                            <div style="display: none;" id="landing-hero-popup2" class="landing-hero-popup">
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
