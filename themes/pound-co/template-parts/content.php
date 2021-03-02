<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pound&Co
 */

?>

<?php  
	if ( is_singular() ) :
	?>

		<article class="small-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<div class="grid-container full">
				<div class="grid-x grid-padding-x">
					
					<header class="entry-header small-12 large-12">
						
						<?php
						if ( 'post' === get_post_type() ) :
							?>
							<div class="entry-meta entry-meta-single font-lemon-regular-italic">
								<?php
								pound_co_posted_on();
								?>
							</div><!-- .entry-meta -->
						<?php endif; ?>
						<?php
						the_title( '<h1 class="entry-title entry-title-single font-lemon-bold-italic"">', '</h1>' );
						
						?>
					</header><!-- .entry-header -->
				
					<?php pound_co_post_thumbnail(); ?>

					<div class="entry-content large-8 large-offset-2 small-12 cell">
						<?php

						the_content(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pound-co' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								wp_kses_post( get_the_title() )
							)
						);

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pound-co' ),
								'after'  => '</div>',
							)
						);

						?>
					</div><!-- .entry-content -->

					<a href="/blog" class="blog-btn-area small-4 small-offset-4"><button class="blog-back-btn is-style-poundco-button1 large-12 small-12">Go Back To Blog</button></a>

				</div>
			</div>
		</article><!-- #post-<?php the_ID(); ?> -->


	<?php	
	else:
	?>
		<article class="large-6 posts-all-box" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<?php pound_co_post_thumbnail(); 

			the_title( '<h2 class="entry-title entry-title-all font-lemon-bold-italic"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta entry-meta-all font-lemon-regular-italic">
					<?php
					pound_co_posted_on();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>

		</article><!-- #post-<?php the_ID();?> -->

	<?php
	endif;
?>	




