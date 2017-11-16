<?php 
$options = array();

$options[] = array(
				'id'		=> 'brand_url'
				,'label'	=> esc_html__('Logo URL', 'rango')
				,'desc'		=> ''
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'brand_target'
				,'label'	=> esc_html__('Target', 'rango')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
							'_self'		=> esc_html__('Self', 'rango')
							,'_blank'	=> esc_html__('New Window Tab', 'rango')
						)
			);
?>