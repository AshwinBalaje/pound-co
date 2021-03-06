<?php
/**
 * The all posts file
 *
 * @package Pound&Co
 */

get_header();
?>

	<main id="primary" class="site-main">
    <div class="grid-container full">
		<div class="grid-x grid-padding-x">

            <?php
                if ( have_posts() ) :

                    if ( is_home() && ! is_front_page() ) :
                        ?>
                        <header class="small-12">
                            <h1 class="page-title posts-all-title font-lemon-bold-italic">Pound&Co Blog</h1>
                        </header>
                        <?php
                    endif;

                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();

                        /*
                        * Include the Post-Type-specific template for the content.
                        * If you want to override this in a child theme, then include a file
                        * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                        */
                        get_template_part( 'template-parts/content', get_post_type() );

                    endwhile;

                    the_posts_navigation();

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif;
            ?>
            </div>
        </div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();