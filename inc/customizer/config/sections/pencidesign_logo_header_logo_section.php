<?php
$options   = [];
$options[] = array(
	'sanitize' => 'esc_url_raw',
	'label'    => 'Upload Logo',
	'id'       => 'penci_logo',
	'type'     => 'soledad-fw-image',
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Set A Max Width for Logo', 'soledad' ),
	'id'       => 'penci_logo_max_width',
);
$options[] = array(
	'label'       => '',
	'id'          => 'penci_logo_height_mobile',
	'type'        => 'soledad-fw-hidden',
	'sanitize'    => 'absint',
);
$options[] = array(
	'label'       => 'Set A Height for Logo Image',
	'id'          => 'penci_logo_height',
	'type'        => 'soledad-fw-size',
	'sanitize'    => 'absint',
	'ids'         => array(
		'desktop' => 'penci_logo_height',
		'mobile'  => 'penci_logo_height_mobile',
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
	'sanitize'    => 'esc_url_raw',
	'label'       => 'Upload Logo for Transparent Header style 6, 9, 10 & 11',
	'id'          => 'penci_upload_transparent_logo',
	'type'        => 'soledad-fw-image',
	'description' => 'Important Note: This option apply when you use transparent header only',
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'sanitize_text_field',
	'label'       => 'Custom Link for Logo Image',
	'id'          => 'penci_custom_url_logo',
	'description' => 'By default, logo image will link to homepage url. If you want to link the logo for another URL - fill here. Include http:// or https:// on the link',
	'type'        => 'soledad-fw-text',
);
$options[] = array(
	'default'         => '40',
	'sanitize'        => 'absint',
	'type'            => 'soledad-fw-number',
	'label'           => __( 'Logo Padding Top & Bottom', 'soledad' ),
	'sub_description' => __( 'This option does not apply for header layout 6, 9, 10, 11', 'soledad' ),
	'id'              => 'penci_header_padding',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Overflow Logo for Header Layout 10 & 11',
	'id'       => 'penci_overflow_logo',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'absint',
	'type'        => 'soledad-fw-number',
	'label'       => __( 'Max Width for Sticky Logo on Header 10 & 11', 'soledad' ),
	'description' => __( 'This option just apply when you use overflow logo for header layout 10 & 11', 'soledad' ),
	'id'          => 'penci_logo_max_width_overflow',
);

return $options;
