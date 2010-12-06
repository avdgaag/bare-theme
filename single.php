<?php
/**
 * The Template for displaying all single posts.
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