jQuery('.layout-slider').each(function() {
    var that = this;
    
    var $gallery = jQuery(that).find('.carousel').flickity({
        // prevNextButtons: false,
        pageDots: false,
        wrapAround: true,
        cellAlign: 'left',
        draggable: false
    });

    // Flickity instance
    var flkty = $gallery.data('flickity');

    // elements
    var $cellButtonGroup = jQuery(that).find('.button-group--cells');
    var $cellButtons = $cellButtonGroup.find('button');

    // update selected cellButtons
    $gallery.on('change.flickity', function () {
        $cellButtons.filter('.is-selected')
            .removeClass('is-selected');
        $cellButtons.eq(flkty.selectedIndex)
            .addClass('is-selected');
    });

    // update selected cellButtons
    $gallery.on('settle.flickity', function(event, index) {
        var slides = $(that).find('.layout-slider__slide');

        $(slides).each(function(){
            var slide = $(this).get(0);
            console.log(slide + 'slide');
            
            if ($(slide).hasClass('is-selected')) {
                // $(slide).css('visibility', 'visible');
            } else {
                // $(slide).css('visibility', 'hidden');
            }
        });

    });

    // select cell on button click
    $cellButtonGroup.on('click', 'button', function () {
        var index = jQuery(this).index();
        $gallery.flickity('select', index);
    });
    // previous
    jQuery(that).find('.button--previous').on('click', function () {
        $gallery.flickity('previous');
    });

    // next
    jQuery(that).find('.button--next').on('click', function () {
        $gallery.flickity('next');
    });
});
