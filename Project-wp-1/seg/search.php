<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage SEG
 * @since Seg 1.0
 */

get_header(); ?>
<section class="transactions-banner-section light">
    <div class="container">
        <h1 class="transactions-banner-title">
            <?php // if ( ! empty( $banner_subtext ) ) { ?>
                <!--<span><?php // echo $banner_subtext; ?></span>-->
            <?php // } ?>
            <?php printf( __( 'Search Results for: %s', 'seg' ), esc_html( get_search_query() ) ); ?>
        </h1>
    </div>
</section>
<section class="transactions-section research-overview-section">
    <div class="container resFilter">
        <div class="row appenddata" id="appendd">
        <?php if ( have_posts() ) {
                // Start the loop.
                while ( have_posts() ) : the_post();
                        /**
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', 'search' );

                // End the loop.
                endwhile;
            } else {
                echo "<div class='no_result_wrap'><h2>No result found!!</h2></div>";
            }
        ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>