<?php
$options   = [];
$options[] = array(
	'default'     => true,
	'sanitize'    => 'penci_sanitize_checkbox_field',
	'label'       => 'Quick View',
	'description' => 'Enable Quick view option. Ability to see the product information with AJAX.',
	'id'          => 'penci_woocommerce_quickview',
	'type'        => 'soledad-fw-toggle',
);
$options[] = array(
	'default'     => false,
	'sanitize'    => 'penci_sanitize_checkbox_field',
	'label'       => 'Show variations information on quick view',
	'description' => 'Enable Quick show all product summary information for variable products.',
	'id'          => 'penci_woocommerce_quickview_variations',
	'type'        => 'soledad-fw-toggle',
);
$options[] = array(
	'type'        => 'soledad-fw-number',
	'default'     => '960',
	'sanitize'    => 'absint',
	'label'       => 'Quick view width',
	'description' => 'Set width of the quick view in pixels.',
	'id'          => 'penci_woocommerce_quickview_width',
);

return $options;
