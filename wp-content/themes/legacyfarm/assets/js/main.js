$( document ).ready(function() {
        // This function adds the images as background images for 1/3 class.
        $(".three-column-layout").find('.column_primary-content img').each(function() {
            var image = $(this);
            var parentColumn = $(this).closest('.three-column-layout .column');

          parentColumn.css({
            background: "url(" + image.attr("src") + ")",
            backgroundSize: "cover",
          });

          image.remove();

          parentColumn.addClass('bg-image');

        });


                $(".layout-slider > div:gt(0)").hide();

        setInterval(function() {
          $('.layout-slider > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('.layout-slider');
        },  5000);
    });

        $('<button class="toggle-submenu"><span class="assistive">Toggle the submenu</span></button>').insertBefore( $( '.menu-parent-item > .sub-menu'  ) );

        $('.toggle-submenu').on('click',function(){
            if ($(this).hasClass('submenu-active')) {
                $(this).next('.sub-menu').removeClass('open-submenu');
            } else {
                $('.sub-menu').removeClass('open-submenu');
                $(this).next('.sub-menu').addClass('open-submenu');
            }
            $('.toggle-submenu').removeClass('submenu-active');
            $(this).toggleClass('submenu-active');
        });

    $(".hamburger-icon").on('click',function(){
        // This function controls the opening and closing of the mobile menu
        $('.hamburger-icon').toggleClass('open');
        $('span.hamburger-bar').toggleClass('open');
        $('.main-navigation').toggleClass('open');
    });


    $(window).resize(function(e){
        var screenWith = $(window).width();

        if (screenWith >= 600) {
            // This if statement is intended to reflect the small breakpoint
            $('.main-navigation, .hamburger-icon, .hamburger-bar').removeClass('open');
        }
    });

    // This function adds the header image as a background image
    $(".header-image img").each(function() {
      var img = $(this);
      var parentdiv = $(".header-content");
      parentdiv.css({
        background: "url(" + img.attr("src") + ")",
        width: img.width() + "px",
        height: img.height() + "px"
      });
      parentdiv.addClass('bg-image');
    });


    $(".three-column-layout .column").on('click', function(){
        if ($(this).not('hover')) {
            $(this).siblings(['hover']).removeClass('hover');
        }
        $(this).addClass('hover');
    });




    $('.to-top').on('click', function() {
        jQuery('html,body').animate({scrollTop:0},800);
        return false;
    });
