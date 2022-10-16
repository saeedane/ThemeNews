<?php

$options = [];

$options[] = [
	'id'              => 'soledad[jquery_option]',
	'option_type'     => 'option',
	'transport'       => 'postMessage',
	'default'         => false,
	'type'            => 'soledad-fw-toggle',
	'section'         => 'soledad_fw_framework_section',
	'label'           => esc_html__( 'Enable jQuery Migrate Option', 'soledad' ),
	'description'     => wp_kses( sprintf( __('This option serves as a temporary solution, enabling the migration script for your site to give your plugin and theme authors some more time to update, and test, their code.', 'soledad') ), wp_kses_allowed_html() ),
];

return $options;
