<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;
/*
 * Escape Tags & Slashes
 * Handles escapping the slashes and tags
 */

function helthcare_escape_attr($data) {
    return ! empty( $data ) ? esc_attr( stripslashes( $data ) ) : '';
}

/*
 * Strip Slashes From Array
 */

function helthcare_escape_slashes_deep($data = array (), $flag = true) {
    if ( $flag != true ) {
        $data = helthcare_nohtml_kses( $data );
    }
    $data = stripslashes_deep( $data );
    return $data;
}

/*
 * Strip Html Tags 
 * 
 * It will sanitize text input (strip html tags, and escape characters)
 */

function helthcare_nohtml_kses($data = array ()) {
    if ( is_array( $data ) ) {
        $data = array_map( array ( $this, 'helthcare_nohtml_kses' ), $data );
    } elseif ( is_string( $data ) ) {
        $data = wp_filter_nohtml_kses( $data );
    }
    return $data;
}

/*
 * Display Short Content By Character
 */

function helthcare_excerpt_char($content, $length = 40) {
    $text = '';
    if ( ! empty( $content ) ) {
        $text         = strip_shortcodes( $content );
        $text         = str_replace( ']]>', ']]&gt;', $text );
        $text         = strip_tags( $text );
        $excerpt_more = apply_filters( 'excerpt_more', ' ' . ' ...' );
        $text         = substr( $text, 0, $length );
        $text         = $text . $excerpt_more;
    }
    return $text;
}

/*
 * search in posts and pages
 */

function helthcare_filter_search($query) {
    if ( ! is_admin() ) {
        if ( $query->is_search || $query->is_category || $query->is_tag || $query->is_tax || $query->is_author || $query->is_archive ) {
            $query->set( 'post_type', array ( HELTHCARE_RESOURCES_POST_TYPE ) );
        }
    }
    return $query;
}

add_filter( 'pre_get_posts', 'helthcare_filter_search' );

/*
 * Remove wp logo from admin bar
 */

function helthcare_remove_wp_logo() {
    global $wp_admin_bar;

    if ( class_exists( 'acf' ) ) {
        $wp_help = get_field( 'helthcare_options_wp_help', 'option' );
        if ( empty( $wp_help ) ) {
            $wp_admin_bar->remove_menu( 'wp-logo' );
        }
    }
}

add_action( 'wp_before_admin_bar_render', 'helthcare_remove_wp_logo' );

/*
 * Custom login logo
 */

function helthcare_custom_login_logo() {
    if ( class_exists( 'acf' ) ) {
        $wp_login_logo    = get_field( 'helthcare_options_login_logo', 'option' );
        $wp_login_w       = get_field( 'helthcare_options_login_logo_w', 'option' );
        $wp_login_h       = get_field( 'helthcare_options_login_logo_h', 'option' );
        $wp_login_bg      = get_field( 'helthcare_options_login_bg', 'option' );
        $wp_login_btn_c   = get_field( 'helthcare_options_login_btn_color', 'option' );
        $wp_login_btn_c_h = get_field( 'helthcare_options_login_btn_color_h', 'option' );
        if ( ! empty( $wp_login_logo ) ) {
            ?>
            <style type="text/css">
                .login h1 a {
                    background-image: url('<?php echo $wp_login_logo; ?>') !important;
                    background-size: <?php echo $wp_login_w . 'px'; ?> auto !important;
                    height: <?php echo $wp_login_h . 'px'; ?> !important;
                    width: <?php echo $wp_login_w . 'px'; ?> !important;
                }
            </style>
            <?php
        }
        if ( ! empty( $wp_login_bg ) ) {
            ?>
            <style type="text/css">
                body.login{
                    background: #133759 url("<?php echo $wp_login_bg; ?>") no-repeat center;
                    background-size: cover;
                }
                body.login div#login form#loginform input#wp-submit {
                    background-color: <?php echo $wp_login_btn_c; ?> !important;
                }
                body.login div#login form#loginform input#wp-submit:hover {
                    background-color: <?php echo $wp_login_btn_c_h; ?> !important;
                }
            </style>
            <?php
        }
    }
}

add_action( 'login_enqueue_scripts', 'helthcare_custom_login_logo' );

/*
 * Change custom login page url
 */

function helthcare_loginpage_custom_link() {
    $site_url = esc_url( home_url( '/' ) );
    return $site_url;
}

add_filter( 'login_headerurl', 'helthcare_loginpage_custom_link' );

/*
 * Change title on logo
 */

function helthcare_change_title_on_logo() {
    $site_title = get_bloginfo( 'name' );
    return $site_title;
}

if ( version_compare( $GLOBALS[ 'wp_version' ], '5.2', '<' ) ) {
    add_filter( 'login_headertitle', 'helthcare_change_title_on_logo' );
} else {
    add_filter( 'login_headertext', 'helthcare_change_title_on_logo' );
}


/*
 * Change admin your favicon
 */

function helthcare_admin_favicon() {
    if ( class_exists( 'acf' ) ) {
        $favicon_url = get_field( 'helthcare_options_wp_favicon', 'option' );
        if ( ! empty( $favicon_url ) ) {
            echo '<link rel="icon" type="image/x-icon" href="' . $favicon_url . '" />';
        }
    }
}

add_action( 'login_head', 'helthcare_admin_favicon' );
add_action( 'admin_head', 'helthcare_admin_favicon' );

/*
 * add filter to add shortcode in widget
 */
add_filter( 'widget_text', 'do_shortcode' );
/*
 * add filter to add svg image
 */

function add_file_types_to_uploads($file_types) {
    $new_filetypes          = array ();
    $new_filetypes[ 'svg' ] = 'image/svg+xml';
    $file_types             = array_merge( $file_types, $new_filetypes );
    return $file_types;
}

add_filter( 'upload_mimes', 'add_file_types_to_uploads' );
/*
 * add filter to add menu choices in acf
 */

function acf_dynamic_dropdown_menus($field) {
    $menu[ 'nothing' ]  = 'Select Options';
    $menus              = $menu + get_registered_nav_menus();
    $field[ 'choices' ] = $menus;
    return $field;
}

add_filter( 'acf/prepare_field/name=helthcare_f_menu', 'acf_dynamic_dropdown_menus' );

/*
 * get_the_excerpt without continue reading 
 */

add_filter( 'excerpt_more', '__return_empty_string', 21 );

function wpse_134143_excerpt_more_link( $excerpt ) {
    $excerpt .= sprintf( 
            '... <a href="%s">%s</a>.',
            esc_url( get_permalink() ),
            __( 'continue reading' )
    );
    return $excerpt;
}
add_filter( 'the_excerpt', 'wpse_134143_excerpt_more_link', 21 );