<?php
$options                   = [];
$options[]                 = array(
	'label'    => 'Category, Tag, Search, Archive Layout',
	'id'       => 'penci_archive_layout',
	'type'     => 'soledad-fw-select',
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
	),
	'default'  => 'standard',
	'sanitize' => 'penci_sanitize_choices_field'
);
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
$options[] = array(
	'label'    => esc_html__( 'Show Featured Posts', 'soledad' ),
	'id'       => 'penci_heading_featured_archi',
	'type'     => 'soledad-fw-header',
	'sanitize' => 'sanitize_text_field'
);
/* Category Featured */
$options[] = array(
	'id'       => 'penci_cat_featured_layout',
	'label'    => 'Category Pages Featured Style',
	'type'     => 'soledad-fw-select',
	'choices'  => $penci_featured_cat_layout,
	'default'  => '',
	'sanitize' => 'penci_sanitize_choices_field'
);
$options[] = array(
	'label'       => '',
	'id'          => 'penci_category_featured_mheight',
	'type'        => 'soledad-fw-hidden',
	'sanitize'    => 'absint',
);
$options[] = array(
	'label'       => 'Height for Featured Styles',
	'description' => __( 'for Featured Posts on Category Pages', 'soledad' ),
	'id'          => 'penci_category_featured_height',
	'type'        => 'soledad-fw-size',
	'sanitize'    => 'absint',
	'ids'         => array(
		'desktop' => 'penci_category_featured_height',
		'mobile'  => 'penci_category_featured_mheight',
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
	'type'        => 'soledad-fw-number',
	'id'          => 'penci_cat_featured_theight',
	'sanitize'    => 'absint',
	'label'       => __( 'Height for Featured Styles on Tablet', 'soledad' ),
	'description' => __( 'for Featured Posts on Category Pages', 'soledad' ),
);
/* Tags Featured */
$options[] = array(
	'id'       => 'penci_tag_featured_layout',
	'label'    => 'Tag Pages Featured Style',
	'type'     => 'soledad-fw-select',
	'choices'  => $penci_featured_cat_layout,
	'default'  => '',
	'sanitize' => 'penci_sanitize_choices_field'
);
$options[] = array(
	'label'       => '',
	'id'          => 'penci_tag_featured_mheight',
	'type'        => 'soledad-fw-hidden',
	'sanitize'    => 'absint',
);
$options[] = array(
	'label'       => 'Height for Featured Styles',
	'id'          => 'penci_tag_featured_height',
	'type'        => 'soledad-fw-size',
	'sanitize'    => 'absint',
	'ids'         => array(
		'desktop' => 'penci_tag_featured_height',
		'mobile'  => 'penci_tag_featured_mheight',
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
	'id'          => 'penci_tag_featured_theight',
	'type'        => 'soledad-fw-number',
	'label'       => __( 'Height for Featured Styles on Tablet', 'soledad' ),
	'description' => __( 'for Featured Posts on Tags Pages', 'soledad' ),
);
$options[] = array(
	'id'       => 'penci_arf_orderby',
	'label'    => 'Featured Posts Sort By',
	'type'     => 'soledad-fw-select',
	'choices'  => [
		''              => 'Published Date',
		'modified'      => 'Modified Date',
		'comment_count' => 'Comment Count',
		'popular'       => 'Most Viewed Posts All Time',
		'popular7'      => 'Most Viewed Posts Once Weekly',
		'popular_month' => 'Most Viewed Posts Once a Month',
	],
	'default'  => '',
	'sanitize' => 'penci_sanitize_choices_field'
);
$options[] = array(
	'id'       => 'penci_arf_sortby',
	'label'    => 'Featured Posts Order By',
	'type'     => 'soledad-fw-select',
	'choices'  => [
		'desc' => 'DESC',
		'asc'  => 'ASC',
	],
	'default'  => 'desc',
	'sanitize' => 'penci_sanitize_choices_field'
);
$options[] = array(
	'id'       => 'penci_arf_img_ratio',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Image Ratio for Grid Layout', 'soledad' ),
	'default'  => '',
	'sanitize' => 'absint',
);
$options[] = array(
	'label'       => '',
	'id'          => 'penci_arf_mheight',
	'type'        => 'soledad-fw-hidden',
	'sanitize'    => 'absint',
);
$options[] = array(
	'label'       => 'Height for Featured Styles',
	'id'          => 'penci_arf_height',
	'type'        => 'soledad-fw-size',
	'sanitize'    => 'absint',
	'ids'         => array(
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
);
$options[] = array(
	'label'    => __( 'Height for Featured Styles on Tablet', 'soledad' ),
	'id'       => 'penci_arf_theight',
	'type'     => 'soledad-fw-number',
	'default'  => '',
	'sanitize' => 'absint',
);
$options[] = array(
	'label'    => __( 'Gap Between Featured Posts', 'soledad' ),
	'id'       => 'penci_arf_gap',
	'type'     => 'soledad-fw-number',
	'default'  => '4',
	'sanitize' => 'absint',
);
$options[] = array(
	'label'    => __( 'Custom Title Words Length', 'soledad' ),
	'id'       => 'penci_arf_titlength',
	'type'     => 'soledad-fw-number',
	'default'  => '',
	'sanitize' => 'absint',
);
$options[] = array(
	'label'    => 'Hide Categories',
	'id'       => 'penci_arcf_cat',
	'type'     => 'soledad-fw-toggle',
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field'
);
$options[] = array(
	'label'    => 'Hide Post Date',
	'id'       => 'penci_arcf_date',
	'type'     => 'soledad-fw-toggle',
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field'
);
$options[] = array(
	'label'    => 'Show Post Author',
	'id'       => 'penci_arcf_author',
	'type'     => 'soledad-fw-toggle',
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field'
);
$options[] = array(
	'label'    => 'Show Comments Count',
	'id'       => 'penci_arcf_cm',
	'type'     => 'soledad-fw-toggle',
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field'
);
$options[] = array(
	'label'    => 'Show Views Count',
	'id'       => 'penci_arcf_view',
	'type'     => 'soledad-fw-toggle',
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field'
);
$options[] = array(
	'label'    => 'Show Reading Time',
	'id'       => 'penci_arcf_reading',
	'type'     => 'soledad-fw-toggle',
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field'
);
$options[] = array(
	'label'    => 'Hide Categories on Mobile',
	'id'       => 'penci_arcf_mcat',
	'type'     => 'soledad-fw-toggle',
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field'
);
$options[] = array(
	'label'    => 'Hide Post Meta on Mobile',
	'id'       => 'penci_arcf_mmeta',
	'type'     => 'soledad-fw-toggle',
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field'
);
$options[] = array(
	'label'    => 'Google Adsense/Custom HTML Code Display Below Featured Posts',
	'id'       => 'penci_arcf_adbelow',
	'type'     => 'soledad-fw-textarea',
	'default'  => '',
	'sanitize' => 'penci_sanitize_textarea_field'
);
$options[] = array(
	'label'       => 'Latest Posts Heading Title Below the Featured Area',
	'description' => 'Replace your category/tag name with {name} string.',
	'type'        => 'soledad-fw-text',
	'id'          => 'penci_arf_title',
	'default'     => 'Latest in {name}',
	'sanitize'    => 'penci_sanitize_choices_field'
);
$options[] = array(
	'id'       => 'penci_arf_title_style',
	'label'    => 'Select Latest Posts Title Heading Style',
	'type'     => 'soledad-fw-select',
	'default'  => '',
	'sanitize' => 'penci_sanitize_choices_field',
	'choices'  => array(
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
);
/* Font size & color */
$options[] = array(
	'id'       => 'penci_heading_featured_fzc',
	'label'    => esc_html__( 'Featured Posts Font Size & Colors', 'soledad' ),
	'type'     => 'soledad-fw-header',
	'sanitize' => 'sanitize_text_field'
);
$options[] = array(
	'id'       => 'penci_arf_catfs',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Font Size for Post Categories', 'soledad' ),
	'default'  => '',
	'sanitize' => 'absint',
);
$options[] = array(
	'label'       => '',
	'id'          => 'penci_arf_t_mfs',
	'type'        => 'soledad-fw-hidden',
	'sanitize'    => 'absint',
);
$options[] = array(
	'label'       => 'Big Grid Font Size for Post Title',
	'id'          => 'penci_arf_t_fs',
	'type'        => 'soledad-fw-size',
	'sanitize'    => 'absint',
	'ids'         => array(
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
);
$options[] = array(
	'label'       => '',
	'id'          => 'penci_arf_t_bmfs',
	'type'        => 'soledad-fw-hidden',
	'sanitize'    => 'absint',
);
$options[] = array(
	'label'       => 'Font Size for Post Title on Big Items',
	'id'          => 'penci_arf_t_bfs',
	'type'        => 'soledad-fw-size',
	'sanitize'    => 'absint',
	'ids'         => array(
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
);
$options[] = array(
	'label'    => __( 'Big Grid Font Size for Post Meta', 'soledad' ),
	'id'       => 'penci_arf_meta_fs',
	'type'     => 'soledad-fw-number',
	'default'  => '',
	'sanitize' => 'absint',
);
/* Color */
$options[] = array(
	'id'       => 'penci_arf_cat_cl',
	'label'    => 'Post Categories Color',
	'type'     => 'soledad-fw-color',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color'
);
$options[] = array(
	'id'       => 'penci_arf_cat_hcl',
	'label'    => 'Post Categories Hover Color',
	'type'     => 'soledad-fw-color',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color'
);
$options[] = array(
	'id'       => 'penci_arf_t_cl',
	'label'    => 'Post Title Color',
	'type'     => 'soledad-fw-color',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color'
);
$options[] = array(
	'label'    => 'Post Title Hover Color',
	'id'       => 'penci_arf_t_hcl',
	'type'     => 'soledad-fw-color',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color'
);
$options[] = array(
	'label'    => 'Post Meta Color',
	'id'       => 'penci_arf_meta_cl',
	'type'     => 'soledad-fw-color',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color'
);
$options[] = array(
	'label'    => 'Post Meta Links Color',
	'id'       => 'penci_arf_meta_lcl',
	'type'     => 'soledad-fw-color',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color'
);
$options[] = array(
	'label'    => 'Post Meta Links Hover Color',
	'id'       => 'penci_arf_meta_hcl',
	'type'     => 'soledad-fw-color',
	'default'  => '',
	'sanitize' => 'sanitize_hex_color'
);
// End Category Featured
$options[] = array(
	'label'    => esc_html__( 'Other Settings', 'soledad' ),
	'id'       => 'penci_heading_other_archi',
	'type'     => 'soledad-fw-header',
	'sanitize' => 'sanitize_text_field'
);
$options[] = array(
	'label'    => 'Enable Load More Button for Categories, Tags, Search, Archive Pages',
	'id'       => 'penci_archive_nav_ajax',
	'type'     => 'soledad-fw-toggle',
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field'
);
$options[] = array(
	'label'    => 'Enable Infinite Scroll for Categories, Tags, Search, Archive Pages',
	'id'       => 'penci_archive_nav_scroll',
	'type'     => 'soledad-fw-toggle',
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field'
);
$options[] = array(
	'label'    => __( 'Number of Posts for Each Time Load More Posts', 'soledad' ),
	'type'     => 'soledad-fw-number',
	'id'       => 'penci_arc_number_load_more',
	'default'  => '6',
	'sanitize' => 'absint',
);
$options[] = array(
	'label'    => 'Move Description of Category, Tag, Archive Pages Below Post Listings',
	'id'       => 'penci_archive_move_desc',
	'type'     => 'soledad-fw-toggle',
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field'
);
$options[] = array(
	'label'    => 'Category, Tags, Archive Description Align',
	'id'       => 'penci_archive_descalign',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		''       => 'Default',
		'left'   => 'Left',
		'right'  => 'Right',
		'center' => 'Center',
	),
	'default'  => '',
	'sanitize' => 'penci_sanitize_choices_field'
);
$options[] = array(
	'label'    => 'Enable Sidebar On Archives',
	'id'       => 'penci_sidebar_archive',
	'type'     => 'soledad-fw-toggle',
	'default'  => true,
	'sanitize' => 'penci_sanitize_checkbox_field'
);
$options[] = array(
	'label'    => 'Enable Left Sidebar On Archives',
	'id'       => 'penci_left_sidebar_archive',
	'type'     => 'soledad-fw-toggle',
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field'
);
$options[] = array(
	'label'    => 'Enable Two Sidebars On Archives',
	'id'       => 'penci_two_sidebar_archive',
	'type'     => 'soledad-fw-toggle',
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field'
);
$options[] = array(
	'label'    => 'Remove "Category:" Words on Category Pages',
	'id'       => 'penci_remove_cat_words',
	'type'     => 'soledad-fw-toggle',
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field'
);
$options[] = array(
	'label'    => 'Remove "Tag:" Words on Tag Pages',
	'id'       => 'penci_remove_tag_words',
	'type'     => 'soledad-fw-toggle',
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field'
);
$options[] = array(
	'label'       => 'Custom Sidebar Display on Category Pages',
	'id'          => 'penci_sidebar_name_category',
	'description' => 'If sidebar your choice is empty, will display Main Sidebar',
	'type'        => 'soledad-fw-select',
	'choices'     => get_list_custom_sidebar_option(),
	'default'     => 'main-sidebar',
	'sanitize'    => 'penci_sanitize_choices_field'
);
$options[] = array(
	'label'       => 'Custom Sidebar Left Display on Category Pages',
	'id'          => 'penci_sidebar_left_name_category',
	'description' => 'If sidebar your choice is empty, will display Main Sidebar Left. This option just use when you enable 2 sidebars for Archive pages',
	'type'        => 'soledad-fw-select',
	'choices'     => get_list_custom_sidebar_option(),
	'default'     => 'main-sidebar-left',
	'sanitize'    => 'penci_sanitize_choices_field'
);
$options[] = array(
	'label'       => 'Google Adsense/Custom HTML Code to Display Above Posts Layout for Archive Pages',
	'id'          => 'penci_archive_ad_above',
	'description' => 'You can display google adsense/custom HTML code above posts on category, tags, search, archive page by use this option',
	'type'        => 'soledad-fw-textarea',
	'default'     => '',
	'sanitize'    => 'penci_sanitize_textarea_field'
);
$options[] = array(
	'label'       => 'Google Adsense/Custom HTML Code to Display Below Posts Layout for Archive Pages',
	'id'          => 'penci_archive_ad_below',
	'description' => 'You can display google adsense/custom HTML code below posts on category, tags, search, archive page by use this option',
	'type'        => 'soledad-fw-textarea',
	'default'     => '',
	'sanitize'    => 'penci_sanitize_textarea_field'
);
$options[] = array(
	'label'    => esc_html__( 'In-Feed Ads', 'soledad' ),
	'id'       => 'penci_heading_infeed_ads_archi',
	'type'     => 'soledad-fw-header',
	'sanitize' => 'sanitize_text_field'
);
$options[] = array(
	'label'    => __( 'Insert In-feed Ads Code After Every How Many Posts?', 'soledad' ),
	'id'       => 'penci_infeedads_archi_num',
	'type'     => 'soledad-fw-number',
	'default'  => '3',
	'sanitize' => 'absint',
);
$options[] = array(
	'label'       => 'In-feed Ads Code/HTML',
	'description' => __( 'Please use normal responsive ads here to get the best results - the in-feed ads can\'t work with auto-ads because auto-ads will randomly place your ads on random places on the pages.', 'soledad' ),
	'id'          => 'penci_infeedads_archi_code',
	'type'        => 'soledad-fw-textarea',
	'default'     => '',
	'sanitize'    => 'penci_sanitize_textarea_field'
);
$options[] = array(
	'label'    => 'In-feed Ads Layout Type',
	'id'       => 'penci_infeedads_archi_layout',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		''     => 'Follow Current Layout',
		'full' => 'Full Width',
	),
	'default'  => '',
	'sanitize' => 'penci_sanitize_choices_field'
);

return $options;
