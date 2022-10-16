<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! class_exists( 'Penci_Social_Counter_Instagram_API' ) ):
	class Penci_Social_Counter_Instagram_API {
		public static function get_count( $data, $cache_period ) {

			$user_id      = preg_replace( '/\s+/', '', $data['name'] );
			$data['url']  = "https://www.instagram.com/$user_id";
			$data['icon'] = penci_icon_by_ver( 'fab fa-instagram' );

			$cache_key       = 'penci_counter__instagram' . $user_id;
			$instagram_count = get_transient( $cache_key );
			delete_transient( $cache_key );
			if ( ! $instagram_count ) {

				$count = self::penci_get_instagram_data( $user_id );

				set_transient( $cache_key, $count, $cache_period );

			} else {
				$count = $instagram_count;
			}

			if ( $count ) {
				$data['count'] = $count;
			}

			return $data;
		}

		public static function clean_token( $maybe_dirty ) {
			if ( substr_count( $maybe_dirty, '.' ) < 3 ) {
				return str_replace( '634hgdf83hjdj2', '', $maybe_dirty );
			}

			$parts     = explode( '.', trim( $maybe_dirty ) );
			$last_part = $parts[2] . $parts[3];
			$cleaned   = $parts[0] . '.' . base64_decode( $parts[1] ) . '.' . base64_decode( $last_part );

			$cleaned = preg_replace( "/[^a-zA-Z0-9\.]+/", "", $cleaned );

			return $cleaned;
		}

		public static function penci_get_instagram_data( $username ) {
			$url         = 'https://webstagram.org/api?api_key=0&username=' . $username . '&source=instagram';
			$status_code = @get_headers( $url, 1 );
			$response    = array();
			if ( strpos( $status_code[0], '200' ) ) {
				$response = wp_remote_get( $url, array(
					'timeout' => 10,
				) );
			}
			if( is_array( $response ) && ! is_wp_error( $response ) ){
				$data = json_decode( $response['body'] );
				
				return $data->followers;
			} else {
				return 0;
			}
		}
	}

endif;
