<?php 
$options = array();
global $ftc_default_sidebars;
$sidebar_options = array(
				'0'	=> esc_html__('Default', 'rango')
				);
foreach( $ftc_default_sidebars as $key => $_sidebar ){
	$sidebar_options[$_sidebar['id']] = $_sidebar['name'];
}

$options[] = array(
				'id'		=> 'prod_layout_heading'
				,'label'	=> esc_html__('Product Layout', 'rango')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
			
$options[] = array(
				'id'		=> 'prod_layout'
				,'label'	=> esc_html__('Product Layout', 'rango')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0'			=> esc_html__('Default', 'rango')
									,'0-1-0'  	=> esc_html__('Fullwidth', 'rango')
									,'1-1-0' 	=> esc_html__('Left Sidebar', 'rango')
									,'0-1-1' 	=> esc_html__('Right Sidebar', 'rango')
									,'1-1-1' 	=> esc_html__('Left & Right Sidebar', 'rango')
								)
			);
			
$options[] = array(
				'id'		=> 'prod_left_sidebar'
				,'label'	=> esc_html__('Left Sidebar', 'rango')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'prod_right_sidebar'
				,'label'	=> esc_html__('Right Sidebar', 'rango')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);

$options[] = array(
				'id'		=> 'prod_custom_tab_heading'
				,'label'	=> esc_html__('Custom Tab', 'rango')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
			
$options[] = array(
				'id'		=> 'prod_custom_tab'
				,'label'	=> esc_html__('Custom Tab', 'rango')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0'		=> esc_html__('Default', 'rango')
									,'1'	=> esc_html__('Override', 'rango')
								)
			);
			
$options[] = array(
				'id'		=> 'prod_custom_tab_title'
				,'label'	=> esc_html__('Custom Tab Title', 'rango')
				,'desc'		=> ''
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'prod_custom_tab_content'
				,'label'	=> esc_html__('Custom Tab Content', 'rango')
				,'desc'		=> ''
				,'type'		=> 'textarea'
			);
			
$options[] = array(
				'id'		=> 'prod_breadcrumb_heading'
				,'label'	=> esc_html__('Breadcrumbs', 'rango')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);

$options[] = array(
				'id'		=> 'bg_breadcrumbs'
				,'label'	=> esc_html__('Breadcrumb Background Image', 'rango')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'prod_video_heading'
				,'label'	=> esc_html__('Video', 'rango')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);

$options[] = array(
				'id'		=> 'prod_video_url'
				,'label'	=> esc_html__('Video URL', 'rango')
				,'desc'		=> esc_html__('Enter Youtube or Vimeo video URL', 'rango')
				,'type'		=> 'text'
			);		
?>