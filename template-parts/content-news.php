<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tuffbeans
 */

?>

<section class="news">
	<header class="section-header">
		<h1 class="section-title">News</h1>
	</header><!-- .page-header -->

	<div class="section-content">
		<?php
		if ( is_home() ) : ?>


		<?php if ( current_user_can( 'publish_posts' ) ) : ?>

		<?php endif; ?><!-- current_user_can( 'publish_posts' ) -->
		<?php endif; ?><!-- is_home() -->
	</div><!-- .page-content -->
</section><!-- .no-results -->
