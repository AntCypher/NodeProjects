<?php
// Exit if accessed directly
if( ! defined ( 'ABSPATH' ) )
    exit;
/*
 * Template Name: Login Template
 *
 * @package WordPress
 * @subpackage helthcare
 * @since helthcare 1.0
 */
get_header ();
?>
<section class="information-form">
    <div class="container">
        <div class="information-inner">
            <div class="default-form">
                <table>
                    <tr>
                        <td><?php echo do_shortcode ( '[gravityform action="login" description="false" login_redirect="' . site_url () . '" registration_link_display="false" forgot_password_display="false" logged_in_message="Yay! You are logged in!<a href="' . wp_logout_url () . '">Logout</a>" registration_link_text="Register for my super awesome site" forgot_password_text="Stop forgetting your password" /]' ); ?></td>
                        <td><?php echo do_shortcode ( '[gravityform id="2" title="true" description="true"]' ); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
<?php
get_footer ();

