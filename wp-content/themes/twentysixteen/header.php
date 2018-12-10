<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" itemscope="" itemtype="http://schema.org/WebSite">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<div id="page" class="site">
	<!--<div class="site-inner">-->
		
	<div class="textwidget custom-html-widget"><script src="//static.joomlart.com/ecosys/scripts/topbar/script.js?site=designwall"></script></div>	
	<div id="page" class="hfeed site">
		<header id="masthead" class="navbar navbar-default site-header" role="banner" data-spy="affix" data-offset-top="20">
			<div class="container">
				<div class="navbar-header">
					<a href="<?php echo site_url(); ?>" rel="home" class="navbar-brand">
						<img src="https://www.designwall.com/wp-content/uploads/2018/06/designwall-w.png" title="DesignWall">
					</a>
					
					<button class="navbar-toggle" data-toggle="collapse" data-target=".main-navigation">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<nav id="site-navigation" class="site-navigation collapse navbar-collapse main-navigation" role="navigation">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'nav navbar-nav megamenu',
						 ) );
					?>
				</nav>
			</div>
		</header><!-- end header -->

		<div id="content" class="site-content">