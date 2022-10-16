<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! class_exists( 'Penci_Social_Counter_Tiktok_API' ) ):
	class Penci_Social_Counter_Tiktok_API {
		public static function get_count( $data, $cache_period ) {
			if ( empty( $data['name'] ) ) {
				return $data;
			}

			$user_id      = preg_replace( '/\s+/', '', $data['name'] );
			$data['icon'] = penci_icon_by_ver( 'penciicon-tik-tok-1' );

			$cache_key    = 'penci_counter_tiktok' . $user_id;
			$tiktok_count = get_transient( $cache_key );
			$data['url']  = "https://www.tiktok.com/@$user_id";

			if ( ! $tiktok_count ) {

				$count = self::get_tiktok_count( $user_id );

				set_transient( $cache_key, $count, $cache_period );
			} else {
				$count = $tiktok_count;
			}

			if ( $count ) {
				$data['count'] = $count;
			}

			return $data;
		}

		public static function get_tiktok_count( $username ): string {
			$count    = 0;
			$url      = "https://www.tiktok.com/@{$username}";
			$response = wp_remote_get( $url, array(
				'timeout' => 20,
				'user-agent' => 'Mozilla/5.0 (compatible; MSIE 6.0; Windows CE; Trident/3.0)'
			) );
			if( is_array( $response ) && ! is_wp_error( $response ) ){
				$pattern  = "/<strong title=\"Followers\" data-e2e=\"followers-count\">(.*?)<\/strong>/";
				preg_match_all( $pattern, $response['body'], $matches );

				if ( isset( $matches[0][0] ) ) {
					$count = $matches[0][0];
				}
			}

			return $count;
		}
	}

endif;
