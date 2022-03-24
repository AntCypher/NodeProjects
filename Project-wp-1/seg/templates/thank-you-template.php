<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;

/**
 * Template Name:Thank-you Template
 *
 * @package WordPress
 * @subpackage seg
 * @since seg 1.0
 */
get_header();
?>
<!--HTML HERE-->

<div class="ty-banner-section">
    <div class="container">
        <div class="ty-content-wrap">
            <div class="logo-img-wrap">
                <img src="<?php echo get_theme_file_uri();?>/images/seg-dark-logo.png" />
            </div>
            <div class="ty-content">
                <h1>Your whitepaper is ready.</h1>
                <p>Access SEG’s 18 Factors to Track When Valuing Your Software Business below or download your pdf copy here.</p>
                <div class="ty-btn-wrap">
                    <a href="https://seg.compview.co" class="btn btn-primary" target="">Download your pdf <img src="<?php echo get_theme_file_uri();?>/images/download-icon.png"/> </a>
                </div>
            </div>
        </div>
    </div>
    <div class="ty-shadow">
        <img src="<?php echo get_theme_file_uri();?>/images/landing-image-shadow.png" />
    </div>
    <div class="ty-aerrow">
        <img src="<?php echo get_theme_file_uri();?>/images/ty-banner-aerrow.png" />
    </div>
</div>

<div class="ty-whitepaper-section">
    <div class="container">
        <div class="ty-section-header">
            <h3>View the SEG whitepaper here</h3>
        </div>
        <div class="ty-seg-slider">
            <div class="ty-item">
                <div class="ty-image-wrap">
                    <img src="<?php echo get_theme_file_uri();?>/images/slide-image-1.jpg"/>
                </div>
            </div>
            <div class="ty-item">
                <div class="ty-image-wrap">
                    <img src="<?php echo get_theme_file_uri();?>/images/slide-image-1.jpg"/>
                </div>
            </div>
            <div class="ty-item">
                <div class="ty-image-wrap">
                    <img src="<?php echo get_theme_file_uri();?>/images/slide-image-1.jpg"/>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="experience-section">
    <div class="experience-two-column">
        <div class="experience-left-column">
             <span class="experience-shapes"></span>
            <div class="experience-aerrow">
                <img src="https://seg.compview.co/wp-content/themes/seg/images/score-aerrow.png"/>
            </div>
            <div class="experience-detail">
                <img src="https://seg.compview.co/wp-content/themes/seg/images/experience-image-2.png"/>
                <div class="experience-info">
                    <sapn><strong>Kris Beible,</strong> EVP of SEG </sapn> 
                </div>
            </div>              
        </div>
        <div class="experience-right-column"> 
            <div class="experience-content">
                <h2>Our team of experienced M&A Advisors understand value drivers.</h2>
                <p>We provide insight on how to make your company more attractive to investors long before you’re ready to market it.</p>
                <a href="" class="btn btn-primary">Let’s discuss your business</a>
            </div> 
        </div>
    </div>
</div>


<?php get_footer(); ?>


