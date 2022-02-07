<?php
if ( class_exists( 'acf' ) ) {
    $team_mem_sec_title = get_sub_field( 'helthcare_team_mem_title' );
    $team_members       = get_sub_field( 'helthcare_team_mem_t_members' );
}
$args       = array (
    'post_type'   => 'team',
    'post_status' => 'publish',
    'post__in'    => $team_members,
    'orderby'     => 'post__in',
);
$team_query = new WP_Query( $args );
?>
<?php if ( ! empty( $team_mem_sec_title ) || ! empty( $team_members ) ) { ?>
    <section class="leadership" id="leadership">
        <?php if ( ! empty( $team_mem_sec_title ) ) { ?>
            <div class="title-part">
                <h2><?php echo $team_mem_sec_title; ?></h2>
            </div>
        <?php } ?>
        <div class="leadership-accordion">
            <?php
            if ( $team_query->have_posts() ) {
                while ( $team_query->have_posts() ) {
                    $team_query->the_post();
                    $team_id          = get_the_ID();
                    $team_title       = get_the_title();
                    $team_content     = get_the_excerpt();
                    $team_image       = get_the_post_thumbnail_url();
                    $img_id           = get_post_thumbnail_id( $team_id );
                    $image_alt        = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
                    $default_image    = get_field( 'helthcare_options_default_image_for_resourses', 'options' );
                    $team_image       = ! empty( $team_image ) ? $team_image : $default_image[ 'url' ];
                    $team_image_alt   = ! empty( $image_alt) ? $image_alt : $default_image[ 'alt' ];
                    $post_permalink   = get_the_permalink();
                    $team_designation = get_field( 'helthcare_team_designation', $team_id );
                    ?>
                    <div class="leadership-set">
                        <?php if ( ! empty( $team_image ) ) { ?>
                            <div class="leader-img"><img src="<?php echo $team_image; ?>" alt="<?php echo $team_image_alt; ?>"></div>
                        <?php } ?>
                        <div class="leader-info">
                            <div class="title">
                                <?php if ( ! empty( $team_title ) ) { ?>
                                    <h3><?php echo $team_title; ?></h3>
                                <?php } if ( ! empty( $team_designation ) ) { ?>
                                    <h6><?php echo $team_designation; ?></h6>
                                <?php } ?>
                            </div>
                            <div class="arrow-accordion">
                                <span>
                                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path>
                                    </svg>
                                </span>
                            </div>
                            <?php if ( ! empty( $team_content ) ) { ?>
                                <div class="leader-content" style="display: none;">
                                    <p><?php echo $team_content; ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php
                } wp_reset_query();
                wp_reset_postdata();
            }
            ?>
        </div>
    </section>
<?php } ?>