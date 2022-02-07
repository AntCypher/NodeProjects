<?php
if ( class_exists( 'acf' ) ) {
    $counter_list  = get_sub_field( 'helthcare_number_count_list' );
    $counter_title = get_sub_field( 'helthcare_number_count_ttl' );
}
?>
<?php if ( ! empty( $counter_list ) || ! empty( $counter_title ) ) { ?>
    <section class="square-foot" id="square-foot">
        <div class="container">
            <div class="square-wrap">
                <?php
                if ( ! empty( $counter_list ) ) {
                    foreach ( $counter_list as $list ) {
                        $list_count = $list[ 'list_count' ];
                        $list_title = $list[ 'list_title' ];
                        $list_descr = $list[ 'list_descr' ];
                        ?>
                        <div class="list">
                            <?php if ( ! empty( $list_count ) ) { ?>
                                <h2><?php echo $list_count; ?></h2>
                            <?php } if ( ! empty( $list_title ) ) { ?>
                                <h6><?php echo $list_title; ?></h6>
                                <?php
                            }
                            if ( ! empty( $list_descr ) ) {
                                echo $list_descr;
                            }
                            ?>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <?php if ( ! empty( $counter_title ) ) { ?>
                <h3><?php echo $counter_title; ?></h3>
            <?php } ?>
        </div>
    </section>
<?php } ?>