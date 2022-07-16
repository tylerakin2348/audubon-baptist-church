$( document ).ready(function() {
    $('.to-top').on('click', function() {
        jQuery('html,body').animate({scrollTop:0},800);
        return false;
    });
    var lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazy-load"
    });
});