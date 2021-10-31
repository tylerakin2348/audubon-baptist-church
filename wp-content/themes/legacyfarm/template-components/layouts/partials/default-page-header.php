<?php 
/*
* Default page header for pages not controlled by the CMS
*/


$thePageTitle = '';
global $template; 
if ( is_home()) {
    $thePageTitle = 'Blog';
} elseif(is_post_type_archive('for-sale')) {
    $thePageTitle = post_type_archive_title( '', false );
} elseif( is_archive() ) {
    $thePageTitle = single_term_title('Post Category: ', false);
} elseif(is_404()) {
    $thePageTitle = '404 - This page does not exist';
} else {
    $thePageTitle = get_the_title();
}

?>
  <div class="layout default-page-header">
    <div class="contain default-page-header__container">
        <div class="default-page-header__left">
            <div class="default-page-header__left--top">
                <h1 class="default-page-header__heading"><?php echo $thePageTitle; ?></h1>
            </div>
        </div>
    <div class="default-page-header__right">
        <div class="default-page-header__image">
            
          <?php $thePostFeaturedImage = get_the_post_thumbnail(); ?>

        <?php if (is_single() && $thePostFeaturedImage) { ?>
            <?php echo $thePostFeaturedImage;?>
        <?php } else { ?>
             <img src="<?php echo carbon_get_theme_option( 'blog_header_image' ); ?>" />
        <?php } ?>
        </div>
    </div>
        
    </div>
</div>