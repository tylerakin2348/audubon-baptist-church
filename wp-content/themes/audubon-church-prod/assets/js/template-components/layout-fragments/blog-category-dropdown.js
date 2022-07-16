jQuery('.blog-categories').each(function(){
    var that = this;
    var the_toggle_switch = jQuery(that).find('.blog-categories__toggle');
    var the_category_list = jQuery(that).find('.blog-categories__list');

    the_toggle_switch.on('click', function() {
        jQuery(the_toggle_switch).toggleClass('open-toggle');

        if (jQuery(the_toggle_switch).hasClass('open-toggle')) {
            jQuery(the_toggle_switch).attr('aria-expanded', true);
            jQuery(the_category_list).addClass('expanded-list');
        } else {
            jQuery(the_toggle_switch).attr('aria-expanded', false);
            jQuery(the_category_list).removeClass('expanded-list');
        }
    });
});