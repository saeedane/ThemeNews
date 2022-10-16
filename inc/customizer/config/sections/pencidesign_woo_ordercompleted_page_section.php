<?php
$options   = [];
$options[] = array(
	'id'        => 'penci_woo_checkout_txt_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => 'Text Color',
);
$options[] = array(
	'id'        => 'penci_woo_checkout_head_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => 'Heading Text Color',
);
$options[] = array(
	'id'        => 'penci_woo_checkout_border_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => 'General Border Color',
);
$options[] = array(
	'id'        => 'penci_woo_checkout_success_icon_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => 'Sucess Icon Color',
);
$options[] = array(
	'id'        => 'penci_woo_checkout_success_icon_bg_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => 'Sucess Icon Background Color',
);
$options[] = array(
	'id'        => 'penci_woo_checkout_success_thankyou_text',
	'default'   => 'Thank you. Your order has been received.',
	'transport' => 'postMessage',
	'sanitize'  => 'penci_sanitize_textarea_field',
	'label'     => 'Custom Thankyou Text',
	'type'      => 'soledad-fw-textarea',
);
$options[] = array(
	'id'        => 'penci_woo_notice_bg_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => 'Notice Background Color',
);
$options[] = array(
	'id'        => 'penci_woo_notice_txt_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => 'Notice Text Color',
);

return $options;
