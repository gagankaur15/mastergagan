<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); 
$post_type = get_post_type( get_the_ID() );
?>
<div class="nopadding">
	<div class="item active item1 banner-small global-banner">
<div class="container">
	<h1 class="banner-head">
	<?php if($post_type != 'post'){ 
		echo ucfirst($post_type);
	} else { ?>
	<?php the_title(); ?>
	<?php } ?>
	</h1>
	</div>
</div>
	</div>
	<div id="primary" class="site-content container">
		<div id="content" class="row" role="main">
			<div class="col-lg-9 col-sm-9 col-xs-12">
			
			<?php while ( have_posts() ) : the_post(); ?>
			<?php if($post_type != 'post'){ ?>
<h3 class="tgl-heading1"><?php the_title(); ?></h4>

                 			<?php } ?>	 
				<?php get_template_part( 'content', get_post_format() ); ?>
              
			   <?php /*
				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->
                */ ?>
				<?php //comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>
			</div>
			<div class="col-lg-3 col-sm-3 col-xs-12">
			<!--<?php //get_sidebar(); ?>-->
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

