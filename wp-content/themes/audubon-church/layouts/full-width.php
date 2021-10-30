<div class="layout layout-full-width">
    <div class="full-width-page__container">
        <?php
        $sections = carbon_get_the_post_meta( 'crb_content_fields' );
          foreach ( $sections as $section ) {
              echo $section['text_content'];
              $image = $section['image']; ?>
              <img src="<?php echo $image; ?>" alt="">
          <?php } ?>
    </div>
</div>
