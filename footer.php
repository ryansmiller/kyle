<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kyle_Westaway_-_Minimal
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<div class="container-fluid">
		
			<div class="row">
				
				<div class="col-sm-6">
					
					<?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
				
						<div class="footer-left-widget">
					
							<?php dynamic_sidebar( 'footer-left' ); ?>
				
						</div>
				
					<?php endif; ?>

				</div>
				
				<div class="col-sm-6">
					
					<?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
				
						<div class="footer-right-widget">
					
							<?php dynamic_sidebar( 'footer-right' ); ?>
				
						</div>
				
					<?php endif; ?>



				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
