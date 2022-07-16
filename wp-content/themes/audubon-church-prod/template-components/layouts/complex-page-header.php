<div class="layout page-header">
    <div class="contain page-header__container">
        <div class="page-header__left">
            <div class="page-header__left--top">
                <?php $heading = $section['page_header_heading'];
                if ($heading) : ?>
                    <h1><?php echo $heading; ?></h1>
                <?php else: ?>
                    <h1><?php the_title(); ?></h1>
                <?php endif; ?>
            </div>
            
            <hr>

            <div class="page-header__left--bottom">
                <?php echo wpautop($section['page_header_content']); ?>
            </div>
        </div>
    <div class="page-header__right mobile-only-hidden">
        <?php $image = $section['page_header_image'];
        if ($image) : ?>
        <div class="page-header__image">
            <img src="<?php echo $image; ?>" alt="">
        </div>
        <?php endif; ?>
    </div>
        
    </div>
</div>