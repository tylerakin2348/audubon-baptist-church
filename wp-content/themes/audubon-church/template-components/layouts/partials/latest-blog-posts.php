<?php 
wp_enqueue_script( 'latest-blog-posts' );
?>
<div class="layout latest-blog-posts">
    <h2 class="latest-blog-posts__heading">Latest Blog Posts</h2>
    <div class="contain latest-blog-posts__container">
        <button class="button button--previous"><span class="assistive">Previous Slide</span></button>
        <div class="carousel">
            <?php
                $args = array(
                    // 'orderby' => 'title',
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC', // Gets the most recent sermon post
                );
                $the_query = new WP_Query( $args );
                ?>

            <?php if ( $the_query->have_posts() ) : 
                    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="single-animal carousel-cell" style="display: flex; justfiy-content: center; flex-direction: column;">
                <!-- Complex field -->
                <?php 
                            $theAnimalFields = carbon_get_post_meta( get_the_ID(), 'crb_single_animal_fields' );
                            if ( $theAnimalFields ) {
                                foreach ( $theAnimalFields as $theAnimalField ) { 
                                    $theImage = $theAnimalField['page_header_images']; ?>
                <img style="width: 4rem; height: auto;" src="<?php echo $theImage; ?>" />
                                <?php }
                            } ?>

                <h3><?php the_title(); ?></h3>

                <div>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </div>

            <?php endwhile; 
                    else: ?>
            <p>Sorry, there are no posts to display</p>
            <?php endif; ?>
        </div>

        <?php wp_reset_query(); ?>
        <button class="button button--next"><span class="assistive">Next Slide</span></button>
    </div>
</div>
