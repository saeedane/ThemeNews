<?php
$options   = [];
$options[] = array(
	'default'  => '',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Select Sidebar Style',
	'id'       => 'penci_sidebar_style',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		''                  => 'Default',
		'pcsb-boxed-whole'  => 'Boxed Whole Sidebar',
		'pcsb-boxed-widget' => 'Boxed Widgets on Sidebar',
	)
);
$options[] = array(
	'default'     => false,
	'sanitize'    => 'penci_sanitize_checkbox_field',
	'label'       => 'Disable Boxed on "Custom HTML" widget?',
	'id'          => 'penci_sidebar_disable_phtml',
	'description' => __( 'This option just applies on "Custom HTML" widget & you\'ve selected sidebar style is "Boxed Widgets"', 'soledad' ),
	'type'        => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Custom Padding Value on Boxed Sidebar Styles', 'soledad' ),
	'id'       => 'penci_sidebar_padding',
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Custom Padding Value on Boxed Sidebar Styles', 'soledad' ),
	'id'       => 'penci_sidebar_padding_mobile',
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'penci_sanitize_choices_field',
	'label'       => 'Select Borders Type on Sidebar Boxed Styles',
	'id'          => 'penci_sbbx_bdstyle',
	'description' => __( 'Some types need to adjust the borders width below to a minimum of 4px to see how it works.', 'soledad' ),
	'type'        => 'soledad-fw-select',
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
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Custom Borders Width on Sidebar Boxed Styles', 'soledad' ),
	'id'       => 'penci_sidebar_boxed_bdw',
);
$options[] = array(
	'default'  => '29.1',
	'sanitize' => 'absint',
	'label'    => __( 'Custom Sidebar Width', 'soledad' ),
	'id'       => 'penci_sidebar_width',
	'type'     => 'soledad-fw-number',
);
$options[] = array(
	'default'  => '21.5',
	'sanitize' => 'absint',
	'label'    => __( 'Sidebar Width on Two Sidebars Layout', 'soledad' ),
	'id'       => 'penci_2sidebar_width',
	'type'     => 'soledad-fw-number',
);
$options[] = array(
	'default'  => '50',
	'sanitize' => 'absint',
	'label'    => __( 'Space Between Sidebar & Content', 'soledad' ),
	'id'       => 'penci_sidebar_space',
	'type'     => 'soledad-fw-number',

);
$options[] = array(
	'default'  => '60',
	'sanitize' => 'absint',
	'label'    => __( 'Custom Space Between Widgets', 'soledad' ),
	'id'       => 'penci_sidebar_widget_margin',
	'type'     => 'soledad-fw-number',

);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Turn Off Uppercase Widget Heading',
	'id'       => 'penci_sidebar_heading_lowcase',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'     => false,
	'sanitize'    => 'penci_sanitize_checkbox_field',
	'label'       => 'Remove Border Bottom on the list in Widgets',
	'description' => __( 'This option will remove the border-bottom on widgets: Soledad Latest Posts, Soledad Popular Posts, Categories,...', 'soledad' ),
	'id'          => 'penci_sidebar_rm_bdbottom',
	'type'        => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => 'style-1',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Sidebar Widget Heading Style',
	'id'       => 'penci_sidebar_heading_style',
	'type'     => 'soledad-fw-select',
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
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'esc_url_raw',
	'label'    => 'Custom Background Image for Style 9',
	'id'       => 'penci_sidebar_heading_image_8',
	'type'       => 'soledad-fw-image',
);
$options[] = array(
	'default'  => 'no-repeat',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Background Image Repeat for Style 9',
	'id'       => 'penci_sidebar_heading8_repeat',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		'no-repeat' => 'No Repeat',
		'repeat'    => 'Repeat'
	)
);
$options[] = array(
	'default'  => 'pcalign-center',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Sidebar Widget Heading Align',
	'id'       => 'penci_sidebar_heading_align',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		'pcalign-center' => 'Center',
		'pcalign-left'   => 'Left',
		'pcalign-right'  => 'Right'
	)
);
$options[] = array(
	'default'  => 'pciconp-right',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Align Icon on Style 15',
	'id'       => 'penci_sidebar_icon_align',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		'pciconp-right' => 'Right',
		'pciconp-left'  => 'Left',
	)
);
$options[] = array(
	'default'  => 'pcicon-right',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Custom Icon on Style 15',
	'id'       => 'penci_sidebar_icon_design',
	'type'     => 'soledad-fw-select',
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
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Remove Border Outer on Widget Heading',
	'id'       => 'penci_sidebar_remove_border_outer',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Remove Arrow Down on Widget Heading',
	'id'       => 'penci_sidebar_remove_arrow_down',
	'type'     => 'soledad-fw-toggle',
);

return $options;
