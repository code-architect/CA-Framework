<?php
/**
 * header.php
 *
 * Main header of the theme.
 */
?>
<?php
// The favicon
$favicon = IMAGES . '/favicon.ico';


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
        <!-- I am leaving the apple icons blank -->

    </head>

