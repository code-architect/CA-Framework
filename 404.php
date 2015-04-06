<?php
/**
 * 404.php
 *
 * For error handling, for displaying 404 page
 */
?>

<?php get_header(); ?>

    <div class="container-404">
        <h1><?php _e('Error 404 Noting Found', 'architect'); ?></h1>

        <p><?php _e('Nothing was found here. Try a Search','architect') ?></p>

        <?php get_search_form(); ?>
    </div>

<?php get_footer(); ?>