<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;

/**
 * Template Name: Landing Page Template
 *
 * @package WordPress
 * @subpackage seg
 * @since seg 1.0
 */
get_header();
?>
<!--HTML HERE-->
    <div class="landing-hero-section">        
            <div class="container">
                <div class="landing-hero">
                <div class="left-image-part">
                    <img src="<?php echo get_theme_file_uri();?>/images/Factors-to-track-software-business.png"/>
                </div>
                <div class="right-content-part">
                    <h6>Exclusive white paper</h6>
                    <h1>What’s your software company worth?</h1>
                    <p>Are you a software executive looking at a potential exit, or acquisition? Don’t guess, know your worth. Software Equity Group’s complimentary new whitepaper can help you be sure.</p>
                    <div class="download-btn-wrap">
                        <a data-fancybox data-src="#landing-hero-popup" href="javascript:;" class="btn">Download your full copy</a>
                        <div style="display: none;" id="landing-hero-popup" class="landing-hero-popup">
                            <h4>Download your copy</h4>
                            <h2>18 Factors to Track When Valuing Your Software Business</h2>
                          <?php echo do_shortcode( '[contact-form-7 id="1031" title="Download The Factor Form"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="score-section">
        <div class="container">
            <div class="score-content">
                <h2>Know the score.</h2>
                <p>SEG’s time- and transaction-tested business valuation scorecard takes the guesswork out of estimating your software company’s value.</p>
            </div>
        </div>
    </div>
    <div class="landing-zigzag-section">
        <div class="container">
            <div class="landing-two-column">
                <div class="landing-left-column">
                    <div class="image-wrap">
                        <img src="<?php echo get_theme_file_uri();?>/images/landing-image-01.png"/>
                    </div>
                </div>
                <div class="landing-right-column">
                    <div class="landing-right-content-wrap">
                        <div class="landing-right-content">
                            <h4>It’s more than the numbers.</h4>
                            <p>Your company is more than the bottom line. Your delivery model, growth potential, even your management team are all considerations.</p>
                        </div>  
                    </div>                    
                </div>
            </div>
            <div class="landing-two-column">
                <div class="landing-left-column">
                    <div class="image-wrap">
                        <img src="<?php echo get_theme_file_uri();?>/images/landing-image-02.png"/>
                    </div>
                </div>
                <div class="landing-right-column">
                    <div class="landing-right-content-wrap">
                        <div class="landing-right-content">
                            <h4>Biggest? Or best?</h4>
                            <p>You don’t have to be the biggest player in your software space to be the most attractive to potential buyers. SEG’s Kris Beible guides you through what his team looks for when positioning your firm for offers.</p>
                        </div>  
                    </div>                    
                </div>
            </div>
            <div class="landing-two-column">
                <div class="landing-left-column">
                    <div class="image-wrap">
                        <img src="<?php echo get_theme_file_uri();?>/images/landing-image-03.png"/>
                    </div>
                </div>
                <div class="landing-right-column">
                    <div class="landing-right-content-wrap">
                        <div class="landing-right-content">
                            <h4>Know your goals</h4>
                            <p>Are you looking to sell to a private equity firm or strategic buyer? Merge with another company? Beginning the valuation process with clearly-defined goals puts you on a clear path toward a successful exit.</p>
                        </div>  
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <div class="journey-section">
        <div class="journey-two-column">
            <div class="journey-left-column">
                <div class="journey-content">
                    <h2>Every journey starts with a single step.</h2>
                    <p>Well-positioned software companies don’t happen by accident, and they don’t get there overnight. Start your company’s journey with SEG’s complimentary 18 Factors to Track When Valuing Your Software Business.</p>
                    <a href="" class="btn btn-primary">Download the 18 factors</a>
                </div>                
            </div>
            <div class="journey-right-column">
                <span class="journey-shapes"></span>
                <div class="journey-aerrow">
                    <img src="https://seg.compview.co/wp-content/themes/seg/images/score-aerrow.png"/>
                </div>
            </div>
        </div>
    </div>

    <div class="factore-section">
        <div class="container">
            <div class="section-header">
                <h2>Weigh & interpret the factors that matter.</h2>
                <h3>What you’ll discover in this white paper</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>

            <div class="factore-detail">
                <div class="quantitative-factore">
                    <h3>QUANTITATIVE FACTORS</h3>
                    <ul>
                        <li>ARR / Recurring Revenue Growth <div class="tooltip"><img src="https://seg.compview.co/wp-content/themes/seg/images/info-icon.png"/><span class="tooltiptext">Net includes upsells or increased usage</span></div></li>
                        <li>Rule 40 <div class="tooltip"><img src="https://seg.compview.co/wp-content/themes/seg/images/info-icon.png"/><span class="tooltiptext">Net includes upsells or increased usage</span></div></li>
                        <li>Gross Revenue Retention Rate <div class="tooltip"><img src="https://seg.compview.co/wp-content/themes/seg/images/info-icon.png"/><span class="tooltiptext">Net includes upsells or increased usage</span></div></li>
                        <li>Net Revenue Retention Rate <div class="tooltip"><img src="https://seg.compview.co/wp-content/themes/seg/images/info-icon.png"/><span class="tooltiptext">Net includes upsells or increased usage</span></div></li>
                        <li>LTV : CAC <div class="tooltip"><img src="https://seg.compview.co/wp-content/themes/seg/images/info-icon.png"/><span class="tooltiptext">Net includes upsells or increased usage</span></div></li>
                        <li>% Recurring Revenue <div class="tooltip"><img src="https://seg.compview.co/wp-content/themes/seg/images/info-icon.png"/><span class="tooltiptext">Net includes upsells or increased usage</span></div></li>
                        <li>Gross Margins <div class="tooltip"><img src="https://seg.compview.co/wp-content/themes/seg/images/info-icon.png"/><span class="tooltiptext">Net includes upsells or increased usage</span></div></li>
                        <li>Client Concentration (Top 10) <div class="tooltip"><img src="https://seg.compview.co/wp-content/themes/seg/images/info-icon.png"/><span class="tooltiptext">Net includes upsells or increased usage</span></div></li>
                        <li>Total Revenue <div class="tooltip"><img src="https://seg.compview.co/wp-content/themes/seg/images/info-icon.png"/><span class="tooltiptext">Net includes upsells or increased usage</span></div></li>
                        <li>EBITDA Margin <div class="tooltip"><img src="https://seg.compview.co/wp-content/themes/seg/images/info-icon.png"/><span class="tooltiptext">Net includes upsells or increased usage</span></div></li>
                    </ul>
                </div>
                <div class="qualitative-factore">
                    <h3>QUALITATIVE FACTORS</h3>
                    <ul>
                        <li>Delivery Model <div class="tooltip"><img src="https://seg.compview.co/wp-content/themes/seg/images/info-icon.png"/><span class="tooltiptext">Net includes upsells or increased usage</span></div></li>
                        <li>Product <div class="tooltip"><img src="https://seg.compview.co/wp-content/themes/seg/images/info-icon.png"/><span class="tooltiptext">Net includes upsells or increased usage</span></div></li>
                        <li>Technology <div class="tooltip"><img src="https://seg.compview.co/wp-content/themes/seg/images/info-icon.png"/><span class="tooltiptext">Net includes upsells or increased usage</span></div></li>
                        <li>Market Growth <div class="tooltip"><img src="https://seg.compview.co/wp-content/themes/seg/images/info-icon.png"/><span class="tooltiptext">Net includes upsells or increased usage</span></div></li>
                        <li>Market Attractiveness <div class="tooltip"><img src="https://seg.compview.co/wp-content/themes/seg/images/info-icon.png"/><span class="tooltiptext">Net includes upsells or increased usage</span></div></li>
                        <li>Management Team <div class="tooltip"><img src="https://seg.compview.co/wp-content/themes/seg/images/info-icon.png"/><span class="tooltiptext">Net includes upsells or increased usage</span></div></li>
                        <li>Total Addressable Market <div class="tooltip"><img src="https://seg.compview.co/wp-content/themes/seg/images/info-icon.png"/><span class="tooltiptext">Net includes upsells or increased usage</span></div></li>
                        <li>Market Position <div class="tooltip"><img src="https://seg.compview.co/wp-content/themes/seg/images/info-icon.png"/><span class="tooltiptext">Net includes upsells or increased usage</span></div></li>
                    </ul>
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
                    <h2>25 years of experience.</h2>
                    <h3>90% first-pass success rate.</h3>
                    <p>Well-positioned software companies don’t happen by accident, and they don’t get there overnight. Start your company’s journey with SEG’s complimentary 18 Factors to Track When Valuing Your Software Business.</p>
                    <a href="" class="btn btn-primary">Download the 18 factors</a>
                </div> 
            </div>
        </div>
    </div>


<?php get_footer(); ?>