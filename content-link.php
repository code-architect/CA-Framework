<?php
/**
 * contents-link.php
 *
 * The default template for displaying posts with the link post format.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

    <!-- Article Content -->
    <div class="entry-content">
        <?php
            the_content( __('Read More &rarr;', 'architect') );

            wp_link_pages();
        ?>
    </div><!-- end of entry content -->

    <!-- Article Footer -->
    <footer class="entry-footer">
        <p class="entry-meta">
            <?php
            // displaying the meta information
            ca_post_meta();
            ?>
        </p>
        <?php
        //if we have a single page and the author bio exists, display it
        if( is_single() && get_the_author_meta( 'description' ) ){
            echo '<h2>'. __('Written By ', 'architect') . get_the_author() .'</h2>';
            echo '<p>'. the_author_meta('description') .'</p>';
        }
        ?>
    </footer><!-- entry footer ends here -->

</article>