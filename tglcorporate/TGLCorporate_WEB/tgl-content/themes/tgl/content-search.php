<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>
			<?php //the_post_thumbnail(); ?>
			<?php endif; ?>			
		</header>
		<h5 class="searchContentH"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h5>
		<div class="searchContentP">
		   
			<?php the_excerpt(); ?>
			<p><a href="<?php the_permalink(); ?>" class="readmore" title="<?php the_title_attribute(); ?>">Read more... </a></p>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		
	</article><!-- #post -->
