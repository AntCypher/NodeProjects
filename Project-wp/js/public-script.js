/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery('a[href*="#"]:not([href="#"])').click(function (e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        e.preventDefault();
        var target = jQuery(this.hash);
        target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            jQuery('html, body').animate({
                scrollTop: target.offset().top
            }, 2500);
            return false;
        }
    }
});
jQuery(window).load(function () {
    var urlHash = window.location.href.split("#")[1];
    if (urlHash && jQuery('#' + urlHash).length) {
        jQuery('html,body').animate({
            scrollTop: jQuery('#' + urlHash).offset().top - jQuery(document).find('header').height() + 30
        }, 1000);
    }
    var newURL = location.href.split("#")[0];
    window.history.pushState('object', document.title, newURL);
});



function contentspace() {
    var windwidth = jQuery(window).width();
    var containerwidth = jQuery('.container').width();
    var contentlrspace = (windwidth - containerwidth) / 2;
    jQuery('.left-space').css('padding-left', contentlrspace);
    jQuery('.right-space').css('padding-right', contentlrspace);

}


jQuery(window).on("load resize scroll",function($){
    contentspace()
});

function copyrightsection() {
    var $WindowWidth = jQuery(window).width();
    if ($WindowWidth <= 768) {
        jQuery(".copyright").appendTo(".footer-row");
    }
    if ($WindowWidth > 767) {
        jQuery(".copyright").appendTo(".footer-logo");
    }
}

function BrighterSlider() {

    jQuery('.slider-brighter-background').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        fade: true,
        asNavFor: '.brighter-future-carousel',
    });
    
    jQuery('.brighter-future-carousel').slick({
        //speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        //autoplaySpeed: 5000,
        centerMode: true,
        infinite: true,
        dots: false,
        centerPadding: '0px',
        asNavFor: '.slider-brighter-background',
        focusOnSelect: true,
        prevArrow: '<button class="slick-prev slick-arrow"><span><svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path></svg></span></button>',
        nextArrow: '<button class="slick-next slick-arrow"><span><svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path></svg></span></button>',
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }

            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    infinite: true,
                    autoplay: true,
                    autoplaySpeed: 2000,
                }
            }]
    });

    jQuery('a[data-slide]').click(function (e) {
        e.preventDefault();
        var slideno = jQuery(this).data('slide');
        jQuery('.brighter-future-carousel').slick('slickGoTo', slideno - 1);
    });

    jQuery(document).on('mouseenter', '.brighter-future-col', function () {
        console.log("mouser entered");
        var imageSrc = jQuery(this).find('.brighter-future-img-wrap').attr('src');
        console.log(imageSrc);
        var imgSelector = jQuery(document).find('.brighter-future-section-background .slider-brighter-background .slick-current.slick-active .slider-brighter-background-col img.hover_img');
        // imgSelector.attr('data-oldimage', imgSelector.attr('src'));
        // imgSelector.attr('src', imageSrc);
        // imgSelector.css('opacity', '1');
        imgSelector.fadeOut(100, function () {
            imgSelector.attr('data-oldimage', imgSelector.attr('src'));
            imgSelector.attr('src', imageSrc);
            imgSelector.css('opacity', '1');
        }).fadeIn(100);
    });
    jQuery(document).on('mouseleave', '.brighter-future-col', function () {
        var imageSrc = jQuery(this).find('.brighter-future-img-wrap').attr('src');
        var imgSelector = jQuery(document).find('.brighter-future-section-background .slider-brighter-background .slick-current.slick-active .slider-brighter-background-col img.hover_img');
        //imgSelector.attr('data-oldimage', imgSelector);
        // imgSelector.attr('src', imgSelector.attr('data-oldimage'));
        // imgSelector.css('opacity', '0');
        imgSelector.fadeOut(100, function () {
            imgSelector.attr('src', imgSelector.attr('data-oldimage'));
            imgSelector.css('opacity', '0');
        }).fadeIn(100);
    });
}


jQuery(window).on('resize', contentspace, copyrightsection, BrighterSlider);

jQuery(document).ready(function ($) {
    if (jQuery(document).find('#mega-menu-header .current-menu-item').length > 0) {
        if (jQuery(document).find('li.mega-current-menu-item').length <= 0) {
            jQuery(document).find('#mega-menu-header .current-menu-item:last').parents('.mega-menu-megamenu').addClass('mega-current-menu-item');
        }
    }

    // $('#mega-menu-header a').click(function () {
    //     $(".active").removeClass("active");
    //     $(this).addClass("active");

    //     $('html, body').stop().animate({
    //         scrollTop: $($(this).attr('href')).offset().top
    //     }, 300);
    //     return false;
    // });


    //SERVICE TEMPLATE
    jQuery(function () {
        if (jQuery('.reduction-solutions-wrap').length > 0) {
            if (window.matchMedia("(min-width: 768px)").matches) {
                var offsetVal;

                if (window.matchMedia("(min-width: 1500px)").matches) {
                    // offsetVal = -150;
                    offsetVal = -150;
                } else if (window.matchMedia("(max-width: 700px)").matches) {
                    offsetVal = -100;
                } else if (window.matchMedia("(max-width: 700px)").matches) {
                    offsetVal = -50;
                } else {
                    offsetVal = 0;
                }

                jQuery(function () { // wait for document ready

                    var controller = new ScrollMagic;

                    var horizontalSlide = new TimelineMax()
                            // animate panels

                            .to("#js-slideContainer", 1, {x: "-20%"})
                            .to("#js-slideContainer", 1, {x: "-40%"})
                            .to("#js-slideContainer", 1, {x: "-65%"})
                    // .to("#js-slideContainer", 1, { x: "-70%" })

                    // .to("#js-slideContainer", 1,   {x: "-80%"})
                    // .to("#js-slideContainer", 1,   {x: "-100%"})


                    // create scene to pin and link animation
                    new ScrollScene({
                        triggerElement: "#js-wrapper",
                        triggerHook: "onLeave",
                        duration: "2000%",
                        offset: offsetVal
                    })
                            .setPin("#js-wrapper")
                            .setTween(horizontalSlide)
                            //.addIndicators() // add indicators (requires plugin)
                            .addTo(controller);



                });

            }
        }

    });

    //SOLUTION TEMPLATE
    var minimized_elements = jQuery('.content-with-image .content-part .content');
    minimized_elements.each(function () {
        var t = jQuery(this).text();
        if (t.length < 475)
            return;

        jQuery(this).html(
                t.slice(0, 475) + '<a href="#" class="more btn"><span><svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path></svg></span> CONTINUE READING</a>' +
                '<span style="display:none;">' + t.slice(475, t.length) + ' <a href="#" class="less btn"><span><svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z" fill="white"></path></svg></span> CONTINUE READING</a></span>'
                );

    });

    jQuery('a.more', minimized_elements).click(function (event) {
        event.preventDefault();
        jQuery(this).hide().prev().hide();
        jQuery(this).next().show();
    });

    jQuery('a.less', minimized_elements).click(function (event) {
        event.preventDefault();
        jQuery(this).parent().hide().prev().show().prev().show();
    });

    $('.leadership-accordion').each(function(){
        var $set = $(this).find('.leadership-set');    
        for(var i=0, len = $set.length; i < len; i+=2){
            $set.slice(i, i+2).wrapAll('<div class="leadership-set-wrap"/>');
        } 
    });

    $('.leadership-set-wrap').each(function(){
        var $this = $(this);
        $this.find('.leadership-set').each(function(i){
           var html = $(this).find('.leader-content').html(); 
           $this.append('<div id="leadership'+(1+i)+'" class="leadership-wrap-content">'+html+'</div>');
           $(this).find('.arrow-accordion').attr('data-href','leadership'+(1+i)+''); 
        });
    });

    $('.leadership-set-wrap').each(function(){
        var $this = $(this);

        $this.find(".arrow-accordion ").on("click", function () {
            var tab = $(this).attr('data-href');
            if($(window).width() > 768) {
                $this.find('#'+tab).slideToggle(200);
                $('.leadership-wrap-content').not('#'+tab).slideUp(200);
                $(".leader-content").hide();
            }    

            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                if($(window).width() < 768) {
                    $(this).siblings(".leader-content").slideUp(200);
                    $('.leadership-wrap-content').hide();
                }
            } else {
                $(".arrow-accordion").removeClass("active");
                $(this).addClass("active");
                if($(window).width() < 768) {
                    $(".leader-content").slideUp(200);
                    $(this).siblings(".leader-content").slideDown(200);
                    $('.leadership-wrap-content').hide();
                }
            }
        });
    });

    if (jQuery('.quality-section').length > 0) {
        jQuery('.quality-section .quality-inner .main-content').slick({
            infinite: true,
            autoplay: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            fade: true,
        });
    }
    jQuery(".default-form .gform_footer.top_label").append("<span><svg width='7' height='10' viewBox='0 0 7 10' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M6.09722 5.36239C6.28872 5.17102 6.28872 4.86271 6.09722 4.68198L1.80984 0.397505C1.59707 0.184876 1.25663 0.184876 1.04386 0.397505C0.831084 0.610134 0.831084 0.950341 1.04386 1.16297L4.56525 4.68198C4.75675 4.87334 4.75675 5.18166 4.56525 5.36239L1.0545 8.8814C0.841723 9.09403 0.841723 9.43423 1.0545 9.64686C1.26727 9.85949 1.60771 9.85949 1.82048 9.64686L6.09722 5.36239Z' fill='white'></path></svg></span>");

    jQuery(".hotspot .icon").click(function () {
        var $parent = jQuery(this).parent();
        $parent.toggleClass("open");
        jQuery(".hotspot.open").not($parent).removeClass("open");
    });
    jQuery(".hotspot").each(function (e, i) {
        var $this = jQuery(this);
        var css = detectPosition($this, e);
        jQuery(this).addClass(css.css);
    });

    function detectPosition($elem, ind) {
        var container = $('.health-campus-explore-box'),
                height = container.innerHeight(),
                width = container.innerWidth(),
                p = $elem.position(),
                x = p.left,
                y = p.top,
                w = $elem.width(),
                h = $elem.height(),
                cssClass = [],
                style = '';

        if (x >= width / 2) { // Right half
            cssClass.push('right');


        } else { // Left half
            cssClass.push('left');

        }

        if (y >= height / 2) { // Lower half
            cssClass.push('bottom');

        } else { // Upper half
            cssClass.push('top');
        }

        return {
            css: cssClass.join('-'),
            styles: style
        };
    }

    // jQuery(".brighter-future-col").mouseover(function () {
    //     var image_src = jQuery(this).children('img.brighter-future-img-wrap').attr('src');
    //     console.log(image_src);
    //     //        $(document).find(".brighter-future-section-background").css("background-image", 'url("' + image_src + '")');
    //     //        $(".brighter-future-section-background").fadeOut("fast", function () {
    //     //            $(this).css("background-image", 'url("' + image_src + '")');
    //     //            $(this).fadeIn("fast");
    //     //        });

    //     $(".brighter-future-section-background").stop().animate({ opacity: 0.2 }, 500, function () {
    //         $(this).css({ 'background-image': 'url("' + image_src + '")' })
    //             .animate({ opacity: 1 }, { duration: 100 });
    //     });
    // });

    contentspace();
    copyrightsection();
    BrighterSlider();


    /*Navigation */
    $('.menu-icon').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass("open");
        $('.mobile-header').slideToggle('slow');
        return false;
    });
    $('.resources_contein-view-btn .round-icon-btn').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass("open");
        $('.resources_contein-view-contein').slideToggle('slow');
        return false;
    });
    $(".mobile-header .mobile-header-navigation li a").each(function () {
        if ($(this).next().length) {
            $(this).parent().addClass("parent");
        }
    });

    $(".mobile-header .mobile-header-navigation li.parent").each(function () {
        if ($(this).has(".arrowclick").length <= 0) {
            //  $(this).append('<i class="arrowclick"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="15" viewBox="0 0 21 15" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.416 14.3162L0.673347 4.57356C-0.194315 3.70589 -0.194315 2.29914 0.673347 1.43148C1.54101 0.563814 2.94777 0.563814 3.81543 1.43148L10.416 8.03206L16.8309 1.6172C17.6985 0.749536 19.1053 0.749536 19.973 1.6172C20.8406 2.48486 20.8406 3.89162 19.973 4.75928L10.416 14.3162Z" fill="#1D9EC6"/></svg></i>');
            $('<i class="arrowclick"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="15" viewBox="0 0 21 15" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.416 14.3162L0.673347 4.57356C-0.194315 3.70589 -0.194315 2.29914 0.673347 1.43148C1.54101 0.563814 2.94777 0.563814 3.81543 1.43148L10.416 8.03206L16.8309 1.6172C17.6985 0.749536 19.1053 0.749536 19.973 1.6172C20.8406 2.48486 20.8406 3.89162 19.973 4.75928L10.416 14.3162Z" fill="#1D9EC6"/></svg></i>').insertAfter('.mobile-header .mobile-header-navigation li.parent > a');
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



    // $(".arrowclick").on('click', function () {
    //     if ($(this).hasClass("active")) {
    //         if ($(this).parents("li").hasClass("parent")) {
    //             $(this).closest("li").find(".sub-menu").slideUp(250);
    //             $(this).removeClass("active");
    //         } else {
    //         }
    //     } else {
    //         if ($(this).parents("li").hasClass("parent")) {
    //         } else {
    //             $(".sub-menu").slideUp(250);
    //             $(".arrowclick").removeClass("active");
    //         }
    //         $(this).closest("li").find(".sub-menu:first").slideDown(250);
    //         $(this).addClass("active");
    //     }
    // });


    // $(".menu-icon").click(function() {
    //      $("i.arrowclick").removeClass("active");
    //       $(".sub-menu").slideUp(300);
    // });


    // $(".mobile-header .mobile-header-navigation li.parent").each(function () {
    //     $(this).find('ul.sub-menu').insertBefore('<div class="sdgrdytyh"></div>');
    // });


    // $(".mobile-header .mobile-header-navigation li.parent").each(function () {
    //    $(this).find("ul.sub-menu li i.arrowclick").addClass('hiiii');
    //    $(this).click(function(){
    //        $("ul.sub-menu li i.arrowclick").removeClass('active');
    //    });
    // });



    $(".catalyst-set .catalyst-title").on("click", function () {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this).siblings(".catalyst-content").slideUp(200);
        } else {
            $(".catalyst-set .catalyst-title").removeClass("active");
            $(this).addClass("active");
            $(".catalyst-content").slideUp(200);
            $(this).siblings(".catalyst-content").slideDown(200);
        }
    });



    $(function () {
        var scrollMagicController = new ScrollMagic;
        $(".climate_works50_box").each(function (i) {
            var element = $(this),
                    prefix2 = $(this),
                    tween = new TimelineMax;
            if (i % 2 == 0) {
                //                console.log(i, 'odd');

                // tween.staggerFromTo(element.find('.climate_works50_left'), .5, { opacity: 0, x:-50 }, { opacity: 1, x:0 }, .5);
                // tween.staggerFromTo(element.find('.climate_works50_right'), .5, { opacity: 0, x:20 }, { opacity: 1, x:0 }, .5);
            } else {
                // tween.staggerFromTo(element.find('.climate_works50_left'), .5, { opacity: 0, x:50 }, { opacity: 1, x:0 }, .5);
                // tween.staggerFromTo(element.find('.climate_works50_right'), .5, { opacity: 0, x:-20 }, { opacity: 1, x:0 }, .5);
            }

            tween.staggerFromTo(element.find('.same_animation .svg_line2'), .5, {strokeDashoffset: 0}, {strokeDashoffset: -700}, .5);

            tween.staggerFromTo(element.find('.circle'), 0.5, {opacity: 0}, {opacity: 1}, 0.5);
            tween.staggerFromTo(element.find('.circle_animation_3 .svg_line2'), .5, {strokeDashoffset: 0}, {strokeDashoffset: -700}, .5);

            new ScrollScene({
                triggerElement: element,
                triggerHook: .75,
                duration: '500%'
            }).setTween(tween).addTo(scrollMagicController)
        });
    });

    jQuery(".upcoming-webinar-carousel").slick({
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        centerMode: true,
        infinite: true,
        centerPadding: '0px',
        dots: true,
        arrows: false,
    });

    jQuery(".menu_case_study-carousel").slick({
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        centerMode: true,
        infinite: true,
        centerPadding: '0px',
        dots: true,
        arrows: false,
    });

    (function ($) {
        /** change value here to adjust parallax level */
        var parallax = -0.2;

        var $bg_images = jQuery(".action-section-cover-image");
        var offset_tops = [];
        $bg_images.each(function (i, el) {
            offset_tops.push(jQuery(el).offset().top);
        });

        jQuery(window).scroll(function () {
            var dy = jQuery(this).scrollTop();
            $bg_images.each(function (i, el) {
                var ot = offset_tops[i];
                jQuery(el).css("background-position", "50% " + (dy - ot) * parallax + "px");
            });
        });
    })(jQuery);


    // jQuery('a[href*=\\#]:not([href=\\#])').click(function () {
    //     var hashVal = jQuery(this).attr('href');
    //     if (hashVal) {
    //         jQuery('html,body').animate({
    //             scrollTop: jQuery(hashVal).offset().top
    //         }, 900, 'swing');
    //     }
    // });

//    $('a[href*="#"]') 
//        // Remove links that don't actually link to anything
//        .not('[href="#"]')
//        .not('[href="#0"]')
//        .click(function (event) {
//            // On-page links
//            if (
//                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
//                &&
//                location.hostname == this.hostname
//            ) {
//                // Figure out element to scroll to
//                var target = $(this.hash);
//                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//                // Does a scroll target exist?
//                if (target.length) {
//                    // Only prevent default if animation is actually gonna happen
//                    event.preventDefault();
//                    $('html, body').animate({
//                        scrollTop: target.offset().top
//                    }, 5000, function () {
//                        // Callback after animation
//                        // Must change focus!
//                        var $target = $(target);
//                        $target.focus();
//                        if ($target.is(":focus")) { // Checking if the target was focused
//                            return false;
//                        } else {
//                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
//                            $target.focus(); // Set focus again
//                        };
//                    });
//                }
//            }
//        });



    // $('a[href*=\\#]').on('click', function (e) {
    //     e.preventDefault();
    //     $('html, body').animate({
    //         scrollTop: $(this.hash).offset().top
    //     }, 500);
    // });


    $('.header-search').click(function () {
        $('.header-search-form').fadeToggle();
    });

    var data = jQuery('.page-id-41 .slide-track-climate').html();
    for(var i=0; i<5;i++){
    jQuery('.page-id-41 .slide-track-climate').append(data);
    }

	var data2 = jQuery('.page-id-445 .slide-track-climate').html();
	for(var i=0; i<5;i++){
	jQuery('.page-id-445 .slide-track-climate').append(data2);
	}

    var data3 = jQuery('.page-id-366 .slide-track-climate').html(); 
    for(var i=0; i<5;i++){
    jQuery('.page-id-366 .slide-track-climate').append(data3);
    }

});
