<?php
$options   = [];
$options[] = array(
	'id'       => 'penci_agepopup_enable',
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Enable age verification popup ',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'id'          => 'penci_agepopup_message',
	'default'     => '',
	'sanitize'    => 'penci_sanitize_textarea_field',
	'label'       => 'Popup Message',
	'description' => 'Write a message warning your visitors about age restriction on your website',
	'type'        => 'soledad-fw-textarea',
);
$options[] = array(
	'id'          => 'penci_agepopup_error_message',
	'default'     => '',
	'sanitize'    => 'penci_sanitize_textarea_field',
	'label'       => 'Error Message',
	'description' => 'This message will be displayed when the visitor don\'t verify his age.',
	'type'        => 'soledad-fw-textarea',
);
$options[] = array(
	'id'       => 'penci_agepopup_agree_text',
	'default'  => 'I am 18 or Older',
	'sanitize' => 'penci_sanitize_tex_field',
	'label'    => 'Agree Text',
	'type'     => 'soledad-fw-text',
);
$options[] = array(
	'id'       => 'penci_agepopup_cancel_text',
	'default'  => 'I am Under 18',
	'sanitize' => 'penci_sanitize_tex_field',
	'label'    => 'Cancel Text',
	'type'     => 'soledad-fw-text',
);
/* Style & Size */
$options[] = array(
	'id'       => 'penci_heading_ageverify',
	'sanitize' => 'sanitize_text_field',
	'label'    => esc_html__( 'Popup Content Styles', 'soledad' ),
	'type'     => 'soledad-fw-header',
);
$options[] = array(
	'id'       => 'penci_agepopup_animation',
	'default'  => 'move-to-top',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Popup Open Animation',
	'type'     => 'soledad-fw-select',
	'choices'  => [
		'move-to-left'   => 'Move To Left',
		'move-to-right'  => 'Move To Right',
		'move-to-top'    => 'Move To Top',
		'move-to-bottom' => 'Move To Bottom',
		'fadein'         => 'Fade In',
	]
);
$options[] = array(
	'id'       => 'penci_agepopup_bgimg',
	'default'  => '',
	'type'     => 'soledad-fw-image',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Popup Background Image',
);
$options[] = array(
	'id'          => 'penci_agepopup_bgcolor',
	'default'     => '',
	'sanitize'    => 'sanitize_hex_color',
	'label'       => 'Popup Background Color',
	'type'        => 'soledad-fw-color',
	'description' => 'Set background image or color for age popup',
);
$options[] = array(
	'id'       => 'penci_agepopup_bgrepeat',
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
	'id'       => 'penci_agepopup_bgposition',
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
	'id'       => 'penci_agepopup_bgsize',
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
	'id'       => 'penci_agepopup_bgscroll',
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
	'id'          => 'penci_agepopup_width_mobile',
	'type'        => 'soledad-fw-hidden',
	'sanitize'    => 'absint',
);
$options[] = array(
	'label'       => 'Popup Width',
	'description' => 'Set width of the age popup in pixels.',
	'id'          => 'penci_agepopup_width_desktop',
	'type'        => 'soledad-fw-size',
	'sanitize'    => 'absint',
	'ids'         => array(
		'desktop' => 'penci_agepopup_width_desktop',
		'mobile'  => 'penci_agepopup_width_mobile',
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
	'id'       => 'penci_agepopup_txtcolor',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color',
	'label'    => 'Popup Text Color',
);
$options[] = array(
	'id'       => 'penci_agepopup_txt_size',
	'default'  => '',
	'sanitize' => 'absint',
	'label'    => 'Popup Text Size',
	'type'     => 'soledad-fw-number',
);
$options[] = array(
	'id'       => 'penci_agepopup_txt_msize',
	'default'  => '',
	'sanitize' => 'absint',
	'label'    => 'Popup Text Size',
	'type'     => 'soledad-fw-number',
);
$options[] = array(
	'id'       => 'penci_agepopup_bordercolor',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color',
	'label'    => 'Popup Border Color',
);
$options[] = array(
	'id'       => 'penci_agepopup_btn1_color',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color',
	'label'    => 'Agree Button Color',
);
$options[] = array(
	'id'       => 'penci_agepopup_btn1_hcolor',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color',
	'label'    => 'Agree Button Hover Color',
);
$options[] = array(
	'id'       => 'penci_agepopup_btn1_bgcolor',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color',
	'label'    => 'Agree Button Background Color',
);
$options[] = array(
	'id'       => 'penci_agepopup_btn1_hbgcolor',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color',
	'label'    => 'Agree Button Hover Background Color',
);
$options[] = array(
	'id'       => 'penci_agepopup_btn2_color',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color',
	'label'    => 'Cancel Button Color',
);
$options[] = array(
	'id'       => 'penci_agepopup_btn2_hcolor',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color',
	'label'    => 'Cancel Button Hover Color',
);
$options[] = array(
	'id'       => 'penci_agepopup_btn2_bgcolor',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color',
	'label'    => 'Cancel Button Background Color',
);
$options[] = array(
	'id'       => 'penci_agepopup_btn2_hbgcolor',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color',
	'label'    => 'Cancel Button Hover Background Color',
);
$options[] = array(
	'id'       => 'penci_agepopup_spacing',
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
