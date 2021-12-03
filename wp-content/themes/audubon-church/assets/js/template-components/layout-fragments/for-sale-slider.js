  // https://davidwalsh.name/function-debounce
  // Returns a function, that, as long as it continues to be invoked, will not
  // be triggered. The function will be called after it stops being called for
  // N milliseconds. If `immediate` is passed, trigger the function on the
  // leading edge, instead of the trailing.
  function debounce(func, wait, immediate) {
      var timeout;
      return function() {
          var context = this,
              args = arguments;
          var later = function() {
              timeout = null;
              if (!immediate) func.apply(context, args);
          };
          var callNow = immediate && !timeout;
          clearTimeout(timeout);
          timeout = setTimeout(later, wait);
          if (callNow) func.apply(context, args);
      };
  };


jQuery('.layout-for-sale').each(function () {
    var that = this;

    function buildSlider() {
        return jQuery(that).find('.carousel').flickity({
            prevNextButtons: false,
            pageDots: false,
            wrapAround: true,
            cellAlign: 'left',
            draggable: false,
            accessibility: false,
            setGallerySize: false
        });
    }
   
    // var build_slider = new buildSlider();
    var initializedSlider = new buildSlider();

    // Flickity instance
    var flkty = initializedSlider.data('flickity');

    // elements
    var $cellButtonGroup = jQuery(that).find('.button-group--cells');
    var $cellButtons = $cellButtonGroup.find('button');

    // update selected cellButtons
    initializedSlider.on('settle.flickity', function () {
        $cellButtons.filter('.is-selected')
            .removeClass('is-selected');
        $cellButtons.eq(flkty.selectedIndex)
            .addClass('is-selected');
    });

    // select cell on button click
    $cellButtonGroup.on('click', 'button', function () {
        var index = jQuery(this).index();
        initializedSlider.flickity('select', index);
    });
    // previous
    jQuery(that).find('.button--previous').on('click', function () {
        initializedSlider.flickity('previous');
    });
    // next
    jQuery(that).find('.button--next').on('click', function () {
        initializedSlider.flickity('next');
    });


    var check_window_width = function() {
        var windowSize = window.innerWidth;

        if (windowSize <= 960) {
            if (initializedSlider) {
                initializedSlider.flickity('destroy');
            }
        } else{
            var initializedSlider = initializedSlider;
        }
    }
 
    var resizeSlider = debounce(function() {
        check_window_width();
    }, 250);

    window.addEventListener('resize', resizeSlider);
});