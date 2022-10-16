<?php
/**
 * Customize API: WP_Customize_Background_Position_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.7.0
 */

/**
 * Penci Custom Box Value
 *
 * @since 4.7.0
 *
 * @see WP_Customize_Control
 */
class Penci_Custom_Box_Value extends WP_Customize_Control {

	/**
	 * Type.
	 *
	 * @since 4.7.0
	 * @var string
	 */
	public $type = 'penci_pm';

	/**
	 * Don't render the control content from PHP, as it's rendered via JS on load.
	 *
	 * @since 8.0.2
	 */
	public function render_content() {
	}

	/**
	 * Render a JS template for the content of the position control.
	 *
	 * @since 4.7.0
	 */
	public function content_template() {
		$default_value = $this->value();
		$options       = array(
			'top'    => array(
				'label' => __( 'Top' ),
				'icon'  => 'dashicons dashicons-arrow-up-alt',
			),
			'right'  => array(
				'label' => __( 'Right' ),
				'icon'  => 'dashicons dashicons-arrow-right-alt',
			),
			'bottom' => array(
				'label' => __( 'Bottom' ),
				'icon'  => 'dashicons dashicons-arrow-down-alt',
			),
			'left'   => array(
				'label' => __( 'Left' ),
				'icon'  => 'dashicons dashicons-arrow-left-alt',
			),
		);
		?>
        <# if ( data.label ) { #>
        <span class="customize-control-title">{{{ data.label }}}</span>
        <# } #>
        <# if ( data.description ) { #>
        <span class="description customize-control-description">{{{ data.description }}}</span>
        <# } #>
        <div class="customize-control-content">
            <fieldset>
                <legend class="screen-reader-text"><span><?php _e( 'Custom Value' ); ?></span></legend>
                <div class="penci-pm-control">

					<?php foreach ( $options as $value => $input ) : ?>
                        <div class="button-group">
                            <label>
                                <span class="label"><?php echo $input['label']; ?></span>
                                <input id="<?php echo esc_attr( $this->id ); ?>[<?php echo esc_attr( $value ); ?>]"
                                       class="penci-pm-number"
                                       name="<?php echo esc_attr( $this->id ); ?>[<?php echo esc_attr( $value ); ?>]"
                                       type="number"
                                       value="<?php echo isset( $default_value[ $value ] ) && $default_value[ $value ] ? $default_value[ $value ] : ''; ?>">
                            </label>
                        </div>
					<?php endforeach; ?>

                    <input id="<?php echo esc_attr( $this->id ); ?>" class="penci-pm"
                           name="<?php echo esc_attr( $this->id ); ?>"
                           type="hidden"
                           value="<?php echo explode( ',', $default_value ); ?>" <?php $this->link(); ?>>

                </div>
            </fieldset>
        </div>
		<?php
	}
}
