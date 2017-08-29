<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tuffbeans
 */

?>

<section  id="tuff-menus" class="menus front-page-menu-link">
	<header class="section-header">
		<h1 class="section-title">Menus</h1>
	</header><!-- .page-header -->

	<div class="section-content">
		<?php
		if ( is_front_page() ) : ?>

		<?php the_field('tuff_menus');  ?>

		<?php if ( current_user_can( 'publish_posts' ) ) : ?>

		<?php endif; ?><!-- current_user_can( 'publish_posts' ) -->
		<?php endif; ?><!-- is_home() -->
	</div><!-- .page-content -->
</section><!-- .no-results -->
