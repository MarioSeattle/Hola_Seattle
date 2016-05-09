<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _hola
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- added this from seattle tours in spanish -->
<meta name="Mario Gomez" content="tours Espa&ntilde;ol Seattle"/>
<meta name="description" content="Seattle Tours en Espa&ntilde;ol, Hola Seattle, Espa&ntilde;ol seattle, marihuana tour seattle, Latinos Seattle, informacion seattle en Espa&ntilde;ol, festivales seattle, guia en Espa&ntilde;ol seattle "/>
<meta name="keywords" content="Seattle Espa&ntilde;ol, Spanish Tours, Hola Seattle, Seattle in spanish, City Tours Seattle Espa&ntilde;ol , informacion en Seattle Espa&ntilde;ol, seattle tours en Espa&ntilde;ol, spanish tours seattle" />
<meta name="google-site-verification" content="To_DwW6yI2owuF77WGDw8_O5c83iyLh1OTk8YgcrRm8" />
<!-- -->
    
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', '_hola' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<!-- .navegation starts here -->
		<nav class="navbar navbar-inverse " role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button"  class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div><!--end navbar-header-->
        <div class="collapse navbar-collapse menu-primary" id="bs-example-navbar-collapse-1">
            <?php
            wp_nav_menu( array(
                'menu'              => '',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => '',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
            ?>
            <div class="col-sm-3 col-md-3 pull-right search-navbar">
                <form class="navbar-form" role="search" method="get" id="searchform" action="<?php bloginfo('home'); ?>" >
                 
                </form>
            </div>
        </div><!--end navbar-colapse-->
    </div><!--end container-->
</nav>
		<!-- .navegation ends here -->



	</header><!-- #masthead -->

	<div id="content" class="site-content">
