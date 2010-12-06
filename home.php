<?php
/**
 * The template for displaying a custom home page.
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