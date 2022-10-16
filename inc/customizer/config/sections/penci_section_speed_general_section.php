<?php
$options   = [];
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Activate optimize CSS/JS for logged in users?',
	'id'       => 'penci_speed_disable_cssjs',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Disable Emoji and Smilies',
	'id'       => 'penci_speed_disable_emoji',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'     => false,
	'sanitize'    => 'penci_sanitize_checkbox_field',
	'label'       => 'Remove query strings from static resource',
	'description' => __( 'Remove query strings for non-login & non-administrator users', 'soledad' ),
	'id'          => 'penci_speed_remove_query_string',
	'type'        => 'soledad-fw-toggle',
);
$options[] = array(
	'default'     => false,
	'sanitize'    => 'penci_sanitize_checkbox_field',
	'label'       => 'Remove wlwmanifest Link',
	'description' => __( 'If you do not use Windows Live Writer, you can disable it.', 'soledad' ),
	'id'          => 'penci_speed_remove_wlwmanifest',
	'type'        => 'soledad-fw-toggle',
);
$options[] = array(
	'default'     => false,
	'sanitize'    => 'penci_sanitize_checkbox_field',
	'label'       => 'Remove XML-RPC and RSD Link',
	'description' => __( 'Check <a href="https://codex.wordpress.org/XML-RPC_Support" target="_blank">this post</a> and <a target="_blank" href="https://developer.wordpress.org/reference/functions/rsd_link/">this post</a> to understand what is it. In most cases, its not needed, so if you dont need it, you can remove it.', 'soledad' ),
	'id'          => 'penci_speed_remove_xml_rsd',
	'type'        => 'soledad-fw-toggle',
);
$options[] = array(
	'default'     => false,
	'sanitize'    => 'penci_sanitize_checkbox_field',
	'label'       => 'Disable Weather font icons',
	'description' => __( 'If you do not use Weather widgets, you can disable weather icons loads to your site.', 'soledad' ),
	'id'          => 'penci_speed_rweather_icons',
	'type'        => 'soledad-fw-toggle',
);
$options[] = array(
	'sanitize'    => 'sanitize_text_field',
	'label'       => esc_html__( 'Lazyload Images', 'soledad' ),
	'id'          => 'penci_section_speed_lazy_heading',
	'description' => __( "This theme supports lazyload images from itself. But, if you want to use lazyload images from another plugin - let disable the lazyload images below to get it works. But, If you want to use the optimise speed features from our theme, using the lazy load images feature from our theme is required.", "soledad" ),
	'type'        => 'soledad-fw-header',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Delay all images loading in the first screen to optimize LCP value',
	'id'       => 'penci_speed_disable_first_screen',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Disable LazyLoad Images on Category Mega Menu',
	'id'       => 'penci_topbar_mega_disable_lazy',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Disable Lazy Load Images on Sliders',
	'id'       => 'penci_disable_lazyload_slider',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Disable Lazyload Images on All Posts Layouts & Widgets',
	'id'       => 'penci_disable_lazyload_layout',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Disable Lazyload for Featured Image on Single Posts/Pages',
	'id'       => 'penci_disable_lazyload_fsingle',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Disable Lazyload Images on Single Posts',
	'id'       => 'penci_disable_lazyload_single',
	'type'     => 'soledad-fw-toggle',
);
return $options;
