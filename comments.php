<?php
/**
 * comments.php
 *
 * template for displaying comments
 */
?>

<?php
 // preventing this page to open-up directly
 // If something is loaded and the the base mane of the file is comments.php
if(!empty($_SERVER['SCRIPT_FILENAME']) && basename($_SERVER['SCRIPT_FILENAME']) == 'comments.php' ){
    die(__('You cannot access this file directly', 'architect'));
}
?>

<?php
 // check if the post id password protected, then display info text and return
if(post_password_required()) { ?>
    <p>
        <?php
        _e('This post is password protected. Please enter your password to view the comments', 'architect');

        return;
        ?>
    </p>
<?php }
?>

<?php
// IF above two conditions are checked show comments
?>
<!-- Comments area -->
<div class="comments-area" id="comments">
    <?php if(have_comments()): ?>
        <h2 class="comments-title">
            <?php
             printf( _nx( 'One Comment', '%1$s comments', get_comments_number(), 'Comments title', 'architect' ),number_format_i18n(get_comments_number()) );
            ?>
        </h2>

        <ol class="comments">
            <?php wp_list_comments(); ?>
        </ol>

        <?php
            // If the comments are paginated, display the page arrows
            if(get_comment_pages_count() > 1 && get_option('page_comments')) :
        ?>
                <nav class="comment-nav" role="navigation">
                    <p class="comment-nav-prev">
                        <?php previous_comments_link( __('&larr; Older Comments', 'architect') ); ?>
                    </p>

                    <p class="comment-nav-next">
                        <?php next_comments_link( __('Newer Comments &rarr;', 'architect') ); ?>
                    </p>
                </nav>
        <?php endif; ?>

        <?php
        // If the comments are closed, display an info text
        if(!comments_open() && get_comments_number()):
        ?>
            <p class="no-comments">
                <?php _e('Comments are closed'); ?>
            </p>
        <?php endif; ?>
    <?php endif; ?>

    <?php
    // comment forum
    comment_form();
    ?>
</div><!-- end comments area -->