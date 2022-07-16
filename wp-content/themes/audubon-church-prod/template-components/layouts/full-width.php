<?php $image = $section['full_width_image']; ?>

<div class="layout full-width <?php if ($image) {echo ' bgimg'; }?>">
    <?php $image = $section['full_width_image'];
    if ($image) : ?>
        <div class="full-width__image">
            <img src="<?php echo $image; ?>" alt="">
        </div>
    <?php endif; ?>
    <div class="contain full-width__container">
        <div class="full-width__content">
            <?php echo wpautop($section['full_width_content']); ?>
        </div>
        
    </div>
</div>