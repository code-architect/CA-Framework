<?php
/**
 * search.php
 *
 * The template for displaying search results
 */
?>

<?php get_header(); ?>

    <div class="main-content col-md-8" role="main">
        <?php if(have_posts()) : ?>
            <header class="page-header">
                <h1>
                    <?php
                    printf(__('Search results for %s', 'architect'), get_search_query());
                    ?>
                </h1>

               
            </header>

            <?php
            // starting the loop again
            while(have_posts()): the_post();
                get_template_part('content', get_post_format());
            endwhile;
            ?>

            <?php ca_paging_nav(); ?>

        <?php else: ?>
            <?php get_template_part('content', 'none'); ?>

        <?php endif; ?>
    </div><!-- end main content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>