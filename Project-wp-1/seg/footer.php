<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage SEG
 * @since Seg 1.0
 */
if ( class_exists( 'acf' ) ) {
    if ( is_home() || is_archive() ) {
        $page_id = get_option( 'page_for_posts' );
    } else {
        $page_id = get_the_ID();
    }   
    $hide_lets_talk_section = get_field( 'seg_gens_hide_lets_talk_section', $page_id );
    $hide_footer_area       = get_field( 'seg_gens_hide_footer_area', $page_id );
    $footer_logo            = get_field( 'seg_options_site_logo', 'option' );
    $address                = get_field( 'seg_options_address', 'option' );
    $follow_title           = get_field( 'seg_options_s_follow', 'option' );
    $social_links           = get_field( 'seg_options_s_social_link', 'option' );
    $get_eval_cta           = get_field( 'seg_options_footer_get_eval', 'option' );
    $footer_contact         = get_field( 'seg_options_footer_contact', 'option' );
    $suf_title              = get_field( 'seg_options_footer_suf_title', 'option' );
    $suf_text               = get_field( 'seg_options_footer_suf_text', 'option' );
    $suf_script             = get_field( 'seg_options_footer_suf_script', 'option' );
    $copyright              = get_field( 'seg_options_footer_copyright_links', 'option' );

    $group        = get_field( 'seg_options_letstalk_content', 'option' );
    $general_logo = $group[ 'letstalk_logo' ];
    $general_bg   = $group[ 'letstalk_bg_img' ];
    $general_con  = $group[ 'letstalk_content' ];
    $general_cta  = $group[ 'letstalk_cta' ];

    $single_logo    = $group[ 'letstalk_ti_logo' ];
    $single_bg      = $group[ 'letstalk_ti_bg_img' ];
    $single_content = $group[ 'letstalk_ti_content' ];
    $single_cta     = $group[ 'letstalk_ti_cta' ];
//    echo "<pre>";
//    print_r($single_content);
//    echo "</pre>";
//    echo "<pre>";
//    print_r( $general_logo );
//    echo "</pre>";
//    $lets_talk_logo = get_field( 'seg_options_letstalk_logo', 'option' );
//
//    $lets_talk_bg      = get_field( 'seg_options_letstalk_bg_img', 'option' );
//    $lets_talk_content = get_field( 'seg_options_letstalk_content', 'option' );
//    $lets_talk_cta     = get_field( 'seg_options_letstalk_cta', 'option' );
    $privacy_cta    = get_field( 'seg_options_footer_privacy_link', 'option' );
    $terms_cta      = get_field( 'seg_options_footer_terms_use', 'option' );
    if ( ! empty( $general_bg ) ) {
        $general_bg_url = ! empty( $general_bg ) ? $general_bg[ 'url' ] : '';
    }
    if ( ! empty( $general_logo ) ) {
        $general_logo_url = ! empty( $general_logo ) ? $general_logo[ 'url' ] : '';
        $general_logo_alt = ! empty( $general_logo[ 'alt' ] ) ? $general_logo[ 'alt' ] : get_bloginfo();
    }
    if ( ! empty( $single_bg ) ) {
        $single_bg_url = ! empty( $single_bg ) ? $single_bg[ 'url' ] : '';
    }
    if ( ! empty( $single_logo ) ) {
        $single_logo_url = ! empty( $single_logo ) ? $single_logo[ 'url' ] : '';
        $single_logo_alt = ! empty( $single_logo[ 'alt' ] ) ? $single_logo[ 'alt' ] : get_bloginfo();
    }
//    if ( ! empty( $lets_talk_bg ) ) {
//        $lets_talk_bg_url = ! empty( $lets_talk_bg ) ? $lets_talk_bg[ 'url' ] : '';
//    }
    if ( ! empty( $footer_logo ) ) {
        $footer_logo_url = ! empty( $footer_logo ) ? $footer_logo[ 'url' ] : '';
        $footer_logo_alt = ! empty( $footer_logo[ 'alt' ] ) ? $footer_logo[ 'alt' ] : get_bloginfo();
    }
//    if ( ! empty( $lets_talk_logo ) ) {
//        $lets_talk_logo_url = ! empty( $lets_talk_logo ) ? $lets_talk_logo[ 'url' ] : '';
//        $lets_talk_logo_alt = ! empty( $lets_talk_logo[ 'alt' ] ) ? $lets_talk_logo[ 'alt' ] : get_bloginfo();
//    }
    if ( ! empty( $get_eval_cta ) ) {
        $get_eval_cta_title  = $get_eval_cta[ 'title' ];
        $get_eval_cta_url    = $get_eval_cta[ 'url' ];
        $get_eval_cta_target = $get_eval_cta[ 'target' ];
    }
    if ( ! empty( $footer_contact ) ) {
        $footer_contact_title  = $footer_contact[ 'title' ];
        $footer_contact_url    = $footer_contact[ 'url' ];
        $footer_contact_target = $footer_contact[ 'target' ];
    }
    if ( ! empty( $lets_talk_cta ) ) {
        $lets_talk_cta_title  = $lets_talk_cta[ 'title' ];
        $lets_talk_cta_url    = $lets_talk_cta[ 'url' ];
        $lets_talk_cta_target = $lets_talk_cta[ 'target' ];
    }
    if ( ! empty( $privacy_cta ) ) {
        $privacy_cta_title  = $privacy_cta[ 'title' ];
        $privacy_cta_url    = $privacy_cta[ 'url' ];
        $privacy_cta_target = $privacy_cta[ 'target' ];
    }
    if ( ! empty( $terms_cta ) ) {
        $terms_cta_title  = $terms_cta[ 'title' ];
        $terms_cta_url    = $terms_cta[ 'url' ];
        $terms_cta_target = $terms_cta[ 'target' ];
    }
}
?>
<footer class="main-footer">
    <?php
    if ( ! $hide_lets_talk_section || is_search() ) {

        if ( is_singular( 'transactions' ) ) {
            ?>
            <section class="letstalk-section" style="background-image: url('<?php echo $single_bg_url; ?>')" >
                <div class="container">
                    <?php if ( ! empty( $single_logo ) ) { ?>
                        <div class="letstalk-logo">
                            <img src="<?php echo $single_logo_url; ?>" alt="<?php echo $single_logo_alt; ?>">
                        </div>
                    <?php } ?>
                    <?php if ( ! empty( $single_content ) ) { ?>
                        <div class="letstalk-contain">
                            <p><?php echo $single_content; ?></p>
                        </div>
                    <?php } ?>
                    <?php if ( ! empty( $single_cta ) ) { ?>
                        <div class="letstalk-btn">
                            <a href="<?php echo $single_cta[ 'url' ]; ?>" class="btn btn-primary" target="<?php echo $single_cta[ 'target' ]; ?>"><?php echo $single_cta[ 'title' ]; ?></a>
                        </div>
                    <?php } ?>
                </div>
            </section>
        <?php } else { ?>
            <section class="letstalk-section" style="background-image: url('<?php echo $general_bg_url; ?>')" >
                <div class="container">
                    <?php if ( ! empty( $general_logo ) ) { ?>
                        <div class="letstalk-logo">
                            <img src="<?php echo $general_logo_url; ?>" alt="<?php echo $general_logo_alt; ?>">
                        </div>
                    <?php } ?>
                    <?php if ( ! empty( $general_con ) ) { ?>
                        <div class="letstalk-contain">
                            <p><?php echo $general_con; ?></p>
                        </div>
                    <?php } ?>
                    <?php if ( ! empty( $general_cta ) ) { ?>
                        <div class="letstalk-btn">
                            <a href="<?php echo $general_cta[ 'url' ]; ?>" class="btn btn-primary" target="<?php echo $general_cta[ 'target' ]; ?>"><?php echo $general_cta[ 'title' ]; ?></a>
                        </div>
                    <?php } ?>
                </div>
            </section>

            <?php
        }
    }
    ?>
    <?php if ( ! $hide_footer_area ) { ?>
        <div class="footer-inner">
            <div class="container">
                <div class="row">
                    <div class="footer-col footer-left-col">
                        <?php if ( ! empty( $footer_logo ) ) { ?>
                            <div class="footer-logo">
                                <a href="<?php echo site_url(); ?>">
                                    <img src="<?php echo $footer_logo_url; ?>" alt="<?php echo $footer_logo_alt; ?>">
                                </a>
                            </div>
                        <?php } ?>
                        <?php if ( ! empty( $address ) ) { ?>
                            <div class="footer-address">
                                <p><?php echo $address; ?></p>
                            </div>
                        <?php } ?>
                        <div class="footer-btns">
                            <?php if ( ! empty( $get_eval_cta ) ) { ?>
                                <a href="<?php echo $get_eval_cta_url; ?>" class="btn btn-primary" target="<?php echo $get_eval_cta_target; ?>"><?php echo $get_eval_cta_title; ?></a>
                            <?php } if ( ! empty( $footer_contact ) ) { ?>
                                <a href="<?php echo $footer_contact_url; ?>" class="btn btn-primary-transparent" target="<?php echo $footer_contact_target; ?>"><?php echo $footer_contact_title; ?></a>
                            <?php } ?>
                        </div>
                        <div class="footer-social">
                            <?php if ( ! empty( $follow_title ) ) { ?>
                                <div class="footer-social-title"><?php echo $follow_title; ?></div>
                            <?php } ?>
                            <?php if ( ! empty( $social_links ) ) { ?>
                                <ul  class="footer-social-menu">
                                    <?php
                                    foreach ( $social_links as $key => $value ) {
                                        $cta = $value[ 'links' ];
                                        if ( ! empty( $cta ) ) {
                                            $title  = $cta[ 'title' ];
                                            $url    = $cta[ 'url' ];
                                            $target = $cta[ 'target' ];
                                        }
                                        ?>
                                        <li><a href="<?php echo $url; ?>" target="<?php echo $target; ?>"><?php echo $title; ?></a></li>
                                    <?php }
                                    ?>
                                </ul>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="footer-col footer-center-col">
                        <div class="footer-menu-list">
                            <div class="footer-menu-row">
                                <div class="footer-menu-col">
                                    <?php
                                    wp_nav_menu( array (
                                        'theme_location' => 'header',
                                        'menu_class'     => 'footer-menu',
                                    ) );
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="footer-col footer-right-col">
                        <div class="footer-newsletter">
                            <?php if ( ! empty( $suf_title ) ) { ?>
                                <div class="footer-newsletter-title"><?php echo $suf_title; ?></div>
                            <?php } if ( ! empty( $suf_text ) ) { ?>
                                <div class="footer-newsletter-sub-title"><?php echo $suf_text; ?></div>
                            <?php } if ( ! empty( $suf_script ) ) { ?>
                                <div class="footer-newsletter-form">
                                    <?php echo do_shortcode( $suf_script ); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="footer-copyrigt">
        <div class="container">
            <?php
            if ( ! empty( $copyright ) ) {
                $current_year    = date( 'Y' );
                $final_copyright = str_replace( "%var%", $current_year, $copyright );
                ?>
                <div class="row">
                    <div class="copyrigt-col">
                        <?php echo $final_copyright; ?>
                        <div>
                            <?php if ( ! empty( $privacy_cta ) ) { ?>
                                <a href="<?php echo $privacy_cta_url; ?>" target="<?php echo $privacy_cta_target; ?>"><?php echo $privacy_cta_title; ?></a>
                            <?php } if ( ! empty( $terms_cta ) ) { ?>
                                <a href="<?php echo $terms_cta_url; ?>" target="<?php echo $terms_cta_target; ?>"><?php echo $terms_cta_title; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</footer>
</div>




<!--footer html here-->
<?php wp_footer(); ?>
</body>
</html>
