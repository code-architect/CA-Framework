<?php
/**
 * archive.php
 */
?>

<?php get_header(); ?>

    <div class="main-content col-md-8" role="main">
        <?php if(have_posts()) : ?>
            <header class="page-header">
                <h1>
                    <?php
                    // check what kind of archive it is i.e. daily or monthly or yearly etc
                    if( is_day() ){
                        printf( __('Daily Archives for %s', 'architect'), get_the_date() );
                    } elseif( is_month() ){
                        printf( __('Monthly Archives for %s', 'architect'), get_the_date(_x('F Y', 'Monthly archive date format','architect')) );
                    } elseif( is_year() ){
                        printf( __('Yearly Archives for %s', 'architect'), get_the_date(_x('Y', 'Yearly archive date format','architect')) );
                    } else{
                        _e('Archives', 'architect');
                    }
                    ?>
                </h1>

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