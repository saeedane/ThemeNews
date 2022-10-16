<?php
/* Add Sections */
$wp_customize->add_section( 'penci_ageverify_section', array(
	'title'    => esc_html__( 'Age Verify Popup', 'soledad' ),
	'priority' => 99,
	'panel'    => 'penci_general_panel',
) );

$wp_customize->add_setting( 'penci_agepopup_enable', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_agepopup_enable', array(
	'label'   => 'Enable age verification popup ',
	'section' => 'penci_ageverify_section',
	'type'    => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_agepopup_message', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_agepopup_message', array(
	'label'       => 'Popup Message',
	'description' => 'Write a message warning your visitors about age restriction on your website',
	'section'     => 'penci_ageverify_section',
	'type'        => 'textarea',
) ) );

$wp_customize->add_setting( 'penci_agepopup_error_message', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_agepopup_error_message', array(
	'label'       => 'Error Message',
	'description' => 'This message will be displayed when the visitor don\'t verify his age.',
	'section'     => 'penci_ageverify_section',
	'type'        => 'textarea',
) ) );

$wp_customize->add_setting( 'penci_agepopup_agree_text', array(
	'default'           => 'I am 18 or Older',
	'sanitize_callback' => 'penci_sanitize_tex_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_agepopup_agree_text', array(
	'label'   => 'Agree Text',
	'section' => 'penci_ageverify_section',
	'type'    => 'text',
) ) );

$wp_customize->add_setting( 'penci_agepopup_cancel_text', array(
	'default'           => 'I am Under 18',
	'sanitize_callback' => 'penci_sanitize_tex_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_agepopup_cancel_text', array(
	'label'   => 'Cancel Text',
	'section' => 'penci_ageverify_section',
	'type'    => 'text',
) ) );

/* Style & Size */
$wp_customize->add_setting( 'penci_heading_ageverify', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_heading_ageverify', array(
	'label'    => esc_html__( 'Popup Content Styles', 'soledad' ),
	'section'  => 'penci_ageverify_section',
	'settings' => 'penci_heading_ageverify',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'penci_agepopup_animation', array(
	'default'           => 'move-to-top',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_agepopup_animation', array(
	'label'   => 'Popup Open Animation',
	'section' => 'penci_ageverify_section',
	'type'    => 'select',
	'choices' => [
		'move-to-left'   => 'Move To Left',
		'move-to-right'  => 'Move To Right',
		'move-to-top'    => 'Move To Top',
		'move-to-bottom' => 'Move To Bottom',
		'fadein'         => 'Fade In',
	]
) ) );

$wp_customize->add_setting( "penci_agepopup_bgimg", array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "penci_agepopup_bgimg", [
	'label'   => 'Popup Background Image',
	'section' => 'penci_ageverify_section',
] ) );

$wp_customize->add_setting( 'penci_agepopup_bgcolor', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_agepopup_bgcolor', array(
	'label'       => 'Popup Background Color',
	'description' => 'Set background image or color for age popup',
	'section'     => 'penci_ageverify_section',
) ) );

$wp_customize->add_setting( 'penci_agepopup_bgrepeat', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_agepopup_bgrepeat', array(
	'label'   => 'Popup Background Repeat',
	'section' => 'penci_ageverify_section',
	'type'    => 'select',
	'choices' => [
		'repeat'    => 'repeat',
		'repeat-x'  => 'repeat-x',
		'repeat-y'  => 'repeat-y',
		'no-repeat' => 'no-repeat',
		'initial'   => 'initial',
		'inherit'   => 'inherit'
	]
) ) );

$wp_customize->add_setting( 'penci_agepopup_bgposition', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_agepopup_bgposition', array(
	'label'   => 'Popup Background Position',
	'section' => 'penci_ageverify_section',
	'type'    => 'select',
	'choices' => [
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
) ) );

$wp_customize->add_setting( 'penci_agepopup_bgsize', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_agepopup_bgsize', array(
	'label'   => 'Popup Background Size',
	'section' => 'penci_ageverify_section',
	'type'    => 'select',
	'choices' => [
		'auto'    => 'auto',
		'length'  => 'length',
		'cover'   => 'cover',
		'contain' => 'contain',
		'initial' => 'initial',
		'inherit' => 'inherit'
	]
) ) );

$wp_customize->add_setting( 'penci_agepopup_bgscroll', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_agepopup_bgscroll', array(
	'label'   => 'Popup Background Scroll',
	'section' => 'penci_ageverify_section',
	'type'    => 'select',
	'choices' => [
		'scroll'  => 'scroll',
		'fixed'   => 'fixed',
		'local'   => 'local',
		'initial' => 'initial',
		'inherit' => 'inherit'
	]
) ) );

$wp_customize->add_setting( 'penci_agepopup_width_mobile', array(
	'default'           => '',
	'sanitize_callback' => 'absint'
) );
$wp_customize->add_setting( 'penci_agepopup_width_desktop', array(
	'default'           => '',
	'sanitize_callback' => 'absint'
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_agepopup_bgcolor', array(
	'label'       => 'Popup Width',
	'description' => 'Set width of the age popup in pixels.',
	'section'     => 'penci_ageverify_section',
	'settings'    => array(
		'desktop' => "penci_agepopup_width_desktop",
		'mobile'  => "penci_agepopup_width_mobile",
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 9999,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 1,
			'max'  => 9999,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_agepopup_txtcolor', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_agepopup_txtcolor', array(
	'label'   => 'Popup Text Color',
	'section' => 'penci_ageverify_section',
) ) );

$wp_customize->add_setting( 'penci_agepopup_txt_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint'
) );
$wp_customize->add_setting( 'penci_agepopup_txt_msize', array(
	'default'           => '',
	'sanitize_callback' => 'absint'
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_agepopup_txt_size', array(
	'label'    => 'Popup Text Size',
	'section'  => 'penci_ageverify_section',
	'settings' => array(
		'desktop' => "penci_agepopup_txt_size",
		'mobile'  => "penci_agepopup_txt_msize",
	),
	'choices'  => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 9999,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 1,
			'max'  => 9999,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_agepopup_bordercolor', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_agepopup_bordercolor', array(
	'label'   => 'Popup Border Color',
	'section' => 'penci_ageverify_section',
) ) );

$wp_customize->add_setting( 'penci_agepopup_btn1_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_agepopup_btn1_color', array(
	'label'   => 'Agree Button Color',
	'section' => 'penci_ageverify_section',
) ) );

$wp_customize->add_setting( 'penci_agepopup_btn1_hcolor', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_agepopup_btn1_hcolor', array(
	'label'   => 'Agree Button Hover Color',
	'section' => 'penci_ageverify_section',
) ) );

$wp_customize->add_setting( 'penci_agepopup_btn1_bgcolor', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_agepopup_btn1_bgcolor', array(
	'label'   => 'Agree Button Background Color',
	'section' => 'penci_ageverify_section',
) ) );

$wp_customize->add_setting( 'penci_agepopup_btn1_hbgcolor', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_agepopup_btn1_hbgcolor', array(
	'label'   => 'Agree Button Hover Background Color',
	'section' => 'penci_ageverify_section',
) ) );

$wp_customize->add_setting( 'penci_agepopup_btn2_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_agepopup_btn2_color', array(
	'label'   => 'Cancel Button Color',
	'section' => 'penci_ageverify_section',
) ) );

$wp_customize->add_setting( 'penci_agepopup_btn2_hcolor', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_agepopup_btn2_hcolor', array(
	'label'   => 'Cancel Button Hover Color',
	'section' => 'penci_ageverify_section',
) ) );

$wp_customize->add_setting( 'penci_agepopup_btn2_bgcolor', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_agepopup_btn2_bgcolor', array(
	'label'   => 'Cancel Button Background Color',
	'section' => 'penci_ageverify_section',
) ) );

$wp_customize->add_setting( 'penci_agepopup_btn2_hbgcolor', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_agepopup_btn2_hbgcolor', array(
	'label'   => 'Cancel Button Hover Background Color',
	'section' => 'penci_ageverify_section',
) ) );

$wp_customize->add_setting( 'penci_agepopup_spacing', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new Box_Model( $wp_customize, 'penci_agepopup_spacing', [
	'type'     => 'text',
	'settings' => 'penci_agepopup_spacing',
	'label'    => __( 'Popup Spacing', 'soledad' ),
	'section'  => 'penci_ageverify_section',
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
] ) );
