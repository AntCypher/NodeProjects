<?php
if ( class_exists( 'acf' ) ) {
    $mission_title      = get_sub_field( 'helthcare_our_mission_highlight_title' );
    $mission_content    = get_sub_field( 'helthcare_our_mission_highlight_con' );
    $mission_list_items = get_sub_field( 'helthcare_our_mission_highlight_list_items' );
    $mission_buttons_re = get_sub_field( 'helthcare_our_mission_highlight_buttons' );
}
?>
<?php if ( ! empty( $mission_title ) || ! empty( $mission_content ) || ! empty( $mission_list_items ) || ! empty( $mission_buttons_re ) ) { ?>
    <section class="climate-section" id="climate-highlight">
        <div class="container">
            <div class="climate-wrap">
                <div class="title-part">
                    <?php if ( ! empty( $mission_title ) ) { ?>
                        <h2><?php echo $mission_title; ?></h2>
                    <?php } if ( ! empty( $mission_content ) ) { ?>
                        <div class="content">
                            <?php echo $mission_content; ?>
                        </div>
                    <?php } ?>
                </div>
                <?php if ( ! empty( $mission_list_items ) ) { ?>
                    <div class="list-wrap">
                        <?php
                        foreach ( $mission_list_items as $mission_list_items_val ) {
                            $list_title = $mission_list_items_val[ 'list_title' ];
                            $list_descr = $mission_list_items_val[ 'list_descr' ];
                            ?>
                            <div class="item-list">
                                <div class="icon">
                                    <span><svg width="21" height="37" viewBox="0 0 21 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.9418 16.2275C11.7734 13.955 7.19956 14.4292 5.91009 16.9676C5.15839 18.4479 5.69037 18.7023 6.88731 18.0778C7.7778 17.621 7.3152 17.2047 8.21725 16.6149C9.1193 16.0251 10.7095 16.1176 11.97 16.6785C12.9877 17.1353 12.4673 18.2629 11.1316 18.552L10.8656 18.604C10.8656 19.1129 10.8656 19.6275 10.8656 20.1364C14.6704 18.8006 14.7976 17.1353 13.9707 16.2275H13.9418ZM6.62135 17.0833C6.62135 17.0833 6.67915 17.037 6.5635 17.2105C6.6413 17.2747 6.69276 17.3652 6.70806 17.4649C6.70784 17.4977 6.69988 17.53 6.6848 17.5592C6.66973 17.5883 6.648 17.6135 6.62135 17.6326L6.58087 17.6673C6.46522 17.754 6.39005 17.8176 6.32644 17.8176C6.32014 17.8207 6.3132 17.8223 6.30618 17.8223C6.29917 17.8223 6.29227 17.8207 6.28596 17.8176C6.2397 17.7829 6.2397 17.7135 6.28596 17.5574C6.34477 17.3695 6.43257 17.192 6.54617 17.0312C6.55503 17.0258 6.56543 17.0235 6.57575 17.0248C6.58606 17.026 6.59569 17.0306 6.60303 17.038C6.61038 17.0453 6.61504 17.0549 6.61627 17.0652C6.61749 17.0755 6.6152 17.086 6.60977 17.0948L6.62135 17.0833ZM7.79515 15.6261C8.90001 15.0716 10.1632 14.9183 11.3686 15.1924C13.4445 15.6377 13.9592 16.9734 13.9592 16.9734C13.9592 16.9734 11.97 14.3829 7.79515 15.6261Z" fill="#F4BC47"/>
                                            <path d="M12.6471 23.3454C11.7325 22.8555 10.7617 22.4788 9.75596 22.2236C9.24142 22.1168 8.73362 21.9797 8.2352 21.8131C7.40254 21.576 7.44881 21.5182 7.44881 21.5182C7.44881 21.5182 7.39676 21.1481 7.69744 21.2059C8.22321 20.9863 8.75971 20.7933 9.30492 20.6277C9.46104 20.5872 9.20663 20.6624 9.35119 20.6277V20.5178C9.35119 19.9859 9.3512 19.4597 9.32228 18.9335C8.9233 19.0144 8.53588 19.1069 8.16581 19.2168C7.3505 19.4539 6.39063 19.795 5.96274 20.593C5.78661 20.9956 5.75665 21.4471 5.87807 21.8694C5.99949 22.2917 6.26463 22.6584 6.62769 22.9059C7.56446 23.5288 8.60994 23.9702 9.70969 24.207C10.2301 24.3573 10.7621 24.5019 11.2709 24.6985C11.3345 24.6985 11.9417 24.9413 12.0342 25.1032C12.1267 25.2167 12.1773 25.3587 12.1773 25.5051C12.1773 25.6515 12.1267 25.7935 12.0342 25.907C12.0342 25.907 12.2135 25.5022 11.8434 25.456C11.6302 25.6244 11.3971 25.7662 11.1495 25.8781C11.0107 25.9533 10.8662 26.0169 10.7216 26.0862L10.6696 27.7227C11.1702 27.5644 11.659 27.3712 12.1325 27.1444C12.8379 26.7975 13.6648 26.1961 13.7631 25.3403C13.8056 25.0787 13.7876 24.8108 13.7104 24.5572C13.6332 24.3036 13.4989 24.071 13.3179 23.8774C13.1286 23.6828 12.9148 23.5136 12.6818 23.3743L12.6471 23.3454ZM13.5087 25.109C12.7743 23.9526 13.1965 23.8369 8.5301 22.1716C9.64816 22.4815 10.7436 22.8679 11.8087 23.328C13.4277 23.9988 13.5087 24.9355 13.5087 25.1321" fill="#F4BC47"/>
                                            <path d="M9.8253 34.6844C9.60222 34.8601 9.40724 35.0687 9.24706 35.3032C9.13979 35.4876 9.07161 35.6921 9.04674 35.904C9.02187 36.1158 9.04085 36.3306 9.1025 36.5348C9.0423 36.1574 9.12697 35.7711 9.33956 35.4535C9.47573 35.2817 9.63534 35.1299 9.81372 35.0025V34.6844" fill="#F4BC47"/>
                                            <path d="M9.7037 30.1163C9.23853 29.8992 8.84815 29.5491 8.58192 29.1102V29.0755C8.47199 29.1737 8.40375 29.3103 8.39112 29.4571C8.36802 29.1948 8.42227 28.9315 8.54722 28.6997C8.69324 28.5054 8.89492 28.3602 9.12546 28.2833C9.28158 28.2081 9.43771 28.1388 9.59962 28.0752L9.5476 26.5602C8.71494 26.9187 7.57001 27.416 7.36185 28.3932C7.15368 29.3704 7.84178 30.1857 8.6224 30.6599C9.03823 30.8958 9.46898 31.1044 9.91189 31.2844C10.3799 31.4435 10.8121 31.693 11.184 32.0187C11.3216 32.1905 11.4022 32.4009 11.4147 32.6206C11.4271 32.8403 11.3707 33.0584 11.2534 33.2446C11.0476 33.6302 10.7617 33.9673 10.4149 34.2334C10.4149 34.3895 10.4149 34.5398 10.4149 34.6786L10.519 34.615C11.3228 34.0888 12.2537 33.2562 12.0571 32.1691C11.8605 31.082 10.5826 30.6252 9.74418 30.1337L9.7037 30.1163ZM7.70881 29.1449C7.63788 28.9914 7.60454 28.8232 7.61158 28.6543C7.61862 28.4853 7.6658 28.3205 7.74926 28.1734C7.94579 27.7642 8.2735 27.4325 8.68024 27.2309C8.34117 27.4113 8.06596 27.6919 7.89212 28.0344C7.71829 28.3769 7.65428 28.7647 7.70881 29.1449ZM11.7565 32.8167C11.7565 32.8167 12.1207 31.9609 10.8891 31.2381C10.2262 30.8886 9.60204 30.4699 9.02717 29.9891C9.02717 29.9891 9.44351 30.2782 10.8081 31.0299C12.1728 31.7816 11.7565 32.8167 11.7565 32.8167Z" fill="#F4BC47"/>
                                            <path d="M9.4375 16.389C9.4375 18.355 9.5011 20.2343 9.54158 22.0037L9.78443 22.0789L10.2586 22.2292C10.2586 20.4309 10.2933 18.4707 10.3106 16.3948C10.1508 16.3864 9.99056 16.3864 9.8307 16.3948C9.69192 16.3948 9.56471 16.3948 9.4375 16.3948" fill="#F4BC47"/>
                                            <path d="M10.4033 22.2755L10.6115 22.3449C10.6577 20.4945 10.6924 18.5285 10.7213 16.4584L10.4958 16.418C10.4958 18.5112 10.438 20.4656 10.4033 22.2755Z" fill="#F4BC47"/>
                                            <path d="M10.2357 24.4729L9.84825 24.363L9.59961 24.2878C9.65743 26.41 9.72104 28.3355 9.78465 29.9892L10.1547 30.1974C10.1547 28.7113 10.2068 26.7685 10.2357 24.4729Z" fill="#F4BC47"/>
                                            <path d="M10.1885 14.6083H10.3157C10.3157 12.8736 10.3157 14.1573 10.3157 12.2954C10.3948 12.2823 10.4723 12.2609 10.547 12.2318C10.547 14.1226 10.547 12.8505 10.547 14.6141H10.7725C10.7725 12.7001 10.8072 5.46642 10.8072 3.43103C10.5864 3.54146 10.3429 3.59895 10.096 3.59895C9.84909 3.59895 9.60559 3.54146 9.38477 3.43103C9.38477 5.47798 9.38476 12.7175 9.41946 14.6372C9.67655 14.6053 9.93526 14.5879 10.1943 14.5852" fill="#F4BC47"/>
                                            <path d="M10.1656 31.5622C10.1193 32.7649 10.0904 33.4241 10.0904 33.4241C10.0904 33.4241 10.0904 32.7591 10.1309 31.5448L9.95742 31.4697L9.8418 31.4176C9.97479 34.887 10.0904 36.934 10.0904 36.934C10.0904 36.934 10.2003 34.968 10.3333 31.6373L10.1656 31.5622Z" fill="#F4BC47"/>
                                            <path d="M10.403 30.3245C10.4666 28.6592 10.5302 26.7221 10.5938 24.5768L10.3914 24.519C10.3336 26.8319 10.2758 28.7459 10.2295 30.2262H10.2584L10.403 30.3071" fill="#F4BC47"/>
                                            <path d="M10.1203 0.198673C9.1948 0.197529 8.28978 0.470932 7.51974 0.984253C6.7497 1.49757 6.14923 2.22776 5.79428 3.08244C5.43933 3.93712 5.34586 4.87787 5.5257 5.78568C5.70555 6.69349 6.15062 7.52754 6.80461 8.18234C7.4586 8.83714 8.29212 9.28324 9.19971 9.46421C10.1073 9.64518 11.0482 9.55287 11.9033 9.19898C12.7584 8.84509 13.4893 8.24554 14.0036 7.47613C14.5179 6.70673 14.7924 5.80207 14.7924 4.87662C14.7932 4.26257 14.6729 3.65441 14.4384 3.08689C14.204 2.51937 13.8599 2.00362 13.426 1.56916C12.9921 1.1347 12.4767 0.790041 11.9095 0.554882C11.3423 0.319724 10.7343 0.198673 10.1203 0.198673ZM7.576 8.09739C6.88115 7.61964 6.3967 6.89293 6.22295 6.06778C6.22295 6.06778 6.32123 6.95827 7.58179 7.51916C8.84234 8.08004 8.73826 8.83753 7.58179 8.09739" fill="#F4BC47"/>
                                            <path d="M9.20664 0.800072L8.90594 1.10073H8.54169L8.42603 0.985112H7.79574L7.46035 1.32625V1.5055L7.125 1.8351H7.51241L7.80731 1.54598H8.09064L8.36819 1.82353V2.07795L8.65152 2.36128L8.43757 2.57526V2.97421L8.85971 3.39635L9.04475 3.58139V3.89941H9.35119L9.51312 4.0613L9.83114 4.37357H10.3168L10.5655 4.62799L10.7332 4.79567L10.8604 4.66847V4.22322H10.6753V4.00349H10.4788L10.2821 4.2001H10.0277L9.86583 4.03818V3.55823L10.0162 3.40213H10.3168L10.4036 3.32117H10.5886L10.7158 3.44837H10.9182V3.26333L11.1264 3.05517L11.2998 2.88171L11.1495 2.73715L11.4849 2.39597V2.24566L11.5716 2.15891H11.7914L11.907 2.27457L12.0515 2.13001L11.7624 1.8351H11.508L11.3345 1.66164H11.1148L10.976 1.52287H10.6349L10.8199 1.70212V2.07216H10.6985L10.5308 1.90449H10.2995L9.90053 1.51129V1.36094L10.0856 1.1759H10.3515L10.4845 1.04292L10.7679 1.32625H10.9992V1.0834H11.2652L11.7798 1.59225L11.9533 1.41879L11.693 1.15858V1.00823C11.1712 0.67562 10.5754 0.476997 9.95833 0.429993L9.53623 0.857882L9.20664 0.800072Z" fill="white"/>
                                            <path d="M12.6697 5.36799H12.4442V5.07309L12.2823 4.91118L12.0857 4.71458H11.9122L11.7734 4.57581H11.5017L11.2472 4.83023V5.102L10.9466 5.40268V5.89418L11.0911 6.03874L11.3455 6.29317V6.56494L11.0102 6.90031L10.3799 7.53059H10.7384L11.1316 7.13739H11.3571L11.6289 6.86562H11.8775L12.369 6.37412L12.5425 6.20643L12.8894 5.85371V5.5935L12.6697 5.36799Z" fill="white"/>
                                            <path d="M2.1401 8.6294C2.1401 8.6294 1.80472 10.3641 7.98606 12.5788C7.81837 12.174 7.8415 11.6883 7.65646 11.2835C6.40169 8.53111 5.59793 7.61747 2.91492 6.73277C0.763881 6.02154 0.295529 5.57629 0.295529 5.57629C0.295529 5.57629 -1.53749 12.7406 4.22753 14.007C6.45952 14.4927 7.36733 13.7988 8.91122 13.7005C1.72953 11.4454 2.1401 8.6294 2.1401 8.6294Z" fill="#F4BC47"/>
                                            <path d="M17.9781 9.20753C17.9781 9.20753 18.4581 10.3293 12.2767 12.544C12.4444 12.1392 12.456 11.6651 12.6063 11.2487C13.5142 8.72762 14.5492 7.58268 17.3537 6.69798C19.5047 6.01566 19.9673 5.5415 19.9673 5.5415C19.9673 5.5415 22.3727 12.5671 16.0353 13.9722C13.8033 14.4637 12.8955 13.764 11.3516 13.6657C18.539 11.4453 17.9781 9.23065 17.9781 9.23065" fill="#F4BC47"/>
                                        </svg>
                                    </span>
                                </div>
                                <?php if ( ! empty( $list_title ) ) { ?>
                                    <h3><?php echo $list_title; ?></h3>
                                <?php } if ( ! empty( $list_descr ) ) { ?>
                                    <div class="content"><?php echo $list_descr; ?></div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
                <?php if ( ! empty( $mission_buttons_re ) ) { ?>
                    <div class="climate-btn">
                        <?php
                        foreach ( $mission_buttons_re as $mission_buttons_re_val ) {
                            $cta          = $mission_buttons_re_val[ 'cta' ];
                            $button_color = $mission_buttons_re_val[ 'button_color' ];
                            if ( $button_color == 'btn-tertiary' ) {
                                $class = 'btn-tertiary';
                            } elseif ( $button_color == 'btn-tertiary-transparent' ) {
                                $class = 'btn-tertiary-transparent';
                            } elseif ( $button_color == 'btn-secondary' ) {
                                $class = 'btn-secondary';
                            }
                            ?>
                            <a href="<?php echo $cta[ 'url' ]; ?>" target="<?php echo $cta[ 'target' ]; ?>" class="btn <?php echo $class; ?>"><?php echo $cta[ 'title' ]; ?>
                                <span>
                                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"/>
                                    </svg>
                                </span>
                            </a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>