<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<style>
a.click_here{color:black; text-decoration:underline;}
a.click_here:hover{color:#23527c}
</style>
<div class="nopadding">
<div class="item active item1  global-banner">
	<div class="container">
<h1 class="banner-head">Sorry, the page you requested is unavailable. Click <a class="click_here" href="<?php echo home_url(); ?>" >here</a> to go back to our home page.</h1>
</div>
   </div>
</div>
	<div id="primary" class="site-content container">
		<div id="content" class="row" role="main" style="min-height:300px;">
		</div><!-- #content -->
	</div><!-- #primary -->
	
<div style="position:fixed;bottom:0;width:100%;">
<?php get_footer(); ?>
</div>