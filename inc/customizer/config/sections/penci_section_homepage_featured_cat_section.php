<?php
$options   = [];
$options[] = array(
	'default'     => '',
	'sanitize'    => 'penci_sanitize_textarea_field',
	'label'       => 'List Featured Categories',
	'id'          => 'penci_home_featured_cat',
	'description' => 'By default, this option apply only for Homepage Magazine(style 1 and style 2) layout, copy and paste categories slug you want display above Latest Posts here - check <a rel="nofollow" href="https://imgresources.s3.amazonaws.com/magazine-2.png" target="_blank">this image</a> to understand what is categories slug. Example: You want display categories "Life Style, Travel, Music" above Latest Posts, fill categories slug like "life-style, travel, music"',
	'type'        => 'soledad-fw-textarea',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Enable Featured Categories for All Homepage Layouts - Not for Magazine Layouts Only',
	'id'       => 'penci_enable_featured_cat_all_layouts',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Move Latest Posts To Above Featured Categories',
	'id'       => 'penci_move_latest_posts_above',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Remove Border Bottom Between Post Items',
	'id'       => 'penci_feacat_rmborder',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Enable Post Meta Overlay Featured Image for Featured Category Style 7',
	'id'       => 'penci_home_featured_cat_overlay7',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Show Thumbnail for Small Posts on Featured Category Style 15',
	'id'       => 'penci_home_thumbnail15',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => '60',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Custom Space Between Featured Categories', 'soledad' ),
	'id'       => 'penci_featured_cat_margin',
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Custom Image Width on Small Posts', 'soledad' ),
	'id'       => 'penci_featured_cat_imgwidth',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Post Author on Featured Categories',
	'id'       => 'penci_home_featured_cat_author',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'     => false,
	'sanitize'    => 'penci_sanitize_checkbox_field',
	'label'       => 'Show Post Author on Small Posts',
	'description' => __( 'You can check <a href="https://imgresources.s3.amazonaws.com/small-posts.png" target="_blank">this image</a> to know where is the "Small Posts"', 'soledad' ),
	'id'          => 'penci_home_cat_author_sposts',
	'type'        => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Post Date on Featured Categories',
	'id'       => 'penci_home_featured_cat_date',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Show Comment Count on Featured Categories',
	'id'       => 'penci_home_featured_cat_comment',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Show Views Count on Featured Categories',
	'id'       => 'penci_home_cat_views',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Reading Time on Featured Categories',
	'id'       => 'penci_home_cat_readtime',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Enable Post Format Icons on Featured Categories',
	'id'       => 'penci_home_featured_cat_icons',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Enable "View All" link for Featured Categories',
	'id'       => 'penci_home_featured_cat_seemore',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Remove arrow on "View All"',
	'id'       => 'penci_home_featured_cat_remove_arrow',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Make "View All" is A Button',
	'id'       => 'penci_home_featured_cat_readmore_button',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => 'left',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Align "View All" Button',
	'id'       => 'penci_home_featured_cat_readmore_align',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		'left'   => esc_html__( 'Left', 'soledad' ),
		'center' => esc_html__( 'Center', 'soledad' ),
		'right'  => esc_html__( 'Right', 'soledad' )
	)
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Remove Posts Excerpt on Featured Categories',
	'id'       => 'penci_home_featured_cat_remove_excerpt',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Disable Autoplay for Sliders on Style 4, 5, 12',
	'id'       => 'penci_home_featured_cat_autoplay',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => '5',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Amount of Posts Display on Style 1', 'soledad' ),
	'id'       => 'penci_home_featured_posts_numbers_1',
);
$options[] = array(
	'default'  => '4',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Amount of Posts Display on Style 2', 'soledad' ),
	'id'       => 'penci_home_featured_posts_numbers_2',
);
$options[] = array(
	'default'  => '4',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Amount of Posts Display on Style 3', 'soledad' ),
	'id'       => 'penci_home_featured_posts_numbers_3',
);
$options[] = array(
	'default'  => '6',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Amount of Posts Display on Style 4', 'soledad' ),
	'id'       => 'penci_home_featured_posts_numbers_4',
);
$options[] = array(
	'default'  => '6',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Amount of Posts Display on Style 5', 'soledad' ),
	'id'       => 'penci_home_featured_posts_numbers_5',
);
$options[] = array(
	'default'  => '5',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Amount of Posts Display on Style 6', 'soledad' ),
	'id'       => 'penci_home_featured_posts_numbers_6',
);
$options[] = array(
	'default'  => '6',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Amount of Posts Display on Style 7', 'soledad' ),
	'id'       => 'penci_home_featured_posts_numbers_7',
);
$options[] = array(
	'default'  => '3',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Amount of Posts Display on Style 8', 'soledad' ),
	'id'       => 'penci_home_featured_posts_numbers_8',
);
$options[] = array(
	'default'  => '8',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Amount of Posts Display on Style 9', 'soledad' ),
	'id'       => 'penci_home_featured_posts_numbers_9',
);
$options[] = array(
	'default'  => '6',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Amount of Posts Display on Style 10', 'soledad' ),
	'id'       => 'penci_home_featured_posts_numbers_10',
);
$options[] = array(
	'default'  => '4',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Amount of Posts Display on Style 11', 'soledad' ),
	'id'       => 'penci_home_featured_posts_numbers_11',
);
$options[] = array(
	'default'  => '6',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Amount of Posts Display on Style 12', 'soledad' ),
	'id'       => 'penci_home_featured_posts_numbers_12',
);
$options[] = array(
	'default'  => '6',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Amount of Posts Display on Style 13', 'soledad' ),
	'id'       => 'penci_home_featured_posts_numbers_13',
);
$options[] = array(
	'default'  => '6',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Amount of Posts Display on Style 14', 'soledad' ),
	'id'       => 'penci_home_featured_posts_numbers_14',
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Amount of Posts Display on Style 15', 'soledad' ),
	'id'       => 'penci_home_featured_posts_numbers_15',
);

return $options;
