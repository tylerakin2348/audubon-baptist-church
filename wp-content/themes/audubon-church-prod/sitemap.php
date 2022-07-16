<?php
/*
Template Name: Sitemap
*/
?>

<?php get_header(); ?>

<?php include 'template-components/layouts/partials/default-page-header.php'; ?>

<div class="contain">
    <!-- <h2 id="pages">Pages</h2> -->
    <div class="layout layout-full-width">
        <ul>
        <?php
        // Add pages you'd like to exclude in the exclude here
        wp_list_pages(
        array(
            'exclude' => '897',
            'title_li' => '',
        )
        );
        ?>
        </ul>

    </div>
</div>

<?php get_footer(); ?>
