<?php
/*
Plugin Name: Penci Block
Plugin URI: http://pencidesign.com/
Description: Create Custom Block with Custom Page Builder.
Version: 1.0
Author: PenciDesign
Author URI: http://themeforest.net/user/pencidesign?ref=pencidesign
*/

// Exit if accessed directly
use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define
 */
define( 'PENCI_BLOCK_DIR', plugin_dir_path( __FILE__ ) );
define( 'PENCI_BLOCK_URL', plugin_dir_url( __FILE__ ) );

/**
 * Main class for Penci Block
 *
 * @author PenciDesign ( http://pencidesign.com/ )
 * @since 1.0
 */
if ( ! class_exists( 'Penci_Block' ) ):

	class Penci_Block {

		/**
		 * A reference to an instance of this class.
		 */
		private static $instance;


		/**
		 * Returns an instance of this class.
		 */
		public static function get_instance() {

			if ( null == self::$instance ) {
				self::$instance = new Penci_Block();
			}

			return self::$instance;

		}

		/**
		 * Initializes the plugin by setting filters and administration functions.
		 */
		private function __construct() {

			// load plugin text domain for translations
			add_action( 'plugins_loaded', array( $this, 'load_text_domain' ) );

			// Register Portfolio Post Type
			add_action( 'init', array( $this, 'register_portfolio_post_type' ) );

			// Register Portfolio Category
			add_action( 'init', array( $this, 'register_portfolio_category' ) );

			// Add Custom Columns to Editor
			add_filter( 'manage_edit-penci-block_columns', array( $this, 'edit_penci_blocks_columns' ) );
			add_action( 'manage_penci-block_posts_custom_column', array(
				$this,
				'manage_penci_blocks_columns'
			), 10, 2 );

			// Register Elementor Support
			add_action( 'init', array( $this, 'add_elementor_support' ) );

			// Register WPBakery Suppot
			add_action( 'init', array( $this, 'add_wpbakery_support' ) );

			// Register Content Block Shortcode
			add_shortcode( 'block_content', array( $this, 'get_block_content_shortcode' ) );
		}

		/**
		 * Transition ready
		 *
		 * @access public
		 * @return void
		 * @since  1.0
		 */
		public function load_text_domain() {
			load_plugin_textdomain( 'pencidesign', false, PENCI_BLOCK_DIR . '/languages/' );
		}

		/**
		 * Register Portfolio Post Type
		 */
		public function register_portfolio_post_type() {
			$labels = array(
				'name'               => _x( 'Block', 'post type general name', 'pencidesign' ),
				'singular_name'      => _x( 'Block', 'post type singular name', 'pencidesign' ),
				'add_new'            => __( 'Add New', 'pencidesign' ),
				'add_new_item'       => __( 'Add New Block', 'pencidesign' ),
				'edit_item'          => __( 'Edit Block', 'pencidesign' ),
				'new_item'           => __( 'New Block', 'pencidesign' ),
				'all_items'          => __( 'All Blocks', 'pencidesign' ),
				'view_item'          => __( 'View Block', 'pencidesign' ),
				'search_items'       => __( 'Search Block', 'pencidesign' ),
				'not_found'          => __( 'No block found', 'pencidesign' ),
				'not_found_in_trash' => __( 'No blocks found in Trash', 'pencidesign' ),
				'parent_item_colon'  => '',
				'menu_name'          => _x( 'Block', 'post type general name', 'pencidesign' ),
			);

			$args = array(
				'labels'             => $labels,
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => 'penci-block',
				'capability_type'    => 'page',
				'menu_icon'          => 'dashicons-schedule',
				'has_archive'        => false,
				'hierarchical'       => false,
				'menu_position'      => null,
				'supports'           => array( 'title', 'editor' )
			);

			register_post_type( 'penci-block', $args );
		}

		/**
		 * Register Portfolio Categories
		 */
		public function register_portfolio_category() {
			$labels = array(
				'name'              => _x( 'Block Categories', 'taxonomy general name', 'pencidesign' ),
				'singular_name'     => _x( 'Block Category', 'taxonomy singular name', 'pencidesign' ),
				'search_items'      => __( 'Search Block Categories', 'pencidesign' ),
				'all_items'         => __( 'All Block Categories', 'pencidesign' ),
				'parent_item'       => __( 'Parent Block Category', 'pencidesign' ),
				'parent_item_colon' => __( 'Parent Block Category:', 'pencidesign' ),
				'edit_item'         => __( 'Edit Block Category', 'pencidesign' ),
				'update_item'       => __( 'Update Block Category', 'pencidesign' ),
				'add_new_item'      => __( 'Add New Block Category', 'pencidesign' ),
				'new_item_name'     => __( 'New Block Category Name', 'pencidesign' ),
				'menu_name'         => __( 'Block Categories', 'pencidesign' )
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'penci_block_category' )
			);

			register_taxonomy( 'penci_block_category', array( 'penci-block' ), $args );
		}

		public function edit_penci_blocks_columns( $columns ) {
			unset( $columns['taxonomy-penci_block_category'] );

			$new_columns = array(
				'shortcode'        => esc_html__( 'Shortcode', 'pencidesign' ),
				'penci_categories' => esc_html__( 'Block Categories', 'pencidesign' ),
				'date'             => esc_html__( 'Date', 'pencidesign' ),
			);

			$columns = $columns + $new_columns;

			return $columns;
		}


		public function manage_penci_blocks_columns( $column, $post_id ) {
			switch ( $column ) {
				case 'shortcode':
					echo '<strong>[block_content id="' . $post_id . '"]</strong>';
					break;
				case 'penci_categories':
					$terms = wp_get_post_terms( $post_id, 'penci_block_category' );
					$post_type = get_post_type( $post_id );
					$keys = array_keys( $terms );
					$last_key = end( $keys );

					if ( ! $terms ) {
						echo '—';
					}

					?>
					<?php foreach ( $terms as $key => $term ) : ?>
					<?php
					$name = $term->name;

					if ( $key !== $last_key ) {
						$name .= ',';
					}

					?>

                    <a href="<?php echo esc_url( 'edit.php?post_type=' . $post_type . '&penci_block_category=' . $term->slug ); ?>">
						<?php echo esc_html( $name ); ?>
                    </a>
				<?php endforeach; ?>
					<?php
					break;
			}
		}

		public function add_elementor_support() {
			$cpt_support = get_option( 'elementor_cpt_support' );
			if ( ! $cpt_support ) {
				$cpt_support = [ 'page', 'post', 'penci-block' ];
				update_option( 'elementor_cpt_support', $cpt_support );
			} else if ( ! in_array( 'penci-block', $cpt_support ) ) {
				$cpt_support[] = 'penci-block';
				update_option( 'elementor_cpt_support', $cpt_support );
			}
		}

		public function add_wpbakery_support() {
			if ( function_exists( 'vc_set_default_editor_post_types' ) ) {
				vc_set_default_editor_post_types( array( 'page', 'post', 'penci-block' ) );
			}
		}

		public function elementor_get_content( $id ) {
			$inline_css = apply_filters( 'penci_elementor_content_inline_css', true );

			$content = Plugin::$instance->frontend->get_builder_content_for_display( $id, $inline_css );

			if ( $inline_css ) {
				wp_deregister_style( 'elementor-post-' . $id );
				wp_dequeue_style( 'elementor-post-' . $id );
			}

			return $content;
		}

		public function get_block_content( $id ) {
			$id      = apply_filters( 'wpml_object_id', $id, 'penci-block', true );
			$post    = get_post( $id );
			$content = '';
			if ( ! $post || $post->post_type != 'penci-block' ) {
				return false;
			}

			if ( did_action( 'elementor/loaded' ) && Plugin::$instance->documents->get( $id )->is_built_with_elementor() ) {
				$content .= $this->elementor_get_content( $id );
			} else {
				$content .= do_shortcode( $post->post_content );

				$shortcodes_custom_css = get_post_meta( $id, '_wpb_shortcodes_custom_css', true );

				$content .= '<style data-type="vc_shortcodes-custom-css">';
				if ( ! empty( $shortcodes_custom_css ) ) {
					$content .= $shortcodes_custom_css;
				}
				$content .= '</style>';
			}

			return $content;
		}

		public function get_block_content_shortcode( $atts, $content ) {
			extract( shortcode_atts( array(
				'id' => '',
			), $atts ) );

			if ( $id ) {
				return $this->get_block_content( $id );
			}
		}
	}

	add_action( 'plugins_loaded', array( 'Penci_Block', 'get_instance' ) );

endif; /* End check if class exists */
