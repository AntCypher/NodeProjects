<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage HELTHCARE
 * @since Helthcare 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) { ?>
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php } ?>
        <?php
        if ( class_exists( 'acf' ) ) {
            $favicon = get_field( 'helthcare_options_favicon', 'option' );
            if ( ! empty( $favicon ) ) {
                ?>
                <!-- Favicon -->
                <link rel="shortcut icon" href="<?php echo $favicon[ 'url' ]; ?>" type="image/x-icon" />
                <?php
            }
        }
        ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php
        if ( class_exists( 'acf' ) ) {
            $header_logo = get_field( 'helthcare_options_h_logo', 'option' );
            if ( ! empty( $header_logo ) ) {
                $header_logo_url = ! empty( $header_logo[ 'url' ] ) ? $header_logo[ 'url' ] : '';
                $header_logo_alt = ! empty( $header_logo_alt[ 'alt' ] ) ? $header_logo_alt[ 'alt' ] : get_bloginfo();
            }
            $cta_btn = get_field( 'helthcare_options_h_cta', 'option' );
            if ( ! empty( $cta_btn ) ) {
                $cta_title = $cta_btn[ 'title' ];
                $cta_url   = $cta_btn[ 'url' ];
            }
            $login_btn = get_field( 'helthcare_options_h_lgn_btn', 'option' );
            if ( ! empty( $login_btn ) ) {
                $login_title = $login_btn[ 'title' ];
                $login_url   = $login_btn[ 'url' ];
            }
        }
        $lining_class = get_field( 'helthcare_page_lining_css', get_the_ID() );
        if ( $lining_class == 'page-template-primary-line' ) {
            $lining_class = 'page-template-primary-line';
        } elseif ( $lining_class == 'page-template-secondary-line' ) {
            $lining_class = 'page-template-secondary-line';
        } elseif ( $lining_class == 'default' ) {
            $lining_class = 'default';
        }
        ?>
        <div id="main-wrapper" class="<?php echo $lining_class; ?>">
            <header id="main-header">
                <div class="header-inner">
                    <div class="header-row">
                        <?php if ( ! empty( $header_logo ) ) { ?>
                            <div class="header-logo">
                                <a href="<?php echo site_url(); ?>">
                                    <img src="<?php echo $header_logo_url; ?>" alt="<?php echo $header_logo_alt; ?>" title="<?php bloginfo( 'name' ); ?>">
                                </a>
                            </div>
                        <?php } ?>
                        <div class="header-right">
                            <nav id="header-navigation" class="header-navigation">
                                <?php
                                wp_nav_menu( array (
                                    'theme_location' => 'header',
                                    'menu_class'     => 'main-menu'
                                ) );
                                ?>

                            </nav>

                            <a class="menu-icon" href="#" title="Menu"><span class="header-navigation-icon"><i></i></span></a>

                            <div class="mobile-header">
                                <nav id="mobile-header-navigation" class="mobile-header-navigation">
                                    <?php
                                    wp_nav_menu( array (
                                        'menu'       => 36,
                                        'menu_class' => 'main-mobile-menu'
                                    ) );
                                    ?>

                                </nav>

                                <div class="header-inner-right">
                                    <?php if ( ! empty( $cta_btn ) ) { ?>
                                        <div class="header-btn">
                                            <a href="<?php echo $cta_url; ?>" class="btn btn-tertiary"><?php echo $cta_title; ?><span><img src="<?php echo HELTHCARE_IMAGE_PATH ?>/btn-arrow-whaite.svg" alt=""></span></a>
                                        </div>
                                    <?php } ?>
                                    <?php if ( ! empty( $login_btn ) ) { ?>
                                        <div class="header-login">
                                            <a href="<?php echo $login_url; ?>"><?php echo $login_title; ?></a>
                                        </div>
                                    <?php } ?>
                                    <div class="header-search">
                                        <a href="javascript:;"><img src="<?php echo HELTHCARE_IMAGE_PATH ?>/search-glass.svg" alt="<?php bloginfo( 'name' ); ?>"></a>
                                    </div>
                                    <div class="header-search-form">
                                        <?php echo get_search_form(); ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>