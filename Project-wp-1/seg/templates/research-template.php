<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;

/**
 * Template Name: Research Template
 *
 * @package WordPress
 * @subpackage seg
 * @since seg 1.0
 */
get_header();
$report_tax    = get_terms(
        array (
            'taxonomy'   => SEG_REPORT_TAX,
            'hide_empty' => false,
        )
);
$frequency_tax = get_terms(
        array (
            'taxonomy'   => SEG_FREQUENCY_TAX,
            'hide_empty' => false,
        )
);
$industry_tax  = get_terms(
        array (
            'taxonomy'   => SEG_INDUSTRY_TAX,
            'hide_empty' => false,
        )
);
if ( class_exists( 'acf' ) ) {
    $page_id        = get_the_ID();
    $banner_subtext = get_field( 'seg_research_banner_subtext', $page_id );
    $banner_title   = get_field( 'seg_research_banner_title', $page_id );
    $banner_desc    = get_field( 'seg_research_banner_descr', $page_id );
    $banner_cta     = get_field( 'seg_research_banner_cta', $page_id );
}
?>

<section class="transactions-banner-section light">
    <div class="container">
        <h1 class="transactions-banner-title">
            <?php if ( ! empty( $banner_subtext ) ) { ?>
                <span><?php echo $banner_subtext; ?></span>
            <?php } ?>
            <?php echo $banner_title; ?>
        </h1>
        <?php if ( ! empty( $banner_desc ) ) { ?>
            <div class="transactions-banner-subtitle">
                <?php echo $banner_desc; ?>
            </div>
        <?php } ?>

        <div class="transactions-search">
            <div class="row">
                <div class="col-33">
                    <div class="transactions-search-inner">
                        <select class="form-select" id="reporttax">
                            <option value=""><?php _e( 'Choose Report Type', 'seg' ); ?></option>
                            <?php
                            if ( ! empty( $report_tax ) ) {
                                foreach ( $report_tax as $key => $value ) {
                                    ?>
                                    <option value="<?php echo $value->term_id; ?>" data-badge=""><?php echo $value->name; ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-33">
                    <div class="transactions-search-inner">
                        <select class="form-select" id="frequencytax">
                            <option value=""><?php _e( 'Choose Frequency', 'seg' ); ?></option>
                            <?php
                            if ( ! empty( $frequency_tax ) ) {
                                foreach ( $frequency_tax as $key => $value ) {
                                    ?>
                                    <option value="<?php echo $value->term_id; ?>" data-badge=""><?php echo $value->name; ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-33">
                    <div class="transactions-search-inner">
                        <select class="form-select" id="industrytax">
                            <option value=""><?php _e( 'Choose Industry', 'seg' ); ?></option>
                            <?php
                            if ( ! empty( $industry_tax ) ) {
                                foreach ( $industry_tax as $key => $value ) {
                                    ?>
                                    <option value="<?php echo $value->term_id; ?>" data-badge=""><?php echo $value->name; ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="transactions-section research-overview-section">
    <div class="container resFilter">
        <!--<div class="row">-->
            <?php research_tax_filter(); ?>
        <!--</div>-->
    </div>
</section>

<?php get_footer(); ?>