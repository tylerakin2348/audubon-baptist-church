
     <div id="primary" class="content-area-full">
         <main id="main" class="site-main" role="main">

         <?php
             // Custom Post Query
            $args = array (
                'post_type' => 'sermons',
            );

            $the_query = new WP_Query($args);

            while( $the_query->have_posts() ) : $the_query->the_post();
        ?>

            <!-- Post Content goes here -->
            <div class="library-book">
                <figure><?php the_post_thumbnail(); ?></figure>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>

        <?php endwhile; wp_reset_postdata(); ?>

         </main><!-- #main -->
     </div><!-- #primary -->

<?php
