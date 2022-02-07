<?php
// Exit if accessed directly
if( ! defined ( 'ABSPATH' ) )
    exit;
/*
 * Template Name: Resources Template
 *
 * @package WordPress
 * @subpackage helthcare
 * @since helthcare 1.0
 */
get_header ();
?>



<div class="main-resources-page">
    <section class="main-resources_banner">
        <div class="container">
            <div class="resources_banner-row">
                <div class="resources_banner-left">
                    <div class="resources_banner-heading">
                        <i class="brand-rounded-icon"><img src="https://helthcare.compview.co/wp-content/themes/Helthcare/images/words-round-secondary.svg" alt=""></i>
                        <h1 class="resources_banner-title">RESOURCE CENTER</h1>
                        <div class="resources_banner-subtitle">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
                <div class="resources_banner-right">
                    <div class="highlighted_resources">
                        <div class="highlighted_resources-title"><h2>HIGHLIGHTED RESOURCES</h2></div>

                        <div class="highlighted_resources-row">
                            <div class="highlighted_resources-col">
                                <div class="selected-resources-box">
                                    <div class="resources-img">
                                        <img src="https://helthcare.compview.co/wp-content/uploads/2021/12/AdobeStock_280199549_Preview-1.png" alt="">
                                    </div>
                                    <div class="resources-info">
                                        <h2 class="resources-title"><a href="#">INTERACTIVE HEALTH CAMPUS</a></h2>
                                        <p>Lorem ipsum dolor sit amet, dolar consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="highlighted_resources-col">
                                <div class="selected-resources-box">
                                    <div class="resources-img">
                                        <img src="https://helthcare.compview.co/wp-content/uploads/2021/12/AdobeStock_280199549_Preview-1.png" alt="">
                                    </div>
                                    <div class="resources-info">
                                        <h2 class="resources-title"><a href="#">INTERACTIVE HEALTH CAMPUS</a></h2>
                                        <p>Lorem ipsum dolor sit amet, dolar consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="highlighted_resources-row">
                            <div class="highlighted_resources-col">   
                                <div class="resources-box">
                                    <div class="resources-img">
                                        <img src="https://helthcare.compview.co/wp-content/uploads/2021/12/AdobeStock_280199549_Preview-1.png" alt="">
                                        <div class="resources-cat">
                                            <div class="resources-cat-icon">
                                                <img src="https://helthcare.compview.co/wp-content/themes/Helthcare/images/articles-reserch-icon.svg" alt="">
                                            </div>
                                            <span>
                                                <a href="#" rel="tag">PODCASTS</a>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="resources-info">
                                        <h2 class="resources-title">
                                            <a href="#">LOREM IPSUM DOLAR SIT AMET CONSECTUER DOLAR IPSUM DOLAR IPSUM</a>
                                        </h2>
                                        <p>Lorem ipsum dolor sit amet, dolar consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="highlighted_resources-col">
                                <div class="resources-box">
                                    <div class="resources-img">
                                        <img src="https://helthcare.compview.co/wp-content/uploads/2021/12/AdobeStock_280199549_Preview-1.png" alt="">
                                        <div class="resources-cat">
                                            <div class="resources-cat-icon">
                                                <img src="https://helthcare.compview.co/wp-content/themes/Helthcare/images/articles-reserch-icon.svg" alt="">
                                            </div>
                                            <span>
                                                <a href="#" rel="tag">PODCASTS</a>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="resources-info">
                                        <h2 class="resources-title">
                                            <a href="#">LOREM IPSUM DOLAR SIT AMET CONSECTUER DOLAR IPSUM DOLAR IPSUM</a>
                                        </h2>
                                        <p>Lorem ipsum dolor sit amet, dolar consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="resources_listing-section">
        <div class="container">
            <div class="resources_listing-row">
                <div class="resources_listing-left">
                    <div class="resources_listing-col">
                        <h3 class="radio-group-title">MEDIA TYPE</h3>
                        <ul class="radio-group media_type-group">
                            <li>
                                <input type="radio" id="test1" name="media_type-radio-group" checked>
                                <label for="test1">Articles & Research</label>
                            </li>
                            <li>
                                <input type="radio" id="test2" name="media_type-radio-group">
                                <label for="test2">On-Demand Webinars</label>
                            </li>
                            <li>
                                <input type="radio" id="test3" name="media_type-radio-group">
                                <label for="test3">Upcoming Webinars</label>
                            </li>
                            <li>
                                <input type="radio" id="test4" name="media_type-radio-group">
                                <label for="test4">Guides</label>
                            </li>
                            <li>
                                <input type="radio" id="test5" name="media_type-radio-group">
                                <label for="test5">Case Studies</label>
                            </li>
                            <li>
                                <input type="radio" id="test6" name="media_type-radio-group">
                                <label for="test6">Podcasts</label>
                            </li>
                        </ul>
                    </div>
                    <div class="resources_listing-col">
                        <h3 class="radio-group-title">CATEGORY</h3>
                        <ul class="radio-group category-group">
                            <li>
                                <input type="radio" id="test7" name="category-radio-group" checked>
                                <label for="test7">Sustainability</label>
                            </li>
                            <li>
                                <input type="radio" id="test8" name="category-radio-group">
                                <label for="test8">Climate Regulation</label>
                            </li>
                            <li>
                                <input type="radio" id="test9" name="category-radio-group">
                                <label for="test9">Financial Strategy</label>
                            </li>
                            <li>
                                <input type="radio" id="test10" name="category-radio-group">
                                <label for="test10">Category</label>
                            </li>
                            <li>
                                <input type="radio" id="test11" name="category-radio-group">
                                <label for="test11">Category</label>
                            </li>
                            <li>
                                <input type="radio" id="test12" name="category-radio-group">
                                <label for="test12">Category</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="resources_listing-right">
                    <div class="resources_box-row">

                        <div class="resources_box-col">   
                            <div class="resources-box">
                                <div class="resources-img">
                                    <img src="https://helthcare.compview.co/wp-content/uploads/2021/12/AdobeStock_280199549_Preview-1.png" alt="">
                                    <div class="resources-cat">
                                        <div class="resources-cat-icon">
                                            <img src="https://helthcare.compview.co/wp-content/themes/Helthcare/images/articles-reserch-icon.svg" alt="">
                                        </div>
                                        <span>
                                            <a href="#" rel="tag">PODCASTS</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="resources-info">
                                    <div class="resources-subcat"><a href="#" rel="tag">Climate Regulation</a></div>
                                    <h2 class="resources-title">
                                        <a href="#">LOREM IPSUM DOLAR SIT AMET CONSECTUER DOLAR IPSUM DOLAR IPSUM</a>
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet, dolar consectetur adipiscing elit.</p>
                                    
                                    <div class="resources-date">
                                        <span class="resources-date-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                <path d="M15.1376 1.89282H14.1162V2.47655V3.28343C14.1162 3.93872 13.5851 4.46983 12.9298 4.46983H12.8527C12.1974 4.46983 11.6663 3.93872 11.6663 3.28343V2.47655V1.89282H5.23331V2.47655V3.28343C5.23331 3.93872 4.7022 4.46983 4.04691 4.46983H3.96983C3.31454 4.46983 2.78342 3.93872 2.78342 3.28343V2.47655V1.89282H1.88806C0.974843 1.89282 0.234375 2.63329 0.234375 3.5465V15.4326C0.234375 16.346 0.974843 17.0863 1.88806 17.0863H12.7574L13.5365 17.0604C13.6327 17.0326 13.7238 16.9824 13.7977 16.9044L16.4682 14.0935C16.4962 14.0641 16.5313 14.0229 16.5683 13.9778C16.7121 13.8021 16.7914 13.5819 16.7914 13.3547V3.54669C16.7914 2.63329 16.051 1.89282 15.1376 1.89282ZM13.5124 15.508V14.0652C13.5124 13.7977 13.73 13.5801 13.9975 13.5801H15.3442L13.5124 15.508ZM15.6227 12.4113H13.9975C13.0856 12.4113 12.3436 13.1533 12.3436 14.0652V15.9176H1.88806C1.62057 15.9176 1.40312 15.7001 1.40312 15.4326V6.16196H15.6227V12.4113Z" fill="#0E2050"/>
                                                <path d="M4.04687 3.96029C4.42014 3.96029 4.72368 3.65674 4.72368 3.28348V1.33526C4.72368 0.961993 4.42014 0.658447 4.04687 0.658447H3.96978C3.59651 0.658447 3.29297 0.961993 3.29297 1.33526V3.28348C3.29297 3.65674 3.59651 3.96029 3.96978 3.96029H4.04687Z" fill="#0E2050"/>
                                                <path d="M12.9297 3.96029C13.3029 3.96029 13.6067 3.65674 13.6067 3.28348V1.33526C13.6067 0.961993 13.3029 0.658447 12.9297 0.658447H12.8526C12.4793 0.658447 12.1758 0.961993 12.1758 1.33526V3.28348C12.1758 3.65674 12.4793 3.96029 12.8526 3.96029H12.9297Z" fill="#0E2050"/>
                                                <path d="M4.58427 7.76892H3.2207V9.13249H4.58427V7.76892Z" fill="#0E2050"/>
                                                <path d="M7.66825 7.76892H6.30469V9.13249H7.66825V7.76892Z" fill="#0E2050"/>
                                                <path d="M10.7532 7.76892H9.38965V9.13249H10.7532V7.76892Z" fill="#0E2050"/>
                                                <path d="M13.8372 7.76892H12.4736V9.13249H13.8372V7.76892Z" fill="#0E2050"/>
                                                <path d="M4.58427 10.3986H3.2207V11.7621H4.58427V10.3986Z" fill="#0E2050"/>
                                                <path d="M7.66825 10.3986H6.30469V11.7621H7.66825V10.3986Z" fill="#0E2050"/>
                                                <path d="M10.7532 10.3986H9.38965V11.7621H10.7532V10.3986Z" fill="#0E2050"/>
                                                <path d="M13.8372 10.3986H12.4736V11.7621H13.8372V10.3986Z" fill="#0E2050"/>
                                                <path d="M4.58427 13.0282H3.2207V14.3918H4.58427V13.0282Z" fill="#0E2050"/>
                                                <path d="M7.66825 13.0282H6.30469V14.3918H7.66825V13.0282Z" fill="#0E2050"/>
                                                <path d="M10.7532 13.0282H9.38965V14.3918H10.7532V13.0282Z" fill="#0E2050"/>
                                            </svg>
                                        </span>
                                        <span>December 20, 2021</span>
                                    </div>
                                                                            
                                    <div class="resources-video-time">
                                        <span class="resources-video-time-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                <path d="M8.88102 16.7709C13.4095 16.7709 17.1146 13.0658 17.1146 8.53739C17.1146 4.00893 13.4095 0.303833 8.88102 0.303833C4.35256 0.303833 0.647461 4.00893 0.647461 8.53739C0.647461 13.0658 4.35256 16.7709 8.88102 16.7709ZM8.88102 0.81843C13.1522 0.81843 16.6 4.26623 16.6 8.53739C16.6 12.8085 13.1522 16.2563 8.88102 16.2563C4.60986 16.2563 1.16206 12.8085 1.16206 8.53739C1.16206 4.26623 4.60986 0.81843 8.88102 0.81843Z" fill="#0E2050"/>
                                                <path d="M8.88087 15.3815C12.6374 15.3815 15.725 12.3454 15.725 8.53738C15.725 4.78082 12.6889 1.69324 8.88087 1.69324C7.33708 1.69324 5.79329 2.20783 4.60972 3.18557C3.42614 4.11184 2.60279 5.50126 2.24257 6.94213C2.19111 7.09651 2.29403 7.19943 2.44841 7.25089C2.60279 7.30235 2.70571 7.19943 2.75717 7.04505C3.42614 4.1633 5.94767 2.15638 8.88087 2.15638C12.3287 2.15638 15.159 4.98666 15.2104 8.48592C15.2104 11.9337 12.3801 14.764 8.88087 14.8155C5.63891 14.8155 2.86008 12.2939 2.60279 9.05198C2.60279 8.8976 2.44841 8.79468 2.34549 8.79468C2.29403 8.79468 2.19111 8.84614 2.19111 8.8976C2.13965 8.94906 2.13965 9.00052 2.13965 9.10344C2.29403 10.8016 3.06592 12.3969 4.30096 13.529C5.53599 14.7125 7.13124 15.3815 8.88087 15.3815Z" fill="#0E2050"/>
                                                <path d="M2.34618 8.33137C2.50056 8.33137 2.60348 8.22845 2.60348 8.07407C2.60348 8.02261 2.60348 7.91969 2.55202 7.91969C2.50056 7.86823 2.4491 7.81677 2.39764 7.81677C2.24326 7.81677 2.14034 7.91969 2.14034 8.07407C2.08888 8.17699 2.1918 8.27991 2.34618 8.33137Z" fill="#0E2050"/>
                                                <path d="M8.88132 4.0603C8.72694 4.0603 8.62402 4.16322 8.62402 4.3176V8.5373C8.62402 8.58876 8.62402 8.58876 8.62402 8.64022C8.62402 8.69168 8.67548 8.69168 8.67548 8.74314L10.9912 11.0588C11.0426 11.1103 11.0941 11.1103 11.197 11.1103C11.2999 11.1103 11.3514 11.1103 11.4028 11.0588C11.5058 10.9559 11.5058 10.8015 11.4028 10.6986L9.13862 8.43438V4.3176C9.13862 4.21468 9.0357 4.0603 8.88132 4.0603Z" fill="#0E2050"/>
                                            </svg>
                                        </span>
                                        <span>45 minutes</span>
                                    </div>

                                    <div class="resources-box-btn">
                                        <a href="#" class="round-icon-btn" target="_blank">
                                            <span>
                                                <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path>
                                                </svg>
                                            </span>CONTINUE READING
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="resources_box-col">
                            <div class="resources-box">
                                <div class="resources-img">
                                    <img src="https://helthcare.compview.co/wp-content/uploads/2021/12/AdobeStock_280199549_Preview-1.png" alt="">
                                    <div class="resources-cat">
                                        <div class="resources-cat-icon">
                                            <img src="https://helthcare.compview.co/wp-content/themes/Helthcare/images/articles-reserch-icon.svg" alt="">
                                        </div>
                                        <span>
                                            <a href="#" rel="tag">PODCASTS</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="resources-info">
                                    <h2 class="resources-title">
                                        <a href="#">LOREM IPSUM DOLAR SIT AMET CONSECTUER DOLAR IPSUM DOLAR IPSUM</a>
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet, dolar consectetur adipiscing elit.</p>

                                    <div class="resources-box-btn">
                                        <a href="#" class="round-icon-btn" target="_blank">
                                            <span>
                                                <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path>
                                                </svg>
                                            </span>REGISTER
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="resources_box-col">
                            <div class="resources-box">
                                <div class="resources-img">
                                    <img src="https://helthcare.compview.co/wp-content/uploads/2021/12/AdobeStock_280199549_Preview-1.png" alt="">
                                    <div class="resources-cat">
                                        <div class="resources-cat-icon">
                                            <img src="https://helthcare.compview.co/wp-content/themes/Helthcare/images/articles-reserch-icon.svg" alt="">
                                        </div>
                                        <span>
                                            <a href="#" rel="tag">PODCASTS</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="resources-info">
                                    <h2 class="resources-title">
                                        <a href="#">LOREM IPSUM DOLAR SIT AMET CONSECTUER DOLAR IPSUM DOLAR IPSUM</a>
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet, dolar consectetur adipiscing elit.</p>

                                    <div class="resources-box-btn">
                                        <a href="#" class="round-icon-btn" target="_blank">
                                            <span>
                                                <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path>
                                                </svg>
                                            </span>CONTINUE READING
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="resources_box-col">
                            <div class="resources-box">
                                <div class="resources-img">
                                    <img src="https://helthcare.compview.co/wp-content/uploads/2021/12/AdobeStock_280199549_Preview-1.png" alt="">
                                    <div class="resources-cat">
                                        <div class="resources-cat-icon">
                                            <img src="https://helthcare.compview.co/wp-content/themes/Helthcare/images/articles-reserch-icon.svg" alt="">
                                        </div>
                                        <span>
                                            <a href="#" rel="tag">PODCASTS</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="resources-info">
                                    <h2 class="resources-title">
                                        <a href="#">LOREM IPSUM DOLAR SIT AMET CONSECTUER DOLAR IPSUM DOLAR IPSUM</a>
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet, dolar consectetur adipiscing elit.</p>

                                    <div class="resources-box-btn">
                                        <a href="#" class="round-icon-btn" target="_blank">
                                            <span>
                                                <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path>
                                                </svg>
                                            </span>CONTINUE READING
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="resources_box-col">
                            <div class="resources-box">
                                <div class="resources-img">
                                    <img src="https://helthcare.compview.co/wp-content/uploads/2021/12/AdobeStock_280199549_Preview-1.png" alt="">
                                    <div class="resources-cat">
                                        <div class="resources-cat-icon">
                                            <img src="https://helthcare.compview.co/wp-content/themes/Helthcare/images/articles-reserch-icon.svg" alt="">
                                        </div>
                                        <span>
                                            <a href="#" rel="tag">PODCASTS</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="resources-info">
                                    <h2 class="resources-title">
                                        <a href="#">LOREM IPSUM DOLAR SIT AMET CONSECTUER DOLAR IPSUM DOLAR IPSUM</a>
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet, dolar consectetur adipiscing elit.</p>

                                    <div class="resources-box-btn">
                                        <a href="#" class="round-icon-btn" target="_blank">
                                            <span>
                                                <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path>
                                                </svg>
                                            </span>CONTINUE READING
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="resources_box-col">
                            <div class="resources-box">
                                <div class="resources-img">
                                    <img src="https://helthcare.compview.co/wp-content/uploads/2021/12/AdobeStock_280199549_Preview-1.png" alt="">
                                    <div class="resources-cat">
                                        <div class="resources-cat-icon">
                                            <img src="https://helthcare.compview.co/wp-content/themes/Helthcare/images/articles-reserch-icon.svg" alt="">
                                        </div>
                                        <span>
                                            <a href="#" rel="tag">PODCASTS</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="resources-info">
                                    <h2 class="resources-title">
                                        <a href="#">LOREM IPSUM DOLAR SIT AMET CONSECTUER DOLAR IPSUM DOLAR IPSUM</a>
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet, dolar consectetur adipiscing elit.</p>

                                    <div class="resources-box-btn">
                                        <a href="#" class="round-icon-btn" target="_blank">
                                            <span>
                                                <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path>
                                                </svg>
                                            </span>CONTINUE READING
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="resources-action-section">
                            <div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="https://helthcare.compview.co/wp-content/uploads/2021/12/warehouse-example.png" data-natural-width="1920" data-natural-height="900"></div>
                            <div class="action-box">
                                <div class="action-box-inner">
                                    <h2>
                                        <span>STRATEGIES</span> IN ACTION
                                        <i class="brand-rounded-icon"><img src="https://helthcare.compview.co/wp-content/themes/Helthcare/images/words-round-secondary.svg" alt=""></i>
                                    </h2>
                                    <div class="action-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.adipiscing elit, sed do eiusmod</p>
                                    </div>
                                    <div class="action-btn">
                                        <a href="#" class="round-icon-btn">
                                            <span>
                                                <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path>
                                                </svg>
                                            </span>EXPLORE OUR INTERACTIVE HEALTH CAMPUS
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="resources_box-col">
                            <div class="resources-box">
                                <div class="resources-img">
                                    <img src="https://helthcare.compview.co/wp-content/uploads/2021/12/AdobeStock_280199549_Preview-1.png" alt="">
                                    <div class="resources-cat">
                                        <div class="resources-cat-icon">
                                            <img src="https://helthcare.compview.co/wp-content/themes/Helthcare/images/articles-reserch-icon.svg" alt="">
                                        </div>
                                        <span>
                                            <a href="#" rel="tag">PODCASTS</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="resources-info">
                                    <h2 class="resources-title">
                                        <a href="#">LOREM IPSUM DOLAR SIT AMET CONSECTUER DOLAR IPSUM DOLAR IPSUM</a>
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet, dolar consectetur adipiscing elit.</p>

                                    <div class="resources-box-btn">
                                        <a href="#" class="round-icon-btn" target="_blank">
                                            <span>
                                                <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path>
                                                </svg>
                                            </span>CONTINUE READING
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="resources_box-col">
                            <div class="resources-box">
                                <div class="resources-img">
                                    <img src="https://helthcare.compview.co/wp-content/uploads/2021/12/AdobeStock_280199549_Preview-1.png" alt="">
                                    <div class="resources-cat">
                                        <div class="resources-cat-icon">
                                            <img src="https://helthcare.compview.co/wp-content/themes/Helthcare/images/articles-reserch-icon.svg" alt="">
                                        </div>
                                        <span>
                                            <a href="#" rel="tag">PODCASTS</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="resources-info">
                                    <h2 class="resources-title">
                                        <a href="#">LOREM IPSUM DOLAR SIT AMET CONSECTUER DOLAR IPSUM DOLAR IPSUM</a>
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet, dolar consectetur adipiscing elit.</p>

                                    <div class="resources-box-btn">
                                        <a href="#" class="round-icon-btn" target="_blank">
                                            <span>
                                                <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path>
                                                </svg>
                                            </span>CONTINUE READING
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="resources_box-col">
                            <div class="resources-box">
                                <div class="resources-img">
                                    <img src="https://helthcare.compview.co/wp-content/uploads/2021/12/AdobeStock_280199549_Preview-1.png" alt="">
                                    <div class="resources-cat">
                                        <div class="resources-cat-icon">
                                            <img src="https://helthcare.compview.co/wp-content/themes/Helthcare/images/articles-reserch-icon.svg" alt="">
                                        </div>
                                        <span>
                                            <a href="#" rel="tag">PODCASTS</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="resources-info">
                                    <h2 class="resources-title">
                                        <a href="#">LOREM IPSUM DOLAR SIT AMET CONSECTUER DOLAR IPSUM DOLAR IPSUM</a>
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet, dolar consectetur adipiscing elit.</p>

                                    <div class="resources-box-btn">
                                        <a href="#" class="round-icon-btn" target="_blank">
                                            <span>
                                                <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path>
                                                </svg>
                                            </span>CONTINUE READING
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php get_footer (); ?>
            

