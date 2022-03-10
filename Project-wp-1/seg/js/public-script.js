/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(document).ready(function ($) {

    //transaction category filter
    var pagenumber = 1;
    jQuery(document).on('change', '#productcat , #verticalcat', function () {
        var pagenumber = 1;
        var product_cat = jQuery(document).find("#productcat").map(function () {
            return jQuery(this).val();
        }).get();
        var vertical_cat = jQuery(document).find("#verticalcat").map(function () {
            return jQuery(this).val();
        }).get();
        var page_id = SEGPUBLIC.globalpageid;
        var search_text = jQuery(document).find('#searchText').val();
        console.log(page_id);
        jQuery.ajax({
            url: SEGPUBLIC.ajaxurl,
            type: 'post',
            data: {
                action: 'transaction_cat_filter',
                product_cat: product_cat,
                vertical_cat: vertical_cat,
                search_text: search_text,
                pagenumber: pagenumber,
                page_id: page_id,
            },
            beforeSend: function () {
                // setting a timeout
                jQuery(".transFilter").css({"opacity": "0.5"});
            },
            success: function (data) {
                jQuery(".transFilter").css({"opacity": "1"});
                jQuery(document).find(".transFilter").html(data);
                equalheight('.transactions-box-title');
                equalheight('.research-overview-box-contain');
            }
        });
    });
    //transaction Search
    jQuery(document).find('#searchText').keyup(debounce(function () {
        var pagenumber = 1;
        var search_text = jQuery(document).find('#searchText').val();
        var product_cat = jQuery(document).find("#productcat").map(function () {
            return jQuery(this).val();
        }).get();
        var vertical_cat = jQuery(document).find("#verticalcat").map(function () {
            return jQuery(this).val();
        }).get();
        var page_id = SEGPUBLIC.globalpageid;
        jQuery.ajax({
            url: SEGPUBLIC.ajaxurl,
            type: 'post',
            data: {
                action: 'transaction_cat_filter',
                product_cat: product_cat,
                vertical_cat: vertical_cat,
                search_text: search_text,
                pagenumber: pagenumber,
                page_id: page_id,
            },
            beforeSend: function () {
                jQuery(".transFilter").css({"opacity": "0.5"});
            },
            success: function (data) {
                jQuery(".transFilter").css({"opacity": "1"});
                jQuery(document).find(".transFilter").html(data);
                equalheight('.transactions-box-title');
                equalheight('.research-overview-box-contain');
            }
        });
    }, 500));

    //research category filter
    jQuery(document).on('change', '#reporttax , #frequencytax', '#industrytax', function () {
        var pagenumber = 1;
        var report_tax = jQuery(document).find("#reporttax").map(function () {
            return jQuery(this).val();
        }).get();
        var frequency_tax = jQuery(document).find("#frequencytax").map(function () {
            return jQuery(this).val();
        }).get();
        var industry_tax = jQuery(document).find("#industrytax").map(function () {
            return jQuery(this).val();
        }).get();
        var page_id = SEGPUBLIC.globalpageid;
//        console.log(page_id, report_tax, frequency_tax, industry_tax);
        jQuery.ajax({
            url: SEGPUBLIC.ajaxurl,
            type: 'post',
            data: {
                action: 'research_tax_filter',
                report_tax: report_tax,
                frequency_tax: frequency_tax,
                industry_tax: industry_tax,
                pagenumber: pagenumber,
                page_id: page_id,
            },
            beforeSend: function () {
                // setting a timeout
                jQuery(".research-overview-section .row").css({"opacity": "0.5"});
            },
            success: function (data) {
//                console.log(data);
                jQuery(".research-overview-section .row").css({"opacity": "1"});
                jQuery(document).find(".research-overview-section .container").html(data);
                equalheight('.research-overview-box-contain');
            }
        });
    });

    //transaction post load more
    jQuery(document).on('click', '.transactions-see-more #load-click', function () {
        var product_cat = jQuery(document).find("#productcat").map(function () {
            return jQuery(this).val();
        }).get();
        var vertical_cat = jQuery(document).find("#verticalcat").map(function () {
            return jQuery(this).val();
        }).get();
        var search_text = jQuery(document).find('#searchText').val();
        pagenumber = jQuery('#load-click').attr('data-page');
        var page_id = SEGPUBLIC.globalpageid;
        jQuery('.load-click').remove();
        jQuery.ajax({
            url: SEGPUBLIC.ajaxurl,
            type: 'post',
            data: {
                action: 'transaction_cat_filter',
                pagenumber: pagenumber,
                product_cat: product_cat,
                vertical_cat: vertical_cat,
                search_text: search_text,
                page_id: page_id,
            },
            beforeSend: function () {
                // setting a timeout
                jQuery(".transFilter").css({"opacity": "0.5"});
            },
            success: function (data) {
                jQuery(".transFilter").css({"opacity": "1"});
                jQuery(".transFilter").append(data);
                equalheight('.transactions-box-title');
                equalheight('.research-overview-box-contain');
            },
            error: function (data) {
                console.log("error", data);
            }
        });
    });

    //research post load more
    jQuery(document).on('click', '.research-overview-see-more #load-click', function () {
        var report_tax = jQuery(document).find("#reporttax").map(function () {
            return jQuery(this).val();
        }).get();
        var frequency_tax = jQuery(document).find("#frequencytax").map(function () {
            return jQuery(this).val();
        }).get();
        var industry_tax = jQuery(document).find("#industrytax").map(function () {
            return jQuery(this).val();
        }).get();
        pagenumber = jQuery('#load-click').attr('data-page');
        var page_id = SEGPUBLIC.globalpageid;
        jQuery('.load-click').remove();
        jQuery.ajax({
            url: SEGPUBLIC.ajaxurl,
            type: 'post',
            data: {
                action: 'research_tax_filter',
                pagenumber: pagenumber,
                report_tax: report_tax,
                frequency_tax: frequency_tax,
                industry_tax: industry_tax,
                page_id: page_id,
            },
            beforeSend: function () {
                // setting a timeout
//                jQuery(".transFilter").css({"opacity": "0.5"});
            },
            success: function (data) {
//                jQuery(".transFilter").css({"opacity": "1"});
                jQuery(".research-overview-section .container").append(data);
                equalheight('.research-overview-box-contain');
            },
            error: function (data) {
                console.log("error", data);
            }
        });
    });
    //transaction testinomial load more
    if (jQuery(document).find('.client-video-row').length > 0) {
        jQuery(document).find(".client-video-row").hide();
        var count = SEGPUBLIC.testinomial_count;
        jQuery(document).find(".client-video-row").slice(0, count).show();
        jQuery("#load-testinomial").on('click', function (e) {
            e.preventDefault();
            jQuery(".client-video-row:hidden").slice(0, count).slideDown();
            if ($(".client-video-row:hidden").length == 0) {
                $("#load-testinomial").fadeOut('slow');
            }
            jQuery('html,body').animate({
                scrollTop: $(this).offset().top
            }, 1500);
        });
    }

// people-modal-end
//    jQuery(".people-box .btn-arrow").click(function () {
    jQuery(".people-box .btn-click").click(function () {
        var popupid = jQuery(this).parents('.people-box').attr('id');
        jQuery(".people-modal[data-id='" + popupid + "']").addClass("show");
    });
    jQuery(".people-modal .close_btn").click(function () {
        jQuery(this).parents('.people-modal').removeClass('show');
    });

    // people-modal-end

    jQuery(".header-search .header-search-icon").click(function () {
        jQuery(this).parents('.header-search').find('.header-search-form').fadeToggle();
    });
    /*Navigation */
    $('.menu-icon').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass("open");
        $('.header-right-inner').slideToggle('slow');
        return false;
    });
    $('.resources_contein-view-btn .round-icon-btn').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass("open");
        $('.resources_contein-view-contein').slideToggle('slow');
        return false;
    });
    $(".header-right-inner .header-navigation li a").each(function () {
        if ($(this).next().length) {
            $(this).parent().addClass("parent");
        }
    });
    $(".header-right-inner .header-navigation li.parent").each(function () {
        if ($(this).has(".arrowclick").length <= 0) {
            $('<i class="arrowclick"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="15" viewBox="0 0 21 15" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.416 14.3162L0.673347 4.57356C-0.194315 3.70589 -0.194315 2.29914 0.673347 1.43148C1.54101 0.563814 2.94777 0.563814 3.81543 1.43148L10.416 8.03206L16.8309 1.6172C17.6985 0.749536 19.1053 0.749536 19.973 1.6172C20.8406 2.48486 20.8406 3.89162 19.973 4.75928L10.416 14.3162Z" fill="#1D9EC6"/></svg></i>').insertAfter('.header-right-inner .header-navigation li.parent > a');
        }
    });
    $("i.arrowclick").click(function () {
        $(this).parent().siblings(".menu-item-has-children").find("i.arrowclick").removeClass("active");
        $(this).parent().siblings(".menu-item-has-children").find(".sub-menu").slideUp(250);
        $(this).next(".sub-menu").slideToggle(250);
        $(this).next(".sub-menu").children(".menu-item-has-children").find(".sub-menu").slideUp(250);
        $(this).next(".sub-menu").children(".menu-item-has-children").find("i.arrowclick").removeClass("active");
        $(this).toggleClass("active");
        return false
    });
    /* client quote carousel */
    jQuery('.trans-client-quote-carousel').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        centerMode: true,
        infinite: true,
        dots: false,
        centerPadding: '0px',
        focusOnSelect: true,
        prevArrow: '<button class="slick-prev slick-arrow"><span></span></button>',
        nextArrow: '<button class="slick-next slick-arrow"><span></span></button>',
    });
    /* client trans carousel */
    jQuery('.client-trans-list-carousel').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: false,
        centerMode: true,
        infinite: true,
        dots: false,
        centerPadding: '0px',
        focusOnSelect: true,
        prevArrow: '<button class="slick-prev slick-arrow"><span></span></button>',
        nextArrow: '<button class="slick-next slick-arrow"><span></span></button>',
        responsive: [{
                breakpoint: 1441,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            }, {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            }, {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }]
    });
    jQuery('.form-select').select2({
        containerCssClass: 'custom-select',
        dropdownCssClass: 'custom-drp'
    });
    $('.popup-youtube').magnificPopup({
        type: 'iframe'
    });
    $(function () {
        $('.popup-modal').magnificPopup({
            type: 'inline',
            preloader: false,
            focus: '#username',
            modal: true
        });
        $(document).on('click', '.popup-modal-dismiss', function (e) {
            e.preventDefault();
            $.magnificPopup.close();
        });
    });
    jQuery('.footer-menu .menu-one').wrapAll('<li class="footer-menu-col"><ul class="footer-menu-inner"></ul></li>');
    jQuery('.footer-menu .menu-two').wrapAll('<li class="footer-menu-col"><ul class="footer-menu-inner"></ul></li>');
    jQuery('.footer-menu .menu-three').wrapAll('<li class="footer-menu-col"><ul class="footer-menu-inner"></ul></li>');
//    $(".client-trans-overview-btn").click(function (e) {
////        var readmore = SEGPUBLIC.readmore;
////        var read_less = SEGPUBLIC.readless;
//        e.preventDefault();
//        var $this = $(this);
//        var expandHeight = $this.prev().find(".client-trans-overview-contain").height();
//
//        if ($this.prev().hasClass("expanded")) {
//            $this.prev().removeClass("expanded");
//            $this.prev().attr("style", "");
////            jQuery(this).html(readmore);
//        } else {
//            $this.prev().addClass("expanded");
//            $this.prev().css("max-height", expandHeight);
////            jQuery(this).html(read_less);
//        }
//    });

    equalheight('.transactions-box-title');
    equalheight('.research-overview-box-contain');
});
equalheight = function (container) {
    var currentTallest = 0,
            currentRowStart = 0,
            rowDivs = new Array(),
            $el,
            topPosition = 0;
    jQuery(container).each(function () {

        $el = jQuery(this);
        jQuery($el).outerHeight('auto')
        topPostion = $el.position().top;
        if (currentRowStart != topPostion) {
            for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].outerHeight(currentTallest);
            }
            rowDivs.length = 0; // empty the array
            currentRowStart = topPostion;
            currentTallest = $el.outerHeight();
            rowDivs.push($el);
        } else {
            rowDivs.push($el);
            currentTallest = (currentTallest < $el.outerHeight()) ? ($el.outerHeight()) : (currentTallest);
        }
        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
            rowDivs[currentDiv].outerHeight(currentTallest);
        }
    });
}
function debounce(func, wait, immediate) {
    var timeout;
    return function () {
        var context = this, args = arguments;
        var later = function () {
            timeout = null;
            if (!immediate)
                func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow)
            func.apply(context, args);
    };
}