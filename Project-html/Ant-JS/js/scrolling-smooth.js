$(window).on('resize',function() {
    var hedhight = $(".scroll-menu").height();

    $(".main-scroll").css("padding-top", hedhight);



    // Click To Navigation To Smooth Scrolling
    $('.scroll-menu a').click(function(){
        $(".active").removeClass("active");     
        $(this).addClass("active");
      
        $('html, body').stop().animate({
            scrollTop: $($(this).attr('href')).offset().top - hedhight
        }, 300);
        return false;
    });

    // Scroll To Window Body To Add Class 991 To Above
    jQuery(window).scroll(function () {
        
        if (jQuery(this).scrollTop() > 50) {
            jQuery('#scroll-up').addClass('active').show();
        } else {
            jQuery('#scroll-up').removeClass('active').hide();
        }
 
        if ($(window).width() > 991) {
            $('body').addClass('fixed-header');
        } else {
            $('body').removeClass('fixed-header');
        }


    });

});

$(document).ready(function() {
    $(window).trigger('resize');
});