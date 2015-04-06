<?php
/**
 * tag.php
 */
?>

<?php get_header(); ?>

    <div class="main-content col-md-8" role="main">
        <?php if(have_posts()) : ?>
            <header class="page-header">
                <h1>
                    <?php
                    printf(__('Tag archive for %s', 'architect'), single_tag_title('', false));
                    ?>
                </h1>

                <?php
                // Show tag description if there is any
                if(tag_description()){
                    echo '<p>'. tag_description() .'</p>';
                }
                ?>

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