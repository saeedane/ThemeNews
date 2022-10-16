<?php

class Box_Model extends WP_Customize_Control {
	/**
	 * Control type
	 *
	 * @var string
	 */
	public $type = 'box_model';

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
		if ( ! empty( $this->label ) ) : ?>
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		<?php endif;
		if ( ! empty( $this->description ) ) : ?>
            <p class="description customize-control-description"><?php echo esc_html( $this->description ); ?></p>
		<?php endif;
		$saved_values = ( ! is_array( $this->value() ) && ! empty( $this->value() ) ) ? explode( ', ', $this->value() ) : explode( ', ', '\'\', \'\', \'\', \'\', \'\', \'\', \'\', \'\', \'\', \'\', \'\', \'\', \'\', \'\', \'\', \'\'' ); ?>
        <div class="box-model-wrapper">
			<?php
			foreach ( $this->choices as $key => $value ) {
				if ( 'margin' === $key ) { ?>
                    <div class="box-model box-model-margin">
                    <h4 class="box-head"><?php esc_html_e( 'Margin', 'soledad' ); ?></h4>
					<?php
					$margin_count = 0;
					foreach ( $value as $m_key => $m_value ) {
						echo '<div class="box-spacing-item">';
						echo '<span class="box-title">' . $this->box_label( $margin_count ) . '</span>';
						echo '<input type="number" placeholder="-" value="' . $saved_values[ $margin_count ] . '" class="box-model-field ' . esc_html( $m_key ) . '">';
						echo '</div>';
						$margin_count ++;
					} ?>
                    </div><?php
				}
				if ( 'padding' === $key ) { ?>
                    <div class="box-model box-model-padding">
                    <h4 class="box-head"><?php esc_html_e( 'Padding', 'soledad' ); ?></h4>
					<?php
					$padding_count = 4; // margin takes array keys 0-3, padding 4-7.
					foreach ( $value as $p_key => $p_value ) {
						echo '<div class="box-spacing-item">';
						echo '<span class="box-title">' . $this->box_label( $padding_count ) . '</span>';
						echo '<input type="number" placeholder="-" value="' . $saved_values[ $padding_count ] . '" class="box-model-field ' . esc_html( $p_key ) . '">';
						echo '</div>';
						$padding_count ++;
					} ?>
                    </div><?php
				}
				if ( 'border' === $key ) { ?>
                    <div class="box-model box-model-border">
                    <h4 class="box-head"><?php esc_html_e( 'Borders Width', 'soledad' ); ?></h4>
					<?php
					$border_count = 8; // margin takes array keys 0-3, padding 4-7.
					foreach ( $value as $b_key => $b_value ) {
						echo '<div class="box-spacing-item">';
						echo '<span class="box-title">' . $this->box_label( $border_count ) . '</span>';
						echo '<input type="number" placeholder="-" value="' . $saved_values[ $border_count ] . '" class="box-model-field ' . esc_html( $b_key ) . '">';
						echo '</div>';
						$border_count ++;
					} ?>
                    </div><?php
				}
				if ( 'border-radius' === $key ) { ?>
                    <div class="box-model box-model-border-radius">
                    <h4 class="box-head"><?php esc_html_e( 'Borders Radius', 'soledad' ); ?></h4>
					<?php
					$border_radius_count = 12; // margin takes array keys 0-3, padding 4-7.
					foreach ( $value as $br_key => $br_value ) {
						$border_radius_count_vl = isset( $saved_values[ $border_radius_count ] ) ? $saved_values[ $border_radius_count ] : '';
						echo '<div class="box-spacing-item">';
						echo '<span class="box-title">' . $this->box_label( $border_radius_count ) . '</span>';
						echo '<input type="number" placeholder="-" value="' . $border_radius_count_vl . '" class="box-model-field ' . esc_html( $br_key ) . '">';
						echo '</div>';
						$border_radius_count ++;
					} ?>
                    </div><?php
				}
			} ?>
            <input type="hidden" class="box-model-saved" <?php $this->link(); ?>
                   value="<?php echo implode( '-', $saved_values ); ?>"/>
        </div>
		<?php
	}

	public function box_label( $count ) {
		switch ( $count ) {
			case 0:
			case 4:
			case 8:
			case 12:
				$class = __( 'Top', 'soledad' );
				break;
			case 1:
			case 5:
			case 9:
			case 13:
				$class = __( 'Right', 'soledad' );
				break;
			case 2:
			case 6:
			case 10:
			case 14:
				$class = __( 'Bottom', 'soledad' );
				break;
			case 3:
			case 7:
			case 11:
			case 15:
				$class = __( 'Left', 'soledad' );
				break;
			default:
				$class = __( 'Value', 'soledad' );
		}

		return $class;
	}
}
