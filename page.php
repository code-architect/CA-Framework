<?php
/**
 * page.php
 *
 * the default template for all pages
 */
?>

<?php get_header(); ?>

    <!-- Main content -->
    <div class="main-content col-md-8" role="main">
        <?php while(have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <!-- Article header -->
                <header class="entry-header"> <?php
                    // If the post has thumbnail & it's not password protected
                    // then display the thumbnail
                    if(has_post_thumbnail() && !post_password_required()): ?>
                        <figure class="entry-thumbnail"><?php the_post_thumbnail(); ?></figure>
                    <?php endif; ?>

                    <h1><?php the_title(); ?></h1>
                </header><!-- header ends -->

                <!-- Article Content -->
                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages();
                    ?>
                </div><!-- end of entry content -->

                <!-- Article Footer -->
                <footer class="entry-footer">
                    <?php
                    if( is_user_logged_in() ){
                        echo '<p>';
                        edit_post_link( __('Edit', 'architect'), '<span class="meta-edit">','</span>' );
                        echo '</p>';
                    }
                    ?>
                </footer><!-- entry footer ends here -->

            </article>

            <?php comments_template(); ?>
        <?php endwhile; ?>
    </div>
    <!-- Main content ends -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>