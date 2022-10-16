<?php
vc_map(
	array(
		'name'                    => esc_html__( 'Penci Advanced Menu', 'soledad' ),
		'base'                    => 'penci_advanced_list',
		'as_parent'               => array( 'only' => 'penci_advanced_list_item' ),
		'content_element'         => true,
		'show_settings_on_create' => true,
		'html_template'           => get_template_directory() . '/inc/js_composer/shortcodes/advanced_list/frontend.php',
		'category'                => esc_html__( 'Soledad', 'soledad' ),
		'description'             => esc_html__( 'Create a menu list for your mega menu dropdown', 'soledad' ),
		'icon'                    => get_template_directory_uri() . '/images/vc-icon.png',
		'params'                  => array(
			/**
			 * Link
			 */
			array(
				'type'       => 'heading_title',
				'holder'     => 'div',
				'title'      => esc_html__( 'Link', 'soledad' ),
				'param_name' => 'link_divider',
			),
			array(
				'type'             => 'textfield',
				'holder'           => 'div',
				'heading'          => esc_html__( 'Title', 'soledad' ),
				'param_name'       => 'title',
				'edit_field_class' => 'vc_col-sm-6 vc_column',

			),
			array(
				'type'             => 'vc_link',
				'heading'          => esc_html__( 'Link', 'soledad' ),
				'param_name'       => 'link',
				//'description'             => esc_html__( 'Enter URL if you want this parent menu item to have a link.', 'soledad' ),
				'edit_field_class' => 'vc_col-sm-6 vc_column',
			),
			/**
			 * Label
			 */
			array(
				'type'       => 'heading_title',
				'holder'     => 'div',
				'title'      => esc_html__( 'Label', 'soledad' ),
				'param_name' => 'label_divider',
			),
			array(
				'type'             => 'textfield',
				'heading'          => esc_html__( 'Label text (optional)', 'soledad' ),
				'param_name'       => 'label_text',
				'description'      => esc_html__( 'Write a label for this menu item badge like “Sale”, “Hot”, “New” etc. Leave empty to not add any badges.', 'soledad' ),
				'edit_field_class' => 'vc_col-sm-6 vc_column',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Label color', 'soledad' ),
				'param_name'       => 'label',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
			),
			/**
			 * Image
			 */
			array(
				'type'       => 'heading_title',
				'holder'     => 'div',
				'title'      => esc_html__( 'Image', 'soledad' ),
				'param_name' => 'image_divider',
			),
			array(
				'type'             => 'attach_image',
				'heading'          => esc_html__( 'Image', 'soledad' ),
				'param_name'       => 'image',
				'value'            => '',
				'description'      => esc_html__( 'Select image from media library.', 'soledad' ),
				'edit_field_class' => 'vc_col-sm-6 vc_column',
			),
			array(
				'type'             => 'textfield',
				'heading'          => esc_html__( 'Image size', 'soledad' ),
				'param_name'       => 'image_size',
				'description'      => esc_html__( 'Enter image size. Example: \'thumbnail\', \'medium\', \'large\', \'full\' or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use \'thumbnail\' size.', 'soledad' ),
				'edit_field_class' => 'vc_col-sm-6 vc_column',
			),
			/**
			 * Extra
			 */
			array(
				'type'       => 'heading_title',
				'holder'     => 'div',
				'title'      => esc_html__( 'Extra options', 'soledad' ),
				'param_name' => 'extra_divider',
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra class name', 'soledad' ),
				'param_name'  => 'el_class',
				'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'soledad' ),
			),
		),
		'js_view'                 => 'VcColumnView',
	)
);
