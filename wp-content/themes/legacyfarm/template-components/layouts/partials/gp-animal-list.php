 <div class="layout gp-animal-list">

    <h2 class="gp-animal-list__heading">Our Guard Dogs</h2>
    <div class="contain gp-animal-list__container">
        <?php
        $args = array(
            // 'orderby' => 'title',
            'post_type' => 'great-pyrenees',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC', // Gets the most recent sermon post
        );
        $the_query = new WP_Query( $args );
        ?>

        <?php if ( $the_query->have_posts() ) : 
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="single-animal">
                        <!-- Complex field -->
                        <?php 
                        $theAnimalFields = carbon_get_post_meta( get_the_ID(), 'crb_single_animal_fields' );
                            foreach ( $theAnimalFields as $theAnimalField ) { 
                            if ( $theAnimalField['page_header_image'] ) {
                                $theImage = $theAnimalField['page_header_image']; ?>
                                <div class="image">
                                    <img src="<?php echo $theImage; ?>" />
                                </div>
                                <?php } ?>
                            <?php } ?>

                        <div class="text">
                            <h2><?php the_title(); ?></h2>

                            <div>
                                <a href="<?php the_permalink(); ?>">See More</a><br>
                            </div>
                        </div>
                        
                        </div>

                <?php endwhile; 
            else: ?> 
                <p>Sorry, there are no posts to display</p> 
            <?php endif; ?>
            
        <?php wp_reset_query(); ?>
    </div>
</div>