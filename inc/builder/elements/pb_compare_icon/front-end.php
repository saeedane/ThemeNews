<?php
$compare_page_id = get_theme_mod( 'penci_woocommerce_compare_page' );
if ( $compare_page_id ):
	?>
    <div id="top-header-compare"
         class="top-search-classes penci-builder-elements pcheader-icon compare-icon">
        <a href="<?php echo esc_url( get_page_link( $compare_page_id ) ); ?>" class="compare-contents"
           title="<?php echo penci_woo_translate_text( 'penci_woo_trans_viewcompare' ); ?>">

            <i class="penciicon-exchange-2"></i>
            <span><?php do_action( 'penci_current_compare' ); ?></span>
        </a>
    </div>
<?php endif;
