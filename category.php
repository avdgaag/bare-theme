<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage BareTheme
 * @since BareTheme 1.0
 */
get_header();
?>

<?php get_template_part('loop', 'category') ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>