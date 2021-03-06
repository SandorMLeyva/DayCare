<?php
/**
 * The template to display the site logo in the footer
 *
 * @package WordPress
 * @subpackage SAVEO
 * @since SAVEO 1.0.10
 */

// Logo
if (saveo_is_on(saveo_get_theme_option('logo_in_footer'))) {
	$saveo_logo_image = '';
	if (saveo_get_retina_multiplier(2) > 1)
		$saveo_logo_image = saveo_get_theme_option( 'logo_footer_retina' );
	if (empty($saveo_logo_image)) 
		$saveo_logo_image = saveo_get_theme_option( 'logo_footer' );
	$saveo_logo_text   = get_bloginfo( 'name' );
	if (!empty($saveo_logo_image) || !empty($saveo_logo_text)) {
		?>
		<div class="footer_logo_wrap">
			<div class="footer_logo_inner">
				<?php
				if (!empty($saveo_logo_image)) {
					$saveo_attr = saveo_getimagesize($saveo_logo_image);
					echo '<a href="'.esc_url(home_url('/')).'"><img src="'.esc_url($saveo_logo_image).'" class="logo_footer_image" '.(!empty($saveo_attr[3]) ? sprintf(' %s', $saveo_attr[3]) : '').'></a>' ;
				} else if (!empty($saveo_logo_text)) {
					echo '<h1 class="logo_footer_text"><a href="'.esc_url(home_url('/')).'">' . esc_html($saveo_logo_text) . '</a></h1>';
				}
				?>
			</div>
		</div>
		<?php
	}
}
?>