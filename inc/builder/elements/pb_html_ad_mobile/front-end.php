<?php
$ads_html = penci_get_builder_mod( 'penci_header_builder_pb_html_mobile_name', false );
if ( empty( $ads_html ) ) {
	return false;
}
?>

<div class="penci-builder-element penci-html-ads penci-html-ads-mobile">
	<?php echo do_shortcode( $ads_html ); ?>
</div>
