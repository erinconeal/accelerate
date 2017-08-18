<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer clearfix" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
					<p><?php bloginfo('description'); ?></p>
					<p>&copy; <?php bloginfo('title'); ?>, LLC
				</div>

				<nav class="social-media-navigation" role="navigation">
					<!-- Theme isn't able to display icons in menu, so inserting manually
					<?php wp_nav_menu( array( 'theme_location' => 'social-media',
					'menu_class' => 'social-media-menu' ) ); ?> -->
					<div class="social-btns">
						<a href="#" class="soc-icon tw"></a>
						<a href="#" class="soc-icon fb"></a>
						<a href="#" class="soc-icon ln"></a>
					</div>
				</nav>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
