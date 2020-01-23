<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inhabiten
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="font" href="fonts/Novecento/style.css">
	<link rel="font" href="fonts/Merriweather/style.css">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site" style="position:relative;">
	<a class="skip" href="#content"><?php esc_html_e( 'Skip to content', 'inhabiten' ); ?></a>
	<header id="masthead" class="site-header <?php  if( ! is_front_page() && ! is_page('about') ){ echo 'sticky-header' ;};?>">
				<div class="contain">
					
					<nav class="navigation" >
						<div class="logo">
							<a href="/wordpress/" rel="home">
								<h1 class="site-title">Inhabitent</h1>
							</a>
						</div>
						<div class="menu-main-navigation-container">
							<ul id="primary-menu" class="menu">
								<li id="" class=""><a href="/wordpress/products_type/">Shop</a></li>
								<li id="" class=""><a href="/wordpress/journal/">Journal</a></li>
								<li id="" class=""><a href="/wordpress/about/">About</a></li>
								<li id="" class=""><a href="/wordpress/find-us/">Find Us</a></li>
							</ul></div>						
						<?php get_search_form(); ?>
					</nav><!-- #site-navigation -->
				</div>
			</header>
	

	<div id="content" class="site-content">