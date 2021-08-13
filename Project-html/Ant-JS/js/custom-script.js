// https://stackoverflow.com/questions/7404952/jquery-combine-ready-and-resize


jQuery(document).ready(function ($) {
    jQuery("#container").css({"padding-top": $("#header").height() });
});


// Tabing Start
jQuery( document ).ready( function($) {
    $('#tabs-nav li:first-child').addClass('active');
    $('.main-section__right').hide();
    $('.main-section__right:first').show();

    // Click function
    $('#tabs-nav li').click(function(){
        $('#tabs-nav li').removeClass('active');
        $(this).addClass('active');
        $('.main-section__right').hide();
        
        var activeTab = $(this).find('a').attr('href');
        $(activeTab).fadeIn();
        return false;
    });
});
// Tabing Stop

function contentspace() {
    jQuery('#loadOverlay').fadeOut();
    jQuery('body').removeClass('loadOverlay-body');
};

$(window).on('load', function(e){
    e.preventDefault();
    contentspace();
});