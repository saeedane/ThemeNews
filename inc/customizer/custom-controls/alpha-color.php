<?php

class Penci_Alpha_Color_Control extends WP_Customize_Control {
	/**
	 * The type of control being rendered
	 */
	public $type = 'wpcolorpicker-alpha-color';
	/**
	 * ColorPicker Attributes
	 */
	public $attributes = "";
	/**
	 * Color palette defaults
	 */
	public $defaultPalette = array(
		'#000000',
		'#ffffff',
		'#dd3333',
		'#dd9933',
		'#eeee22',
		'#81d742',
		'#1e73be',
		'#8224e3',
	);

	/**
	 * Constructor
	 */
	public function __construct( $manager, $id, $args = array(), $options = array() ) {
		parent::__construct( $manager, $id, $args );
		$this->attributes .= 'data-default-color="' . esc_attr( $this->value() ) . '"';
		$this->attributes .= 'data-alpha="true"';
		$this->attributes .= 'data-reset-alpha="' . ( isset( $this->input_attrs['resetalpha'] ) ? $this->input_attrs['resetalpha'] : 'true' ) . '"';
		$this->attributes .= 'data-custom-width="0"';
	}

	/**
	 * Enqueue our scripts and styles
	 */
	public function enqueue() {
		wp_enqueue_style( 'penci-custom-controls-css', get_template_directory_uri() . '/inc/customizer/css/customizer.css', array(), PENCI_SOLEDAD_VERSION, 'all' );
		wp_enqueue_script( 'wp-color-picker-alpha', get_template_directory_uri() . '/inc/customizer/js/wp-color-picker-alpha-min.js', array( 'wp-color-picker' ), '1.0', true );
		wp_enqueue_style( 'wp-color-picker' );
	}

	/**
	 * Pass our Palette colours to JavaScript
	 */
	public function to_json() {
		parent::to_json();
		$this->json['colorpickerpalette'] = isset( $this->input_attrs['palette'] ) ? $this->input_attrs['palette'] : $this->defaultPalette;
	}

	/**
	 * Render the control in the customizer
	 */
	public function render_content() {
		?>
        <div class="wpcolorpicker_alpha_color_control">
			<?php if ( ! empty( $this->label ) ) { ?>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php } ?>
			<?php if ( ! empty( $this->description ) ) { ?>
                <span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
			<?php } ?>
            <input type="text" class="wpcolorpicker-alpha-color-picker" id="<?php echo esc_attr( $this->id ); ?>"
                   name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $this->value() ); ?>"
                   class="customize-control-colorpicker-alpha-color" <?php echo $this->attributes; ?> <?php $this->link(); ?> />
        </div>
		<?php
	}
}
