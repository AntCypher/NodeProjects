<?php
if ( class_exists( 'acf' ) ) {
    $form_content   = get_sub_field( 'helthcare_form_content_section' );
    $form_shortcode = get_sub_field( 'helthcare_form_shortcode' );
}
?>
<?php if ( ! empty( $form_content ) || ! empty( $form_shortcode ) ) { ?>
    <section class="information-form" id="information-form">
        <div class="container">
            <div class="information-inner">
                <?php if ( ! empty( $form_content ) ) { ?>
                    <div class="content">
                        <?php echo $form_content; ?>
                    </div>
                <?php } if ( ! empty( $form_shortcode ) ) { ?>
                    <div class="default-form">
                        <?php echo do_shortcode( $form_shortcode ); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>