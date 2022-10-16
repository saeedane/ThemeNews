<div class="pc-builder-element penci-menuhbg-wapper penci-menu-toggle-wapper">
    <a href="#pencimenuhbgtoggle" class="penci-menuhbg-toggle builder">
		<span class="penci-menuhbg-inner">
			<i class="lines-button lines-button-double">
				<i class="penci-lines"></i>
			</i>
			<i class="lines-button lines-button-double penci-hover-effect">
				<i class="penci-lines"></i>
			</i>
		</span>
    </a>
</div>
<?php
add_filter( 'theme_mod_penci_menu_hbg_show', function () {
	return true;
} );
