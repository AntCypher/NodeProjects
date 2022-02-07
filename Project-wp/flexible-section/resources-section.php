<?php
if ( class_exists( 'acf' ) ) {
    $main_title = get_sub_field( 'healthcare_resources_main_title' );
    $reso_cta   = get_sub_field( 'helthcare_resources_cta' );
    if ( ! empty( $reso_cta ) ) {
        $reso_cta_title  = $reso_cta[ 'title' ];
        $reso_cta_link   = $reso_cta[ 'url' ];
        $reso_cta_target = $reso_cta[ 'target' ];
    }
    $show_latest         = get_sub_field( 'helthcare_resources_resources' );
    $reso_latest_p_count = get_sub_field( 'helthcare_resources_latest_posts' );
    $reso_slectable      = get_sub_field( 'helthcare_resources_selectable' );
    $reso_up_con         = get_sub_field( 'helthcare_resources_up_con' );
    $default_image       = get_field( 'helthcare_options_default_image_for_resourses', 'options' );
}

$args = array (
    'post_type'   => HELTHCARE_RESOURCES_POST_TYPE,
    'post_status' => 'publish',
//    'posts_per_page' => -1,
);
if ( $show_latest ) {
    $args[ 'posts_per_page' ] = $reso_latest_p_count;
}
if ( ! $show_latest ) {
    $args[ 'posts_per_page' ] = -1;
    $args[ 'post__in' ]       = $reso_slectable;
    $args[ 'orderby' ]        = "post__in";
}
$resourses_query = new WP_Query( $args );
?>
<?php if ( ! empty( $reso_slectable ) || ! empty( $reso_up_con ) || ! empty( $main_title ) || ! empty( $reso_cta ) || ! empty( $resourses_query ) || ! empty( $show_latest ) || ! empty( $reso_latest_p_count ) ) { ?>
    <section class="insights-resources-section" id="insights-section">
        <div class="container">
            <div class="insights-resources-heading">
                <?php if ( ! empty( $main_title ) ) { ?>
                    <h2><?php echo $main_title; ?></h2>
                <?php } if ( ! empty( $reso_cta ) ) { ?>
                    <div class="insights-resources-heading-btn">
                        <a href="<?php echo $reso_cta_link; ?>" target="<?php echo $reso_cta_target; ?>" class="round-icon-btn"><span><?php include( get_stylesheet_directory() . '/images/btn-arrow-whaite.svg' ); ?></span>
                            <?php echo $reso_cta_title; ?>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="insights-resources-row">
                <?php if ( ! empty( $reso_up_con ) ) { ?>
                    <div class="insights-resources-col">
                        <div class="upcoming-webinar-card">
                            <div class="upcoming-webinar-carousel">
                                <?php
                                foreach ( $reso_up_con as $reso_up_con_val ) {
                                    $reso_up_ttl       = $reso_up_con_val[ 'helthcare_resources_up_ttl' ];
                                    $upcoming_title    = $reso_up_con_val[ 'title' ];
                                    $upcoming_descr    = $reso_up_con_val[ 'description' ];
                                    $upcoming_icon     = $reso_up_con_val[ 'icon' ];
                                    $upcoming_icon_url = ! empty( $upcoming_icon[ 'url' ] ) ? $upcoming_icon[ 'url' ] : '#';
                                    $upcoming_icon_alt = ! empty( $upcoming_icon[ 'alt' ] ) ? $upcoming_icon[ 'alt' ] : get_bloginfo();
                                    $upcoming_reg_btn  = $reso_up_con_val[ 'register_buttton' ];
                                    if ( ! empty( $upcoming_reg_btn ) ) {
                                        $upcoming_reg_btn_title  = $upcoming_reg_btn[ 'title' ];
                                        $upcoming_reg_btn_link   = $upcoming_reg_btn[ 'url' ];
                                        $upcoming_reg_btn_target = $upcoming_reg_btn[ 'target' ];
                                    }
                                    $upcoming_author = $reso_up_con_val[ 'author' ];
                                    ?>
                                    <div class="upcoming-webinar-col">
                                        <div class="upcoming-webinar-box">
                                            <?php if ( ! empty( $upcoming_icon ) ) { ?>
                                                <div class="upcoming-webinar-img">
                                                    <img class="webinar-img" src="<?php echo $upcoming_icon_url; ?>" alt="<?php echo $upcoming_icon_alt; ?>">
                                                </div>
                                            <?php } ?>
                                            <div class="upcoming-webinar-info">
                                                <?php if ( ! empty( $reso_up_ttl ) ) { ?>
                                                    <div class="upcoming-webinar-upcoming"><?php echo $reso_up_ttl; ?></div>
                                                <?php } if ( ! empty( $upcoming_title ) ) { ?>
                                                    <h2 class="upcoming-webinar-title"><?php echo $upcoming_title; ?></h2>
                                                <?php } if ( ! empty( $upcoming_author ) ) { ?>
                                                    <div class="upcoming-webinar-hosted"><?php echo 'HOSTED BY: ' . $upcoming_author[ 'user_nicename' ]; ?></div>
                                                <?php } echo $upcoming_descr; ?>
                                                <?php if ( ! empty( $upcoming_reg_btn ) ) { ?>
                                                    <a href="<?php echo $upcoming_reg_btn_link; ?>" class="round-icon-btn" target="<?php echo $upcoming_reg_btn_target; ?>">
                                                        <span><?php include( get_stylesheet_directory() . '/images/btn-arrow-whaite.svg' ); ?></span>
                                                        <?php echo $upcoming_reg_btn_title; ?>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php
                if ( $resourses_query->have_posts() ) {
                    while ( $resourses_query->have_posts() ) {
                        $resourses_query->the_post();
                        $resourses_id            = get_the_ID();
                        $resourses_title         = get_the_title();
                        $resourses_image         = get_the_post_thumbnail_url();
                        $img_id                  = get_post_thumbnail_id( $resourses_id );
                        $image_alt               = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
                        $resourses_image         = ! empty( $resourses_image ) ? $resourses_image : $default_image[ 'url' ];
                        $resourses_image_alt     = ! empty( $image_alt ) ? $image_alt : $default_image[ 'alt' ];
                        $resourses_content       = get_the_excerpt();
                        $resourses_cat           = get_the_term_list( $resourses_id, HELTHCARE_RESOURCES_POST_TAX, '', ', ' );
                        $media_type              = get_the_term_list( $resourses_id, HELTHCARE_RESOURCES_POST_TAG, '', ', ' );
                        $post_permalink          = get_the_permalink();
                        $properties_media_cat    = wp_get_post_terms( get_the_ID(), HELTHCARE_RESOURCES_POST_TAG, array ( 'fields' => 'all' ) );
                        $properties_media_cat_id = $properties_media_cat[ 0 ]->term_id;
                        $media_icon              = get_field( 'healthcare_media_type_icon_image', 'resourses_media_type_' . $properties_media_cat_id );
                        $media_icon_url          = ! empty( $media_icon ) ? $media_icon[ 'url' ] : '#';
                        $media_icon_alt          = ! empty( $media_icon[ 'alt' ] ) ? $media_icon[ 'alt' ] : get_bloginfo();
                        ?>
                        <div class="insights-resources-col">
                            <div class="insights-resources-box">
                                <div class="insights-resources-img">
                                    <?php if ( ! empty( $resourses_image ) ) { ?>
                                        <img class="resources-img" src="<?php echo $resourses_image; ?>" alt="<?php echo $resourses_image_alt; ?>">
                                    <?php } ?>
                                    <div class="insights-resources-cat">
                                        <?php if ( ! empty( $media_icon ) ) { ?>
                                            <div class="insights-resources-cat-icon">
                                                <img src="<?php echo $media_icon_url; ?>" alt="<?php echo $media_icon_alt; ?>">
                                            </div>
                                        <?php } if ( ! empty( $media_type ) ) { ?>
                                            <span><?php echo $media_type; ?></span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="insights-resources-info">
                                    <?php if ( ! empty( $resourses_cat ) ) { ?>
                                        <div class="insights-resources-subcat"><?php echo $resourses_cat; ?></div>
                                    <?php } if ( ! empty( $resourses_title ) ) { ?>
                                        <h2 class="insights-resources-title"><a href="<?php echo $post_permalink; ?>"><?php echo $resourses_title; ?></a></h2>
                                    <?php } if ( ! empty( $resourses_content ) ) { ?>
                                        <p><?php echo $resourses_content; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }wp_reset_query();
                    wp_reset_postdata();
                }
                ?>
            </div>
            <?php if ( ! empty( $reso_cta ) ) { ?>
                <div class="insights-resources-section-btn">
                    <a href="<?php echo $reso_cta_link; ?>" target="<?php echo $reso_cta_target; ?>" class="btn btn-tertiary-transparent"> <?php echo $reso_cta_title; ?>
                        <span><?php include( get_stylesheet_directory() . '/images/btn-arrow-whaite.svg' ); ?></span>
                    </a>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>