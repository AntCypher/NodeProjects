<?php
if ( class_exists( 'acf' ) ) {
    $start_some_top_title = get_sub_field( 'helthcare_start_some_top_title' );
    $start_some_top_con   = get_sub_field( 'helthcare_start_some_top_con' );
    $start_some_bg        = get_sub_field( 'helthcare_start_some_bg' );
    $start_some_bg_url    = ! empty( $start_some_bg ) ? $start_some_bg[ 'url' ] : '#';
    $start_some_bg_alt    = ! empty( $start_some_bg['alt'] ) ? $start_some_bg[ 'alt' ] : get_bloginfo();
    $start_some_cta       = get_sub_field( 'helthcare_start_some_cta' );
    $start_some_lists     = get_sub_field( 'list_item' );
    if ( ! empty( $start_some_cta ) ) {
        $start_cta_title  = $start_some_cta[ 'title' ];
        $start_cta_link   = $start_some_cta[ 'url' ];
        $start_cta_target = $start_some_cta[ 'target' ];
    }
}
?>
<?php if ( ! empty( $start_some_top_title ) || ! empty( $start_some_top_con ) || ! empty( $start_some_bg ) || ! empty( $start_some_lists ) || ! empty( $start_some_cta ) ) { ?>
    <section class="climate-section new-climate" id="start-somewhere">
        <div class="container">
            <div class="climate-wrap">
                <div class="climate-in">
                    <div class="title-part">
                        <?php if ( ! empty( $start_some_top_title ) ) { ?>
                            <h2><?php echo $start_some_top_title; ?></h2>
                        <?php } if ( ! empty( $start_some_top_con ) ) { ?>
                            <div class="content">
                                <h6><?php echo $start_some_top_con; ?></h6>
                            </div>
                        <?php } ?>
                    </div>
                    <?php if ( ! empty( $start_some_bg ) ) { ?>
                        <div class="climate-img" style="background-image:url('<?php echo $start_some_bg_url; ?>');">
                        </div>
                    <?php } ?>
                </div>
                <?php if ( ! empty( $start_some_lists ) ) { ?>
                    <div class="list-wrap">
                        <?php
                        foreach ( $start_some_lists as $lists ) {
                            $item_index   = $lists[ 'index' ];
                            $item_title   = $lists[ 'item_title' ];
                            $item_content = $lists[ 'item_content' ];
                            ?>
                            <div class="item-list">
                                <?php if ( ! empty( $item_index ) ) { ?>
                                    <h6><?php echo $item_index; ?></h6>
                                <?php } if ( ! empty( $item_title ) ) { ?>
                                    <h3><?php echo $item_title; ?></h3>
                                <?php } if ( ! empty( $item_content ) ) { ?>
                                    <div class="content"><?php echo $item_content; ?></div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } if ( ! empty( $start_some_cta ) ) { ?>
                    <div class="climate-btn">
                        <a href="<?php echo $start_cta_link; ?>" class="btn btn-tertiary" target="<?php echo $start_cta_target; ?>"><?php echo $start_cta_title; ?> <span><svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"/>
                                </svg>
                            </span></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
