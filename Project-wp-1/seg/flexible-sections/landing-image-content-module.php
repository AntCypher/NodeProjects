<?php
if ( class_exists( 'acf' ) ) {
    $image_text_content = get_sub_field( 'image_text_content' );
}
if ( ! empty( $image_text_content ) ) {
    ?>
    <div class="landing-zigzag-section">
        <div class="container">
            <?php
            foreach ( $image_text_content as $value ) {
                $image       = $value[ 'image' ];
                $img_url     = ! empty( $image ) ? $image[ 'url' ] : '#';
                $img_alt     = ! empty( $image[ 'alt' ] ) ? $image[ 'alt' ] : get_bloginfo();
                $title       = $value[ 'title' ];
                $description = $value[ 'description' ];
                ?>
                <div class="landing-two-column">
                    <?php if ( ! empty( $image ) ) { ?>
                        <div class="landing-left-column">
                            <div class="image-wrap">
                                <img src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>"/>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="landing-right-column">
                        <div class="landing-right-content-wrap">
                            <div class="landing-right-content">
                                <?php if ( ! empty( $title ) ) { ?>
                                    <h4><?php echo $title; ?></h4>
                                <?php } echo $description; ?>
                            </div>  
                        </div>                    
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
