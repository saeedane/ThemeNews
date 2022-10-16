<?php

class Penci_Upsell_Section extends WP_Customize_Control {
	/**
	 * The type of control being rendered
	 */
	public $type = 'penci-upsell';
	/**
	 * The Upsell URL
	 */
	public $url = '';
	/**
	 * The background color for the control
	 */
	public $backgroundcolor = '';
	/**
	 * The text color for the control
	 */
	public $textcolor = '';

	/**
	 * Enqueue our scripts and styles
	 */
	public function enqueue() {
		wp_enqueue_style( 'penci-custom-controls-js', get_template_directory_uri() . '/inc/customizer/js/customizer.js', array(), PENCI_SOLEDAD_VERSION, 'all' );
		wp_enqueue_style( 'penci-custom-controls-css', get_template_directory_uri() . '/inc/customizer/css/customizer.css', array(), PENCI_SOLEDAD_VERSION, 'all' );
	}

	/**
	 * Render the section, and the controls that have been added to it.
	 */
	protected function render() {
		$bkgrndcolor = ! empty( $this->backgroundcolor ) ? esc_attr( $this->backgroundcolor ) : '#fff';
		$color       = ! empty( $this->textcolor ) ? esc_attr( $this->textcolor ) : '#555d66';
		?>
        <li id="accordion-section-<?php echo esc_attr( $this->id ); ?>"
            class="penci_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
            <h3 class="upsell-section-title" <?php echo ' style="color:' . $color . ';border-left-color:' . $bkgrndcolor . ';border-right-color:' . $bkgrndcolor . ';"'; ?>>
                <a href="<?php echo esc_url( $this->url ); ?>"
                   target="_blank"<?php echo ' style="background-color:' . $bkgrndcolor . ';color:' . $color . ';"'; ?>><?php echo esc_html( $this->title ); ?></a>
            </h3>
        </li>
		<?php
	}
}
