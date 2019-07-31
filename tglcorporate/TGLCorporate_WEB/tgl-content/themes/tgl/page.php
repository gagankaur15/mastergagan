<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div class="nopadding">
	<div class="item active item1 banner-small global-banner">
        <div class="container">
	<h1 class="banner-head"><?php the_title(); ?></h1>
	</div>
       </div>
	</div>
	<div id="primary" class="site-content container">
		<div id="content" class="row" role="main">
			<div class="col-lg-9 col-sm-9 col-xs-12">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
			</div>
                      
			<div class="col-lg-3 col-sm-3 col-xs-12">
			<?php //get_sidebar(); ?>
			</div>
                         
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>