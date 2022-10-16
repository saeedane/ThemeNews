<?php
/* Add Sections */
$wp_customize->add_section( 'pencidesign_new_section_general', array(
	'title'    => esc_html__( 'General Settings', 'soledad' ),
	'priority' => 1,
	'panel'    => 'penci_general_panel'
) );

$wp_customize->add_section( 'pencidesign_general_body_boxed', array(
	'title'    => esc_html__( 'Body Boxed', 'soledad' ),
	'priority' => 1,
	'panel'    => 'penci_general_panel'
) );

$wp_customize->add_section( 'pencidesign_general_archive_page', array(
	'title'    => esc_html__( 'Category, Tags, Search, Archive Pages', 'soledad' ),
	'priority' => 1,
	'panel'    => 'penci_general_panel'
) );

$wp_customize->add_section( 'pencidesign_general_search_page', array(
	'title'    => esc_html__( 'Search Pages Queries', 'soledad' ),
	'priority' => 1,
	'panel'    => 'penci_general_panel'
) );

$wp_customize->add_section( 'pencidesign_general_gdpr', array(
	'title'    => esc_html__( 'GDPR Policy', 'soledad' ),
	'priority' => 1,
	'panel'    => 'penci_general_panel'
) );

$wp_customize->add_section( 'pencidesign_general_social_sharing', array(
	'title'    => esc_html__( 'Like Posts & Social Sharing', 'soledad' ),
	'priority' => 1,
	'panel'    => 'penci_general_panel'
) );

$wp_customize->add_section( 'pencidesign_general_image_sizes', array(
	'title'    => esc_html__( 'Manage Image Sizes', 'soledad' ),
	'priority' => 1,
	'panel'    => 'penci_general_panel'
) );

$wp_customize->add_section( 'pencidesign_general_schema_markup', array(
	'title'    => esc_html__( 'Schema Markup', 'soledad' ),
	'priority' => 1,
	'panel'    => 'penci_general_panel'
) );

$wp_customize->add_section( 'pencidesign_general_extra', array(
	'title'    => esc_html__( 'Extra Options', 'soledad' ),
	'priority' => 1,
	'panel'    => 'penci_general_panel'
) );
$wp_customize->add_section( 'pencidesign_general_typography', array(
	'title'    => esc_html__( 'Typography', 'soledad' ),
	'priority' => 1,
	'panel'    => 'penci_general_panel'
) );
$wp_customize->add_section( 'pencidesign_general_colors', array(
	'title'    => esc_html__( 'Colors', 'soledad' ),
	'priority' => 1,
	'panel'    => 'penci_general_panel'
) );

/* General Settings */
$wp_customize->add_setting( 'penci_favicon', array(
	'sanitize_callback' => 'esc_url_raw'
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'upload_favicon', array(
	'label'    => 'Upload Favicon',
	'section'  => 'pencidesign_new_section_general',
	'settings' => 'penci_favicon',
) ) );

$wp_customize->add_setting( 'penci_featured_image_size', array(
	'default'           => 'horizontal',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_image_size', array(
	'label'       => 'Featured Images Type:',
	'section'     => 'pencidesign_new_section_general',
	'settings'    => 'penci_featured_image_size',
	'description' => 'This feature does not apply for Featured Sliders and some special places. For featured images on category mega menu items, please select option for it via <strong>Customize > Logo & Header</strong>',
	'type'        => 'radio',
	'choices'     => array(
		'horizontal' => 'Horizontal Size',
		'square'     => 'Square Size',
		'vertical'   => 'Vertical Size',
		'custom'     => 'Custom',
	)
) ) );

$wp_customize->add_setting( 'penci_general_featured_image_ratio', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_general_featured_image_ratio', array(
	'label'       => 'Custom Aspect Ratio for Featured Image',
	'section'     => 'pencidesign_new_section_general',
	'settings'    => 'penci_general_featured_image_ratio',
	'description' => 'The aspect ratio of an element describes the proportional relationship between its width and its height. E.g: <strong>3:2</strong>. Default is 3:2 . This option apply  for <strong>Featured Images Type is Custom</strong>',
) ) );

$wp_customize->add_setting( 'penci_image_border_radius', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'image_border_radius', array(
	'label'       => 'Custom Border Radius for Featured Images',
	'section'     => 'pencidesign_new_section_general',
	'settings'    => 'penci_image_border_radius',
	'description' => 'Fill value for border radius you want here - You can use pixel or percent. E.g:  <strong>10px</strong>  or  <strong>10%</strong>',
) ) );

$wp_customize->add_setting( 'penci_general_views_meta', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_general_views_meta', array(
	'label'    => 'Get Post Views Data From?',
	'section'  => 'pencidesign_new_section_general',
	'settings' => 'penci_general_views_meta',
	'type'     => 'select',
	'choices'  => array(
		''       => 'Default - from The Theme',
		'custom' => 'Custom Post Meta Field',
	)
) ) );

$wp_customize->add_setting( 'penci_general_views_key', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_general_views_key', array(
	'label'       => 'Post Views Meta Key',
	'section'     => 'pencidesign_new_section_general',
	'settings'    => 'penci_general_views_key',
	'description' => 'Fill the Post Views Meta Key you want to get post views for your posts here. This option applies when you selected "Get Post Views Data From" is "Custom Post Meta Field"',
) ) );

$wp_customize->add_setting( 'penci_readtime_default', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_readtime_default', array(
	'label'       => 'Set A Default Reading Time Value',
	'section'     => 'pencidesign_new_section_general',
	'settings'    => 'penci_readtime_default',
	'description' => __( 'If you want to set a default reading time value, you can put it here. E.g: 3 mins', 'soledad' ),
) ) );

$wp_customize->add_setting( 'penci_general_post_orderby', array(
	'default'           => 'date',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'general_post_orderby', array(
	'label'    => 'Sort Posts By',
	'section'  => 'pencidesign_new_section_general',
	'settings' => 'penci_general_post_orderby',
	'type'     => 'select',
	'choices'  => array(
		'date'          => 'Published Date',
		'ID'            => 'Post ID',
		'modified'      => 'Modified Date',
		'title'         => 'Post Title',
		'rand'          => 'Random Posts',
		'comment_count' => 'Comment Count'
	)
) ) );

$wp_customize->add_setting( 'penci_general_post_order', array(
	'default'           => 'DESC',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'general_post_order', array(
	'label'    => 'Select Posts Order',
	'section'  => 'pencidesign_new_section_general',
	'settings' => 'penci_general_post_order',
	'type'     => 'select',
	'choices'  => array(
		'DESC' => 'Descending',
		'ASC'  => 'Ascending '
	)
) ) );

$wp_customize->add_setting( 'penci_outline_social_icon', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_outline_social_icon', array(
	'label'       => 'Use Outline Social Icons Instead of Filled Social Icons for Your Social Media?',
	'section'     => 'pencidesign_new_section_general',
	'description' => __( 'You can check <a href="https://imgresources.s3.amazonaws.com/outline-social.png" target="_blank">this image</a> to understand what difference between outline social icons & filled social icons. Note: some icons doesn\'t support for outline', 'soledad' ),
	'settings'    => 'penci_outline_social_icon',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_outline_social_share', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_outline_social_share', array(
	'label'    => 'Use Outline Social Icons for Social Sharing?',
	'section'  => 'pencidesign_new_section_general',
	'settings' => 'penci_outline_social_share',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_separator_post_meta', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_separator_post_meta', array(
	'label'       => 'Select Separator Icon Between Posts Datas',
	'section'     => 'pencidesign_new_section_general',
	'description' => __( 'You can check <a href="https://imgresources.s3.amazonaws.com/separator-pmeta.png" target="_blank">this image</a> to understand what is "Separator Icon Between Posts Datas".', 'soledad' ),
	'settings'    => 'penci_separator_post_meta',
	'type'        => 'select',
	'choices'     => array(
		''         => 'Default ( Vertical Line )',
		'horiline' => 'Horizontal Line',
		'circle'   => 'Circle Filled',
		'bcricle'  => 'Circle Bordered',
		'square'   => 'Square Filled',
		'bsquare'  => 'Square Bordered',
		'diamond'  => 'Diamond Square Filled',
		'bdiamond' => 'Diamond Square Bordered',
	)
) ) );

$wp_customize->add_setting( 'penci_catdesign', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_catdesign', array(
	'label'       => 'Style for Post Categories Listing',
	'section'     => 'pencidesign_new_section_general',
	'description' => __( 'You can check <a href="https://imgresources.s3.amazonaws.com/cat_design.png" target="_blank">this image</a> to understand Styles for Post Categories Listing. You can change general color for it via General > Colors > Filled Categories Styles.', 'soledad' ),
	'settings'    => 'penci_catdesign',
	'type'        => 'select',
	'choices'     => array(
		''      => 'Default',
		'fill'  => 'Filled Rectangle',
		'fillr' => 'Filled Round',
		'fillc' => 'Filled Circle',
	)
) ) );

$wp_customize->add_setting( 'penci_separator_cat', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_separator_cat', array(
	'label'       => 'Select Separator Icon Between Categories',
	'section'     => 'pencidesign_new_section_general',
	'description' => __( 'You can check <a href="https://imgresources.s3.amazonaws.com/separator-cat.png" target="_blank">this image</a> to understand what is "Separator Icon Between Categories". It does not apply to Filled styles above.', 'soledad' ),
	'settings'    => 'penci_separator_cat',
	'type'        => 'select',
	'choices'     => array(
		''         => 'Default ( Diamond Square Bordered )',
		'verline'  => 'Vertical Line',
		'horiline' => 'Horizontal Line',
		'circle'   => 'Circle Filled',
		'bcricle'  => 'Circle Bordered',
		'square'   => 'Square Filled',
		'bsquare'  => 'Square Bordered',
		'diamond'  => 'Diamond Square Filled',
	)
) ) );

$wp_customize->add_setting( 'penci_disable_breadcrumb', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'disable_breadcrumb', array(
	'label'    => 'Disable Breadcrumb',
	'section'  => 'pencidesign_new_section_general',
	'settings' => 'penci_disable_breadcrumb',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_show_modified_date', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'show_modified_date', array(
	'label'    => 'Display Modified Date Replace with Published Date',
	'section'  => 'pencidesign_new_section_general',
	'settings' => 'penci_show_modified_date',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_date_format', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_date_format', array(
	'label'    => 'Select Date Format',
	'section'  => 'pencidesign_new_section_general',
	'settings' => 'penci_date_format',
	'type'     => 'select',
	'choices'  => array(
		''        => 'Default ( By Day, Month & Year )',
		'timeago' => 'Time Ago Format',
	)
) ) );

$wp_customize->add_setting( 'penci_enable_smooth_scroll', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_smooth_scroll', array(
	'label'    => 'Enable Smooth Scroll',
	'section'  => 'pencidesign_new_section_general',
	'settings' => 'penci_enable_smooth_scroll',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_page_navigation_numbers', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_navigation_numbers', array(
	'label'    => 'Enable Page Navigation Numbers',
	'section'  => 'pencidesign_new_section_general',
	'settings' => 'penci_page_navigation_numbers',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_page_navigation_align', array(
	'default'           => 'align-left',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_navigation_align', array(
	'label'    => 'Page Navigation Numbers Alignment',
	'section'  => 'pencidesign_new_section_general',
	'settings' => 'penci_page_navigation_align',
	'type'     => 'select',
	'choices'  => array(
		'align-left'   => 'Left',
		'align-right'  => 'Right',
		'align-center' => 'Center',
	)
) ) );

$wp_customize->add_setting( 'penci_sidebar_sticky', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_sticky', array(
	'label'    => 'Enable Sticky Sidebar',
	'section'  => 'pencidesign_new_section_general',
	'settings' => 'penci_sidebar_sticky',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_dis_sidebar_bbforums', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_dis_sidebar_bbforums', array(
	'label'    => 'Disable Sidebar for BBPress Forums',
	'section'  => 'pencidesign_new_section_general',
	'settings' => 'penci_dis_sidebar_bbforums',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_dis_sidebar_bbforum', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_dis_sidebar_bbforum', array(
	'label'    => 'Disable Sidebar for BBPress Forum',
	'section'  => 'pencidesign_new_section_general',
	'settings' => 'penci_dis_sidebar_bbforum',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_dis_sidebar_bbtoppic', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_dis_sidebar_bbtoppic', array(
	'label'    => 'Disable Sidebar for BBPress Topic',
	'section'  => 'pencidesign_new_section_general',
	'settings' => 'penci_dis_sidebar_bbtoppic',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'enable_pri_cat_yoast_seo', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_pri_cat_yoast_seo', array(
	'label'    => 'Show Only Primary Category from "Yoast SEO" or "Rank Math" plugin for Breadcrumb',
	'section'  => 'pencidesign_new_section_general',
	'settings' => 'enable_pri_cat_yoast_seo',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_show_pricat_yoast_only', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_show_pricat_yoast_only', array(
	'label'       => 'Show Primary Category from "Yoast SEO" or "Rank Math" only',
	'section'     => 'pencidesign_new_section_general',
	'description' => __( 'If you don\'t use "Yoast SEO" or "Rank Math" plugin, it will be display the first category on the list categories of the posts.', 'soledad' ),
	'settings'    => 'penci_show_pricat_yoast_only',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_show_pricat_first_yoast', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_show_pricat_first_yoast', array(
	'label'    => 'Show Primary Category from "Yoast SEO" or "Rank Math" at First ( When you display full categories )',
	'section'  => 'pencidesign_new_section_general',
	'settings' => 'penci_show_pricat_first_yoast',
	'type'     => 'checkbox',
) ) );

/* Body Boxed Pages */
$wp_customize->add_setting( 'penci_body_boxed_layout', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'body_boxed_layout', array(
	'label'       => 'Enable Body Boxed Layout',
	'section'     => 'pencidesign_general_body_boxed',
	'description' => 'This option does not apply when you enable vertical navigation',
	'settings'    => 'penci_body_boxed_layout',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_body_boxed_bg_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'body_boxed_bg_color', array(
	'label'    => 'Background Color for Body Boxed',
	'section'  => 'pencidesign_general_body_boxed',
	'settings' => 'penci_body_boxed_bg_color',
) ) );

$wp_customize->add_setting( 'penci_body_boxed_bg_image', array(
	'sanitize_callback' => 'esc_url_raw'
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'body_boxed_bg_image', array(
	'label'    => 'Background Image for Body Boxed',
	'section'  => 'pencidesign_general_body_boxed',
	'settings' => 'penci_body_boxed_bg_image',
) ) );

$wp_customize->add_setting( 'penci_body_boxed_bg_repeat', array(
	'default'           => 'no-repeat',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'body_boxed_bg_repeat', array(
	'label'    => 'Background Body Boxed Repeat',
	'section'  => 'pencidesign_general_body_boxed',
	'settings' => 'penci_body_boxed_bg_repeat',
	'type'     => 'select',
	'choices'  => array(
		'no-repeat' => 'No Repeat',
		'repeat'    => 'Repeat'
	)
) ) );

$wp_customize->add_setting( 'penci_body_boxed_bg_attachment', array(
	'default'           => 'fixed',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'body_boxed_bg_attachment', array(
	'label'    => 'Background Body Boxed Attachment',
	'section'  => 'pencidesign_general_body_boxed',
	'settings' => 'penci_body_boxed_bg_attachment',
	'type'     => 'select',
	'choices'  => array(
		'fixed'  => 'Fixed',
		'scroll' => 'Scroll',
		'local'  => 'Local'
	)
) ) );

$wp_customize->add_setting( 'penci_body_boxed_bg_size', array(
	'default'           => 'cover',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'body_boxed_bg_size', array(
	'label'    => 'Background Body Boxed Size',
	'section'  => 'pencidesign_general_body_boxed',
	'settings' => 'penci_body_boxed_bg_size',
	'type'     => 'select',
	'choices'  => array(
		'cover' => 'Cover',
		'auto'  => 'Auto',
	)
) ) );

/* Arhive Pages */
$wp_customize->add_setting( 'penci_archive_layout', array(
	'default'           => 'standard',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'archive_layout', array(
	'label'    => 'Category, Tag, Search, Archive Layout',
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_archive_layout',
	'type'     => 'select',
	'choices'  => array(
		'standard'         => 'Standard Posts',
		'classic'          => 'Classic Posts',
		'overlay'          => 'Overlay Posts',
		'featured'         => 'Featured Boxed Posts',
		'grid'             => 'Grid Posts',
		'grid-2'           => 'Grid 2 Columns Posts',
		'masonry'          => 'Grid Masonry Posts',
		'masonry-2'        => 'Grid Masonry 2 Columns Posts',
		'list'             => 'List Posts',
		'small-list'       => 'Small List Posts',
		'boxed-1'          => 'Boxed Posts Style 1',
		'boxed-2'          => 'Boxed Posts Style 2',
		'mixed'            => 'Mixed Posts',
		'mixed-2'          => 'Mixed Posts Style 2',
		'mixed-3'          => 'Mixed Posts Style 3',
		'mixed-4'          => 'Mixed Posts Style 4',
		'photography'      => 'Photography Posts',
		'standard-grid'    => '1st Standard Then Grid',
		'standard-grid-2'  => '1st Standard Then Grid 2 Columns',
		'standard-list'    => '1st Standard Then List',
		'standard-boxed-1' => '1st Standard Then Boxed',
		'classic-grid'     => '1st Classic Then Grid',
		'classic-grid-2'   => '1st Classic Then Grid 2 Columns',
		'classic-list'     => '1st Classic Then List',
		'classic-boxed-1'  => '1st Classic Then Boxed',
		'overlay-grid'     => '1st Overlay Then Grid',
		'overlay-list'     => '1st Overlay Then List'
	)
) ) );

$penci_featured_cat_layout = [
	''                         => esc_html__( 'None', 'soledad' ),
	'style-1 penci-grid-col-2' => esc_html__( 'Grid 2 Columns', 'soledad' ),
	'style-1 penci-grid-col-3' => esc_html__( 'Grid 3 Columns', 'soledad' ),
	'style-1 penci-grid-col-4' => esc_html__( 'Grid 4 Columns', 'soledad' ),
	'style-1 penci-grid-col-5' => esc_html__( 'Grid 5 Columns', 'soledad' ),
	'style-3'                  => esc_html__( 'Featured 3', 'soledad' ),
	'style-4'                  => esc_html__( 'Featured 4', 'soledad' ),
	'style-5'                  => esc_html__( 'Featured 5', 'soledad' ),
	'style-6'                  => esc_html__( 'Featured 6', 'soledad' ),
	'style-7'                  => esc_html__( 'Featured 7', 'soledad' ),
	'style-8'                  => esc_html__( 'Featured 8', 'soledad' ),
	'style-9'                  => esc_html__( 'Featured 9', 'soledad' ),
	'style-10'                 => esc_html__( 'Featured 10', 'soledad' ),
	'style-11'                 => esc_html__( 'Featured 11', 'soledad' ),
	'style-12'                 => esc_html__( 'Featured 12', 'soledad' ),
	'style-13'                 => esc_html__( 'Featured 13', 'soledad' ),
	'style-14'                 => esc_html__( 'Featured 14', 'soledad' ),
	'style-15'                 => esc_html__( 'Featured 15', 'soledad' ),
	'style-16'                 => esc_html__( 'Featured 16', 'soledad' ),
	'style-17'                 => esc_html__( 'Featured 17', 'soledad' ),
	'style-18'                 => esc_html__( 'Featured 18', 'soledad' ),
	'style-19'                 => esc_html__( 'Featured 19', 'soledad' ),
	'style-20'                 => esc_html__( 'Featured 20', 'soledad' ),
	'style-21'                 => esc_html__( 'Featured 21', 'soledad' ),
	'style-22'                 => esc_html__( 'Featured 22', 'soledad' ),
];

/* Archive Featured Settings */
$wp_customize->add_setting( 'penci_heading_featured_archi', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_heading_featured_archi', array(
	'label'    => esc_html__( 'Show Featured Posts', 'soledad' ),
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_heading_featured_archi',
	'type'     => 'heading',
) ) );

/* Category Featured */
$wp_customize->add_setting( 'penci_cat_featured_layout', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_cat_featured_layout', array(
	'label'   => 'Category Pages Featured Style',
	'section' => 'pencidesign_general_archive_page',
	'type'    => 'select',
	'choices' => $penci_featured_cat_layout
) ) );

$wp_customize->add_setting( 'penci_category_featured_height', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'penci_category_featured_mheight', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_category_featured_height', array(
	'description'     => __( 'Height for Featured Styles', 'soledad' ),
	'sub_description' => __( 'for Featured Posts on Category Pages', 'soledad' ),
	'section'         => 'pencidesign_general_archive_page',
	'settings'        => array(
		'desktop' => 'penci_category_featured_height',
		'mobile'  => 'penci_category_featured_mheight',
	),
	'choices'         => array(
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
) ) );

$wp_customize->add_setting( 'penci_cat_featured_theight', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_cat_featured_theight', array(
	'description'     => __( 'Height for Featured Styles on Tablet', 'soledad' ),
	'sub_description' => __( 'for Featured Posts on Category Pages', 'soledad' ),
	'section'         => 'pencidesign_general_archive_page',
	'settings'        => array(
		'desktop' => 'penci_cat_featured_theight',
	),
	'choices'         => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );


/* Tags Featured */
$wp_customize->add_setting( 'penci_tag_featured_layout', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_tag_featured_layout', array(
	'label'   => 'Tag Pages Featured Style',
	'section' => 'pencidesign_general_archive_page',
	'type'    => 'select',
	'choices' => $penci_featured_cat_layout
) ) );

$wp_customize->add_setting( 'penci_tag_featured_height', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'penci_tag_featured_mheight', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_tag_featured_height', array(
	'description'     => __( 'Height for Featured Styles', 'soledad' ),
	'sub_description' => __( 'for Featured Posts on Tags Pages', 'soledad' ),
	'section'         => 'pencidesign_general_archive_page',
	'settings'        => array(
		'desktop' => 'penci_tag_featured_height',
		'mobile'  => 'penci_tag_featured_mheight',
	),
	'choices'         => array(
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
) ) );

$wp_customize->add_setting( 'penci_tag_featured_theight', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_tag_featured_theight', array(
	'description'     => __( 'Height for Featured Styles on Tablet', 'soledad' ),
	'sub_description' => __( 'for Featured Posts on Tags Pages', 'soledad' ),
	'section'         => 'pencidesign_general_archive_page',
	'settings'        => array(
		'desktop' => 'penci_tag_featured_theight',
	),
	'choices'         => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_arf_orderby', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_arf_orderby', array(
	'label'   => 'Featured Posts Sort By',
	'section' => 'pencidesign_general_archive_page',
	'type'    => 'select',
	'choices' => [
		''              => 'Published Date',
		'modified'      => 'Modified Date',
		'comment_count' => 'Comment Count',
		'popular'       => 'Most Viewed Posts All Time',
		'popular7'      => 'Most Viewed Posts Once Weekly',
		'popular_month' => 'Most Viewed Posts Once a Month',
	]
) ) );

$wp_customize->add_setting( 'penci_arf_sortby', array(
	'default'           => 'desc',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_arf_sortby', array(
	'label'   => 'Featured Posts Order By',
	'section' => 'pencidesign_general_archive_page',
	'type'    => 'select',
	'choices' => [
		'desc' => 'DESC',
		'asc'  => 'ASC',
	]
) ) );

$wp_customize->add_setting( 'penci_arf_img_ratio', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_arf_img_ratio', array(
	'description' => __( 'Image Ratio for Grid Layout', 'soledad' ),
	'section'     => 'pencidesign_general_archive_page',
	'settings'    => array(
		'desktop' => 'penci_arf_img_ratio',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
			'edit' => true,
			'unit' => '%',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_arf_height', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'penci_arf_mheight', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_arf_height', array(
	'description' => __( 'Height for Featured Styles', 'soledad' ),
	'section'     => 'pencidesign_general_archive_page',
	'settings'    => array(
		'desktop' => 'penci_arf_height',
		'mobile'  => 'penci_arf_mheight',
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
) ) );

$wp_customize->add_setting( 'penci_arf_theight', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_arf_theight', array(
	'description' => __( 'Height for Featured Styles on Tablet', 'soledad' ),
	'section'     => 'pencidesign_general_archive_page',
	'settings'    => array(
		'desktop' => 'penci_arf_theight',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_arf_gap', array(
	'default'           => '4',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_arf_gap', array(
	'description' => __( 'Gap Between Featured Posts', 'soledad' ),
	'section'     => 'pencidesign_general_archive_page',
	'settings'    => array(
		'desktop' => 'penci_arf_gap',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_arf_titlength', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_arf_titlength', array(
	'description' => __( 'Custom Title Words Length', 'soledad' ),
	'section'     => 'pencidesign_general_archive_page',
	'settings'    => array(
		'desktop' => 'penci_arf_titlength',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
			'edit' => true,
			'unit' => '',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_arcf_cat', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_arcf_cat', array(
	'label'    => 'Hide Categories',
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_arcf_cat',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_arcf_date', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_arcf_date', array(
	'label'    => 'Hide Post Date',
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_arcf_date',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_arcf_author', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_arcf_author', array(
	'label'    => 'Show Post Author',
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_arcf_author',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_arcf_cm', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_arcf_cm', array(
	'label'    => 'Show Comments Count',
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_arcf_cm',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_arcf_view', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_arcf_view', array(
	'label'    => 'Show Views Count',
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_arcf_view',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_arcf_reading', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_arcf_reading', array(
	'label'    => 'Show Reading Time',
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_arcf_reading',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_arcf_mcat', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_arcf_mcat', array(
	'label'    => 'Hide Categories on Mobile',
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_arcf_mcat',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_arcf_mmeta', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_arcf_mmeta', array(
	'label'    => 'Hide Post Meta on Mobile',
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_arcf_mmeta',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_arcf_adbelow', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_arcf_adbelow', array(
	'label'       => 'Google Adsense/Custom HTML Code Display Below Featured Posts',
	'section'     => 'pencidesign_general_archive_page',
	'settings'    => 'penci_arcf_adbelow',
	'type'        => 'textarea',
) ) );

$wp_customize->add_setting( 'penci_arf_title', array(
	'default'           => 'Latest in {name}',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_arf_title', array(
	'label'       => 'Latest Posts Heading Title Below the Featured Area',
	'description' => 'Replace your category/tag name with {name} string.',
	'section'     => 'pencidesign_general_archive_page',
	'type'        => 'text',
) ) );

$wp_customize->add_setting( 'penci_arf_title_style', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_arf_title_style', array(
	'label'   => 'Select Latest Posts Title Heading Style',
	'section' => 'pencidesign_general_archive_page',
	'type'    => 'select',
	'choices' => array(
		''                  => 'Follow Title Box Style',
		'style-1'           => 'Default Style',
		'style-2'           => 'Style 2',
		'style-3'           => 'Style 3',
		'style-4'           => 'Style 4',
		'style-5'           => 'Style 5',
		'style-6'           => 'Style 6 - Only Text',
		'style-7'           => 'Style 7',
		'style-9'           => 'Style 8',
		'style-8'           => 'Style 9 - Custom Background Image',
		'style-10'          => 'Style 10',
		'style-11'          => 'Style 11',
		'style-12'          => 'Style 12',
		'style-13'          => 'Style 13',
		'style-14'          => 'Style 14',
		'style-15'          => 'Style 15',
		'style-16'          => 'Style 16',
		'style-2 style-17'  => 'Style 17',
		'style-18'          => 'Style 18',
		'style-18 style-19' => 'Style 19',
		'style-18 style-20' => 'Style 20',
	)
) ) );


/* Font size & color */
$wp_customize->add_setting( 'penci_heading_featured_fzc', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_heading_featured_fzc', array(
	'label'    => esc_html__( 'Featured Posts Font Size & Colors', 'soledad' ),
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_heading_featured_fzc',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'penci_arf_catfs', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_arf_catfs', array(
	'description' => __( 'Font Size for Post Categories', 'soledad' ),
	'section'     => 'pencidesign_general_archive_page',
	'settings'    => array(
		'desktop' => 'penci_arf_catfs',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_arf_t_fs', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'penci_arf_t_mfs', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_arf_t_fs', array(
	'description' => __( 'Big Grid Font Size for Post Title', 'soledad' ),
	'section'     => 'pencidesign_general_archive_page',
	'settings'    => array(
		'desktop' => 'penci_arf_t_fs',
		'mobile'  => 'penci_arf_t_mfs',
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
) ) );

$wp_customize->add_setting( 'penci_arf_t_bfs', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'penci_arf_t_bmfs', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_arf_t_bfs', array(
	'description' => __( 'Font Size for Post Title on Big Items', 'soledad' ),
	'section'     => 'pencidesign_general_archive_page',
	'settings'    => array(
		'desktop' => 'penci_arf_t_bfs',
		'mobile'  => 'penci_arf_t_bmfs',
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
) ) );

$wp_customize->add_setting( 'penci_arf_meta_fs', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_arf_meta_fs', array(
	'description' => __( 'Big Grid Font Size for Post Meta', 'soledad' ),
	'section'     => 'pencidesign_general_archive_page',
	'settings'    => array(
		'desktop' => 'penci_arf_meta_fs',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

/* Color */
$wp_customize->add_setting( 'penci_arf_cat_cl', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_arf_cat_cl', array(
	'label'   => 'Post Categories Color',
	'section' => 'pencidesign_general_archive_page',
) ) );

$wp_customize->add_setting( 'penci_arf_cat_hcl', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_arf_cat_hcl', array(
	'label'   => 'Post Categories Hover Color',
	'section' => 'pencidesign_general_archive_page',
) ) );

$wp_customize->add_setting( 'penci_arf_t_cl', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_arf_t_cl', array(
	'label'   => 'Post Title Color',
	'section' => 'pencidesign_general_archive_page',
) ) );

$wp_customize->add_setting( 'penci_arf_t_hcl', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_arf_t_hcl', array(
	'label'   => 'Post Title Hover Color',
	'section' => 'pencidesign_general_archive_page',
) ) );

$wp_customize->add_setting( 'penci_arf_meta_cl', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_arf_meta_cl', array(
	'label'   => 'Post Meta Color',
	'section' => 'pencidesign_general_archive_page',
) ) );

$wp_customize->add_setting( 'penci_arf_meta_lcl', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_arf_meta_lcl', array(
	'label'   => 'Post Meta Links Color',
	'section' => 'pencidesign_general_archive_page',
) ) );

$wp_customize->add_setting( 'penci_arf_meta_hcl', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_arf_meta_hcl', array(
	'label'   => 'Post Meta Links Hover Color',
	'section' => 'pencidesign_general_archive_page',
) ) );

// End Category Featured
$wp_customize->add_setting( 'penci_heading_other_archi', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_heading_other_archi', array(
	'label'    => esc_html__( 'Other Settings', 'soledad' ),
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_heading_other_archi',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'penci_archive_nav_ajax', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_archive_nav_ajax', array(
	'label'    => 'Enable Load More Button for Categories, Tags, Search, Archive Pages',
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_archive_nav_ajax',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_archive_nav_scroll', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_archive_nav_scroll', array(
	'label'    => 'Enable Infinite Scroll for Categories, Tags, Search, Archive Pages',
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_archive_nav_scroll',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_arc_number_load_more', array(
	'default'           => '6',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_arc_number_load_more', array(
	'description' => __( 'Number of Posts for Each Time Load More Posts', 'soledad' ),
	'section'     => 'pencidesign_general_archive_page',
	'settings'    => array(
		'desktop' => 'penci_arc_number_load_more',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
			'edit' => true,
			'unit' => '',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_archive_move_desc', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_archive_move_desc', array(
	'label'    => 'Move Description of Category, Tag, Archive Pages Below Post Listings',
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_archive_move_desc',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_archive_descalign', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_archive_descalign', array(
	'label'    => 'Category, Tags, Archive Description Align',
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_archive_descalign',
	'type'     => 'select',
	'choices'  => array(
		''       => 'Default',
		'left'   => 'Left',
		'right'  => 'Right',
		'center' => 'Center',
	)
) ) );

$wp_customize->add_setting( 'penci_sidebar_archive', array(
	'default'           => true,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_archive', array(
	'label'    => 'Enable Sidebar On Archives',
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_sidebar_archive',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_left_sidebar_archive', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'left_sidebar_archive', array(
	'label'    => 'Enable Left Sidebar On Archives',
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_left_sidebar_archive',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_two_sidebar_archive', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'two_sidebar_archive', array(
	'label'    => 'Enable Two Sidebars On Archives',
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_two_sidebar_archive',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_remove_cat_words', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'remove_cat_words', array(
	'label'    => 'Remove "Category:" Words on Category Pages',
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_remove_cat_words',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_remove_tag_words', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'remove_tag_words', array(
	'label'    => 'Remove "Tag:" Words on Tag Pages',
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_remove_tag_words',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_sidebar_name_category', array(
	'default'           => 'main-sidebar',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_name_category', array(
	'label'       => 'Custom Sidebar Display on Category Pages',
	'section'     => 'pencidesign_general_archive_page',
	'settings'    => 'penci_sidebar_name_category',
	'description' => 'If sidebar your choice is empty, will display Main Sidebar',
	'type'        => 'select',
	'choices'     => get_list_custom_sidebar_option()
) ) );

$wp_customize->add_setting( 'penci_sidebar_left_name_category', array(
	'default'           => 'main-sidebar-left',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_left_name_category', array(
	'label'       => 'Custom Sidebar Left Display on Category Pages',
	'section'     => 'pencidesign_general_archive_page',
	'settings'    => 'penci_sidebar_left_name_category',
	'description' => 'If sidebar your choice is empty, will display Main Sidebar Left. This option just use when you enable 2 sidebars for Archive pages',
	'type'        => 'select',
	'choices'     => get_list_custom_sidebar_option()
) ) );

$wp_customize->add_setting( 'penci_archive_ad_above', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'archive_ad_above', array(
	'label'       => 'Google Adsense/Custom HTML Code to Display Above Posts Layout for Archive Pages',
	'section'     => 'pencidesign_general_archive_page',
	'settings'    => 'penci_archive_ad_above',
	'description' => 'You can display google adsense/custom HTML code above posts on category, tags, search, archive page by use this option',
	'type'        => 'textarea',
) ) );

$wp_customize->add_setting( 'penci_archive_ad_below', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'archive_ad_below', array(
	'label'       => 'Google Adsense/Custom HTML Code to Display Below Posts Layout for Archive Pages',
	'section'     => 'pencidesign_general_archive_page',
	'settings'    => 'penci_archive_ad_below',
	'description' => 'You can display google adsense/custom HTML code below posts on category, tags, search, archive page by use this option',
	'type'        => 'textarea',
) ) );

$wp_customize->add_setting( 'penci_heading_infeed_ads_archi', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_heading_infeed_ads_archi', array(
	'label'    => esc_html__( 'In-Feed Ads', 'soledad' ),
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_heading_infeed_ads_archi',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'penci_infeedads_archi_num', array(
	'default'           => '3',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_infeedads_archi_num', array(
	'description' => __( 'Insert In-feed Ads Code After Every How Many Posts?', 'soledad' ),
	'section'     => 'pencidesign_general_archive_page',
	'settings'    => array(
		'desktop' => 'penci_infeedads_archi_num',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
			'edit' => true,
			'unit' => '',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_infeedads_archi_code', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_infeedads_archi_code', array(
	'label'       => 'In-feed Ads Code/HTML',
	'section'     => 'pencidesign_general_archive_page',
	'description' => __( 'Please use normal responsive ads here to get the best results - the in-feed ads can\'t work with auto-ads because auto-ads will randomly place your ads on random places on the pages.', 'soledad' ),
	'settings'    => 'penci_infeedads_archi_code',
	'type'        => 'textarea',
) ) );

$wp_customize->add_setting( 'penci_infeedads_archi_layout', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_infeedads_archi_layout', array(
	'label'    => 'In-feed Ads Layout Type',
	'section'  => 'pencidesign_general_archive_page',
	'settings' => 'penci_infeedads_archi_layout',
	'type'     => 'select',
	'choices'  => array(
		''     => 'Follow Current Layout',
		'full' => 'Full Width',
	)
) ) );

/* Search Queries */
$wp_customize->add_setting( 'penci_include_search_page', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'include_search_page', array(
	'label'    => 'Include Pages on Search Results Page',
	'section'  => 'pencidesign_general_search_page',
	'settings' => 'penci_include_search_page',
	'type'     => 'checkbox',
) ) );

/*$wp_customize->add_setting( 'penci_include_search_post_type', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_multiple_checkbox'
) );
$wp_customize->add_control( new Penci_Customize_Control_Checkbox_Multiple( $wp_customize, 'penci_include_search_post_type', array(
	'label'   => 'Select post type include in search page',
	'section' => 'pencidesign_general_search_page',
	'choices' => penci_get_publish_post_types_for_search(),
) ) );*/

/* GDPR Policy */
$wp_customize->add_setting( 'penci_disable_default_fonts', array(
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_disable_default_fonts', array(
	'label'    => esc_html__( 'Remove all default google fonts - load default fonts from located hosting', 'soledad' ),
	'section'  => 'pencidesign_general_gdpr',
	'settings' => 'penci_disable_default_fonts',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_disable_all_fonts', array(
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_disable_all_fonts', array(
	'label'       => esc_html__( 'Remove all default fonts loads by the theme from located hosting', 'soledad' ),
	'section'     => 'pencidesign_general_gdpr',
	'settings'    => 'penci_disable_all_fonts',
	'description' => 'This option only works when you check to option "Remove all default google fonts" above.',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_enable_cookie_law', array(
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_enable_cookie_law', array(
	'label'    => esc_html__( 'Enable Cookie Law Policy PopUp At The Footer', 'soledad' ),
	'section'  => 'pencidesign_general_gdpr',
	'settings' => 'penci_enable_cookie_law',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_show_cookie_law', array(
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_show_cookie_law', array(
	'label'    => esc_html__( 'Remove "Privacy & Cookies Policy" notice after Accept clicked', 'soledad' ),
	'section'  => 'pencidesign_general_gdpr',
	'settings' => 'penci_show_cookie_law',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_gprd_desc', array(
	'default'           => penci_default_setting_customizer( 'penci_gprd_desc' ),
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_gprd_desc', array(
	'label'    => esc_html__( 'Custom Description on Cookie Law PopUp', 'soledad' ),
	'section'  => 'pencidesign_general_gdpr',
	'settings' => 'penci_gprd_desc',
	'type'     => 'textarea',
) ) );

$wp_customize->add_setting( 'penci_gprd_btn_accept', array(
	'default'           => penci_default_setting_customizer( 'penci_gprd_btn_accept' ),
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_gprd_btn_accept', array(
	'label'    => esc_html__( 'Custom Text "Accept"', 'soledad' ),
	'section'  => 'pencidesign_general_gdpr',
	'settings' => 'penci_gprd_btn_accept',
) ) );

$wp_customize->add_setting( 'penci_gprd_rmore', array(
	'default'           => penci_default_setting_customizer( 'penci_gprd_rmore' ),
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_gprd_rmore', array(
	'label'    => esc_html__( 'Custom Text "Read More"', 'soledad' ),
	'section'  => 'pencidesign_general_gdpr',
	'settings' => 'penci_gprd_rmore',
) ) );

$wp_customize->add_setting( 'penci_gprd_rmore_link', array(
	'default'           => penci_default_setting_customizer( 'penci_gprd_rmore_link' ),
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_gprd_rmore_link', array(
	'label'    => esc_html__( 'Custom URL on "Read More" Button', 'soledad' ),
	'section'  => 'pencidesign_general_gdpr',
	'settings' => 'penci_gprd_rmore_link',
) ) );

$wp_customize->add_setting( 'penci_gprd_policy_text', array(
	'default'           => penci_default_setting_customizer( 'penci_gprd_policy_text' ),
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_gprd_policy_text', array(
	'label'    => esc_html__( 'Custom Text "Privacy & Cookies Policy"', 'soledad' ),
	'section'  => 'pencidesign_general_gdpr',
	'settings' => 'penci_gprd_policy_text',
) ) );

$options_color_gprd = array(
	'penci_gprd_bgcolor'     => esc_html__( 'Background For Cookie Law Policy PopUp', 'soledad' ),
	'penci_gprd_color'       => esc_html__( 'Text Color For Cookie Law Policy PopUp', 'soledad' ),
	'penci_gprd_btn_color'   => esc_html__( 'Text Color For Accept Button', 'soledad' ),
	'penci_gprd_btn_bgcolor' => esc_html__( 'Background For Accept Button', 'soledad' ),
	'penci_gprd_border'      => esc_html__( 'Border Color For Cookie Law Policy PopUp', 'soledad' ),
);
foreach ( $options_color_gprd as $key => $label ) {
	$wp_customize->add_setting( $key, array(
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $key, array(
		'label'    => $label,
		'section'  => 'pencidesign_general_gdpr',
		'settings' => $key,
	) ) );
}

/* Social Sharing */
$list_block_social = array(
	'plike'       => array( esc_html__( 'Hide Like Post', 'soledad' ), '' ),
	'facebook'    => array( esc_html__( 'Hide Facebook Share Button', 'soledad' ), '' ),
	'twitter'     => array( esc_html__( 'Hide Twitter Share Button', 'soledad' ), '' ),
	'pinterest'   => array( esc_html__( 'Hide Pinterest Share Button', 'soledad' ), '' ),
	'linkedin'    => array( esc_html__( 'Hide Linkedin Share Button', 'soledad' ), '' ),
	'tumblr'      => array( esc_html__( 'Hide Tumblr Share Button', 'soledad' ), '' ),
	/* 'messenger'        => array( esc_html__( 'Hide Share Messenger Button', 'soledad' ), '' ), */
	'vk'          => array( esc_html__( 'Hide VKontakte Share Button', 'soledad' ), '' ),
	'ok'          => array( esc_html__( 'Hide Odnoklassniki Share Button', 'soledad' ), '' ),
	'reddit'      => array( esc_html__( 'Hide Reddit Share Button', 'soledad' ), '' ),
	'stumbleupon' => array( esc_html__( 'Hide Stumbleupon Share Button', 'soledad' ), '' ),
	'whatsapp'    => array(
		esc_html__( 'Hide Whatsapp Share Button', 'soledad' ),
		esc_html__( 'Works for Mobile Only', 'soledad' )
	),
	'telegram'    => array(
		esc_html__( 'Hide Telegram Share Button', 'soledad' ),
		esc_html__( 'Works for Mobile Only', 'soledad' )
	),
	'line'        => array(
		esc_html__( 'Hide LINE Share Button', 'soledad' ),
		esc_html__( 'Works for Mobile Only', 'soledad' )
	),
	'pocket'      => array( esc_html__( 'Hide Pocket Share Button', 'soledad' ), '' ),
	'skype'       => array( esc_html__( 'Hide Skype Share Button', 'soledad' ), '' ),
	'viber'       => array(
		esc_html__( 'Hide Viber Share Button', 'soledad' ),
		esc_html__( 'Works for Mobile Only', 'soledad' )
	),
	'email'       => array( esc_html__( 'Hide Email Share Button', 'soledad' ), '' ),
);

foreach ( $list_block_social as $social_id => $social_label ) {

	$default = '';
	if ( in_array( $social_id, array(
		'messenger',
		'vk',
		'ok',
		'pocket',
		'skype',
		'viber',
		'linkedin',
		'tumblr',
		'reddit',
		'stumbleupon',
		'whatsapp',
		'telegram',
		'line'
	) ) ) {
		$default = 1;
	}

	$social_id = 'penci__hide_share_' . $social_id;
	$wp_customize->add_setting( $social_id, array(
		'sanitize_callback' => 'penci_sanitize_checkbox_field',
		'default'           => $default
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		$social_id,
		array(
			'label'       => $social_label[0],
			'description' => $social_label[1],
			'section'     => 'pencidesign_general_social_sharing',
			'type'        => 'checkbox',
			'settings'    => $social_id,
		)
	) );

}
$wp_customize->add_setting( 'penci_post_twitter_share_text', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_twitter_share_text', array(
	'label'       => 'Custom Sharing Text for Twitter',
	'description' => __( 'Custom prefix text on preview share of Twitter', 'soledad' ),
	'section'     => 'pencidesign_general_social_sharing',
	'settings'    => 'penci_post_twitter_share_text',
	'description' => '',
	'type'        => 'textarea',
) ) );

/* Manage Image Sizes */
$list_image_sizes = array(
	'penci_dthumb_1920_auto' => esc_html__( 'Disable Image Size - 1920 x auto', 'soledad' ),
	'penci_dthumb_1920_800'  => esc_html__( 'Disable Image Size - 1920 x 800px', 'soledad' ),
	'penci_dthumb_1170_auto' => esc_html__( 'Disable Image Size - 1170 x auto', 'soledad' ),
	'penci_dthumb_1170_663'  => esc_html__( 'Disable Image Size - 1170 x 663px', 'soledad' ),
	'penci_dthumb_780_516'   => esc_html__( 'Disable Image Size - 780 x 516px', 'soledad' ),
	'penci_dthumb_585_390'   => esc_html__( 'Disable Image Size - 585 x 390px', 'soledad' ),
	'penci_dthumb_585_auto'  => esc_html__( 'Disable Image Size - 585 x auto', 'soledad' ),
	'penci_dthumb_585_585'   => esc_html__( 'Disable Image Size - 585 x 585px', 'soledad' ),
	'penci_dthumb_480_650'   => esc_html__( 'Disable Image Size - 480 x 650px', 'soledad' ),
	'penci_dthumb_263_175'   => esc_html__( 'Disable Image Size - 263 x 175px', 'soledad' )
);
foreach ( $list_image_sizes as $id_size => $label_size ) {
	$wp_customize->add_setting( $id_size, array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $id_size, array(
		'label'    => $label_size,
		'section'  => 'pencidesign_general_image_sizes',
		'settings' => $id_size,
		'type'     => 'checkbox',
	) ) );
}

/* Schema markup */
$wp_customize->add_setting( 'penci_logo_schema', array(
	'sanitize_callback' => 'esc_url_raw'
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'penci_logo_schema', array(
	'label'    => 'Custom General Logo for Schema Markup',
	'section'  => 'pencidesign_general_schema_markup',
	'settings' => 'penci_logo_schema',
) ) );

$wp_customize->add_setting( 'penci_schema_wphead', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_schema_wphead', array(
	'label'    => 'Remove WPHeader Schema Data',
	'section'  => 'pencidesign_general_schema_markup',
	'settings' => 'penci_schema_wphead',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_schema_wpfoot', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_schema_wpfoot', array(
	'label'    => 'Remove WPFooter Schema Data',
	'section'  => 'pencidesign_general_schema_markup',
	'settings' => 'penci_schema_wpfoot',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_schema_sitenav', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_schema_sitenav', array(
	'label'    => 'Remove Site Navigation Schema Data',
	'section'  => 'pencidesign_general_schema_markup',
	'settings' => 'penci_schema_sitenav',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_schema_hentry', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_schema_hentry', array(
	'label'    => 'Remove Hentry Schema Data',
	'section'  => 'pencidesign_general_schema_markup',
	'settings' => 'penci_schema_hentry',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_schema_organization', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_schema_organization', array(
	'label'    => 'Remove General Organization Schema Data',
	'section'  => 'pencidesign_general_schema_markup',
	'settings' => 'penci_schema_organization',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_schema_website', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_schema_website', array(
	'label'    => 'Remove Website Schema Data',
	'section'  => 'pencidesign_general_schema_markup',
	'settings' => 'penci_schema_website',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_schema_breadcrumbs', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_schema_breadcrumbs', array(
	'label'    => 'Remove Breadcrumbs Schema Data',
	'section'  => 'pencidesign_general_schema_markup',
	'settings' => 'penci_schema_breadcrumbs',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_schema_single', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_schema_single', array(
	'label'    => 'Remove Schema Data for Single Posts/Pages',
	'section'  => 'pencidesign_general_schema_markup',
	'settings' => 'penci_schema_single',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_post_use_newsarticle', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_use_newsarticle', array(
	'label'    => 'Use NewsArticle Schema for All Posts',
	'section'  => 'pencidesign_general_schema_markup',
	'settings' => 'penci_post_use_newsarticle',
	'type'     => 'checkbox',
) ) );

/* Extra Options */
$wp_customize->add_setting( 'penci_youtube_api_key', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_youtube_api_key', array(
	'label'       => esc_attr__( 'YouTube API Key', 'soledad' ),
	'section'     => 'pencidesign_general_extra',
	'settings'    => 'penci_youtube_api_key',
	'type'        => 'text',
	'description' => 'Please go to <a href="https://developers.google.com/youtube/v3/getting-started?hl=en" target="_blank">https://developers.google.com/youtube/v3/getting-started?hl=en</a> and check this giude and get the YouTube API Key',
) ) );

$wp_customize->add_setting( 'penci_api_weather_key', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_api_weather_key', array(
	'label'       => esc_attr__( 'Weather API Key', 'soledad' ),
	'section'     => 'pencidesign_general_extra',
	'settings'    => 'penci_api_weather_key',
	'type'        => 'text',
	'description' => '<a href="' . esc_url( 'https://openweathermap.org/appid#get' ) . '" target="_blank">' . esc_html__( 'Click here to get an api key', 'soledad' ) . '</a>'
) ) );

$wp_customize->add_setting( 'penci_map_api_key', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_map_api_key', array(
	'label'       => esc_attr__( 'Google Map API Key', 'soledad' ),
	'section'     => 'pencidesign_general_extra',
	'settings'    => 'penci_map_api_key',
	'type'        => 'text',
	'description' => 'When you use "Penci Map" element from Elementor or WPBakery page builder, it required an Google Map API to make it works.',
) ) );

$wp_customize->add_setting( 'penci_rel_type_social', array(
	'default'           => 'noreferrer',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_rel_type_social', array(
	'label'    => 'Select "rel" Attribute Type for Social Media & Social Share Icons',
	'section'  => 'pencidesign_general_extra',
	'settings' => 'penci_rel_type_social',
	'type'     => 'select',
	'choices'  => array(
		'none'                         => 'None',
		'nofollow'                     => 'nofollow',
		'noreferrer'                   => 'noreferrer',
		'noopener'                     => 'noopener',
		'noreferrer_noopener'          => 'noreferrer noopener',
		'nofollow_noreferrer'          => 'nofollow noreferrer',
		'nofollow_noopener'            => 'nofollow noopener',
		'nofollow_noreferrer_noopener' => 'nofollow noreferrer noopener',
	)
) ) );

if ( get_option( 'penci_soledad_is_activated' ) ) {
	$wp_customize->add_setting( 'penci_disable_notice_updates', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_disable_notice_updates', array(
		'label'       => 'Disable New Version Update Notice on The Admin Page',
		'description' => 'You can check <a href="https://imgresources.s3.amazonaws.com/notice-updates.png" target="_blank">this image</a> to understand what\'s "new version update notice on admin page". When a new version released, this notice will appear. This option will help you disable this notice if you want.',
		'section'     => 'pencidesign_general_extra',
		'settings'    => 'penci_disable_notice_updates',
		'type'        => 'checkbox',
	) ) );
}

$wp_customize->add_setting( 'penci_fontawesome_ver5', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_fontawesome_ver5', array(
	'label'    => 'Use Fontawesome Version 5',
	'section'  => 'pencidesign_general_extra',
	'settings' => 'penci_fontawesome_ver5',
	'type'     => 'checkbox',
) ) );

/* Typography */
$wp_customize->add_setting( 'penci_font_for_title', array(
	'default'           => '"Raleway", "100:200:300:regular:500:600:700:800:900", sans-serif',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'font_for_title', array(
	'label'       => 'Font For Heading Titles',
	'section'     => 'pencidesign_general_typography',
	'settings'    => 'penci_font_for_title',
	'description' => 'Default font is "Raleway"',
	'type'        => 'select',
	'choices'     => penci_all_fonts()
) ) );

$wp_customize->add_setting( 'penci_font_weight_title', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'font_weight_title', array(
	'label'    => 'Font Weight For Heading Titles',
	'section'  => 'pencidesign_general_typography',
	'settings' => 'penci_font_weight_title',
	'type'     => 'select',
	'choices'  => array(
		''        => '&mdash; Select &mdash;',
		'normal'  => 'Normal',
		'bold'    => 'Bold',
		'bolder'  => 'Bolder',
		'lighter' => 'Lighter',
		'100'     => '100',
		'200'     => '200',
		'300'     => '300',
		'400'     => '400',
		'500'     => '500',
		'600'     => '600',
		'700'     => '700',
		'800'     => '800',
		'900'     => '900'
	)
) ) );

$wp_customize->add_setting( 'penci_font_for_body', array(
	'default'           => '"PT Serif", "regular:italic:700:700italic", serif',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'font_for_body', array(
	'label'       => 'Font For Body Text',
	'section'     => 'pencidesign_general_typography',
	'settings'    => 'penci_font_for_body',
	'description' => 'Default font is "PT Serif"',
	'type'        => 'select',
	'choices'     => penci_all_fonts()
) ) );

$wp_customize->add_setting( 'penci_font_weight_bodytext', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_font_weight_bodytext', array(
	'label'    => 'Font Weight For Body Text',
	'section'  => 'pencidesign_general_typography',
	'settings' => 'penci_font_weight_bodytext',
	'type'     => 'select',
	'choices'  => array(
		''        => '&mdash; Select &mdash;',
		'normal'  => 'Normal',
		'bold'    => 'Bold',
		'bolder'  => 'Bolder',
		'lighter' => 'Lighter',
		'100'     => '100',
		'200'     => '200',
		'300'     => '300',
		'400'     => '400',
		'500'     => '500',
		'600'     => '600',
		'700'     => '700',
		'800'     => '800',
		'900'     => '900'
	)
) ) );

$wp_customize->add_setting( 'penci_font_for_size_body', array(
	'default'           => '14',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'penci_font_mfor_size_body', array(
	'default'           => '14',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'font_for_size_body', array(
	'description' => __( 'General Font Size for Text', 'soledad' ),
	'section'     => 'pencidesign_general_typography',
	'settings'    => array(
		'desktop' => 'penci_font_for_size_body',
		'mobile'  => 'penci_font_mfor_size_body',
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
) ) );

$wp_customize->add_setting( 'penci_body_line_height', array(
	'default'           => '1.8',
	'sanitize_callback' => 'penci_sanitize_decimal_empty_field',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_body_line_height', array(
	'description' => __( 'General Line Height for Text', 'soledad' ),
	'section'     => 'pencidesign_general_typography',
	'settings'    => array(
		'desktop' => 'penci_body_line_height',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 3,
			'step' => 0.1,
			'edit' => true,
			'unit' => '',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_archive_fpagetitle', array(
	'default'           => '24',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'penci_archive_mobile_fpagetitle', array(
	'default'           => '16',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_archive_fpagetitle', array(
	'description'     => __( 'Font Size for Archive Page Title', 'soledad' ),
	'sub_description' => 'Apply for Category Page Title, Tag Page Title, Search Page Title, Archive Page Title - check more on <a href="https://imgresources.s3.amazonaws.com/archive-page-title.png" target="_blank">this image</a>',
	'section'         => 'pencidesign_general_typography',
	'settings'        => array(
		'desktop' => 'penci_archive_fpagetitle',
		'mobile'  => 'penci_archive_mobile_fpagetitle',
	),
	'choices'         => array(
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
) ) );

$wp_customize->add_setting( 'penci_archive_uppagetitle', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_archive_uppagetitle', array(
	'label'    => 'Disable Uppercase on Archive Page Title',
	'section'  => 'pencidesign_general_typography',
	'settings' => 'penci_archive_uppagetitle',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_body_breadcrumbs', array(
	'default'           => '13',
	'sanitize_callback' => 'penci_sanitize_decimal_empty_field',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_body_breadcrumbs', array(
	'description' => __( 'Font Size for Breadcrumbs', 'soledad' ),
	'section'     => 'pencidesign_general_typography',
	'settings'    => array(
		'desktop' => 'penci_body_breadcrumbs',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 50,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_home_loadmore_size', array(
	'default'           => '12',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_home_loadmore_size', array(
	'description' => __( 'Font Size for "Load More Posts" & Pagination Button', 'soledad' ),
	'section'     => 'pencidesign_general_typography',
	'settings'    => array(
		'desktop' => 'penci_home_loadmore_size',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

/* Colors */
$wp_customize->add_setting( 'penci_general_text_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_general_text_color', array(
	'label'    => 'General Text Colors',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_general_text_color',
) ) );

$wp_customize->add_setting( 'penci_color_accent', array(
	'default'           => '#6eb48c',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_accent', array(
	'label'    => 'Accent Colors',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_color_accent',
) ) );

$wp_customize->add_setting( 'penci_buttons_bg', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_buttons_bg', array(
	'label'    => 'Custom General Buttons Background Color',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_buttons_bg',
) ) );

$wp_customize->add_setting( 'penci_buttons_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_buttons_color', array(
	'label'    => 'Custom General Buttons Text Color',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_buttons_color',
) ) );

$wp_customize->add_setting( 'penci_buttons_bghover', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_buttons_bghover', array(
	'label'    => 'Custom General Buttons Hover Background Color',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_buttons_bghover',
) ) );

$wp_customize->add_setting( 'penci_buttons_colorhver', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_buttons_colorhver', array(
	'label'    => 'Custom General Buttons Hover Text Color',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_buttons_colorhver',
) ) );

$wp_customize->add_setting( 'penci_bg_color_dark', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_color_dark', array(
	'label'    => 'Custom Background Color for Body',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_bg_color_dark',
) ) );

$wp_customize->add_setting( 'penci_border_color_dark', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_color_dark', array(
	'label'    => 'Custom General Border Color',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_border_color_dark',
) ) );

$wp_customize->add_setting( 'penci_breadcrumbs_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_breadcrumbs_color', array(
	'label'    => 'Breadcrumbs Text Color',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_breadcrumbs_color',
) ) );

$wp_customize->add_setting( 'penci_breadcrumbs_hcolor', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_breadcrumbs_hcolor', array(
	'label'    => 'Breadcrumbs Text Hover Color',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_breadcrumbs_hcolor',
) ) );

$wp_customize->add_setting( 'penci_archivetitle_prefix_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_archivetitle_prefix_color', array(
	'label'    => 'Archive Page Titles Prefix Color',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_archivetitle_prefix_color',
) ) );

$wp_customize->add_setting( 'penci_archivetitle_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_archivetitle_color', array(
	'label'    => 'Archive Page Titles Color',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_archivetitle_color',
) ) );

$wp_customize->add_setting( 'penci_enable_dark_layout', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_dark_layout', array(
	'label'       => 'Enable Dark Theme',
	'section'     => 'pencidesign_general_colors',
	'settings'    => 'penci_enable_dark_layout',
	'description' => 'All options below only apply when you enable dark theme. And all other elements, please change it via other colors options for those elements.',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_text_color_dark', array(
	'default'           => '#afafaf',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color_dark', array(
	'label'    => 'Custom Text Color for Dark Theme',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_text_color_dark',
) ) );

$wp_customize->add_setting( 'penci_meta_color_dark', array(
	'default'           => '#949494',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'meta_color_dark', array(
	'label'    => 'Custom Posts Meta Color for Dark Theme',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_meta_color_dark',
) ) );

$wp_customize->add_setting( 'penci_catfil_bheading', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_catfil_bheading', array(
	'label'       => esc_html__( 'Filled Categories Styles', 'soledad' ),
	'section'     => 'pencidesign_general_colors',
	'description' => __( 'The options below apply for categories listing filled styles you selected via General > General Settings > Style for Post Categories Listing', 'soledad' ),
	'settings'    => 'penci_catfil_bheading',
	'type'        => 'heading',
) ) );

$wp_customize->add_setting( 'penci_cfiled_cl', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_cfiled_cl', array(
	'label'    => 'Text Color',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_cfiled_cl',
) ) );

$wp_customize->add_setting( 'penci_cfiled_bgcl', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_cfiled_bgcl', array(
	'label'    => 'Background Color',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_cfiled_bgcl',
) ) );
$wp_customize->add_setting( 'penci_cfiled_hcl', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_cfiled_hcl', array(
	'label'    => 'Text Hover Color',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_cfiled_hcl',
) ) );

$wp_customize->add_setting( 'penci_cfiled_hbgcl', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_cfiled_hbgcl', array(
	'label'    => 'Background Hover Color',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_cfiled_hbgcl',
) ) );

$wp_customize->add_setting( 'penci_pagination_bheading', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_pagination_bheading', array(
	'label'    => esc_html__( 'Pagination/Load More Post Button', 'soledad' ),
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_pagination_bheading',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'penci_pagination_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_pagination_color', array(
	'label'    => 'Color for Pagination',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_pagination_color',
) ) );

$wp_customize->add_setting( 'penci_pagination_hcolor', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_pagination_hcolor', array(
	'label'    => 'Accent Color for Pagination',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_pagination_hcolor',
) ) );

$wp_customize->add_setting( 'penci_loadmorebtn_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_loadmorebtn_color', array(
	'label'    => 'Color for "Load More Posts" Button',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_loadmorebtn_color',
) ) );

$wp_customize->add_setting( 'penci_loadmorebtn_borders', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_loadmorebtn_borders', array(
	'label'    => 'Borders Color for "Load More Posts" Button',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_loadmorebtn_borders',
) ) );

$wp_customize->add_setting( 'penci_loadmorebtn_bg', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_loadmorebtn_bg', array(
	'label'    => 'Background Color for "Load More Posts" Button',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_loadmorebtn_bg',
) ) );

$wp_customize->add_setting( 'penci_loadmorebtn_hcolor', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_loadmorebtn_hcolor', array(
	'label'    => 'Color on Hover for "Load More Posts" Button',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_loadmorebtn_hcolor',
) ) );

$wp_customize->add_setting( 'penci_loadmorebtn_hborders', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_loadmorebtn_hborders', array(
	'label'    => 'Borders Color on Hover for "Load More Posts" Button',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_loadmorebtn_hborders',
) ) );

$wp_customize->add_setting( 'penci_loadmorebtn_hbg', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_loadmorebtn_hbg', array(
	'label'    => 'Background Color on Hover for "Load More Posts" Button',
	'section'  => 'pencidesign_general_colors',
	'settings' => 'penci_loadmorebtn_hbg',
) ) );
