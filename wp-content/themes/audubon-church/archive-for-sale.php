<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();

?>
<?php include 'template-components/layouts/partials/default-page-header.php'; ?>

<div class="layout layout-page-header">
    <div class="contain">
        <div class="layout-page-header__content">
            <h1 class="red-text"><?php echo post_type_archive_title( '', false ); ?></h1>
        </div>
    </div>
</div>
<div class="sermons">
    <div class="contain">
        <div class="sermon-container">
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

            <?php if ( $the_query->have_posts() ) : 
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="single-animal" style="display: flex; justfiy-content: center; flex-direction: column;">
                        <!-- Complex field -->
                        <?php 
                        $theAnimalFields = carbon_get_post_meta( get_the_ID(), 'crb_single_animal_fields' );
                        if ( $theAnimalFields ) {
                            foreach ( $theAnimalFields as $theAnimalField ) { 
                                $theImage = $theAnimalField['page_header_images']; ?>
                                <img class="lazy-load"  srcset="<?php echo $theImage; ?>" src="<?php echo get_template_directory_uri() . '/assets/img/1x1.jpeg'; ?>" style="width: 4rem; height: auto;" />
                            <?php }
                        } ?>

                        <h2><?php the_title(); ?></h2>

                        <?php $price = carbon_get_post_meta( get_the_ID(), 'crb_price' );
                        if ($price) { 
                            echo '$' . $price; 
                        }
                        ?><br>


                        <?php $animal_information = carbon_get_post_meta( get_the_ID(), 'crb_animal_information' );
                        if ($animal_information) { 
                            echo $animal_information; 
                        } ?>

                        <div>
                            <a href="<?php the_permalink(); ?>">View Details</a><br>
                            <a href="/contact-us">Contact Us</a>
                        </div>
                        </div>
                        <br>
                        <br>

                <?php endwhile; 
                    endif; ?>

        </div>
    </div>
    <br />
   <div class="post-navigation">
       <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
   </div><!-- /.navigation -->
</div>
<?php get_footer();