<?php
$woo_message = 'You can check <a href="https://soledad.pencidesign.net/soledad-document/#create_store" target="_blank">this guide</a> to know how to configure your online store.';
/* Add Section */
$wp_customize->add_section( 'pencidesign_new_section_woocommerce', array(
	'title'    => esc_html__( 'General', 'soledad' ),
	'description' => $woo_message,
	'priority' => 0,
	'panel'    => 'woocommerce',
) );

$wp_customize->add_section( 'pencidesign_woo_wishlist_settings', array(
	'title'    => esc_html__( 'Product Wishlist', 'soledad' ),
	'description' => $woo_message,
	'priority' => 10,
	'panel'    => 'woocommerce',
) );

$wp_customize->add_section( 'pencidesign_woo_compare_settings', array(
	'title'    => esc_html__( 'Product Compare', 'soledad' ),
	'description' => $woo_message,
	'priority' => 10,
	'panel'    => 'woocommerce',
) );

$wp_customize->add_section( 'pencidesign_woo_quickview_settings', array(
	'title'    => esc_html__( 'Product Quickview', 'soledad' ),
	'description' => $woo_message,
	'priority' => 10,
	'panel'    => 'woocommerce',
) );

$wp_customize->add_section( 'pencidesign_woo_label_settings', array(
	'title'    => esc_html__( 'Product Label', 'soledad' ),
	'description' => $woo_message,
	'priority' => 10,
	'panel'    => 'woocommerce',
) );

$wp_customize->add_section( 'pencidesign_woo_brand_settings', array(
	'title'    => esc_html__( 'Product Brands', 'soledad' ),
	'description' => $woo_message,
	'priority' => 10,
	'panel'    => 'woocommerce',
) );

$wp_customize->add_section( 'pencidesign_woo_single_settings', array(
	'title'    => esc_html__( 'Single Product', 'soledad' ),
	'description' => $woo_message,
	'priority' => 10,
	'panel'    => 'woocommerce',
) );

$wp_customize->add_section( 'pencidesign_woo_cart_page', array(
	'title'    => esc_html__( 'Cart Page', 'soledad' ),
	'description' => $woo_message,
	'priority' => 50,
	'panel'    => 'woocommerce',
) );

$wp_customize->add_section( 'pencidesign_woo_ordercompleted_page', array(
	'title'    => esc_html__( 'Order Complete Page', 'soledad' ),
	'description' => $woo_message,
	'priority' => 50,
	'panel'    => 'woocommerce',
) );

$wp_customize->add_section( 'pencidesign_woo_mobile_settings', array(
	'title'    => esc_html__( 'Mobile Settings', 'soledad' ),
	'description' => $woo_message,
	'priority' => 50,
	'panel'    => 'woocommerce',
) );

$wp_customize->add_section( 'pencidesign_woo_toast_notify', array(
	'title'    => esc_html__( 'Toast Notifications', 'soledad' ),
	'description' => 'This option helps you can enable popup messages like on <a href="https://imgresources.s3.amazonaws.com/toast-notification.png" target="_blank">this image</a> after you add items to the cart, add items to compare, add items to your wishlist.',
	'priority' => 50,
	'panel'    => 'woocommerce',
) );

$wp_customize->add_section( 'pencidesign_woo_filter_sidebar', array(
	'title'    => esc_html__( 'Sidebar Filter', 'soledad' ),
	'priority' => 50,
	'panel'    => 'woocommerce',
) );

$wp_customize->add_section( 'pencidesign_woo_typo_settings', array(
	'title'    => esc_html__( 'Font Size', 'soledad' ),
	'priority' => 50,
	'panel'    => 'woocommerce',
) );

$wp_customize->add_section( 'pencidesign_woo_colors_settings', array(
	'title'    => esc_html__( 'Colors', 'soledad' ),
	'priority' => 50,
	'panel'    => 'woocommerce',
) );

$wp_customize->remove_setting( 'woocommerce_catalog_columns' );
$wp_customize->remove_control( 'woocommerce_catalog_columns' );

/* Add Options */
$wp_customize->add_setting( 'penci_general_heading_1', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_general_heading_1', array(
	'label'   => esc_html__( 'Header Area', 'soledad' ),
	'section' => 'pencidesign_new_section_woocommerce',
	'type'    => 'heading',
) ) );

$wp_customize->add_setting( 'penci_woo_shop_hide_cart_icon', array(
	'default'           => false,
	'transport'         => 'postMessage',
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_shop_hide_cart_icon', array(
	'label'   => 'Hide Header Shopping Cart Icon',
	'section' => 'pencidesign_new_section_woocommerce',
	'type'    => 'checkbox'
) ) );

$wp_customize->add_setting( 'penci_woo_cart_style', array(
	'default'           => 'side-right',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_cart_style', array(
	'label'       => 'Header Shopping Cart Style',
	'description' => 'Select the shopping cart detail style.',
	'section'     => 'pencidesign_new_section_woocommerce',
	'settings'    => 'penci_woo_cart_style',
	'type'        => 'select',
	'choices'     => array(
		'dropdown'   => 'Dropdown',
		'side-left'  => 'Side Left',
		'side-right' => 'Side Right',
	)
) ) );

$wp_customize->add_setting( 'size_header_cart_icon_check', array(
	'default'           => '17',
	'sanitize_callback' => 'penci_sanitize_number_field'
) );
$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'size_header_cart_icon_check', array(
	'label'    => 'Custom Size for Woocommerce Icons at the Header',
	'section'  => 'pencidesign_new_section_woocommerce',
	'settings' => 'size_header_cart_icon_check',
	'type'     => 'number',
) ) );

$wp_customize->add_setting( 'penci_woo_disable_breadcrumb', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_disable_breadcrumb', array(
	'label'       => 'Disable Breadcrumb',
	'description' => 'This option apply for shop archive page only.<br/>If you want to modify the single product breadcrumb, please navigate to <strong>WooCommerce > Single Product > Breadcrumb Position</strong>.',
	'section'     => 'pencidesign_new_section_woocommerce',
	'settings'    => 'penci_woo_disable_breadcrumb',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_general_heading_2', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_general_heading_2', array(
	'label'   => esc_html__( 'Sidebar Settings', 'soledad' ),
	'section' => 'pencidesign_new_section_woocommerce',
	'type'    => 'heading',
) ) );

$wp_customize->add_setting( 'penci_woo_shop_enable_sidebar', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_shop_enable_sidebar', array(
	'label'    => 'Enable Sidebar On Shop Page',
	'section'  => 'pencidesign_new_section_woocommerce',
	'settings' => 'penci_woo_shop_enable_sidebar',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_cat_enable_sidebar', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_cat_enable_sidebar', array(
	'label'       => 'Enable Sidebar On Shop Archive',
	'description' => 'Show sidebar widget on Product Category/Tags/Atribute/Search Result pages',
	'section'     => 'pencidesign_new_section_woocommerce',
	'settings'    => 'penci_woo_cat_enable_sidebar',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_single_enable_sidebar', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_single_enable_sidebar', array(
	'label'    => 'Enable Sidebar On Single Product',
	'section'  => 'pencidesign_new_section_woocommerce',
	'settings' => 'penci_woo_single_enable_sidebar',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_single_sidebar_style', array(
	'default'           => 'bottom',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_single_sidebar_style', array(
	'label'       => 'Single Product Sidebar Placement',
	'description' => 'Select the position of the sidebar display on single product.',
	'section'     => 'pencidesign_new_section_woocommerce',
	'settings'    => 'penci_woo_single_sidebar_style',
	'type'        => 'select',
	'choices'     => array(
		'bottom' => 'Bottom Content',
		'both'   => 'Top & Bottom',
	)
) ) );

$wp_customize->add_setting( 'penci_woo_left_sidebar', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_left_sidebar', array(
	'label'    => 'Enable Left Sidebar',
	'section'  => 'pencidesign_new_section_woocommerce',
	'settings' => 'penci_woo_left_sidebar',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_widgets_scroll', array(
	'default'           => true,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_widgets_scroll', array(
	'label'   => 'Enable Scrollable For Filter Widget',
	'section' => 'pencidesign_new_section_woocommerce',
	'type'    => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_widgets_scroll_height', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'penci_woo_widgets_scroll_m_height', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'woo_widgets_scroll_height', array(
	'description' => __( 'Custom Maximium Height For Filter Widget', 'soledad' ),
	'section'     => 'pencidesign_new_section_woocommerce',
	'settings'    => array(
		'desktop' => 'penci_woo_widgets_scroll_height',
		'mobile'  => 'penci_woo_widgets_scroll_m_height',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_general_heading_3', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_general_heading_3', array(
	'label'   => esc_html__( 'Notifications Settings', 'soledad' ),
	'section' => 'pencidesign_woo_toast_notify',
	'type'    => 'heading',
) ) );

$wp_customize->add_setting( 'penci_woo_notify', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_notify', array(
	'label'    => 'Enable Notify',
	'section'  => 'pencidesign_woo_toast_notify',
	'settings' => 'penci_woo_notify',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_add_to_cart_notify', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_add_to_cart_notify', array(
	'label'    => 'Show Added to Cart Notify',
	'section'  => 'pencidesign_woo_toast_notify',
	'settings' => 'penci_woo_add_to_cart_notify',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_notify_position', array(
	'default'           => 'bottom-right',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_notify_position', array(
	'label'       => 'Notify Position',
	'description' => 'Select the position of the notification you want to display',
	'section'     => 'pencidesign_woo_toast_notify',
	'settings'    => 'penci_woo_notify_position',
	'type'        => 'select',
	'choices'     => array(
		'top-left'      => 'Top Left',
		'top-right'     => 'Top Right',
		'top-center'    => 'Top Center',
		'mid-center'    => 'Middle Center',
		'bottom-left'   => 'Bottom Left',
		'bottom-right'  => 'Bottom Right',
		'bottom-center' => 'Bottom Center',
	)
) ) );

$wp_customize->add_setting( 'penci_woo_notify_text_align', array(
	'default'           => 'left',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_notify_text_align', array(
	'label'       => 'Notify Text Align',
	'description' => 'Select the text align of the notification you want to display',
	'section'     => 'pencidesign_woo_toast_notify',
	'settings'    => 'penci_woo_notify_text_align',
	'type'        => 'select',
	'choices'     => array(
		'left'   => 'Left',
		'right'  => 'Right',
		'center' => 'Center',
	)
) ) );

$wp_customize->add_setting( 'penci_woo_notify_transition', array(
	'default'           => 'slide',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_notify_transition', array(
	'label'       => 'Notify Transition Effect',
	'description' => 'Select the transition effect of the notify',
	'section'     => 'pencidesign_woo_toast_notify',
	'settings'    => 'penci_woo_notify_transition',
	'type'        => 'select',
	'choices'     => array(
		'plain' => 'Plain',
		'fade'  => 'Fade',
		'slide' => 'Slide',
	)
) ) );

$wp_customize->add_setting( 'penci_woo_notify_hide_after', array(
	'default'           => '5000',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'woo_notify_hide_after', array(
	'description' => __( 'Hide the Notify after miliseconds', 'soledad' ),
	'section'     => 'pencidesign_woo_toast_notify',
	'settings'    => array(
		'desktop' => 'penci_woo_notify_hide_after',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 100,
			'max'  => 50000,
			'step' => 100,
			'edit' => true,
			'unit' => '',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_woo_notify_bg_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_notify_bg_color', array(
	'label'   => 'Notify Background Color',
	'section' => 'pencidesign_woo_toast_notify',
) ) );

$wp_customize->add_setting( 'penci_woo_notify_text_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_notify_text_color', array(
	'label'   => 'Notify Text Color',
	'section' => 'pencidesign_woo_toast_notify',
) ) );

$wp_customize->add_setting( 'penci_general_heading_4', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_general_heading_4', array(
	'label'   => esc_html__( 'Pagination Settings', 'soledad' ),
	'section' => 'pencidesign_new_section_woocommerce',
	'type'    => 'heading',
) ) );

$wp_customize->add_setting( 'penci_shop_product_pagination', array(
	'default'           => 'pagination',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shop_product_pagination', array(
	'label'       => 'Products pagination',
	'description' => 'Choose a type for the pagination on your shop page.',
	'section'     => 'pencidesign_new_section_woocommerce',
	'settings'    => 'penci_shop_product_pagination',
	'type'        => 'select',
	'choices'     => array(
		'pagination' => 'Pagination',
		'loadmore'   => 'Load More Button',
		'infinit'    => 'Infinit Scrolling',
	)
) ) );

$wp_customize->add_setting( 'penci_woo_paging_align', array(
	'default'           => 'center',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_paging_align', array(
	'label'    => 'Page Navigation Alignment',
	'section'  => 'pencidesign_new_section_woocommerce',
	'settings' => 'penci_woo_paging_align',
	'type'     => 'select',
	'choices'  => array(
		'center' => 'Center',
		'left'   => 'Left',
		'right'  => 'Right'
	)
) ) );

$wp_customize->add_setting( 'penci_shop_product_pagination_ajax_threshold', array(
	'default'           => '400',
	'sanitize_callback' => 'penci_sanitize_number_field'
) );
$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'shop_product_pagination_ajax_threshold', array(
	'label'       => 'Infinit Ajax Scroll Threshold',
	'description' => 'Sets the distance between the viewport to scroll area for scrollThreshold event to be triggered. <a target="_blank" href="https://infinite-scroll.com/options.html#scrollthreshold">Click here</a> for more information.',
	'section'     => 'pencidesign_new_section_woocommerce',
	'settings'    => 'penci_shop_product_pagination_ajax_threshold',
	'type'        => 'number',
) ) );

$wp_customize->add_setting( 'penci_shop_product_pagination_ajax_history', array(
	'default'           => 'false',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shop_product_pagination_ajax_history', array(
	'label'       => 'Infinit Scroll History Options',
	'description' => 'Changes page URL and browser history. <a target="_blank" href="https://infinite-scroll.com/options.html#history-options">Click here</a> for more information.',
	'section'     => 'pencidesign_new_section_woocommerce',
	'settings'    => 'penci_shop_product_pagination_ajax_history',
	'type'        => 'select',
	'choices'     => array(
		'false'   => 'Disable',
		'push'    => 'Push',
		'replace' => 'Replace',
	)
) ) );

$wp_customize->add_setting( 'penci_shop_product_pagination_ajax_title', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shop_product_pagination_ajax_title', array(
	'label'       => 'History Title',
	'description' => 'Updates the window title. Requires history enabled. <a target="_blank" href="https://infinite-scroll.com/options.html#historytitle">Click here</a> for more information.',
	'section'     => 'pencidesign_new_section_woocommerce',
	'settings'    => 'penci_shop_product_pagination_ajax_title',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_shop_mini_cart_quantity', array(
	'default'           => true,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_shop_mini_cart_quantity', array(
	'label'       => 'Side Cart Product Quantity Input',
	'description' => 'Show quantity input on side cart product item.',
	'section'     => 'pencidesign_new_section_woocommerce',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_shop_stock_progress_bar', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_shop_stock_progress_bar', array(
	'label'       => 'Show Stock Progress Bar on Product',
	'section'     => 'pencidesign_new_section_woocommerce',
	'type'        => 'checkbox',
) ) );

/* Catalog Section*/
$wp_customize->add_setting( 'penci_woo_post_per_page', array(
	'default'           => '24',
	'sanitize_callback' => 'penci_sanitize_number_field'
) );
$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'woo_post_per_page', array(
	'label'    => 'Total Products Display Per Page',
	'section'  => 'woocommerce_product_catalog',
	'settings' => 'penci_woo_post_per_page',
	'type'     => 'number',
) ) );

$wp_customize->add_setting( 'penci_catalog_heading_1', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_catalog_heading_1', array(
	'label'   => esc_html__( 'Catalog Tools Settings', 'soledad' ),
	'section' => 'woocommerce_product_catalog',
	'type'    => 'heading',
) ) );

$wp_customize->add_setting( 'penci_woo_post_per_page_variations', array(
	'default'           => '9,24,36',
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_post_per_page_variations', array(
	'label'    => 'Products Per Page Variations',
	'section'  => 'woocommerce_product_catalog',
	'settings' => 'penci_woo_post_per_page_variations',
	'type'     => 'text',
) ) );

$wp_customize->add_setting( 'penci_woo_per_row_columns_selector', array(
	'default'           => true,
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_per_row_columns_selector', array(
	'label'   => 'Show Columns Selector on Shop page',
	'section' => 'woocommerce_product_catalog',
	'type'    => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_shop_product_view', array(
	'default'           => 'list-grid',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shop_product_view', array(
	'label'       => 'Shop products view',
	'description' => 'You can set different view mode for the shop page',
	'section'     => 'woocommerce_product_catalog',
	'settings'    => 'penci_shop_product_view',
	'type'        => 'select',
	'choices'     => array(
		'grid'      => 'Grid',
		'list'      => 'List',
		'grid-list' => 'Grid/List',
		'list-grid' => 'List/Grid',
	)
) ) );

$wp_customize->add_setting( 'penci_woocommerce_ajax_shop', array(
	'default'           => true,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_ajax_shop', array(
	'label'       => 'AJAX shop',
	'description' => 'Enable AJAX functionality for filter widgets, categories navigation, and pagination on the shop page.',
	'section'     => 'woocommerce_product_catalog',
	'settings'    => 'penci_woocommerce_ajax_shop',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woocommerce_ajax_shop_auto_top', array(
	'default'           => true,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_ajax_shop_auto_top', array(
	'label'       => 'Scroll to top after AJAX',
	'description' => 'Disable - Enable scroll to top after AJAX.',
	'section'     => 'woocommerce_product_catalog',
	'settings'    => 'penci_woocommerce_ajax_shop_auto_top',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_general_heading_5', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_general_heading_5', array(
	'label'   => esc_html__( 'Other Settings', 'soledad' ),
	'section' => 'pencidesign_new_section_woocommerce',
	'type'    => 'heading',
) ) );


$wp_customize->add_setting( 'penci_woocommerce_search_included_posts', array(
	'default'           => true,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woocommerce_search_included_posts', array(
	'label'   => 'Show blog search results below of product search',
	'section' => 'pencidesign_new_section_woocommerce',
	'type'    => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woocommerce_search_included_total', array(
	'default'           => 5,
	'sanitize_callback' => 'penci_sanitize_number_field'
) );
$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_woocommerce_search_included_total', array(
	'label'   => 'Total blog item Display under product serch',
	'section' => 'pencidesign_new_section_woocommerce',
	'type'    => 'number',
) ) );

$wp_customize->add_setting( 'penci_calalog_heading_1', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_calalog_heading_1', array(
	'label'   => esc_html__( 'Product Item Settings', 'soledad' ),
	'section' => 'woocommerce_product_catalog',
	'type'    => 'heading',
) ) );

$wp_customize->add_setting( 'penci_woocommerce_product_cat_style', array(
	'default'           => 'style-1',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_product_cat_style', array(
	'label'       => 'Product Category Style',
	'description' => 'Select the style of the category showing on archive/categories/tags/search',
	'section'     => 'woocommerce_product_catalog',
	'settings'    => 'penci_woocommerce_product_cat_style',
	'type'        => 'select',
	'choices'     => array(
		'style-1' => 'Style 1',
		'style-2' => 'Style 2',
		'style-3' => 'Style 3',
		'style-4' => 'Style 4',
		'style-5' => 'Style 5',
	)
) ) );

$wp_customize->add_setting( 'penci_woocommerce_product_style', array(
	'default'           => 'style-1',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_product_style', array(
	'label'       => 'Product Item Style',
	'description' => 'Select the style of the product showing on shop/archive/categories/tags/search<br/>.',
	'section'     => 'woocommerce_product_catalog',
	'settings'    => 'penci_woocommerce_product_style',
	'type'        => 'select',
	'choices'     => array(
		'standard' => 'Default',
		'style-1'  => 'Style 1',
		'style-2'  => 'Style 2',
		'style-3'  => 'Style 3',
		'style-4'  => 'Style 4',
		'style-5'  => 'Style 5',
		'style-6'  => 'Style 6',
		'style-7'  => 'Style 7',
	)
) ) );

$wp_customize->add_setting( 'penci_woocommerce_product_icon_hover_style', array(
	'default'           => 'round',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woocommerce_product_icon_hover_style', array(
	'label'       => 'Icon Hover Style',
	'description' => 'Select icon hover style on Product Item',
	'section'     => 'woocommerce_product_catalog',
	'type'        => 'select',
	'choices'     => array(
		'round' => 'Separate Round',
		'group' => 'Group in Rectangle',
	)
) ) );

$wp_customize->add_setting( 'penci_woocommerce_product_icon_hover_position', array(
	'default'           => 'top-left',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woocommerce_product_icon_hover_position', array(
	'label'       => 'Icon Hover Position',
	'description' => 'Select icon hover position on Product Item',
	'section'     => 'woocommerce_product_catalog',
	'type'        => 'select',
	'choices'     => array(
		'top-left'      => 'Top left',
		'top-right'     => 'Top Right',
		'bottom-left'   => 'Bottom Left',
		'bottom-right'  => 'Bottom Right',
		'center-top'    => 'Center Top',
		'center-center' => 'Center Center',
		'center-bottom' => 'Center Bottom',
	)
) ) );

$wp_customize->add_setting( 'penci_woocommerce_product_icon_hover_animation', array(
	'default'           => 'move-right',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woocommerce_product_icon_hover_animation', array(
	'label'       => 'Icon Hover Animation',
	'description' => 'Select icon hover animation on Product Item',
	'section'     => 'woocommerce_product_catalog',
	'type'        => 'select',
	'choices'     => array(
		'move-left'   => 'Move to left',
		'move-right'  => 'Move to Right',
		'move-top'    => 'Move to Top',
		'move-bottom' => 'Move to Bottom',
		'fade'        => 'Fade In',
		'zoom'        => 'Zoom In',
	)
) ) );

$wp_customize->add_setting( 'penci_woocommerce_product_hover_img', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_product_hover_img', array(
	'label'    => 'Enable Hover Image on Product Catalog ?',
	'section'  => 'woocommerce_product_catalog',
	'settings' => 'penci_woocommerce_product_hover_img',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woocommerce_loop_category', array(
	'default'           => true,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_loop_category', array(
	'label'       => 'Show product category ?',
	'description' => 'Display product category link below the product title.',
	'section'     => 'woocommerce_product_catalog',
	'settings'    => 'penci_woocommerce_loop_category',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woocommerce_loop_rating', array(
	'default'           => true,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woocommerce_loop_rating', array(
	'label'       => 'Show product star rating ?',
	'description' => 'Display product loop rating below the product title.',
	'section'     => 'woocommerce_product_catalog',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woocommerce_restrict_cart_price', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_restrict_cart_price', array(
	'label'       => 'Login to see add to cart and prices',
	'description' => 'You can restrict shopping functions only for logged in customers.',
	'section'     => 'woocommerce_product_catalog',
	'settings'    => 'penci_woocommerce_restrict_cart_price',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woocommerce_product_quick_shop', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_product_quick_shop', array(
	'label'       => 'Enable Quick Select Options on Product',
	'description' => 'Allow customers purchase product on hover content.',
	'section'     => 'woocommerce_product_catalog',
	'settings'    => 'penci_woocommerce_product_quick_shop',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_limit_product_title', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_number_field'
) );
$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'woo_limit_product_title', array(
	'label'    => 'Limit Product Title Length',
	'desc'     => 'Enter the custom length of the product title you want to display',
	'section'  => 'woocommerce_product_catalog',
	'settings' => 'penci_woo_limit_product_title',
	'type'     => 'number',
) ) );

$wp_customize->add_setting( 'penci_woo_limit_product_excerpt', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_number_field'
) );
$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'woo_limit_product_summary', array(
	'label'    => 'Limit Product Excerpt Length',
	'desc'     => 'Enter the custom length of the product summary you want to display',
	'section'  => 'woocommerce_product_catalog',
	'settings' => 'penci_woo_limit_product_excerpt',
	'type'     => 'number',
) ) );

if ( function_exists( 'penci_product_attributes_array' ) ) {
	$wp_customize->add_setting( 'penci_woocommerce_grid_swatch', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_grid_swatch', array(
		'label'       => 'Grid swatch attribute to display',
		'description' => 'Choose the attribute that will be shown on the product grid.',
		'section'     => 'woocommerce_product_catalog',
		'settings'    => 'penci_woocommerce_grid_swatch',
		'type'        => 'select',
		'choices'     => penci_product_attributes_array(),
	) ) );
}

$wp_customize->add_setting( 'penci_woocommerce_grid_swatch_limit', array(
	'default'           => '5',
	'sanitize_callback' => 'absint'
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'woocommerce_grid_swatch_limit', array(
	'label'    => 'Limit swatches on grid ',
	'section'  => 'woocommerce_product_catalog',
	'settings' => array(
		'desktop' => 'penci_woocommerce_grid_swatch_limit',
	),
	'choices'  => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
			'edit' => true,
			'unit' => '',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_woocommerce_grid_swatch_cache', array(
	'default'           => true,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woocommerce_grid_swatch_cache', array(
	'label'       => 'Enable Product Swatches Shop Cache',
	'description' => 'By default, Soledad using cache to speed up Query for swatch image. Uncheck this option to disable/debug.',
	'section'     => 'woocommerce_product_catalog',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_catalog_heading_4', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_catalog_heading_4', array(
	'label'   => esc_html__( 'Catalog Columns Settings', 'soledad' ),
	'section' => 'woocommerce_product_catalog',
	'type'    => 'heading',
) ) );

$wp_customize->add_setting( 'penci_shop_cat_columns', array(
	'default'           => 4,
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_shop_cat_columns', array(
	'label'       => 'Categories Columns',
	'description' => 'How many category should be shown per row on section ?',
	'section'     => 'woocommerce_product_catalog',
	'type'        => 'select',
	'choices'     => array(
		2 => '2 Columns',
		3 => '3 Columns',
		4 => '4 Columns',
		5 => '5 Columns',
		6 => '6 Columns',
	)
) ) );

$wp_customize->add_setting( 'penci_shop_cat_display_type', array(
	'default'           => 'grid',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_shop_cat_display_type', array(
	'label'       => 'Categories Display Style',
	'description' => 'Select the category displays style on shop/category page',
	'section'     => 'woocommerce_product_catalog',
	'type'        => 'select',
	'choices'     => array(
		'grid'     => 'Grid',
		'carousel' => 'Carousel',
	)
) ) );

$wp_customize->add_setting( 'penci_shop_product_columns', array(
	'default'           => 3,
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_shop_product_columns', array(
	'label'       => 'Products per row on Desktop',
	'description' => 'How many products should be shown per row on desktop ?',
	'section'     => 'woocommerce_product_catalog',
	'type'        => 'select',
	'choices'     => array(
		2 => '2 Columns',
		3 => '3 Columns',
		4 => '4 Columns',
		5 => '5 Columns',
		6 => '6 Columns',
	)
) ) );

$wp_customize->add_setting( 'penci_shop_product_mobile_columns', array(
	'default'           => 2,
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shop_product_mobile_columns', array(
	'label'       => 'Products per row on Mobile',
	'description' => 'How many products should be shown per row on mobile ?',
	'section'     => 'woocommerce_product_catalog',
	'settings'    => 'penci_shop_product_mobile_columns',
	'type'        => 'select',
	'choices'     => array(
		1 => '1 Column',
		2 => '2 Columns',
	)
) ) );

/* Single Product Section */
$wp_customize->add_setting( 'penci_single_product_breadcrumb_position', array(
	'default'           => 'top',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'single_product_breadcrumb_position', array(
	'label'       => 'Breadcrumb Position',
	'description' => 'Select the breadcrumb position on single product',
	'section'     => 'pencidesign_woo_single_settings',
	'settings'    => 'penci_single_product_breadcrumb_position',
	'type'        => 'select',
	'choices'     => array(
		'top'     => 'Top of page',
		'summary' => 'Top of product summary',
		'hidden'  => 'Hidden',
	)
) ) );

$wp_customize->add_setting( 'penci_single_product_img_width', array(
	'default'           => 'standard',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'single_product_img_width', array(
	'label'       => 'Product image width',
	'description' => 'You can choose different page layout depending on the product image size you need',
	'section'     => 'pencidesign_woo_single_settings',
	'settings'    => 'penci_single_product_img_width',
	'type'        => 'select',
	'choices'     => array(
		'standard'            => 'Standard',
		'medium'              => 'Medium',
		'large'               => 'Large',
		'fullwidth-container' => 'Full Width (Container)',
		'fullwidth'           => 'Full Width',
	)
) ) );

$wp_customize->add_setting( 'penci_single_product_summary_width', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_single_product_summary_width', array(
	'description' => __( 'Custom Max Width for Product Detail on Full Width Images Style', 'soledad' ),
	'section'     => 'pencidesign_woo_single_settings',
	'settings'    => array(
		'desktop' => 'penci_single_product_summary_width',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 1170,
			'step' => 1,
			'edit' => true,
			'unit' => '',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_single_product_thumbnail_position', array(
	'default'           => 'thumbnail-left',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'single_product_thumbnail_position', array(
	'label'       => 'Thumbnails position',
	'description' => 'Use vertical or horizontal position for thumbnails.',
	'section'     => 'pencidesign_woo_single_settings',
	'settings'    => 'penci_single_product_thumbnail_position',
	'type'        => 'select',
	'choices'     => array(
		'thumbnail-left'         => 'Left',
		'thumbnail-right'        => 'Right',
		'thumbnail-bottom'       => 'Bottom',
		'thumbnail-bottom-1-col' => 'Bottom 1 Column',
		'thumbnail-bottom-2-col' => 'Bottom 2 Column',
		'thumbnail-grid'         => 'Grid',
		'thumbnail-without'      => 'Without',
	)
) ) );

$wp_customize->add_setting( 'penci_woo_disable_zoom', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_disable_zoom', array(
	'label'    => 'Disable Zoom on Gallery Product',
	'section'  => 'pencidesign_woo_single_settings',
	'settings' => 'penci_woo_disable_zoom',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_single_product_sticky_thumbnail_content', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'single_product_sticky_thumbnail_content', array(
	'label'       => 'Sticky Product Image & Content',
	'description' => 'Check to enable sticky content & product images',
	'section'     => 'pencidesign_woo_single_settings',
	'settings'    => 'penci_single_product_sticky_thumbnail_content',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_single_product_top_related_product', array(
	'default'           => true,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_single_product_top_related_product', array(
	'label'       => 'Enable Top Next/Previous Posts',
	'description' => 'Check to show the next/prvious post on the top of product.',
	'section'     => 'pencidesign_woo_single_settings',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_single_product_style', array(
	'default'           => 'default',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'single_product_style', array(
	'label'    => 'Tabs Content Display Style',
	'section'  => 'pencidesign_woo_single_settings',
	'settings' => 'penci_single_product_style',
	'type'     => 'select',
	'choices'  => array(
		'default'           => 'Standard',
		'accordion-tab'     => 'Accordion Toggle',
		'accordion-content' => 'Accordion Content',
	)
) ) );

$wp_customize->add_setting( 'penci_single_product_summary_align', array(
	'default'           => 'standard',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'single_product_summary_align', array(
	'label'       => 'Product Summary Align',
	'description' => 'Select default product summary align style',
	'section'     => 'pencidesign_woo_single_settings',
	'settings'    => 'penci_single_product_summary_align',
	'type'        => 'select',
	'choices'     => array(
		'standard' => 'Standard',
		'center'   => 'Center',
	)
) ) );

$wp_customize->add_setting( 'pencidesign_woo_single_sticky_add_to_cart', array(
	'default'           => 'disable',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_single_sticky_add_to_cart', array(
	'label'    => 'Enable sticky add to cart ?',
	'section'  => 'pencidesign_woo_single_settings',
	'settings' => 'pencidesign_woo_single_sticky_add_to_cart',
	'type'     => 'select',
	'choices'  => array(
		'enable'  => 'Enable',
		'disable' => 'Disable',
	)
) ) );

$wp_customize->add_setting( 'pencidesign_woo_single_add_shadow_to_summary', array(
	'default'           => 'disable',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_single_add_shadow_to_summary', array(
	'label'       => 'Add shadow to product summary block',
	'description' => 'Useful when you set background color for the single product page to gray for example.',
	'section'     => 'pencidesign_woo_single_settings',
	'settings'    => 'woo_single_add_shadow_to_summary',
	'type'        => 'select',
	'choices'     => array(
		'enable'  => 'Enable',
		'disable' => 'Disable',
	)
) ) );

$wp_customize->add_setting( 'penci_woo_custom_tab', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_custom_tab', array(
	'label'    => 'Enable Custom Tab',
	'section'  => 'pencidesign_woo_single_settings',
	'settings' => 'penci_woo_custom_tab',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_custom_tab_title', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_custom_tab_title', array(
	'label'    => 'Custom Tab Title',
	'section'  => 'pencidesign_woo_single_settings',
	'settings' => 'penci_woo_custom_tab_title',
	'type'     => 'text',
) ) );

$wp_customize->add_setting( 'penci_woo_custom_tab_content', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_custom_tab_content', array(
	'label'    => 'Custom Tab Content',
	'section'  => 'pencidesign_woo_single_settings',
	'settings' => 'penci_woo_custom_tab_content',
	'type'     => 'textarea',
) ) );

$wp_customize->add_setting( 'penci_woo_custom_tab_priority', array(
	'default'           => 50,
	'sanitize_callback' => 'penci_sanitize_number_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_custom_tab_priority', array(
	'label'    => 'Custom Tab Priority',
	'section'  => 'pencidesign_woo_single_settings',
	'settings' => 'penci_woo_custom_tab_priority',
	'type'     => 'number',
) ) );

$wp_customize->add_setting( 'pencidesign_woo_single_select2button', array(
	'default'           => true,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_single_select2button', array(
	'label'       => 'Convert select into the button',
	'description' => 'Convert the select into button on the no-swatches field.',
	'section'     => 'pencidesign_woo_single_settings',
	'settings'    => 'pencidesign_woo_single_select2button',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_social_share_style', array(
	'default'           => 'style-1',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_social_share_style', array(
	'label'       => 'Product Social Sharing Style',
	'description' => 'Select the social sharing style.',
	'section'     => 'pencidesign_woo_single_settings',
	'type'        => 'select',
	'choices'     => array(
		'style-1' => 'Style 1',
		'style-2' => 'Style 2',
		'style-3' => 'Style 3',
		'style-4' => 'Style 4',
	)
) ) );

$wp_customize->add_setting( 'penci_woo_social_icon_style', array(
	'default'           => 'circle',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_social_icon_style', array(
	'label'       => 'Product Social Icon Style',
	'description' => 'Select the social sharing style.',
	'section'     => 'pencidesign_woo_single_settings',
	'type'        => 'select',
	'choices'     => array(
		'circle' => 'Circle',
		'square' => 'Square',
	)
) ) );

$wp_customize->add_setting( 'penci_shop_product_related_columns', array(
	'default'           => 4,
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_shop_product_related_columns', array(
	'label'       => 'Related Product Columns',
	'description' => 'How many products should be shown per row on related section ?',
	'section'     => 'pencidesign_woo_single_settings',
	'type'        => 'select',
	'choices'     => array(
		2 => '2 Columns',
		3 => '3 Columns',
		4 => '4 Columns',
		5 => '5 Columns',
		6 => '6 Columns',
	)
) ) );

$wp_customize->add_setting( 'penci_woo_number_related_products', array(
	'default'           => '4',
	'sanitize_callback' => 'penci_sanitize_number_field'
) );
$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'woo_number_related_products', array(
	'label'    => 'Custom Amount of Related Products',
	'section'  => 'pencidesign_woo_single_settings',
	'settings' => 'penci_woo_number_related_products',
	'type'     => 'number',
) ) );

$wp_customize->add_setting( 'penci_shop_product_up_sell_columns', array(
	'default'           => 4,
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_shop_product_up_sell_columns', array(
	'label'       => 'Up Sell Product Columns',
	'description' => 'How many products should be shown per row on up sell section ?',
	'section'     => 'pencidesign_woo_single_settings',
	'type'        => 'select',
	'choices'     => array(
		2 => '2 Columns',
		3 => '3 Columns',
		4 => '4 Columns',
		5 => '5 Columns',
		6 => '6 Columns',
	)
) ) );

/* Product Brand */
if ( function_exists( 'penci_product_attributes_array' ) ) {
	$wp_customize->add_setting( 'penci_woocommerce_brand_attr', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woocommerce_brand_attr', array(
		'label'       => 'Brand attribute',
		'description' => 'If you want to show brand image on your product page select desired attribute here',
		'section'     => 'pencidesign_woo_brand_settings',
		'settings'    => 'penci_woocommerce_brand_attr',
		'type'        => 'select',
		'choices'     => penci_product_attributes_array(),
	) ) );
}

$wp_customize->add_setting( 'penci_woocommerce_brand', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_brand', array(
	'label'       => 'Show brand on the single product page',
	'description' => 'You can disable/enable products brand image on the single page .',
	'section'     => 'pencidesign_woo_brand_settings',
	'settings'    => 'penci_woocommerce_brand',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woocommerce_brand_tab', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_brand_tab', array(
	'label'       => 'Show tab with brand information',
	'description' => 'If enabled you will see an additional tab with brand description on the single product page. Text will be taken from the "Description" field for each brand (attribute term).',
	'section'     => 'pencidesign_woo_brand_settings',
	'settings'    => 'penci_woocommerce_brand_tab',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woocommerce_brand_tab_title', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_brand_tab_title', array(
	'label'       => 'Use brand name for tab title',
	'description' => 'If you enable this option, the tab with the brand information will be called "About [Brand name]"..',
	'section'     => 'pencidesign_woo_brand_settings',
	'settings'    => 'penci_woocommerce_brand_tab_title',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woocommerce_brand_display', array(
	'default'           => 'summary',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woocommerce_brand_display', array(
	'label'       => 'Brand Display Position',
	'description' => 'Select the brand logo placement you want to display at single product',
	'section'     => 'pencidesign_woo_brand_settings',
	'type'        => 'select',
	'choices'     => array(
		'top'     => esc_attr__( 'Top', 'soledad' ),
		'summary' => esc_attr__( 'Summary', 'soledad' ),
	),
) ) );

/* Quick View */
$wp_customize->add_setting( 'penci_woocommerce_quickview', array(
	'default'           => true,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_quickview', array(
	'label'       => 'Quick View',
	'description' => 'Enable Quick view option. Ability to see the product information with AJAX.',
	'section'     => 'pencidesign_woo_quickview_settings',
	'settings'    => 'penci_woocommerce_quickview',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woocommerce_quickview_variations', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_quickview_variations', array(
	'label'       => 'Show variations information on quick view',
	'description' => 'Enable Quick show all product summary information for variable products.',
	'section'     => 'pencidesign_woo_quickview_settings',
	'settings'    => 'penci_woocommerce_quickview_variations',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woocommerce_quickview_width', array(
	'default'           => '960',
	'sanitize_callback' => 'absint'
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'woocommerce_quickview_width', array(
	'label'       => 'Quick view width',
	'description' => 'Set width of the quick view in pixels.',
	'section'     => 'pencidesign_woo_quickview_settings',
	'settings'    => array(
		'desktop' => 'penci_woocommerce_quickview_width',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 400,
			'max'  => 120,
			'step' => 50,
			'edit' => true,
			'unit' => '',
		),
	),
) ) );

/* Compare  */
$wp_customize->add_setting( 'penci_woocommerce_compare', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_compare', array(
	'label'       => 'Enable compare',
	'description' => 'Enable compare functionality built in with the theme.',
	'section'     => 'pencidesign_woo_compare_settings',
	'settings'    => 'penci_woocommerce_compare',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_shop_hide_compare_icon', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_shop_hide_compare_icon', array(
	'label'   => 'Hide Header Compare Icon',
	'section' => 'pencidesign_woo_compare_settings',
	'type'    => 'checkbox'
) ) );

if ( function_exists( 'penci_get_pages_option' ) ) {
	$wp_customize->add_setting( 'penci_woocommerce_compare_page', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_compare_page', array(
		'label'       => 'Compare page',
		'description' => 'Select a page for the compare table. It should contain the shortcode: [penci_compare_table]',
		'section'     => 'pencidesign_woo_compare_settings',
		'settings'    => 'penci_woocommerce_compare_page',
		'type'        => 'select',
		'choices'     => penci_get_pages_option(),
	) ) );
}

$wp_customize->add_setting( 'penci_woocommerce_compare_show', array(
	'default'           => true,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_compare_show', array(
	'label'       => 'Show button on product grid',
	'description' => 'Display compare product button on all products grids and lists.',
	'section'     => 'pencidesign_woo_compare_settings',
	'settings'    => 'penci_woocommerce_compare_show',
	'type'        => 'checkbox',
) ) );

if ( class_exists( 'penci_product_compare' ) ) {
	$wp_customize->add_setting( 'penci_woocommerce_compare_fields', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_multiple_checkbox'
	) );
	$wp_customize->add_control( new Penci_Customize_Control_Checkbox_Multiple( $wp_customize, 'woocommerce_compare_fields', array(
		'label'       => 'Select compare fields',
		'description' => 'Check a fields display on compare page.',
		'section'     => 'pencidesign_woo_compare_settings',
		'settings'    => 'penci_woocommerce_compare_fields',
		'choices'     => penci_product_compare::compare_available_fields( true ),
	) ) );
}

$wp_customize->add_setting( 'penci_woo_section_compare_heading_01', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_woo_section_compare_heading_01', array(
	'label'    => esc_html__( 'Quick Text Translate', 'soledad' ),
	'section'  => 'pencidesign_woo_compare_settings',
	'settings' => 'penci_woo_section_compare_heading_01',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'penci_woo_trans_compare_empty_title', array(
	'default'           => 'Compare list is empty.',
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_trans_compare_empty_title', array(
	'label'   => 'Empty compare heading text',
	'section' => 'pencidesign_woo_compare_settings',
	'type'    => 'text',
) ) );

$wp_customize->add_setting( 'penci_woocommerce_compare_empty_text', array(
	'default'           => 'No products added in the compare list. You must add some products to compare them.<br> You will find a lot of interesting products on our "Shop" page.',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_compare_empty_text', array(
	'label'       => 'Empty compare text',
	'description' => 'Text will be displayed if user don\'t add any products to compare',
	'section'     => 'pencidesign_woo_compare_settings',
	'settings'    => 'penci_woocommerce_compare_empty_text',
	'type'        => 'textarea',
) ) );


/* Wishlist  */
$wp_customize->add_setting( 'penci_woocommerce_wishlist', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_wishlist', array(
	'label'       => 'Enable Wishlist',
	'description' => 'Enable wishlist functionality built in with the theme.',
	'section'     => 'pencidesign_woo_wishlist_settings',
	'settings'    => 'penci_woocommerce_wishlist',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_shop_hide_wishlist_icon', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_shop_hide_wishlist_icon', array(
	'label'   => 'Hide Header Wishlist Icon',
	'section' => 'pencidesign_woo_wishlist_settings',
	'type'    => 'checkbox'
) ) );

if ( function_exists( 'penci_get_pages_option' ) ) {
	$wp_customize->add_setting( 'penci_woocommerce_wishlist_page', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_wishlist_page', array(
		'label'       => 'Wishlist page',
		'description' => 'Select a page for the wishlist table. It should contain the shortcode: [penci_wishlist]',
		'section'     => 'pencidesign_woo_wishlist_settings',
		'settings'    => 'penci_woocommerce_wishlist_page',
		'type'        => 'select',
		'choices'     => penci_get_pages_option()
	) ) );
}

$wp_customize->add_setting( 'penci_woocommerce_wishlist_only_logged_in', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_wishlist_only_logged_in', array(
	'label'       => 'Only for logged in',
	'description' => 'Disable wishlist for guests customers.',
	'section'     => 'pencidesign_woo_wishlist_settings',
	'settings'    => 'penci_woocommerce_wishlist_only_logged_in',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woocommerce_wishlist_show', array(
	'default'           => true,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_wishlist_show', array(
	'label'       => 'Show button on product grid',
	'description' => 'Display wishlist product button on all products grids and lists.',
	'section'     => 'pencidesign_woo_wishlist_settings',
	'settings'    => 'penci_woocommerce_wishlist_show',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_section_wishlist_heading_01', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_woo_section_wishlist_heading_01', array(
	'label'    => esc_html__( 'Quick Text Translate', 'soledad' ),
	'section'  => 'pencidesign_woo_wishlist_settings',
	'settings' => 'penci_woo_section_wishlist_heading_01',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'penci_woo_trans_wishlist_empty_title', array(
	'default'           => 'Wishlist is empty.',
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_trans_wishlist_empty_title', array(
	'label'   => 'Empty wishlist heading text',
	'section' => 'pencidesign_woo_wishlist_settings',
	'type'    => 'text',
) ) );

$wp_customize->add_setting( 'penci_woocommerce_wishlist_empty_text', array(
	'default'           => 'You don\'t have any products in the wishlist yet. <br> You will find a lot of interesting products on our "Shop" page.',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woocommerce_wishlist_empty_text', array(
	'label'       => 'Empty wishlist text',
	'description' => 'Text will be displayed if user don\'t add any products to wishlist',
	'section'     => 'pencidesign_woo_wishlist_settings',
	'settings'    => 'penci_woocommerce_wishlist_empty_text',
	'type'        => 'textarea',
) ) );

/*Color Settings*/
$wp_customize->add_setting( 'penci_woo_section_sidebarcart_color', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_woo_section_sidebarcart_color', array(
	'label'    => esc_html__( 'Side Cart Style', 'soledad' ),
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_section_sidebarcart_color',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'penci_woo_sidecart_bg_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_sidecart_bg_color', array(
	'label'   => 'Background Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_sidecart_heading_bg_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_sidecart_heading_bg_color', array(
	'label'   => 'Heading Background Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_sidecart_heading_txt_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_sidecart_heading_txt_color', array(
	'label'   => 'Heading Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_sidecart_product_title_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_sidecart_product_title_color', array(
	'label'   => 'Product Title Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_sidecart_product_title_hover_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_sidecart_product_title_hover_color', array(
	'label'   => 'Product Title Hover Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_sidecart_border_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_sidecart_border_color', array(
	'label'   => 'Border Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_sidecart_price_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_sidecart_price_color', array(
	'label'   => 'Price Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_sidecart_pitem_bg_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_sidecart_pitem_bg_color', array(
	'label'   => 'Product Item Background Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_sidecart_pitem_bg_hover_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_sidecart_pitem_bg_hover_color', array(
	'label'   => 'Product Item Hover Background Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_sidecart_pitem_bg_text_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_sidecart_pitem_bg_text_color', array(
	'label'   => 'Product Item Hover Text Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_sidecart_accent_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_sidecart_accent_color', array(
	'label'   => 'Accent Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_sidecart_heading_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_sidecart_heading_color', array(
	'label'   => 'Heading Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_sidecart_btn_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_sidecart_btn_color', array(
	'label'   => 'Button Background Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_sidecart_btn_text_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_sidecart_text_color', array(
	'label'   => 'Button Text Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_sidecart_btn_hover_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_sidecart_btn_hover_color', array(
	'label'   => 'Button Background Hover Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_sidecart_btn_text_hover_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_sidecart_btn_text_hover_color', array(
	'label'   => 'Button Text Hover Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_sidecart_footer_bgcolor', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_sidecart_footer_bgcolor', array(
	'label'   => 'Footer Background Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

/* Product Item*/
$wp_customize->add_setting( 'penci_woo_section_product_color_loop', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'woo_section_product_color_loop', array(
	'label'    => esc_html__( 'Product Item Style', 'soledad' ),
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_section_product_color_loop',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_title_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_product_loop_title_color', array(
	'label'    => 'Product Item Title',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_product_loop_title_color',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_price_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_product_loop_price_color', array(
	'label'    => 'Product Item Price Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_product_loop_price_color',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_cat_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_loop_cat_color', array(
	'label'   => 'Product Item Cat Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_cat_hover_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_loop_cat_hover_color', array(
	'label'   => 'Product Item Cat Hover Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_button_groups_bgcolor', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_product_loop_button_groups_bgcolor', array(
	'label'    => 'Product Item Button Group Background Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_product_loop_button_groups_bgcolor',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_button_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_product_loop_button_color', array(
	'label'    => 'Product Item Button Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_product_loop_button_color',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_button_hover_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_loop_button_hover_color', array(
	'label'   => 'Product Item Button Hover Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_button_bg_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_loop_button_bg_color', array(
	'label'    => 'Product Item Button Background Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_product_loop_button_bg_color',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_button_bg_hover_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_loop_button_bg_hover_color', array(
	'label'   => 'Product Item Button Background Hover Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_overlay_bg_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_overlay_bg_color', array(
	'label'       => 'Product Item Overlay Background Color',
	'description' => 'Apply to Product Item style 5 & style 7',
	'section'     => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_overlay_bg_opacity', array(
	'default'           => '0.5',
	'sanitize_callback' => 'absint'
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_woo_product_overlay_bg_opacity', array(
	'label'       => 'Product Item Overlay Opacity',
	'description' => 'Apply to Product Item style 5 & style 7',
	'section'     => 'pencidesign_woo_colors_settings',
	'settings'    => array(
		'desktop' => 'penci_woo_product_overlay_bg_opacity',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 0,
			'max'  => 1,
			'step' => 0.1,
			'edit' => true,
			'unit' => '',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_woo_product_overlay_title_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_overlay_title_color', array(
	'label'       => 'Product Item Overlay Title Color',
	'description' => 'Apply to Product Item style 5 & style 7',
	'section'     => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_overlay_link_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_overlay_link_color', array(
	'label'       => 'Product Item Overlay Link Color',
	'description' => 'Apply to Product Item style 5 & style 7',
	'section'     => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_overlay_link_hover_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_overlay_link_hover_color', array(
	'label'       => 'Product Item Overlay Link Hover Color',
	'description' => 'Apply to Product Item style 5 & style 7',
	'section'     => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_overlay_button_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_overlay_button_color', array(
	'label'       => 'Product Item Overlay Button Color',
	'description' => 'Apply to Product Item style 5 & style 7',
	'section'     => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style6_bg', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style6_bg', array(
	'label'   => 'Product Item Style 6 Background Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style6_text_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style6_text_color', array(
	'label'   => 'Product Item Style 6 Text Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style6_title_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style6_title_color', array(
	'label'   => 'Product Item Style 6 Title Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style6_link_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style6_link_color', array(
	'label'   => 'Product Item Style 6 Link Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style6_link_hover_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style6_link_hover_color', array(
	'label'   => 'Product Item Style 6 Link Hover Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style6_price_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style6_price_color', array(
	'label'   => 'Product Item Style 6 Price Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style3_atc_bg_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style3_atc_bg_color', array(
	'label'   => 'Product Item Style 3 Add To Cart Background Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style3_atc_bg_hover_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style3_atc_bg_hover_color', array(
	'label'   => 'Product Item Style 3 Add To Cart Hover Background Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style3_atc_text_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style3_atc_text_color', array(
	'label'   => 'Product Item Style 3 Add To Cart Text Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style3_atc_text_hover_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style3_atc_text_hover_color', array(
	'label'   => 'Product Item Style 3 Add To Cart Hover Text Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style5_atc_text_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style5_atc_text_color', array(
	'label'   => 'Product Item Style 5 Add To Cart Text Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style5_atc_hv_text_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style5_atc_hv_text_color', array(
	'label'   => 'Product Item Style 5 Add To Cart Hover Text Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style5_atc_border_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style5_atc_border_color', array(
	'label'   => 'Product Item Style 5 Add To Cart Border Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style5_atc_hv_border_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style5_atc_hv_border_color', array(
	'label'   => 'Product Item Style 5 Add To Cart Hover Border Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style5_atc_bg_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style5_atc_bg_color', array(
	'label'   => 'Product Item Style 5 Add To Cart Background Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style5_atc_hv_bg_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style5_atc_hv_bg_color', array(
	'label'   => 'Product Item Style 5 Add To Cart Hover Background Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style4_atc_txt_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style4_atc_txt_color', array(
	'label'   => 'Product Item Style 4 Add To Cart Text Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style4_atc_hv_txt_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style4_atc_hv_txt_color', array(
	'label'   => 'Product Item Style 4 Add To Cart Hover Text Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style4_atc_bg_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style4_atc_bg_color', array(
	'label'   => 'Product Item Style 4 Add To Cart Background Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_item_style4_atc_hv_bg_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_item_style4_atc_hv_bg_color', array(
	'label'   => 'Product Item Style 4 Add To Cart Hover Background Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

/* Product Category Loop */
$wp_customize->add_setting( 'penci_woo_product_loop_progress_section', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'woo_product_loop_progress_section', array(
	'label'    => __( 'Product Stock Progress Style', 'soledad' ),
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_product_loop_progress_section',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_progress_bg_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_product_loop_progress_bg_color', array(
	'label'    => 'Product Item Progress Background Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_product_loop_progress_bg_color',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_progress_height', array(
	'default'           => '',
	'sanitize_callback' => 'absint'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_product_loop_progress_height', array(
	'label'       => 'Custom Progress Bar Height',
	'description' => 'Set a custom height of the progress bar.',
	'section'     => 'pencidesign_woo_colors_settings',
	'type'        => 'number',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_progress_active_bg_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_product_loop_progress_active_bg_color', array(
	'label'    => 'Product Item Progress Active Background Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_product_loop_progress_active_bg_color',
) ) );

/* Product Category Loop */
$wp_customize->add_setting( 'penci_woo_section_product_cat_loop_color', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'woo_section_product_cat_loop_color', array(
	'label'    => __( 'Product Category Loop Style', 'soledad' ),
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_section_product_cat_loop_color',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'penci_woo_section_product_cat_loop_title_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_section_product_cat_loop_title_color', array(
	'label'   => 'Product Category Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_section_product_cat_loop_meta_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_section_product_cat_loop_meta_color', array(
	'label'   => 'Product Meta Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_section_product_cat_loop_overlay_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_section_product_cat_loop_overlay_color', array(
	'label'   => 'Product Overlay Color',
	'section' => 'pencidesign_woo_colors_settings',
) ) );

/* Cross Sell & Related Products */
$wp_customize->add_setting( 'penci_woo_section_product_related_upsell_color', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'woo_section_product_related_cross_color', array(
	'label'    => __( 'Product Item Style (Apply for Related & Upsell Products)', 'soledad' ),
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_section_product_related_upsell_color',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_title_color_reup', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_product_loop_title_color_reup', array(
	'label'       => 'Product Item Title',
	'description' => 'Apply for Upsell & Relate Products on Single Product Page',
	'section'     => 'pencidesign_woo_colors_settings',
	'settings'    => 'penci_woo_product_loop_title_color_reup',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_price_color_reup', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_product_loop_price_color_reup', array(
	'label'       => 'Product Item Price Color',
	'description' => 'Apply for Upsell & Relate Products on Single Product Page',
	'section'     => 'pencidesign_woo_colors_settings',
	'settings'    => 'penci_woo_product_loop_price_color_reup',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_cat_color_reup', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_loop_cat_color_reup', array(
	'label'       => 'Product Item Cat Color',
	'description' => 'Apply for Upsell & Relate Products on Single Product Page',
	'section'     => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_cat_hover_color_reup', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_loop_cat_hover_color_reup', array(
	'label'       => 'Product Item Cat Hover Color',
	'description' => 'Apply for Upsell & Relate Products on Single Product Page',
	'section'     => 'pencidesign_woo_colors_settings',
) ) );

/* Cross Sell Products */
$wp_customize->add_setting( 'penci_woo_section_product_crossell_color', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'woo_section_product_crossell_color', array(
	'label'    => __( 'Product Item Style (Apply for Crossell Products)', 'soledad' ),
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_section_product_crossell_color',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_title_color_cross', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_product_loop_title_color_cross', array(
	'label'       => 'Product Item Title',
	'description' => 'Apply for Crossell Products on Cart Page',
	'section'     => 'pencidesign_woo_colors_settings',
	'settings'    => 'penci_woo_product_loop_title_color_cross',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_price_color_cross', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_product_loop_price_color_cross', array(
	'label'       => 'Product Item Price Color',
	'description' => 'Apply for Crossell Products on Cart Page',
	'section'     => 'pencidesign_woo_colors_settings',
	'settings'    => 'penci_woo_product_loop_price_color_cross',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_cat_color_cross', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_loop_cat_color_cross', array(
	'label'       => 'Product Item Cat Color',
	'description' => 'Apply for Crossell Products on Cart Page',
	'section'     => 'pencidesign_woo_colors_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_product_loop_cat_hover_color_cross', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_product_loop_cat_hover_color_cross', array(
	'label'       => 'Product Item Cat Hover Color',
	'description' => 'Apply for Crossell Products on Cart Page',
	'section'     => 'pencidesign_woo_colors_settings',
) ) );

/* Product Page */
$wp_customize->add_setting( 'penci_woo_section_product_page_color', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'woo_section_product_page_color', array(
	'label'    => esc_html__( 'Product Page', 'soledad' ),
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_section_product_page_color',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'penci_product_page_general_text_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_section_product_page_general_text_color', array(
	'label'    => 'Product Page General Text Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_product_page_general_text_color',
) ) );

$wp_customize->add_setting( 'penci_product_page_general_link_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_section_product_page_general_link_color', array(
	'label'    => 'Product Page Links Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_product_page_general_link_color',
) ) );

$wp_customize->add_setting( 'penci_product_page_general_link_hover_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_section_product_page_general_link_hover_color', array(
	'label'    => 'Product Page Links Hover Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_product_page_general_link_hover_color',
) ) );

$wp_customize->add_setting( 'penci_product_page_general_border_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_section_product_page_general_border_color', array(
	'label'    => 'Product Page General Border Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_product_page_general_border_color',
) ) );

$wp_customize->add_setting( 'penci_product_page_button_swatches_border_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_section_product_page_button_swatches_border_color', array(
	'label'    => 'Swatches Button Border Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_product_page_button_swatches_border_color',
) ) );

$wp_customize->add_setting( 'penci_product_page_button_swatches_border_hover_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_section_product_page_button_swatches_border_hover_color', array(
	'label'    => 'Swatches Button Border Hover Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_product_page_button_swatches_border_hover_color',
) ) );

$wp_customize->add_setting( 'penci_product_page_button_swatches_bg_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_section_product_page_button_swatches_bg_color', array(
	'label'    => 'Swatches Button Background Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_product_page_button_swatches_bg_color',
) ) );

$wp_customize->add_setting( 'penci_product_page_button_swatches_bg_hover_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_section_product_page_button_swatches_bg_hover_color', array(
	'label'    => 'Swatches Button Background Hover Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_product_page_button_swatches_bg_hover_color',
) ) );

$wp_customize->add_setting( 'penci_product_page_button_atc_bg_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_page_button_atc_bg_color', array(
	'label'    => 'Add To Cart Background Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_product_page_button_atc_bg_color',
) ) );

$wp_customize->add_setting( 'penci_product_page_button_atc_bg_hover_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_page_button_atc_bg_hover_color', array(
	'label'    => 'Add To Cart Background Hover Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_product_page_button_atc_bg_hover_color',
) ) );

$wp_customize->add_setting( 'penci_product_page_meta_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_page_meta_color', array(
	'label'    => 'Product Meta Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_product_page_meta_color',
) ) );

$wp_customize->add_setting( 'penci_product_page_meta_link_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_page_meta_link_color', array(
	'label'    => 'Product Meta Link Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_product_page_meta_link_color',
) ) );

$wp_customize->add_setting( 'penci_product_page_meta_link_hover_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_page_meta_link_hover_color', array(
	'label'    => 'Product Meta Link Hover Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_product_page_meta_link_hover_color',
) ) );

$wp_customize->add_setting( 'penci_product_page_tab_title_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_page_tab_title_color', array(
	'label'    => 'Product Tab Title Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_product_page_tab_title_color',
) ) );

$wp_customize->add_setting( 'penci_product_page_tab_title_active_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_page_tab_title_active_color', array(
	'label'    => 'Product Tab Title Active Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_product_page_tab_title_active_color',
) ) );

$wp_customize->add_setting( 'penci_woo_section_woo_page', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'woo_section_woo_page', array(
	'label'    => esc_html__( 'WooCommerce Additional Pages', 'soledad' ),
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_section_woo_page',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'penci_woo_page_title_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_page_title_color', array(
	'label'    => 'Title Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_page_title_color',
) ) );

$wp_customize->add_setting( 'penci_woo_page_button_bg_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_page_button_bg_color', array(
	'label'    => 'Button Background Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_page_button_bg_color',
) ) );

$wp_customize->add_setting( 'penci_woo_page_button_bg_hover_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_page_button_bg_hover_color', array(
	'label'    => 'Button Background HoverColor',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_page_button_bg_hover_color',
) ) );

$wp_customize->add_setting( 'penci_woo_page_button_alt_bg_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_page_button_alt_bg_color', array(
	'label'    => 'Secondary Button Background Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_page_button_alt_bg_color',
) ) );

$wp_customize->add_setting( 'penci_woo_page_button_alt_bg_hover_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_page_button_alt_bg_hover_color', array(
	'label'    => 'Secondary Button Background Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_page_button_alt_bg_hover_color',
) ) );

$wp_customize->add_setting( 'penci_woo_loading_ic_heading', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_woo_loading_ic_heading', array(
	'label'    => esc_html__( 'Loading Icon', 'soledad' ),
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_loading_ic_heading',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'penci_woo_loading_cl1', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_loading_cl1', array(
	'label'    => 'Circle Loading First Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_loading_cl1',
) ) );

$wp_customize->add_setting( 'penci_woo_loading_cl2', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_loading_cl2', array(
	'label'    => 'Circle Loading Second Color',
	'section'  => 'pencidesign_woo_colors_settings',
	'settings' => 'penci_woo_loading_cl2',
) ) );

/* Typo */
$wp_customize->add_setting( 'penci_woo_section_product_loop_typo', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'woo_section_product_loop_typo', array(
	'label'    => esc_html__( 'Product Item Font Size', 'soledad' ),
	'section'  => 'pencidesign_woo_typo_settings',
	'settings' => 'penci_woo_section_product_loop_typo',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'pencidesign_woo_product_loop_title_font_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_product_loop_title_m_font_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'woo_product_loop_title_font_size', array(
	'description' => __( 'Font Size for Product Item Title', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_product_loop_title_font_size',
		'mobile'  => 'pencidesign_woo_product_loop_title_m_font_size',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_product_loop_list_title_font_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_product_loop_list_title_m_font_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'woo_product_loop_list_title_font_size', array(
	'description' => __( 'Font Size for Product Item Title on Listing Layout', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_product_loop_list_title_font_size',
		'mobile'  => 'pencidesign_woo_product_loop_list_title_m_font_size',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_product_loop_meta_font_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_product_loop_meta_m_font_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'woo_product_loop_meta_font_size', array(
	'description' => __( 'Font Size for Product Meta', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_product_loop_meta_font_size',
		'mobile'  => 'pencidesign_woo_product_loop_meta_m_font_size',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_product_loop_price_font_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_product_loop_price_m_font_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'woo_product_loop_price_font_size', array(
	'description' => __( 'Font Size for Product Price', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_product_loop_price_font_size',
		'mobile'  => 'pencidesign_woo_product_loop_price_m_font_size',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_product_loop_button_icon_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_product_loop_button_icon_m_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'woo_product_loop_button_icon_size', array(
	'description' => __( 'Font Size for Button Icon', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'mobile'  => 'pencidesign_woo_product_loop_button_icon_m_size',
		'desktop' => 'pencidesign_woo_product_loop_button_icon_size',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_product_loop_button_3_m_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_setting( 'pencidesign_woo_product_loop_button_3_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'pencidesign_woo_product_loop_button_3_size', array(
	'description' => __( 'Font Size for Button - Product Style 3', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_product_loop_button_3_size',
		'mobile'  => 'pencidesign_woo_product_loop_button_3_m_size',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'moible'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_product_loop_button_4_m_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_setting( 'pencidesign_woo_product_loop_button_4_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'pencidesign_woo_product_loop_button_4_size', array(
	'description' => __( 'Font Size for Button - Product Style 4', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_product_loop_button_4_size',
		'mobile'  => 'pencidesign_woo_product_loop_button_4_m_size',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'moible'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_product_loop_button_5_m_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_setting( 'pencidesign_woo_product_loop_button_5_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'pencidesign_woo_product_loop_button_5_size', array(
	'description' => __( 'Font Size for Button - Product Style 5', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_product_loop_button_5_size',
		'mobile'  => 'pencidesign_woo_product_loop_button_5_m_size',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'moible'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

/* Product Category Loop */
$wp_customize->add_setting( 'penci_woo_section_product_cat_typo', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'woo_section_product_cat_typo', array(
	'label'    => esc_html__( 'Product Category Loop Font Size', 'soledad' ),
	'section'  => 'pencidesign_woo_typo_settings',
	'settings' => 'penci_woo_section_product_cat_typo',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'penci_woo_loop_cat_font_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'penci_woo_loop_cat_font_size_m', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_woo_loop_cat_font_size', array(
	'description' => __( 'Font Size for Product Category Title', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'penci_woo_loop_cat_font_size',
		'mobile'  => 'penci_woo_loop_cat_font_size_m',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'penci_woo_loop_meta_font_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'penci_woo_loop_meta_font_size_m', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'penci_woo_loop_meta_font_size', array(
	'description' => __( 'Font Size for Product Category Meta', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'penci_woo_loop_meta_font_size',
		'mobile'  => 'penci_woo_loop_meta_font_size_m',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

/* Single Product */
$wp_customize->add_setting( 'penci_woo_section_product_single_typo', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'woo_section_product_single_typo', array(
	'label'    => esc_html__( 'Single Product Font Size', 'soledad' ),
	'section'  => 'pencidesign_woo_typo_settings',
	'settings' => 'penci_woo_section_product_single_typo',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_product_single_title', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_fontsize_product_single_m_title', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'woo_fontsize_product_single_title', array(
	'description' => __( 'Font Size for Product Title', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_fontsize_product_single_title',
		'mobile'  => 'pencidesign_woo_fontsize_product_single_m_title',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_product_price', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_fontsize_m_product_price', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'woo_fontsize_product_price', array(
	'description' => __( 'Font Size for Product Price', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_fontsize_product_price',
		'mobile'  => 'pencidesign_woo_fontsize_m_product_price',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_product_breadcrumb', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_fontsize_m_product_breadcrumb', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'woo_fontsize_product_breadcrumb', array(
	'description' => __( 'Font Size for Product Breadcrumb', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'mobile'  => 'pencidesign_woo_fontsize_m_product_breadcrumb',
		'desktop' => 'pencidesign_woo_fontsize_product_breadcrumb',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_product_general', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'woo_fontsize_product_general', array(
	'description' => __( 'Font Size for Product General Text', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_fontsize_product_general',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_product_tab_title', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_product_tab_m_title', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'woo_fontsize_product_tab_title', array(
	'description' => __( 'Font Size for Product Tab Title', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_fontsize_product_tab_title',
		'mobile'  => 'pencidesign_woo_fontsize_product_tab_m_title',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_m_product_meta', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_fontsize_product_meta', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'woo_fontsize_product_meta', array(
	'description' => __( 'Font Size for Product Meta', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_fontsize_product_meta',
		'mobile'  => 'pencidesign_woo_fontsize_m_product_meta',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

/* Cart/Checkout/Thank you page */
$wp_customize->add_setting( 'penci_woo_section_product_additional_pages_typo', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'woo_section_product_additional_pages_typo', array(
	'label'    => esc_html__( 'Additional Pages Font Size', 'soledad' ),
	'section'  => 'pencidesign_woo_typo_settings',
	'settings' => 'penci_woo_section_product_additional_pages_typo',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_pages_nav_font_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_fontsize_pages_nav_font_size_m', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'pencidesign_woo_fontsize_pages_nav_font_size', array(
	'description' => __( 'Font Size for Navigation Step', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_fontsize_pages_nav_font_size',
		'mobile'  => 'pencidesign_woo_fontsize_pages_nav_font_size_m',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_pages_table_th', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_fontsize_pages_table_th_m', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'pencidesign_woo_fontsize_pages_table_th', array(
	'description' => __( 'Font Size for Table Head', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_fontsize_pages_table_th',
		'mobile'  => 'pencidesign_woo_fontsize_pages_table_th_m',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_pages_table_product_title', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_fontsize_pages_table_product_title_m', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'pencidesign_woo_fontsize_pages_table_product_title', array(
	'description' => __( 'Font Size for Table Product Title', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_fontsize_pages_table_product_title',
		'mobile'  => 'pencidesign_woo_fontsize_pages_table_product_title_m',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_pages_table_product_price', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_fontsize_pages_table_product_price_m', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'pencidesign_woo_fontsize_pages_table_product_price', array(
	'description' => __( 'Font Size for Table Product Price', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_fontsize_pages_table_product_price',
		'mobile'  => 'pencidesign_woo_fontsize_pages_table_product_price_m',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_pages_table_product_subtotal', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_fontsize_pages_table_product_subtotal_m', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'pencidesign_woo_fontsize_pages_table_product_subtotal', array(
	'description' => __( 'Font Size for Table Product Sub Total', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_fontsize_pages_table_product_subtotal',
		'mobile'  => 'pencidesign_woo_fontsize_pages_table_product_subtotal_m',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_pages_table_product_quantity', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_fontsize_pages_table_product_quantity_m', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'pencidesign_woo_fontsize_pages_table_product_quantity', array(
	'description' => __( 'Font Size for Table Product Quantity Input', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_fontsize_pages_table_product_quantity',
		'mobile'  => 'pencidesign_woo_fontsize_pages_table_product_quantity_m',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_pages_cart_total_h2', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_fontsize_pages_cart_total_h2_m', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'pencidesign_woo_fontsize_pages_cart_total_h2', array(
	'description' => __( 'Font Size for Cart Total Heading', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_fontsize_pages_cart_total_h2',
		'mobile'  => 'pencidesign_woo_fontsize_pages_cart_total_h2_m',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_pages_button', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_fontsize_pages_button_m', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'pencidesign_woo_fontsize_pages_button', array(
	'description' => __( 'Font Size for Button', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_fontsize_pages_button',
		'mobile'  => 'pencidesign_woo_fontsize_pages_button_m',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

/* Checkout Form Font Size */

$wp_customize->add_setting( 'penci_woo_section_checkout_font_size', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'woo_section_checkout_font_size', array(
	'label'    => esc_html__( 'Check out Form Font Size', 'soledad' ),
	'section'  => 'pencidesign_woo_typo_settings',
	'settings' => 'penci_woo_section_checkout_font_size',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_checkout_form_label', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_fontsize_checkout_form_label_m', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'pencidesign_woo_fontsize_checkout_form_label', array(
	'description' => __( 'Font Size for Form Label', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_fontsize_checkout_form_label',
		'mobile'  => 'pencidesign_woo_fontsize_checkout_form_label_m',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_checkout_form_input', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_fontsize_checkout_form_input_m', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'pencidesign_woo_fontsize_checkout_form_input', array(
	'description' => __( 'Font Size for Form Input', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_fontsize_checkout_form_input',
		'mobile'  => 'pencidesign_woo_fontsize_checkout_form_input_m',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_checkout_order_heading', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_fontsize_checkout_order_heading_m', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'pencidesign_woo_fontsize_checkout_order_heading', array(
	'description' => __( 'Font Size for Heading', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_fontsize_checkout_order_heading',
		'mobile'  => 'pencidesign_woo_fontsize_checkout_order_heading_m',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_checkout_order_button', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_fontsize_checkout_order_button_m', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'pencidesign_woo_fontsize_checkout_order_button', array(
	'description' => __( 'Font Size for Order Button', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_fontsize_checkout_order_button',
		'mobile'  => 'pencidesign_woo_fontsize_checkout_order_button_m',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );


/* Other Font Size */

$wp_customize->add_setting( 'penci_woo_section_product_other_typo', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'woo_section_product_other_typo', array(
	'label'    => esc_html__( 'Other Product Font Size', 'soledad' ),
	'section'  => 'pencidesign_woo_typo_settings',
	'settings' => 'penci_woo_section_product_other_typo',
	'type'     => 'heading',
) ) );

$wp_customize->add_setting( 'pencidesign_woo_fontsize_m_product_label', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_setting( 'pencidesign_woo_fontsize_product_label', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'woo_fontsize_product_label', array(
	'description' => __( 'Font Size for Product Label', 'soledad' ),
	'section'     => 'pencidesign_woo_typo_settings',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_fontsize_product_label',
		'mobile'  => 'pencidesign_woo_fontsize_m_product_label',
	),
	'choices'     => array(
		'desktop' => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 8,
			'max'  => 32,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
) ) );

/*Mobile Settings*/
$wp_customize->add_setting( 'penci_woo_mobile_autoscroll', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_mobile_autoscroll', array(
	'label'    => 'Disable Filter Trigger Auto Scroll',
	'section'  => 'pencidesign_woo_mobile_settings',
	'settings' => 'penci_woo_mobile_autoscroll',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_mobile_bottom_nav', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_mobile_bottom_nav', array(
	'label'    => 'Enable Bottom Navigation',
	'section'  => 'pencidesign_woo_mobile_settings',
	'settings' => 'penci_woo_mobile_bottom_nav',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_mobile_nav_items', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_multiple_checkbox'
) );
$wp_customize->add_control( new Penci_Customize_Control_Checkbox_Multiple( $wp_customize, 'woo_mobile_nav_items', array(
	'label'    => 'Select navigation menu item',
	'section'  => 'pencidesign_woo_mobile_settings',
	'settings' => 'penci_woo_mobile_nav_items',
	'choices'  => array(
		'home'     => array( 'name' => 'Home Page' ),
		'shop'     => array( 'name' => 'Shop Page' ),
		'cart'     => array( 'name' => 'Cart Page' ),
		'account'  => array( 'name' => 'Account Page' ),
		'wishlist' => array( 'name' => 'Wishlist Page' ),
		'compare'  => array( 'name' => 'Compare Page' ),
		'filter'   => array( 'name' => 'Category Filter Panel' ),
	),
) ) );

$wp_customize->add_setting( 'penci_woo_mobile_show_custom_nav', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_mobile_show_custom_nav', array(
	'label'    => 'Show custom Navigation Menus',
	'section'  => 'pencidesign_woo_mobile_settings',
	'settings' => 'penci_woo_mobile_show_custom_nav',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_mobile_nav_menu', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new Penci_Customize_List_Menus_Control( $wp_customize, 'woo_mobile_nav_menu', array(
	'label'    => 'Select Custom Menu for Mobile Bottom Navigation',
	'section'  => 'pencidesign_woo_mobile_settings',
	'settings' => 'penci_woo_mobile_nav_menu',
	'type'     => 'list_menus',
) ) );

/*Product Label Settings*/

$wp_customize->add_setting( 'penci_woo_label_hot_product', array(
	'default'           => true,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_label_hot_product', array(
	'label'       => 'Show HOT label ?',
	'description' => 'Display HOT label on featured product.',
	'section'     => 'pencidesign_woo_label_settings',
	'settings'    => 'penci_woo_label_hot_product',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_label_style', array(
	'default'           => 'square',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_label_style', array(
	'label'    => 'Select Label Style',
	'section'  => 'pencidesign_woo_label_settings',
	'settings' => 'penci_woo_label_style',
	'type'     => 'select',
	'choices'  => array(
		'square' => 'Rectangle',
		'round'  => 'Round',
	),
) ) );

$wp_customize->add_setting( 'penci_woo_label_percentage', array(
	'default'           => true,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_label_percentage', array(
	'label'    => 'Show Percentage on sale label ?',
	'section'  => 'pencidesign_woo_label_settings',
	'settings' => 'penci_woo_label_percentage',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_label_new_product', array(
	'default'           => true,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_label_new_product', array(
	'label'       => 'Show NEW label ?',
	'description' => 'Display NEW label on product.',
	'section'     => 'pencidesign_woo_label_settings',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_label_new_product_period', array(
	'default'           => 7,
	'sanitize_callback' => 'absint'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_label_new_product_period', array(
	'label'       => 'Automatic "New" label period',
	'description' => 'Set a number of days to keep your products marked as "New" after creation.',
	'section'     => 'pencidesign_woo_label_settings',
	'type'        => 'number',
) ) );

$wp_customize->add_setting( 'penci_woo_label_new_color', array(
	'default'           => '#8dd620',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_label_new_color', array(
	'label'   => 'New Label Background Color',
	'section' => 'pencidesign_woo_label_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_label_hot_color', array(
	'default'           => '#fb1919',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_label_hot_color', array(
	'label'   => 'Hot Label Background Color',
	'section' => 'pencidesign_woo_label_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_label_sale_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_label_sale_color', array(
	'label'   => 'Sale Label Background Color',
	'section' => 'pencidesign_woo_label_settings',
) ) );

$wp_customize->add_setting( 'penci_woo_label_outstock_color', array(
	'default'           => '#800000',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_label_outstock_color', array(
	'label'   => 'Out of Stock Label Background Color',
	'section' => 'pencidesign_woo_label_settings',
) ) );

/* Cart Page */
$wp_customize->add_setting( 'penci_shop_product_cross_sell_columns', array(
	'default'           => 4,
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_shop_product_cross_sell_columns', array(
	'label'       => 'Cross Sell Product Columns',
	'description' => 'How many products should be shown per row on cross sell section ?',
	'section'     => 'pencidesign_woo_cart_page',
	'type'        => 'select',
	'choices'     => array(
		2 => '2 Columns',
		3 => '3 Columns',
		4 => '4 Columns',
		5 => '5 Columns',
		6 => '6 Columns',
	)
) ) );

$wp_customize->add_setting( 'penci_woo_cart_breadcrumb_active_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_cart_breadcrumb_active_color', array(
	'label'   => 'Breadcrumb Color',
	'section' => 'pencidesign_woo_cart_page',
) ) );

$wp_customize->add_setting( 'penci_woo_cart_breadcrumb_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_cart_breadcrumb_color', array(
	'label'   => 'Breadcrumb Active Color',
	'section' => 'pencidesign_woo_cart_page',
) ) );

$wp_customize->add_setting( 'penci_woo_cart_tablehead_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_cart_tablehead_color', array(
	'label'   => 'Table Head Color',
	'section' => 'pencidesign_woo_cart_page',
) ) );

$wp_customize->add_setting( 'penci_woo_cart_table_border_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_cart_table_border_color', array(
	'label'   => 'Table General Border Color',
	'section' => 'pencidesign_woo_cart_page',
) ) );

$wp_customize->add_setting( 'penci_woo_cart_table_txt_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_cart_table_txt_color', array(
	'label'   => 'Table General Text Color',
	'section' => 'pencidesign_woo_cart_page',
) ) );

$wp_customize->add_setting( 'penci_woo_cart_table_product_title_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_cart_table_product_title_color', array(
	'label'   => 'Product Title Color',
	'section' => 'pencidesign_woo_cart_page',
) ) );

$wp_customize->add_setting( 'penci_woo_cart_table_product_title_hover_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_cart_table_product_title_hover_color', array(
	'label'   => 'Product Title Hover Color',
	'section' => 'pencidesign_woo_cart_page',
) ) );

$wp_customize->add_setting( 'penci_woo_cart_table_product_price_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_cart_table_product_price_color', array(
	'label'   => 'Product Price Color',
	'section' => 'pencidesign_woo_cart_page',
) ) );

$wp_customize->add_setting( 'penci_woo_cart_btn_bg_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_cart_btn_bg_color', array(
	'label'   => 'Button Background Color',
	'section' => 'pencidesign_woo_cart_page',
) ) );

$wp_customize->add_setting( 'penci_woo_cart_btn_txt_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_cart_btn_txt_color', array(
	'label'   => 'Button Text Color',
	'section' => 'pencidesign_woo_cart_page',
) ) );

$wp_customize->add_setting( 'penci_woo_cart_btn_hover_bg_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_cart_btn_hover_bg_color', array(
	'label'   => 'Button Hover Background Color',
	'section' => 'pencidesign_woo_cart_page',
) ) );

$wp_customize->add_setting( 'penci_woo_cart_btn_hover_txt_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_cart_btn_hover_txt_color', array(
	'label'   => 'Button Hover Text Color',
	'section' => 'pencidesign_woo_cart_page',
) ) );

// secondary button

$wp_customize->add_setting( 'penci_woo_cart_sbtn_bg_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_cart_sbtn_bg_color', array(
	'label'   => 'Alt Button Background Color',
	'section' => 'pencidesign_woo_cart_page',
) ) );

$wp_customize->add_setting( 'penci_woo_cart_sbtn_txt_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_cart_sbtn_txt_color', array(
	'label'   => 'Alt Button Text Color',
	'section' => 'pencidesign_woo_cart_page',
) ) );

$wp_customize->add_setting( 'penci_woo_cart_sbtn_hover_bg_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_cart_sbtn_hover_bg_color', array(
	'label'   => 'Alt Button Hover Background Color',
	'section' => 'pencidesign_woo_cart_page',
) ) );

$wp_customize->add_setting( 'penci_woo_cart_sbtn_hover_txt_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_cart_sbtn_hover_txt_color', array(
	'label'   => 'Alt Button Hover Text Color',
	'section' => 'pencidesign_woo_cart_page',
) ) );

// delete button
$wp_customize->add_setting( 'penci_woo_cart_del_btn_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_cart_del_btn_color', array(
	'label'   => 'Delete Item Color',
	'section' => 'pencidesign_woo_cart_page',
) ) );

$wp_customize->add_setting( 'penci_woo_cart_del_btn_hv_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_cart_del_btn_hv_color', array(
	'label'   => 'Delete Item Hover Color',
	'section' => 'pencidesign_woo_cart_page',
) ) );

$wp_customize->add_setting( 'penci_woo_cart_empty_title', array(
	'default'           => 'Your cart is currently empty',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_cart_empty_title', array(
	'label'   => 'Empty Cart Title',
	'section' => 'pencidesign_woo_cart_page',
	'type'    => 'text'
) ) );

$wp_customize->add_setting( 'penci_woo_cart_empty_textarea', array(
	'default'           => 'You don\'t have any products in the shop yet. <br> You will find a lot of interesting products on our "Shop" page.',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_cart_empty_textarea', array(
	'label'   => 'Empty Cart Text',
	'section' => 'pencidesign_woo_cart_page',
	'type'    => 'textarea'
) ) );

$wp_customize->add_setting( 'penci_woo_cart_before_content', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_cart_before_content', array(
	'label'   => 'Custom Content Before Cart Table',
	'section' => 'pencidesign_woo_cart_page',
	'type'    => 'textarea'
) ) );

$wp_customize->add_setting( 'penci_woo_cart_after_content', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_cart_after_content', array(
	'label'   => 'Custom Content After Cart Table',
	'section' => 'pencidesign_woo_cart_page',
	'type'    => 'textarea',
) ) );

// checkout pages
$wp_customize->add_setting( 'penci_woo_checkout_breadcrumb_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_breadcrumb_color', array(
	'label'   => 'Breadcrumb Color',
	'section' => 'woocommerce_checkout',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_breadcrumb_active_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_breadcrumb_active_color', array(
	'label'   => 'Breadcrumb Active Color',
	'section' => 'woocommerce_checkout',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_form_label_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_form_label_color', array(
	'label'   => 'Label Color',
	'section' => 'woocommerce_checkout',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_form_border_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_form_border_color', array(
	'label'   => 'Form Input Border Color',
	'section' => 'woocommerce_checkout',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_form_border_focus_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_form_border_focus_color', array(
	'label'   => 'Form Input Focus Border Color',
	'section' => 'woocommerce_checkout',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_form_bg_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_form_bg_color', array(
	'label'   => 'Form Input Background Color',
	'section' => 'woocommerce_checkout',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_form_bg_focus_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_form_bg_focus_color', array(
	'label'   => 'Form Input Focus Background Color',
	'section' => 'woocommerce_checkout',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_order_bg_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_order_bg_color', array(
	'label'   => 'Order Form Background Color',
	'section' => 'woocommerce_checkout',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_order_table_bg_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_order_table_bg_color', array(
	'label'   => 'Order Form Table Background Color',
	'section' => 'woocommerce_checkout',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_order_table_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_order_table_color', array(
	'label'   => 'Order Form Table Text Color',
	'section' => 'woocommerce_checkout',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_order_head_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_order_head_color', array(
	'label'   => 'Order Form Table Head Color',
	'section' => 'woocommerce_checkout',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_order_accent_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_order_accent_color', array(
	'label'   => 'Order Form Table Accent Color',
	'section' => 'woocommerce_checkout',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_order_table_border_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_order_table_border_color', array(
	'label'   => 'Order Form Table Border Color',
	'section' => 'woocommerce_checkout',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_btn_bg_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_btn_bg_color', array(
	'label'   => 'Button Background Color',
	'section' => 'woocommerce_checkout',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_btn_txt_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_btn_txt_color', array(
	'label'   => 'Button Text Color',
	'section' => 'woocommerce_checkout',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_btn_hover_bg_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_btn_hover_bg_color', array(
	'label'   => 'Button Hover Background Color',
	'section' => 'woocommerce_checkout',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_btn_hover_txt_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_btn_hover_txt_color', array(
	'label'   => 'Button Hover Text Color',
	'section' => 'woocommerce_checkout',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_review_order_bg_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_review_order_bg_color', array(
	'label'   => 'Review Order Background Color',
	'section' => 'woocommerce_checkout',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_before_content', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_checkout_before_content', array(
	'label'   => 'Custom Content Before Checkout Form',
	'section' => 'woocommerce_checkout',
	'type'    => 'textarea',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_after_content', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_checkout_after_content', array(
	'label'   => 'Custom Content After Checkout Form',
	'section' => 'woocommerce_checkout',
	'type'    => 'textarea',
) ) );

// order completed page
$wp_customize->add_setting( 'penci_woo_checkout_txt_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_txt_color', array(
	'label'   => 'Text Color',
	'section' => 'pencidesign_woo_ordercompleted_page',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_head_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_head_color', array(
	'label'   => 'Heading Text Color',
	'section' => 'pencidesign_woo_ordercompleted_page',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_border_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_border_color', array(
	'label'   => 'General Border Color',
	'section' => 'pencidesign_woo_ordercompleted_page',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_success_icon_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_success_icon_color', array(
	'label'   => 'Sucess Icon Color',
	'section' => 'pencidesign_woo_ordercompleted_page',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_success_icon_bg_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_checkout_success_icon_bg_color', array(
	'label'   => 'Sucess Icon Background Color',
	'section' => 'pencidesign_woo_ordercompleted_page',
) ) );

$wp_customize->add_setting( 'penci_woo_checkout_success_thankyou_text', array(
	'default'           => 'Thank you. Your order has been received.',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_woo_checkout_success_thankyou_text', array(
	'label'   => 'Custom Thankyou Text',
	'section' => 'pencidesign_woo_ordercompleted_page',
	'type'    => 'textarea',
) ) );

/*Filter Sidebar*/
$wp_customize->add_setting( 'pencidesign_woo_filter_widget_enable', array(
	'default'           => true,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pencidesign_woo_filter_widget_enable', array(
	'label'   => 'Enable Slidebar Filter ?',
	'section' => 'pencidesign_woo_filter_sidebar',
	'type'    => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_fw_panel_pst', array(
	'default'           => 'side-right',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_fw_panel_pst', array(
	'label'    => 'Slidebar Filter Position',
	'section'  => 'pencidesign_woo_filter_sidebar',
	'settings' => 'penci_woo_fw_panel_pst',
	'type'     => 'select',
	'choices'  => array(
		'side-right' => 'Side Right',
		'side-left'  => 'Side Left',
	)
) ) );

$wp_customize->add_setting( 'pencidesign_woo_filter_widget_margin', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'pencidesign_woo_filter_widget_margin', array(
	'description' => __( 'Custom Space Between Widgets', 'soledad' ),
	'section'     => 'pencidesign_woo_filter_sidebar',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_filter_widget_margin',
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
$wp_customize->add_setting( 'pencidesign_woo_filter_widget_heading_lowcase', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pencidesign_woo_filter_widget_heading_lowcase', array(
	'label'    => 'Turn Off Uppercase Widget Heading',
	'section'  => 'pencidesign_woo_filter_sidebar',
	'settings' => 'pencidesign_woo_filter_widget_heading_lowcase',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'pencidesign_woo_filter_widget_heading_size', array(
	'default'           => '',
	'sanitize_callback' => 'absint',
) );
$wp_customize->add_control( new Penci_Range_Slider_Control( $wp_customize, 'pencidesign_woo_filter_widget_heading_size', array(
	'description' => __( 'Custom Widget Heading Text Size', 'soledad' ),
	'section'     => 'pencidesign_woo_filter_sidebar',
	'settings'    => array(
		'desktop' => 'pencidesign_woo_filter_widget_heading_size',
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

$wp_customize->add_setting( 'pencidesign_woo_filter_widget_heading_style', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pencidesign_woo_filter_widget_heading_style', array(
	'label'    => 'Sidebar Widget Heading Style',
	'section'  => 'pencidesign_woo_filter_sidebar',
	'settings' => 'pencidesign_woo_filter_widget_heading_style',
	'type'     => 'radio',
	'choices'  => array(
		''                  => 'Default',
		'style-1'           => 'Style 1',
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

$wp_customize->add_setting( 'pencidesign_woo_filter_widget_heading_image_9', array(
	'default'           => '',
	'sanitize_callback' => 'esc_url_raw'
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pencidesign_woo_filter_widget_heading_image_9', array(
	'label'    => 'Custom Background Image for Style 9',
	'section'  => 'pencidesign_woo_filter_sidebar',
	'settings' => 'pencidesign_woo_filter_widget_heading_image_9',
) ) );

$wp_customize->add_setting( 'pencidesign_woo_filter_widget_heading9_repeat', array(
	'default'           => 'no-repeat',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pencidesign_woo_filter_widget_heading9_repeat', array(
	'label'    => 'Background Image Repeat for Style 9',
	'section'  => 'pencidesign_woo_filter_sidebar',
	'settings' => 'pencidesign_woo_filter_widget_heading9_repeat',
	'type'     => 'radio',
	'choices'  => array(
		'no-repeat' => 'No Repeat',
		'repeat'    => 'Repeat'
	)
) ) );

$wp_customize->add_setting( 'pencidesign_woo_filter_widget_heading_align', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pencidesign_woo_filter_widget_heading_align', array(
	'label'    => 'Sidebar Widget Heading Align',
	'section'  => 'pencidesign_woo_filter_sidebar',
	'settings' => 'pencidesign_woo_filter_widget_heading_align',
	'type'     => 'radio',
	'choices'  => array(
		''               => 'Default',
		'pcalign-center' => 'Center',
		'pcalign-left'   => 'Left',
		'pcalign-right'  => 'Right'
	)
) ) );

$wp_customize->add_setting( 'pencidesign_woo_filter_widget_remove_border_outer', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pencidesign_woo_filter_widget_remove_border_outer', array(
	'label'    => 'Remove Border Outer on Widget Heading',
	'section'  => 'pencidesign_woo_filter_sidebar',
	'settings' => 'pencidesign_woo_filter_widget_remove_border_outer',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'pencidesign_woo_filter_widget_remove_arrow_down', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pencidesign_woo_filter_widget_remove_arrow_down', array(
	'label'    => 'Remove Arrow Down on Widget Heading',
	'section'  => 'pencidesign_woo_filter_sidebar',
	'settings' => 'pencidesign_woo_filter_widget_remove_arrow_down',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_woo_notice_bg_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_notice_bg_color', array(
	'label'   => 'Notice Background Color',
	'section' => 'woocommerce_store_notice',
) ) );

$wp_customize->add_setting( 'penci_woo_notice_txt_color', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_woo_notice_txt_color', array(
	'label'   => 'Notice Text Color',
	'section' => 'woocommerce_store_notice',
) ) );
