
jQuery(document).ready(function ($) {
    jQuery(document).on("click", ".clear_all", function () {
        jQuery(document).find('input[name="media"]').prop('checked', false);
        jQuery(document).find('input[name="category"]').prop('checked', false);
        get_resources();
    });
    jQuery(document).on("change", ".resources_media , .resources_category", function (event) {
        get_resources();
    });
    if (jQuery(document).find('.page-id-442').length > 0) {
        jQuery(document).on('click', '.page-numbers', function (event) {
            event.preventDefault();
            var cur_page = jQuery(document).find('.pagination .page-numbers.current').html();
            var page;
            if (jQuery(this).hasClass('next')) {
                cur_page++;
                page = cur_page;
            } else if (jQuery(this).hasClass('prev')) {
                cur_page--;
                page = cur_page;
            } else {
                page = jQuery(this).html();
            }
            get_resources(page);
        });
    }
});

function get_resources(page = 1) {
    var final_media = jQuery.map(jQuery(document).find('input[class="resources_media"]:checked'), function (c) {
        return c.value;
    });
    var final_cat = jQuery.map(jQuery(document).find('input[class="resources_category"]:checked'), function (c) {
        return c.value;
    });
    var page_id = jQuery('#page_id').val();
    var defdata = jQuery(document).find('.resources_listing-section').data('defdata');
    jQuery.ajax({
        type: "POST",
        url: HELTHCAREPUBLIC.ajaxurl,
        data: {
            action: "get_posts_for_pagination",
            page: page,
            page_id: page_id,
            medias: final_media,
            categories: final_cat,
            defdata: defdata
        },
        success: function (results) {
            jQuery(".pagination_links").html(results);
//            console.log(page_id);
        },
        error: function (results) {
            console.log("error");
        }
    });
}