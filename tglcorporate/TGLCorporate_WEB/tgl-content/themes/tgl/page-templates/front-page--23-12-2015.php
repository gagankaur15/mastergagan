<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div class="nopadding">
  <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
  <?php $count_posts = wp_count_posts('slider')->publish; ?>
    <!-- Indicators -->
    <ol class="carousel-indicators">
	  <?php for($i=0; $i < $count_posts; $i++){
			$active = ($i==0)?'active':'';
			echo '<li data-target="#myCarousel" data-slide-to="'.$i.'" class="'.$active.'" ></li>';
	  } ?>	
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
	<?php
		 // WP_Query arguments
			$args = array (
				'post_type'              => 'slider',
				'post_status'            => 'publish',
			);

			// The Query
			$query = new WP_Query( $args );
            $count = 1;
			// The Loop
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					// do something
					$active = ($count==1)?'active':'';
					$count += 1;
					?>
				
			<div class="item <?php echo $active; ?> banner-big item<?php the_ID(); ?> slider<?php the_ID(); ?>-image-fold">
			<div class="mtop"> <div class="triangle-topright<?php the_ID(); ?>"></div></div>
            <?php the_content(); ?>
			
			</div>		                 
          
		<?php
				}
			} else {
				// no posts found
			}

			// Restore original Post Data
			wp_reset_postdata();
		
		?>	
      
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="greybox">
          <h4 class="section-heading nobtmBrdr">Our products</h4>
		<?php
		 // WP_Query arguments
			$args = array (
				'post_type'              => 'product',
				'post_status'            => 'publish',
				'posts_per_page'         => '5',
			);

			// The Query
			$query = new WP_Query( $args );

			// The Loop
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					// do something
					?>
		  
          <h5 class="section-subheading"><?php the_title(); ?></h5>
         <?php 
					 $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						echo '<img class="img-responsive" alt="'.get_the_title().'" src="'.$url.'">';
					} 
					?>
          <p class="mTop12px"><?php the_excerpt(); ?></p>
          <div class="row">
		    <?php if(get_post_meta(get_the_id(), 'discover_more_link', true)){?>
            <div class="col-lg-6 col-sm-6 col-xs-6 noRightPaddingxs"><a class="btn btn-primary btn-block" href="<?php echo get_post_meta(get_the_id(), 'discover_more_link', true); ?>" title="Discover more">Discover more</a></div>
			<?php } ?>
			<?php if(get_post_meta(get_the_id(), 'try_the_demo_link', true)){?>
            <div class="col-lg-6 col-sm-6 col-xs-6"> <a class="btn btn-primary btn-block" href="<?php echo get_post_meta(get_the_id(), 'try_the_demo_link', true); ?>" title="Try the demo">Try the demo</a> </div>
			<?php } ?>
          </div>
          
          <hr class="line"/>
          <div class="clearfix"></div>
		<?php
				}
			} else {
				// no posts found
			}

			// Restore original Post Data
			wp_reset_postdata();
		
		?>	  
         </div>
		   
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        
        <?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php //the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>
                         <h4 class="section-heading"> <?php the_title(); ?> </h4>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php //edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php  //comments_template(); ?>
			<?php endwhile; ?>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <?php //get_sidebar( 'front' ); ?>
		<h4 class="section-heading">Latest news <span class="pull-right"><a href="https://twitter.com/TGLGuidelines" target="_blank"><img src="wp-content/uploads/twitter_logo.png" alt="Twitter"></a> <a href="https://www.linkedin.com/company/therapeutic-guidelines-limited" target="_blank"><img src="wp-content/uploads/linkedin_logo.png" alt="Linkedin"></a> 	</span></h4>
		<?php
		 // WP_Query arguments
			$args = array (
				'post_type'              => 'news',
				'post_status'            => 'publish',
				'posts_per_page'         => '3',
			);

			// The Query
			$query = new WP_Query( $args );

			// The Loop
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					// do something
					?>
					<h5 class="section-subheading"><?php the_title(); ?></h5>
					<p><?php the_excerpt(); ?></p>
					<p><a href="<?php the_permalink(); ?>" class="readmore" title="<?php the_title_attribute(); ?>">Read more </a> </p>
					<hr class="line"/>
					<?php
				}
			} else {
				// no posts found
			}

			// Restore original Post Data
			wp_reset_postdata();
		
		?>
        <div class="row col-xs-6"><a class="btn btn-default btn-block" href="<?php echo get_home_url(); ?>/news" role="button">View all stories</a></div>		
      </div>
      <!--col-6--> 
      <!--col-6-->
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<?php get_footer(); ?>