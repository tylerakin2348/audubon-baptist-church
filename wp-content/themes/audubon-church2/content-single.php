<div class="page-wrapper">
    <h2 class="page-title"><?php the_title(); ?></h2>
    <p class="blog-post-meta"><?php the_date(); ?> by <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></p>
    <div class="container__inner">

       <?php the_content(); ?>

    </div>
</div><!-- /.blog-post -->
