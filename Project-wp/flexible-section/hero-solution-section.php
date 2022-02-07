<?php
if ( class_exists( 'acf' ) ) {
    $is_sol_banner     = get_sub_field( 'helthcare_is_sol_banner' );
    $sol_bann_bg       = get_sub_field( 'solution_sol_bann_bg' );
    $sol_bann_img      = get_sub_field( 'solution_sol_bann_img' );
    $sol_bann_title    = get_sub_field( 'solution_sol_bann_title' );
    $sol_bann_subtitle = get_sub_field( 'solution_sol_bann_subtitle' );
    $sol_bann_descr    = get_sub_field( 'solution_sol_bann_descr' );
    $sol_bann_bg_url   = ! empty( $sol_bann_bg[ 'url' ] ) ? $sol_bann_bg[ 'url' ] : '#';
    $sol_bann_img_url  = ! empty( $sol_bann_img[ 'url' ] ) ? $sol_bann_img[ 'url' ] : '#';
    $sol_bann_img_alt  = ! empty( $sol_bann_img[ 'alt' ] ) ? $sol_bann_img[ 'alt' ] : get_bloginfo();
    $is_sol_content    = get_sub_field( 'helthcare_is_sol_content' );
    $sol_con_head      = get_sub_field( 'solution_sol_con_head' );
    $sol_con_descr     = get_sub_field( 'solution_sol_con_descr' );
    $sol_con_img       = get_sub_field( 'solution_sol_con_img' );
    $sol_con_more      = get_sub_field( 'solution_sol_con_more_btn' );
    $sol_con_img_url   = ! empty( $sol_con_img[ 'url' ] ) ? $sol_con_img[ 'url' ] : '#';
    $sol_con_img_alt   = ! empty( $sol_con_img[ 'alt' ] ) ? $sol_con_img[ 'alt' ] : get_bloginfo();
    if ( ! empty( $sol_con_more ) ) {
        $sol_con_more_title  = $sol_con_more[ 'title' ];
        $sol_con_more_link   = $sol_con_more[ 'url' ];
        $sol_con_more_target = $sol_con_more[ 'target' ];
    }
}
?>
<?php
if ( $is_sol_banner ) {
    if ( ! empty( $sol_bann_img ) || ! empty( $sol_bann_subtitle ) || ! empty( $sol_bann_title ) || ! empty( $sol_bann_descr ) || ! empty( $sol_bann_img ) ) {
        ?>
        <section class="banner-inner left-space" id="banner-inner"> 
            <div class="left">
                <div class="left-inner" style="background-image: url(<?php echo $sol_bann_bg_url; ?>);"> 
                    <div class="left-title">
                        <div class="title-part">
                            <?php if ( ! empty( $sol_bann_subtitle ) ) { ?>
                                <h6><?php echo $sol_bann_subtitle; ?></h6>
                            <?php } if ( ! empty( $sol_bann_title ) ) { ?>
                                <h1><?php echo $sol_bann_title; ?></h1>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <?php if ( ! empty( $sol_bann_descr ) ) { ?>
                    <h3><?php echo $sol_bann_descr; ?></h3>
                <?php } if ( ! empty( $sol_bann_img ) ) { ?>
                    <div class="word-img">
                        <img src="<?php echo $sol_bann_img_url; ?>" alt="<?php echo $sol_bann_img_alt; ?>">
                    </div>
                <?php } ?>
            </div>

        </section>
        <?php
    }
}
?>
<?php
if ( $is_sol_content ) {
    if ( ! empty( $sol_con_head ) || ! empty( $sol_con_descr ) || ! empty( $sol_con_img ) ) {
        ?>
        <section class="content-with-image left-space" id="content-with-image">
            <div class="content-inner">
                <div class="content-part">
                    <div>
                        <?php if ( ! empty( $sol_con_head ) ) { ?>
                            <h2><?php echo $sol_con_head; ?></h2>
                        <?php } if ( ! empty( $sol_con_descr ) ) { ?>
                            <div class="content">
                                <?php echo $sol_con_descr; ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <?php if ( ! empty( $sol_con_img ) ) { ?>
                    <div class="img-part">
                        <img src="<?php echo $sol_con_img_url; ?>" alt="<?php echo $sol_con_img_alt; ?>">
                    </div>
                <?php } ?>
            </div>
        </section>
        <?php
    }
}
?>
