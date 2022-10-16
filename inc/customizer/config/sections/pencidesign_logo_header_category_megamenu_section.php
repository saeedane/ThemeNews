<?php
$options   = [];
$options[] = array(
	'default'     => '',
	'sanitize'    => 'sanitize_text_field',
	'label'       => 'Custom Border Radius for Images on Category Mega Menu',
	'id'          => 'penci_megamenu_border_radius',
	'type'        => 'soledad-fw-number',
	'description' => 'You can use pixel or percent. E.g:  <strong>10px</strong>  or  <strong>10%</strong>. If you want to disable border radius for it - fill 0',
);
$options[] = array(
	'default'  => 'horizontal',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Featured Images Type for Category Mega Menu',
	'id'       => 'penci_mega_featured_image_size',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		'horizontal' => 'Horizontal Size',
		'square'     => 'Square Size',
		'vertical'   => 'Vertical Size',
		'custom'     => 'Custom',
	)
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'sanitize_text_field',
	'type'        => 'soledad-fw-number',
	'label'       => 'Custom Aspect Ratio for Featured Images Type for Category Mega Menu',
	'id'          => 'penci_mega_featured_image_ratio',
	'description' => 'The aspect ratio of an element describes the proportional relationship between its width and its height. E.g: <strong>3:2</strong>. Default is 3:2 . This option apply  for <strong>Featured Images Type for Category Mega Menu is Custom</strong>',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide "All" tab on Category Mega Menu',
	'id'       => 'penci_topbar_mega_hide_alltab',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => '8',
	'sanitize' => 'absint',
	'label'    => __( 'Custom Words Length for Post Titles on Category Mega Menu', 'soledad' ),
	'id'       => 'penci_megamenu_title_length',
	'type'     => 'soledad-fw-number',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Enable Post Format Icons on Category Mega Menu',
	'id'       => 'penci_topbar_mega_icons',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Post Category On Category Mega Menu',
	'id'       => 'penci_topbar_mega_category',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Post Date On Category Mega Menu',
	'id'       => 'penci_topbar_mega_date',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Turn Off Uppercase Post Titles On Category Mega Menu',
	'id'       => 'penci_off_uppercase_cat_mega',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => '12',
	'sanitize' => 'absint',
	'label'    => __( 'Font Size for Child Categories On Category Mega Menu', 'soledad' ),
	'id'       => 'penci_font_size_child_cat_mega',
	'type'     => 'soledad-fw-size',
	'ids'         => array(
		'desktop' => 'penci_font_size_child_cat_mega',
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
	'default'  => '10',
	'sanitize' => 'absint',
	'label'    => __( 'Font Size for Category Name On Category Mega Menu', 'soledad' ),
	'id'       => 'penci_font_size_cat_mega',
	'type'     => 'soledad-fw-size',
	'ids'         => array(
		'desktop' => 'penci_font_size_cat_mega',
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
	'default'  => '12',
	'sanitize' => 'absint',
	'label'    => __( 'Font Size for Post Titles On Category Mega Menu', 'soledad' ),
	'id'       => 'penci_font_size_title_cat_mega',
	'type'     => 'soledad-fw-size',
	'ids'         => array(
		'desktop' => 'penci_font_size_title_cat_mega',
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
	'default'  => '12',
	'sanitize' => 'absint',
	'label'    => __( 'Font Size for Post Date On Category Mega Menu', 'soledad' ),
	'id'       => 'penci_font_size_date_mega',
	'type'     => 'soledad-fw-size',
	'ids'         => array(
		'desktop' => 'penci_font_size_date_mega',
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

return $options;
