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

<?php get_template_part('loop', 'home') ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>