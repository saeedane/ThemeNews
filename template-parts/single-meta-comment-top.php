<?php
$style_cscount = get_theme_mod( 'penci_single_style_cscount', 's1' );
$align_cscount = is_page() ? 'penci_page_align_cscount' : 'penci_post_align_cscount';
if ( is_page() ) {
	$page_cscount  = get_theme_mod( 'penci_page_style_cscount', 's1' );
	$style_cscount = ! empty( $page_cscount ) ? $page_cscount : $style_cscount;
}
$single_style = penci_get_single_style();

$is_show_comment = false;
if ( ! get_theme_mod( 'penci_single_meta_comment' ) && 's1' == $style_cscount  ){
	$is_show_comment = true;
}

if ( ! in_array( $single_style, array( 'style-1', 'style-2' ) ) ) {
	$is_show_comment = false;
}
$wrapper_class   = array();
$wrapper_class[] = 'tags-share-box tags-share-box-top';
$wrapper_class[] = is_page() ? 'page-share hide-tags' : 'single-post-share';
$wrapper_class[] = 'tags-share-box-' . $style_cscount;
$wrapper_class[] = 's1' == $style_cscount ? 'center-box' : 'tags-share-box-2_3';
$wrapper_class[] = 'social-align-' . get_theme_mod( strval( $align_cscount ), 'default' );
?>
<?php if( ! get_theme_mod( 'penci_single_meta_comment' ) || ! get_theme_mod( 'penci_post_share' ) ): ?>
	<div class="<?php echo esc_attr( implode( ' ', $wrapper_class ) ); ?>">
		<?php
		if( 's1' != $style_cscount ){
			echo '<span class="penci-social-share-text">';
			if( get_theme_mod( 'penci_trans_share' ) ) { echo do_shortcode( get_theme_mod( 'penci_trans_share' ) ); }else{ esc_html_e( 'Share', 'soledad' ); }
			echo '</span>';
		}
		?>
		<?php if ( $is_show_comment  ) : ?>
			<span class="single-comment-o<?php if ( get_theme_mod( 'penci_post_share' ) ) : echo ' hide-comments-o'; endif; ?>"><?php penci_fawesome_icon('far fa-comment'); ?><?php comments_number( '0 ' . penci_get_setting( 'penci_trans_comment' ), '1 '. penci_get_setting( 'penci_trans_comment' ), '% ' . penci_get_setting( 'penci_trans_comments' ) ); ?></span>
		<?php endif; ?>

		<?php if ( ! get_theme_mod( 'penci_post_share' ) ) : ?>
			<div class="post-share<?php if( get_theme_mod( 'penci__hide_share_plike' ) ): echo ' hide-like-count'; endif; ?>">
				<?php if( ! get_theme_mod( 'penci__hide_share_plike' ) ): ?>
					<span class="post-share-item post-share-plike">
					<?php echo penci_single_getPostLikeLink( get_the_ID() ); ?>
					</span>
				<?php endif; ?>

				<?php penci_soledad_social_share( 'single' );  ?>
			</div>
		<?php endif; ?>
	</div>
<?php endif; ?>