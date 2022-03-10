<?php
if ( class_exists( 'acf' ) ) {
    $title              = get_sub_field( 'title' );
    $content            = get_sub_field( 'content' );
    $our_value_title    = get_sub_field( 'our_value_title' );
    $our_value_content  = get_sub_field( 'our_value_content' );
    $cta                = get_sub_field( 'cta' );
    $title_content_area = get_sub_field( 'title_content_section' );
    if ( ! empty( $cta ) ) {
        $cta_title  = $cta[ 'title' ];
        $cta_link   = $cta[ 'url' ];
        $cta_target = $cta[ 'target' ];
    }
}
if ( ! empty( $title ) || ! empty( $content ) || ! empty( $our_value_title ) || ! empty( $our_value_content ) || ! empty( $cta ) || ! empty( $title_content_area ) ) {
    ?>
    <section class="why-us-section">
        <div class="container">
            <div class="sect_header">
                <?php if ( ! empty( $title ) ) { ?>
                    <h2><?php echo $title; ?></h2>
                <?php } ?>
                <?php echo $content; ?>
            </div>
            <div class="row">
                <div class="ws-left">
                    <div class="ws-left-inner">
                        <?php if ( ! empty( $our_value_title ) ) { ?>
                            <h3 class="ws-title"><?php echo $our_value_title; ?></h3>
                            <?php
                        }
                        echo $our_value_content;
                        if ( ! empty( $cta ) ) {
                            ?>
                            <a href="<?php echo $cta_link; ?>" class="btn btn-primary" target="<?php echo $cta_target; ?>"><?php echo $cta_title; ?></a>
                        <?php } ?>
                        <div class="img-wrapper">
                            <img src="<?php echo get_theme_file_uri(); ?>/images/arrow-forward.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="ws-right">
                    <div class="ws-right-inner">
                        <?php if ( ! empty( $title_content_area ) ) { ?>
                            <div class="row">
                                <?php
                                foreach ( $title_content_area as $title_content ) {
                                    $title       = $title_content[ 'title' ];
                                    $description = $title_content[ 'description' ];
                                    ?>
                                    <div class="col-50 ws-value-col">
                                        <div class="value-box">
                                            <div class="value-box-inner">
                                                <?php if ( ! empty( $title ) ) { ?>
                                                    <h4 class="title"><?php echo $title; ?></h4>
                                                <?php }if ( ! empty( $description ) ) { ?>
                                                    <p><?php echo $description; ?></p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
    </section>
<?php } ?>
