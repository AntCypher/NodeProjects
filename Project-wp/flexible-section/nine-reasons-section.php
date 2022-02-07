<?php
if ( class_exists( 'acf' ) ) {
    $nine_top_title = get_sub_field( 'helthcare_nine_top_title' );
    $nine_title     = get_sub_field( 'helthcare_nine_post_title' );
    $nine_bg        = get_sub_field( 'helthcare_nine_bg' );
    $nine_bg_url    = ! empty( $nine_bg ) ? $nine_bg[ 'url' ] : '#';
    $nine_content   = get_sub_field( 'helthcare_nine_content' );
}
?>
<?php if ( ! empty( $nine_top_title ) || ! empty( $nine_title ) || ! empty( $nine_bg ) || ! ! empty( $nine_content ) ) { ?>
    <section class="reasons-health">
        <div class="container">
            <div class="title-part">
                <?php if ( ! empty( $nine_top_title ) ) { ?>
                    <div class="subtitle"><?php echo $nine_top_title; ?></div>
                <?php } if ( ! empty( $nine_title ) ) { ?>
                    <h2><?php echo $nine_title; ?></h2>
                <?php } ?>
            </div>
        </div>
        <div class="reasons-wrap" style="background-image: url('<?php echo $nine_bg_url; ?>');">
            <div class="list-wrap">
                <div class="item_wrapper_three">
                    <?php
                    if ( ! empty( $nine_content ) ) {
                        foreach ( $nine_content as $nine_content_key => $nine_con_value ) {
                            $reason_text  = $nine_con_value[ 'reason_text' ];
                            $reason_descr = $nine_con_value[ 'reason_descr' ];
                            if ( $nine_content_key % 3 == 0 && $nine_content_key != 0 ) {
                                echo '</div><div class="item_wrapper_three">';
                            }
                            ?>
                            <div class="col">
                                <div class="item">
                                    <div>
                                        <?php if ( ! empty( $reason_text ) ) { ?>
                                            <span><?php echo $reason_text; ?></span>
                                        <?php } if ( ! empty( $reason_descr ) ) { ?>
                                            <div class="content"><?php echo $reason_descr; ?></div>
                                        <?php } ?>
                                    </div>
                                </div> 
                            </div>
                            <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>
<?php } ?>