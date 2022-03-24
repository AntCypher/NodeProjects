<?php
$subtext         = get_sub_field( 'subtext' );
$title_desc      = get_sub_field( 'title_description_content_with_form' );
$cta             = get_sub_field( 'cta' );
$form_subtext    = get_sub_field( 'form_subtext' );
$form_conclution = get_sub_field( 'form_conclution' );
$content         = get_sub_field( 'content' );
?>

<div class="seg-section">
    <div class="seg-section-inner">
        <div class="hero-section">
            <div class="seg-left-content">
                <div class="container">
                    <div class="hero-banner-image-wrap">
                        <img src="<?php echo get_theme_file_uri(); ?>/images/triangle-shadow-new.png" />
                    </div>
                    <div class="seg-content-inner">
                        <?php if ( ! empty( $subtext ) ) { ?>
                            <h6><?php echo $subtext; ?></h6>
                        <?php } ?>
                        <?php echo $title_desc; ?>
                        <!--                        <h3>Sell Your Business Smarter:</h3>
                                                <h2>Less Risk. More Options. Maximum Value.</h2>
                                                <p>Hear what our clients are saying about SEG’s creative, honest, and straightforward approach to mergers & acquisitions.</p>-->
                        <!--                        <div class="input-group">
                                                    <input type="email" class="form-control" placeholder="Enter your email" aria-label="Enter your email">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Let’s talk</span>
                                                    </div>
                                                </div>-->
                        <div class="banner-talk">
                            <?php if ( ! empty( $form_subtext ) ) { ?>
                                <h4><?php echo $form_subtext; ?></h4>
                            <?php } ?>
                            <?php if ( ! empty( $form_conclution ) ) { ?>
                                <p><?php echo $form_conclution; ?></p>
                            <?php } ?>
                            <?php if ( ! empty( $cta ) ) { ?>
                                <div class="btn-wrap">
                                    <a href="<?php echo $cta[ 'url' ]; ?>" target="<?php echo $cta[ 'target' ]; ?>" class="btn btn-primary"><?php echo $cta[ 'title' ]; ?></a>                                
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ( ! empty( $content ) ) { ?>
                <div class="hero-section-inner">
                    <div class="col-wrap">
                        <?php
                        foreach ( $content as $content_key => $content_val ) {
                            $image_or_vimeo         = $content_val[ 'image_or_vimeo' ];
                            $image                  = $content_val[ 'image' ];
                            $hover_text             = $content_val[ 'hover_text' ];
                            $hover_read_more_cta    = $content_val[ 'hover_read_more_cta' ];
//                            $popup_video_content    = $content_val[ 'popup_video_content' ];
                            $view_story_button_text = $content_val[ 'view_story_button_text' ];
                            ?>
                            <div class="col" data-row="<?php echo $content_key+1; ?>">
                                <div class="item-wrap">
                                    <?php if ( ! empty( $image ) ) { ?>
                                        <div class="image-wrap">
                                            <img src="<?php echo $image[ 'url' ]; ?>" alt='<?php echo $image[ 'alt' ]; ?>' title="<?php echo $image[ 'title' ]; ?>">
                                        </div>
                                    <?php } ?>
                                    <?php if ( $image_or_vimeo ) { ?>
                                        <div class="view-story">
                                            <?php if(!empty($view_story_button_text)) { ?>
                                            <a id="click-video" href="<?php echo $view_story_button_text['url']; ?>#video" target="<?php echo $view_story_button_text['target']; ?>"><?php echo $view_story_button_text['title']; ?> <img src="<?php echo get_theme_file_uri(); ?>/images/story-play-btn.png"/></a>
                                            <?php } ?>
                                           
                                              <!--<a data-fancybox data-small-btn="true"  href="#story_popup_<?php // echo $content_key; ?>"><?php // echo $view_story_button_text; ?> <img src="<?php // echo get_theme_file_uri(); ?>/images/story-play-btn.png"/></a>-->
                                              <div class="client-video-box-popup" style="display:none;"  id="story_popup_<?php // echo $content_key; ?>">
                                              <div class=" client-video-box-popup-box client-video-iframe">
                                              <?php // echo $popup_video_content; ?>
                                              </div>
                                         

                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ( ! empty( $hover_text ) && ! $image_or_vimeo ) { ?>
                                    <div class="overlay-wrap">
                                        <div class="content white-text">
                                            <?php if ( ! empty( $hover_text ) ) { ?>
                                                <p><?php echo $hover_text; ?></p>
                                            <?php } ?>
                                            <?php if ( ! empty( $hover_read_more_cta ) ) { ?>
                                                <a href="<?php echo $hover_read_more_cta[ 'url' ]; ?>" target="<?php echo $hover_read_more_cta[ 'target' ]; ?>"><?php echo $hover_read_more_cta[ 'title' ]; ?></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        <?php } ?>
    </div>
    <!--        <div style="display: none;" id="modal">
                <h2>Hello!</h2>
                <p>You are awesome!</p>
            </div>-->
</div>
</div>