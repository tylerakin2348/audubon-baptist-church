<div class="slider-partial latest-sermon-slider-partial">
    <?php include get_template_directory() . '/template-queries/latest-sermon.php'; ?>

    <?php if ( $the_latest_sermon_query->have_posts() ) : while ( $the_latest_sermon_query->have_posts() ) : $the_latest_sermon_query->the_post(); ?>
    <div class="layout latest-sermon slider-partial latest-sermon-slider-partial sermon">
        <?php $featured_image = get_the_post_thumbnail_url(); ?>
        <img class="latest-sermon__image" src="<?php echo $featured_image; ?>"/>

        <div class="contain">
            <h2 class="latest-sermon__heading">Latest Sermon</h2>
           
            <div class="latest-sermon__title">
                <h3><?php the_title() ?></h3>
            </div>

            <div class="latest-sermon__content mobile-min">
                <?php the_content() ?>
            </div>

            <a class="button listen-now-to-sermon mobile-max" href="<?php echo get_permalink(); ?>">Listen Now</a>

            <a class="button view-more-sermons" href="/audubon-church/sermons">Find More Sermons</a>
        </div>
    </div>

    <?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
    <?php wp_reset_query(); ?>
</div>
