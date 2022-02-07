<?php
if ( class_exists( 'acf' ) ) {
    $book_high_title    = get_sub_field( 'helthcare_book_h_title' );
    $book_high_sbtitle  = get_sub_field( 'helthcare_book_h_subtitle' );
    $book_high_descr    = get_sub_field( 'helthcare_book_h_descr' );
    $book_high_img      = get_sub_field( 'helthcare_book_h_img' );
    $book_high_img_url  = ! empty( $book_high_img ) ? $book_high_img[ 'url' ] : '#';
    $book_high_alt      = ! empty( $book_high_img[ 'alt' ] ) ? $book_high_img[ 'alt' ] : get_bloginfo();
    $book_h_bg          = get_sub_field( 'helthcare_book_h_bg' );
    $book_h_bg_url      = ! empty( $book_h_bg ) ? $book_h_bg[ 'url' ] : '#';
    $book_h_bg_alt      = ! empty( $book_h_bg[ 'alt' ] ) ? $book_h_bg[ 'alt' ] : get_bloginfo();
    $book_high_logo     = get_sub_field( 'helthcare_book_h_logo' );
    $book_high_logo_url = ! empty( $book_high_logo ) ? $book_high_logo[ 'url' ] : '#';
    $book_high_logo_alt = ! empty( $book_high_logo[ 'alt' ] ) ? $book_high_logo[ 'alt' ] : get_bloginfo();
    $book_high_cta      = get_sub_field( 'helthcare_book_h_cta' );
    if ( ! empty( $book_high_cta ) ) {
        $book_high_cta_title  = $book_high_cta[ 'title' ];
        $book_high_cta_link   = $book_high_cta[ 'url' ];
        $book_high_cta_target = $book_high_cta[ 'target' ];
    }
}
?>
<?php
if ( ! empty( $book_high_sbtitle ) || ! empty( $book_high_title ) || ! empty( $book_high_img ) || ! empty( $book_high_descr ) ||
        ! empty( $book_high_cta ) || ! empty( $book_high_logo ) || ! empty( $book_h_bg ) ) {
    ?>
    <section class="book-highlight" id="book-highlight">
        <div class="container">
            <div class="book-hight-wap" style="background-image:url('<?php echo $book_h_bg_url; ?>');">
                <div class="book-info">
                    <?php if ( ! empty( $book_high_title ) ) { ?>
                        <span><?php echo $book_high_title; ?></span>
                    <?php } if ( ! empty( $book_high_sbtitle ) ) { ?>
                        <h3><?php echo $book_high_sbtitle; ?></h3>
                        <?php
                    } echo $book_high_descr;
                    if ( ! empty( $book_high_cta ) ) {
                        ?>
                        <a href="<?php echo $book_high_cta_link; ?>" target="<?php echo $book_high_cta_target; ?>" class="round-icon-btn">
                            <span>
                                <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path>
                                </svg>
                            </span>
                            <?php echo $book_high_cta_title; ?>
                        </a>
                    <?php } ?>        
                </div>
                <?php if ( ! empty( $book_high_img ) ) { ?>
                    <div class="word-img">
                        <img src="<?php echo $book_high_img_url; ?>" alt="<?php echo $book_high_alt; ?>">
                    </div>
                <?php } if ( ! empty( $book_high_logo ) ) { ?>
                    <div class="img-part">
                        <img src="<?php echo $book_high_logo_url; ?>" alt="<?php echo $book_high_logo_alt; ?>">
                    </div>
                <?php } ?>
            </div>
            <?php if ( ! empty( $book_high_cta ) ) { ?>
                <div class="book-info-btn">
                    <a href="<?php echo $book_high_cta_link; ?>" target="<?php echo $book_high_cta_target; ?>" class="btn btn-secondary"><?php echo $book_high_cta_title; ?> 
                        <span>
                            <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"/>
                            </svg>
                        </span>
                    </a>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>