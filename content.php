<?php
/**
 * content.php
 *
 * The default template for displaying content.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <!-- Article header -->
    <header class="entry-header"> <?php
        // If the post has thumbnail & it's not password protected
        // then display the thumbnail
        if(has_post_thumbnail() && !post_password_required()): ?>
            <figure class="entry-thumbnail"><?php the_post_thumbnail(); ?></figure>
        <?php endif;

        // If single post page, display title else we display title in a link
        if( is_single() ): ?>
            <h1><?php the_title(); ?></h1>
        <?php else : ?>
            <h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <?php endif; ?>

        <p class="entry-meta">
            <?php
            // displaying the meta information
            ca_post_meta();
            ?>
        </p>
    </header><!-- header ends -->

    <!-- Article Content -->
    <div class="entry-content">
        <?php
        if( is_search() ) {
            the_excerpt();
        } else {
            the_content( __('Read More &rarr;', 'architect') );

            wp_link_pages();
        }
        ?>
    </div><!-- end of entry content -->

    <!-- Article Footer -->
    <footer class="entry-footer">
        <?php
        //if we have a single page and the author bio exists, display it
        if( is_single() && get_the_author_meta( 'description' ) ){
            echo '<h2>'. __('Written By ', 'architect') . get_the_author() .'</h2>';
            echo '<p>'. the_author_meta('description') .'</p>';
        }
        ?>
    </footer><!-- entry footer ends here -->

</article>