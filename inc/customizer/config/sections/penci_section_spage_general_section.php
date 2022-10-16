<?php
$options   = [];
$options[] = array(
	'default'     => '',
	'sanitize'    => 'penci_sanitize_choices_field',
	'label'       => 'Page Default Template Layout',
	'id'          => 'penci_page_default_template_layout',
	'description' => 'Check <a target="_blank" href="https://soledad.pencidesign.net/soledad-document/images/template.png">this image</a> to know how to change Template of a page.',
	'type'        => 'soledad-fw-select',
	'choices'     => array(
		''              => 'No Sidebar with Container',
		'small-width'   => 'No Sidebar with Smaller Container Width',
		'right-sidebar' => 'Page with Right Sidebar',
		'left-sidebar'  => 'Page with Left Sidebar',
		'two-sidebar'   => 'Page with Two Sidebars'
	)
);
$options[] = array(
	'default'  => '900',
	'type'     => 'soledad-fw-number',
	'sanitize' => 'absint',
	'label'    => __( 'Custom Width for "Page No Sidebar with Smaller Container Width"', 'soledad' ),
	'id'       => 'penci_page_custom_width',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Featured Image Auto Appears',
	'id'       => 'penci_page_hide_featured_image',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Page Titles',
	'id'       => 'penci_page_hide_ptitle',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Disable Uppercase on Page Titles',
	'id'       => 'penci_page_title_uppercase',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'label'       => '',
	'description' => '',
	'id'          => 'penci_page_title_fsize_mobile',
	'type'        => 'soledad-fw-hidden',
	'sanitize'    => 'absint',
);
$options[] = array(
	'label'       => 'Font Size for Page Titles',
	'id'          => 'penci_page_title_fsize',
	'type'        => 'soledad-fw-size',
	'sanitize'    => 'absint',
	'ids'         => array(
		'desktop' => 'penci_page_title_fsize',
		'mobile'  => 'penci_page_title_fsize_mobile',
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
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Share Buttons',
	'id'       => 'penci_page_share',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'id'       => 'penci_page_style_cscount',
	'default'  => '',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Share Box Style',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		''   => 'Inherit from Single Post Settings',
		's1' => 'Default',
		's2' => 'Style 2',
		's3' => 'Style 3',
	)
);
$options[] = array(
	'id'       => 'penci_page_align_cscount',
	'default'  => '',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Share Box Alignment',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		''       => 'Default Theme Style',
		'left'   => 'Left',
		'right'  => 'Right',
		'center' => 'Center',
	)
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'absint',
	'label'    => __( 'Font Size for "Share" Text', 'soledad' ),
	'id'       => 'penci_page_sharetext_fsize',
	'type'     => 'soledad-fw-size',

);
$options[] = array(
	'default'  => '',
	'sanitize' => 'absint',
	'label'    => __( 'Font Size for Social Share Icons', 'soledad' ),
	'id'       => 'penci_page_shareicon_fsize',
	'type'     => 'soledad-fw-size',
	'ids'         => array(
		'desktop' => 'penci_page_shareicon_fsize',
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
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Comments',
	'id'       => 'penci_page_comments',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Enable Header Transparent',
	'id'       => 'penci_header_enable_transparent',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'     => 'main-sidebar',
	'sanitize'    => 'penci_sanitize_choices_field',
	'label'       => 'Sidebar for Pages',
	'id'          => 'penci_sidebar_name_pages',
	'description' => 'If sidebar your choice is empty, will display Main Sidebar.',
	'type'        => 'soledad-fw-select',
	'choices'     => get_list_custom_sidebar_option()
);
$options[] = array(
	'default'     => 'main-sidebar-left',
	'sanitize'    => 'penci_sanitize_choices_field',
	'label'       => 'Sidebar Left for Pages',
	'id'          => 'penci_sidebar_left_name_pages',
	'description' => 'If sidebar your choice is empty, will display Main Sidebar Left. This option just apply when you use 2 sidebars for Pages',
	'type'        => 'soledad-fw-select',
	'choices'     => get_list_custom_sidebar_option()
);

return $options;
