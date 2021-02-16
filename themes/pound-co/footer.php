<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pound&Co
 */

?>

	<div class="sideFooter" id="sideFooter">
		<footer id="colophon" class="site-footer">
			<div class="site-info">
				<button class="menu-toggle" aria-controls="footer-menu" aria-expanded="false"><?php esc_html_e( 'Footer Menu', 'pound-co' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-footer',
						'menu_id'        => 'footer-menu',
					)
				);
				?>
			
				<p id="footer-text">©2021 Pound & Company.</p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
		
	</div><!-- .sideFooter -->
	<?php wp_footer(); ?>
</div><!-- #page -->

</body>
</html>
