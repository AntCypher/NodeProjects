<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage SEG
 * @since Seg 1.0
 */
$image = get_the_post_thumbnail_url(get_the_ID());
$image = empty($image) ? "/wp-content/uploads/2022/03/SEG-logo-new.png" : $image;
?>
<div class="col-33">
    <div class="research-overview-box">
        <div class="research-overview-box-inner">
            <div class="research-overview-box-col">
                <a href="<?php the_permalink(); ?>">
                    <div class="research-overview-logo-box">
                        <div class="research-overview-logo-inner">
                            <img src="<?php echo $image; ?>" alt="">
                        </div>
                    </div>
                    <div class="research-overview-box-contain" >
                        <div class="research-overview-box-contain-inner">
                            <h3 class="research-overview-box-title"><?php echo get_the_title(); ?></h3>
                            <!--<h5 class="research-overview-box-subtitle">3Q21 SaaS M&amp;A Update</h5>-->
                            <p class="research-overview-box-text"><?php echo wp_trim_words ( get_the_content (), 50 ); ?></p>
                            <span class="btn-arrow">View Page<span><img src="/wp-content/themes/seg/images/btn-arrow.png" alt=""></span></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>