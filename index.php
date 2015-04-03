<?php
/**
 * index.php
 *
 * The main template file.
 */
?>

<?php get_header(); ?>

<div class="main-content col-md-8" role="main">
    <?php if(have_posts()) : while(have_posts()) : the_post();  ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
    <?php endwhile; ?>

        <?php
        // Pagination
        ca_paging_nav();
        ?>

    <?php else : ?>
        <?php //if there is no content to show ?>
        <?php get_template_part( 'content', 'none' ); ?>

    <?php endif; ?>
</div> <!-- end main content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>