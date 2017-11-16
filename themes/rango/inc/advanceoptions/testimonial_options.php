<?php 
$options = array();

$options[] = array(
				'id'		=> 'gravatar_email'
				,'label'	=> esc_html__('Gravatar Email Address', 'rango')
				,'desc'		=> esc_html__('Enter in an e-mail address, to use a Gravatar, instead of using the "Featured Image". You have to remove the "Featured Image".', 'rango')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'byline'
				,'label'	=> esc_html__('Byline', 'rango')
				,'desc'		=> esc_html__('Enter a byline for the customer giving this testimonial (for example: "CEO of ThemeFTC").', 'rango')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'url'
				,'label'	=> esc_html__('URL', 'rango')
				,'desc'		=> esc_html__('Enter a URL that applies to this customer (for example: http://themeftc.com/).', 'rango')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'rating'
				,'label'	=> esc_html__('Rating', 'rango')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
						'-1'	=> esc_html__('no rating', 'rango')
						,'0'	=> esc_html__('0 star', 'rango')
						,'0.5'	=> esc_html__('0.5 star', 'rango')
						,'1'	=> esc_html__('1 star', 'rango')
						,'1.5'	=> esc_html__('1.5 star', 'rango')
						,'2'	=> esc_html__('2 stars', 'rango')
						,'2.5'	=> esc_html__('2.5 stars', 'rango')
						,'3'	=> esc_html__('3 stars', 'rango')
						,'3.5'	=> esc_html__('3.5 stars', 'rango')
						,'4'	=> esc_html__('4 stars', 'rango')
						,'4.5'	=> esc_html__('4.5 stars', 'rango')
						,'5'	=> esc_html__('5 stars', 'rango')
				)
			);
?>