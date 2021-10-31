<?php
    wp_enqueue_script( 'flickity' );
    wp_enqueue_script( 'homepage-main-slider' );
?>

<div class="layout layout-slider">
    <div class="carousel">
        <?php $slideRows = $section['homepage_main_slider'];
        foreach ( $slideRows as $slideRow ) :
            $image = $slideRow;
            $imageSrc = $image["homepage_slide_image"];
            $textIsPresent = $slideRow['homepage_slide_content'] == '' ? '' : 'darken-background' ?>

            <div class="layout-slider__slide <?php echo $textIsPresent; ?>">
                <?php if ($imageSrc) { ?>
                    <img src="<?php echo $imageSrc; ?>" alt="">
                <?php } ?>

                <?php if ($slideRow['partial_slide']) {
                    include(get_template_directory() . '/template-components/layouts/partials/homepage-slider/' . $slideRow['partial_slide'] . '.php');
                } else { ?>
                    <div class="layout-slider__content contain">
                        <?php echo wpautop($slideRow['homepage_slide_content']); ?>
                    </div>
                <?php } ?>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="button-row">
        <div class="button-group button-group--cells">
            <?php $counter = 0; ?>
            <?php foreach ( $slideRows as $slideRow ) :
                $counter++; ?>
                <button class="button--white
                    <?php if ($counter === 1) :
                        echo ' is-selected'; 
                    endif; ?>">
                    <span class="assistive">Control for slide 
                        <?php echo $counter; ?>
                    </span>
                </button>
            <?php endforeach; ?>
        </div>
    </div>
</div>
