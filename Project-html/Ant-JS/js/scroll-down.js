// Scroll Effect Start
jQuery( document ).ready( function() {
    // scroll down
    jQuery('#scroll-down').click(function(e) {
        e.preventDefault();
        jQuery('html, body').animate({
            scrollTop: jQuery('.second-section').offset().top
        }, 300);
        jQuery('#scroll-up').addClass('active')
    });

    // scroll Up
    jQuery('#scroll-up').click(function(e) {
        e.preventDefault();
        jQuery('html, body').animate({
            scrollTop: jQuery('body').offset().top
        }, 300);
    });


    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 50) {
            jQuery('#scroll-up').addClass('active').show();
        } else {
            jQuery('#scroll-up').removeClass('active').hide();
        }
    });
});
// Scroll Effect Stop