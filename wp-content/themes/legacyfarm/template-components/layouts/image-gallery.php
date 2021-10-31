 <div class="layout image-gallery">
    <div class="contain image-gallery__container">
        <?php $images = $section['image_gallery'];

        foreach ( $images as $image ) :
            $imageSrc = wp_get_attachment_image_src($image)[0]; ?>
            <div class="image">
                <img  src="<?php echo $imageSrc; ?>" alt="">
            </div>
        <?php endforeach; ?>
        
    </div>
</div>