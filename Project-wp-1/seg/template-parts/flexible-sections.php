<?php
if ( ! empty( 'seg_global_page_sections' ) ) {
    while ( have_rows( 'seg_global_page_sections' ) ) {
        the_row();
        if ( get_row_layout() == 'splash_homepage_form_image_grid_module' ) {
            get_template_part( 'flexible-sections/splash-home-form-Image-grid-module' );
        } elseif ( get_row_layout() == 'about_banner_module' ) {
            get_template_part( 'flexible-sections/about-banner-module' );
        } elseif ( get_row_layout() == 'about_why_client_choose_module' ) {
            get_template_part( 'flexible-sections/about-why-client-choose-module' );
        } elseif ( get_row_layout() == 'about_our_people_module' ) {
            get_template_part( 'flexible-sections/about-our-people-module' );
        } elseif ( get_row_layout() == 'home_banner_module' ) {
            get_template_part( 'flexible-sections/home-banner-module' );
        } elseif ( get_row_layout() == 'home_transaction_slider_module' ) {
            get_template_part( 'flexible-sections/home-transaction-slider-module' );
        } elseif ( get_row_layout() == 'home_why_choose_seg_module' ) {
            get_template_part( 'flexible-sections/home-why-choose-seg' );
        } elseif ( get_row_layout() == 'lp_banner_module' ) {
            get_template_part( 'flexible-sections/landing-banner-module' );
        } elseif ( get_row_layout() == 'lp_know_the_score_module' ) {
            get_template_part( 'flexible-sections/landing-score-module' );
        } elseif ( get_row_layout() == 'lp_image_content_module' ) {
            get_template_part( 'flexible-sections/landing-image-content-module' );
        } elseif ( get_row_layout() == 'lp_every_journey_module' ) {
            get_template_part( 'flexible-sections/landing-every-journey-module' );
        } elseif ( get_row_layout() == 'lp_weigh_interpt_factor_module' ) {
            get_template_part( 'flexible-sections/landing-weigh-interpt-module' );
        } elseif ( get_row_layout() == 'lp_experience_module' ) {
            get_template_part( 'flexible-sections/landing-experience-module' );
        } elseif ( get_row_layout() == 'ty_banner_module' ) {
            get_template_part( 'flexible-sections/thankyou-banner-module' );
        } elseif ( get_row_layout() == 'ty_view_seg_whiteppr_module' ) {
            get_template_part( 'flexible-sections/thankyou-view-seg-white-module' );
        } 
    }
}