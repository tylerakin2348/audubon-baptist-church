<?php
    $previous_post_url = get_permalink(get_adjacent_post(false, '', true));
    $next_post_url = get_permalink(get_adjacent_post(false, '', false));

    if ($previous_post_url || $next_post_url) :
        echo '<hr>';
    endif;
?>

<div class="blog-single-next-prev-links">
    <?php if ( $previous_post_url != get_the_permalink() ) : ?>
        <a class="blog-single-next-prev-links__link" href="<?php echo $previous_post_url; ?>">Previous Post</a>
    <?php endif; ?>

    <?php if ( $next_post_url != get_the_permalink() ) : ?>
        <a class="blog-single-next-prev-links__link" href="<?php echo $next_post_url; ?>">Next Post</a>
    <?php endif; ?>
</div>