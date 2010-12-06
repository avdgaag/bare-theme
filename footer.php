<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage BareTheme
 * @since BareTheme 1.0
 */
?>
            </div><!-- /content -->

            <div id="footer" role="contentinfo">

                <p><a href="<?php echo home_url('/') ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>

            </div><!-- /footer -->

        </div><!-- /page -->
        <?php wp_footer() ?>

    </body>
</html>