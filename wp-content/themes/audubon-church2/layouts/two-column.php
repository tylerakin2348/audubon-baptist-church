<div class="layout layout-two-columns">
    <div class="full-width-page__container">
        <?php
        // $slides = carbon_get_the_post_meta( 'crb_content' );
        $slides = carbon_get_the_post_meta( 'layout_two_column' );

            foreach ( $slides as $slide ) {
                echo '<div>';
                // echo wp_get_attachment_image( $slide['background_image1'] );
                echo $slide['text_content'];
                echo '</div>';
            }
        ?>
    </div>
</div>
