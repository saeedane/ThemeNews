<?php
/* Add Section */
$wp_customize->add_section( 'pencidesign_woo_section_transition_lang', array(
	'title'       => esc_html__( 'WooCommerce Text Translation', 'soledad' ),
	"description" => "If you are using WPML or Polylang - Use shortcode [pencilang] inside fields below with multiple languages - Example: <strong>[pencilang en_US='Share' fr_FR='Partager' language_code='Your language text' /]</strong><br>Make sure plugin Penci Shortcodes are activated. You can check languages code <a href='https://make.wordpress.org/polyglots/teams/' target='_blank'>here</a>",
	'priority'    => 220,
) );

/* Add Options */
$wp_customize->add_setting( 'penci_woo_vertical_menu_title', array(
	'default'           => 'Shop by Department',
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_vertical_menu_title', array(
	'label'    => 'Shop by Department',
	'section'  => 'pencidesign_woo_section_transition_lang',
	'settings' => 'penci_woo_vertical_menu_title',
	'type'     => 'text',
) ) );

$penciwoo_translate_texts = penci_woo_get_translate_text();

$penci_woo_already_translates = array(
	'penci_woocommerce_wishlist_empty_text',
	'penci_woocommerce_compare_empty_text',
	'penci_woo_trans_compare_empty_title',
	'penci_woo_trans_wishlist_empty_title',
	'penci_woo_cart_empty_title',
	'penci_woo_cart_empty_textarea',
);

foreach ( $penci_woo_already_translates as $untranslate ) {
	unset( $penciwoo_translate_texts[ $untranslate ] );
}

foreach ( $penciwoo_translate_texts as $translate_option => $translate_default ) {
	$wp_customize->add_setting( $translate_option, array(
		'default'           => $translate_default,
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $translate_option, array(
		'label'   => 'Text: ' . $translate_default,
		'section' => 'pencidesign_woo_section_transition_lang',
		'type'    => 'text',
	) ) );
}
