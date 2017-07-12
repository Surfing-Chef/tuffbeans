<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tuffbeans
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.js" ?>></script>

<link rel="icon" href="http://localhost/tuffPress/favicon.png" type="image/x-icon" />
<link rel="shortcut icon" href="http://localhost/tuffPress/favicon.png" type="image/x-icon" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tuffbeans' ); ?></a>

	<header id="masthead" class="parallax-window">

		<section id="home" data-type="background" data-speed="5" class="parallax-background">
			<article>
				<img src="<?php echo get_template_directory_uri(); ?>/img/TuffBeans_logoWhite.svg" alt="Tuff Beans Logo" class="logo">
			</article>
		</section>

		<nav class="main-navigation home">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
