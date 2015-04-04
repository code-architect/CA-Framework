<?php
/**
 * header.php
 *
 * Main header of the theme.
 */
?>
<?php
// The favicon
$favicon = IMAGES . '/iconified/favicon.ico';

// Touch Icon
$touch_icon = IMAGES . '/iconified/apple-touch-icon-152x152.png';
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="author" content="Indranil Samanta">

        <!-- mobile specific meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Stylesheets -->
        <link rel="stylesheet" />

        <!-- Icons -->
        <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $touch_icon; ?>" />

        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>

    <!-- HEADER -->
    <header class="site-header" role="banner">
        <div class="container header-contents">
            <div class="row col-xs-3">
                <div class="site-log">
                    <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home"></a>
                </div>
            </div>
            <div class="col-xs-9">
                <nav class="site-navigation" role="navigation">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'main-menu',
                                'menu_class'      => 'site-menu'
                            )
                        );
                    ?>
                </nav>
            </div>
        </div>
    </header><!-- site header ends -->

    <!-- Main Content Area -->
    <div class="container">
        <div class="row">

