<?php
$options   = [];
$options[] = array(
	'id'        => 'penci_header_pb_wishlist_icon_section_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => esc_html__( 'Wishlist Icon Color', 'soledad' ),
);
$options[] = array(
	'id'        => 'penci_header_pb_wishlist_icon_section_hv_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => esc_html__( 'Wishlist Icon Hover Color', 'soledad' ),
);
$options[] = array(
	'id'        => 'penci_header_pb_wishlist_icon_section_item_count_txt',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => esc_html__( 'Number Count Text Color', 'soledad' ),
);
$options[] = array(
	'id'        => 'penci_header_pb_wishlist_icon_section_item_count_bg',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => esc_html__( 'Number Count Text Background Color', 'soledad' ),
);
$options[] = array(
	'id'        => 'penci_header_pb_wishlist_icon_section_size',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'absint',
	'type'      => 'soledad-fw-size',
	'label'     => 'Icon Size',
	'ids'  => array(
		'desktop' => 'penci_header_pb_wishlist_icon_section_size',
	),
	'choices'   => array(
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
	'id'        => 'penci_header_pb_wishlist_icon_section_spacing',
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

return $options;
