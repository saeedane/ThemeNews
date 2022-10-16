<?php
$options   = [];
$options[] = array(
	'default'     => false,
	'sanitize'    => 'penci_sanitize_checkbox_field',
	'label'       => 'Enable Post Meta Overlay Featured Image',
	'description' => 'This option just apply for Standard Layout Only',
	'id'          => 'penci_standard_meta_overlay',
	'type'        => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Post Thumbnail',
	'id'       => 'penci_standard_thumbnail',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Disable Autoplay for Slider on Posts Format Gallery',
	'id'       => 'penci_standard_disable_autoplay_gallery',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Make Featured Image Auto Crop',
	'id'       => 'penci_standard_thumb_crop',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Enable Uppercase in Post Categories',
	'id'       => 'penci_standard_on_uppercase_cat',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Turn Off Uppercase in Post Title',
	'id'       => 'penci_standard_off_uppercase_title',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Share Box',
	'id'       => 'penci_standard_share_box',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Category',
	'id'       => 'penci_standard_cat',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Post Author',
	'id'       => 'penci_standard_author',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Reading Time',
	'id'       => 'penci_standard_readingtime',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Post Date',
	'id'       => 'penci_standard_date',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Comment Count',
	'id'       => 'penci_standard_comment',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Show Views Count',
	'id'       => 'penci_standard_viewcount',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Remove Line Above Post Excerpt',
	'id'       => 'penci_standard_remove_line',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Display Post Excerpt Instead of Full Content',
	'id'       => 'penci_standard_auto_excerpt',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Disable Hover Effect on "Continue Reading" Button',
	'id'       => 'penci_standard_effect_button',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Make "Continue Reading" is A Button',
	'id'       => 'penci_standard_continue_reading_button',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'     => '30',
	'sanitize'    => 'absint',
	'label' => __( 'Custom Excerpt Length', 'soledad' ),
	'id'          => 'penci_standard_excerpt_length',
	'type'        => 'soledad-fw-number'
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Header Alignment',
	'id'       => 'penci_stahea_align',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		''       => esc_html__( 'Default', 'soledad' ),
		'left'   => esc_html__( 'Left', 'soledad' ),
		'center' => esc_html__( 'Center', 'soledad' ),
		'right'  => esc_html__( 'Right', 'soledad' ),
	)
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Post Excerpt Alignment',
	'id'       => 'penci_staex_align',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		''        => esc_html__( 'Default', 'soledad' ),
		'left'    => esc_html__( 'Left', 'soledad' ),
		'center'  => esc_html__( 'Center', 'soledad' ),
		'right'   => esc_html__( 'Right', 'soledad' ),
		'justify' => esc_html__( 'Justify', 'soledad' ),
	)
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => '"Continue Reading" Button Alignment',
	'id'       => 'penci_stacoti_align',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		''       => esc_html__( 'Default', 'soledad' ),
		'left'   => esc_html__( 'Left', 'soledad' ),
		'center' => esc_html__( 'Center', 'soledad' ),
		'right'  => esc_html__( 'Right', 'soledad' ),
	)
);

return $options;
