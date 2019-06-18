<?php
/**
 * The template for homepage posts with "Portfolio" style
 *
 * @package WordPress
 * @subpackage SAVEO
 * @since SAVEO 1.0
 */

saveo_storage_set('blog_archive', true);

// Load scripts for both 'Gallery' and 'Portfolio' layouts!
wp_enqueue_script( 'imagesloaded' );
wp_enqueue_script( 'masonry' );
wp_enqueue_script( 'classie', saveo_get_file_url('js/theme.gallery/classie.min.js'), array(), null, true );
wp_enqueue_script( 'saveo-gallery-script', saveo_get_file_url('js/theme.gallery/theme.gallery.js'), array(), null, true );

get_header(); 

if (have_posts()) {

	echo get_query_var('blog_archive_start');

	$saveo_stickies = is_home() ? get_option( 'sticky_posts' ) : false;
	$saveo_sticky_out = saveo_get_theme_option('sticky_style')=='columns' 
							&& is_array($saveo_stickies) && count($saveo_stickies) > 0 && get_query_var( 'paged' ) < 1;
	
	// Show filters
	$saveo_cat = saveo_get_theme_option('parent_cat');
	$saveo_post_type = saveo_get_theme_option('post_type');
	$saveo_taxonomy = saveo_get_post_type_taxonomy($saveo_post_type);
	$saveo_show_filters = saveo_get_theme_option('show_filters');
	$saveo_tabs = array();
	if (!saveo_is_off($saveo_show_filters)) {
		$saveo_args = array(
			'type'			=> $saveo_post_type,
			'child_of'		=> $saveo_cat,
			'orderby'		=> 'name',
			'order'			=> 'ASC',
			'hide_empty'	=> 1,
			'hierarchical'	=> 0,
			'exclude'		=> '',
			'include'		=> '',
			'number'		=> '',
			'taxonomy'		=> $saveo_taxonomy,
			'pad_counts'	=> false
		);
		$saveo_portfolio_list = get_terms($saveo_args);
		if (is_array($saveo_portfolio_list) && count($saveo_portfolio_list) > 0) {
			$saveo_tabs[$saveo_cat] = esc_html__('All', 'saveo');
			foreach ($saveo_portfolio_list as $saveo_term) {
				if (isset($saveo_term->term_id)) $saveo_tabs[$saveo_term->term_id] = $saveo_term->name;
			}
		}
	}
	if (count($saveo_tabs) > 0) {
		$saveo_portfolio_filters_ajax = true;
		$saveo_portfolio_filters_active = $saveo_cat;
		$saveo_portfolio_filters_id = 'portfolio_filters';
		if (!is_customize_preview())
			wp_enqueue_script('jquery-ui-tabs', false, array('jquery', 'jquery-ui-core'), null, true);
		?>
		<div class="portfolio_filters saveo_tabs saveo_tabs_ajax">
			<ul class="portfolio_titles saveo_tabs_titles">
				<?php
				foreach ($saveo_tabs as $saveo_id=>$saveo_title) {
					?><li><a href="<?php echo esc_url(saveo_get_hash_link(sprintf('#%s_%s_content', $saveo_portfolio_filters_id, $saveo_id))); ?>" data-tab="<?php echo esc_attr($saveo_id); ?>"><?php echo esc_html($saveo_title); ?></a></li><?php
				}
				?>
			</ul>
			<?php
			$saveo_ppp = saveo_get_theme_option('posts_per_page');
			if (saveo_is_inherit($saveo_ppp)) $saveo_ppp = '';
			foreach ($saveo_tabs as $saveo_id=>$saveo_title) {
				$saveo_portfolio_need_content = $saveo_id==$saveo_portfolio_filters_active || !$saveo_portfolio_filters_ajax;
				?>
				<div id="<?php echo esc_attr(sprintf('%s_%s_content', $saveo_portfolio_filters_id, $saveo_id)); ?>"
					class="portfolio_content saveo_tabs_content"
					data-blog-template="<?php echo esc_attr(saveo_storage_get('blog_template')); ?>"
					data-blog-style="<?php echo esc_attr(saveo_get_theme_option('blog_style')); ?>"
					data-posts-per-page="<?php echo esc_attr($saveo_ppp); ?>"
					data-post-type="<?php echo esc_attr($saveo_post_type); ?>"
					data-taxonomy="<?php echo esc_attr($saveo_taxonomy); ?>"
					data-cat="<?php echo esc_attr($saveo_id); ?>"
					data-parent-cat="<?php echo esc_attr($saveo_cat); ?>"
					data-need-content="<?php echo (false===$saveo_portfolio_need_content ? 'true' : 'false'); ?>"
				>
					<?php
					if ($saveo_portfolio_need_content) 
						saveo_show_portfolio_posts(array(
							'cat' => $saveo_id,
							'parent_cat' => $saveo_cat,
							'taxonomy' => $saveo_taxonomy,
							'post_type' => $saveo_post_type,
							'page' => 1,
							'sticky' => $saveo_sticky_out
							)
						);
					?>
				</div>
				<?php
			}
			?>
		</div>
		<?php
	} else {
		saveo_show_portfolio_posts(array(
			'cat' => $saveo_cat,
			'parent_cat' => $saveo_cat,
			'taxonomy' => $saveo_taxonomy,
			'post_type' => $saveo_post_type,
			'page' => 1,
			'sticky' => $saveo_sticky_out
			)
		);
	}

	echo get_query_var('blog_archive_end');

} else {

	if ( is_search() )
		get_template_part( 'content', 'none-search' );
	else
		get_template_part( 'content', 'none-archive' );

}

get_footer();
?>