<?php 
    wp_enqueue_script( 'blog-category-dropdown' );

    $get_the_categories =  get_categories( array(
        'taxonomy' => 'series',
    ) );
?>
<div class="blog-categories mobile-categories large-screen-max">
    <button class="blog-categories__toggle large-screen-max" aria-expanded="false">Sermon Categories</button>
    <ul class="blog-categories__list">
        <?php wp_list_categories( array(
            'taxonomy' => 'series',
            'title_li' => '',
            // 'number' => 3
        ) ); ?>
    </ul>
</div>

<div class="blog-categories desktop-categories large-screen-min">
    <ul class="blog-categories__list">
        <?php
            foreach ( array_slice($get_the_categories, 0, 3) as $category ) {
            $category_link = get_term_link( $category ); ?>
            <li><a href="<?php echo $category_link; ?>"><?php echo $category->name; ?></a></li>
        <?php } ?>
    </ul>
    <button class="blog-categories__toggle" aria-expanded="false">More Categories</button>
    <ul class="blog-categories__list floating">
        <?php
            foreach ( array_slice($get_the_categories, 3) as $category ) {
            $category_link = get_term_link( $category ); ?>
            <li><a href="<?php echo $category_link; ?>"><?php echo $category->name; ?></a></li>
        <?php } ?>
    </ul>
</div>
