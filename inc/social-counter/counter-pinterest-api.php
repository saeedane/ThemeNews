<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! class_exists( 'Penci_Social_Counter_Pinterest_API' ) ):
	class Penci_Social_Counter_Pinterest_API {
		public static function get_count( $data, $cache_period ) {

			$user_id         = preg_replace( '/\s+/', '', $data['name'] );
			$data['url']     = "https://www.pinterest.com/$user_id";
			$data['icon']    = penci_icon_by_ver( 'fab fa-pinterest' );
			$cache_key       = 'penci_counter__pinterest' . $user_id;
			$pinterest_count = get_transient( $cache_key );
			$count = 0;
			if ( ! $pinterest_count ) {

				try {
					$html = penci_remote_get( "https://www.pinterest.com/$user_id/", false );
					if( is_array( $html ) && ! is_wp_error( $html ) ){
						$doc = new DOMDocument();
						@$doc->loadHTML( $html );
						$metas = $doc->getElementsByTagName( 'meta' );
						for ( $i = 0; $i < $metas->length; $i ++ ) {
							$meta = $metas->item( $i );
							if ( $meta->getAttribute( 'name' ) == 'pinterestapp:followers' ) {
								$count = $meta->getAttribute( 'content' );
								set_transient( $cache_key, $count, $cache_period );
								break;
							}
						}
					}
				} catch ( Exception $e ) {
					$count = 0;
				}

			} else {
				$count = $pinterest_count;
			}

			$data['count'] = $count;

			return $data;
		}
	}

endif;
