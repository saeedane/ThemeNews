<?php
/* Add Sections */

$wp_customize->add_section( 'penci_section_speed_general', array(
	'title'       => esc_html__( 'General & Lazyload', 'soledad' ),
	'priority'    => 5,
	'panel'       => 'penci_speed_section_panel',
	'description' => __( 'To use options here in the right way - please check <a target="_blank" href="https://soledad.pencidesign.net/soledad-document/#speed-optimization">this guide</a> first - on <strong>Speed Optimization</strong> section', 'soledad' ),
) );
$wp_customize->add_section( 'penci_section_speed_css', array(
	'title'       => esc_html__( 'Optimize CSS', 'soledad' ),
	'priority'    => 10,
	'panel'       => 'penci_speed_section_panel',
	'description' => __( 'To use options here in the right way - please check <a target="_blank" href="https://soledad.pencidesign.net/soledad-document/#speed-optimization">this guide</a> first - on <strong>Speed Optimization</strong> section', 'soledad' ),
) );

$wp_customize->add_section( 'penci_section_speed_javascript', array(
	'title'       => esc_html__( 'Optimize JavaScript', 'soledad' ),
	'priority'    => 15,
	'description' => __( 'To use options here in the right way - please check <a target="_blank" href="https://soledad.pencidesign.net/soledad-document/#speed-optimization">this guide</a> first - on <strong>Speed Optimization</strong> section', 'soledad' ),
	'panel'       => 'penci_speed_section_panel'
) );

$wp_customize->add_section( 'penci_section_speed_html', array(
	'title'       => esc_html__( 'Optimize HTML', 'soledad' ),
	'priority'    => 20,
	'description' => __( 'To use options here in the right way - please check <a target="_blank" href="https://soledad.pencidesign.net/soledad-document/#speed-optimization">this guide</a> first - on <strong>Speed Optimization</strong> section', 'soledad' ),
	'panel'       => 'penci_speed_section_panel'
) );

/* General & Lazyload */
$wp_customize->add_setting( 'penci_speed_disable_cssjs', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_disable_cssjs', array(
	'label'    => 'Activate optimize CSS/JS for logged in users?',
	'section'  => 'penci_section_speed_general',
	'settings' => 'penci_speed_disable_cssjs',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_speed_disable_emoji', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_disable_emoji', array(
	'label'    => 'Disable Emoji and Smilies',
	'section'  => 'penci_section_speed_general',
	'settings' => 'penci_speed_disable_emoji',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_speed_remove_query_string', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_remove_query_string', array(
	'label'       => 'Remove query strings from static resource',
	'description' => __( 'Remove query strings for non-login & non-administrator users', 'soledad' ),
	'section'     => 'penci_section_speed_general',
	'settings'    => 'penci_speed_remove_query_string',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_speed_remove_wlwmanifest', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_remove_wlwmanifest', array(
	'label'       => 'Remove wlwmanifest Link',
	'description' => __( 'If you do not use Windows Live Writer, you can disable it.', 'soledad' ),
	'section'     => 'penci_section_speed_general',
	'settings'    => 'penci_speed_remove_wlwmanifest',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_speed_remove_xml_rsd', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_remove_xml_rsd', array(
	'label'       => 'Remove XML-RPC and RSD Link',
	'description' => __( 'Check <a href="https://codex.wordpress.org/XML-RPC_Support" target="_blank">this post</a> and <a target="_blank" href="https://developer.wordpress.org/reference/functions/rsd_link/">this post</a> to understand what is it. In most cases, its not needed, so if you dont need it, you can remove it.', 'soledad' ),
	'section'     => 'penci_section_speed_general',
	'settings'    => 'penci_speed_remove_xml_rsd',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_speed_rweather_icons', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_rweather_icons', array(
	'label'       => 'Disable Weather font icons',
	'description' => __( 'If you do not use Weather widgets, you can disable weather icons loads to your site.', 'soledad' ),
	'section'     => 'penci_section_speed_general',
	'settings'    => 'penci_speed_rweather_icons',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_section_speed_lazy_heading', array(
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_section_speed_lazy_heading', array(
	'label'       => esc_html__( 'Lazyload Images', 'soledad' ),
	'section'     => 'penci_section_speed_general',
	'settings'    => 'penci_section_speed_lazy_heading',
	'description' => __( "This theme supports lazyload images from itself. But, if you want to use lazyload images from another plugin - let disable the lazyload images below to get it works. But, If you want to use the optimise speed features from our theme, using the lazy load images feature from our theme is required.", "soledad" ),
	'type'        => 'heading',
) ) );

$wp_customize->add_setting( 'penci_speed_disable_first_screen', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_disable_first_screen', array(
	'label'    => 'Delay all images loading in the first screen to optimize LCP value',
	'section'  => 'penci_section_speed_general',
	'settings' => 'penci_speed_disable_first_screen',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_topbar_mega_disable_lazy', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'topbar_mega_disable_lazy', array(
	'label'    => 'Disable LazyLoad Images on Category Mega Menu',
	'section'  => 'penci_section_speed_general',
	'settings' => 'penci_topbar_mega_disable_lazy',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_disable_lazyload_slider', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'disable_lazyload_slider', array(
	'label'    => 'Disable Lazy Load Images on Sliders',
	'section'  => 'penci_section_speed_general',
	'settings' => 'penci_disable_lazyload_slider',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_disable_lazyload_layout', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'disable_lazyload_layout', array(
	'label'    => 'Disable Lazyload Images on All Posts Layouts & Widgets',
	'section'  => 'penci_section_speed_general',
	'settings' => 'penci_disable_lazyload_layout',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_disable_lazyload_fsingle', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_disable_lazyload_fsingle', array(
	'label'    => 'Disable Lazyload for Featured Image on Single Posts/Pages',
	'section'  => 'penci_section_speed_general',
	'settings' => 'penci_disable_lazyload_fsingle',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_disable_lazyload_single', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'disable_lazyload_single', array(
	'label'    => 'Disable Lazyload Images on Single Posts',
	'section'  => 'penci_section_speed_general',
	'settings' => 'penci_disable_lazyload_single',
	'type'     => 'checkbox',
) ) );


/* CSS Options */
$wp_customize->add_setting( 'penci_spcss_render', array(
	'default'           => 'inline',
	'sanitize_callback' => 'penci_sanitize_choices_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_spcss_render', array(
	'label'       => 'Render Customizer CSS Method',
	'section'     => 'penci_section_speed_css',
	'settings'    => 'penci_spcss_render',
	'description' => __( 'Render Customizer CSS in a separate file can help you to improve performance dramatically.', 'soledad' ),
	'type'        => 'select',
	'choices'     => array(
		'inline'        => esc_html__( 'Inline CSS', 'soledad' ),
		'separate_file' => esc_html__( 'Separate CSS File', 'soledad' ),
	)
) ) );

$wp_customize->add_control( new Penci_Custom_Button_Control( $wp_customize, 'penci_render_separate_css', array(
	'section'         => 'penci_section_speed_css',
	'data_type'       => 'render_separate_css',
	'nonce'           => esc_html( wp_create_nonce( 'penci_render_separate_css_file' ) ),
	'label'           => __( 'Regenerate CSS File', 'soledad' ),
	'settings'        => ( isset( $wp_customize->selective_refresh ) ) ? array() : 'blogname',
	'active_callback' => 'penci_activate_separate_css_file_callback',
) ) );

$wp_customize->add_setting( 'penci_speed_remove_gutenbergcss', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_remove_gutenbergcss', array(
	'label'       => 'Remove Gutenberg Styles',
	'section'     => 'penci_section_speed_css',
	'description' => __( 'Use with caution. This will remove styles for Gutenberg editor from the <head> - only activate it if your website users using the Classic Editor', 'soledad' ),
	'settings'    => 'penci_speed_remove_gutenbergcss',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_speed_optimize_css', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_optimize_css', array(
	'label'       => 'Enable Optimize CSS',
	'section'     => 'penci_section_speed_css',
	'description' => __( "You need to check to this option to make all optimize CSS options below works", "soledad" ),
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_speed_optimize_css_minify', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_optimize_css_minify', array(
	'label'       => 'Minify All CSS',
	'section'     => 'penci_section_speed_css',
	'description' => __( "Minify CSS to reduced the CSS size.", "soledad" ),
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_speed_optimize_css_to_inline', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_optimize_css_to_inline', array(
	'label'       => 'Inline Optimized CSS',
	'section'     => 'penci_section_speed_css',
	'description' => __( "Inline the CSS to prevent flash of unstyled content. Highly recommended.", "soledad" ),
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_speed_optimize_gfonts', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_optimize_gfonts', array(
	'label'       => 'Optimize Google Fonts',
	'section'     => 'penci_section_speed_css',
	'description' => __( "Add preconnect hints and add display swap for Google Fonts.", "soledad" ),
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_speed_optimize_gfonts_inline', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_optimize_gfonts_inline', array(
	'label'       => 'Inline Google Fonts CSS',
	'section'     => 'penci_section_speed_css',
	'description' => __( " Inline the Google Fonts CSS for a big boost on FCP and slight on LCP on mobile. Highly recommended.", "soledad" ),
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_speed_optimize_css_excludes', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_optimize_css_excludes', array(
	'label'       => 'Exclude Stylesheets from Optimize CSS',
	'section'     => 'penci_section_speed_css',
	'description' => __( "Enter one per line to exclude certain CSS files from this optimizations. Examples: <strong>id:my-css-id</strong> OR <strong>a-part-from-file-url</strong>", "soledad" ),
	'type'        => 'textarea',
) ) );

/* CSS Optimizer Options */
$wp_customize->add_setting( 'penci_speed_remove_css', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_remove_css', array(
	'label'       => 'Create Critical CSS?',
	'description' => 'Remove Unused CSS to reduce the loading time, all other CSS will be delayed to loads until user interaction.',
	'section'     => 'penci_section_speed_css',
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_speed_remove_css_excludes', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_remove_css_excludes', array(
	'label'       => 'Exclude Stylesheets from Remove Unused CSS',
	'section'     => 'penci_section_speed_css',
	'description' => __( "Enter one per line to exclude certain CSS files from this optimizations. It won't remove the Unused CSS from those stylesheets. Examples: <strong>id:my-css-id</strong> OR <strong>a-part-from-file-url</strong>", "soledad" ),
	'type'        => 'textarea',
) ) );

$wp_customize->add_setting( 'penci_speed_allow_css_selectors', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_allow_css_selectors', array(
	'label'       => 'Always Keep Selectors',
	'section'     => 'penci_section_speed_css',
	'description' => __( "Enter one per line. Partial or full matches for selectors (if any of these keywords found, the selector will be kept). Examples: .myclass", "soledad" ),
	'type'        => 'textarea',
) ) );

// extra information
if( function_exists( 'penci_speed_optimizer_get_stat' ) ){
	$soledad_pages_speed_stat = penci_speed_optimizer_get_stat();
	$css_cache                = $soledad_pages_speed_stat['css'];
	$wp_customize->add_control( new Penci_Custom_Button_Control( $wp_customize, 'penci_speed_delete_cache', array(
		'section'     => 'penci_section_speed_css',
		'data_type'   => 'penci_speed_delete_cache',
		'nonce'       => esc_html( wp_create_nonce( 'penci_speed_delete_cache' ) ),
		'label'       => __( 'Clear Critical CSS Cache', 'soledad' ),
		'description' => sprintf( __( '<strong>Critical CSS Cache Files:</strong> <span class="count">%1$d</span>', 'soledad' ), $css_cache ),
		'settings'    => array(),
	) ) );
}

/* Javascript Options */
$wp_customize->add_setting( 'penci_speed_js_minify', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_js_minify', array(
	'label'    => 'Minify JS from the Theme',
	'section'  => 'penci_section_speed_javascript',
	'settings' => 'penci_speed_js_minify',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_speed_remove_jquery_migrate', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_remove_jquery_migrate', array(
	'label'    => 'Remove jQuery Migrate',
	'section'  => 'penci_section_speed_javascript',
	'settings' => 'penci_speed_remove_jquery_migrate',
	'type'     => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_speed_delay_js', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_delay_js', array(
	'label'       => 'Delay Javascript Execution',
	'section'     => 'penci_section_speed_javascript',
	'description' => __( "Delay execution of the targeted JS files until user interaction ( move mouse, click, scroll, touch,... ).", "soledad" ),
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_speed_delay_js_adsense', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_delay_js_adsense', array(
	'label'       => 'Delay Google Ads',
	'section'     => 'penci_section_speed_javascript',
	'description' => __( "Delay Google Adsense until first interaction.", "soledad" ),
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_speed_delay_js_excludes', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_delay_js_excludes', array(
	'label'       => 'Exclude Scripts from Delay Execution',
	'section'     => 'penci_section_speed_javascript',
	'description' => __( 'Enter one per line to exclude certain scripts from this optimizations, you can use ids of the scripts or a part from src attr from the scripts.<br/>Examples:', 'soledad' )
		. '<br/><code>id:my-js-id</code> or <code>a-part-from-src-attr</code>',
	'type'        => 'textarea',
) ) );

$wp_customize->add_setting( 'penci_speed_add_defer', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_add_defer', array(
	'label'       => 'Load deferred for JS files from the theme',
	'section'     => 'penci_section_speed_javascript',
	'settings'    => 'penci_speed_add_defer',
	'description' => __( "This option will help you add defer='defer' attr to JS files from the theme", "soledad" ),
	'type'        => 'checkbox',
) ) );

$wp_customize->add_setting( 'penci_speed_add_more_defer', array(
	'default'           => '',
	'sanitize_callback' => 'penci_sanitize_textarea_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_add_more_defer', array(
	'label'       => 'Manually add JS name(s) to load defer="defer"',
	'section'     => 'penci_section_speed_javascript',
	'settings'    => 'penci_speed_add_more_defer',
	'description' => __( "You can manage to add JS you want to load defer='defer' here, use JS name(s) & separated by commas.<br>Example: <strong>js-name-a, js-name-b</strong><br><strong>The JS name</strong> is \$handle string use inside <a href='https://developer.wordpress.org/reference/functions/wp_enqueue_script/' target='_blank'>wp_enqueue_script</a> function", "soledad" ),
	'type'        => 'textarea',
) ) );

/* HTML Optimize */
$wp_customize->add_setting( 'penci_speed_html_minify', array(
	'default'           => false,
	'sanitize_callback' => 'penci_sanitize_checkbox_field'
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_speed_html_minify', array(
	'label'       => 'Minify HTML',
	'section'     => 'penci_section_speed_html',
	'description' => __( "Minify HTML won't apply for admin users logged in, so let check how it works without logged in.", "soledad" ),
	'settings'    => 'penci_speed_html_minify',
	'type'        => 'checkbox',
) ) );
