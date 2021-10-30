<?php
$args = array(
'orderby' => 'title',
'post_type' => 'sermons',
);
$the_query = new WP_Query( $args );
?>
<div class="test2">

</div>
<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="each-book">
<div class="main-summary"><?php the_content() ?></div>
</div>
<?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
<?php wp_reset_query(); ?>
