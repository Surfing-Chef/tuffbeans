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
<!-- jQuery -->
<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous">
</script>

<!-- AOS CSS -->
<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

<!-- Font-Awesome -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!-- Tuff Favicon and Icon -->
<link rel="icon" href="http://localhost/tuffPress/favicon.png" type="image/x-icon" />
<link rel="shortcut icon" href="http://localhost/tuffPress/favicon.png" type="image/x-icon" />

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i|Montserrat:400,700" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tuffbeans' ); ?></a>

	<header id="masthead" class="parallax-window">

	<!-- <section id="home" data-type="background" data-speed="5" class="parallax-background"> -->
		<section id="home" data-rellax-speed="3.7" class="rellax parallax-background">
			<article class="rellax" data-rellax-speed="7.3">
				<img src="<?php echo get_template_directory_uri(); ?>/img/TuffBeans_logoWhite.svg" alt="Tuff Beans Logo" class="logo">
			</article>
		</section>

	</header><!-- #masthead -->

  <nav class="main-navigation home">
    <?php
      wp_nav_menu( array(
        'theme_location' => 'menu-1',
        'menu_id'        => 'primary-menu'
      ) );
    ?>
  </nav><!-- #site-navigation -->

	<div id="content" class="site-content">
