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
        <?php
        $args = array(
        'orderby' => 'title',
        'post_type' => 'sermons',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC', // Gets the most recent sermon post
        );
        $the_query = new WP_Query( $args );
        ?>
        <?php //https://developer.wordpress.org/reference/functions/get_term_link/ ?>
        <?php $terms = get_terms( 'series' );
        if (sizeof($terms) > 0) {
            echo '<ul class="categories">';

            foreach ( $terms as $term ) {
        
                // The $term is an object, so we don't need to specify the $taxonomy.
                $term_link = get_term_link( $term );
        
                // If there was an error, continue to the next term.
                if ( is_wp_error( $term_link ) ) {
                    continue;
                }
                // We successfully got a link. Print it out.
                echo '<li><a href="' . esc_url( $term_link ) . '">' . $term->name . '</a></li>';
            }
        
            echo '</ul>';
        }
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
            <?php wp_reset_query(); ?>
        </div>
        <br />

    </div>
</div>

<?php get_footer(); ?>
