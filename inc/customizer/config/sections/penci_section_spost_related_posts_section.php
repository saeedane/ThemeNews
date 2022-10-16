<?php
$options   = [];
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Related Posts Box',
	'id'       => 'penci_post_related',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Make Related Posts Display in a Grid Layout ( not Slider )',
	'id'       => 'penci_post_related_grid',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => 'categories',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Display Related Posts By:',
	'id'       => 'penci_related_by',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		'categories'  => 'Categories',
		'tags'        => 'Tags',
		'primary_cat' => 'Primary Category from "Yoast SEO" or "Rank Math" plugin'
	)
);
$options[] = array(
	'default'  => 'date',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Order Related Posts',
	'id'       => 'penci_related_orderby',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		'rand'          => 'Random Posts',
		'date'          => 'Published Date',
		'ID'            => 'Post ID',
		'modified'      => 'Modified Date',
		'title'         => 'Post Title',
		'comment_count' => 'Comment Count',
		'popular'       => 'Most Viewed Posts All Time',
		'popular7'      => 'Most Viewed Posts Once Weekly',
		'popular_month' => 'Most Viewed Posts Once a Month',
	)
);
$options[] = array(
	'default'  => 'DESC',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Sort Order Related Posts',
	'id'       => 'penci_related_sort_order',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		'DESC' => 'Descending',
		'ASC'  => 'Ascending '
	)
);
$options[] = array(
	'default'  => '8',
	'sanitize' => 'absint',
	'label'    => __( 'Words Length for Post Titles on Related Posts', 'soledad' ),
	'id'       => 'penci_related_posts_title_length',
	'type'     => 'soledad-fw-number'
);
$options[] = array(
	'default'  => 'You may also like',
	'sanitize' => 'sanitize_text_field',
	'label'    => 'Related Posts Custom Text',
	'id'       => 'penci_post_related_text',
	'type'     => 'soledad-fw-text',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Turn Off Uppercase in Post Titles Related Posts',
	'id'       => 'penci_off_uppercase_post_title_related',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Enable Posts Format Icons in Related Posts',
	'id'       => 'penci_post_related_icons',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Post Date on Related Posts',
	'id'       => 'penci_hide_date_related',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Related Posts Carousel Auto Play',
	'id'       => 'penci_post_related_autoplay',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Dots On Carousel Related Posts',
	'id'       => 'penci_post_related_dots',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => true,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Enable Next/Prev Button On Carousel Related Posts',
	'id'       => 'penci_post_related_arrows',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => '10',
	'sanitize' => 'absint',
	'label'    => __( 'Amount of Related Posts', 'soledad' ),
	'id'       => 'penci_numbers_related_post',
	'type'     => 'soledad-fw-number'
);
$options[] = array(
	'default'     => false,
	'sanitize'    => 'penci_sanitize_checkbox_field',
	'label'       => 'Exclude Featured Category from Related Posts based on Categories',
	'id'          => 'penci_post_related_exclusive_cat',
	'description' => 'Featured Category is category you selected to filter slider via Customize > Featured Slider > General. This option will help you remove that category on related posts based on categories',
	'type'        => 'soledad-fw-toggle',
);
$options[] = array(
	'sanitize'    => 'sanitize_text_field',
	'label'       => esc_html__( 'Related Posts Popup', 'soledad' ),
	'id'          => 'penci_section_related_post_popup',
	'description' => 'Please check <a target="_blank" href="https://imgresources.s3.amazonaws.com/related-posts-popup.png">this image</a> to know what is "Related Posts Popup"',
	'type'        => 'soledad-fw-header',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Enable Related Posts Popup',
	'id'       => 'penci_related_post_popup',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => 'left',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Position of Related Posts Popup',
	'id'       => 'penci_rltpopup_position',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		'left'  => 'Left',
		'right' => 'Right'
	)
);
$options[] = array(
	'default'  => 'categories',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Display Related Posts Popup By:',
	'id'       => 'penci_rltpopup_by',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		'categories'  => 'Categories',
		'tags'        => 'Tags',
		'primary_cat' => 'Primary Category from "Yoast SEO" or "Rank Math" plugin'
	)
);
$options[] = array(
	'default'  => 'date',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Order Related Posts Popup',
	'id'       => 'penci_rltpopup_orderby',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		'rand'          => 'Random Posts',
		'date'          => 'Published Date',
		'ID'            => 'Post ID',
		'modified'      => 'Modified Date',
		'title'         => 'Post Title',
		'comment_count' => 'Comment Count',
		'popular'       => 'Most Viewed Posts All Time',
		'popular7'      => 'Most Viewed Posts Once Weekly',
		'popular_month' => 'Most Viewed Posts Once a Month',
	)
);
$options[] = array(
	'default'  => 'DESC',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Sort Order Related Posts Popup',
	'id'       => 'penci_rltpopup_sort_order',
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		'DESC' => 'Descending',
		'ASC'  => 'Ascending '
	)
);
$options[] = array(
	'default'  => '6',
	'sanitize' => 'absint',
	'label'    => __( 'Words Length for Post Titles on Related Posts Popup', 'soledad' ),
	'id'       => 'penci_rltpopup_title_length',
	'type'     => 'soledad-fw-number'
);
$options[] = array(
	'default'  => 'Read also',
	'sanitize' => 'sanitize_text_field',
	'label'    => 'Custom Heading Text for Related Posts Popup',
	'id'       => 'penci_rltpopup_heading_text',
	'type'     => 'soledad-fw-text',
);
$options[] = array(
	'default'  => '3',
	'sanitize' => 'absint',
	'type'     => 'soledad-fw-number',
	'label'    => __( 'Amount of Posts Display on Related Posts Popup', 'soledad' ),
	'id'       => 'penci_rltpopup_numpost',
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'absint',
	'label'    => __( 'Custom Padding Bottom of Related Posts Popup', 'soledad' ),
	'id'       => 'penci_rltpopup_padding_bottom',
	'type'     => 'soledad-fw-number'
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Date on Related Posts Popup',
	'id'       => 'penci_rltpopup_hide_date',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Related Posts Popup on Mobile',
	'id'       => 'penci_rltpopup_hide_mobile',
	'type'     => 'soledad-fw-toggle',
);
/* Comments Form */
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide Comments & Comment Form',
	'id'       => 'penci_post_hide_comments',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Move Comment Form to Above the List Comments',
	'id'       => 'penci_post_move_comment_box',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'     => false,
	'sanitize'    => 'penci_sanitize_checkbox_field',
	'label'       => 'Hide "Name" field on Comment Form',
	'id'          => 'penci_single_comments_remove_name',
	'type'        => 'soledad-fw-toggle',
	'description' => 'Note that: If you want to hide this field - you need go to Dashboard > Settings > Discussion > and un-check to "Comment author must fill out name and email" - check <a href="https://imgresources.s3.amazonaws.com/discussion_settings.png" target="_blank">this image</a> for more.',
);
$options[] = array(
	'default'     => false,
	'sanitize'    => 'penci_sanitize_checkbox_field',
	'label'       => 'Hide "Email" field on Comment Form',
	'id'          => 'penci_single_comments_remove_email',
	'description' => 'Note that: If you want to hide this field - you need go to Dashboard > Settings > Discussion > and un-check to "Comment author must fill out name and email" - check <a href="https://imgresources.s3.amazonaws.com/discussion_settings.png" target="_blank">this image</a> for more.',
	'type'        => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Hide "Website" field on Comment Form',
	'id'       => 'penci_single_comments_remove_website',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'     => false,
	'sanitize'    => 'penci_sanitize_checkbox_field',
	'label'       => 'Remove checkbox "Save my name, email, and website in this browser for the next time I comment."',
	'id'          => 'penci_single_hide_save_fields',
	'description' => 'Note that: This checkbox just appears when you use Wordpress from version 4.9.6',
	'type'        => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Enable GDPR message on Comment Form',
	'id'       => 'penci_single_gdpr',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'     => esc_html__( '* By using this form you agree with the storage and handling of your data by this website.', 'soledad' ),
	'sanitize'    => 'penci_sanitize_textarea_field',
	'label'       => esc_html__( 'Custom GDPR Message on Comment Form', 'soledad' ),
	'id'          => 'penci_single_gdpr_text',
	'description' => '',
	'type'        => 'soledad-fw-textarea',
);
/* Auto load next/previous posts */
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Enable Infinity Scrolling Load Posts',
	'id'       => 'penci_loadnp_posts',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'     => 'prev',
	'sanitize'    => 'penci_sanitize_choices_field',
	'label'       => 'Load Posts Type',
	'id'          => 'penci_loadnp_type',
	'description' => '',
	'type'        => 'soledad-fw-select',
	'choices'     => array(
		'prev'     => 'Previous Posts',
		'next'     => 'Next Posts',
		'prev_cat' => 'Previous Posts has Same Categories',
		'next_cat' => 'Next Posts has Same Categories',
		'prev_tag' => 'Previous Posts has Same Tags',
		'next_tag' => 'Next Posts has Same Tags',
	)
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'penci_sanitize_textarea_field',
	'label'       => 'Exclude Specific Posts from Loads',
	'id'          => 'penci_loadnp_exclude',
	'description' => __( 'Exclude Posts by ID Separated by the comma. E.g: 12, 22, 335. You can check <a href="https://pagely.com/blog/find-post-id-wordpress/" target="_blank">this guide</a> to know how to find the ID of a post', 'soledad' ),
	'type'        => 'soledad-fw-textarea',
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'penci_sanitize_textarea_field',
	'label'       => 'Add Google Adsense/Custom HTML code Between Posts When Load Posts',
	'description' => __( 'If you use Google Ads here, please use normal Google Ads here - don\'t use Google Auto Ads to get it appears in the correct place.', 'soledad' ),
	'id'          => 'penci_loadnp_ads',
	'type'        => 'soledad-fw-textarea',
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'label'    => 'Custom Color for Loading Icon',
	'id'       => 'penci_loadnp_ldscolor',
	'type'     => 'soledad-fw-color'
);

return $options;
