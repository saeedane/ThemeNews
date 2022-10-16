<?php
$options   = [];
$options[] = array(
	'label'    => 'Disable Footer Widget Area',
	'id'       => 'penci_footer_widget_area',
	'type'     => 'soledad-fw-toggle',
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field'
);
$options[] = array(
	'label'    => 'Footer Widget Area Columns Layout',
	'id'       => 'penci_footer_widget_area_layout',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		'style-1'  => '1/3 + 1/3 + 1/3',
		'style-2'  => '1/3 + 2/3',
		'style-3'  => '2/3 + 1/3',
		'style-4'  => '1/4 + 1/4 + 1/4 + 1/4',
		'style-5'  => '2/4 + 1/4 + 1/4',
		'style-6'  => '1/4 + 2/4 + 1/4',
		'style-7'  => '1/4 + 1/4 + 2/4',
		'style-8'  => '1/4 + 3/4',
		'style-9'  => '3/4 + 1/4',
		'style-10' => '1/2 + 1/2',
	),
	'default'  => 'style-1',
	'sanitize' => 'penci_sanitize_choices_field'
);
$options[] = array(
	'id'       => 'penci_footer_widget_padding',
	'label'    => __( 'Footer Widget Area Padding Top & Bottom', 'soledad' ),
	'desktop'  => 'penci_footer_widget_padding',
	'default'  => '60',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
);
$options[] = array(
	'label'    => 'Align Center Footer Widget Title',
	'id'       => 'penci_footer_widget_title_center',
	'type'     => 'soledad-fw-toggle',
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field'
);
$options[] = array(
	'label'    => __( 'Font Size for Footer Widget Titles', 'soledad' ),
	'id'       => 'penci_footer_widget_titlefsize',
	'default'  => '14',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
);

return $options;
