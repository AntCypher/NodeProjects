<?php
if ( class_exists( 'acf' ) ) {
    $main_title = get_sub_field( 'healthcare_solution_ca_main_title' );
    $ca_section = get_sub_field( 'healthcare_solution_ca_climate_actions' );
}
?>    
<?php if ( ! empty( $ca_section ) || ! empty( $main_title ) ) { ?>
    <section class="climate_works50_section" id="climate-work">
        <?php if ( ! empty( $main_title ) ) { ?>
            <div class="climate_works50title">
                <div class="container">
                    <h2><?php echo $main_title; ?></h2>
                </div>
            </div>
            <?php
        }
        $default_image = get_field( 'helthcare_options_default_image_for_resourses', 'options' );
        if ( ! empty( $ca_section ) ) {
            $climate_image[ 0 ] = ! empty( $ca_section[ 0 ][ 'image' ] ) ? $ca_section[ 0 ][ 'image' ][ 'url' ] : $default_image[ 'url' ];
            ?>
            <div class="climate_works50_wrap">
                <?php if ( ! empty( $climate_image[ 0 ] ) || ! empty( $ca_section[ 0 ][ 'icon' ] ) || ! empty( $ca_section[ 0 ][ 'title' ] ) || ! empty( $ca_section[ 0 ][ 'content' ] ) ) { ?>
                    <div class="climate_works50_box">
                        <?php if ( ! empty( $climate_image[ 0 ] ) ) { ?>
                            <div class="climate_works50_left" style="background-image:url('<?php echo $climate_image[ 0 ]; ?>');"></div>
                        <?php } ?>
                        <div class="climate_works50_right">
                            <div class="climate_works50_content">
                                <?php if ( ! empty( $ca_section[ 0 ][ 'title' ] ) ) { ?>
                                    <h3><?php echo $ca_section[ 0 ][ 'title' ]; ?></h3>
                                <?php } if ( ! empty( $ca_section[ 0 ][ 'content' ] ) ) { ?>
                                    <div class="climate_works50_text">
                                        <p>
                                            <?php echo $ca_section[ 0 ][ 'content' ]; ?>
                                        </p>
                                    </div>					
                                <?php } if ( ! empty( $ca_section[ 0 ][ 'cta' ] ) ) { ?>
                                    <div class="link">
                                        <a href="<?php echo $ca_section[ 0 ][ 'cta' ][ 'url' ]; ?>" target="<?php echo $ca_section[ 0 ][ 'cta' ][ 'title' ]; ?>">
                                            <i>
                                                <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.06017 0.784181L5.32899 5.05299L1.0708 9.32177C1.07076 9.32181 1.07073 9.32185 1.07069 9.32188C1.06086 9.33166 1.05107 9.33472 1.04181 9.33472C1.03253 9.33472 1.0227 9.33164 1.01283 9.32177C1.00296 9.3119 0.999884 9.30207 0.999884 9.29279C0.999884 9.2835 1.00296 9.27367 1.01283 9.2638L1.01336 9.26326L4.51559 5.75042C4.91499 5.36643 4.89819 4.73814 4.51944 4.35939L1.0022 0.842152C0.992334 0.832284 0.989257 0.822455 0.989257 0.813166C0.989257 0.803877 0.992334 0.794048 1.0022 0.784181C1.01207 0.774312 1.0219 0.771235 1.03119 0.771235C1.04048 0.771235 1.05031 0.774312 1.06017 0.784181Z" stroke="#1D9EC6"></path>
                                                </svg>
                                            </i>
                                            <?php echo $ca_section[ 0 ][ 'cta' ][ 'title' ]; ?>
                                        </a>
                                    </div>
                                <?php } ?>

                            </div>
                            <div class="climate_works50circle">
                                <div class="circle" style="opacity: 0;">
                                    <?php
                                    if ( $ca_section[ 0 ][ 'address_pin' ] ) {
                                        if ( ! empty( $ca_section[ 0 ][ 'location_label' ] ) ) {
                                            ?>
                                            <div class="address_pin">

                                                <svg width="64" height="91" viewBox="0 0 64 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M31.9834 0.751709C14.5834 0.751709 0.483398 14.8517 0.483398 32.2517C0.483398 39.0517 2.6834 46.8517 6.3834 52.0517L31.9834 90.7517L57.5834 52.0517C61.2834 46.8517 63.4834 39.1517 63.4834 32.2517C63.4834 14.8517 49.3834 0.751709 31.9834 0.751709ZM31.9834 44.2517C25.3834 44.2517 19.9834 38.8517 19.9834 32.2517C19.9834 25.6517 25.3834 20.2517 31.9834 20.2517C38.5834 20.2517 43.9834 25.6517 43.9834 32.2517C43.9834 38.8517 38.5834 44.2517 31.9834 44.2517Z" fill="#0E2050"></path>
                                                </svg>

                                                <span><?php echo $ca_section[ 0 ][ 'location_label' ]; ?></span>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                    <?php if ( ! empty( $ca_section[ 0 ][ 'icon' ] ) ) { ?>
                                        <div class="circle_icon">
                                            <img src="<?php echo $ca_section[ 0 ][ 'icon' ][ 'url' ]; ?>" alt="">
                                        </div>
                                    <?php } ?>
                                </div>

                                <span class="circle_animation same_animation circle_animation_1">
                                    <svg width="486" height="288" viewBox="0 0 486 288" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M485.199 2.67383C371.909 39.2965 158.262 132.187 2.30859 285.797" stroke="#F6D590" stroke-width="4" stroke-dasharray="15 15"></path>
                                    </svg>
                                </span>


                                <span class="circle_animation same_animation circle_animation_2">
                                    <svg width="44" height="638" viewBox="0 0 44 638" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.75681 1.30553C48.9122 140.084 59.7494 428.043 5.25596 636.835" stroke="#F6D590" stroke-width="4" stroke-dasharray="15 15"></path>
                                    </svg>
                                </span>


                                <span class="circle_animation circle_animation_3">
                                    <svg width="529" height="361" viewBox="0 0 529 361" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.814342 2.42025C133.205 55.5104 368.719 210.884 527.128 358.646" stroke="#F6D590" stroke-width="4" stroke-dasharray="15 15"></path>
                                    </svg>
                                </span>					
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php
                $climate_image[ 1 ] = ! empty( $ca_section[ 1 ][ 'image' ] ) ? $ca_section[ 1 ][ 'image' ][ 'url' ] : $default_image[ 'url' ];

                if ( ! empty( $climate_image[ 1 ] ) || ! empty( $ca_section[ 1 ][ 'icon' ] ) || ! empty( $ca_section[ 1 ][ 'title' ] ) || ! empty( $ca_section[ 1 ][ 'cta' ] ) || ! empty( $ca_section[ 1 ][ 'content' ] ) ) {
                    ?>
                    <div class="climate_works50_box">
                        <?php if ( ! empty( $climate_image[ 1 ] ) ) { ?>
                            <div class="climate_works50_left" style="background-image:url('<?php echo $climate_image[ 1 ]; ?>');"></div>
                        <?php } ?>
                        <div class="climate_works50_right">
                            <div class="climate_works50_content">
                                <?php if ( ! empty( $ca_section[ 1 ][ 'title' ] ) ) { ?>
                                    <h3><?php echo $ca_section[ 1 ][ 'title' ]; ?></h3>
                                <?php } if ( ! empty( $ca_section[ 1 ][ 'content' ] ) ) { ?>
                                    <div class="climate_works50_text">
                                        <p>
                                            <?php echo $ca_section[ 1 ][ 'content' ]; ?>
                                        </p>
                                    </div>
                                <?php } if ( ! empty( $ca_section[ 1 ][ 'cta' ] ) )  ?>
                                <div class="link">
                                    <a href="<?php echo $ca_section[ 1 ][ 'cta' ][ 'url' ]; ?>" target="<?php echo $ca_section[ 1 ][ 'cta' ][ 'title' ]; ?>">
                                        <i>
                                            <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.06017 0.784181L5.32899 5.05299L1.0708 9.32177C1.07076 9.32181 1.07073 9.32185 1.07069 9.32188C1.06086 9.33166 1.05107 9.33472 1.04181 9.33472C1.03253 9.33472 1.0227 9.33164 1.01283 9.32177C1.00296 9.3119 0.999884 9.30207 0.999884 9.29279C0.999884 9.2835 1.00296 9.27367 1.01283 9.2638L1.01336 9.26326L4.51559 5.75042C4.91499 5.36643 4.89819 4.73814 4.51944 4.35939L1.0022 0.842152C0.992334 0.832284 0.989257 0.822455 0.989257 0.813166C0.989257 0.803877 0.992334 0.794048 1.0022 0.784181C1.01207 0.774312 1.0219 0.771235 1.03119 0.771235C1.04048 0.771235 1.05031 0.774312 1.06017 0.784181Z" stroke="#1D9EC6"></path>
                                            </svg>
                                        </i>
                                        <?php echo $ca_section[ 1 ][ 'cta' ][ 'title' ]; ?>
                                    </a>
                                </div>					
                            <?php } ?>
                        </div>
                        <div class="climate_works50circle">
                            <?php if ( ! empty( $ca_section[ 1 ][ 'icon' ] ) ) { ?>
                                <div class="circle" style="opacity: 0;">
                                    <?php
                                    if ( $ca_section[ 1 ][ 'address_pin' ] ) {
                                        if ( ! empty( $ca_section[ 1 ][ 'location_label' ] ) ) {
                                            ?>
                                            <div class="address_pin">

                                                <svg width="64" height="91" viewBox="0 0 64 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M31.9834 0.751709C14.5834 0.751709 0.483398 14.8517 0.483398 32.2517C0.483398 39.0517 2.6834 46.8517 6.3834 52.0517L31.9834 90.7517L57.5834 52.0517C61.2834 46.8517 63.4834 39.1517 63.4834 32.2517C63.4834 14.8517 49.3834 0.751709 31.9834 0.751709ZM31.9834 44.2517C25.3834 44.2517 19.9834 38.8517 19.9834 32.2517C19.9834 25.6517 25.3834 20.2517 31.9834 20.2517C38.5834 20.2517 43.9834 25.6517 43.9834 32.2517C43.9834 38.8517 38.5834 44.2517 31.9834 44.2517Z" fill="#0E2050"></path>
                                                </svg>

                                                <span><?php echo $ca_section[ 1 ][ 'location_label' ]; ?></span>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>

                                    <div class="circle_icon">
                                        <img src="<?php echo $ca_section[ 1 ][ 'icon' ][ 'url' ]; ?>" alt="">
                                    </div>
                                </div>
                            <?php } ?>
                            <span class="circle_animation same_animation circle_animation_1">
                                <svg width="486" height="288" viewBox="0 0 486 288" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="svg_line1" d="M485.199 2.67383C371.909 39.2965 158.262 132.187 2.30859 285.797" stroke="#F6D590" stroke-width="4" stroke-dasharray="15 15"></path>
                                    <path class="svg_line2" d="M485.199 2.67383C371.909 39.2965 158.262 132.187 2.30859 285.797" stroke="#F6D590" stroke-width="4" stroke-dasharray="15 15" style="stroke-dashoffset: 0px;"></path>
                                </svg>
                            </span>


                            <span class="circle_animation same_animation circle_animation_2">
                                <svg width="44" height="638" viewBox="0 0 44 638" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="svg_line1" d="M2.75681 1.30553C48.9122 140.084 59.7494 428.043 5.25596 636.835" stroke="#F6D590" stroke-width="4" stroke-dasharray="15 15"></path>
                                    <path class="svg_line2" d="M2.75681 1.30553C48.9122 140.084 59.7494 428.043 5.25596 636.835" stroke="#F6D590" stroke-width="4" stroke-dasharray="15 15" style="stroke-dashoffset: 0px;"></path>
                                </svg>
                            </span>


                            <span class="circle_animation circle_animation_3">
                                <svg width="529" height="361" viewBox="0 0 529 361" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="svg_line1" d="M0.814342 2.42025C133.205 55.5104 368.719 210.884 527.128 358.646" stroke="#F6D590" stroke-width="4" stroke-dasharray="15 15"></path>
                                    <path class="svg_line2" d="M0.814342 2.42025C133.205 55.5104 368.719 210.884 527.128 358.646" stroke="#F6D590" stroke-width="4" stroke-dasharray="15 15" style="stroke-dashoffset: 0px;"></path>
                                </svg>
                            </span>					
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php
            $climate_image[ 2 ] = ! empty( $ca_section[ 2 ][ 'image' ] ) ? $ca_section[ 2 ][ 'image' ][ 'url' ] : $default_image[ 'url' ];

            if ( ! empty( $climate_image[ 2 ] ) || ! empty( $ca_section[ 2 ][ 'icon' ] ) || ! empty( $ca_section[ 2 ][ 'title' ] ) || ! empty( $ca_section[ 2 ][ 'cta' ] ) || ! empty( $ca_section[ 2 ][ 'content' ] ) ) {
                ?>
                <div class="climate_works50_box">
                    <?php if ( ! empty( $climate_image[ 2 ] ) ) { ?>
                        <div class="climate_works50_left" style="background-image:url('<?php echo $climate_image[ 2 ]; ?>');"></div>
                    <?php } ?>
                    <div class="climate_works50_right">
                        <div class="climate_works50_content">
                            <?php if ( ! empty( $ca_section[ 2 ][ 'title' ] ) ) { ?>
                                <h3><?php echo $ca_section[ 2 ][ 'title' ]; ?></h3>
                            <?php } if ( ! empty( $ca_section[ 2 ][ 'content' ] ) ) { ?>
                                <div class="climate_works50_text">
                                    <p>
                                        <?php echo $ca_section[ 2 ][ 'content' ]; ?>
                                    </p>
                                </div>
                            <?php } if ( ! empty( $ca_section[ 2 ][ 'cta' ] ) ) { ?>
                                <div class="link">
                                    <a href="<?php echo $ca_section[ 2 ][ 'cta' ][ 'url' ]; ?>" target="<?php echo $ca_section[ 2 ][ 'cta' ][ 'title' ]; ?>">
                                        <i>
                                            <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.06017 0.784181L5.32899 5.05299L1.0708 9.32177C1.07076 9.32181 1.07073 9.32185 1.07069 9.32188C1.06086 9.33166 1.05107 9.33472 1.04181 9.33472C1.03253 9.33472 1.0227 9.33164 1.01283 9.32177C1.00296 9.3119 0.999884 9.30207 0.999884 9.29279C0.999884 9.2835 1.00296 9.27367 1.01283 9.2638L1.01336 9.26326L4.51559 5.75042C4.91499 5.36643 4.89819 4.73814 4.51944 4.35939L1.0022 0.842152C0.992334 0.832284 0.989257 0.822455 0.989257 0.813166C0.989257 0.803877 0.992334 0.794048 1.0022 0.784181C1.01207 0.774312 1.0219 0.771235 1.03119 0.771235C1.04048 0.771235 1.05031 0.774312 1.06017 0.784181Z" stroke="#1D9EC6"></path>
                                            </svg>
                                        </i>
                                        <?php echo $ca_section[ 2 ][ 'cta' ][ 'title' ]; ?>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="climate_works50circle">
                            <?php if ( ! empty( $ca_section[ 2 ][ 'icon' ] ) ) { ?>
                                <div class="circle" style="opacity: 0;">
                                    <?php
                                    if ( $ca_section[ 2 ][ 'address_pin' ] ) {
                                        if ( ! empty( $ca_section[ 2 ][ 'location_label' ] ) ) {
                                            ?>
                                            <div class="address_pin">

                                                <svg width="64" height="91" viewBox="0 0 64 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M31.9834 0.751709C14.5834 0.751709 0.483398 14.8517 0.483398 32.2517C0.483398 39.0517 2.6834 46.8517 6.3834 52.0517L31.9834 90.7517L57.5834 52.0517C61.2834 46.8517 63.4834 39.1517 63.4834 32.2517C63.4834 14.8517 49.3834 0.751709 31.9834 0.751709ZM31.9834 44.2517C25.3834 44.2517 19.9834 38.8517 19.9834 32.2517C19.9834 25.6517 25.3834 20.2517 31.9834 20.2517C38.5834 20.2517 43.9834 25.6517 43.9834 32.2517C43.9834 38.8517 38.5834 44.2517 31.9834 44.2517Z" fill="#0E2050"></path>
                                                </svg>

                                                <span><?php echo $ca_section[ 2 ][ 'location_label' ]; ?></span>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                    <div class="circle_icon">
                                        <img src="<?php echo $ca_section[ 2 ][ 'icon' ][ 'url' ]; ?>" alt="">
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            <span class="circle_animation same_animation circle_animation_1">
                                <svg width="486" height="288" viewBox="0 0 486 288" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M485.199 2.67383C371.909 39.2965 158.262 132.187 2.30859 285.797" stroke="#F6D590" stroke-width="4" stroke-dasharray="15 15"></path>
                                </svg>
                            </span>


                            <span class="circle_animation same_animation circle_animation_2">
                                <svg width="44" height="638" viewBox="0 0 44 638" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.75681 1.30553C48.9122 140.084 59.7494 428.043 5.25596 636.835" stroke="#F6D590" stroke-width="4" stroke-dasharray="15 15"></path>
                                </svg>
                            </span>


                            <span class="circle_animation circle_animation_3">
                                <svg width="529" height="361" viewBox="0 0 529 361" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.814342 2.42025C133.205 55.5104 368.719 210.884 527.128 358.646" stroke="#F6D590" stroke-width="4" stroke-dasharray="15 15"></path>
                                </svg>
                            </span>	
                        </div>
                    </div>
                </div>								
            </div>
        <?php } ?>
    </section>
<?php } ?>