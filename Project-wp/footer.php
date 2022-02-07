<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage HELTHCARE
 * @since Helthcare 1.0
 */
if ( class_exists( 'acf' ) ) {
    $footer_logo      = get_field( 'helthcare_options_f_logo', 'option' );
    $footer_logo_url  = ! empty( $footer_logo[ 'url' ] ) ? $footer_logo[ 'url' ] : '';
    $footer_logo_alt  = ! empty( $footer_logo[ 'alt' ] ) ? $footer_logo[ 'alt' ] : get_bloginfo();
    $copyright        = get_field( 'helthcare_options_f_copy', 'option' );
    $menu_content     = get_field( 'helthcare_options_f_menus_content', 'option' );
    $social_title     = get_field( 'helthcare_options_s_media_title', 'option' );
    $fb_logo_link     = get_field( 'helthcare_options_s_fb_link', 'option' );
    $insta_logo_link  = get_field( 'helthcare_options_s_in_link', 'option' );
    $yt_logo_link     = get_field( 'helthcare_options_s_yt_link', 'option' );
    $tw_logo_link     = get_field( 'helthcare_options_s_tw_link', 'option' );
    $linked_logo_link = get_field( 'helthcare_options_s_li_link', 'option' );
}
?>



<footer id="main-footer">
    <div class="footer-inner">
        <div class="container">
            <div class="footer-row">
                <?php if ( ! empty( $footer_logo ) ) { ?>
                    <div class="footer-logo">
                        <a href="<?php echo site_url(); ?>">
                            <img src="<?php echo $footer_logo_url; ?>" alt="<?php echo $footer_logo_alt; ?>">
                        </a>
                        <?php
                    }
                    if ( ! empty( $copyright ) ) {
                        $current_year    = date( 'Y' );
                        $final_copyright = str_replace( "%var%", $current_year, $copyright );
                        ?>
                        <div class="copyright"><?php echo $final_copyright; ?></div>
                    </div>
                <?php } ?>
                <div class="footer-right">
                    <div class="footer-right-row">
                        <?php
                        if ( ! empty( $menu_content ) ) {
                            foreach ( $menu_content as $menu_con_value ) {
                                $menu_title = $menu_con_value[ 'helthcare_f_menu_title' ];
                                $menus      = $menu_con_value[ 'helthcare_f_menu' ];
                                ?>
                                <div class="footer-menu-col">
                                    <?php if ( ! empty( $menu_title ) ) { ?>
                                        <h4><?php echo $menu_title; ?></h4>
                                        <?php
                                    }
                                    if ( ! empty( $menus ) ) {
                                        wp_nav_menu( array (
                                            'theme_location' => $menus,
                                            'menu_class'     => 'footer-menu'
                                        ) );
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                        }
                        ?>
                        <div class="footer-menu-col">
                            <?php if ( ! empty( $social_title ) ) { ?>
                                <h4><?php echo $social_title; ?></h4>
                            <?php } ?>
                            <ul class="footer-social-menu">
                                <?php if ( ! empty( $fb_logo_link ) ) { ?>
                                    <li><a href="<?php echo $fb_logo_link; ?>"><i class="fab fa-facebook-f"></i></a></li>
                                <?php } if ( ! empty( $insta_logo_link ) ) { ?>
                                    <li><a href="<?php echo $insta_logo_link; ?>"><i class="fab fa-instagram"></i></a></li>
                                <?php } if ( ! empty( $yt_logo_link ) ) { ?>
                                    <li><a href="<?php echo $yt_logo_link; ?>"><i class="fab fa-youtube"></i></a></li>
                                <?php } if ( ! empty( $tw_logo_link ) ) { ?>
                                    <li><a href="<?php echo $tw_logo_link; ?>"><i class="fab fa-twitter"></i></a></li>
                                <?php } ?>
                                <?php if ( ! empty( $linked_logo_link ) ) { ?>
                                    <li><a href="<?php echo $linked_logo_link; ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                        <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div> <!-- main-wrapper -->

<?php wp_footer(); ?>
</body>
</html>
