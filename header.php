<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage BareTheme
 * @since BareTheme 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie ie6 lte7 lte8 lte9"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie ie7 lte7 lte8 lte9"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie ie8 lte8 lte9"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie ie9 lte9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <?php wp_head() ?>
    </head>
    <body <?php body_class(); ?>>

        <div id="page">

            <div id="header" role="banner">

                <hgroup>
                    <h1><a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <h2><?php bloginfo('description'); ?></h2>
                </hgroup>

                <nav role="navigation">
                <?php wp_nav_menu(array('container' => false)) ?>
                </nav>

            </div><!-- /header -->

            <div id="content">
