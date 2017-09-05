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
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'tuffbeans' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'tuffbeans' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'tuffbeans' ), 'tuffbeans', '<a href="https://automattic.com/">Underscores.me</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

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
