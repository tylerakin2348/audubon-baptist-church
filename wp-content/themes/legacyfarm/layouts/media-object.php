<div class="layout layout-media-object">
    <div class="full-width-page__container">
        <?php

        $slides32 = carbon_get_the_post_meta( 'crb_content' );

// var_dump($slides);

        foreach ( $slides as $slide ) {
            echo '<div>';
            // echo wp_get_attachment_image( $slide['background_image1'] );
            echo $slides32['layout_default'];
            echo '</div>';
        }
        ?>
    </div>
</div>
