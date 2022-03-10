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
        }
    }
}