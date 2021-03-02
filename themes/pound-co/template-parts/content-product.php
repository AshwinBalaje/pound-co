<?php
/**
 * Template part for displaying product singles
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pound&Co
 */

?>

<article class="small-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="grid-container full">
        <div class="grid-x grid-padding-x">
            
            <div class="entry-content large-10 large-offset-1 small-12 cell">
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

        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->

