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
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip" href="#content"><?php esc_html_e( 'Skip to content', 'inhabiten' ); ?></a>
	<header id="masthead" class="site-header">
				<div class="container">
					<div class="site-branding">
						<div class="logo">
							<a href="https://tent.academy.red/" rel="home">
								<h1 class="site-title">Inhabitent</h1>
							</a>
						</div>
					</div><!-- .site-branding -->

					<nav class="navigation" >
						<div class="menu-main-navigation-container">
							<ul id="primary-menu" class="menu">
								<li id="" class=""><a href="/shop/">Shop</a></li>
								<li id="" class=""><a href="/journal/">Journal</a></li>
								<li id="" class=""><a href="/about/">About</a></li>
								<li id="" class=""><a href="/find-us/">Find Us</a></li>
							</ul></div>						
						<div class="header-search">
								<form role="search" method="get" class="search-form" action="">
									<fieldset>
										<a href="#" class="search-toggle" aria-hidden="true">
											<i class="fa fa-search"></i>
										</a>
										<label>
											<input type="search" class="search-field" placeholder="Type and hit enter..." value="" name="s" title="Search for:">
										</label>
										<input type="submit" id="search-submit" class="screen-reader-text" value="Search">
									</fieldset>
								</form>
						</div>
					</nav><!-- #site-navigation -->
				</div>
			</header>
	

	<div id="content" class="site-content">
