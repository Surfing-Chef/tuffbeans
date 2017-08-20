<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tuffbeans
 */

?>

<section class="location">
	<header class="section-header">
		<h1 class="section-title">Location</h1>
	</header><!-- .page-header -->

	<div class="section-content">
		<?php
		if ( is_front_page() ) : ?>
		<?php

		// Tuff Map
		if( get_field('tuff_map') ): ?>
			<?php $location = get_field('tuff_map'); ?>
			<div class="acf-map">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
			</div>
		<?php endif; // if( get_field('post_map') ):

		include_once get_template_directory() . '/inc/acf/display-map.php';
		?>


		<?php if ( current_user_can( 'publish_posts' ) ) : ?>

		<?php endif; ?><!-- current_user_can( 'publish_posts' ) -->
		<?php endif; ?><!-- is_home() -->
	</div><!-- .page-content -->
</section><!-- .no-results -->
