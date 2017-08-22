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
				<span class="fa-stack fa-3x">
				  <i class="fa fa-circle fa-stack-2x icon-background1"></i>
				  <i class="fa <?php the_field('bullet_1_icon'); ?> fa-stack-1x"></i>
				</span>
				<p><?php the_field('bullet_1_info');  ?></p>
			</div>
			<div class="news-bullet">
				<span class="fa-stack fa-3x">
				  <i class="fa fa-circle fa-stack-2x icon-background2"></i>
				  <i class="fa <?php the_field('bullet_2_icon'); ?> fa-stack-1x"></i>
				</span>
				<p><?php the_field('bullet_2_info');  ?></p>
			</div>
			<div class="news-bullet">
				<span class="fa-stack fa-3x">
					<i class="fa fa-circle fa-stack-2x icon-background3"></i>
					<i class="fa <?php the_field('bullet_3_icon'); ?> fa-stack-1x"></i>
				</span>
				<p><?php the_field('bullet_3_info');  ?></p>
			</div>
		</section>

		<?php if ( current_user_can( 'publish_posts' ) ) : ?>

		<?php endif; ?><!-- current_user_can( 'publish_posts' ) -->
		<?php endif; ?><!-- is_home() -->
	</div><!-- .page-content -->
</section><!-- .no-results -->
