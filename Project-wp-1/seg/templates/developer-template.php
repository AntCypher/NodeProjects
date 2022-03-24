<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;
/*
 * Template Name: Developer Test Template
 *
 * @package WordPress
 * @subpackage seg
 * @since seg 1.0
 */
get_header();
the_content();
?>
<?php
//$product  = get_terms(
//        array (
//            'taxonomy'   => SEG_PRODUCT_TAX,
//            'hide_empty' => false,
//        )
//);
//$vertical = get_terms(
//        array (
//            'taxonomy'   => SEG_VERTICAL_TAX,
//            'hide_empty' => false,
//        )
//);
/**
  ?>
  <div class = "searchSingle">
  <?php if ( ! empty( $product ) ) {
  ?>
  <div class="filter-label">
  <p>By product</p>
  </div>
  <div class="filter-info">
  <select id="productcat" class="productcategory">
  <option value="">Select category...</option>
  <?php foreach ( $product as $key => $value ) { ?>
  <option value="<?php echo $value->term_id; ?>" data-badge=""><?php echo $value->name; ?></option>
  <?php } ?>
  </select>
  </div>
  <?php } ?>
  </div>
  <div class = "searchSingle">
  <?php if ( ! empty( $vertical ) ) {
  ?>
  <div class="filter-label">
  <p>By vertical</p>
  </div>
  <div class="filter-info">
  <select id="verticalcat" class="verticalcategory">
  <option value="">Select category...</option>

  <?php foreach ( $vertical as $key => $value ) { ?>
  <option value="<?php echo $value->term_id; ?>" data-badge=""><?php echo $value->name; ?></option>
  <?php } ?>
  </select>
  </div>
  <?php } ?>
  </div>
  <div class="searchSingle">
  <div class="filter-label">
  <p>By Keyword</p>
  </div>
  <div class="filter-info">
  <input type="text" name="searchText" id="searchText" value="" placeholder="Search Here"/>
  </div>
  </div>
  <div class="row-transFilter">
  <div class="transFilter" id="appenddata">
  <?php transaction_cat_filter(); ?>
  </div>
  </div>
  <?php
 */
die;
?>
<section class="blog-listing-top-section">
    <div class="container">
        <div class="row">
            <div class="col-75">
                <div class="left-details">
                    <h6 class="sub-title">SOFTWARE EQUITY GROUP BLOG</h6>
                    <h1 class="main-heading">News & Insights</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                </div>
            </div>
            <div class="col-25">
                <div class="right-Sform">
                </div>
            </div>
        </div>
        <div class="blog-tags-search">
            <div class="left-tags">
                <div class="inner-wrapper">
                    <ul class="tags-list">
                        <li class="tag-item active"><a href="#" class="tag-link">All</a></li>
                        <li class="tag-item"><a href="#" class="tag-link">Deals</a></li>
                        <li class="tag-item"><a href="#" class="tag-link">Market Insights</a></li>
                        <li class="tag-item"><a href="#" class="tag-link">M&A Process</a></li>
                        <li class="tag-item"><a href="#" class="tag-link">Operations</a></li>
                    </ul>
                </div>
            </div>
            <div class="right-search">
                <div class="inner-wrapper">
                    <input class="search-input" type="search" name="" placeholder="Search articles" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="stickyM-blog-section">
    <div class="container">
        <div class="stickyM-blog-box">
            <div class="stickyM-blog-box-inner">
                <div class="stickyM-blog-box-col">
                    <div class="stickyM-blog-overview-box-contain">
                        <div class="stickyM-blog-overview-box-contain-inner">
                            <h3 class="stickyM-blog-box-title">MARKET INSIGHTS</h3>
                            <h5 class="stickyM-blog-subtitle">How Private Equity is Driving Diversity and Inclusion in the Software Industry</h5>
                            <h6 class="stickyM-blog-g-label">By SEG, October 5, 2021</h6>
                            <p class="stickyM-blog-text">The steady progress towards achieving greater diversity and inclusion at the company leadership level is being boosted by private equity firms that are increasingly demanding action over sentiment…</p>
                            <a href="#" class="btn-arrow">Access report<span><img src="https://seg.compview.co/wp-content/themes/seg/images/btn-arrow.png" alt=""></span></a>
                        </div>
                    </div>
                    <div class="stickyM-blog-logo-box">
                        <div class="stickyM-blog-overview-logo-inner">
                            <img src="https://seg.compview.co/wp-content/uploads/2022/03/blog-image-copy-2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="new-insight-listing">
    <div class="container">
        <div class="row">
            <div class="col-33">
                <div class="research-overview-box">
                    <div class="research-overview-box-inner">
                        <div class="research-overview-box-col">
                            <div class="research-overview-logo-box">
                                <div class="research-overview-logo-inner">
                                    <img src="https://seg.compview.co/wp-content/uploads/2022/03/blog-image-copy-2-1.png" alt="">
                                </div>
                            </div>
                            <div class="research-overview-box-contain">
                                <div class="research-overview-box-contain-inner">
                                    <h3 class="research-overview-box-title">DEALS</h3>
                                    <h5 class="research-overview-box-subtitle">SEG Monthly Deal Recap: Jan. 2022</h5>
                                    <h6 class="g-label">By SEG, October 5, 2021</h6>
                                    <p class="research-overview-box-text">SEG closely tracks M&A transactions across the software industry. We thought you may enjoy a quick recap of select M&A deals announced over the past month. M&A Deals by Vertical:…</p>
                                    <a href="#" class="btn-arrow">Access report<span><img src="https://seg.compview.co/wp-content/themes/seg/images/btn-arrow.png" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-33">
                <div class="research-overview-box">
                    <div class="research-overview-box-inner">
                        <div class="research-overview-box-col">
                            <div class="research-overview-logo-box">
                                <div class="research-overview-logo-inner">
                                    <img src="https://seg.compview.co/wp-content/uploads/2022/03/blog-image-copy-2.png" alt="">
                                </div>
                            </div>
                            <div class="research-overview-box-contain">
                                <div class="research-overview-box-contain-inner">
                                    <h3 class="research-overview-box-title">M&A PROCESS</h3>
                                    <h5 class="research-overview-box-subtitle">Divestiture Strategy: 3 Simple Steps to Ensure a Seamless Separation</h5>
                                    <h6 class="g-label">By SEG, October 5, 2021</h6>
                                    <p class="research-overview-box-text">Even when a divestiture makes sense for your business, the actual strategy of parting with an asset can be a lot to process. In many cases, a well executed divestment…</p>
                                    <a href="#" class="btn-arrow">Access report<span><img src="https://seg.compview.co/wp-content/themes/seg/images/btn-arrow.png" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-33">
                <div class="research-overview-box">
                    <div class="research-overview-box-inner">
                        <div class="research-overview-box-col">
                            <div class="research-overview-logo-box">
                                <div class="research-overview-logo-inner">
                                    <img src="https://seg.compview.co/wp-content/uploads/2022/03/blog-image-copy-2.png" alt="">
                                </div>
                            </div>
                            <div class="research-overview-box-contain">
                                <div class="research-overview-box-contain-inner">
                                    <h3 class="research-overview-box-title">MARKET INSIGHTS</h3>
                                    <h5 class="research-overview-box-subtitle">Preparing for an M&A Exit: A Guide for SaaS Founders</h5>
                                    <h6 class="g-label">By SEG, October 5, 2021</h6>
                                    <p class="research-overview-box-text">Whether you are currently looking to sell your SaaS business or are years away from an exit, there are several things you can do now to get your “house” in…</p>
                                    <a href="#" class="btn-arrow">Access report<span><img src="https://seg.compview.co/wp-content/themes/seg/images/btn-arrow.png" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-33">
                <div class="research-overview-box">
                    <div class="research-overview-box-inner">
                        <div class="research-overview-box-col">
                            <div class="research-overview-logo-box">
                                <div class="research-overview-logo-inner">
                                    <img src="https://seg.compview.co/wp-content/uploads/2022/03/blog-image-copy-2-1.png" alt="">
                                </div>
                            </div>
                            <div class="research-overview-box-contain">
                                <div class="research-overview-box-contain-inner">
                                    <h3 class="research-overview-box-title">DEALS</h3>
                                    <h5 class="research-overview-box-subtitle">SEG Monthly Deal Recap: Jan. 2022</h5>
                                    <h6 class="g-label">By SEG, October 5, 2021</h6>
                                    <p class="research-overview-box-text">SEG closely tracks M&A transactions across the software industry. We thought you may enjoy a quick recap of select M&A deals announced over the past month. M&A Deals by Vertical:…</p>
                                    <a href="#" class="btn-arrow">Access report<span><img src="https://seg.compview.co/wp-content/themes/seg/images/btn-arrow.png" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-33">
                <div class="research-overview-box">
                    <div class="research-overview-box-inner">
                        <div class="research-overview-box-col">
                            <div class="research-overview-logo-box">
                                <div class="research-overview-logo-inner">
                                    <img src="https://seg.compview.co/wp-content/uploads/2022/03/blog-image-copy-2.png" alt="">
                                </div>
                            </div>
                            <div class="research-overview-box-contain">
                                <div class="research-overview-box-contain-inner">
                                    <h3 class="research-overview-box-title">M&A PROCESS</h3>
                                    <h5 class="research-overview-box-subtitle">Divestiture Strategy: 3 Simple Steps to Ensure a Seamless Separation</h5>
                                    <h6 class="g-label">By SEG, October 5, 2021</h6>
                                    <p class="research-overview-box-text">Even when a divestiture makes sense for your business, the actual strategy of parting with an asset can be a lot to process. In many cases, a well executed divestment…</p>
                                    <a href="#" class="btn-arrow">Access report<span><img src="https://seg.compview.co/wp-content/themes/seg/images/btn-arrow.png" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-33">
                <div class="research-overview-box">
                    <div class="research-overview-box-inner">
                        <div class="research-overview-box-col">
                            <div class="research-overview-logo-box">
                                <div class="research-overview-logo-inner">
                                    <img src="https://seg.compview.co/wp-content/uploads/2022/03/blog-image-copy-2.png" alt="">
                                </div>
                            </div>
                            <div class="research-overview-box-contain">
                                <div class="research-overview-box-contain-inner">
                                    <h3 class="research-overview-box-title">MARKET INSIGHTS</h3>
                                    <h5 class="research-overview-box-subtitle">Preparing for an M&A Exit: A Guide for SaaS Founders</h5>
                                    <h6 class="g-label">By SEG, October 5, 2021</h6>
                                    <p class="research-overview-box-text">Whether you are currently looking to sell your SaaS business or are years away from an exit, there are several things you can do now to get your “house” in…</p>
                                    <a href="#" class="btn-arrow">Access report<span><img src="https://seg.compview.co/wp-content/themes/seg/images/btn-arrow.png" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-33">
                <div class="research-overview-box">
                    <div class="research-overview-box-inner">
                        <div class="research-overview-box-col">
                            <div class="research-overview-logo-box">
                                <div class="research-overview-logo-inner">
                                    <img src="https://seg.compview.co/wp-content/uploads/2022/03/blog-image-copy-2-1.png" alt="">
                                </div>
                            </div>
                            <div class="research-overview-box-contain">
                                <div class="research-overview-box-contain-inner">
                                    <h3 class="research-overview-box-title">DEALS</h3>
                                    <h5 class="research-overview-box-subtitle">SEG Monthly Deal Recap: Jan. 2022</h5>
                                    <h6 class="g-label">By SEG, October 5, 2021</h6>
                                    <p class="research-overview-box-text">SEG closely tracks M&A transactions across the software industry. We thought you may enjoy a quick recap of select M&A deals announced over the past month. M&A Deals by Vertical:…</p>
                                    <a href="#" class="btn-arrow">Access report<span><img src="https://seg.compview.co/wp-content/themes/seg/images/btn-arrow.png" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-33">
                <div class="research-overview-box">
                    <div class="research-overview-box-inner">
                        <div class="research-overview-box-col">
                            <div class="research-overview-logo-box">
                                <div class="research-overview-logo-inner">
                                    <img src="https://seg.compview.co/wp-content/uploads/2022/03/blog-image-copy-2.png" alt="">
                                </div>
                            </div>
                            <div class="research-overview-box-contain">
                                <div class="research-overview-box-contain-inner">
                                    <h3 class="research-overview-box-title">M&A PROCESS</h3>
                                    <h5 class="research-overview-box-subtitle">Divestiture Strategy: 3 Simple Steps to Ensure a Seamless Separation</h5>
                                    <h6 class="g-label">By SEG, October 5, 2021</h6>
                                    <p class="research-overview-box-text">Even when a divestiture makes sense for your business, the actual strategy of parting with an asset can be a lot to process. In many cases, a well executed divestment…</p>
                                    <a href="#" class="btn-arrow">Access report<span><img src="https://seg.compview.co/wp-content/themes/seg/images/btn-arrow.png" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-33">
                <div class="research-overview-box">
                    <div class="research-overview-box-inner">
                        <div class="research-overview-box-col">
                            <div class="research-overview-logo-box">
                                <div class="research-overview-logo-inner">
                                    <img src="https://seg.compview.co/wp-content/uploads/2022/03/blog-image-copy-2.png" alt="">
                                </div>
                            </div>
                            <div class="research-overview-box-contain">
                                <div class="research-overview-box-contain-inner">
                                    <h3 class="research-overview-box-title">MARKET INSIGHTS</h3>
                                    <h5 class="research-overview-box-subtitle">Preparing for an M&A Exit: A Guide for SaaS Founders</h5>
                                    <h6 class="g-label">By SEG, October 5, 2021</h6>
                                    <p class="research-overview-box-text">Whether you are currently looking to sell your SaaS business or are years away from an exit, there are several things you can do now to get your “house” in…</p>
                                    <a href="#" class="btn-arrow">Access report<span><img src="https://seg.compview.co/wp-content/themes/seg/images/btn-arrow.png" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
?>