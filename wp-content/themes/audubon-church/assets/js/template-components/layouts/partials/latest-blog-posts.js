jQuery('.latest-blog-posts').each(function() {
    var that = this;
    
    var $latestBlogPostsSlider = jQuery(that).find('.carousel').flickity({
        prevNextButtons: false,
        pageDots: false,
        wrapAround: true,
        cellAlign: 'left',
    });

    // Flickity instance
    var flkty = $latestBlogPostsSlider.data('flickity');

    // elements
    var $cellButtonGroup = jQuery(that).find('.button-group--cells');
    var $cellButtons = $cellButtonGroup.find('button');

    // update selected cellButtons
    $latestBlogPostsSlider.on('change.flickity', function () {
        console.log(flkty.selectedIndex);
        $cellButtons.filter('.is-selected')
            .removeClass('is-selected');
        $cellButtons.eq(flkty.selectedIndex)
            .addClass('is-selected');
    });

    // select cell on button click
    $cellButtonGroup.on('click', 'button', function () {
        var index = jQuery(this).index();
        $latestBlogPostsSlider.flickity('select', index);
    });
    // previous
    jQuery(that).find('.button--previous').on('click', function () {
        $latestBlogPostsSlider.flickity('previous');
    });
    // next
    jQuery(that).find('.button--next').on('click', function () {
        $latestBlogPostsSlider.flickity('next');
    });
});
