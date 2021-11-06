<div id="pagination" class="pagination">
    <?php $nav = get_the_posts_pagination( array(
            'prev_text'          => __( 'More-Recent Newsletters', 'twentyfifteen' ),
            'next_text'          => __( 'Older Newsletters', 'twentyfifteen' ),
            'screen_reader_text' => __( 'A' )
        ) );
    $nav = str_replace('<h2 class="screen-reader-text">A</h2>', '', $nav);

    if ($nav) :
        echo '<hr>';
        echo $nav;
    endif; ?>
</div>