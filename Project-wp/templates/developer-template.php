<?php
// Exit if accessed directly
if( ! defined ( 'ABSPATH' ) )
    exit;
/*
 * Template Name: Developer Test Template
 *
 * @package WordPress
 * @subpackage helthcare
 * @since helthcare 1.0
 */
wp_head ();
?>
<style>
    table,
    table td {
        border: 1px solid #cccccc;
    }
    td {
        height: 80px;
        width: 160px;
        text-align: center;
        vertical-align: middle;
    }
</style>
<p></p>
<p></p>
<p></p>
<p></p>


</br>
</br>
</br>
</br>
</br>
</br>
<?php

echo "<pre>";
print_r(get_post_meta(442));
echo "</pre>";
//$html = '<div class=news-box>
//
//   <h2>Heading</h2>
//   <p>afsdfdfha adhfaksdhf adfhakhf <a href="#">adfhaskfdha</a> fsahfkasdhfaasfdjhasdf ahdfkahsd123</p>
//   <p>afsdfdfha adhfaksdhf adfhakhf adfhaskfdha fsahfkasdhfaasfdjhasdf 453345</p>
//   <p>afsdfdfha adhfaksdhf adfhakhf adfhaskfdha fsahfkasdhfaasfdjhasdf ahdfkahsd789789</p>
//   <p>yuoyuouoyuoyuyu oyuiouioyuioyuyiouyoiy youyoiyuioyuioyuyoiuyiuyiyuioyu 908909</p>
//</div>';
//
////Create a new DOM document
//$dom  = new DOMDocument;
//
////Parse the HTML. The @ is used to suppress any parsing errors
////that will be thrown if the $html string isn't valid XHTML.
//@$dom->loadHTML ( $html );
//
////Get all links. You could also use any other tag name here,
////like 'img' or 'table', to extract other tags.
//$links = $dom->getElementsByTagName ( 'p' );
//
////Iterate over the extracted links and display their URLs
//foreach ( $links as $link ) {
//    
//    echo "<pre>";
//    print_r($link);
//    echo "</pre>";
//    //Extract and show the "href" attribute. 
////    echo $link->getAttribute ( 'href' ), '<br>';
//}

//$content = array ();
//foreach ( $html1->find ( 'div.story-box p' ) as $e ) {
//    $content[] = $e;
//}
//echo "<pre>";
//print_r($content);
//echo "</pre>";
?>

<table>
    <tr>
        <td><?php // echo do_shortcode ( '[gravityform action="login" description="false" login_redirect="' . site_url () . '" registration_link_display="false" forgot_password_display="false" logged_in_message="Yay! You are logged in!<a href="' . wp_logout_url () . '">Logout</a>" registration_link_text="Register for my super awesome site" forgot_password_text="Stop forgetting your password" /]' );    ?></td>
        <td><?php // echo do_shortcode ( '[gravityform id="2" title="true" description="true"]' );    ?></td>
    </tr>
</table>




<!--<div id="main-wrapper">
    <header id="main-header">
        <div class="header-inner">
            <div class="header-row">
                <div class="header-right">

                    <nav id="header-navigation" class="header-navigation">
                        <ul id="menu-header-menu" class="main-menu">
                            <li class="menu-item">
                                <a href="#">Why Take Action Now</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Capabilities</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Resources</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Member Benefits</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">About</a>
                            </li>
                        </ul>


                    </nav>
                </div>
            </div>
        </div>
</div>
</div>
</div>-->
<?php
wp_footer ();


echo do_shortcode('[custom_menu_case_study]');
// get_footer(); ?>