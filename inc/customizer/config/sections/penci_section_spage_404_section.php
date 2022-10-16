<?php
$options   = [];
$options[] = array(
	'sanitize' => 'esc_url_raw',
	'type'     => 'soledad-fw-image',
	'label'    => '404 Custom Main Image',
	'id'       => 'penci_not_found_image',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Remove Line Below Main Image',
	'id'       => 'penci_not_found_removeline',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => "OOPS! Page you're looking for doesn't exist. Please use search for help",
	'sanitize' => 'penci_sanitize_textarea_field',
	'label'    => '404 Custom Message Text',
	'id'       => 'penci_not_found_sub_heading',
	'type'     => 'soledad-fw-textarea',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Search Form',
	'id'       => 'penci_not_found_hide_search',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide "BACK TO HOME PAGE"',
	'id'       => 'penci_not_found_hide_backhome',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'absint',
	'label'    => __( 'Font Size for Message Text', 'soledad' ),
	'id'       => 'penci_notfound_message_fsize',
	'type'     => 'soledad-fw-size',
	'ids'         => array(
		'desktop' => 'penci_notfound_message_fsize',
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
	'default'  => '',
	'sanitize' => 'absint',
	'label'    => __( 'Font Size for Text on Search Form', 'soledad' ),
	'id'       => 'penci_notfound_input_fsize',
	'type'     => 'soledad-fw-size',
	'ids'         => array(
		'desktop' => 'penci_notfound_input_fsize',
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
	'default'  => '',
	'sanitize' => 'absint',
	'label'    => __( 'Font Size for "Back To Homepage"', 'soledad' ),
	'id'       => 'penci_notfound_backhome_fsize',
	'type'     => 'soledad-fw-size',
	'ids'         => array(
		'desktop' => 'penci_notfound_backhome_fsize',
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
