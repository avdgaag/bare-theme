<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage BareTheme
 * @since BareTheme 1.0
 */
get_header();
?>

<?php get_template_part('loop', 'search') ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>