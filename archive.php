<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage BareTheme
 * @since BareTheme 1.0
 */
get_header();
?>

<?php if(have_posts()): ?>

    <?php while(have_posts()): the_post(); include('partials/archived_post.php'); endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>