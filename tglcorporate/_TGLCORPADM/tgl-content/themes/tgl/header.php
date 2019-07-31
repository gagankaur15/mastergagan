<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- <meta name="viewport" content="width=device-width"> -->
	<meta name='viewport' content='width=device-width, initial-scale=1.0' />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<?php 
		@session_start();
		$now = time(); // Checking the time now when home page starts.

        if (isset($_SESSION['expire']) && $now > $_SESSION['expire']) {
            session_destroy(); 
            echo '<script>window.location="'.esc_url( home_url( '/' ) ).'";</script>';           
            //header('Location: '.esc_url( home_url( '/' ) ));
        }else {
		    $_SESSION['expire'] = time() + (60 * 60);
		}
	?>
	<!-- CSS -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/extlib/bootstrap/bootstrap.css" rel="stylesheet">

	<!-- Font-Awesome Framework -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/extlib/font-awesome/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/extlib/flaticon/flaticon.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lib/login.css">
	<!-- Colorbox Modal Framework -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/extlib/colorbox/colorbox.css">
	<!-- Superfish Multimenu Framework -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/extlib/superfish/superfish.css" rel="stylesheet">
	<!-- Typeahead Plugin -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/extlib/bootstrap/typeahead.css">

	<!-- IE Polyfill Library & Modernizr -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/extlib/helpers/modernizr.custom.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/extlib/helpers/respond.js"></script>
	
	<!-- Carousel CSS -->
	<style type="text/css">
	
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
					?>
	.carousel-inner > .item<?php the_ID(); ?> > p{ color: <?php echo get_post_meta(get_the_id(), 'text_color', true); ?>;}
	.slider<?php the_ID(); ?>-image-fold {background: <?php echo get_post_meta(get_the_id(), 'background_color', true); ?>  no-repeat top right;}
	.triangle-topright<?php the_ID(); ?> {width: 0;height: 0;border-top: 87px solid #d3d4d5;border-left: 156px solid transparent;position: relative;/*left:1145px;*/z-index: 9999;}
	.triangle-topright<?php the_ID(); ?>:after {content: '';width: 0;top: -121px;right: 32px;height: 0;border-top: 123px solid;  opacity: 0.5; border-left:142px solid transparent;position: absolute;transform: rotate(150deg);border-width: 153px 116px 98px 93px; }
	@media only screen and (max-width: 480px) {
		.triangle-topright<?php the_ID(); ?> { width: 0;height: 0;border-top: 34px solid #a7a9ac; border-left: 109px solid transparent;position: relative;/*left:1145px;*/z-index: 9999;}
		.triangle-topright<?php the_ID(); ?>:after {content: ''; width: 0; top: -69px;right: 32px; height: 0; border-top: 100px solid; opacity: 0.5;  border-left: 100px solid transparent;position: absolute;transform: rotate(128deg);border-width: 103px 82px 73px 40px;}
	}
	<?php
				}
			} 

			// Restore original Post Data
			wp_reset_postdata();
		
		?>
	</style>

</head>

<body <?php body_class(); ?>>
		<header>
		<div class="navbar navbar-default" role="navigation">
    <div class="container mobilenav">
      <div class="row top-section">
        <div class="col-xs-4 visible-xs">
          <div class="bars"><i class="flaticon-menu31" onClick="menuToggle()"></i></div>
        </div>
      <div class="col-lg-3 col-xs-4 col-sm-4">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

<svg width="127" height="39">
            <image xlink:href="<?php echo get_template_directory_uri(); ?>/images/svgassets/tgl_logo.svg" src="assets/images/tglLogo.png" width="127" height="39" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"/>
            </svg>
</a>
		</div> 
<?php if(isset($_SESSION["cdplogin"])){	?>
          <div class="col-lg-2 col-md-2 col-sm-3 pull-right col-xs-4 C-hide visible-xs"> <!--shoing my account icon in mobile-->
             <div class="dropdown" id="etg-compXsDropdown">
              <span class="fa fa-ellipsis-v fa-2x pull-right dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true"></span> <!--icon-ellipsis-vertical -->   
                  <ul class="dropdown-menu" id="purchaseLicence" role="menu" aria-labelledby="dropdownMenu2">
                    <li role="presentation"><a href="#"><strong><?php echo $_SESSION["cdplogin"]['given_name'].' '.$_SESSION["cdplogin"]['surname'] ; ?></strong></a></li>
		              <?php if($_SESSION["cdplogin"]['subscription'] == 'etgcomplete') { ?> 
					  <li role="presentation"><a href="<?php echo TGL_DELIVERY_URL; ?>/etgAccess" tabindex="-1" role="menuitem">eTG complete online</a></li>
					  <?php } ?>
		              <li class="divider"></li>
		              <?php $cdplogout_url = TGL_DELIVERY_URL.'/userlogoutCorporate'; ?>
	  				 <li role="presentation"><a href="<?php echo esc_url( home_url( '/wp-login.php?action=cdplogout&redirect_to='.$cdplogout_url ) ); ?>" tabindex="-1" role="menuitem">Log out</a></li>
                  </ul>
                </div>
              </div><!--shoing my account icon in mobile  END-->
<?php } ?>		
        <div class="col-lg-9 col-xs-12 col-sm-8 text-right hidden-xs">
 <div class="btn-group">
 <?php if(isset($_SESSION["cdplogin"])){
	?>
	<div class="btn-group">
	<button class="btn btn-info noborder text-left dropdown-toggle btn-block" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="false"><span class="pull-left"> My account </span><span class="fa fa-chevron-down pull-right"></span> </button>
	<ul class="dropdown-menu dropdown-menu-right" id="purchaseLicence" role="menu" aria-labelledby="dropdownMenu1">
	  <li role="presentation"><a href="<?php echo TGL_DELIVERY_URL; ?>/showMyProfile" tabindex="-1" role="menuitem"><strong><?php echo $_SESSION["cdplogin"]['given_name'].' '.$_SESSION["cdplogin"]['surname'] ; ?></strong></a></li>
	  <?php if($_SESSION["cdplogin"]['subscription'] == 'etgcomplete') { ?> 
	  <li role="presentation"><a href="<?php echo TGL_DELIVERY_URL; ?>/etgAccess" tabindex="-1" role="menuitem">eTG complete online</a></li>
	  <?php } ?>
	  <li class="divider"></li>
	  <?php $cdplogout_url = TGL_DELIVERY_URL.'/userlogoutCorporate'; ?>
	  <li role="presentation"><a href="<?php echo esc_url( home_url( '/wp-login.php?action=cdplogout&redirect_to='.$cdplogout_url ) ); ?>" tabindex="-1" role="menuitem">Log out</a></li>
	</ul>
	</div>
	<?php 
	
	}else{ ?>
         <a data-target="#loginBox" data-backdrop="static" data-keyboard="false" data-toggle="modal" href="#" id="loginButton" class="btn btn-info btn-block" title="Log in">Log in</a> </div>
	<?php } ?>		 
        </div>        
        </div>
      </div>
    </div>
		
		  
		  <div class="appnav">
			<div class="container">
			  <div class="row">
              <form id="searchfrm" method="post" action="<?php echo TGL_DELIVERY_URL; ?>/searchAction">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
					  <div class="col-lg-4 col-sm-1"></div>
					  <!--Application Menu-->
					  <div class="col-lg-6 col-sm-8 noRPaddingIP">
					  	<?php if(!isset($_SESSION["cdplogin"])){	?>
						<div class="row visible-xs">
						<a href="#" title="eTG complete Log in" class="btn btn-info btn-block" data-target="#loginBox" data-backdrop="static" data-keyboard="false" data-toggle="modal">Log in</a> </div>
						<?php } ?>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'sf-menu sidebar-offcanvas col-lg-10', 'menu_id' => 'sidebar' ) ); ?>
						
					  </div>
			<div class="col-lg-2 col-xs-12 col-sm-3 noRightPadding noLPaddingIP hidden">
			<select id="search_cat" class="form-control"><option value="site">Site Search</option><option value="content">Content Search</option></select>	
			</div>
			<div class="col-lg-2 col-xs-12 col-sm-3 noRightPadding">
   
     <div class="input-group search-widget">
      <?php $search =  get_query_var( 's' ); ?>
        <input type="text" id="search_input" name="appendedInputButtons" value="<?php echo $search; ?>" class="form-control typeahead" data-provide="typeahead" autocomplete="off" placeholder="">
      <span class="input-group-btn"><a onclick="jQuery('#searchfrm').submit()" class="btn nopadding" type="button"><i class="flaticon-magnifying-glass34"></i></a> </span>
    </div>			  				  
 
<script>
jQuery(document).ready(function(){
   $("#search_cat").change(function(){
            if($(this).val() == 'site'){
               $("#searchfrm").attr("action","<?php echo get_home_url(); ?>" ) ;
               $("#search_input").attr("name","s" ) ;
               $("#searchfrm").attr("method","get" ) ;
            }else{
                $("#searchfrm").attr("action","<?php echo TGL_DELIVERY_URL; ?>/searchAction" ) ;
                $("#search_input").attr("name","appendedInputButtons" ) ;
                $("#searchfrm").attr("method","post" ) ;
            }
        });	
});
</script>
            
            </div>
 <div class="clearfix"></div>
 </form>
					</div>                    
				  </div>
				</div>
			  </div>			
		  <div class="container">
			<div class="row">			    
			  <ul class="breadcrumb">
				<li><?php if(function_exists('bcn_display'))
				{
					bcn_display();
				}?></li>
			  </ul>
			</div>
		  </div>

		</header>

		