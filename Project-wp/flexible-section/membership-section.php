<?php
if ( class_exists( 'acf' ) ) {
    $member_logo     = get_sub_field( 'helthcare_membership_logo' );
    $member_logo_url = ! empty( $member_logo ) ? $member_logo[ 'url' ] : '#';
    $member_logo_alt = ! empty( $member_logo['alt'] ) ? $member_logo[ 'alt' ] : get_bloginfo();
    $member_title    = get_sub_field( 'helthcare_membership_title' );
    $member_subtitle = get_sub_field( 'helthcare_membership_subtitle' );
    $member_descr    = get_sub_field( 'helthcare_membership_descr' );
    $member_cta      = get_sub_field( 'helthcare_membership_cta' );
    if ( ! empty( $member_cta ) ) {
        $member_cta_title  = $member_cta[ 'title' ];
        $member_cta_link   = $member_cta[ 'url' ];
        $member_cta_target = $member_cta[ 'target' ];
    }
}
?>
<?php if ( ! empty( $member_logo ) || ! empty( $member_title ) || ! empty( $member_subtitle ) || ! empty( $member_descr ) || ! empty( $member_cta ) ) { ?>
    <section class="memberships_section" id="memberships_section">
        <div class="membership_animation">
            <span>	
                <svg width="56" height="368" viewBox="0 0 56 368" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="animation_line" opacity="0.25" d="M51.7161 0.322402C58.6136 85.8361 38.8242 249.086 2.7529 366.789" stroke="#1D9EC6" stroke-width="4" stroke-dasharray="15 15"></path>
                    <path class="animation_line2" opacity="0.25" d="M51.7161 0.322402C58.6136 85.8361 38.8242 249.086 2.7529 366.789" stroke="#1D9EC6" stroke-width="4" stroke-dasharray="15 15"></path>
                </svg>
            </span>		
            <span>
                <svg width="166" height="371" viewBox="0 0 166 371" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="animation_line" opacity="0.25" d="M163.624 0.724832C162.632 105.025 72.6159 268.533 2.09479 369.439" stroke="#1D9EC6" stroke-width="4" stroke-dasharray="15 15"></path>
                    <path class="animation_line2" opacity="0.25" d="M163.624 0.724832C162.632 105.025 72.6159 268.533 2.09479 369.439" stroke="#1D9EC6" stroke-width="4" stroke-dasharray="15 15"></path>
                </svg>
            </span>
            <span>
                <svg width="315" height="337" viewBox="0 0 315 337" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="animation_line" opacity="0.25" d="M312.539 0.941003C285.936 99.9606 107.209 271.226 1.56612 334.43" stroke="#1D9EC6" stroke-width="4" stroke-dasharray="15 15"></path>
                    <path class="animation_line2" opacity="0.25" d="M312.539 0.941003C285.936 99.9606 107.209 271.226 1.56612 334.43" stroke="#1D9EC6" stroke-width="4" stroke-dasharray="15 15"></path>
                </svg>
            </span>
        </div>
        <div class="container">
            <?php if ( ! empty( $member_logo ) ) { ?>
                <div class="memberships_left">
                    <img src="<?php echo $member_logo_url; ?>" alt="<?php echo $member_logo_alt; ?>">
                </div>
            <?php } ?>
            <div class="memberships_right">
                <?php if ( ! empty( $member_title ) ) { ?>
                    <h6><?php echo $member_title; ?></h6>
                <?php } if ( ! empty( $member_subtitle ) ) { ?>
                    <h2><?php echo $member_subtitle; ?></h2>
                <?php } if ( ! empty( $member_descr ) ) { ?>
                    <div class="memberships_text">
                        <?php echo $member_descr; ?>
                    </div>
                <?php } if ( ! empty( $member_cta ) ) { ?>
                    <div class="btn_style">
                        <a href="<?php echo $member_cta_link; ?>" target="<?php echo $member_cta_target; ?>">
                            <?php echo $member_cta_title; ?>
                            <i>
                                <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.06017 0.784181L5.32899 5.05299L1.0708 9.32177C1.07076 9.32181 1.07073 9.32185 1.07069 9.32188C1.06086 9.33166 1.05107 9.33472 1.04181 9.33472C1.03253 9.33472 1.0227 9.33164 1.01283 9.32177C1.00296 9.3119 0.999884 9.30207 0.999884 9.29279C0.999884 9.2835 1.00296 9.27367 1.01283 9.2638L1.01336 9.26326L4.51559 5.75042C4.91499 5.36643 4.89819 4.73814 4.51944 4.35939L1.0022 0.842152C0.992334 0.832284 0.989257 0.822455 0.989257 0.813166C0.989257 0.803877 0.992334 0.794048 1.0022 0.784181C1.01207 0.774312 1.0219 0.771235 1.03119 0.771235C1.04048 0.771235 1.05031 0.774312 1.06017 0.784181Z" stroke="#1D9EC6"></path>
                                </svg>
                            </i>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>	

    </section>
    <?php
}?>