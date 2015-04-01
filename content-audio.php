<?php
/**
 * content-audio.php
 *
 * The default template for displaying posts with audios post format.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <!-- Article header -->
    <header class="entry-header"> <?php

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
            the_content( __('Read More &rarr;', 'architect') );

            wp_link_pages();
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