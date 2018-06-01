<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package awesome-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'awesome-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- <div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$awesome_theme_description = get_bloginfo( 'description', 'display' );
			if ( $awesome_theme_description || is_customize_preview() ) :
				?>
			 	<p class="site-description"><?php echo $awesome_theme_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div> --> <!-- .site-branding -->

	<!--	<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'awesome-theme' ); ?></button> -->

<!-- Inserted custom nav-bar code -->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
	<div>
		<a class="navbar-brand order-1 mr-0" href="https://www.kuzu.fm/#streaming-section" target="_blank">Proud Member of KUZU 92.9 LPFM</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
			<!--	<a class="nav-item nav-link" href="/">Home <span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="/about">About</a>
				<a class="nav-item nav-link" href="/artists">Artists</a>
				<a class="nav-item nav-link" href="/">Schedule</a> -->
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</div>
		</div>
	</div>
</nav><!-- /Navbar -->

<!-- /Inserted custom nav-bar code -->

	<!--	</nav> --><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
