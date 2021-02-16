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
				<div class="social-box">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png" class="social-icon" alt="Instagram" id="instagram">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.png" class="social-icon" alt="YouTube" id="youtube">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/tiktok.png" class="social-icon" alt="TikTok" id="tiktok">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" class="social-icon" alt="Twitter" id="twitter">
				</div>
				<p id="footer-text">©<?php echo date("Y"); ?> Pound & Company.</p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
		
	</div><!-- .sideFooter -->
	<?php wp_footer(); ?>
</div><!-- #page -->

</body>
</html>
