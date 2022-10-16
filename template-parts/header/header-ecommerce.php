<?php $header_class_main = penci_soledad_wpheader_classes(); ?>
<header id="header" class="<?php echo esc_attr( $header_class_main ); ?>"
        <?php if ( ! get_theme_mod( 'penci_schema_wphead' ) ): ?>itemscope="itemscope"
        itemtype="https://schema.org/WPHeader"<?php endif; ?>>
	<?php if ( ! get_theme_mod( 'penci_vertical_nav_show' ) ) : ?>

        <div class="header-middle-content">
            <div class="<?php penci_soledad_get_header_width(); ?>">
                <div class="penci-wrap">
                    <div class="penci-header-shop-logo" id="logo">
						<?php get_template_part( 'template-parts/header/logo' ); ?>
						<?php if ( ( is_home() || is_front_page() ) && get_theme_mod( 'penci_home_h1content' ) ): echo '<h1 class="penci-hide-tagupdated">' . get_theme_mod( 'penci_home_h1content' ) . '</h1>'; endif; ?>
                    </div>
                    <div class="penci-header-shop-search">
		                <?php
		                if ( function_exists( 'penci_search_form' ) ) {
			                penci_search_form();
		                }
		                ?>
                    </div>
                    <div class="penci-header-shop-tools">
		                <?php
		                //get_template_part( 'inc/templates/shop_login' );
		                if ( class_exists( 'WooCommerce' ) ) {
			                get_template_part( 'template-parts/header/shop-icon' );
		                }
		                ?>
                    </div>
                </div>
            </div>
        </div>

		<?php $class_layout_bottom = penci_soledad_sitenavigation_classes(); ?>
		<?php
		$header_trans      = penci_is_header_transparent();
		$dis_sticky_header = get_theme_mod( 'penci_disable_sticky_header' );
		if ( $dis_sticky_header ) {
			echo '<div class="sticky-wrapper">';
		}
		?>
        <nav id="navigation" class="<?php echo esc_attr( $class_layout_bottom ); ?>" role="navigation"
		     <?php if ( ! get_theme_mod( 'penci_schema_sitenav' ) ): ?>itemscope
             itemtype="https://schema.org/SiteNavigationElement"<?php endif; ?>>
            <div class="<?php penci_soledad_get_header_width(); ?>">
                <div class="main-nav-wrapper">
                    <div class="button-menu-mobile header-ecommerce"><?php penci_svg_menu_icon(); ?></div>
					<?php
					get_template_part( 'template-parts/header/logo-mobile' );
					echo '<div class="penci-menu-wrap"><div class="sub-nav-wrapper">';
					get_template_part( 'template-parts/header/vertical-menu-shop' );
					get_template_part( 'template-parts/header/menu' );
					echo '</div></div>';

					$topbar_search = get_theme_mod( 'penci_topbar_search_check' );

					if ( ! $topbar_search || get_theme_mod( 'penci_header_social_nav' ) || get_theme_mod( 'penci_menu_hbg_show' ) || ( class_exists( 'WooCommerce' ) ) ) {
						echo '<div class="penci-header-extra">';
						get_template_part( 'template-parts/menu-hamburger-icon' );
						if ( get_theme_mod( 'penci_header_social_nav' ) ) :
							?>
                            <div class="main-nav-social<?php if ( get_theme_mod( 'penci_header_social_brand' ) ): echo ' penci-social-textcolored'; endif; ?>">
								<?php get_template_part( 'inc/modules/socials' ); ?>
                            </div>
						<?php
						endif;
						echo '</div>';
					}
					?>
                </div>
            </div>
        </nav>
		<?php
		if ( $dis_sticky_header ) {
			echo '</div>';
		}
		?>
	<?php endif; ?>
</header>
<!-- end #header -->
