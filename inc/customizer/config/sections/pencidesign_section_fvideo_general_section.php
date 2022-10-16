<?php
$options   = [];
$options[] = array(
	'label'    => 'Enable Featured Video Background',
	'id'       => 'penci_enable_featured_video_bg',
	'type'     => 'soledad-fw-toggle',
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field'
);

$options[] = array(
	'label'    => 'Background Image Display Replace Video On Tablet & Mobile',
	'id'       => 'penci_featured_video_img_mobile',
	'sanitize' => 'esc_url_raw',
	'type'     => 'soledad-fw-image'
);
$options[] = array(
	'label'    => 'Video Youtube URL',
	'id'       => 'penci_featured_video_url',
	'type'     => 'soledad-fw-text',
	'sanitize' => 'esc_url_raw'
);
$options[] = array(
	'label'    => __( 'Featured Video Background Height', 'soledad' ),
	'id'       => 'penci_featured_video_height',
	'default'  => '600',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number'
);
$options[] = array(
	'label'       => __( 'Start Video At', 'soledad' ),
	'description' => __( 'Unit is second', 'soledad' ),
	'id'          => 'penci_featured_video_start',
	'default'     => '0',
	'sanitize'    => 'absint',
	'type'        => 'soledad-fw-number'
);
$options[] = array(
	'label'    => 'Add Custom Image on Video Background',
	'id'       => 'penci_featured_video_image',
	'sanitize' => 'esc_url_raw',
	'type'     => 'soledad-fw-text'
);
$options[] = array(
	'label'    => 'Heading Text On Video Background',
	'id'       => 'penci_featured_video_text_heading',
	'default'  => '',
	'sanitize' => 'penci_sanitize_textarea_field',
	'type'     => 'soledad-fw-text'
);
$options[] = array(
	'label'    => 'Sub Heading Text On Video Background',
	'id'       => 'penci_featured_video_sub_heading',
	'type'     => 'soledad-fw-textarea',
	'default'  => '',
	'sanitize' => 'penci_sanitize_textarea_field'
);
return $options;
