<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/logo.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>

<!-- scroll -->
<link href="<?php echo get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<script src="<?php echo get_template_directory_uri(); ?>/js/ajax.js"></script>
<!-- scroll -->
<!-- jQuery library (served from Google) -->
<!-- bxSlider Javascript file -->
<script src="<?php echo get_template_directory_uri(); ?>/jquery.bxslider/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<script>
$(document).ready(function(){
  $('.slider4').bxSlider({
    slideWidth: 350,
    minSlides: 1,
    maxSlides: 3,
    moveSlides: 1,
    slideMargin: 22
  });
});
$(document).ready(function(){
  $('.slider5').bxSlider({
    slideWidth: 165,
    minSlides: 1,
    maxSlides: 1,
    moveSlides: 1,
    slideMargin: 20
  });
});
</script>
<link href="<?php echo get_template_directory_uri(); ?>/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body <?php body_class(); ?>>
<div id="mainpaper">
	<div id="menu-top">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( '<i class="icon-align-justify"></i>', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
         
        <div class="social">
        	<a href="<?php echo get_option('facebook'); ?>" class="facebook"><i class="icon-facebook-sign"></i></a>
        	<a href="<?php echo get_option('twitter'); ?>" class="twitter"><i class="icon-twitter-sign"></i></a>
        	<a href="<?php echo get_option('googleplus'); ?>" class="google-plus"><i class="icon-google-plus-sign"></i></a>
        	<a href="<?php bloginfo('rss2_url'); ?>" class="rss"><i class="icon-rss-sign"></i></a>
        </div>
        <div class="search">
        	<form action="#" >
                <button type="submit">
                <i class="icon-search"></i>
                </button>
                <input type="text" id="s" name="s" placeholder="بحث في الموقع" />
            </form>
        </div>
    </div>
    <div id="hed">
    <h1><i class="icon-tv"></i><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    
    </div>
    <div id="innre-paper">
