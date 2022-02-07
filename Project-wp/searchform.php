<?php
/**
 * Template for displaying search forms in Helthcare
 *
 * @package WordPress
 * @subpackage HELTHCARE
 * @since Helthcare 1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'helthcare' ); ?></span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'helthcare' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button type="submit" class="search-submit"><img src="<?php echo HELTHCARE_IMAGE_PATH ?>/search-glass.svg" alt="<?php bloginfo( 'name' ); ?>"></button>
</form>