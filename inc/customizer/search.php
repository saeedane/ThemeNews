<?php
if ( ! function_exists( 'penci_customizer_search_scripts' ) ) {
	add_action( 'customize_controls_enqueue_scripts', 'penci_customizer_search_scripts' );
	function penci_customizer_search_scripts() {
		wp_enqueue_style( 'customizer-search-admin', get_template_directory_uri() . '/inc/customizer/css/customizer-search-admin.css', array(), PENCI_SOLEDAD_VERSION );
		wp_enqueue_script( 'customizer-search-admin', get_template_directory_uri() . '/inc/customizer/js/customizer-search-admin.min.js', array(), PENCI_SOLEDAD_VERSION, true );
	}
}
if ( ! function_exists( 'penci_customizer_search_template' ) ) {
	add_action( 'customize_controls_print_footer_scripts', 'penci_customizer_search_template' );
	function penci_customizer_search_template() {
		?>

        <script type="text/html" id="tmpl-search-button">

            <button type="button" class="customize-search-toggle dashicons dashicons-search" aria-expanded="false"><span
                        class="screen-reader-text">Search</span></button>

        </script>

        <script type="text/html" id="tmpl-search-form">
            <div id="accordion-section-customizer-search" style="display: none;">
                <h4 class="customizer-search-section accordion-section-title">
                    <span class="search-input"><?php _e( 'Search', 'soledad' ); ?></span>
                    <span class="search-field-wrapper">
				<input type="text" placeholder="<?php _e( 'Type to search the option...', 'soledad' ); ?>"
                       name="customizer-search-input" autofocus="autofocus" id="customizer-search-input"
                       class="customizer-search-input">
				<button type="button" class="button clear-search"
                        tabindex="0"><?php _e( 'Clear', 'soledad' ); ?></button>
			</span>

                </h4>
            </div>
        </script>

		<?php

	}
}

