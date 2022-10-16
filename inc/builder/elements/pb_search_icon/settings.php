<?php
$options   = [];
$options[] = array(
	'id'        => 'penci_header_search_icon_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => esc_html__( 'Search Icon Color', 'soledad' ),
);
$options[] = array(
	'id'        => 'penci_header_search_icon_hv_color',
	'default'   => '',
	'transport' => 'postMessage',
	'type'      => 'soledad-fw-color',
	'sanitize'  => 'sanitize_hex_color',
	'label'     => esc_html__( 'Search Icon Hover Color', 'soledad' ),
);
$options[] = array(
	'id'        => 'penci_header_search_border_color',
	'default'   => '',
	'transport' => 'postMessage',
	'type'      => 'soledad-fw-color',
	'sanitize'  => 'sanitize_hex_color',
	'label'     => esc_html__( 'Search Form Border Color', 'soledad' ),
);
$options[] = array(
	'id'        => 'penci_header_search_bg_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => esc_html__( 'Search Form Background Color', 'soledad' ),
);
$options[] = array(
	'id'        => 'penci_header_search_input_border_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => esc_html__( 'Search Form Input Borders Color', 'soledad' ),
);
$options[] = array(
	'id'        => 'penci_header_search_input_bg_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => esc_html__( 'Search Form Input Background Color', 'soledad' ),
);
$options[] = array(
	'id'        => 'penci_header_search_input_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => esc_html__( 'Search Form Input Color', 'soledad' ),
);
$options[] = array(
	'id'        => 'penci_header_search_button_bg_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => esc_html__( 'Submit Button Background Color', 'soledad' ),
);
$options[] = array(
	'id'        => 'penci_header_search_button_bg_hcolor',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => esc_html__( 'Submit Button Background Hover Color', 'soledad' ),
);
$options[] = array(
	'id'        => 'penci_header_search_button_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => esc_html__( 'Submit Button Color', 'soledad' ),
);
$options[] = array(
	'id'        => 'penci_header_search_button_hcolor',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => esc_html__( 'Submit Button Hover Color', 'soledad' ),
);

$options[] = array(
	'id'        => 'penci_header_search_icon_size',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'absint',
	'label'     => 'Search Icon Size',
	'type'      => 'soledad-fw-size',
	'ids'  => array(
		'desktop' => 'penci_header_search_icon_size',
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
	'id'        => 'penci_header_search_input_size',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'absint',
	'label'     => 'Search Form Input Text Size',
	'type'      => 'soledad-fw-size',
	'ids'  => array(
		'desktop' => 'penci_header_search_input_size',
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
	'id'        => 'penci_header_search_btn_size',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'absint',
	'label'     => 'Submit Button Size',
	'type'      => 'soledad-fw-size',
	'ids'  => array(
		'desktop' => 'penci_header_search_btn_size',
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
	'id'        => 'penci_header_search_spacing',
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
	'id'        => 'penci_header_search_css_class',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'penci_sanitize_textarea_field',
	'type'      => 'soledad-fw-text',
	'label'     => esc_html__( 'Custom CSS Class', 'soledad' ),
);

/*$wp_customize->selective_refresh->add_partial( 'penci_header_search_icon_color', array(
	'selector'            => '.pc-builder-element.penci-top-search',
	'settings'            => [
		'penci_header_search_icon_color',
		'penci_header_search_icon_size',
		'penci_header_search_spacing',
		'penci_header_builder_search_icon_css_class',
	],
	'container_inclusive' => true,
	'render_callback'     => function () {
		load_template( PENCI_BUILDER_PATH . '/elements/pb_search_icon/front-end.php' );
	},
	'fallback_refresh'    => false,
) );*/

return $options;
