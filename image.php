<?php
/**
 * The Child Template for displaying single image attachment posts
 *
 * @package Simone-child
 */

// Retrieve attachment metadata.
$metadata = wp_get_attachment_metadata();

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <header class="entry-header clear">

                            <h1 class="entry-title"><?php the_title(); ?></h1>

                           
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <div class="entry-attachment">
                                <figure class="image-attachment">
                                    <?php simone_the_attached_image(); ?>
                                    <?php if ( has_excerpt() ) : ?>
                                        <figcaption class="attachment-caption">
                                            <?php echo get_the_excerpt(); ?>
                                        </figcaption><!-- .entry-caption -->
                                    <?php endif; ?>
                                </figure><!-- .wp-caption -->


                            </div><!-- .entry-attachment -->

                            <?php
                                    the_content();
                                    wp_link_pages( array(
                                            'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'simone-child' ) . '</span>',
                                            'after'       => '</div>',
                                            'link_before' => '<span>',
                                            'link_after'  => '</span>',
                                    ) );
                            ?>
                        </div><!-- .entry-content -->

			<?php simone_attachment_nav(); ?>

			
                    </article><!-- #post -->

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>