<?php
/**
 * single.php
 *
 * the template for displaying single post
 */
?>


<?php get_header(); ?>

    <!-- Main content -->
    <div class="main-content col-md-8" role="main">
        <?php while(have_posts()) : the_post(); ?>

            <?php get_template_part('content', get_post_format()); ?>

            <?php comments_template(); ?>
        <?php endwhile; ?>
    </div>
    <!-- Main content ends -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>