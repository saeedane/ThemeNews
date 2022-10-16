<?php
$options   = [];
$options[] = array(
	'id'        => 'penci_popup_bgimg',
	'default'   => '',
	'transport' => 'postMessage',
	'type'      => 'soledad-fw-color',
	'sanitize'  => 'penci_sanitize_choices_field',
	'label'     => 'Popup Background Image',
);
$options[] = array(
	'id'          => 'penci_popup_bgcolor',
	'default'     => '',
	'sanitize'    => 'sanitize_hex_color',
	'type'        => 'soledad-fw-color',
	'label'       => 'Popup Background Color',
	'description' => 'Set background image or color for promo popup',
);
$options[] = array(
	'id'       => 'penci_popup_bgrepeat',
	'default'  => '',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Popup Background Repeat',
	'type'     => 'soledad-fw-select',
	'choices'  => [
		'repeat'    => 'repeat',
		'repeat-x'  => 'repeat-x',
		'repeat-y'  => 'repeat-y',
		'no-repeat' => 'no-repeat',
		'initial'   => 'initial',
		'inherit'   => 'inherit'
	]
);
$options[] = array(
	'id'       => 'penci_popup_bgposition',
	'default'  => '',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Popup Background Position',
	'type'     => 'soledad-fw-select',
	'choices'  => [
		'left top'      => 'left top',
		'left center'   => 'left center',
		'left bottom'   => 'left bottom',
		'right top'     => 'right top',
		'right center'  => 'right center',
		'right bottom'  => 'right bottom',
		'center top'    => 'center top',
		'center center' => 'center center',
		'center bottom' => 'center bottom',
	]
);
$options[] = array(
	'id'       => 'penci_popup_bgsize',
	'default'  => '',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Popup Background Size',
	'type'     => 'soledad-fw-select',
	'choices'  => [
		'auto'    => 'auto',
		'length'  => 'length',
		'cover'   => 'cover',
		'contain' => 'contain',
		'initial' => 'initial',
		'inherit' => 'inherit'
	]
);
$options[] = array(
	'id'       => 'penci_popup_bgscroll',
	'default'  => '',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Popup Background Scroll',
	'type'     => 'soledad-fw-select',
	'choices'  => [
		'scroll'  => 'scroll',
		'fixed'   => 'fixed',
		'local'   => 'local',
		'initial' => 'initial',
		'inherit' => 'inherit'
	]
);
$options[] = array(
	'label'       => '',
	'description' => '',
	'id'          => 'penci_popup_width_mobile',
	'type'        => 'soledad-fw-hidden',
	'sanitize'    => 'absint',
);
$options[] = array(
	'label'       => 'Popup Width',
	'description' => 'Set width of the promo popup in pixels.',
	'id'          => 'penci_popup_width_desktop',
	'type'        => 'soledad-fw-size',
	'sanitize'    => 'absint',
	'ids'         => array(
		'desktop' => 'penci_popup_width_desktop',
		'mobile'  => 'penci_popup_width_mobile',
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
	'id'       => 'penci_popup_txtcolor',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'        => 'soledad-fw-color',
	'label'    => 'Popup Text Color',
);
$options[] = array(
	'id'       => 'penci_popup_bordercolor',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'        => 'soledad-fw-color',
	'label'    => 'Popup Border Color',
);
$options[] = array(
	'id'       => 'penci_popup_closecolor',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'        => 'soledad-fw-color',
	'label'    => 'Popup Close Button Color',
);
$options[] = array(
	'label'       => '',
	'description' => '',
	'id'          => 'penci_popup_txt_msize',
	'type'        => 'soledad-fw-hidden',
	'sanitize'    => 'absint',
);
$options[] = array(
	'label'       => 'Popup Text Size',
	'id'          => 'penci_popup_txt_size',
	'type'        => 'soledad-fw-size',
	'sanitize'    => 'absint',
	'ids'         => array(
		'desktop' => 'penci_popup_txt_size',
		'mobile'  => 'penci_popup_txt_msize',
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
	'id'       => 'penci_popup_spacing',
	'default'  => '',
	'sanitize' => 'penci_sanitize_choices_field',
	'type'     => 'soledad-fw-box-model',
	'label'    => __( 'Popup Spacing', 'soledad' ),
	'choices'  => array(
		'padding'       => array(
			'padding-top'    => '',
			'padding-right'  => '',
			'padding-bottom' => '',
			'padding-left'   => '',
		),
		'border'        => array(
			'border-top'    => '',
			'border-right'  => '',
			'border-bottom' => '',
			'border-left'   => '',
		),
		'border-radius' => array(
			'border-radius-top'    => '',
			'border-radius-right'  => '',
			'border-radius-bottom' => '',
			'border-radius-left'   => '',
		),
	),
);

return $options;
