<?php
$options = [];
/*Product Label Settings*/
$options[] = array(
	'default'     => true,
	'sanitize'    => 'penci_sanitize_checkbox_field',
	'label'       => 'Show HOT label ?',
	'description' => 'Display HOT label on featured product.',
	'id'          => 'penci_woo_label_hot_product',
	'type'        => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => 'square',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Select Label Style',
	'id'       => 'penci_woo_label_style',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		'square' => 'Rectangle',
		'round'  => 'Round',
	),
);
$options[] = array(
	'default'  => true,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Show Percentage on sale label ?',
	'id'       => 'penci_woo_label_percentage',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'id'          => 'penci_woo_label_new_product',
	'default'     => true,
	'sanitize'    => 'penci_sanitize_checkbox_field',
	'label'       => 'Show NEW label ?',
	'description' => 'Display NEW label on product.',
	'type'        => 'soledad-fw-toggle',
);
$options[] = array(
	'id'          => 'penci_woo_label_new_product_period',
	'default'     => 7,
	'sanitize'    => 'absint',
	'label'       => 'Automatic "New" label period',
	'description' => 'Set a number of days to keep your products marked as "New" after creation.',
	'type'        => 'soledad-fw-number',
);
$options[] = array(
	'id'        => 'penci_woo_label_new_color',
	'default'   => '#8dd620',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => 'New Label Background Color',
);
$options[] = array(
	'id'        => 'penci_woo_label_hot_color',
	'default'   => '#fb1919',
	'transport' => 'postMessage',
	'type'      => 'soledad-fw-color',
	'sanitize'  => 'sanitize_hex_color',
	'label'     => 'Hot Label Background Color',
);
$options[] = array(
	'id'        => 'penci_woo_label_hot_color',
	'default'   => '',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => 'Sale Label Background Color',
);
$options[] = array(
	'id'        => 'penci_woo_label_outstock_color',
	'default'   => '#800000',
	'transport' => 'postMessage',
	'sanitize'  => 'sanitize_hex_color',
	'type'      => 'soledad-fw-color',
	'label'     => 'Out of Stock Label Background Color',
);

return $options;
