<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tuffbeans
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-navigation">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-2',
			'menu_id'        => 'footer-menu'
		) );
		?>
		</div><!-- #site-navigation -->


		<div class="site-info">
			<span>Tuffbeans &copy; Copyright 2017</span>
			<span class="sep"> | </span>
			<span>Design by <a href="https://www.surfing-chef.com/about/">Surfing-Chef</a></span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Rellax -->
<script src="<?php echo get_template_directory_uri(); ?>/inc/rellax.min.js"></script>
<script>
    // Accepts any class name
    var rellax = new Rellax('.rellax');
</script>

<!-- AOS Animation Scripts -->
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script> 
	$(document).ready(function(){
		$(".fdm-item-panel").attr({ 'data-aos': 'zoom-in-up',
									'data-aos-duration': 1000,
									 'data-aos-offset': 500 });
		$(".acf-map").attr({ 'data-aos': 'zoom-in-up',
							 'data-aos-duration': 700,
							 'data-aos-easing': 'ease-out-back',
							 'data-aos-offset': 400 }); 
		$(".frm_form_field").attr({ 'data-aos': 'fade-right',
							 'data-aos-duration': 700,
							 'data-aos-offset': 500 });					 
	});

	AOS.init();
	
</script>

</body>
</html>
