<?php
if ( class_exists( 'acf' ) ) {
    $how_it_work_top_title = get_sub_field( 'helthcare_how_it_works_top_title' );
    $how_it_work_con       = get_sub_field( 'helthcare_how_it_works_top_con' );
    $how_it_work_content   = get_sub_field( 'helthcare_how_it_works_content' );
    $how_it_work_bg        = get_sub_field( 'helthcare_how_it_works_bg_img' );
    $how_it_work_bg_url    = ! empty( $how_it_work_bg ) ? $how_it_work_bg[ 'url' ] : '#';
    $how_it_work_bg_alt    = ! empty( $how_it_work_bg['alt'] ) ? $how_it_work_bg[ 'alt' ] : get_bloginfo();
    $how_it_work_cta       = get_sub_field( 'helthcare_how_it_works_cta' );
    if ( ! empty( $how_it_work_cta ) ) {
        $how_it_work_cta_title  = $how_it_work_cta[ 'title' ];
        $how_it_work_cta_link   = $how_it_work_cta[ 'url' ];
        $how_it_work_cta_target = $how_it_work_cta[ 'target' ];
    }
}
?>
<?php if ( ! empty( $how_it_work_top_title ) || ! empty( $how_it_work_con ) || ! empty( $how_it_work_content ) || ! empty( $how_it_work_cta ) || ! empty( $how_it_work_bg ) ) { ?>
    <section class="create-practice" id="create-practice">
        <div class="container">
            <div class="title-part">
                <?php if ( ! empty( $how_it_work_top_title ) ) { ?>
                    <h2><?php echo $how_it_work_top_title; ?></h2>
                <?php } if ( ! empty( $how_it_work_con ) ) { ?>
                    <div class="content">
                        <p><?php echo $how_it_work_con; ?></p>
                    </div>
                <?php } ?>
            </div>
            <div class="create-practice-wrap">
                <div class="inner-part">
                    <?php
                    if ( ! empty( $how_it_work_content ) ) {
                        foreach ( $how_it_work_content as $how_it_work_con_val ) {
                            $block_title         = $how_it_work_con_val[ 'block_title' ];
                            $block_descr         = $how_it_work_con_val[ 'block_descr' ];
                            $block_img           = $how_it_work_con_val[ 'block_image' ];
                            $block_img_url       = ! empty( $block_img ) ? $block_img[ 'url' ] : '#';
                            $block_img_alt       = ! empty( $block_img['alt'] ) ? $block_img[ 'alt' ] : get_bloginfo();
                            $block_left_or_right = $how_it_work_con_val[ 'block_left_or_right' ];
                            $img_class           = ($block_left_or_right) ? 'left-img' : 'right-img';
                            ?>
                            <div class="item-list">
                                <div class="list-wrap">
                                    <?php if ( ! empty( $block_img ) ) { ?>
                                        <div class="<?php echo $img_class; ?>"><img src="<?php echo $block_img_url; ?>" alt="<?php echo $block_img_alt; ?>"></div>
                                    <?php } if ( ! empty( $block_title ) ) { ?>
                                        <h3><?php echo $block_title; ?></h3>
                                        <?php
                                    }
                                    if ( ! empty( $block_descr ) ) {
                                        echo $block_descr;
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <?php if ( ! empty( $how_it_work_cta ) ) { ?>
                        <div class="create-practice-btn">
                            <a href="<?php echo $how_it_work_cta_link; ?>" class="btn btn-tertiary-transparent" target="<?php echo $how_it_work_cta_target; ?>"><?php echo $how_it_work_cta_title; ?><span><svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path>
                                    </svg>
                                </span></a>
                        </div>
                    <?php } if ( ! empty( $how_it_work_bg ) ) { ?>
                        <div class="bottom-bg-img">
                            <img src="<?php echo $how_it_work_bg_url; ?>" alt="<?php echo $how_it_work_bg_alt; ?>">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>