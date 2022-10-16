<?php
/* Add Sections */
$wp_customize->add_section( 'penci_section_sidebar_general', array(
	'title'    => esc_html__( 'General', 'soledad' ),
	'priority' => 1,
	'description'      => __( 'Please check <a target="_blank" href="https://imgresources.s3.amazonaws.com/widget-heading-title.png">this image</a> to know what is "Sidebar Widget Heading"', 'soledad' ),
	'panel'      => 'penci_sidebar_panel'
) );

$wp_customize->add_section( 'penci_section_sidebar_fsize', array(
	'title'    => esc_html__( 'Font Size', 'soledad' ),
	'priority' => 1,
	'panel'    => 'penci_sidebar_panel'
) );

$wp_customize->add_section( 'penci_section_sidebar_colors', array(
	'title'    => esc_html__( 'Colors', 'soledad' ),
	'priority' => 1,
	'panel'    => 'penci_sidebar_panel'
) );

/* General */
$wp_customize->add_setting( 'penci_sidebar_style', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_sidebar_style', array(
	'label'    => 'Select Sidebar Style',
	'section'  => 'penci_section_sidebar_general',
	'settings' => 'penci_sidebar_style',
	'type'     => 'select',
	'choices'  => array(
		''                  => 'Default',
		'pcsb-boxed-whole'  => 'Boxed Whole Sidebar',
		'pcsb-boxed-widget' => 'Boxed Widgets on Sidebar',
	)
) ) );

$wp_customize->add_setting( 'penci_sidebar_disable_phtml', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_sidebar_disable_phtml', array(
	'label'       => 'Disable Boxed on "Custom HTML" widget?',
	'section'     => 'penci_section_sidebar_general',
	'settings'    => 'penci_sidebar_disable_phtml',
	'description' => __( 'This option just applies on "Custom HTML" widget & you\'ve selected sidebar style is "Boxed Widgets"', 'soledad' ),
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_sidebar_padding', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'penci_sidebar_padding_mobile', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_sidebar_padding', array(
	'description' => __( 'Custom Padding Value on Boxed Sidebar Styles', 'soledad' ),
	'section'     => 'penci_section_sidebar_general',
	'settings'    => array(
		'desktop' => 'penci_sidebar_padding',
		'mobile'  => 'penci_sidebar_padding_mobile',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_sbbx_bdstyle', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_sbbx_bdstyle', array(
	'label'       => 'Select Borders Type on Sidebar Boxed Styles',
	'section'     => 'penci_section_sidebar_general',
	'settings'    => 'penci_sbbx_bdstyle',
	'description' => __( 'Some types need to adjust the borders width below to a minimum of 4px to see how it works.', 'soledad' ),
	'type'        => 'select',
	'choices'     => array(
		''       => 'Default ( Solid )',
		'dotted' => 'Dotted',
		'dashed' => 'Dashed',
		'double' => 'Double',
		'groove' => 'Groove',
		'ridge'  => 'Ridge',
		'inset'  => 'Inset',
		'outset' => 'Outset',
	)
) ) );

$wp_customize->add_setting( 'penci_sidebar_boxed_bdw', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_sidebar_boxed_bdw', array(
	'description' => __( 'Custom Borders Width on Sidebar Boxed Styles', 'soledad' ),
	'section'     => 'penci_section_sidebar_general',
	'settings'    => array(
		'desktop' => 'penci_sidebar_boxed_bdw',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 50,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_sidebar_width', array(
	'default'           => '29.1',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_sidebar_width', array(
	'description' => __( 'Custom Sidebar Width', 'soledad' ),
	'section'     => 'penci_section_sidebar_general',
	'settings'    => array(
		'desktop' => 'penci_sidebar_width',
	),
	'choices' => array(
		'desktop' => array(
			'min' => 1,
			'max' => 50,
			'step' => 0.1,
			'edit' => true,
			'unit' => '%',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_2sidebar_width', array(
	'default' => '21.5',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_2sidebar_width', array(
	'description' => __( 'Sidebar Width on Two Sidebars Layout', 'soledad' ),
	'section' => 'penci_section_sidebar_general',
	'settings' => array(
		'desktop' => 'penci_2sidebar_width',
	),
	'choices' => array(
		'desktop' => array(
			'min' => 1,
			'max' => 50,
			'step' => 0.1,
			'edit' => true,
			'unit' => '%',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_sidebar_space', array(
	'default' => '50',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_sidebar_space', array(
	'description' => __( 'Space Between Sidebar & Content', 'soledad' ),
	'section' => 'penci_section_sidebar_general',
	'settings' => array(
		'desktop' => 'penci_sidebar_space',
	),
	'choices' => array(
		'desktop' => array(
			'min' => 1,
			'max' => 200,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_sidebar_widget_margin', array(
	'default' => '60',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'sidebar_widget_margin', array(
	'description' => __( 'Custom Space Between Widgets', 'soledad' ),
	'section' => 'penci_section_sidebar_general',
	'settings' => array(
		'desktop' => 'penci_sidebar_widget_margin',
	),
	'choices' => array(
		'desktop' => array(
			'min' => 1,
			'max' => 100,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_sidebar_heading_lowcase', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_heading_lowcase', array(
	'label'    => 'Turn Off Uppercase Widget Heading',
	'section'  => 'penci_section_sidebar_general',
	'settings' => 'penci_sidebar_heading_lowcase',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_sidebar_rm_bdbottom', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_sidebar_rm_bdbottom', array(
	'label'    => 'Remove Border Bottom on the list in Widgets',
	'description' => __( 'This option will remove the border-bottom on widgets: Soledad Latest Posts, Soledad Popular Posts, Categories,...', 'soledad' ),
	'section'  => 'penci_section_sidebar_general',
	'settings' => 'penci_sidebar_rm_bdbottom',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_sidebar_heading_style', array(
	'default'           => 'style-1',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_heading_style', array(
	'label'    => 'Sidebar Widget Heading Style',
	'section'  => 'penci_section_sidebar_general',
	'settings' => 'penci_sidebar_heading_style',
	'type'     => 'radio',
	'choices'  => array(
		'style-1'           => 'Default Style',
		'style-2'           => 'Style 2',
		'style-3'           => 'Style 3',
		'style-4'           => 'Style 4',
		'style-5'           => 'Style 5',
		'style-6'           => 'Style 6 - Only Text',
		'style-7'           => 'Style 7',
		'style-9'           => 'Style 8',
		'style-8'           => 'Style 9 - Custom Background Image',
		'style-10'          => 'Style 10',
		'style-11'          => 'Style 11',
		'style-12'          => 'Style 12',
		'style-13'          => 'Style 13',
		'style-14'          => 'Style 14',
		'style-15'          => 'Style 15',
		'style-16'          => 'Style 16',
		'style-2 style-17'  => 'Style 17',
		'style-18'          => 'Style 18',
		'style-18 style-19' => 'Style 19',
		'style-18 style-20' => 'Style 20',
	)
) ) );

$wp_customize->add_setting( 'penci_sidebar_heading_image_8', array(
	'default'           => '',
	'sanitize_callback' => 'esc_url_raw'
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sidebar_heading_image_8', array(
	'label'    => 'Custom Background Image for Style 9',
	'section'  => 'penci_section_sidebar_general',
	'settings' => 'penci_sidebar_heading_image_8',
) ) );

$wp_customize->add_setting( 'penci_sidebar_heading8_repeat', array(
	'default'           => 'no-repeat',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_heading8_repeat', array(
	'label'    => 'Background Image Repeat for Style 9',
	'section'  => 'penci_section_sidebar_general',
	'settings' => 'penci_sidebar_heading8_repeat',
	'type'     => 'radio',
	'choices'  => array(
		'no-repeat' => 'No Repeat',
		'repeat'    => 'Repeat'
	)
) ) );

$wp_customize->add_setting( 'penci_sidebar_heading_align', array(
	'default'           => 'pcalign-center',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_heading_align', array(
	'label'    => 'Sidebar Widget Heading Align',
	'section'  => 'penci_section_sidebar_general',
	'settings' => 'penci_sidebar_heading_align',
	'type'     => 'radio',
	'choices'  => array(
		'pcalign-center' => 'Center',
		'pcalign-left'   => 'Left',
		'pcalign-right'  => 'Right'
	)
) ) );

$wp_customize->add_setting( 'penci_sidebar_icon_align', array(
	'default'           => 'pciconp-right',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_sidebar_icon_align', array(
	'label'    => 'Align Icon on Style 15',
	'section'  => 'penci_section_sidebar_general',
	'settings' => 'penci_sidebar_icon_align',
	'type'     => 'select',
	'choices'  => array(
		'pciconp-right' => 'Right',
		'pciconp-left'  => 'Left',
	)
) ) );

$wp_customize->add_setting( 'penci_sidebar_icon_design', array(
	'default'           => 'pcicon-right',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_sidebar_icon_design', array(
	'label'    => 'Custom Icon on Style 15',
	'section'  => 'penci_section_sidebar_general',
	'settings' => 'penci_sidebar_icon_design',
	'type'     => 'select',
	'choices'  => array(
		'pcicon-right' => 'Arrow Right',
		'pcicon-left'  => 'Arrow Left',
		'pcicon-down'  => 'Arrow Down',
		'pcicon-up'    => 'Arrow Up',
		'pcicon-star'  => 'Star',
		'pcicon-bars'  => 'Bars',
		'pcicon-file'  => 'File',
		'pcicon-fire'  => 'Fire',
		'pcicon-book'  => 'Book',
	)
) ) );

$wp_customize->add_setting( 'penci_sidebar_remove_border_outer', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_remove_border_outer', array(
	'label'    => 'Remove Border Outer on Widget Heading',
	'section'  => 'penci_section_sidebar_general',
	'settings' => 'penci_sidebar_remove_border_outer',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_sidebar_remove_arrow_down', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_remove_arrow_down', array(
	'label'    => 'Remove Arrow Down on Widget Heading',
	'section'  => 'penci_section_sidebar_general',
	'settings' => 'penci_sidebar_remove_arrow_down',
	'type'     => 'checkbox',
) ) );

/* Font Size */
$wp_customize->add_setting( 'penci_sidebar_heading_size', array(
	'default' => '14',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'sidebar_heading_size', array(
	'description' => __( 'Font Size for Sidebar Widget Heading', 'soledad' ),
	'section' => 'penci_section_sidebar_fsize',
	'settings' => array(
		'desktop' => 'penci_sidebar_heading_size',
	),
	'choices' => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

/* Colors */
$wp_customize->add_setting( 'penci_bxsb_bg', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_bxsb_bg', array(
	'label'    => 'Background Color for Boxed Sidebar Styles',
	'section'  => 'penci_section_sidebar_colors',
	'settings' => 'penci_bxsb_bg',
) ) );

$wp_customize->add_setting( 'penci_bxsb_border', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_bxsb_border', array(
	'label'    => 'Borders Color for Boxed Sidebar Styles',
	'section'  => 'penci_section_sidebar_colors',
	'settings' => 'penci_bxsb_border',
) ) );

$wp_customize->add_setting( 'penci_sidebar_heading_bg', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_bg', array(
	'label'    => 'Sidebar Widget Heading Background Color',
	'section'  => 'penci_section_sidebar_colors',
	'settings' => 'penci_sidebar_heading_bg',
) ) );

$wp_customize->add_setting( 'penci_sidebar_heading_outer_bg', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_outer_bg', array(
	'label'    => 'Sidebar Widget Heading Background Outer Color',
	'section'  => 'penci_section_sidebar_colors',
	'settings' => 'penci_sidebar_heading_outer_bg',
) ) );

$wp_customize->add_setting( 'penci_sidebar_heading_border_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_border_color', array(
	'label'    => 'Sidebar Widget Heading Border Color',
	'section'  => 'penci_section_sidebar_colors',
	'settings' => 'penci_sidebar_heading_border_color',
) ) );

$wp_customize->add_setting( 'penci_sidebar_heading_border_inner_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_border_inner_color', array(
	'label'    => 'Sidebar Widget Heading Border Outer Color',
	'section'  => 'penci_section_sidebar_colors',
	'settings' => 'penci_sidebar_heading_border_inner_color',
) ) );

$wp_customize->add_setting( 'penci_sidebar_heading_border_color5', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_border_color5', array(
	'label'    => 'Custom Color for Border Bottom on Widget Heading Style 5, 10, 11, 12',
	'section'  => 'penci_section_sidebar_colors',
	'settings' => 'penci_sidebar_heading_border_color5',
) ) );

$wp_customize->add_setting( 'penci_sidebar_heading_border_color7', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_border_color7', array(
	'label'    => 'Custom Color for Small Border Bottom on Widget Heading Style 7 & Style 8',
	'section'  => 'penci_section_sidebar_colors',
	'settings' => 'penci_sidebar_heading_border_color7',
) ) );

$wp_customize->add_setting( 'sidebar_heading_bordertop_color10', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_bordertop_color10', array(
	'label'    => 'Custom Color for Border Top on Widget Heading Style 10',
	'section'  => 'penci_section_sidebar_colors',
	'settings' => 'sidebar_heading_bordertop_color10',
) ) );

$wp_customize->add_setting( 'penci_sidebar_heading_shapes_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_sidebar_heading_shapes_color', array(
	'label'    => 'Custom Color for Background Shapes Widget Heading Styles 11, 12, 13',
	'section'  => 'penci_section_sidebar_colors',
	'settings' => 'penci_sidebar_heading_shapes_color',
) ) );

$wp_customize->add_setting( 'penci_sidebar_bgstyle15', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_sidebar_bgstyle15', array(
	'label'    => 'Background Color for Icon on Style 15',
	'section'  => 'penci_section_sidebar_colors',
	'settings' => 'penci_sidebar_bgstyle15',
) ) );

$wp_customize->add_setting( 'penci_sidebar_iconstyle15', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_sidebar_iconstyle15', array(
	'label'    => 'Icon Color on Style 15',
	'section'  => 'penci_section_sidebar_colors',
	'settings' => 'penci_sidebar_iconstyle15',
) ) );

$wp_customize->add_setting( 'penci_sidebar_cllines', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_sidebar_cllines', array(
	'label'    => 'Color for Lines on Styles 18, 19, 20',
	'section'  => 'penci_section_sidebar_colors',
	'settings' => 'penci_sidebar_cllines',
) ) );

$wp_customize->add_setting( 'penci_sidebar_heading_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_color', array(
	'label'    => 'Sidebar Widget Heading Text Color',
	'section'  => 'penci_section_sidebar_colors',
	'settings' => 'penci_sidebar_heading_color',
) ) );

$wp_customize->add_setting( 'penci_sidebar_accent_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_accent_color', array(
	'label'    => 'Accent Color',
	'section'  => 'penci_section_sidebar_colors',
	'settings' => 'penci_sidebar_accent_color',
) ) );

$wp_customize->add_setting( 'penci_sidebar_accent_hover_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_accent_hover_color', array(
	'label'    => 'Accent Hover Color',
	'section'  => 'penci_section_sidebar_colors',
	'settings' => 'penci_sidebar_accent_hover_color',
) ) );
