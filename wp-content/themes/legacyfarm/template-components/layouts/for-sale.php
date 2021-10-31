<?php 
wp_enqueue_script( 'flickity' );
wp_enqueue_script( 'for-sale-slider' );
?>
   <div class="layout layout-for-sale">

        <div class="contain contain-wide" style="margin-bottom: 1rem;">
                <?php $heading = $section['for_sale_heading']; ?>
                <h2><?php echo $heading; ?></h2>
        </div>
        <div class="contain layout-for-sale__container">
                
            <div class="layout-for-sale__left">
                
                <?php $image = $section['for_sale_main_image'];
                if ($image) : ?>
                <div class="layout-for-sale__left-image">
                    <img src="<?php echo $image; ?>" alt="">
                </div>
                <?php endif; ?>
                <div class="layout-for-sale__left-content">
                    <?php echo wpautop($section['for_sale_main_content']); ?>
                </div>

            </div>
            <div class="layout-for-sale__right for-sale-slider">

                <?php
            $args = array(
                // 'orderby' => 'title',
                'post_type' => array('great-pyrenees', 'miniature-nubians'),
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC', // Gets the most recent sermon post
            );
            $the_query = new WP_Query( $args );
            ?>

                
            <?php if ( $the_query->have_posts() ) : ?>
            <div class="carousel">

                    <?php while ( $the_query->have_posts() ) : 
                        $the_query->the_post(); ?>
                        <div class="carousel-cell single-animal" 
                            style="display: flex; 
                            justfiy-content: center; 
                            flex-direction: column;">
                            <!-- Complex field -->
                            <?php 
                            $theAnimalFields = carbon_get_post_meta( get_the_ID(), 'crb_single_animal_fields' );
                                foreach ( $theAnimalFields as $theAnimalField ) { 
                                    if ( $theAnimalField['page_header_image'] ) {
                                        $theImage = $theAnimalField['page_header_image']; ?>
                                    <div class="image"><img src="<?php echo $theImage; ?>" /></div>
                                <?php }
                            } ?>

                            <div class="text">

                                <h3><?php the_title(); ?></h3>

                                <?php $price = carbon_get_post_meta( get_the_ID(), 'crb_price' );
                                // if ($price) { 
                                //     echo '$' . $price; 
                                // }
                                ?>

                                <!-- <?php $animal_information = carbon_get_post_meta( get_the_ID(), 'crb_animal_information' );
                                if ($animal_information) { ?>
                                    <p><?php echo $animal_information;?></p>
                                <?php } ?> -->

                                <a href="<?php the_permalink(); ?>">View Details</a><br>
                            </div>
                            </div>

                    <?php endwhile; 
                else: ?> 
                    <p>Sorry, there are no posts to display</p> 
                </div>
                <?php endif; ?>
                
            <?php wp_reset_query(); ?>
            </div>
            <div class="button-row">
                <button class="button button--previous vertical"><span class="assistive">Previous Slide</span></button>
                <button class="button button--next vertical"><span class="assistive">Next Slide</span></button>
            </div>

        </div>
    </div>
    </div>
