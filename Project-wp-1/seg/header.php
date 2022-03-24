<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage SEG
 * @since Seg 1.0
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
            $favicon = get_field( 'seg_options_favicon', 'option' );
            if ( ! empty( $favicon ) ) {
                ?>
                <!-- Favicon -->
                <link rel="shortcut icon" href="<?php echo $favicon; ?>" type="image/x-icon" />
                <?php
            }
        }
        ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php
        if ( class_exists( 'acf' ) ) {
            $hide_header = get_field( 'seg_gens_hide_header', get_the_ID() );
            $header_logo = get_field( 'seg_options_site_logo', 'option' );
            if ( ! empty( $header_logo ) ) {
                $header_logo_url = ! empty( $header_logo ) ? $header_logo[ 'url' ] : '';
                $header_logo_alt = ! empty( $header_logo[ 'alt' ] ) ? $header_logo[ 'alt' ] : get_bloginfo();
            }
            $transaction_cta = get_field( 'seg_options_head_tra', 'option' );
            $contact_cta     = get_field( 'seg_options_head_contact', 'option' );
            if ( ! empty( $transaction_cta ) ) {
                $tra_title  = $transaction_cta[ 'title' ];
                $tra_url    = $transaction_cta[ 'url' ];
                $tra_target = $transaction_cta[ 'target' ];
            }
            if ( ! empty( $contact_cta ) ) {
                $contact_cta_title  = $contact_cta[ 'title' ];
                $contact_cta_url    = $contact_cta[ 'url' ];
                $contact_cta_target = $contact_cta[ 'target' ];
            }
        }
        ?>
        <div class="main-wrapper">
            <?php if ( ! $hide_header ) { ?>
                <header class="main-header">
                    <div class="header-inner">
                        <div class="container">
                            <div class="row">
                                <?php if ( ! empty( $header_logo ) ) { ?>
                                    <div class="header-logo">
                                        <a href="<?php echo site_url(); ?>">
                                            <img src="<?php echo $header_logo_url; ?>" alt="<?php echo $header_logo_alt; ?>">
                                        </a>
                                    </div>
                                <?php } ?>
                                <div class="header-right">
                                    <a class="menu-icon" href="#" title="Menu"><span class="header-navigation-icon"><i></i></span></a>
                                    <div class="header-right-inner">
                                        <div class="header-navigation-container">
                                            <nav class="header-navigation">
                                                <?php
                                                wp_nav_menu( array (
                                                    'theme_location' => 'header',
                                                    'menu_class'     => 'main-menu',
                                                ) );
                                                ?>
                                            </nav>
                                            <div class="header-btns-search">
                                                <div class="header-btns">
                                                    <?php if ( ! empty( $transaction_cta ) ) { ?>
                                                        <a href="<?php echo $tra_url; ?>" class="btn btn-primary" target="<?php echo $tra_target; ?>"><?php echo $tra_title; ?></a>
                                                    <?php } ?>
                                                    <?php if ( ! empty( $contact_cta ) ) { ?>
                                                        <a href="<?php echo $contact_cta_url; ?>" class="btn btn-primary-transparent" target="<?php echo $contact_cta_target; ?>"><?php echo $contact_cta_title; ?></a>
                                                    <?php } ?>
                                                </div>
                                                <div class="header-search">
                                                    <a href="javascript:void(0);" class="header-search-icon"><img src="<?php echo get_template_directory_uri() ?>/images/search.png" alt=""></a>
                                                    <div class="header-search-form">
                                                        <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                                            <input type="text" class="header-search-input" name="s"  placeholder="Enter search">
                                                            <button class="header-search-button">
                                                                <i class="fas fa-search"></i>
                                                            </button>
                                                            <a class="header-search-close">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
                                                            </a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="header-space"></div>
            <?php } ?>





