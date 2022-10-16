<?php
$options   = [];
$options[] = array(
	'default'  => '',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Rows Gap Between Post Items', 'soledad' ),
	'id'       => 'penci_rgap_pitems',
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Rows Gap for Big Post Items', 'soledad' ),
	'id'       => 'penci_rgap_pbitems',
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Rows Gap for Small List Post Items', 'soledad' ),
	'id'       => 'penci_rgap_psitems',
);

return $options;
