<?php
$date_time_format = penci_get_builder_mod( 'penci_header_pb_data_time_format' );
$class            = penci_get_builder_mod( 'penci_header_pb_data_time_css_class' );
if ( empty( $date_time_format ) ) {
	return false;
}
?>

<div class="penci-builder-element penci-data-time-format <?php echo esc_attr( $class ); ?>">
    <span><?php echo current_time( $date_time_format ); ?></span>
</div>
