$(document).ready(function() {
    $(".hamburger-icon").on('click', function() {
        $('.hamburger-icon, span.hamburger-bar, .main-navigation')
            .toggleClass('open');
    });

    $(window).resize(function(e) {
        var screenWith = $(window).width();

        if (screenWith >= 600) {
            // This if statement is intended to reflect the small breakpoint
            $('.main-navigation, .hamburger-icon, .hamburger-bar')
                .removeClass('open');
        }
    });
});