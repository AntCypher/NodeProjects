

<!--    $(".people-box .btn-arrow").click(function(){
      $("#peopleModal").addClass("show");
    });
    $("#peopleModal .close_btn").click(function(){
      $("#peopleModal").removeClass('show');
    });-->

<?php
if ( class_exists( 'acf' ) ) {
    $title              = get_sub_field( 'title' );
    $description        = get_sub_field( 'description' );
    $show_default       = get_sub_field( 'select_team_type' );
    $select_custom_team = get_sub_field( 'select_teams' );
}
$args = array (
    'post_type'   => SEG_TEAM_POST_TYPE,
    'post_status' => 'publish',
    'order'       => 'ASC',
);
if ( ! $show_default ) {
    $args[ 'posts_per_page' ] = -1;
}
if ( $show_default ) {
    $args[ 'posts_per_page' ] = -1;
    $args[ 'post__in' ]       = $select_custom_team;
    $args[ 'orderby' ]        = "post__in";
}
//
$team_query = new WP_Query( $args );
?>

<section class="people-section">
    <div class="container">
        <div class="sect_header">
            <?php if ( ! empty( $title ) ) { ?>
                <h2><?php echo $title; ?></h2>
            <?php } echo $description; ?>
        </div>
        <div class="row">
            <?php
            $count = 0;
            while ( $team_query->have_posts() ) {
                $team_query->the_post();
                $team_id          = get_the_ID();
                $team_title       = get_the_title();
                $team_cta_label   = get_field( 'seg_team_person_bio_cta_label', $team_id );
                $team_designation = get_field( 'seg_team_person_designation', $team_id );
                $img_id           = get_post_thumbnail_id( $team_id );
                $image_alt        = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
                $team_thumbnail   = get_the_post_thumbnail_url();
                ?>
                <div class="col-25 pp-col">
                    <div class="people-box" id="peopleModal<?php echo $count; ?>">
                        <a href="javascript:;" class="btn-click">
                            <div class="people-box-inner">
                                <div class="people-img-wrapper">
                                    <img src="<?php echo $team_thumbnail; ?>" alt="<?php echo $image_alt; ?>">
                                </div>
                                <div class="people-contant-wrapper">
                                    <div class="pc-inner-wrapper">
                                        <?php if ( ! empty( $team_title ) ) { ?>
                                            <h3 class="title"><?php echo $team_title; ?></h3>
                                        <?php } if ( ! empty( $team_designation ) ) { ?>
                                            <p class="designation"><?php echo $team_designation; ?></p>
                                        <?php } if ( ! empty( $team_cta_label ) ) { ?>
                                            <span class="btn-arrow">
                                                <?php echo $team_cta_label; ?><span><img src="<?php echo get_theme_file_uri(); ?>/images/btn-arrow.png" alt=""></span>
                                            </span>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                $count ++;
            }

            wp_reset_query();
            wp_reset_postdata();
            ?>

        </div>
    </div>
</section>


<?php
$count = 0;
while ( $team_query->have_posts() ) {
    $team_query->the_post();
    $team_id                = get_the_ID();
    $team_title             = get_the_title();
    $team_content           = get_the_content();
//    $img_id                 = get_post_thumbnail_id( $team_id );
//    $image_alt              = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
//    $team_thumbnail         = get_the_post_thumbnail_url();
    $team_designation       = get_field( 'seg_team_person_designation', $team_id );
    $team_linkedin          = get_field( 'seg_team_linkedin_link', $team_id );
    $team_twitter           = get_field( 'seg_team_twitter_link', $team_id );
    $team_mail_link         = get_field( 'seg_team_mail_link', $team_id );
    $team_payment_link      = get_field( 'seg_team_payment_link', $team_id );
    $team_modal_img         = get_field( 'seg_team_modal_img', $team_id );

    $team_modal_img_url     = ! empty( $team_modal_img ) ? $team_modal_img[ 'url' ] : '#';
    $team_modal_img_alt     = ! empty( $team_modal_img[ 'alt' ] ) ? $team_modal_img[ 'alt' ] : get_bloginfo();
//    $img_id                 = get_post_thumbnail_id( $team_id );
//    $team_modal_img_alt              = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
//    $team_modal_img_url         = get_the_post_thumbnail_url();
    $team_highlight_title   = get_field( 'seg_team_career_highlight_title', $team_id );
    $team_highlight_content = get_field( 'seg_team_career_highlight_content', $team_id );
    $team_education_title   = get_field( 'seg_team_education_title', $team_id );
    $team_education_content = get_field( 'seg_team_education_content', $team_id );

    ?>
    <div class="modal people-modal" data-id="peopleModal<?php echo $count; ?>">
        <div class="modal-cn-wrapper">
            <a href="javascript:;" class="close_btn"></a>
            <div class="inner-wrapper">
                <div class="left-profile">
                    <div class="tProfile-box">
                        <?php if ( ! empty( $team_modal_img ) ) { ?>
                            <div class="tProfile-box-image">
                                <img src="<?php echo $team_modal_img_url; ?>" alt="<?php echo $team_modal_img_alt; ?>" />
                            </div>
                        <?php } ?>
                        <?php if ( ! empty( $team_title ) || ! empty( $team_designation ) ) { ?>
                            <div class="name-wrapper">
                                <div class="name-wrapper-inner">
                                    <h3 class="name"><?php echo $team_title; ?>, <span><?php echo $team_designation; ?></span></h3>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="contant-box">
                        <?php if ( ! empty( $team_linkedin ) || ! empty( $team_twitter ) || ! empty( $team_mail_link ) || ! empty( $team_payment_link ) ) { ?>
                            <ul class="social-lists">
                                <?php if ( ! empty( $team_linkedin ) ) { ?>
                                    <li class="social-item linkdin"><a href="<?php echo $team_linkedin; ?>" target="_blank"></a></li>
                                <?php } ?>
                                <?php if ( ! empty( $team_twitter ) ) { ?>
                                    <li class="social-item twitter"><a href="<?php echo $team_twitter; ?>" target="_blank"></a></li>
                                <?php } ?>
                                <?php if ( ! empty( $team_mail_link ) ) { ?>
                                    <li class="social-item mail"><a href="mailto:<?php echo $team_mail_link; ?>" target="_blank"></a></li>
                                <?php } ?>
                                <?php if ( ! empty( $team_payment_link ) ) { ?>
                                    <li class="social-item payment"><a href="<?php echo $team_payment_link; ?>" target="_blank"></a></li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="right-career-highlight">
                    <div class="inner-wrapper">
                        <?php if ( ! empty( $team_highlight_title ) ) { ?>
                            <h3 class="title"><?php echo $team_highlight_title; ?></h3>
                            <?php
                        } echo $team_highlight_content;
                        if ( ! empty( $team_education_title ) ) {
                            ?>
                            <h3 class="title"><?php echo $team_education_title; ?></h3>
                        <?php } echo $team_education_content; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $count ++;
}

wp_reset_query();
wp_reset_postdata();
?>