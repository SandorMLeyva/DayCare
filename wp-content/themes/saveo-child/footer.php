<?php
/**
 * The Footer: widgets area, logo, footer menu and socials
 *
 * @package WordPress
 * @subpackage SAVEO
 * @since SAVEO 1.0
 */

						// Widgets area inside page content
						saveo_create_widgets_area('widgets_below_content');
						?>				
					</div><!-- </.content> -->

					<?php
					// Show main sidebar
					get_sidebar();

					// Widgets area below page content
					saveo_create_widgets_area('widgets_below_page');

					$saveo_body_style = saveo_get_theme_option('body_style');
					if ($saveo_body_style != 'fullscreen') {
						?></div><!-- </.content_wrap> --><?php
					}
					?>
			</div><!-- </.page_content_wrap> -->

			<?php
			// Footer
			$saveo_footer_style = saveo_get_theme_option("footer_style");
			if (strpos($saveo_footer_style, 'footer-custom-')===0) $saveo_footer_style = 'footer-custom';
			get_template_part( "templates/{$saveo_footer_style}");
			?>

		</div><!-- /.page_wrap -->

	</div><!-- /.body_wrap -->

	<?php if (saveo_is_on(saveo_get_theme_option('debug_mode')) && saveo_get_file_dir('images/makeup.jpg')!='') { ?>
		<img src="<?php echo esc_url(saveo_get_file_url('images/makeup.jpg')); ?>" id="makeup">
	<?php } ?>

	<?php wp_footer(); ?>
<!-- TEXT US WIDGET -->
<div class="col-xs-12 textus">
    <h3>Contáctanos</h3>
</div>
<div id="box-contact" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 form_text_us hidden">
    <i class="fa fa-close cerrar"></i>
    <?php echo do_shortcode('[contact-form-7 id="1503" title="Form widget Text US"]'); ?>
</div>
<!-- END TEXT US WIDGET -->
</body>
</html>