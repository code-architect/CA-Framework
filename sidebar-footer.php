<?php
/**
 * sidebar-footer.php
 *
 * footer widget area
 */
?>
<?php if(is_active_sidebar('sidebar-2')){ ?>
    <aside class="footer-sidebar" role="complementary">
        <div class="row">
            <?php dynamic_sidebar('sidebar-2') ?>
        </div>
    </aside><!-- end sidebar -->
<?php } ?>