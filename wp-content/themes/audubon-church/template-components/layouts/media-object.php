<div class="layout layout-media-object">
    <div class="contain media-object__container">
        <div class="layout-media-object__content">
            <?php echo apply_filters('the_content', $section['media_object_content'] ); ?>
        </div>
        <?php $image = $section['media_object_image'];
            if ($image) : ?>
            <div class="layout-media-object__image">
                <img src="<?php echo $image; ?>" alt="">
            </div>
        <?php endif; ?>
    </div>
</div>