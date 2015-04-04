<?php
/**
 * footer.php
 *
 * the footer template
 */
?>
        </div><!-- end row -->
    </div><!-- end container -->

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <?php get_sidebar( 'footer' ); ?>
        </div>

        <div class="copyright">
            <p>
                &copy; <?php echo date('Y'); ?>
                <a href="<?php echo home_url() ?>"><?php bloginfo('name') ;?></a>
                <?php _e('All rights reserved.', 'architect'); ?>
            </p>
        </div>
    </footer>
<!-- FOOTER ENDS -->

<?php wp_footer(); ?>
</body>
</html>