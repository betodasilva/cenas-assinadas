<?php 
add_action( 'vc_before_init', 'ftc_integrate_with_vc' );
function ftc_integrate_with_vc() {
	
	if( !function_exists('vc_map') ){
		return;
	}

	/********************** Content Shortcodes ***************************/
	/*** FTC Features ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Feature', 'rango' ),
		'base' 		=> 'ftc_feature',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style', 'rango' )
				,'param_name' 	=> 'style'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Horizontal', 'rango')		=>  'feature-horizontal'
						,esc_html__('Vertical', 'rango')		=>  'image-feature'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Icon class', 'rango' )
				,'param_name' 	=> 'class_icon'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Use FontAwesome. Ex: fa-home', 'rango')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style icon', 'rango' )
				,'param_name' 	=> 'style_icon'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Default', 'rango')		=>  'icon-default'
						,esc_html__('Small', 'rango')			=>  'icon-small'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image Thumbnail', 'rango' )
				,'param_name' 	=> 'img_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'dependency'  	=> array('element' => 'style', 'value' => array('image-feature'))
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image Thumbnail URL', 'rango' )
				,'param_name' 	=> 'img_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'rango')
				,'dependency' 	=> array('element' => 'style', 'value' => array('image-feature'))
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Feature title', 'rango' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textarea'
				,'heading' 		=> esc_html__( 'Short description', 'rango' )
				,'param_name' 	=> 'excerpt'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'rango' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'rango' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('New Window Tab', 'rango')	=>  '_blank'
						,esc_html__('Self', 'rango')			=>  '_self'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Extra class', 'rango' )
				,'param_name' 	=> 'extra_class'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Ex: feature-icon-blue, feature-icon-orange, feature-icon-green', 'rango')
			)
		)
	) );
	
	/*** FTC Blogs ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Blogs', 'rango' ),
		'base' 		=> 'ftc_blogs',
		'base' 		=> 'ftc_blogs',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'rango' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Layout', 'rango' )
				,'param_name' 	=> 'layout'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Grid', 'rango')		=> 'grid'
							,esc_html__('Slider', 'rango')	=> 'slider'
							,esc_html__('Masonry', 'rango')	=> 'masonry'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Columns', 'rango' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'1'				=> '1'
							,'2'			=> '2'
							,'3'			=> '3'
							,'4'			=> '4'
							)
				,'description' 	=> esc_html__( 'Number of Columns', 'rango' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'rango' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Posts', 'rango' )
			)
			,array(
				'type' 			=> 'ftc_category'
				,'heading' 		=> esc_html__( 'Categories', 'rango' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'post_cat'
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'rango' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'rango')		=> 'none'
						,esc_html__('ID', 'rango')		=> 'ID'
						,esc_html__('Date', 'rango')		=> 'date'
						,esc_html__('Name', 'rango')		=> 'name'
						,esc_html__('Title', 'rango')		=> 'title'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'rango' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'rango')		=> 'DESC'
						,esc_html__('Ascending', 'rango')		=> 'ASC'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show post title', 'rango' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show thumbnail', 'rango' )
				,'param_name' 	=> 'show_thumbnail'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show author', 'rango' )
				,'param_name' 	=> 'show_author'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'rango')	=> 0
							,esc_html__('Yes', 'rango')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show comment', 'rango' )
				,'param_name' 	=> 'show_comment'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show date', 'rango' )
				,'param_name' 	=> 'show_date'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show post excerpt', 'rango' )
				,'param_name' 	=> 'show_excerpt'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show count view', 'rango' )
				,'param_name' 	=> 'show_view'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show read more button', 'rango' )
				,'param_name' 	=> 'show_readmore'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of words in excerpt', 'rango' )
				,'param_name' 	=> 'excerpt_words'
				,'admin_label' 	=> false
				,'value' 		=> '16'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show load more button', 'rango' )
				,'param_name' 	=> 'show_load_more'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'rango')	=> 0
							,esc_html__('Yes', 'rango')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Load more button text', 'rango' )
				,'param_name' 	=> 'load_more_text'
				,'admin_label' 	=> false
				,'value' 		=> 'Show more'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'rango' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show dots button', 'rango' )
				,'param_name' 	=> 'dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'rango')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'rango' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'rango')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'rango' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '30'
				,'description' 	=> esc_html__('Set margin between items', 'rango')
				,'group'		=> esc_html__('Slider Options', 'rango')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'rango' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'rango' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'rango' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'rango' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'rango' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
		)
	) );

	/*** FTC Button ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Button', 'rango' ),
		'base' 		=> 'ftc_button',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Text', 'rango' )
				,'param_name' 	=> 'content'
				,'admin_label' 	=> true
				,'value' 		=> 'Button text'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'rango' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Text color', 'rango' )
				,'param_name' 	=> 'text_color'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Text color hover', 'rango' )
				,'param_name' 	=> 'text_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background color', 'rango' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#40bea7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background color hover', 'rango' )
				,'param_name' 	=> 'bg_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#3f3f3f'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Border color', 'rango' )
				,'param_name' 	=> 'border_color'
				,'admin_label' 	=> false
				,'value' 		=> '#e8e8e8'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Border color hover', 'rango' )
				,'param_name' 	=> 'border_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#40bea7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Border width', 'rango' )
				,'param_name' 	=> 'border_width'
				,'admin_label' 	=> false
				,'value' 		=> '0'
				,'description' 	=> esc_html__('In pixels. Ex: 1', 'rango')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'rango' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Self', 'rango')				=> '_self'
						,esc_html__('New Window Tab', 'rango')	=> '_blank'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Size', 'rango' )
				,'param_name' 	=> 'size'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Small', 'rango')		=> 'small'
						,esc_html__('Medium', 'rango')	=> 'medium'
						,esc_html__('Large', 'rango')		=> 'large'
						,esc_html__('X-Large', 'rango')	=> 'x-large'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'iconpicker'
				,'heading' 		=> esc_html__( 'Font icon', 'rango' )
				,'param_name' 	=> 'font_icon'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'settings' 	=> array(
					'emptyIcon' 	=> true /* default true, display an "EMPTY" icon? */
					,'iconsPerPage' => 4000 /* default 100, how many icons per/page to display */
				)
				,'description' 	=> esc_html__('Add an icon before the text. Ex: fa-lock', 'rango')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show popup', 'rango' )
				,'param_name' 	=> 'popup'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('No', 'rango')	=> 0
							,esc_html__('Yes', 'rango')	=> 1
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Popup Options', 'rango')
			)
			,array(
				'type' 			=> 'textarea_raw_html'
				,'heading' 		=> esc_html__( 'Popup content', 'rango' )
				,'param_name' 	=> 'popup_content'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
				,'group'		=> esc_html__('Popup Options', 'rango')
			)
		)
	) );

	/*** FTC Image Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Image Slider', 'rango' ),
		'base' 		=> 'ftc_image_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image Slider 1', 'rango' )
				,'param_name' 	=> 'img_1'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> 'Set image slider 1'
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image Slider 2', 'rango' )
				,'param_name' 	=> 'img_2'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> 'Set image slider 2'
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image Slider 3', 'rango' )
				,'param_name' 	=> 'img_3'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> 'Set image slider 3'
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Image 1', 'rango' )
				,'param_name' 	=> 'link_1'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)			
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title Image 1', 'rango' )
				,'param_name' 	=> 'link_title_1'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link_image_2', 'rango' )
				,'param_name' 	=> 'link_2'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)						
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title Image 2', 'rango' )
				,'param_name' 	=> 'link_title_2'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link_image_3', 'rango' )
				,'param_name' 	=> 'link_3'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)						
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title Image 3', 'rango' )
				,'param_name' 	=> 'link_title_3'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'rango' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('New Window Tab', 'rango')		=> '_blank'
						,esc_html__('Self', 'rango')				=> '_self'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image Size', 'rango' )
				,'param_name' 	=> 'img_size'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Ex: thumbnail, medium, large or full', 'rango' )
			)
			
		)
	) );
	
	/*** FTC Single Image ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Single Image', 'rango' ),
		'base' 		=> 'ftc_single_image',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image', 'rango' )
				,'param_name' 	=> 'img_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image Size', 'rango' )
				,'param_name' 	=> 'img_size'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Ex: thumbnail, medium, large or full', 'rango' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image URL', 'rango' )
				,'param_name' 	=> 'img_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'rango')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'rango' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title', 'rango' )
				,'param_name' 	=> 'link_title'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Hover Effect', 'rango' )
				,'param_name' 	=> 'style_smooth'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Effect-Image Left Right', 'rango')		=> 'smooth-image'
						,esc_html__('Effect Border Image', 'rango')				=> 'smooth-border-image'
						,esc_html__('Effect Background Image', 'rango')		=> 'smooth-background-image'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'rango' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('New Window Tab', 'rango')		=> '_blank'
						,esc_html__('Self', 'rango')				=> '_self'
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC Heading ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Heading', 'rango' ),
		'base' 		=> 'ftc_heading',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Heading style', 'rango' )
				,'param_name' 	=> 'style'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Style 1', 'rango')		=> 'style-1'
						,esc_html__('Style 2', 'rango')		=> 'style-2'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Heading Size', 'rango' )
				,'param_name' 	=> 'size'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'1'				=> '1'
						,'2'			=> '2'
						,'3'			=> '3'
						,'4'			=> '4'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Text', 'rango' )
				,'param_name' 	=> 'text'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC Banner ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Banner', 'rango' ),
		'base' 		=> 'ftc_banner',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Background Image', 'rango' )
				,'param_name' 	=> 'bg_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Background Url', 'rango' )
				,'param_name' 	=> 'bg_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'rango')
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background Color', 'rango' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textarea_html'
				,'heading' 		=> esc_html__( 'Banner content', 'rango' )
				,'param_name' 	=> 'content'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Position Banner Content', 'rango' )
				,'param_name' 	=> 'position_content'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Left Top', 'rango')			=>  'left-top'
						,esc_html__('Left Bottom', 'rango')		=>  'left-bottom'
						,esc_html__('Left Center', 'rango')		=>  'left-center'
						,esc_html__('Right Top', 'rango')			=>  'right-top'
						,esc_html__('Right Bottom', 'rango')		=>  'right-bottom'
						,esc_html__('Right Center', 'rango')		=>  'right-center'
						,esc_html__('Center Top', 'rango')		=>  'center-top'
						,esc_html__('Center Bottom', 'rango')		=>  'center-bottom'
						,esc_html__('Center Center', 'rango')		=>  'center-center'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'rango' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title', 'rango' )
				,'param_name' 	=> 'link_title'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style Effect', 'rango' )
				,'param_name' 	=> 'style_smooth'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Background Scale', 'rango')						=>  'ftc-smooth'
						,esc_html__('Background Scale Opacity', 'rango')				=>  'ftc-smooth-opacity'
						,esc_html__('Background Scale Dark', 'rango')					=>	'ftc-smooth-dark'
						,esc_html__('Background Scale and Line', 'rango')				=>  'ftc-smooth-and-line'
						,esc_html__('Background Scale Opacity and Line', 'rango')		=>  'ftc-smooth-opacity-line'
						,esc_html__('Background Scale Dark and Line', 'rango')		=>  'ftc-smooth-dark-line'
						,esc_html__('Background Opacity and Line', 'rango')			=>	'background-opacity-and-line'
						,esc_html__('Background Dark and Line', 'rango')				=>	'background-dark-and-line'
						,esc_html__('Background Opacity', 'rango')					=>	'background-opacity'
						,esc_html__('Background Dark', 'rango')						=>	'background-dark'
						,esc_html__('Line', 'rango')									=>	'eff-line'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Background Opacity On Device', 'rango' )
				,'param_name' 	=> 'opacity_bg_device'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('No', 'rango')			=>  0
						,esc_html__('Yes', 'rango')		=>  1
						)
				,'description' 	=> esc_html__('Background image will be blurred on device. Note: should set background color ', 'rango')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Responsive size', 'rango' )
				,'param_name' 	=> 'responsive_size'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Yes', 'rango')		=>  1
						,esc_html__('No', 'rango')		=>  0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'rango' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('New Window Tab', 'rango')	=>  '_blank'
						,esc_html__('Self', 'rango')			=>  '_self'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Extra Class', 'rango' )
				,'param_name' 	=> 'extra_class'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> esc_html__('Ex: rp-rectangle-full, rp-rectangle', 'rango')
			)
		)
	) );
	
	/* FTC Testimonial */
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Testimonial', 'rango' ),
		'base' 		=> 'ftc_testimonial',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'ftc_category'
				,'heading' 		=> esc_html__( 'Categories', 'rango' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'ftc_testimonial'
			)
			,array(
				'type' 			=> 'textarea'
				,'heading' 		=> esc_html__( 'Testimonial IDs', 'rango' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('A comma separated list of testimonial ids', 'rango')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show Avatar', 'rango' )
				,'param_name' 	=> 'show_avatar'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'rango' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> '4'
				,'description' 	=> esc_html__('Number of Posts', 'rango')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of words in excerpt', 'rango' )
				,'param_name' 	=> 'excerpt_words'
				,'admin_label' 	=> true
				,'value' 		=> '50'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'rango' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Default', 'rango')	=> 'text-default'
							,esc_html__('Light', 'rango')		=> 'text-light'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'rango' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'rango')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'rango' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> '1'
				,'group'		=> esc_html__('Slider Options', 'rango')
			)
                    ,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'rango' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> true
				,'value' 		=> '30'
				,'group'		=> esc_html__('Slider Options', 'rango')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'rango' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'rango')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show pagination dots', 'rango' )
				,'param_name' 	=> 'show_dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'rango')	=> 0
							,esc_html__('Yes', 'rango')	=> 1
						)
				,'description' 	=> esc_html__('If it is set, the navigation buttons will be removed', 'rango')
				,'group'		=> esc_html__('Slider Options', 'rango')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'rango' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'rango')
			)
		)
	) );
	
	/*** FTC Brands Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Brands Slider', 'rango' ),
		'base' 		=> 'ftc_brands_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'rango' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style Brand', 'rango' )
				,'param_name' 	=> 'style_brand'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Default', 'rango')	=> 'style-default'
							,esc_html__('Light', 'rango')		=> 'style-light'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'rango' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> '7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'rango' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'rango' )
			)
			,array(
				'type' 			=> 'ftc_category'
				,'heading' 		=> esc_html__( 'Categories', 'rango' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'ftc_brand'
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'rango' )
				,'param_name' 	=> 'margin_image'
				,'admin_label' 	=> false
				,'value' 		=> '32'
				,'description' 	=> esc_html__('Set margin between items', 'rango')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Activate link', 'rango' )
				,'param_name' 	=> 'active_link'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'rango' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'rango' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)

			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'rango' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    ,esc_html__('5', 'rango')	=> 5
                                     ,esc_html__('6', 'rango')	=> 6
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'rango' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'rango' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'rango' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'rango' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
		)
	) );
	
	
	/*** FTC Google Map ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Google Map', 'rango' ),
		'base' 		=> 'ftc_google_map',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Address', 'rango' )
				,'param_name' 	=> 'address'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('You have to input your API Key in Appearance > Theme Options > General tab', 'rango')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Height', 'rango' )
				,'param_name' 	=> 'height'
				,'admin_label' 	=> true
				,'value' 		=> 360
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Zoom', 'rango' )
				,'param_name' 	=> 'zoom'
				,'admin_label' 	=> true
				,'value' 		=> 12
				,'description' 	=> esc_html__('Input a number between 0 and 22', 'rango')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Map Type', 'rango' )
				,'param_name' 	=> 'map_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
								esc_html__('ROADMAP', 'rango')		=> 'ROADMAP'
								,esc_html__('SATELLITE', 'rango')		=> 'SATELLITE'
								,esc_html__('HYBRID', 'rango')		=> 'HYBRID'
								,esc_html__('TERRAIN', 'rango')		=> 'TERRAIN'
							)
				,'description' 	=> ''
			)
		)
	) );
        
	/*** FTC Countdown ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Countdown', 'rango' ),
		'base' 		=> 'ftc_countdown',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Day', 'rango' )
				,'param_name' 	=> 'day'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Month', 'rango' )
				,'param_name' 	=> 'month'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Year', 'rango' )
				,'param_name' 	=> 'year'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'rango' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Default', 'rango')	=> 'text-default'
							,esc_html__('Light', 'rango')		=> 'text-light'
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC Feedburner Subscription ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Feedburner Subscription', 'rango' ),
		'base' 		=> 'ftc_feedburner_subscription',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Feedburner ID', 'rango' )
				,'param_name' 	=> 'feedburner_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Title', 'rango' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> 'Newsletter'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Intro Text Line 1', 'rango' )
				,'param_name' 	=> 'intro_text'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Button Text', 'rango' )
				,'param_name' 	=> 'button_text'
				,'admin_label' 	=> true
				,'value' 		=> 'Subscribe'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Placeholder Text', 'rango' )
				,'param_name' 	=> 'placeholder_text'
				,'admin_label' 	=> true
				,'value' 		=> 'Enter your email address'
				,'description' 	=> ''
			)
		)
	) );

	/********************** FTC Product Shortcodes ************************/

	/*** FTC Products ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Products', 'rango' ),
		'base' 		=> 'ftc_products',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'rango' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'rango' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'rango')		=> 'recent'
						,esc_html__('Sale', 'rango')		=> 'sale'
						,esc_html__('Featured', 'rango')	=> 'featured'
						,esc_html__('Best Selling', 'rango')	=> 'best_selling'
						,esc_html__('Top Rated', 'rango')	=> 'top_rated'
						,esc_html__('Mixed Order', 'rango')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'rango' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Custom order', 'rango' )
				,'param_name' 	=> 'custom_order'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'rango')			=> 0
						,esc_html__('Yes', 'rango')		=> 1
						)
				,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'rango' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'rango' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'rango')				=> 'none'
						,esc_html__('ID', 'rango')				=> 'ID'
						,esc_html__('Date', 'rango')				=> 'date'
						,esc_html__('Name', 'rango')				=> 'name'
						,esc_html__('Title', 'rango')				=> 'title'
						,esc_html__('Comment count', 'rango')		=> 'comment_count'
						,esc_html__('Random', 'rango')			=> 'rand'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'rango' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'rango')		=> 'DESC'
						,esc_html__('Ascending', 'rango')		=> 'ASC'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'rango' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Columns', 'rango' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'rango' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Products', 'rango' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'rango' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product IDs', 'rango' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Enter product name or slug to search', 'rango')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Meta position', 'rango' )
				,'param_name' 	=> 'meta_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom', 'rango')			=> 'bottom'
							,esc_html__('On Thumbnail', 'rango')	=> 'on-thumbnail'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'rango' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'rango' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'rango' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'rango')	=> 0
							,esc_html__('Yes', 'rango')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'rango' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'rango' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'rango')	=> 0
							,esc_html__('Yes', 'rango')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'rango' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'rango' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'rango' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'rango')	=> 0
							,esc_html__('Yes', 'rango')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'rango' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
		)
	) );

	/*** FTC Products Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Products Slider', 'rango' ),
		'base' 		=> 'ftc_products_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'rango' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'rango' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'rango')		=> 'recent'
						,esc_html__('Sale', 'rango')		=> 'sale'
						,esc_html__('Featured', 'rango')	=> 'featured'
						,esc_html__('Best Selling', 'rango')	=> 'best_selling'
						,esc_html__('Top Rated', 'rango')	=> 'top_rated'
						,esc_html__('Mixed Order', 'rango')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'rango' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Custom order', 'rango' )
				,'param_name' 	=> 'custom_order'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'rango')			=> 0
						,esc_html__('Yes', 'rango')		=> 1
						)
				,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'rango' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'rango' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'rango')				=> 'none'
						,esc_html__('ID', 'rango')				=> 'ID'
						,esc_html__('Date', 'rango')				=> 'date'
						,esc_html__('Name', 'rango')				=> 'name'
						,esc_html__('Title', 'rango')				=> 'title'
						,esc_html__('Comment count', 'rango')		=> 'comment_count'
						,esc_html__('Random', 'rango')			=> 'rand'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'rango' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'rango')		=> 'DESC'
						,esc_html__('Ascending', 'rango')		=> 'ASC'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'rango' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Columns', 'rango' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'rango' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'rango' )
			)                    
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'rango' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'rango' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'rango' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Meta position', 'rango' )
				,'param_name' 	=> 'meta_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom', 'rango')			=> 'bottom'
							,esc_html__('On Thumbnail', 'rango')	=> 'on-thumbnail'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'rango' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'rango' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'rango' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'rango')		=> 0
							,esc_html__('Yes', 'rango')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'rango' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'rango' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'rango')		=> 0
							,esc_html__('Yes', 'rango')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'rango' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'rango' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'rango' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'rango')		=> 0
							,esc_html__('Yes', 'rango')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'rango' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'rango' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show dots button', 'rango' )
				,'param_name' 	=> 'dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Position navigation button', 'rango' )
				,'param_name' 	=> 'position_nav'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Top', 'rango')		=> 'nav-top'
							,esc_html__('Bottom', 'rango')	=> 'nav-bottom'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'rango' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '20'
				,'description' 	=> esc_html__('Set margin between items', 'rango')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'rango' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'rango' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'rango' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'rango' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'rango' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
		)
	) );
	
	/*** FTC Products Widget ***/
	vc_map( array(
		'name' 			=> esc_html__( 'FTC Products Widget', 'rango' ),
		'base' 			=> 'ftc_products_widget',
		'class' 		=> '',
		'description' 	=> '',
		'category' 		=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 		=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'rango' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'rango' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'rango')		=> 'recent'
						,esc_html__('Sale', 'rango')		=> 'sale'
						,esc_html__('Featured', 'rango')	=> 'featured'
						,esc_html__('Best Selling', 'rango')	=> 'best_selling'
						,esc_html__('Top Rated', 'rango')	=> 'top_rated'
						,esc_html__('Mixed Order', 'rango')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'rango' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'rango' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'rango' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'rango' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'rango' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Thumbnail size', 'rango' )
				,'param_name' 	=> 'thumbnail_size'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('shop_thumbnail', 'rango')		=> 'Product Thumbnails'
						,esc_html__('shop_catalog', 'rango')		=> 'Catalog Images'
						,esc_html__('shop_single', 'rango')	=> 'Single Product Image'
						)
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'rango' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'rango' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'rango' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'rango' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'rango')	=> 0
							,esc_html__('Yes', 'rango')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'rango' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('No', 'rango')	=> 0
							,esc_html__('Yes', 'rango')	=> 1
							)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'rango')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Row', 'rango' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> false
				,'value' 		=> 3
				,'description' 	=> esc_html__( 'Number of Rows for slider', 'rango' )
				,'group'		=> esc_html__('Slider Options', 'rango')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'rango' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'rango')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'rango' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'rango')
			)
		)
	) );
	
	/*** FTC Product Deals Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Product Deals Slider', 'rango' ),
		'base' 		=> 'ftc_product_deals_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'rango' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'rango' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'rango')		=> 'recent'
						,esc_html__('Featured', 'rango')	=> 'featured'
						,esc_html__('Best Selling', 'rango')	=> 'best_selling'
						,esc_html__('Top Rated', 'rango')	=> 'top_rated'
						,esc_html__('Mixed Order', 'rango')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'rango' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Item Layout', 'rango' )
				,'param_name' 	=> 'layout'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Grid', 'rango')		=> 'grid'
							,esc_html__('List', 'rango')		=> 'list'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'rango' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> false
				,'value' 		=> 4
				,'description' 	=> esc_html__( 'Number of Columns', 'rango' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'rango' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Products', 'rango' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'rango' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show counter', 'rango' )
				,'param_name' 	=> 'show_counter'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Counter position', 'rango' )
				,'param_name' 	=> 'counter_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom', 'rango')			=> 'bottom'
							,esc_html__('On thumbnail', 'rango')	=> 'on-thumbnail'
							)
				,'description' 	=> ''
				,'dependency' 	=> array('element' => 'show_counter', 'value' => array('1'))
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'rango' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show gallery list', 'rango' )
				,'param_name' 	=> 'show_gallery'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Gallery position', 'rango' )
				,'param_name' 	=> 'gallery_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom out line', 'rango')	=> 'bottom-out'
							,esc_html__('Bottom in line', 'rango')	=> 'bottom-in'
							)
				,'description' 	=> ''
				,'dependency' 	=> array('element' => 'show_counter', 'value' => array('1'))
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'rango' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'rango' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'rango')		=> 0
							,esc_html__('Yes', 'rango')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'rango' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'rango' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'rango')		=> 0
							,esc_html__('Yes', 'rango')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'rango' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'rango' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'rango' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'rango')		=> 0
							,esc_html__('Yes', 'rango')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'rango' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'rango' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show dots button', 'rango' )
				,'param_name' 	=> 'dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'rango' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'rango' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '20'
				,'description' 	=> esc_html__('Set margin between items', 'rango')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'rango' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'rango' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'rango' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'rango' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'rango' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
		)
	) );
	
	/*** FTC Product Categories Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Product Categories Slider', 'rango' ),
		'base' 		=> 'ftc_product_categories_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'rango' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'rango' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 4
				,'description' 	=> esc_html__( 'Number of Columns', 'rango' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'rango' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'rango' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'rango' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Product Categories', 'rango' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Parent', 'rango' )
				,'param_name' 	=> 'parent'
				,'admin_label' 	=> true
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Select a category. Get direct children of this category', 'rango' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Child Of', 'rango' )
				,'param_name' 	=> 'child_of'
				,'admin_label' 	=> true
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Select a category. Get all descendents of this category', 'rango' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'rango' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Include these categories', 'rango')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Hide empty product categories', 'rango' )
				,'param_name' 	=> 'hide_empty'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product category title', 'rango' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
                         ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product category discription', 'rango' )
				,'param_name' 	=> 'show_discription'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'rango' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show dots button', 'rango' )
				,'param_name' 	=> 'dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'rango' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'rango' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '0'
				,'description' 	=> esc_html__('Set margin between items', 'rango')
			)
			                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'rango' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'rango' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'rango' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'rango' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'rango' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'rango')	=> 1
							,esc_html__('2', 'rango')	=> 2
                                                        ,esc_html__('3', 'rango')	=> 3
                                                        ,esc_html__('4', 'rango')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'rango')
				,'group'		=> esc_html__('Responsive Options', 'rango')
			)
		)
	) );
	
	
	/*** FTC Products In Category Tabs***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Products Category Tabs', 'rango' ),
		'base' 		=> 'ftc_products_category_tabs',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'rango' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'rango')		=> 'recent'
						,esc_html__('Sale', 'rango')		=> 'sale'
						,esc_html__('Featured', 'rango')	=> 'featured'
						,esc_html__('Best Selling', 'rango')	=> 'best_selling'
						,esc_html__('Top Rated', 'rango')	=> 'top_rated'
						,esc_html__('Mixed Order', 'rango')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'rango' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Custom order', 'rango' )
				,'param_name' 	=> 'custom_order'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'rango')			=> 0
						,esc_html__('Yes', 'rango')		=> 1
						)
				,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'rango' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'rango' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'rango')				=> 'none'
						,esc_html__('ID', 'rango')				=> 'ID'
						,esc_html__('Date', 'rango')				=> 'date'
						,esc_html__('Name', 'rango')				=> 'name'
						,esc_html__('Title', 'rango')				=> 'title'
						,esc_html__('Comment count', 'rango')		=> 'comment_count'
						,esc_html__('Random', 'rango')			=> 'rand'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'rango' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'rango')		=> 'DESC'
						,esc_html__('Ascending', 'rango')		=> 'ASC'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background Color', 'rango' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#f7f6f4'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'rango' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 3
				,'description' 	=> esc_html__( 'Number of Columns', 'rango' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'rango' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'rango' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'rango' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__( 'You select banners, icons in the Product Category editor', 'rango' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Parent Category', 'rango' )
				,'param_name' 	=> 'parent_cat'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> false
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Each tab will be a sub category of this category. This option is available when the Product Categories option is empty', 'rango')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Include children', 'rango' )
				,'param_name' 	=> 'include_children'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'rango')			=> 0
						,esc_html__('Yes', 'rango')		=> 1
						)
				,'description' 	=> esc_html__( 'Load the products of sub categories in each tab', 'rango' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Active tab', 'rango' )
				,'param_name' 	=> 'active_tab'
				,'admin_label' 	=> false
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Enter active tab number', 'rango' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'rango' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'rango' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'rango' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'rango')		=> 0
							,esc_html__('Yes', 'rango')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'rango' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'rango' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'rango')		=> 0
							,esc_html__('Yes', 'rango')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'rango' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'rango' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'rango' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'rango')		=> 0
							,esc_html__('Yes', 'rango')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'rango' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show counter', 'rango' )
				,'param_name' 	=> 'show_counter'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'rango' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('No', 'rango')		=> 0
							,esc_html__('Yes', 'rango')	=> 1
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Rows', 'rango' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'1'			=> '1'
						,'2'		=> '2'
						)
				,'description' 	=> esc_html__( 'Number of Rows in slider', 'rango' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'rango' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'rango')		=> 0
							,esc_html__('Yes', 'rango')	=> 1
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'rango' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC List Of Product Categories ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC List Of Product Categories', 'rango' ),
		'base' 		=> 'ftc_list_of_product_categories',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'rango' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Background image', 'rango' )
				,'param_name' 	=> 'bg_image'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
                        ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Hover Image Effect', 'rango' )
				,'param_name' 	=> 'style_smooth'
				,'admin_label' 	=> false
				,'value' 		=> array(
                                                 esc_html__('No Effect', 'rango')		=> 'no-smooth'
						,esc_html__('Effect-Image Left Right', 'rango')		=> 'smooth-image'
						,esc_html__('Effect Border Image', 'rango')				=> 'smooth-border-image'
						,esc_html__('Effect Background Image', 'rango')		=> 'smooth-background-image'
						,esc_html__('Effect Background Top Image', 'rango')	=> 'smooth-top-image'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Category', 'rango' )
				,'param_name' 	=> 'product_cat'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> false
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Display sub categories of this category', 'rango')
			)
			,array(
    'type'    => 'dropdown'
    ,'heading'   => esc_html__( 'Show Description Category', 'rango' )
    ,'param_name'  => 'description'
    ,'admin_label'  => false
    ,'value'   => array(
       esc_html__('Yes', 'rango') => 1
       ,esc_html__('No', 'rango') => 0
      )
    ,'description'  => ''
   )
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Note', 'rango' )
				,'param_name' 	=> 'note'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Include parent category in list', 'rango' )
				,'param_name' 	=> 'include_parent'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'rango')	=> 1
							,esc_html__('No', 'rango')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of Sub Categories', 'rango' )
				,'param_name' 	=> 'limit_sub_cat'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Leave blank to show all', 'rango' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Include these categories', 'rango' )
				,'param_name' 	=> 'include_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('If you set the Product Category option above, this option wont be available', 'rango')
			)
		)
	) );
        
          
        /*** FTC Milestone ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Milestone', 'rango' ),
		'base' 		=> 'ftc_milestone',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number', 'rango' )
				,'param_name' 	=> 'number'
				,'admin_label' 	=> true
				,'value' 		=> '0'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Subject', 'rango' )
				,'param_name' 	=> 'ftc_number_meta'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'rango' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Default', 'rango')	=> 'text-default'
							,esc_html__('Light', 'rango')		=> 'text-light'
						)
				,'description' 	=> ''
			)
		)
	) );
	
}

/*** Add Shortcode Param ***/
WpbakeryShortcodeParams::addField('ftc_category', 'ftc_product_catgories_shortcode_param');
if( !function_exists('ftc_product_catgories_shortcode_param') ){
	function ftc_product_catgories_shortcode_param($settings, $value){
		$categories = ftc_get_list_categories_shortcode_param(0, $settings);
		$arr_value = explode(',', $value);
		ob_start();
		?>
		<input type="hidden" class="wpb_vc_param_value wpb-textinput product_cats textfield ftc-hidden-selected-categories" name="<?php echo esc_attr($settings['param_name']); ?>" value="<?php echo esc_attr($value); ?>" />
		<div class="categorydiv">
			<div class="tabs-panel">
				<ul class="categorychecklist">
					<?php foreach($categories as $cat){ ?>
					<li>
						<label>
							<input type="checkbox" class="checkbox ftc-select-category" value="<?php echo esc_attr($cat->term_id); ?>" <?php echo (in_array($cat->term_id, $arr_value))?'checked':''; ?> />
							<?php echo esc_html($cat->name); ?>
						</label>
						<?php ftc_get_list_sub_categories_shortcode_param($cat->term_id, $arr_value, $settings); ?>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<script type="text/javascript">
			jQuery('.ftc-select-category').bind('change', function(){
				"use strict";
				
				var selected = jQuery('.ftc-select-category:checked');
				jQuery('.ftc-hidden-selected-categories').val('');
				var selected_id = new Array();
				selected.each(function(index, ele){
					selected_id.push(jQuery(ele).val());
				});
				selected_id = selected_id.join(',');
				jQuery('.ftc-hidden-selected-categories').val(selected_id);
			});
		</script>
		<?php
		return ob_get_clean();
	}
}

if( !function_exists('ftc_get_list_categories_shortcode_param') ){
	function ftc_get_list_categories_shortcode_param( $cat_parent_id, $settings ){
		$taxonomy = 'product_cat';
		if( isset($settings['class']) ){
			if( $settings['class'] == 'post_cat' ){
				$taxonomy = 'category';
			}
			if( $settings['class'] == 'ftc_testimonial' ){
				$taxonomy = 'ftc_testimonial_cat';
			}
			if( $settings['class'] == 'ftc_portfolio' ){
				$taxonomy = 'ftc_portfolio_cat';
			}
			if( $settings['class'] == 'ftc_brand' ){
				$taxonomy = 'ftc_brand_cat';
			}
		}
		
		$args = array(
				'taxonomy' 			=> $taxonomy
				,'hierarchical'		=> 1
				,'hide_empty'		=> 0
				,'parent'			=> $cat_parent_id
				,'title_li'			=> ''
				,'child_of'			=> 0
			);
		$cats = get_categories($args);
		return $cats;
	}
}

if( !function_exists('ftc_get_list_sub_categories_shortcode_param') ){
	function ftc_get_list_sub_categories_shortcode_param( $cat_parent_id, $arr_value, $settings ){
		$sub_categories = ftc_get_list_categories_shortcode_param($cat_parent_id, $settings); 
		if( count($sub_categories) > 0){
		?>
			<ul class="children">
				<?php foreach( $sub_categories as $sub_cat ){ ?>
					<li>
						<label>
							<input type="checkbox" class="checkbox ftc-select-category" value="<?php echo esc_attr($sub_cat->term_id); ?>" <?php echo (in_array($sub_cat->term_id, $arr_value))?'checked':''; ?> />
							<?php echo esc_html($sub_cat->name); ?>
						</label>
						<?php ftc_get_list_sub_categories_shortcode_param($sub_cat->term_id, $arr_value, $settings); ?>
					</li>
				<?php } ?>
			</ul>
		<?php }
	}
}

if( class_exists('Vc_Vendor_Woocommerce') ){
	$vc_woo_vendor = new Vc_Vendor_Woocommerce();

	/* autocomplete callback */
	add_filter( 'vc_autocomplete_ftc_products_ids_callback', array($vc_woo_vendor, 'productIdAutocompleteSuggester') );
	add_filter( 'vc_autocomplete_ftc_products_ids_render', array($vc_woo_vendor, 'productIdAutocompleteRender') );
	
	
	$shortcode_field_cats = array();
	$shortcode_field_cats[] = array('ftc_products', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_slider', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_widget', 'product_cats');
	$shortcode_field_cats[] = array('ftc_product_deals_slider', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_category_tabs', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_category_tabs', 'parent_cat');
	$shortcode_field_cats[] = array('ftc_list_of_product_categories', 'product_cat');
	$shortcode_field_cats[] = array('ftc_list_of_product_categories', 'include_cats');
	$shortcode_field_cats[] = array('ftc_product_categories_slider', 'parent');
	$shortcode_field_cats[] = array('ftc_product_categories_slider', 'child_of');
	$shortcode_field_cats[] = array('ftc_product_categories_slider', 'ids');
		
	foreach( $shortcode_field_cats as $shortcode_field ){
		add_filter( 'vc_autocomplete_'.$shortcode_field[0].'_'.$shortcode_field[1].'_callback', array($vc_woo_vendor, 'productCategoryCategoryAutocompleteSuggester') );
		add_filter( 'vc_autocomplete_'.$shortcode_field[0].'_'.$shortcode_field[1].'_render', array($vc_woo_vendor, 'productCategoryCategoryRenderByIdExact') );
	}
}
?>