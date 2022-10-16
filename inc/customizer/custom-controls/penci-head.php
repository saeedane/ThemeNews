<?php

class Penci_Head extends WP_Customize_Control {
	/**
	 * Control type
	 *
	 * @var string
	 */
	public $type = 'penci_head';

	/**
	 * Control scripts and styles enqueue
	 *
	 * @since 1.0.0
	 */
	public function enqueue() {
		wp_enqueue_script( 'custom_controls', get_template_directory_uri() . '/inc/customizer/js/customizer.js', array( 'jquery' ), '1.0', true );
		wp_enqueue_style( 'custom_controls_css', get_template_directory_uri() . '/inc/customizer/css/customizer.css' );
	}

	/**
	 * Control method
	 *
	 * @since 1.0.0
	 */
	public function render_content() {
		$html_content = $this->value();
		echo $html_content;
	}
}
