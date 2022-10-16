<?php
$options   = [];
$options[] = array(
	'id'       => 'penci_header_pb_mobile_menu_desc',
	'label'    => 'Please <a rel="tc-section" href="#pencidesign_logo_header_verticalnav">click here</a> to config the default mobile menu.',
	'sanitize' => 'penci_sanitize_choices_field',
	'type'     => 'soledad-fw-alert',
	
);
$options[] = array(
	'id'        => 'penci_header_pb_mobile_menu_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'penci_sanitize_textarea_field',
	'type'      => 'soledad-fw-color',
	'label'     => esc_html__( 'Color', 'soledad' ),
);
$options[] = array(
	'id'        => 'penci_header_pb_mobile_menu_hv_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'penci_sanitize_textarea_field',
	'type'      => 'soledad-fw-color',
	'label'     => esc_html__( 'Hover Color', 'soledad' ),
);
$options[] = array(
	'id'        => 'penci_header_pb_mobile_menu_spacing',
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
$options[] = array(
	'id'        => 'penci_header_pb_mobile_menu_class',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'penci_sanitize_textarea_field',
	'type'      => 'soledad-fw-text',
	'label'     => esc_html__( 'Custom CSS Class', 'soledad' ),
);

return $options;
