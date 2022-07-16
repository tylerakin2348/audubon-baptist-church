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


<div class="layout layout-page-header">
    <div class="contain">
        <a href="/sermons">Back to all series</a>
        <div class="layout-page-header__content">
            <h1 class="red-text"><?php the_archive_title(); ?></h1>
        </div>
    </div>
</div>
<div class="sermons">
    <div class="contain">
        <div class="sermon-container">
            <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();
            ?>
            <div class="layout sermon">
                <div class="contain">
                    <div class="latest-sermon__title">
                        <h3><?php the_title() ?></h3>
                    </div>
                    <div class="latest-sermon__content">
                        <?php the_content() ?>
                     </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <br />
   <div class="post-navigation">
       <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
   </div><!-- /.navigation -->
</div>
<?php get_footer(); ?>
