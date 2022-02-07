<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage HELTHCARE
 * @since Helthcare 1.0
 */
get_header();
$default_image = get_field( 'helthcare_options_default_image_for_resourses', 'options' );
?>
<div class="main-resources-page">
    <section class="main-resources_banner">
        <div class="container">
            <div class="resources_banner-row">
                <div class="resources_banner-left">
                    <div class="resources_banner-heading">
                        <i class="brand-rounded-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/words-round-secondary.svg" alt=""></i>
                        <h1 class="resources_banner-title"><?php echo the_archive_title(); ?></h1>
                        <div class="resources_banner-subtitle">
                            <p><?php echo the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="resources_listing-section">
        <div class="container">
            <div class="resources_listing-right pagination_links">
                <div class="resources_box-row">
                    <?php
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post();
                            $resourses_id              = get_the_ID();
                            $resourses_title           = get_the_title();
                            $resourses_image           = get_the_post_thumbnail_url();
                            $resourses_image           = ! empty( $resourses_image ) ? $resourses_image : $default_image[ 'url' ];
                            $resourses_image_alt       = ! empty( $resourses_image[ 'alt' ] ) ? $resourses_image[ 'alt' ] : $default_image[ 'alt' ];
                            $resourses_content         = get_the_excerpt();
                            $resourses_cat             = get_the_term_list( $resourses_id, 'resourses_tax', '', ', ' );
                            $media_type                = get_the_term_list( $resourses_id, 'resourses_media_type', '', ', ' );
                            $post_permalink            = get_the_permalink();
                            $properties_media_cat      = wp_get_post_terms( get_the_ID(), HELTHCARE_RESOURCES_POST_TAG, array ( 'fields' => 'all' ) );
                            $properties_media_cat_id   = $properties_media_cat[ 0 ]->term_id;
                            $properties_media_cat_slug = $properties_media_cat[ 0 ]->slug;
                            $media_button_type         = get_field( 'healthcare_media_button_type', 'resourses_media_type_' . $properties_media_cat_id );
                            $media_icon                = get_field( 'healthcare_media_type_icon_image', 'resourses_media_type_' . $properties_media_cat_id );
                            $media_icon_url            = ! empty( $media_icon ) ? $media_icon[ 'url' ] : '#';
                            $media_icon_alt            = ! empty( $media_icon[ 'alt' ] ) ? $media_icon[ 'alt' ] : get_bloginfo();

                            if ( $properties_media_cat_slug == 'on-demand-webinars' ) {
                                $on_demand_length_of_time = get_field( 'helthcare_on_demand_length_time', $resourses_id );
                            }
                            if ( $properties_media_cat_slug == 'upcoming-webinars' ) {
                                $upcoming_time           = get_field( 'helthcare_upcomimg_time', $resourses_id );
                                $upcoming_date           = get_field( 'helthcare_upcomimg_date', $resourses_id );
                                $upcoming_length_of_time = get_field( 'helthcare_upcomimg_length_time', $resourses_id );
                            }
                            if ( $properties_media_cat_slug == 'podcasts' ) {
                                $pod_length_of_time = get_field( 'helthcare_podcast_length_time', $resourses_id );
                            }

                            if ( $properties_media_cat_slug == 'on-demand-webinars' ) {
                                $helthcare_reso_lenght_of_time = $on_demand_length_of_time;
                            } else if ( $properties_media_cat_slug == 'upcoming-webinars' ) {
                                $helthcare_reso_lenght_of_time = $upcoming_length_of_time;
                            } else if ( $properties_media_cat_slug == 'podcasts' ) {
                                $helthcare_reso_lenght_of_time = $pod_length_of_time;
                            }
                            ?>

                            <div class="resources_box-col">   
                                <div class="resources-box">
                                    <div class="resources-img">
                                        <?php if ( ! empty( $resourses_image ) ) { ?>
                                            <img src="<?php echo $resourses_image; ?>" alt="<?php echo $resourses_image_alt; ?>">
                                        <?php } ?>
                                        <div class="resources-cat">
                                            <?php if ( ! empty( $media_icon ) ) { ?>
                                                <div class="resources-cat-icon">
                                                    <img src="<?php echo $media_icon_url; ?>" alt="<?php echo $media_icon_alt; ?>">
                                                </div>
                                            <?php }if ( ! empty( $media_type ) ) { ?>
                                                <span>
                                                    <?php echo $media_type; ?>
                                                </span>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="resources-info">
                                        <?php if ( ! empty( $resourses_cat ) ) { ?>
                                            <div class="resources-subcat"><?php echo $resourses_cat; ?></div>
                                        <?php } ?>
                                        <?php if ( ! empty( $resourses_title ) ) { ?>
                                            <h2 class="resources-title">
                                                <a href="<?php echo $post_permalink; ?>"><?php echo $resourses_title; ?></a>
                                            </h2>
                                        <?php } ?>
                                        <?php if ( ! empty( $resourses_content ) ) { ?>
                                            <p><?php echo $resourses_content; ?></p>
                                        <?php } ?>
                                        <?php if ( ! empty( $upcoming_date ) ) { ?>
                                            <div class="resources-date">
                                                <span class="resources-date-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M15.1376 1.89282H14.1162V2.47655V3.28343C14.1162 3.93872 13.5851 4.46983 12.9298 4.46983H12.8527C12.1974 4.46983 11.6663 3.93872 11.6663 3.28343V2.47655V1.89282H5.23331V2.47655V3.28343C5.23331 3.93872 4.7022 4.46983 4.04691 4.46983H3.96983C3.31454 4.46983 2.78342 3.93872 2.78342 3.28343V2.47655V1.89282H1.88806C0.974843 1.89282 0.234375 2.63329 0.234375 3.5465V15.4326C0.234375 16.346 0.974843 17.0863 1.88806 17.0863H12.7574L13.5365 17.0604C13.6327 17.0326 13.7238 16.9824 13.7977 16.9044L16.4682 14.0935C16.4962 14.0641 16.5313 14.0229 16.5683 13.9778C16.7121 13.8021 16.7914 13.5819 16.7914 13.3547V3.54669C16.7914 2.63329 16.051 1.89282 15.1376 1.89282ZM13.5124 15.508V14.0652C13.5124 13.7977 13.73 13.5801 13.9975 13.5801H15.3442L13.5124 15.508ZM15.6227 12.4113H13.9975C13.0856 12.4113 12.3436 13.1533 12.3436 14.0652V15.9176H1.88806C1.62057 15.9176 1.40312 15.7001 1.40312 15.4326V6.16196H15.6227V12.4113Z" fill="#0E2050"/>
                                                    <path d="M4.04687 3.96029C4.42014 3.96029 4.72368 3.65674 4.72368 3.28348V1.33526C4.72368 0.961993 4.42014 0.658447 4.04687 0.658447H3.96978C3.59651 0.658447 3.29297 0.961993 3.29297 1.33526V3.28348C3.29297 3.65674 3.59651 3.96029 3.96978 3.96029H4.04687Z" fill="#0E2050"/>
                                                    <path d="M12.9297 3.96029C13.3029 3.96029 13.6067 3.65674 13.6067 3.28348V1.33526C13.6067 0.961993 13.3029 0.658447 12.9297 0.658447H12.8526C12.4793 0.658447 12.1758 0.961993 12.1758 1.33526V3.28348C12.1758 3.65674 12.4793 3.96029 12.8526 3.96029H12.9297Z" fill="#0E2050"/>
                                                    <path d="M4.58427 7.76892H3.2207V9.13249H4.58427V7.76892Z" fill="#0E2050"/>
                                                    <path d="M7.66825 7.76892H6.30469V9.13249H7.66825V7.76892Z" fill="#0E2050"/>
                                                    <path d="M10.7532 7.76892H9.38965V9.13249H10.7532V7.76892Z" fill="#0E2050"/>
                                                    <path d="M13.8372 7.76892H12.4736V9.13249H13.8372V7.76892Z" fill="#0E2050"/>
                                                    <path d="M4.58427 10.3986H3.2207V11.7621H4.58427V10.3986Z" fill="#0E2050"/>
                                                    <path d="M7.66825 10.3986H6.30469V11.7621H7.66825V10.3986Z" fill="#0E2050"/>
                                                    <path d="M10.7532 10.3986H9.38965V11.7621H10.7532V10.3986Z" fill="#0E2050"/>
                                                    <path d="M13.8372 10.3986H12.4736V11.7621H13.8372V10.3986Z" fill="#0E2050"/>
                                                    <path d="M4.58427 13.0282H3.2207V14.3918H4.58427V13.0282Z" fill="#0E2050"/>
                                                    <path d="M7.66825 13.0282H6.30469V14.3918H7.66825V13.0282Z" fill="#0E2050"/>
                                                    <path d="M10.7532 13.0282H9.38965V14.3918H10.7532V13.0282Z" fill="#0E2050"/>
                                                    </svg>
                                                </span>
                                                <span><?php echo $upcoming_date; ?></span>
                                            </div>
                                        <?php } ?>
                                        <?php if ( ! empty( $helthcare_reso_lenght_of_time ) || ! empty( $upcoming_time ) ) { ?>
                                            <div class="resources-video-time">
                                                <span class="resources-video-time-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <path d="M8.88102 16.7709C13.4095 16.7709 17.1146 13.0658 17.1146 8.53739C17.1146 4.00893 13.4095 0.303833 8.88102 0.303833C4.35256 0.303833 0.647461 4.00893 0.647461 8.53739C0.647461 13.0658 4.35256 16.7709 8.88102 16.7709ZM8.88102 0.81843C13.1522 0.81843 16.6 4.26623 16.6 8.53739C16.6 12.8085 13.1522 16.2563 8.88102 16.2563C4.60986 16.2563 1.16206 12.8085 1.16206 8.53739C1.16206 4.26623 4.60986 0.81843 8.88102 0.81843Z" fill="#0E2050"/>
                                                    <path d="M8.88087 15.3815C12.6374 15.3815 15.725 12.3454 15.725 8.53738C15.725 4.78082 12.6889 1.69324 8.88087 1.69324C7.33708 1.69324 5.79329 2.20783 4.60972 3.18557C3.42614 4.11184 2.60279 5.50126 2.24257 6.94213C2.19111 7.09651 2.29403 7.19943 2.44841 7.25089C2.60279 7.30235 2.70571 7.19943 2.75717 7.04505C3.42614 4.1633 5.94767 2.15638 8.88087 2.15638C12.3287 2.15638 15.159 4.98666 15.2104 8.48592C15.2104 11.9337 12.3801 14.764 8.88087 14.8155C5.63891 14.8155 2.86008 12.2939 2.60279 9.05198C2.60279 8.8976 2.44841 8.79468 2.34549 8.79468C2.29403 8.79468 2.19111 8.84614 2.19111 8.8976C2.13965 8.94906 2.13965 9.00052 2.13965 9.10344C2.29403 10.8016 3.06592 12.3969 4.30096 13.529C5.53599 14.7125 7.13124 15.3815 8.88087 15.3815Z" fill="#0E2050"/>
                                                    <path d="M2.34618 8.33137C2.50056 8.33137 2.60348 8.22845 2.60348 8.07407C2.60348 8.02261 2.60348 7.91969 2.55202 7.91969C2.50056 7.86823 2.4491 7.81677 2.39764 7.81677C2.24326 7.81677 2.14034 7.91969 2.14034 8.07407C2.08888 8.17699 2.1918 8.27991 2.34618 8.33137Z" fill="#0E2050"/>
                                                    <path d="M8.88132 4.0603C8.72694 4.0603 8.62402 4.16322 8.62402 4.3176V8.5373C8.62402 8.58876 8.62402 8.58876 8.62402 8.64022C8.62402 8.69168 8.67548 8.69168 8.67548 8.74314L10.9912 11.0588C11.0426 11.1103 11.0941 11.1103 11.197 11.1103C11.2999 11.1103 11.3514 11.1103 11.4028 11.0588C11.5058 10.9559 11.5058 10.8015 11.4028 10.6986L9.13862 8.43438V4.3176C9.13862 4.21468 9.0357 4.0603 8.88132 4.0603Z" fill="#0E2050"/>
                                                    </svg>
                                                </span>
                                                <span><?php
                                                    if ( ! empty( $upcoming_time ) ) {
                                                        echo $upcoming_time;
                                                        ?> |  <?php
                                                    } if ( ! empty( $helthcare_reso_lenght_of_time ) ) {
                                                        echo $helthcare_reso_lenght_of_time;
                                                    }
                                                    ?></span>
                                            </div>

                                        <?php } ?>
                                        <?php if ( ! empty( $media_button_type ) ) { ?>
                                            <div class="resources-box-btn">
                                                <a href="<?php echo $post_permalink; ?>" class="round-icon-btn" target="_blank">
                                                    <span>
                                                        <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path>
                                                        </svg>
                                                    </span><?php echo $media_button_type; ?>
                                                </a>
                                            </div>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        wp_reset_query();
                        wp_reset_postdata();
                    } else {
                        echo '<div class="resources_box-col"><h2>No Result Found</h2></div>';
                    }
                    ?>
                </div>
                <div class="paginationdemo">
                    <?php
                    $big = 999999999;
                    the_posts_pagination( array (
                        'base'         => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format'       => '?paged=%#%',
                        'prev_next'    => true,
                        'prev_text'    => sprintf( '<i></i> %1$s', __( '<', 'text-domain' ) ),
                        'next_text'    => sprintf( '%1$s <i></i>', __( '>', 'text-domain' ) ),
                        'add_args'     => false,
                        'add_fragment' => '',
                    ) );
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>