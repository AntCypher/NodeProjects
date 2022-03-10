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
$product  = get_terms(
        array (
            'taxonomy'   => SEG_PRODUCT_TAX,
            'hide_empty' => false,
        )
);
$vertical = get_terms(
        array (
            'taxonomy'   => SEG_VERTICAL_TAX,
            'hide_empty' => false,
        )
);
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

<?php get_footer(); ?>