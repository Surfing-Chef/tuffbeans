<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tuffbeans
 */

?>

<section  id="tuff-info" class="info">
	<div class="section-content">
		<?php
		if ( is_front_page() ) : ?>
		<section class="news-bullets">
			<div class="news-bullet">
				<i class="fa <?php the_field('bullet_1_icon');  ?>" aria-hidden="true"></i>
				<p><?php the_field('bullet_1_info');  ?></p>
			</div>
			<div class="news-bullet">
				<i class="fa <?php the_field('bullet_2_icon');  ?>" aria-hidden="true"></i>
				<p><?php the_field('bullet_2_info');  ?></p>
			</div>
			<div class="news-bullet">
				<i class="fa <?php the_field('bullet_3_icon');  ?>" aria-hidden="true"></i>
				<p><?php the_field('bullet_3_info');  ?></p>
			</div>
		</section>

		<?php if ( current_user_can( 'publish_posts' ) ) : ?>

		<?php endif; ?><!-- current_user_can( 'publish_posts' ) -->
		<?php endif; ?><!-- is_home() -->
	</div><!-- .page-content -->
</section><!-- .no-results -->
