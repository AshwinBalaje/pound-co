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
			
			<?php  //all posts thumbnail
			if ( is_singular() ) :
				
			else:
				pound_co_post_thumbnail(); 	
			endif;
			?>

			<header class="entry-header small-12 large-12">
				
				<?php
						
				if ( is_singular() ) :
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
				
				
				
				else :
					the_title( '<h2 class="entry-title entry-title-all font-lemon-bold-italic"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					if ( 'post' === get_post_type() ) :
						?>
						<div class="entry-meta entry-meta-all font-lemon-regular-italic">
							<?php
							pound_co_posted_on();
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?><?php
				endif;

				?>
			</header><!-- .entry-header -->
		
			<?php //singular post thumbnail
			if ( is_singular() ) :
				pound_co_post_thumbnail(); 
			endif;
			?>
	
			<div class="entry-content large-8 large-offset-2 small-12 cell">
				<?php

				if ( is_singular() ) :
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
				else :
					
				endif;

				?>
			</div><!-- .entry-content -->

			<?php

			if ( is_singular() ) :
				echo '<a href="/blog" class="blog-btn-area small-4 small-offset-4"><button class="blog-back-btn is-style-poundco-button1 large-12 small-12">Go Back To Blog</button></a>';	
			endif;
				
			?>

		</div>
	</div>	

</article><!-- #post-<?php the_ID(); ?> -->
