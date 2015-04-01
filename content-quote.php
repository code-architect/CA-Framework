<?php
/**
 * contents-quote.php
 *
 * The default template for displaying posts with the quote post format.
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
    </footer><!-- entry footer ends here -->

</article>