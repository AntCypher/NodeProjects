<?php
if ( class_exists( 'acf' ) ) {
    $page_id             = get_the_id();
    $is_resource_banner  = get_sub_field( 'helthcare_is_resource_banner', $page_id );
    $res_banner_title    = get_sub_field( 'helthcare_res_banner_title', $page_id );
    $res_banner_subtitle = get_sub_field( 'helthcare_res_banner_subtitle', $page_id );
    $high_top_title      = get_sub_field( 'helthcare_res_banner_high_top_title', $page_id );
    $fixed_high_content  = get_sub_field( 'helthcare_res_banner_fixed_high_content', $page_id );
    $is_resource_filter  = get_sub_field( 'helthcare_is_resource_filter', $page_id );
    $res_media_title     = get_sub_field( 'helthcare_res_filter_media_title', $page_id );
    $res_cat_title       = get_sub_field( 'helthcare_res_filter_cat_title', $page_id );

    $res_filter_s_title    = get_sub_field( 'helthcare_res_filter_s_title', $page_id );
    $res_filter_s_img      = get_sub_field( 'helthcare_res_filter_s_img', $page_id );
    $res_filter_s_img_url  = ! empty( $res_filter_s_img[ 'url' ] ) ? $res_filter_s_img[ 'url' ] : '#';
    $res_filter_s_img_alt  = ! empty( $res_filter_s_img[ 'alt' ] ) ? $res_filter_s_img[ 'alt' ] : get_bloginfo();
    $res_filter_s_logo     = get_sub_field( 'helthcare_res_filter_s_logo', $page_id );
    $res_filter_s_logo_url = ! empty( $res_filter_s_logo[ 'url' ] ) ? $res_filter_s_logo[ 'url' ] : '#';
    $res_filter_s_logo_alt = ! empty( $res_filter_s_logo[ 'alt' ] ) ? $res_filter_s_logo[ 'alt' ] : get_bloginfo();
    $res_filter_s_info     = get_sub_field( 'helthcare_res_filter_s_info', $page_id );
    $res_filter_s_cta      = get_sub_field( 'helthcare_res_filter_s_cta', $page_id );
    if ( ! empty( $res_filter_s_cta ) ) {
        $filter_cta_title  = $res_filter_s_cta[ 'title' ];
        $filter_cta_link   = $res_filter_s_cta[ 'url' ];
        $filter_cta_target = $res_filter_s_cta[ 'target' ];
    }

    $defArr[ 'res_filter_s_title' ]    = htmlentities( $res_filter_s_title );
    $defArr[ 'res_filter_s_img_url' ]  = htmlentities( $res_filter_s_img_url );
    $defArr[ 'res_filter_s_img_alt' ]  = htmlentities( $res_filter_s_img_alt );
    $defArr[ 'res_filter_s_logo_url' ] = htmlentities( $res_filter_s_logo_url );
    $defArr[ 'res_filter_s_logo_alt' ] = htmlentities( $res_filter_s_logo_alt );
    $defArr[ 'res_filter_s_info' ]     = htmlentities( $res_filter_s_info );
    $defArr[ 'filter_cta_title' ]      = htmlentities( $filter_cta_title );
    $defArr[ 'filter_cta_link' ]       = htmlentities( $filter_cta_link );
    $defArr[ 'filter_cta_target' ]     = htmlentities( $filter_cta_target );
}
?>
<div class="main-resources-page">    
    <?php
    if ( $is_resource_banner ) {
        if ( ! empty( $res_banner_title ) || ! empty( $res_banner_subtitle ) || ! empty( $high_top_title ) || ! empty( $fixed_high_content ) ) {
            ?>
            <section class="main-resources_banner" id="main-resources_banner">
                <div class="container">
                    <div class="resources_banner-row">
                        <div class="resources_banner-left">
                            <div class="resources_banner-heading">
                                <?php if ( ! empty( $res_banner_title ) ) { ?>
                                    <h1 class="resources_banner-title"><?php echo $res_banner_title; ?></h1>
                                <?php } ?>
                                <?php if ( ! empty( $res_banner_subtitle ) ) { ?>
                                    <div class="resources_banner-subtitle">
                                        <p><?php echo $res_banner_subtitle; ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="resources_banner-right">
                            <div class="highlighted_resources">
                                <?php if ( ! empty( $high_top_title ) ) { ?>
                                    <div class="highlighted_resources-title"><h2><?php echo $high_top_title; ?></h2></div>
                                <?php } ?>
                                <?php if ( ! empty( $fixed_high_content ) ) { ?>
                                    <div class="highlighted_resources-row">
                                        <?php
                                        foreach ( $fixed_high_content as $fixed_high_key => $fixed_content ) {
                                            $fixed_img     = $fixed_content[ 'resource_image' ];
                                            $fixed_btn     = $fixed_content[ 'resource_btn' ];
                                            $fixed_img_url = ! empty( $fixed_img[ 'url' ] ) ? $fixed_img[ 'url' ] : '#';
                                            $fixed_img_alt = ! empty( $fixed_img[ 'alt' ] ) ? $fixed_img[ 'alt' ] : get_bloginfo();
                                            $fixed_title   = $fixed_content[ 'resource_title' ];
                                            $fixed_content = $fixed_content[ 'resource_content' ];
                                            ?>
                                            <div class="highlighted_resources-col">

                                                <div class="selected-resources-box">
                                                    <a href="<?php echo $fixed_btn; ?>" class="box-anchr">
                                                        <div class="resources-img">
                                                            <img src="<?php echo $fixed_img_url; ?>" alt="<?php echo $fixed_img_alt; ?>">
                                                        </div>
                                                        <div class="resources-info">
                                                            <h2 class="resources-title"><?php echo $fixed_title; ?></h2>
                                                            <?php echo $fixed_content; ?>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                                <?php
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
                                ?>

                                <div class = "highlighted_resources-row">
                                    <?php
                                    if ( $resourses_query->have_posts() ) {
                                        while ( $resourses_query->have_posts() ) {
                                            $resourses_query->the_post();
                                            $resourses_id            = get_the_ID();
                                            $resourses_title         = get_the_title();
                                            $resourses_image         = get_the_post_thumbnail_url();
                                            $img_id                  = get_post_thumbnail_id( $resourses_id );
                                            $image_alt               = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
                                            $default_image           = get_field( 'helthcare_options_default_image_for_resourses', 'options' );
                                            $resourses_image         = ! empty( $resourses_image ) ? $resourses_image : $default_image[ 'url' ];
                                            $resourses_image_alt     = ! empty( $image_alt ) ? $image_alt : $default_image[ 'alt' ];
                                            $resourses_content       = get_the_excerpt();
                                            $post_permalink          = get_the_permalink();
                                            $resourses_cat           = get_the_term_list( $resourses_id, HELTHCARE_RESOURCES_POST_TAX, '', ', ' );
                                            $media_type              = get_the_term_list( $resourses_id, HELTHCARE_RESOURCES_POST_TAG, '', ', ' );
                                            $properties_media_cat    = wp_get_post_terms( $resourses_id, HELTHCARE_RESOURCES_POST_TAG, array ( 'fields' => 'all' ) );
                                            $properties_media_cat_id = $properties_media_cat[ 0 ]->term_id;
                                            $media_icon              = get_field( 'healthcare_media_type_icon_image', 'resourses_media_type_' . $properties_media_cat_id );
                                            $media_icon_url          = ! empty( $media_icon ) ? $media_icon[ 'url' ] : '#';
                                            $media_icon_alt          = ! empty( $media_icon[ 'alt' ] ) ? $media_icon[ 'alt' ] : get_bloginfo();
                                            ?>
                                            <div class = "highlighted_resources-col">
                                                <div class = "resources-box">
                                                    <div class = "resources-img">
                                                        <?php if ( ! empty( $resourses_image ) ) { ?>
                                                            <img src = "<?php echo $resourses_image; ?>" alt = "<?php echo $resourses_image_alt; ?>">
                                                        <?php } ?>
                                                        <div class = "resources-cat">
                                                            <?php if ( ! empty( $media_icon ) ) { ?>
                                                                <div class="resources-cat-icon">
                                                                    <img src="<?php echo $media_icon_url; ?>" alt="<?php echo $media_icon_alt; ?>">
                                                                </div>
                                                            <?php } if ( ! empty( $media_type ) ) { ?>
                                                                <span>
                                                                    <?php echo $media_type; ?>
                                                                </span>
                                                            <?php } ?>
                                                        </div>
                                                    </div>

                                                    <div class = "resources-info">
                                                        <?php if ( ! empty( $resourses_title ) ) { ?>
                                                            <h2 class = "resources-title">
                                                                <a href = "<?php echo $post_permalink; ?>"><?php echo $resourses_title; ?></a>
                                                            </h2>
                                                        <?php } if ( ! empty( $resourses_content ) ) { ?>
                                                            <p><?php echo $resourses_content; ?></p>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        wp_reset_query();
                                        wp_reset_postdata();
                                    }
                                    ?>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        }
    }
    ?>
    <?php
    if ( $is_resource_filter ) {
        $categories      = get_terms(
                array (
                    'taxonomy'   => HELTHCARE_RESOURCES_POST_TAX,
                    'hide_empty' => false,
                )
        );
        $medias          = get_terms(
                array (
                    'taxonomy'   => HELTHCARE_RESOURCES_POST_TAG,
                    'hide_empty' => false,
                )
        );
        $res_media_title = ! empty( $res_media_title ) ? $res_media_title : 'MEDIA TYPE';
        $res_cat_title   = ! empty( $res_cat_title ) ? $res_cat_title : 'CATEGORY';
        ?>
        <section class="resources_listing-section" data-defdata='<?php echo json_encode( $defArr ); ?>' id="resources_listing-section"> 
            <div class="container">
                <div class="resources_listing-row">
                    <div class="resources_listing-left">
                        <div class="clear_all">Clear Filter</div>
                        <div class="resources_listing-col">
                            <h3 class="radio-group-title"><?php echo $res_media_title; ?></h3>
                            <ul class="radio-group media_type-group">
                                <?php
                                if ( ! empty( $medias ) ) {
                                    foreach ( $medias as $media ) {
                                        ?>
                                        <li>
                                            <input type="radio" name="media" class="resources_media" id="media_<?php echo $media->term_id; ?>" value="<?php echo $media->term_id; ?>">
                                            <label for="media_<?php echo $media->term_id; ?>"> <?php echo $media->name; ?></label>
                                        </li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="resources_listing-col">
                            <h3 class="radio-group-title"><?php echo $res_cat_title; ?></h3>
                            <ul class="radio-group category-group">
                                <?php
                                if ( ! empty( $categories ) ) {
                                    foreach ( $categories as $category ) {
                                        ?>
                                        <li>
                                            <input type="radio" name="category" class="resources_category" id="category_<?php echo $category->term_id; ?>" value="<?php echo $category->term_id; ?>">
                                            <label for="category_<?php echo $category->term_id; ?>"><?php echo $category->name; ?></label>
                                        </li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>

                    <!--<div class="resources_listing-right pagination_links">-->
                    <?php get_posts_for_pagination(); ?>
                    <!--</div>-->
                </div>
            </div>
        </section>

    <?php } ?>
</div>


