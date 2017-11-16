<?php
$options = array();
global $ftc_default_sidebars;
$sidebar_options = array();
foreach( $ftc_default_sidebars as $key => $_sidebar ){
	$sidebar_options[$_sidebar['id']] = $_sidebar['name'];
}

/* Get list menus */
$menus = array('0' => esc_html__('Default', 'rango'));
$nav_terms = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
if( is_array($nav_terms) ){
	foreach( $nav_terms as $term ){
		$menus[$term->term_id] = $term->name;
	}
}

$options[] = array(
				'id'		=> 'page_layout_heading'
				,'label'	=> esc_html__('Page Layout', 'rango')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);

$options[] = array(
				'id'		=> 'layout_style'
				,'label'	=> esc_html__('Layout Style', 'rango')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'rango')
									,'boxed' 	=> esc_html__('Boxed', 'rango')
									,'wide' 	=> esc_html__('Wide', 'rango')
								)
			);
			
$options[] = array(
				'id'		=> 'page_layout'
				,'label'	=> esc_html__('Page Layout', 'rango')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0-1-0'  => esc_html__('Fullwidth', 'rango')
									,'1-1-0' => esc_html__('Left Sidebar', 'rango')
									,'0-1-1' => esc_html__('Right Sidebar', 'rango')
									,'1-1-1' => esc_html__('Left & Right Sidebar', 'rango')
								)
			);
			
$options[] = array(
				'id'		=> 'left_sidebar'
				,'label'	=> esc_html__('Left Sidebar', 'rango')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);

$options[] = array(
				'id'		=> 'right_sidebar'
				,'label'	=> esc_html__('Right Sidebar', 'rango')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'left_right_padding'
				,'label'	=> esc_html__('Left Right Padding', 'rango')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'rango')
								,'0'	=> esc_html__('No', 'rango')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'full_page'
				,'label'	=> esc_html__('Full Page', 'rango')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'rango')
								,'0'	=> esc_html__('No', 'rango')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'header_breadcrumb_heading'
				,'label'	=> esc_html__('Header - Breadcrumb', 'rango')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
			
$options[] = array(
				'id'		=> 'header_layout'
				,'label'	=> esc_html__('Header Layout', 'rango')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'rango')
									,'layout1'  		=> esc_html__('Header Layout 1', 'rango')
									,'layout2' 		=> esc_html__('Header Layout 2', 'rango')
								)
			);
			
$options[] = array(
				'id'		=> 'header_transparent'
				,'label'	=> esc_html__('Transparent Header', 'rango')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'rango')
								,'0'	=> esc_html__('No', 'rango')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'header_text_color'
				,'label'	=> esc_html__('Header Text Color', 'rango')
				,'desc'		=> esc_html__('Only available on transparent header', 'rango')
				,'type'		=> 'select'
				,'options'	=> array(
								'default'	=> esc_html__('Default', 'rango')
								,'light'	=> esc_html__('Light', 'rango')
								)
			);

$options[] = array(
				'id'		=> 'menu_id'
				,'label'	=> esc_html__('Primary Menu', 'rango')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $menus
			);
			
$options[] = array(
				'id'		=> 'show_page_title'
				,'label'	=> esc_html__('Show Page Title', 'rango')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'rango')
								,'0'	=> esc_html__('No', 'rango')
								)
			);
			
$options[] = array(
				'id'		=> 'show_breadcrumb'
				,'label'	=> esc_html__('Show Breadcrumb', 'rango')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'rango')
								,'0'	=> esc_html__('No', 'rango')
								)
			);
			
$options[] = array(
				'id'		=> 'breadcrumb_layout'
				,'label'	=> esc_html__('Breadcrumb Layout', 'rango')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'rango')
									,'v1'  		=> esc_html__('Breadcrumb Layout 1', 'rango')
									,'v2' 		=> esc_html__('Breadcrumb Layout 2', 'rango')
									,'v3' 		=> esc_html__('Breadcrumb Layout 3', 'rango')
								)
			);
			
$options[] = array(
				'id'		=> 'breadcrumb_bg_parallax'
				,'label'	=> esc_html__('Breadcrumb Background Parallax', 'rango')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'default'  	=> esc_html__('Default', 'rango')
								,'1'		=> esc_html__('Yes', 'rango')
								,'0'		=> esc_html__('No', 'rango')
								)
			);
			
$options[] = array(
				'id'		=> 'bg_breadcrumbs'
				,'label'	=> esc_html__('Breadcrumb Background Image', 'rango')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);	
			
$options[] = array(
				'id'		=> 'logo'
				,'label'	=> esc_html__('Logo', 'rango')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'logo_mobile'
				,'label'	=> esc_html__('Mobile Logo', 'rango')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'logo_sticky'
				,'label'	=> esc_html__('Sticky Logo', 'rango')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);

if( !class_exists('Ftc_Demo') ){			
	$footer_blocks = array('0' => '');
	
	$args = array(
		'post_type'			=> 'ftc_footer'
		,'post_status'	 	=> 'publish'
		,'posts_per_page' 	=> -1
	);
	
	$posts = new WP_Query($args);
	
	if( !empty( $posts->posts ) && is_array( $posts->posts ) ){
		foreach( $posts->posts as $p ){
			$footer_blocks[$p->ID] = $p->post_title;
		}
	}

	wp_reset_postdata();
	
	$options[] = array(
				'id'		=> 'page_footer_heading'
				,'label'	=> esc_html__('Page Footer', 'rango')
				,'desc'		=> esc_html__('You also need to add the FTC - Footer widget into Footer widget', 'rango')
				,'type'		=> 'heading'
			);

	$options[] = array(
			'id'		=> 'footer_center'
			,'label'	=> esc_html__('Footer Center', 'rango')
			,'desc'		=> ''
			,'type'		=> 'select'
			,'options'	=> $footer_blocks
		);
		
	$options[] = array(
			'id'		=> 'footer_bottom'
			,'label'	=> esc_html__('Footer Bottom', 'rango')
			,'desc'		=> ''
			,'type'		=> 'select'
			,'options'	=> $footer_blocks
		);
}
?>