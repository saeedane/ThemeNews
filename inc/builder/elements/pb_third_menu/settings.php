<?php
$third_menu_settings = 'penci_header_pb_third_menu_';
$third_menu_section  = 'penci_header_pb_third_menu_section';
$general_config      = 'penci_builder_mods';
$options             = [];
$options[]           = array(
	'id'          => $third_menu_settings . 'name',
	'default'     => '',
	'transport'   => 'postMessage',
	'sanitize'    => 'penci_sanitize_choices_field',
	'type'        => 'soledad-fw-select',
	
	'label'       => esc_html__( 'Select Menu', 'soledad' ),
	'placeholder' => esc_html__( 'Select an the menu', 'soledad' ),
	'choices'     => penci_builder_menu_list(),
	'description' => sprintf( __( 'Go to the <a href="%s" target="_blank">Menus screen</a> to add new or edit your menus.', 'soledad' ), admin_url( 'nav-menus.php' ) ),
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_header_enable_padding',
	'default'   => 'disable',
	'transport' => 'postMessage',
	'sanitize'  => 'penci_sanitize_choices_field',
	'label'     => 'Enable Padding on Menu Item Level 1',
	
	'type'      => 'soledad-fw-select',
	'choices'   => [
		'disable' => 'No',
		'enable'  => 'Yes',
	]
);
$options[]           = array(
	'id'          => $third_menu_settings . 'penci_header_remove_line_hover',
	'default'     => 'disable',
	'transport'   => 'postMessage',
	'sanitize'    => 'penci_sanitize_choices_field',
	'label'       => 'Hide Lines When Hover on Sub Menu Style 1',
	
	'description' => __( 'You can change the sub menu style via Customize > Logo & Header > Main Bar & Primary Menu > Sub Menu Style', 'soledad' ),
	'type'        => 'soledad-fw-select',
	'choices'     => [
		'disable' => 'No',
		'enable'  => 'Yes',
	]
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_font_for_menu',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'penci_sanitize_choices_field',
	'label'     => 'Custom Font For Primary Menu Items',
	'type'      => 'soledad-fw-select',
	'choices'   => penci_all_fonts()
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_font_weight_menu',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'penci_sanitize_choices_field',
	'label'     => 'Font Weight For Primary Menu Items',
	
	'type'      => 'soledad-fw-select',
	'choices'   => array(
		''        => '',
		'normal'  => 'Normal',
		'bold'    => 'Bold',
		'bolder'  => 'Bolder',
		'lighter' => 'Lighter',
		'100'     => '100',
		'200'     => '200',
		'300'     => '300',
		'400'     => '400',
		'500'     => '500',
		'600'     => '600',
		'700'     => '700',
		'800'     => '800',
		'900'     => '900'
	)
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_menu_uppercase',
	'default'   => 'disable',
	'transport' => 'postMessage',
	'sanitize'  => 'penci_sanitize_choices_field',
	'label'     => 'Turn Off Uppercase on Menu items',
	'type'      => 'soledad-fw-select',
	'choices'   => [
		'disable' => 'No',
		'enable'  => 'Yes',
	]
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_menu_color',
	'default'   => '',
	'type'      => 'soledad-fw-color',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'label'     => 'Menu Items Color',
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_menu_hv_color',
	'default'   => '',
	'type'      => 'soledad-fw-color',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'label'     => 'Menu Items Hover Color',
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_menu_active_color',
	'default'   => '',
	'transport' => 'postMessage',
	'type'      => 'soledad-fw-color',
	'sanitize'  => 'sanitize_hex_color',
	'label'     => 'Menu Items Active Color',
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_menu_line_hv_color',
	'default'   => '',
	'transport' => 'postMessage',
	'type'      => 'soledad-fw-color',
	'sanitize'  => 'sanitize_hex_color',
	'label'     => 'Line Hover Color',
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_menu_bg_color',
	'default'   => '',
	'transport' => 'postMessage',
	'type'      => 'soledad-fw-color',
	'sanitize'  => 'sanitize_hex_color',
	'label'     => 'Menu Items Background Color',
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_menu_bg_hv_color',
	'default'   => '',
	'transport' => 'postMessage',
	'type'      => 'soledad-fw-color',
	'sanitize'  => 'sanitize_hex_color',
	'label'     => 'Menu Items Hover Background Color',
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_submenu_bgcolor',
	'default'   => '',
	'transport' => 'postMessage',
	'type'      => 'soledad-fw-color',
	'sanitize'  => 'sanitize_hex_color',
	'label'     => 'Sub Menu Background Color',
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_submenu_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => 'Sub Menu Items Color',
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_submenu_hv_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => 'Sub Menu Items Hover Color',
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_submenu_activecl',
	'default'   => '',
	'transport' => 'postMessage',
	'type'      => 'soledad-fw-color',
	'sanitize'  => 'sanitize_hex_color',
	'label'     => 'Sub Menu Items Active Color',
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_submenu_bordercolor',
	'default'   => '',
	'transport' => 'postMessage',
	'type'      => 'soledad-fw-color',
	'sanitize'  => 'sanitize_hex_color',
	'label'     => 'Sub Menu Borders Color',
);
$options[]           = array(
	'type'      => 'soledad-fw-color',
	'id'        => $third_menu_settings . 'penci_mega_bg_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'label'     => 'Category Mega Menu Background Color',
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_mega_child_cat_bg_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => 'Category Mega Menu List Child Categories Background Color',
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_mega_post_category_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => 'Mega Menu Post Category Color',
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_mega_post_title_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => 'Category Mega Menu Post Title Color',
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_mega_post_date_color',
	'default'   => '',
	'transport' => 'postMessage',
	'type'      => 'soledad-fw-color',
	'sanitize'  => 'sanitize_hex_color',
	'label'     => 'Category Mega Menu Post Date Color',
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_mega_accent_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => 'Category Mega Menu Accent Color',
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_mega_border_style2',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => 'Borders Color for Category Mega on Menu Style2',
);
$options[]           = array(
	'id'        => $third_menu_settings . 'drop_border_style2',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => 'Dropdown Borders on Hover for Menu Style2',
);
$options[]           = array(
	'id'        => $third_menu_settings . 'penci_section_slogan_heading_1',
	'sanitize'  => 'sanitize_text_field',
	'transport' => 'postMessage',
	'label'     => esc_html__( 'Menu Font Size', 'soledad' ),
	
	'type'      => 'soledad-fw-header',
);
$options[]           = array(
	'id'          => $third_menu_settings . 'penci_line_height_lv1',
	'default'     => '',
	'transport'   => 'postMessage',
	'type'      => 'soledad-fw-size',
	'sanitize'    => 'absint',
	'label' => __( 'Height for Menu Items Level 1', 'soledad' ),
	'ids'    => array(
		'desktop' => $third_menu_settings . 'penci_line_height_lv1',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
);
$options[]           = array(
	'id'          => $third_menu_settings . 'penci_font_size_lv1',
	'default'     => '12',
	'transport'   => 'postMessage',
	'type'      => 'soledad-fw-size',
	'sanitize'    => 'absint',
	'label' => __( 'Font Size for Menu Items Level 1', 'soledad' ),
	'ids'    => array(
		'desktop' => $third_menu_settings . 'penci_font_size_lv1',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
);
$options[]           = array(
	'id'          => $third_menu_settings . 'penci_font_size_drop',
	'default'     => '12',
	'transport'   => 'postMessage',
	'sanitize'    => 'absint',
	'type'      => 'soledad-fw-size',
	'label' => __( 'Font Size for Dropdown Menu Items', 'soledad' ),
	'ids'    => array(
		'desktop' => $third_menu_settings . 'penci_font_size_drop',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
);
$options[]           = array(
	'id'          => $third_menu_settings . 'penci_lv1_item_spacing',
	'default'     => '',
	'transport'   => 'postMessage',
	'type'      => 'soledad-fw-size',
	'sanitize'    => 'absint',
	'label' => __( 'Space Between Menu Items Level 1', 'soledad' ),
	'ids'    => array(
		'desktop' => $third_menu_settings . 'penci_lv1_item_spacing',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
);
$options[]           = array(
	'id'        => $third_menu_settings . 'spacing',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'penci_sanitize_choices_field',
	'type'      => 'soledad-fw-box-model',
	'label'     => __( 'Element Spacing', 'soledad' ),
	'choices'   => array(
		'margin'  => array(
			'margin-top'    => '',
			'margin-right'  => '',
			'margin-bottom' => '',
			'margin-left'   => '',
		),
		'padding' => array(
			'padding-top'    => '',
			'padding-right'  => '',
			'padding-bottom' => '',
			'padding-left'   => '',
		),
	),
);
$options[]           = array(
	'id'        => $third_menu_settings . 'class',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'penci_sanitize_textarea_field',
	'type'      => 'soledad-fw-text',
	'label'     => esc_html__( 'Custom CSS Class', 'soledad' ),
);

return $options;
/*$wp_customize->selective_refresh->add_partial( $third_menu_settings . 'name', array(
	'selector'            => '.pc-wrapbuilder-header-inner',
	'settings'            => [
		'penci_header_pb_third_menu_name',
		//'penci_header_pb_third_menu_style',
		'penci_header_pb_third_menu_penci_header_enable_padding',
		'penci_header_pb_third_menu_penci_header_remove_line_hover',
		//'penci_header_pb_third_menu_penci_font_for_menu',
		//'penci_header_pb_third_menu_penci_font_weight_menu',
		'penci_header_pb_third_menu_penci_menu_uppercase',
		//'penci_header_pb_third_menu_penci_section_slogan_heading',
		//'penci_header_pb_third_menu_penci_menu_color',
		//'penci_header_pb_third_menu_penci_menu_hv_color',
		//'penci_header_pb_third_menu_penci_menu_line_hv_color',
		//'penci_header_pb_third_menu_penci_menu_bg_color',
		//'penci_header_pb_third_menu_penci_menu_bg_hv_color',
		//'penci_header_pb_third_menu_penci_submenu_color',
		//'penci_header_pb_third_menu_penci_submenu_hv_color',
		//'penci_header_pb_third_menu_penci_submenu_bgcolor',
		//'penci_header_pb_third_menu_penci_submenu_bordercolor',
		//'penci_header_pb_third_menu_penci_mega_bg_color',
		//'penci_header_pb_third_menu_penci_mega_child_cat_bg_color',
		//'penci_header_pb_third_menu_penci_mega_post_date_color',
		//'penci_header_pb_third_menu_penci_mega_post_category_color',
		//'penci_header_pb_third_menu_penci_mega_accent_color',
		//'penci_header_pb_third_menu_penci_mega_border_style2',
		//'penci_header_pb_third_menu_penci_section_slogan_heading_1',
		//'penci_header_pb_third_menu_penci_font_size_lv1',
		//'penci_header_pb_third_menu_penci_line_height_lv1',
		//'penci_header_pb_third_menu_penci_font_size_drop',
		//'penci_header_pb_third_menu_penci_lv1_item_spacing',
		//'penci_header_pb_third_menu_spacing',
		'penci_header_pb_third_menu_class',
	],
	'container_inclusive' => true,
	'render_callback'     => function () {
		load_template( PENCI_BUILDER_PATH . '/template/desktop-builder.php' );
	},
	'fallback_refresh'    => false,
) );*/
