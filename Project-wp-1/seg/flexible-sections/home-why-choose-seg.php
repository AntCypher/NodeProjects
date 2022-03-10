<?php
if ( class_exists( 'acf' ) ) {
    $title          = get_sub_field( 'title' );
    $desc           = get_sub_field( 'description' );
    $bottom_content = get_sub_field( 'image_text_content' );
}
if ( ! empty( $title ) || ! empty( $desc ) || ! empty( $bottom_content ) ) {
    ?>
    <section class="seg-why-software">                
        <div class="section-top">
            <div class="container">
                <?php if ( ! empty( $title ) || ! empty( $desc ) ) { ?>
                    <div class="section-content">
                        <h2><?php echo $title; ?></h2>
                        <?php echo $desc; ?>
                    </div>
                <?php } ?>
            </div>
        </div> 
        <?php
        if ( ! empty( $bottom_content ) ) {
            foreach ( $bottom_content as $bottom_key => $bottom_value ) {
                $testi_title   = $bottom_value[ 'testimonial_title' ];
                $testi_company = $bottom_value[ 'testimonial_name_company' ];
                $title         = $bottom_value[ 'title' ];
                $desc          = $bottom_value[ 'description' ];
                $cta           = $bottom_value[ 'cta' ];
                $img           = $bottom_value[ 'image' ];
                ?>
                <div class="software-two-column">
                    <?php if ( ! empty( $img[ 'url' ] ) ) { ?>
                        <div class="software-left-column"  style="background-image:url(<?php echo $img[ 'url' ]; ?>); background-size:cover; background-repeat:no-repeat; background-position:center;">
                            <span class="software-box-shap"></span>
                            <div class="software-content-left-wrap">
                                <div class="software-content-inner">
                                    <?php if ( ! empty( $testi_title ) ) { ?>
                                        <h2 class="testimonial"><?php echo $testi_title; ?></h2>
                                    <?php } if ( ! empty( $testi_company ) ) { ?>
                                        <div class="auther-name"><?php echo '- ' . $testi_company; ?></div>  
                                    <?php } ?>
                                </div>
                                <div class="software-aeroow-image">
                                    <img src="<?php echo get_theme_file_uri(); ?>/images/software-aeroow-icon.png"/>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="software-right-column">
                        <div class="software-content-right-wrap">
                            <div class="software-content-inner">
                                <?php if ( ! empty( $title ) ) { ?>
                                    <h5><?php echo $title; ?></h5>
                                <?php } if ( ! empty( $desc ) ) { ?>
                                    <p><?php echo $desc; ?></p>
                                <?php } if ( ! empty( $cta ) ) { ?>
                                    <a href="<?php echo $cta[ 'url' ]; ?>" class="btn-arrow" target="<?php echo $cta[ 'target' ]; ?>"><?php echo $cta[ 'title' ]; ?><span><img src="<?php echo get_theme_file_uri(); ?>/images/btn-arrow.png" alt=""></span></a>
                                        <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </section>
<?php } ?>
