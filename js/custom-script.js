// https://stackoverflow.com/questions/7404952/jquery-combine-ready-and-resize


jQuery(document).ready(function ($) {

    tabControl();

    $('.banner-slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        fade: true
    });

    $('.partnerlogo-slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        responsive: [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1
          }
        },
        {
           breakpoint: 992,
           settings: {
              arrows: false,
              slidesToShow: 3,
              slidesToScroll: 1
           }
        },
        {
            breakpoint: 768,
            settings: {
               arrows: false,
               slidesToShow: 2,
               slidesToScroll: 1
            }
         },
         {
            breakpoint: 480,
            settings: {
               arrows: false,
               slidesToShow: 1,
               slidesToScroll: 1
            }
         }]
    });

    // $('.practice-slider--img').slick({
    //     draggable: false,
    //     accessibility: false,
    //     centerMode: true,
    //     variableWidth: true,
    //     slidesToShow: 1,
    //     arrows: true,
    //     dots: true,
    //     swipeToSlide: true,
    //     infinite: true,
    //     centerPadding:'0px',
    //     asNavFor: '.practice-slider--contain'
    //   });
    //   $('.practice-slider--contain').slick({
    //     draggable: false,
    //     accessibility: false,
    //     centerMode: false,
    //     variableWidth: false,
    //     slidesToShow: 1,
    //     arrows: true,
    //     dots: true,
    //     swipeToSlide: true,
    //     infinite: false,
    //     asNavFor: '.practice-slider--img'
    //   });

});

var resizeTimer;
$(window).on('resize', function(e) {
    clearTimeout(resizeTimer);
    tabControl();
});

function tabControl() {
    jQuery("#main-wraper").css({"padding-top": $("#header").height() });
  }


// Tabing Start
// jQuery( document ).ready( function($) {
//     $('#tabs-nav li:first-child').addClass('active');
//     $('.main-section__right').hide();
//     $('.main-section__right:first').show();

//     // Click function
//     $('#tabs-nav li').click(function(){
//         $('#tabs-nav li').removeClass('active');
//         $(this).addClass('active');
//         $('.main-section__right').hide();
        
//         var activeTab = $(this).find('a').attr('href');
//         $(activeTab).fadeIn();
//         return false;
//     });
// });
// Tabing Stop

// jQuery( document ).ready( function($) {
//     $('.open-popup-link').magnificPopup({
//         type: 'inline',
//         midClick: true,
//         mainClass: 'mfp-fade'
//     });

//     jQuery('.header_icon_menu').on('click', function(e){
//         e.preventDefault();
//         jQuery(this).toggleClass("open");
//         jQuery('.header__menu').slideToggle('slow');
//         return false;
//     });

// });

// jQuery( document ).ready( function($) {

//     $('.property__viewlist--list a').addClass('active');
//     $('.property__listing__wrapper--list').show();
//     $('.property__listing__wrapper--box').hide();
    

//     $('.property__viewlist--list a').click( function() {

//         $(this).addClass('active')
//         $('.property__viewlist--box a').removeClass('active');

//         $('.property__listing__wrapper--list').show();
//         $('.property__listing__wrapper--box').hide();

//     });

//     $('.property__viewlist--box a').click( function() {

//         $(this).addClass('active')
//         $('.property__viewlist--list a').removeClass('active');

//         $('.property__listing__wrapper--list').hide();
//         $('.property__listing__wrapper--box').show();

//     });

// });

// jQuery( document ).ready( function($) {

//         $('.property__data--title').on('click', function(e){
//             e.preventDefault();
//             $(this).toggleClass("active");
//             $(this).parents(".property__data--box").find(".property__data--col--box").slideToggle('slow');
            
//             return false;
//         });
// });



