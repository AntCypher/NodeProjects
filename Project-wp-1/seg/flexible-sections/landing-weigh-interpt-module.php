<?php
if ( class_exists( 'acf' ) ) {
    $title              = get_sub_field( 'title' );
    $subtitle           = get_sub_field( 'subtitle' );
    $description        = get_sub_field( 'description' );
    $quantitative_title = get_sub_field( 'table_quantitative_title' );
    $qualitative_title  = get_sub_field( 'table_qualitative_factor_title' );
    $table_content      = get_sub_field( 'table_content' );
}
if ( ! empty( $title ) || ! empty( $subtitle ) || ! empty( $description ) || ! empty( $qualitative_title ) || ! empty( $quantitative_title ) || ! empty( $table_content ) ) {
    ?>
    <div class="factore-section">
        <div class="container">
            <div class="section-header">
                <?php if ( ! empty( $title ) ) { ?>
                    <h2><?php echo $title; ?></h2>
                <?php } if ( ! empty( $subtitle ) ) { ?>
                    <h3><?php echo $subtitle; ?></h3>
                <?php } echo $description; ?>
            </div>
            <div class="factore-detail">
                <div class="quantitative-factore">
                    <?php if ( ! empty( $quantitative_title ) ) { ?>
                        <h3><?php echo $quantitative_title; ?></h3>
                    <?php } if ( ! empty( $table_content ) ) { ?>
                        <ul>
                            <?php
                            foreach ( $table_content as $key => $content ) {
                                $quantitative_factors = $content[ 'quantitative_factors' ];
                                $quantitative_tooltip = $content[ 'quantitative_f_tooltip' ];
                                if ( ! empty( $quantitative_factors ) || ! empty( $quantitative_tooltip ) ) {
                                    ?>
                                    <li><?php echo $quantitative_factors; ?> 
                                        <?php if ( ! empty( $quantitative_tooltip ) ) { ?>
                                            <div class="tooltip"><img src="<?php echo get_template_directory_uri(); ?>/images/info-icon.png"/><span class="tooltiptext"><?php echo $quantitative_tooltip; ?></span></div>
                                        <?php } ?>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    <?php } ?>
                </div>
                <div class="qualitative-factore">
                    <?php if ( ! empty( $qualitative_title ) ) { ?>
                        <h3><?php echo $qualitative_title; ?></h3>
                    <?php } if ( ! empty( $table_content ) ) { ?>
                        <ul>
                            <?php
                            foreach ( $table_content as $key => $content ) {
                                $qualitative_factors = $content[ 'qualitative_factors' ];
                                $qualitative_tooltip = $content[ 'qualitative_f_tooltip' ];
                                if ( ! empty( $qualitative_factors ) || ! empty( $qualitative_tooltip ) ) {
                                    ?>
                                    <li><?php echo $qualitative_factors; ?>
                                        <?php if ( ! empty( $qualitative_tooltip ) ) { ?>
                                            <div class="tooltip"><img src="<?php echo get_template_directory_uri(); ?>/images/info-icon.png"/><span class="tooltiptext"><?php echo $qualitative_tooltip; ?></span></div>
                                            <?php } ?>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
