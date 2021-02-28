<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pound&Co
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="grid-container full">
		<div class="grid-x grid-padding-x">
			<div class="red large-1 small-1">1</div>
			<div class="blue large-1 small-1">2</div>
			<div class="red large-1 small-1">3</div>
			<div class="blue large-1 small-1">4</div>
			<div class="red large-1 small-1">5</div>
			<div class="blue large-1 small-1">6</div>
			<div class="red large-1 small-1">7</div>
			<div class="blue large-1 small-1">8</div>
			<div class="red large-1 small-1">9</div>
			<div class="blue large-1 small-1">10</div>
			<div class="red large-1 small-1">11</div>
			<div class="blue large-1 small-1">12</div>

			<header class="entry-header small-12 large-12">
				<?php
						
				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta font-lemon-regular-italic">
						<?php
						pound_co_posted_on();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
				<?php
						
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title font-lemon-bold-italic"">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				?>
			</header><!-- .entry-header -->
		
			<?php pound_co_post_thumbnail(); ?>
		


			<div class="entry-content font-bahnschrift large-10 large-offset-1 small-12 cell">
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

			<a><button class="large-2 large-offset-5">Go Back To Pound&Co Blog</button></a>


		</div>
	</div>	

</article><!-- #post-<?php the_ID(); ?> -->
