<?php
$options   = [];
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Minify JS from the Theme',
	'id'       => 'penci_speed_js_minify',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'penci_sanitize_checkbox_field',
	'label'    => 'Remove jQuery Migrate',
	'id'       => 'penci_speed_remove_jquery_migrate',
	'type'     => 'soledad-fw-toggle',
);
$options[] = array(
	'id'          => 'penci_speed_delay_js',
	'default'     => false,
	'sanitize'    => 'penci_sanitize_checkbox_field',
	'label'       => 'Delay Javascript Execution',
	'description' => __( "Delay execution of the targeted JS files until user interaction ( move mouse, click, scroll, touch,... ).", "soledad" ),
	'type'        => 'soledad-fw-toggle',
);
$options[] = array(
	'id'          => 'penci_speed_delay_js_adsense',
	'default'     => false,
	'sanitize'    => 'penci_sanitize_checkbox_field',
	'label'       => 'Delay Google Ads',
	'description' => __( "Delay Google Adsense until first interaction.", "soledad" ),
	'type'        => 'soledad-fw-toggle',
);
$options[] = array(
	'id'          => 'penci_speed_delay_js_excludes',
	'default'     => '',
	'sanitize'    => 'penci_sanitize_textarea_field',
	'label'       => 'Exclude Scripts from Delay Execution',
	'description' => __( 'Enter one per line to exclude certain scripts from this optimizations, you can use ids of the scripts or a part from src attr from the scripts.<br/>Examples:', 'soledad' )
		. '<br/><code>id:my-js-id</code> or <code>a-part-from-src-attr</code>',
	'type'        => 'soledad-fw-textarea',
);
$options[] = array(
	'default'     => false,
	'sanitize'    => 'penci_sanitize_checkbox_field',
	'label'       => 'Load deferred for JS files from the theme',
	'id'          => 'penci_speed_add_defer',
	'description' => __( "This option will help you add defer='defer' attr to JS files from the theme", "soledad" ),
	'type'        => 'soledad-fw-toggle',
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'penci_sanitize_textarea_field',
	'label'       => 'Manually add JS name(s) to load defer="defer"',
	'id'          => 'penci_speed_add_more_defer',
	'description' => __( "You can manage to add JS you want to load defer='defer' here, use JS name(s) & separated by commas.<br>Example: <strong>js-name-a, js-name-b</strong><br><strong>The JS name</strong> is \$handle string use inside <a href='https://developer.wordpress.org/reference/functions/wp_enqueue_script/' target='_blank'>wp_enqueue_script</a> function", "soledad" ),
	'type'        => 'soledad-fw-textarea',
);

return $options;
