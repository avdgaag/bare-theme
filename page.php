<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage BareTheme
 * @since BareTheme 1.0
 */
get_header();
?>

<?php if(have_posts()): the_post(); ?>

    <h1><?php the_title() ?></h1>

    <?php the_content(); ?>

<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>