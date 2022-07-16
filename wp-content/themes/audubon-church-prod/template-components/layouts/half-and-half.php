<?php if ($section['half_and_half_format_selector'] === 'text_image') { ?>
    <div class="layout half-and-half">
        <div class="contain half-and-half__container">
            <div class="half-and-half__content mobile-only-hidden">
                <?php echo wpautop($section['text_image_half_and_half_text']); ?>
            </div>
            <?php $image = $section['text_image_half_and_half_image'];
                if ($image) : ?>
                <div class="half-and-half__image">
                    <img src="<?php echo $image; ?>" alt="">
                </div>
            <?php endif; ?>
            <div class="half-and-half__content desktop-only-hidden">
                <?php echo wpautop($section['text_image_half_and_half_text']); ?>
            </div>
        </div>
    </div>

    <?php } else if ($section['half_and_half_format_selector'] === 
        'image_text') { ?>
            <div class="layout half-and-half image-text">
                <div class="contain half-and-half__container">
                <?php $image = $section['image_text_half_and_half_image'];
                if ($image) : ?>
                <div class="half-and-half__image">
                    <img src="<?php echo $image; ?>" alt="">
                </div>
            <?php endif; ?>
            <div class="half-and-half__content">
                <?php echo wpautop($section['image_text_half_and_half_text']); ?>
            </div>
        </div>
    </div>
    <?php }?>