// https://stackoverflow.com/questions/7404952/jquery-combine-ready-and-resize


jQuery(document).ready(function ($) {
    jQuery("#container").css({ "padding-top": $("#header").height() });

    jQuery('#tabs-nav12 li').append('<div class="list-three-box"></div>');

    jQuery('#tabs-nav12 a').wrap('<div class="list-three-img"></div>');

    // jQuery('#tabs-nav li .list-three-box').childs('.list-three-box').append(jQuery('.list-three-img'));

    // $("ul>li>.list-three-img").appendTo(".list-three-box");

    // jQuery('#tabs-nav li').length('.list-three-box').append('.list-three-img');

    // var n = $("#tabs-nav li").length;

    // jQuery('.list-three-box').append(jQuery('.list-three-img'));
    jQuery('ul#tabs-nav12 li').each(function () {
        var list_img_div = jQuery(this).find('.list-three-img').html();
        jQuery(this).find('.list-three-img').remove();
        jQuery(this).find('.list-three-box').append('<div class="list-three-img">' + list_img_div + '</div>');
    });

});


// Tabing Start
jQuery(document).ready(function ($) {
    $('#tabs-nav li:first-child').addClass('active');
    $('.main-section__right').hide();
    $('.main-section__right:first').show();

    // Click function
    $('#tabs-nav li').click(function () {
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

$(window).on('load', function (e) {
    e.preventDefault();
    contentspace();
});