<?php 
    wp_enqueue_script( 'blog-category-dropdown' );
?>
<div class="blog-categories">
    <button class="blog-categories__toggle desktop-only-hidden" aria-expanded="false">Blog Categories</button>
    <ul class="blog-categories__list">
        <?php wp_list_categories( array(
            'title_li' => ''
        ) ); ?>
    </ul>
</div>
