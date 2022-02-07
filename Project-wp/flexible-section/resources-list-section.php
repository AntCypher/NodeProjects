<?php
if ( class_exists( 'acf' ) ) {
    $reso_list_title       = get_sub_field( 'helthcare_reso_list_title' );
    $reso_list_select_post = get_sub_field( 'helthcare_reso_list_selectable' );
    $reso_list_cta         = get_sub_field( 'helthcare_reso_list_cta' );
    if ( ! empty( $reso_list_cta ) ) {
        $reso_list_cta_title  = $reso_list_cta[ 'title' ];
        $reso_list_cta_link   = $reso_list_cta[ 'url' ];
        $reso_list_cta_target = $reso_list_cta[ 'target' ];
    }
    $default_image = get_field( 'helthcare_options_default_image_for_resourses', 'options' );
}
$args = array (
    'post_type'      => HELTHCARE_RESOURCES_POST_TYPE,
    'post_status'    => 'publish',
    'posts_per_page' => 3,
);
if ( ! empty( $reso_list_select_post ) ) {
    $args[ 'post__in' ] = $reso_list_select_post;
    $args[ 'orderby' ]  = "post__in";
}
$reso_list_query = new WP_Query( $args );
?>
<?php if ( ! empty( $reso_list_title ) || ! empty( $reso_list_cta ) || ! empty( $reso_list_query ) ) { ?>
    <section class="insights-resources-section insights-info" id="insights-info">
        <div class="container">
            <div class="insights-resources-heading">
                <?php if ( ! empty( $reso_list_title ) ) { ?>
                    <h2><?php echo $reso_list_title; ?></h2>
                <?php } ?>
                <?php if ( ! empty( $reso_list_cta ) ) { ?>
                    <div class="insights-resources-heading-btn"><a href="<?php echo $reso_list_cta_link; ?>" class="round-icon-btn" target="<?php echo $reso_list_cta_target; ?>"><span><svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"/>
                                </svg>
                            </span><?php echo $reso_list_cta_title; ?></a></div>
                <?php } ?>
            </div>
            <div class="insights-row">
                <?php
                if ( ! empty( $reso_list_select_post ) ) {
                    if ( $reso_list_query->have_posts() ) {
                        $counter = 0;
                        while ( $reso_list_query->have_posts() ) {
                            $reso_list_query->the_post();
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
                            $properties_media_cat    = wp_get_post_terms( $resourses_id, HELTHCARE_RESOURCES_POST_TAG, array ( 'fields' => 'all' ) );
                            $properties_media_cat_id = $properties_media_cat[ 0 ]->term_id;
                            $media_icon              = get_field( 'healthcare_media_type_icon_image', 'resourses_media_type_' . $properties_media_cat_id );
                            $media_icon_url          = ! empty( $media_icon ) ? $media_icon[ 'url' ] : '#';
                            $media_icon_alt          = ! empty( $media_icon[ 'alt' ] ) ? $media_icon[ 'alt' ] : get_bloginfo();
                            ?>
                            <div class="box">
                                <div class="insights-img">
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
                                    <?php } if ( ! empty( $resourses_content ) && $counter == 0 ) { ?>
                                        <p><?php echo $resourses_content; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php
                            $counter ++;
                        }wp_reset_query();
                        wp_reset_postdata();
                    }
                }
                ?>
            </div>
            <div class="insights-resources-section-btn">
                <?php if ( ! empty( $reso_list_cta ) ) { ?>
                    <a href="<?php echo $reso_list_cta_link; ?>" class="btn btn-tertiary-transparent" target="<?php echo $reso_list_cta_target; ?>"><?php echo $reso_list_cta_title; ?><span><svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"/>
                            </svg>
                        </span></a>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>

