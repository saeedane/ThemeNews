<?php
/* Add Sections */
$wp_customize->add_section( 'penci_popup_section_general', array(
	'title'    => esc_html__( 'General', 'soledad' ),
	'priority' => 5,
	'panel'    => 'penci_popup_section_panel',
) );

$wp_customize->add_section( 'penci_popup_section_display', array(
	'title'    => esc_html__( 'Popup Displays', 'soledad' ),
	'priority' => 5,
	'panel'    => 'penci_popup_section_panel',
) );

$wp_customize->add_section( 'penci_popup_section_styles', array(
	'title'    => esc_html__( 'Styles & Colors', 'soledad' ),
	'priority' => 5,
	'panel'    => 'penci_popup_section_panel',
) );

/* General */

$wp_customize->add_setting( 'penci_popup_enable', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_popup_enable', array(
	'label'       => 'Enable Promo Popup',
	'description' => 'Show promo popup to users when they enter the site.',
	'section'     => 'penci_popup_section_general',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_popup_disable_mobile', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_popup_disable_mobile', array(
	'label'       => 'Hide for Mobile Devices',
	'description' => 'You can disable this option for mobile devices completely.',
	'section'     => 'penci_popup_section_general',
	'type'        => 'checkbox',
) ) );

/* Style & Display */
$wp_customize->add_setting( 'penci_popup_show_after', array(
	'default'           => 'all_pages',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_popup_show_after', array(
	'label'   => 'Popup Event',
	'section' => 'penci_popup_section_display',
	'type'    => 'select',
	'choices' => [
		'all_pages' => 'Show on all pages, no using cookies',
		'section'   => 'Everytime user access to website',
		'time'      => 'One Time - close forever when users close popup',
		'fixtime'   => 'After Fixed Time',
	],
) ) );

$wp_customize->add_setting( 'penci_popup_html_content', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_popup_html_content', array(
	'label'   => 'Load Popup Content Using Shortcode/HTML',
	'section' => 'penci_popup_section_display',
	'type'    => 'textarea',
) ) );

$wp_customize->add_setting( 'penci_popup_block', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_popup_block', array(
	'label'   => 'Load Popup Content Using Penci Block',
	'section' => 'penci_popup_section_display',
	'description' => 'You can add new or edit a Penci Block on <a target="_blank" href="' . esc_url( admin_url( '/edit.php?post_type=penci-block' ) ) . '">this page</a>',
	'type'    => 'select',
	'choices' => penci_builder_block_list(),
) ) );

$wp_customize->add_setting( 'penci_popup_show_after_time', array(
	'default'           => '2000',
	'sanitize_callback' => 'penci_sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_popup_show_after_time', array(
	'label'       => 'Popup Delay',
	'description' => 'Show popup after some time (in milliseconds). Apply for "Some Time" Setting.',
	'section'     => 'penci_popup_section_display',
	'type'        => 'text'
) ) );

$wp_customize->add_setting( 'penci_popup_show_after_time', array(
	'default'           => '7',
	'sanitize_callback' => 'penci_sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_popup_show_after_time', array(
	'label'       => 'Show After Fixed Time',
	'description' => 'Set the number of days expire the popup cookie. Apply for "After Fixed Time" Setting.',
	'section'     => 'penci_popup_section_display',
	'type'        => 'text'
) ) );

$wp_customize->add_setting( 'penci_popup_version', array(
	'default'           => '1',
	'sanitize_callback' => 'penci_sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_popup_version', array(
	'label'       => 'Popup Version',
	'description' => 'If you apply any changes to your popup settings or content you might want to force the popup to all visitors who already closed it again. In this case, you just need to increase the banner version.',
	'section'     => 'penci_popup_section_display',
	'type'        => 'text'
) ) );

$wp_customize->add_setting( 'penci_popup_show_after_pages', array(
	'default'           => '0',
	'sanitize_callback' => 'penci_sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_popup_show_after_pages', array(
	'label'       => 'Show After Number of Pages Visited',
	'description' => 'You can choose how many pages the user should visit before the popup will be shown.',
	'section'     => 'penci_popup_section_display',
	'type'        => 'text'
) ) );

$wp_customize->add_setting( 'penci_popup_animation', array(
	'default'           => 'move-to-top',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_popup_animation', array(
	'label'   => 'Popup Open Animation',
	'section' => 'penci_popup_section_display',
	'type'    => 'select',
	'choices' => [
		'move-to-left'   => 'Move To Left',
		'move-to-right'  => 'Move To Right',
		'move-to-top'    => 'Move To Top',
		'move-to-bottom' => 'Move To Bottom',
		'fadein'         => 'Fade In',
	]
) ) );

/* Style & Color */
$wp_customize->add_setting( "penci_popup_bgimg", array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "penci_popup_bgimg", [
	'label'   => 'Popup Background Image',
	'section' => 'penci_popup_section_styles',
] ) );

$wp_customize->add_setting( 'penci_popup_bgcolor', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_popup_bgcolor', array(
	'label'       => 'Popup Background Color',
	'description' => 'Set background image or color for promo popup',
	'section'     => 'penci_popup_section_styles',
) ) );

$wp_customize->add_setting( 'penci_popup_bgrepeat', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_popup_bgrepeat', array(
	'label'   => 'Popup Background Repeat',
	'section' => 'penci_popup_section_styles',
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

$wp_customize->add_setting( 'penci_popup_bgposition', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_popup_bgposition', array(
	'label'   => 'Popup Background Position',
	'section' => 'penci_popup_section_styles',
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

$wp_customize->add_setting( 'penci_popup_bgsize', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_popup_bgsize', array(
	'label'   => 'Popup Background Size',
	'section' => 'penci_popup_section_styles',
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

$wp_customize->add_setting( 'penci_popup_bgscroll', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_popup_bgscroll', array(
	'label'   => 'Popup Background Scroll',
	'section' => 'penci_popup_section_styles',
	'type'    => 'select',
	'choices' => [
		'scroll'  => 'scroll',
		'fixed'   => 'fixed',
		'local'   => 'local',
		'initial' => 'initial',
		'inherit' => 'inherit'
	]
) ) );

$wp_customize->add_setting( 'penci_popup_width_mobile', array(
	'default'           => '',
	'sanitize_callback' => 'absint'
) );
$wp_customize->add_setting( 'penci_popup_width_desktop', array(
	'default'           => '',
	'sanitize_callback' => 'absint'
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_popup_bgcolor', array(
	'label'       => 'Popup Width',
	'description' => 'Set width of the promo popup in pixels.',
	'section'     => 'penci_popup_section_styles',
	'settings'    => array(
		'desktop' => "penci_popup_width_desktop",
		'mobile'  => "penci_popup_width_mobile",
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

$wp_customize->add_setting( 'penci_popup_txtcolor', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_popup_txtcolor', array(
	'label'   => 'Popup Text Color',
	'section' => 'penci_popup_section_styles',
) ) );

$wp_customize->add_setting( 'penci_popup_bordercolor', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_popup_bordercolor', array(
	'label'   => 'Popup Border Color',
	'section' => 'penci_popup_section_styles',
) ) );

$wp_customize->add_setting( 'penci_popup_closecolor', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_popup_closecolor', array(
	'label'   => 'Popup Close Button Color',
	'section' => 'penci_popup_section_styles',
) ) );

$wp_customize->add_setting( 'penci_popup_txt_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint'
) );
$wp_customize->add_setting( 'penci_popup_txt_msize', array(
	'default'           => '',
	'sanitize_callback' => 'absint'
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_popup_txt_size', array(
	'label'    => 'Popup Text Size',
	'section'  => 'penci_popup_section_styles',
	'settings' => array(
		'desktop' => "penci_popup_txt_size",
		'mobile'  => "penci_popup_txt_msize",
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

$wp_customize->add_setting( 'penci_popup_spacing', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new Box_Model( $wp_customize, 'penci_popup_spacing', [
	'type'     => 'text',
	'settings' => 'penci_popup_spacing',
	'label'    => __( 'Popup Spacing', 'soledad' ),
	'section'  => 'penci_popup_section_styles',
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

