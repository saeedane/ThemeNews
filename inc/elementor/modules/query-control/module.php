<?php

namespace PenciSoledadElementor\Modules\QueryControl;

use Elementor\Controls_Manager;
use PenciSoledadElementor\Base\Module_Base;
use PenciSoledadElementor\Classes\Utils;
use PenciSoledadElementor\Loader;
use PenciSoledadElementor\Modules\QueryControl\Controls\Group_Control_Posts;
use PenciSoledadElementor\Modules\QueryControl\Controls\Query;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Module extends Module_Base {

	const QUERY_CONTROL_ID = 'query';

	public static $displayed_ids = array();

	public function __construct() {
		parent::__construct();

		$this->add_actions();
	}

	protected function add_actions() {
		add_action( 'elementor/ajax/register_actions', array( $this, 'register_ajax_actions' ) );
		add_action( 'elementor/controls/controls_registered', array( $this, 'register_controls' ) );
		add_filter( 'elementor/editor/localize_settings', array( $this, 'localize_settings' ) );
		add_action( 'pre_get_posts', array( $this, 'fix_query_offset' ), 1 );
		add_filter( 'found_posts', array( $this, 'fix_query_found_posts' ), 1, 2 );
		add_filter( 'elementor/query/query_results', [ $this, 'exclude_ele_id' ], 10, 2 );
	}

	public static function get_avoid_list_ids() {
		return self::$displayed_ids;
	}

	public static function add_exclude_controls( $widget ) {

		$widget->add_control(
			'exclude', array(
				'label'       => __( 'Exclude', 'soledad' ),
				'type'        => Controls_Manager::SELECT2,
				'multiple'    => true,
				'options'     => array(
					'current_post'     => __( 'Current Post', 'soledad' ),
					'manual_selection' => __( 'Manual Selection', 'soledad' )
				),
				'label_block' => true,
				'condition'   => array( 'posts_post_type!' => array( 'by_id', 'current_query' ) ),
			)
		);

		$widget->add_control(
			'exclude_ids', array(
				'label'       => __( 'Search by Title & Select', 'soledad' ),
				'type'        => 'penci-select2',
				'post_type'   => '',
				'options'     => Group_Control_Posts::get_post_list(),
				'source_name' => 'post_type',
				'source_type' => 'any',
				'label_block' => true,
				'multiple'    => true,
				'filter_type' => 'by_id',
				'condition'   => array(
					'exclude'          => 'manual_selection',
					'posts_post_type!' => array( 'by_id', 'current_query' )
				)
			)
		);
	}

	public static function get_query_args( $control_id, $settings ) {
		$defaults = array(
			$control_id . '_post_type' => 'post',
			$control_id . '_posts_ids' => array(),
			'orderby'                  => 'date',
			'order'                    => 'desc',
			'posts_per_page'           => 3,
			'offset'                   => 0
		);

		$settings = wp_parse_args( $settings, $defaults );

		$post_type = $settings[ $control_id . '_post_type' ];

		$query_args = array(
			'orderby'             => $settings['orderby'],
			'order'               => $settings['order'],
			'ignore_sticky_posts' => $settings[ $control_id . '_ignore_sticky_posts' ] ? 1 : false,
			'post_status'         => 'publish'
		);

		$order_by = isset( $settings['orderby'] ) ? $settings['orderby'] : 'date';
		if ( 'popular' == $order_by ) {
			$query_args['meta_key'] = penci_get_postviews_key();
			$query_args['orderby']  = 'meta_value_num';
		} elseif ( 'popular7' == $order_by ) {
			$query_args['meta_key'] = 'penci_post_week_views_count';
			$query_args['orderby']  = 'meta_value_num';
		} elseif ( 'popular_month' == $order_by ) {
			$query_args['meta_key'] = 'penci_post_month_views_count';
			$query_args['orderby']  = 'meta_value_num';
		}

		if ( 'by_id' === $post_type ) {
			$post_types = Utils::get_public_post_types();

			$query_args['post_type']      = array_keys( $post_types );
			$query_args['posts_per_page'] = - 1;
			$query_args['post__in']       = $settings[ $control_id . '_posts_ids' ];

			if ( empty( $query_args['post__in'] ) ) {
				$query_args['post__in'] = array( 0 );
			}
		} elseif ( 'current_query' === $post_type ) {
			$query_args = $GLOBALS['wp_query']->query_vars;

			return $query_args;

		} else {
			$query_args['post_type']      = $post_type;
			$query_args['posts_per_page'] = $settings['posts_per_page'];
			$query_args['tax_query']      = array();

			if ( 0 < $settings['offset'] ) {
				$query_args['offset'] = $settings['offset'];
			}

			$taxonomies = get_object_taxonomies( $post_type, 'objects' );

			foreach ( $taxonomies as $object ) {
				$setting_key = $control_id . '_' . $object->name . '_ids';

				if ( ! empty( $settings[ $setting_key ] ) ) {
					$query_args['tax_query'][] = [
						'taxonomy' => $object->name,
						'field'    => 'term_id',
						'terms'    => $settings[ $setting_key ],
					];
				}
			}

			foreach ( $taxonomies as $object ) {
				$setting_key = $control_id . '_' . $object->name . '_exids';

				if ( ! empty( $settings[ $setting_key ] ) ) {
					$query_args['tax_query'][] = [
						'taxonomy' => $object->name,
						'field'    => 'term_id',
						'terms'    => $settings[ $setting_key ],
						'operator' => 'NOT IN',
					];
				}
			}
		}

		if ( ! empty( $settings[ $control_id . '_authors' ] ) ) {
			$query_args['author__in'] = $settings[ $control_id . '_authors' ];
		}

		$post__not_in = array();
		if ( ! empty( $settings['exclude'] ) ) {
			if ( in_array( 'current_post', $settings['exclude'] ) ) {
				if ( wp_doing_ajax() && ! empty( $_REQUEST['post_id'] ) ) {
					$post__not_in[] = $_REQUEST['post_id'];
				} elseif ( is_singular() ) {
					$post__not_in[] = get_queried_object_id();
				}
			}

			if ( in_array( 'manual_selection', $settings['exclude'] ) && ! empty( $settings['exclude_ids'] ) ) {
				$post__not_in = array_merge( $post__not_in, $settings['exclude_ids'] );
			}
		}

		if ( ! empty( $settings['avoid_duplicates'] ) && 'yes' === $settings['avoid_duplicates'] ) {
			$post__not_in = array_merge( $post__not_in, self::$displayed_ids );
		}

		$query_args['post__not_in'] = $post__not_in;

		$query = new \WP_Query( $query_args );// SQL_CALC_FOUND_ROWS is used.
		self::add_to_avoid_list( wp_list_pluck( $query->posts, 'ID' ) );

		return $query_args;
	}

	public static function add_to_avoid_list( $ids ) {
		self::$displayed_ids = array_merge( self::$displayed_ids, $ids );
	}

	public function exclude_ele_id( $query, $widget ) {
		self::add_to_avoid_list( wp_list_pluck( $query->posts, 'ID' ) );

		return $query;
	}

	public function get_name() {
		return 'query-control';
	}

	public function ajax_posts_filter_autocomplete( array $data ) {
		if ( empty( $data['filter_type'] ) || empty( $data['q'] ) ) {
			throw new \Exception( 'Bad Request' );
		}

		$results = array();

		switch ( $data['filter_type'] ) {
			case 'taxonomy':
				$query_params = array(
					'taxonomy'   => $data['object_type'],
					'search'     => $data['q'],
					'hide_empty' => false
				);

				$terms = get_terms( $query_params );

				global $wp_taxonomies;

				foreach ( $terms as $term ) {
					$term_name = $this->get_term_name_with_parents( $term );
					if ( ! empty( $data['include_type'] ) ) {
						$text = $wp_taxonomies[ $term->taxonomy ]->labels->singular_name . ': ' . $term_name;
					} else {
						$text = $term_name;
					}

					$results[] = array(
						'id'   => $term->term_id,
						'text' => $text
					);
				}

				break;

			case 'by_id':
			case 'post':
				$query_params = array(
					'post_type'      => $data['object_type'],
					's'              => $data['q'],
					'posts_per_page' => - 1
				);

				if ( 'attachment' === $query_params['post_type'] ) {
					$query_params['post_status'] = 'inherit';
				}

				$query = new \WP_Query( $query_params );

				foreach ( $query->posts as $post ) {
					$post_type_obj = get_post_type_object( $post->post_type );
					if ( ! empty( $data['include_type'] ) ) {
						$text = $post_type_obj->labels->singular_name . ': ' . $post->post_title;
					} else {
						$text = ( $post_type_obj->hierarchical ) ? $this->get_post_name_with_parents( $post ) : $post->post_title;
					}

					$results[] = array(
						'id'   => $post->ID,
						'text' => $text
					);
				}
				break;

			case 'author':
				$query_params = array(
					'capability'                 => 'authors',
					'has_published_posts' => true,
					'fields'              => array(
						'ID',
						'display_name'
					),
					'search'              => '*' . $data['q'] . '*',
					'search_columns'      => array(
						'user_login',
						'user_nicename'
					),
				);

				$user_query = new \WP_User_Query( $query_params );

				foreach ( $user_query->get_results() as $author ) {
					$results[] = [
						'id'   => $author->ID,
						'text' => $author->display_name,
					];
				}
				break;
			default:
				$results = array();
		}

		return array( 'results' => $results );
	}

	private function get_term_name_with_parents( \WP_Term $term, $max = 3 ) {
		if ( 0 === $term->parent ) {
			return $term->name;
		}
		$separator = is_rtl() ? ' < ' : ' > ';
		$test_term = $term;
		$names     = [];
		while ( $test_term->parent > 0 ) {
			$test_term = get_term_by( 'id', $test_term->parent, $test_term->taxonomy );
			if ( ! $test_term ) {
				break;
			}
			$names[] = $test_term->name;
		}

		$names = array_reverse( $names );
		if ( count( $names ) < ( $max ) ) {
			return implode( $separator, $names ) . $separator . $term->name;
		}

		$name_string = '';
		for ( $i = 0; $i < ( $max - 1 ); $i ++ ) {
			$name_string .= $names[ $i ] . $separator;
		}

		return $name_string . '...' . $separator . $term->name;
	}

	private function get_post_name_with_parents( $post, $max = 3 ) {
		if ( 0 === $post->post_parent ) {
			return $post->post_title;
		}
		$separator = is_rtl() ? ' < ' : ' > ';
		$test_post = $post;
		$names     = [];
		while ( $test_post->post_parent > 0 ) {
			$test_post = get_post( $test_post->post_parent );
			if ( ! $test_post ) {
				break;
			}
			$names[] = $test_post->post_title;
		}

		$names = array_reverse( $names );
		if ( count( $names ) < ( $max ) ) {
			return implode( $separator, $names ) . $separator . $post->post_title;
		}

		$name_string = '';
		for ( $i = 0; $i < ( $max - 1 ); $i ++ ) {
			$name_string .= $names[ $i ] . $separator;
		}

		return $name_string . '...' . $separator . $post->post_title;
	}

	public function ajax_posts_control_value_titles( $request ) {
		$ids = (array) $request['id'];

		$results = array();
		switch ( $request['filter_type'] ) {
			case 'taxonomy':
				$terms = get_terms( array(
					'include'    => $ids,
					'hide_empty' => false
				) );

				foreach ( $terms as $term ) {
					$results[ $term->term_id ] = $term->name;
				}
				break;

			case 'by_id':
			case 'post':
				$query = new \WP_Query( array(
					'post_type'      => 'any',
					'post__in'       => $ids,
					'posts_per_page' => - 1
				) );

				foreach ( $query->posts as $post ) {
					$results[ $post->ID ] = $post->post_title;
				}
				break;

			case 'authors':
			case 'author':
				$query_params = array(
					'capability'                 => 'authors',
					'has_published_posts' => true,
					'fields'              => array( 'ID', 'display_name' ),
					'include'             => $ids
				);

				$user_query = new \WP_User_Query( $query_params );

				foreach ( $user_query->get_results() as $author ) {
					$results[ $author->ID ] = $author->display_name;
				}


				break;
			default:
				$results = array();
		}

		return $results;
	}

	public function register_controls() {
		$controls_manager = Loader::elementor()->controls_manager;

		$controls_manager->add_group_control( Group_Control_Posts::get_type(), new Group_Control_Posts() );

		$controls_manager->register_control( self::QUERY_CONTROL_ID, new Query() );
	}

	public function fix_query_offset( &$query ) {
		if ( ! empty( $query->query_vars['offset_to_fix'] ) ) {
			if ( $query->is_paged ) {
				$query->query_vars['offset'] = $query->query_vars['offset_to_fix'] + ( ( $query->query_vars['paged'] - 1 ) * $query->query_vars['posts_per_page'] );
			} else {
				$query->query_vars['offset'] = $query->query_vars['offset_to_fix'];
			}
		}
	}

	public function fix_query_found_posts( $found_posts, $query ) {
		$offset_to_fix = $query->get( 'offset_to_fix' );

		if ( $offset_to_fix ) {
			$found_posts -= $offset_to_fix;
		}

		return $found_posts;
	}

	public function register_ajax_actions( $ajax_manager ) {
		$ajax_manager->register_ajax_action( 'query_control_value_titles', array(
			$this,
			'ajax_posts_control_value_titles'
		) );
		$ajax_manager->register_ajax_action( 'penci_panel_posts_control_filter_autocomplete', array(
			$this,
			'ajax_posts_filter_autocomplete'
		) );
	}

	public function localize_settings( $settings ) {
		$settings = array_replace_recursive( $settings, array(
			'i18n' => array( 'all' => __( 'All', 'soledad' ) )
		) );

		return $settings;
	}
}
