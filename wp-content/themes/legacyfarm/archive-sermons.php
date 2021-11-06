<?php
/**
 * The template for displaying sermon archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<div class="layout layout-page-header">
    <div class="contain">
        <div class="layout-page-header__content">
            <h1 class="red-text">Sermons</h1>
        </div>
    </div>
</div>
<div class="sermons">
    <div class="contain">
        <?php include 'wp-content/themes/legacyfarm/template-components/layout-fragments/sermon-categories.php'; ?>
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
        'orderby' => 'title',
        'post_type' => 'sermons',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC', // Gets the most recent sermon post
        'paged' => $paged,

        );

        $the_query = new WP_Query( 
            $args,                                 
        );
        ?>
        <div class="sermon-container">
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>

            <div class="layout sermon">
                <div class="contain">
                <?php
                    $term_obj_list = get_the_terms( $the_query->ID, 'series' ); ?>

                    <?php if ($term_obj_list){ ?>
                        <div class="blog-categories">
                            <?php
                            foreach ( $term_obj_list as $term ) {
                                $term_link = get_term_link( $term ); ?>
                                <a href="<?php echo $term_link ?>"><?php echo $term->name; ?></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <div class="latest-sermon__title">
                        <h3><?php the_title() ?></h3>
                    </div>
                    <div class="latest-sermon__content">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>

            <?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>

        <!-- <nav class="navigation pagination" role="navigation" aria-label="A">
            <div class="nav-links">
                <span aria-current="page" class="page-numbers current">1</span>
                <a class="page-numbers" href="http://audubon-baptist-church.local/newsletters/page/2/">2</a>
                <a class="page-numbers" href="http://audubon-baptist-church.local/newsletters/page/3/">3</a>
                <a class="next page-numbers" href="http://audubon-baptist-church.local/newsletters/page/2/">Next Page</a>
            </div>
        </nav> -->

        <div class="navigation pagination" role="navigation">
            <div class="nav-links">
                <span class="newer"><?php previous_posts_link(__('« Newer Sermons','example')) ?></span> 

                
                <span class="older"><?php next_posts_link(__('Older Sermons »','example')) ?></span>
            </div>
         </div>

        <?php wp_reset_query(); ?>
        
        </div>
       
        <br />

    </div>
</div>

<?php get_footer(); ?>
