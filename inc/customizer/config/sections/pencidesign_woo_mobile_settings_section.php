<?php
$options   = [];
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Disable Filter Trigger Auto Scroll',
	'id'       => 'penci_woo_mobile_autoscroll',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Enable Bottom Navigation',
	'id'       => 'penci_woo_mobile_bottom_nav',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'penci_sanitize_multiple_checkbox',
	'label'    => 'Select navigation menu item',
	'id'       => 'penci_woo_mobile_nav_items',
	'multiple' => 999,
	'type'     => 'soledad-fw-select',
	'choices'  => array(
		'home'     => 'Home Page',
		'shop'     => 'Shop Page',
		'cart'     => 'Cart Page',
		'account'  => 'Account Page',
		'wishlist' => 'Wishlist Page',
		'compare'  => 'Compare Page',
		'filter'   => 'Category Filter Panel',
	),
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Show custom Navigation Menus',
	'id'       => 'penci_woo_mobile_show_custom_nav',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'penci_sanitize_choices_field',
	'label'    => 'Select Custom Menu for Mobile Bottom Navigation',
	'id'       => 'penci_woo_mobile_nav_menu',
	'type'     => 'soledad-fw-ajax-select',
	'choices'  => call_user_func( function () {
		$menu_list = [ '' => '' ];
		$menus     = wp_get_nav_menus();
		if ( ! empty( $menus ) ) {
			foreach ( $menus as $menu ) {
				$menu_list[ $menu->slug ] = $menu->name;
			}
		}

		return $menu_list;
	} ),
);

return $options;
