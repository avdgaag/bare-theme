<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package WordPress
 * @subpackage BareTheme
 * @since BareTheme 1.0
 */
get_header();
?>

<?php get_template_part('loop', 'author') ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>