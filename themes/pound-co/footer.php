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
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'pound-co' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'pound-co' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'pound-co' ), 'pound-co', '<a href="https://ashwinbalaje.com">Ashwin Balaje</a>' );
					?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
		
	</div><!-- .sideFooter -->
	<?php wp_footer(); ?>
</div><!-- #page -->

</body>
</html>
