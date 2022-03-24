<?php
if ( class_exists( 'acf' ) ) {
    $title       = get_sub_field( 'title' );
    $description = get_sub_field( 'description' );
}
if ( ! empty( $title ) || ! empty( $description ) ) {
    ?>
    <div class="score-section">
        <div class="container">
            <div class="score-content">
                <?php if ( ! empty( $title ) ) { ?>
                    <h2><?php echo $title; ?></h2>
                <?php } echo $description; ?>
            </div>
        </div>
    </div>
<?php } ?>
