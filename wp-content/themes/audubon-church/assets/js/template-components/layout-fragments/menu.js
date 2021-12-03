function ToggleButton() {
    var menu_currently_opened = false;

    var check_menu_status = function(element) {
        var that = element;
        var relative_submenu = $(that).next(".sub-menu");

        if (menu_currently_opened) {
            $(".sub-menu").removeClass("open-submenu");
            jQuery(that).addClass("submenu-active");
            jQuery(relative_submenu).addClass("open-submenu");
        } else {
            relative_submenu.removeClass("open-submenu");
            jQuery(that).removeClass("submenu-active");
        }
    }

    this.click = function(element) {
        menu_currently_opened = !menu_currently_opened;
        check_menu_status(element);
    };

    this.close_on_esc = function(element) {
        if (menu_currently_opened) {
            var key = event.key || event.keyCode;
            if (key === 'Escape' || key === 'Esc' || key === 27) {
                menu_currently_opened = false;
                check_menu_status(element);
            }
        }
    }
}

var loadSubmenuToggle = function() {
    $("<button class='toggle-submenu'>" +
        "<span class='assistive'>Toggle the submenu</span>" +
        "</button>")
            .insertBefore($(".menu-parent-item > .sub-menu"));

    var menu_items_with_children = $(".menu-parent-item");

    $(menu_items_with_children).each(function() {
        var find_the_toggle = $(this).find(".toggle-submenu");

        var button = new ToggleButton(find_the_toggle[0]);

        find_the_toggle.on("click", function() {
            button.click(this);
        });

        document.addEventListener('keyup', this, function() {
            button.close_on_esc(find_the_toggle);
        });
    });
};


$(document).on("ready", loadSubmenuToggle);