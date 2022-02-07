<?php
add_shortcode( 'custom_menu_case_study', 'wpdocs_footag_func' );

function wpdocs_footag_func($atts) {
    ob_start();
    $args = array (
        'numberposts' => -1,
        'post_type'   => HELTHCARE_RESOURCES_POST_TYPE,
        'meta_query'  => array (
            'relation' => 'AND',
            array (
                'key'     => 'helthcare_highlighted_resource',
                'value'   => 'add',
                'compare' => 'LIKE',
            )
        ),
    );

    $resourses_query = new WP_Query( $args );
    $post_count      = $resourses_query->post_count;
    if ( $resourses_query->have_posts() ) {
        if ( $post_count > 1 ) {
            echo '<div class="menu_case_study-carousel">';
        }
        while ( $resourses_query->have_posts() ) {
            $resourses_query->the_post();
            $resourses_id        = get_the_ID();
            $resourses_title     = get_the_title();
            $resourses_image     = get_the_post_thumbnail_url();
            $img_id              = get_post_thumbnail_id( $resourses_id );
            $image_alt           = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
            $default_image       = get_field( 'helthcare_options_default_image_for_resourses', 'options' );
            $resourses_image     = ! empty( $resourses_image ) ? $resourses_image : $default_image[ 'url' ];
            $resourses_image_alt = ! empty( $image_alt ) ? $image_alt : $default_image[ 'alt' ];
            $resourses_cat       = get_the_term_list( $resourses_id, HELTHCARE_RESOURCES_POST_TAX, '', ', ' );
            $post_permalink      = get_the_permalink();
            ?>
            <div class="menu_case_study">
                <div class="menu_case_study-box">
                    <?php if ( ! empty( $resourses_image ) ) { ?>
                        <div class="menu_case_study-img">
                            <img src="<?php echo $resourses_image; ?>" alt="<?php echo $resourses_image_alt; ?>">
                        </div>
                    <?php } ?>
                    <div class="menu_case_study-info">
                        <?php if ( ! empty( $resourses_cat ) ) { ?>
                            <div class="case-study-info-subtitle"><?php echo $resourses_cat; ?></div>
                        <?php } if ( ! empty( $resourses_title ) ) { ?>
                            <h2 class="case-study-info-title"><a href="<?php echo $post_permalink; ?>"><?php echo $resourses_title; ?></a></h2>
                            <?php } ?>
                    </div>
                </div>
            </div>
            <?php
        }
        if ( $post_count > 1 ) {
            echo '</div>';
        }
        wp_reset_query();
        wp_reset_postdata();
    }
    ?>
    <?php
    return ob_get_clean();
}
