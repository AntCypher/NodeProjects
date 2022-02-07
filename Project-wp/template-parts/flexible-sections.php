<?php
if ( ! empty( 'healthcare_page_section' ) ) {
    while ( have_rows( 'healthcare_page_section' ) ) {
        the_row();
        if ( get_row_layout() == 'helthcare_hero_section' ) {
            get_template_part( 'flexible-section/hero-section' );
        } elseif ( get_row_layout() == 'helthcare_green_cat_section' ) {
            get_template_part( 'flexible-section/green-catalyst-section' );
        } elseif ( get_row_layout() == 'helthcare_emissions_section' ) {
            get_template_part( 'flexible-section/zero-emissions-section' );
        } elseif ( get_row_layout() == 'helthcare_lead_section' ) {
            get_template_part( 'flexible-section/lead-section' );
        } elseif ( get_row_layout() == 'helthcare_strategies_section' ) {
            get_template_part( 'flexible-section/strategies-section' );
        } elseif ( get_row_layout() == 'helthcare_resources_section' ) {
            get_template_part( 'flexible-section/resources-section' );
        } elseif ( get_row_layout() == 'helthcare_case_study_section' ) {
            get_template_part( 'flexible-section/case-study-section' );
        } elseif ( get_row_layout() == 'helthcare_climate_future_section' ) {
            get_template_part( 'flexible-section/climate-future-section' );
        } elseif ( get_row_layout() == 'helthcare_reso_list_section' ) {
            get_template_part( 'flexible-section/resources-list-section' );
        } elseif ( get_row_layout() == 'helthcare_team_member_sec' ) {
            get_template_part( 'flexible-section/team-member-section' );
        } elseif ( get_row_layout() == 'helthcare_nine_reasons_section' ) {
            get_template_part( 'flexible-section/nine-reasons-section' );
        } elseif ( get_row_layout() == 'helthcare_how_it_works_section' ) {
            get_template_part( 'flexible-section/how-it-works-section' );
        } elseif ( get_row_layout() == 'helthcare_book_highlight_section' ) {
            get_template_part( 'flexible-section/book-highlight-section' );
        } elseif ( get_row_layout() == 'helthcare_reduction_sol_section' ) {
            get_template_part( 'flexible-section/reduction-solution-section' );
        } elseif ( get_row_layout() == 'helthcare_explore_image_hotspot_section' ) {
            get_template_part( 'flexible-section/explore-image-hotspot' );
        } elseif ( get_row_layout() == 'helthcare_schedule_a_consult' ) {
            get_template_part( 'flexible-section/schedule-consult-section' );
        } elseif ( get_row_layout() == 'solution_climate_action_section' ) {
            get_template_part( 'flexible-section/solution_climate_action_section' );
        } elseif ( get_row_layout() == 'helthcare_membership_section' ) {
            get_template_part( 'flexible-section/membership-section' );
        } elseif ( get_row_layout() == 'helthcare_testimonial_section' ) {
            get_template_part( 'flexible-section/testimonial-section' );
        } elseif ( get_row_layout() == 'helthcare_number_count_section' ) {
            get_template_part( 'flexible-section/counter-number-section' );
        } elseif ( get_row_layout() == 'helthcare_net_zero_future_multi_logo_section' ) {
            get_template_part( 'flexible-section/logo-multi-section' );
        } elseif ( get_row_layout() == 'helthcare_download_guide_section' ) {
            get_template_part( 'flexible-section/download-guides-section' );
        } elseif ( get_row_layout() == 'helthcare_start_somewhere_highlights_section' ) {
            get_template_part( 'flexible-section/start-somewhere-section' );
        } elseif ( get_row_layout() == 'helthcare_simple_image_content_section' ) {
            get_template_part( 'flexible-section/simple-image-content' );
        } elseif ( get_row_layout() == 'helthcare_eight_logo_section' ) {
            get_template_part( 'flexible-section/logo-eight-section' );
        } elseif ( get_row_layout() == 'helthcare_climate_regulation_section' ) {
            get_template_part( 'flexible-section/climate-regulation-section' );
        } elseif ( get_row_layout() == 'helthcare_resources_overview' ) {
            get_template_part( 'flexible-section/resources-overview' );
        } elseif ( get_row_layout() == 'solution_hero_content_section' ) {
            get_template_part( 'flexible-section/hero-solution-section' );
        } elseif ( get_row_layout() == 'helthcare_hero_info_section' ) {
            get_template_part( 'flexible-section/hero-information-section' );
        } elseif ( get_row_layout() == 'helthcare_form_section' ) {
            get_template_part( 'flexible-section/form-section' );
        } elseif ( get_row_layout() == 'helthcare_hero_def_section' ) {
            get_template_part( 'flexible-section/hero-default-section' );
        } elseif ( get_row_layout() == 'helthcare_our_mission_highlight_section' ) {
            get_template_part( 'flexible-section/our-mission-highlight' );
        } elseif ( get_row_layout() == 'helthcare_our_experience_section' ) {
            get_template_part( 'flexible-section/our-experience-section' );
        } elseif ( get_row_layout() == 'helthcare_service_hero_section' ) {
            get_template_part( 'flexible-section/hero-services-section' );
        }
    }
}