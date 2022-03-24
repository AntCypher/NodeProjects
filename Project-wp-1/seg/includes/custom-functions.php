<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;
/*
 * Escape Tags & Slashes
 * Handles escapping the slashes and tags
 */

function seg_escape_attr($data) {
    return ! empty( $data ) ? esc_attr( stripslashes( $data ) ) : '';
}

/*
 * Strip Slashes From Array
 */

function seg_escape_slashes_deep($data = array (), $flag = true) {
    if ( $flag != true ) {
        $data = seg_nohtml_kses( $data );
    }
    $data = stripslashes_deep( $data );
    return $data;
}

/*
 * Strip Html Tags 
 * 
 * It will sanitize text input (strip html tags, and escape characters)
 */

function seg_nohtml_kses($data = array ()) {
    if ( is_array( $data ) ) {
        $data = array_map( array ( $this, 'seg_nohtml_kses' ), $data );
    } elseif ( is_string( $data ) ) {
        $data = wp_filter_nohtml_kses( $data );
    }
    return $data;
}

/*
 * Display Short Content By Character
 */

function seg_excerpt_char($content, $length = 40) {
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

function seg_filter_search($query) {
//    if ( ! is_admin() && $query->is_search ) {
    if ( ! is_admin() ) {

        if ( $query->is_search || $query->is_category || $query->is_tag || $query->is_tax || $query->is_author || $query->is_archive ) {
            $query->set( 'post_type', array ( SEG_POST_POST_TYPE, SEG_PAGE_POST_TYPE, SEG_RESEARCH_POST_TYPE, SEG_TRANSACTION_POST_TYPE ) );
        }
    }
    return $query;
}

add_filter( 'pre_get_posts', 'seg_filter_search' );

/*
 * Remove wp logo from admin bar
 */

function seg_remove_wp_logo() {
    global $wp_admin_bar;

    if ( class_exists( 'acf' ) ) {
        $wp_help = get_field( 'seg_options_wp_help', 'option' );
        if ( empty( $wp_help ) ) {
            $wp_admin_bar->remove_menu( 'wp-logo' );
        }
    }
}

add_action( 'wp_before_admin_bar_render', 'seg_remove_wp_logo' );

/*
 * Custom login logo
 */

function seg_custom_login_logo() {
    if ( class_exists( 'acf' ) ) {
        $wp_login_logo    = get_field( 'seg_options_login_logo', 'option' );
        $wp_login_w       = get_field( 'seg_options_login_logo_w', 'option' );
        $wp_login_h       = get_field( 'seg_options_login_logo_h', 'option' );
        $wp_login_bg      = get_field( 'seg_options_login_bg', 'option' );
        $wp_login_btn_c   = get_field( 'seg_options_login_btn_color', 'option' );
        $wp_login_btn_c_h = get_field( 'seg_options_login_btn_color_h', 'option' );
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

add_action( 'login_enqueue_scripts', 'seg_custom_login_logo' );

/*
 * Change custom login page url
 */

function seg_loginpage_custom_link() {
    $site_url = esc_url( home_url( '/' ) );
    return $site_url;
}

add_filter( 'login_headerurl', 'seg_loginpage_custom_link' );

/*
 * Change title on logo
 */

function seg_change_title_on_logo() {
    $site_title = get_bloginfo( 'name' );
    return $site_title;
}

if ( version_compare( $GLOBALS[ 'wp_version' ], '5.2', '<' ) ) {
    add_filter( 'login_headertitle', 'seg_change_title_on_logo' );
} else {
    add_filter( 'login_headertext', 'seg_change_title_on_logo' );
}
/*
 * Change admin your favicon
 */

function seg_admin_favicon() {
    if ( class_exists( 'acf' ) ) {
        $favicon_url = get_field( 'seg_options_wp_favicon', 'option' );
        if ( ! empty( $favicon_url ) ) {
            echo '<link rel="icon" type="image/x-icon" href="' . $favicon_url . '" />';
        }
    }
}

add_action( 'login_head', 'seg_admin_favicon' );
add_action( 'admin_head', 'seg_admin_favicon' );

/*
 * add filter to add shortcode in widget
 */
add_filter( 'widget_text', 'do_shortcode' );
/*
 * add filter for svg
 */

add_filter( 'upload_mimes', 'add_file_types_to_uploads' );

function add_file_types_to_uploads($file_types) {
    $new_filetypes          = array ();
    $new_filetypes[ 'svg' ] = 'image/svg+xml';
    $file_types             = array_merge( $file_types, $new_filetypes );
    return $file_types;
}

/*
 * blog form shortcode
 */
add_shortcode( 'post_subscribe_form', 'subscribe_form_function' );

function subscribe_form_function() {
    $subscribe_form = ob_start();
    $form_subtitle  = get_field( 'seg_blog_contact_form_subtitle', 'option' );
    $form_title     = get_field( 'seg_blog_contact_form_title', 'option' );
    $form_sd        = get_field( 'seg_blog_contact_form_sd', 'option' );
    ?>
    <div class="right-Sform">
        <div class="subscribe-form">
            <div class="subscribe-form-inner">
                <div class="subscribe-form-ps-inner">
                    <h2 class="form-subtitle"><?php echo $form_subtitle; ?></h2>
                    <?php if ( ! empty( $form_title ) ) { ?>
                        <h2 class="form-title"><?php echo $form_title; ?></h2>
                    <?php } echo do_shortcode( $form_sd ); ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    $subscribe_form = ob_get_clean();
    return $subscribe_form;
}

/*
 * for primary terms of product
 */

function get_post_primary_category($post_id, $term = 'category', $return_all_categories = false) {
    $return = array ();

    if ( class_exists( 'WPSEO_Primary_Term' ) ) {
        // Show Primary category by Yoast if it is enabled & set
        $wpseo_primary_term = new WPSEO_Primary_Term( $term, $post_id );
        $primary_term       = get_term( $wpseo_primary_term->get_primary_term() );

        if ( ! is_wp_error( $primary_term ) ) {
            $return[ 'primary_category' ] = $primary_term;
        }
    }

    if ( empty( $return[ 'primary_category' ] ) || $return_all_categories ) {
        $categories_list = get_the_terms( $post_id, $term );

        if ( empty( $return[ 'primary_category' ] ) && ! empty( $categories_list ) ) {
            $return[ 'primary_category' ] = $categories_list[ 0 ];  //get the first category
        }
        if ( $return_all_categories ) {
            $return[ 'all_categories' ] = array ();

            if ( ! empty( $categories_list ) ) {
                foreach ( $categories_list as &$category ) {
                    $return[ 'all_categories' ][] = $category->term_id;
                }
            }
        }
    }

    return $return;
}

/*
 * for redirecting contact form to thank you page
 */

add_action( 'wp_footer', 'cf7_footer_script' );

function cf7_footer_script() {
    ?>
    <script>
        jQuery(document).ready(function () {
            document.addEventListener('wpcf7mailsent', function (event) {
                if (event.detail.contactFormId == '1031') {
                        window.open('https://seg.compview.co/18-factor-thank-you/');
//                    location = 'https://seg.compview.co/18-factor-thank-you/';
                }
            }, false);
        });
    </script>
    <?php
}
