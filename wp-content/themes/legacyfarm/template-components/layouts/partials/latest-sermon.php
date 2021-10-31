<?php
    $args = array(
    'orderby' => 'title',
    'post_type' => 'sermons',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC', // Gets the most recent sermon post
    );
    $the_query = new WP_Query( $args );
    ?>

    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div class="layout latest-sermon sermon">
        <?php $featured_image = get_the_post_thumbnail_url(); ?>
        <img class="latest-sermon__image" src="<?php echo $featured_image; ?>"/>

        <div class="contain">
            <h2>Latest Sermon</h2>
            <?php
                $term_obj_list = get_the_terms( $the_query->ID, 'series' ); ?>
                <div class="blog-categories">
                    <?php
                    foreach ( $term_obj_list as $term ) {
                        $term_link = get_term_link( $term ); ?>
                        <a href="<?php echo $term_link ?>"><?php echo $term->name; ?></a>
                    <?php } ?>
                </div>
            <div class="latest-sermon__title">
                <h3><?php the_title() ?></h3>
            </div>

            <div class="latest-sermon__content">
                <?php the_content() ?>
            </div>

            <a class="button" href="/audubon-church/sermons">View More Sermons</a>
        </div>
    </div>

    <?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
    <?php wp_reset_query(); ?>