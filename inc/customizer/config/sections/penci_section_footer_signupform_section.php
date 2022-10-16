<?php
$options   = [];
$options[] = array(
	'label' => __( 'Custom Padding to Top', 'soledad' ),
	'id'       => 'penci_footer_signup_ptop',
	'default'  => '50',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
);
$options[] = array(
	'label' => __( 'Custom Padding to Bottom', 'soledad' ),
	'id'       => 'penci_footer_signup_pbottom',
	'default'  => '40',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
);
$options[] = array(
	'label'       => '',
	'description' => '',
	'id'          => 'penci_footer_signup_fstitle_mobile',
	'type'        => 'soledad-fw-hidden',
	'sanitize'    => 'absint',
);
$options[] = array(
	'label'       => 'Font Size for Heading',
	'id'          => 'penci_footer_signup_fstitle',
	'type'        => 'soledad-fw-size',
	'sanitize'    => 'absint',
	'ids'         => array(
		'desktop' => 'penci_footer_signup_fstitle',
		'mobile'  => 'penci_footer_signup_fstitle_mobile',
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
	'label' => __( 'Font Size for Description', 'soledad' ),
	'id'       => 'penci_footer_signup_fsdesc',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
);
$options[] = array(
	'label' => __( 'Font Size for Description', 'soledad' ),
	'id'       => 'penci_footer_signup_fsdesc_mobile',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
);
$options[] = array(
	'label' => __( 'Font Size for Inputs', 'soledad' ),
	'id'       => 'penci_footer_signup_fsinputs',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
);
$options[] = array(
	'label' => __( 'Font Size for Submit Button', 'soledad' ),
	'id'       => 'penci_footer_signup_fsisubmit',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
);
$options[] = array(
	'label' => 'Display Name Field on Footer SignUp Form',
	'id'       => 'penci_footer_signup_showemail',
	'type'     => 'soledad-fw-toggle',
	'sanitize' => 'absint',
);
$options[] = array(
	'label' => 'Footer SignUp Form Area Background Color',
	'id'       => 'penci_footer_signup_area_bg',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color',
);
$options[] = array(
	'label' => 'SignUp Form Heading Text Color',
	'id'       => 'penci_footer_signup_heading_color',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color'
);
$options[] = array(
	'label' => 'SignUp Form Description Text Color',
	'id'       => 'penci_footer_signup_des_color',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color'
);
$options[] = array(
	'label' => 'SignUp Form Email Input Border Color',
	'id'       => 'penci_footer_signup_email_border',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color'
);
$options[] = array(
	'label' => 'SignUp Form Email Input Hover Border Color',
	'id'       => 'footer_signup_email_border_hover',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color'
);
$options[] = array(
	'label' => 'SignUp Form Email Text Color',
	'id'       => 'penci_footer_signup_email_text_color',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color'
);
$options[] = array(
	'label' => 'SignUp Form Submit Background Color',
	'id'       => 'penci_footer_signup_button_bg',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color'
);
$options[] = array(
	'label' => 'SignUp Form Submit Hover Background Color',
	'id'       => 'penci_footer_signup_button_bg_hover',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color'
);
$options[] = array(
	'label' => 'SignUp Form Submit Text Color',
	'id'       => 'penci_footer_signup_button_text',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color'
);
$options[] = array(
	'label' => 'SignUp Form Submit Hover Text Color',
	'id'       => 'penci_footer_signup_button_text_hover',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'soledad-fw-color'
);
return $options;
