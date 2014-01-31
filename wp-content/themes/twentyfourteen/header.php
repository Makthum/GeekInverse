<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link href="../wp-content/themes/twentyfourteen/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister' rel='stylesheet' type='text/css'>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="site-wrapper" class="container-fluid">

<div id="page" class="container-fluid">
	<div class="container-fluid">
	<div class="row-fluid">
	<div id="header_image">
	<?php if ( get_header_image() ) : ?>
	
	<div id="header-image">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>
	</div>
	</div>
	<div class="row-fluid">
	<div class="span12">
	

		
	
<nav id="header-navigation" class="navigation-menu" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'Header-nav', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>	
	
			</div>
		</div>
			<div class="row-fluid">	
			<div class="span12">

		
		
		<div class="header-Strip">
    <div id="Strip-0"></div>
    <div id="Strip-1"></div>
    <div id="Strip-2"></div>
    <div id="Strip-3"></div>
    <div id="Strip-4"></div>
    <div id="Strip-5"></div>
    </div>
	</div>
	</div>
	<!-- #masthead -->
</div>
	<div id="main" class="container-fluid">
