<?php
/**
 * Product filters map.
 */

namespace PenciSoledadElementor\Modules\PenciProductFilter\Widgets;

use Elementor\Controls_Manager;
use Elementor\Repeater;
use Penci_Custom_Walker_Category;
use PenciSoledadElementor\Base\Base_Widget;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

/**
 * Elementor widget that inserts an embeddable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class PenciProductFilter extends Base_Widget {
	/**
	 * Get widget name.
	 *
	 * @return string Widget name.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_name() {
		return 'penci_product_filters';
	}

	/**
	 * Get widget title.
	 *
	 * @return string Widget title.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_title() {
		return esc_html__( 'Penci Product filters', 'soledad' );
	}

	/**
	 * Get widget icon.
	 *
	 * @return string Widget icon.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_icon() {
		return 'eicon-filter';
	}

	/**
	 * Get widget categories.
	 *
	 * @return array Widget categories.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_categories() {
		return [ 'penci-elements' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
		/**
		 * Content tab.
		 */

		/**
		 * General settings.
		 */
		$this->start_controls_section(
			'general_content_section',
			[
				'label' => esc_html__( 'General', 'soledad' ),
			]
		);

		$repeater = new Repeater();

		$repeater->add_control(
			'filter_type',
			[
				'label'   => esc_html__( 'Filter type', 'soledad' ),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'categories' => esc_html__( 'Categories', 'soledad' ),
					'attributes' => esc_html__( 'Attributes', 'soledad' ),
					'stock'      => esc_html__( 'Stock status', 'soledad' ),
					'price'      => esc_html__( 'Price', 'soledad' ),
					'orderby'    => esc_html__( 'Order by', 'soledad' ),
				],
				'default' => 'categories',
			]
		);

		/**
		 * Categories settings.
		 */
		$repeater->add_control(
			'categories_title',
			[
				'label'     => esc_html__( 'Title', 'soledad' ),
				'type'      => Controls_Manager::TEXT,
				'default'   => 'Categories',
				'condition' => [
					'filter_type' => 'categories',
				],
			]
		);

		$repeater->add_control(
			'order_by',
			[
				'label'     => esc_html__( 'Order by', 'soledad' ),
				'type'      => Controls_Manager::SELECT,
				'default'   => 'name',
				'options'   => array(
					'name'  => esc_html__( 'Name', 'soledad' ),
					'id'    => esc_html__( 'ID', 'soledad' ),
					'slug'  => esc_html__( 'Slug', 'soledad' ),
					'count' => esc_html__( 'Count', 'soledad' ),
					'order' => esc_html__( 'Category order', 'soledad' ),
				),
				'condition' => [
					'filter_type' => 'categories',
				],
			]
		);

		$repeater->add_control(
			'hierarchical',
			[
				'label'        => esc_html__( 'Show hierarchy', 'soledad' ),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => '0',
				'label_on'     => esc_html__( 'Yes', 'soledad' ),
				'label_off'    => esc_html__( 'No', 'soledad' ),
				'return_value' => '1',
				'condition'    => [
					'filter_type' => 'categories',
				],
			]
		);

		$repeater->add_control(
			'hide_empty',
			[
				'label'        => esc_html__( 'Hide empty categories', 'soledad' ),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => '0',
				'label_on'     => esc_html__( 'Yes', 'soledad' ),
				'label_off'    => esc_html__( 'No', 'soledad' ),
				'return_value' => '1',
				'condition'    => [
					'filter_type' => 'categories',
				],
			]
		);

		$repeater->add_control(
			'show_categories_ancestors',
			[
				'label'        => esc_html__( 'Show current category ancestors', 'soledad' ),
				'description'  => esc_html__( 'If you visit category Man, for example, only man\'s subcategories will be shown in the page title like T-shirts, Coats, Shoes etc.', 'soledad' ),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => '0',
				'label_on'     => esc_html__( 'Yes', 'soledad' ),
				'label_off'    => esc_html__( 'No', 'soledad' ),
				'return_value' => '1',
				'condition'    => [
					'filter_type' => 'categories',
				],
			]
		);

		/**
		 * Attributes settings.
		 */
		$repeater->add_control(
			'attributes_title',
			[
				'label'     => esc_html__( 'Title', 'soledad' ),
				'type'      => Controls_Manager::TEXT,
				'default'   => 'Filter by',
				'condition' => [
					'filter_type' => 'attributes',
				],
			]
		);

		$repeater->add_control(
			'attribute',
			[
				'label'     => esc_html__( 'Attribute', 'soledad' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => $this->get_attributes(),
				'default'   => '',
				'condition' => [
					'filter_type' => 'attributes',
				],
			]
		);

		$repeater->add_control(
			'categories',
			[
				'label'       => esc_html__( 'Show in categories', 'soledad' ),
				'description' => esc_html__( 'Choose on which categories pages you want to display this filter. Or leave empty to show on all pages.', 'soledad' ),
				'type'        => 'penci_el_autocomplete',
				'search'      => 'penci_get_taxonomies_by_query',
				'render'      => 'penci_get_taxonomies_title_by_id',
				'taxonomy'    => [ 'product_cat' ],
				'multiple'    => true,
				'label_block' => true,
				'condition'   => [
					'filter_type' => 'attributes',
				],
			]
		);

		$repeater->add_control(
			'query_type',
			[
				'label'     => esc_html__( 'Query type', 'soledad' ),
				'type'      => Controls_Manager::SELECT,
				'default'   => 'and',
				'options'   => array(
					'or'  => esc_html__( 'OR', 'soledad' ),
					'and' => esc_html__( 'AND', 'soledad' ),
				),
				'condition' => [
					'filter_type' => 'attributes',
				],
			]
		);

		$repeater->add_control(
			'size',
			[
				'label'     => esc_html__( 'Swatches size', 'soledad' ),
				'type'      => Controls_Manager::SELECT,
				'default'   => 'normal',
				'options'   => array(
					'small'  => esc_html__( 'Small (15px)', 'soledad' ),
					'normal' => esc_html__( 'Normal (25px)', 'soledad' ),
					'large'  => esc_html__( 'Large (35px)', 'soledad' ),
				),
				'condition' => [
					'filter_type' => 'attributes',
				],
			]
		);

		$repeater->add_control(
			'labels',
			[
				'label'        => esc_html__( 'Show labels', 'soledad' ),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => '1',
				'label_on'     => esc_html__( 'Yes', 'soledad' ),
				'label_off'    => esc_html__( 'No', 'soledad' ),
				'return_value' => '1',
				'condition'    => [
					'filter_type' => 'attributes',
				],
			]
		);

		/**
		 * Stock settings.
		 */
		$repeater->add_control(
			'stock_title',
			[
				'label'     => esc_html__( 'Title', 'soledad' ),
				'type'      => Controls_Manager::TEXT,
				'default'   => 'Stock status',
				'condition' => [
					'filter_type' => 'stock',
				],
			]
		);

		$repeater->add_control(
			'onsale',
			[
				'label'        => esc_html__( 'On Sale filter', 'soledad' ),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => '1',
				'label_on'     => esc_html__( 'Yes', 'soledad' ),
				'label_off'    => esc_html__( 'No', 'soledad' ),
				'return_value' => '1',
				'condition'    => [
					'filter_type' => 'stock',
				],
			]
		);

		$repeater->add_control(
			'instock',
			[
				'label'        => esc_html__( 'In Stock filter', 'soledad' ),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => '1',
				'label_on'     => esc_html__( 'Yes', 'soledad' ),
				'label_off'    => esc_html__( 'No', 'soledad' ),
				'return_value' => '1',
				'condition'    => [
					'filter_type' => 'stock',
				],
			]
		);

		/**
		 * Price settings.
		 */
		$repeater->add_control(
			'price_title',
			[
				'label'     => esc_html__( 'Title', 'soledad' ),
				'type'      => Controls_Manager::TEXT,
				'default'   => 'Filter by price',
				'condition' => [
					'filter_type' => 'price',
				],
			]
		);

		/**
		 * Repeater settings.
		 */
		$this->add_control(
			'items',
			[
				'type'        => Controls_Manager::REPEATER,
				'title_field' => '{{{ filter_type }}}',
				'fields'      => $repeater->get_controls(),
				'default'     => [
					[
						'filter_type' => 'categories',
					],
					[
						'filter_type' => 'attributes',
					],
					[
						'filter_type' => 'stock',
					],
					[
						'filter_type' => 'price',
					],
				],
			]
		);

		$this->end_controls_section();

		/**
		 * Title settings.
		 */

		$this->register_block_title_section_controls();

		/**
		 * Style tab.
		 */

		/**
		 * General settings.
		 */
		$this->start_controls_section(
			'general_style_section',
			[
				'label' => esc_html__( 'General', 'soledad' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'penci_color_scheme',
			[
				'label'   => esc_html__( 'Color Scheme', 'soledad' ),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					''      => esc_html__( 'Inherit', 'soledad' ),
					'light' => esc_html__( 'Light', 'soledad' ),
					'dark'  => esc_html__( 'Dark', 'soledad' ),
				],
				'default' => '',
			]
		);

		$this->end_controls_section();

		$this->register_block_title_style_section_controls();
	}

	/**
	 * Get product attributes.
	 *
	 * @return array Widget categories.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_attributes() {
		$output = [
			'' => esc_html__( 'Select', 'soledad' ),
		];

		$taxonomies = wc_get_attribute_taxonomies();

		if ( $taxonomies ) {
			foreach ( $taxonomies as $tax ) {
				$output[ $tax->attribute_name ] = $tax->attribute_name;
			}
		}

		return $output;
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		global $wp;

		$default_settings = [
			'penci_color_scheme' => 'dark',
			'items'              => array(),
		];

		$settings = wp_parse_args( $this->get_settings_for_display(), $default_settings );

		$form_action = wc_get_page_permalink( 'shop' );

		if ( is_shop() ) {
			if ( '' === get_option( 'permalink_structure' ) ) {
				$form_action = remove_query_arg( array(
					'page',
					'paged',
					'product-page'
				), add_query_arg( $wp->query_string, '', home_url( $wp->request ) ) );
			} else {
				$form_action = preg_replace( '%\/page/[0-9]+%', '', home_url( trailingslashit( $wp->request ) ) );
			}
		}

		$this->add_render_attribute(
			[
				'wrapper' => [
					'class'  => [
						'woocommerce',
						'penci-product-filters',
					],
					'action' => [
						$form_action,
					],
					'method' => [
						'GET',
					],
				],
			]
		);

		if ( penci_is_shop_archive() ) {
			$this->add_render_attribute( 'wrapper', 'class', 'with-ajax' );
		}

		?>
        <form <?php echo $this->get_render_attribute_string( 'wrapper' ); ?>>
			<?php foreach ( $settings['items'] as $index => $item ) : ?>
				<?php if ( 'categories' === $item['filter_type'] ) : ?>
					<?php $this->categories_filter_template( $item ); ?>
				<?php elseif ( 'attributes' === $item['filter_type'] ) : ?>
					<?php $this->attributes_filter_template( $item ); ?>
				<?php elseif ( 'stock' === $item['filter_type'] ) : ?>
					<?php $this->stock_filter_template( $item ); ?>
				<?php elseif ( 'price' === $item['filter_type'] ) : ?>
					<?php $this->price_filter_template( $item ); ?>
				<?php elseif ( 'orderby' === $item['filter_type'] ) : ?>
					<?php $this->orderby_filter_template(); ?>
				<?php endif; ?>
			<?php endforeach; ?>

            <div class="penci-pf-btn">
                <button class="button" type="submit">
					<?php esc_html_e( 'Filter', 'soledad' ); ?>
                </button>
            </div>
        </form>
		<?php
	}

	public function categories_filter_template( $settings ) {
		global $wp_query;

		$default_settings = [
			'categories_title'          => esc_html__( 'Categories', 'soledad' ),
			'hierarchical'              => 1,
			'order_by'                  => 'name',
			'hide_empty'                => '',
			'show_categories_ancestors' => '',
		];

		$settings = wp_parse_args( $settings, $default_settings );

		$list_args = [
			'hierarchical'       => $settings['hierarchical'],
			'taxonomy'           => 'product_cat',
			'hide_empty'         => $settings['hide_empty'],
			'title_li'           => false,
			'walker'             => new Penci_Custom_Walker_Category(),
			'use_desc_for_title' => false,
			'orderby'            => $settings['order_by'],
			'echo'               => false,
		];

		if ( 'order' === $settings['order_by'] ) {
			$list_args['orderby']  = 'meta_value_num';
			$list_args['meta_key'] = 'order';
		}

		$cat_ancestors = [];

		if ( is_tax( 'product_cat' ) ) {
			$current_cat   = $wp_query->queried_object;
			$cat_ancestors = get_ancestors( $current_cat->term_id, 'product_cat' );
		}

		if ( isset( $current_cat ) ) {
			$list_args['current_category'] = $current_cat->term_id;
		} else {
			$list_args['current_category'] = '';
		}
		$list_args['current_category_ancestors'] = $cat_ancestors;

		if ( $settings['show_categories_ancestors'] && isset( $current_cat ) ) {
			$is_cat_has_children = get_term_children( $current_cat->term_id, 'product_cat' );
			if ( $is_cat_has_children ) {
				$list_args['child_of'] = $current_cat->term_id;
			} elseif ( $current_cat->parent != 0 ) {
				$list_args['child_of'] = $current_cat->parent;
			}
			$list_args['depth'] = 1;
		}

		?>
        <div class="penci-pf-checkboxes penci-pf-categories">
            <div class="penci-pf-title">
				<span class="title-text">
					<?php echo esc_html( $settings['categories_title'] ); ?>
				</span>

                <ul class="penci-pf-results"></ul>
            </div>

            <div class="penci-pf-dropdown penci-scroll">
                <ul class="penci-scroll-content">
					<?php if ( $settings['show_categories_ancestors'] && isset( $current_cat ) && isset( $is_cat_has_children ) && $is_cat_has_children ) : ?>
                        <li style="display:none;"
                            class="pf-active cat-item cat-item-<?php echo $current_cat->term_id; ?>">
                            <a class="pf-value"
                               href="<?php echo esc_url( get_category_link( $current_cat->term_id ) ); ?>"
                               data-val="<?php echo esc_attr( $current_cat->slug ); ?>"
                               data-title="<?php echo esc_attr( $current_cat->name ); ?>">
								<?php echo esc_html( $current_cat->name ); ?>
                            </a>
                        </li>
					<?php endif; ?>

					<?php echo wp_list_categories( $list_args ); ?>
                </ul>
            </div>
        </div>
		<?php
	}

	public function attributes_filter_template( $settings ) {
		$default_settings = [
			'attributes_title' => esc_html__( 'Filter by', 'soledad' ),
			'attribute'        => '',
			'categories'       => '',
			'query_type'       => 'and',
			'size'             => 'normal',
			'labels'           => 1,
		];

		$settings = wp_parse_args( $settings, $default_settings );

		the_widget(
			'Penci_Product_Filter',
			array(
				'template'     => 'filter-element',
				'attribute'    => $settings['attribute'],
				'query_type'   => $settings['query_type'],
				'size'         => $settings['size'],
				'labels'       => $settings['labels'],
				'filter-title' => $settings['attributes_title'],
				'categories'   => $settings['categories'] ? $settings['categories'] : [],
			),
			array(
				'before_widget' => '',
				'after_widget'  => '',
			)
		);
	}

	public function stock_filter_template( $settings ) {
		$default_settings = [
			'stock_title' => esc_html__( 'Stock status', 'soledad' ),
			'instock'     => 1,
			'onsale'      => 1,
		];

		$settings = wp_parse_args( $settings, $default_settings );

		?>
        <div class="penci-pf-checkboxes penci-pf-stock multi_select">
            <input type="hidden" class="result-input" name="stock_status">

            <div class="penci-pf-title">
				<span class="title-text">
					<?php echo esc_html( $settings['stock_title'] ); ?>
				</span>

                <ul class="penci-pf-results"></ul>
            </div>

            <div class="penci-pf-dropdown penci-scroll">
                <ul class="penci-scroll-content">
					<?php if ( $settings['onsale'] ) : ?>
                        <li>
							<span class="pf-value" data-val="onsale"
                                  data-title="<?php esc_html_e( 'On sale', 'soledad' ); ?>">
								<?php esc_html_e( 'On sale', 'soledad' ); ?>
							</span>
                        </li>
					<?php endif; ?>

					<?php if ( $settings['instock'] ) : ?>
                        <li>
							<span class="pf-value" data-val="instock"
                                  data-title="<?php esc_html_e( 'In stock', 'soledad' ); ?>">
								<?php esc_html_e( 'In stock', 'soledad' ); ?>
							</span>
                        </li>
					<?php endif; ?>
                </ul>
            </div>
        </div>
		<?php
	}

	public function price_filter_template( $settings ) {
		$default_settings = [
			'price_title' => esc_html__( 'Filter by price', 'soledad' ),
		];

		$settings = wp_parse_args( $settings, $default_settings );

		wp_localize_script(
			'penci-woocommerce',
			'woocommerce_price_slider_params',
			[
				'currency_format_num_decimals' => 0,
				'currency_format_symbol'       => get_woocommerce_currency_symbol(),
				'currency_format_decimal_sep'  => esc_attr( wc_get_price_decimal_separator() ),
				'currency_format_thousand_sep' => esc_attr( wc_get_price_thousand_separator() ),
				'currency_format'              => esc_attr( str_replace( [ '%1$s', '%2$s' ], [
					'%s',
					'%v'
				], get_woocommerce_price_format() ) ),
			]
		);
		wp_enqueue_script( 'jquery-ui-slider' );
		wp_enqueue_script( 'wc-jquery-ui-touchpunch' );
		wp_enqueue_script( 'accounting' );
		wp_enqueue_script( 'wc-price-slider' );

		$prices = penci_get_filtered_price_new();

		$min = apply_filters( 'woocommerce_price_filter_widget_min_amount', floor( $prices->min_price ) );
		$max = apply_filters( 'woocommerce_price_filter_widget_max_amount', ceil( $prices->max_price ) );

		if ( $min === $max ) {
			return;
		}

		if ( ( is_shop() || is_product_taxonomy() ) && ! wc()->query->get_main_query()->post_count ) {
			return;
		}

		$min_price = isset( $_GET['min_price'] ) ? wc_clean( wp_unslash( $_GET['min_price'] ) ) : $min;
		$max_price = isset( $_GET['max_price'] ) ? wc_clean( wp_unslash( $_GET['max_price'] ) ) : $max;

		?>
        <div class="penci-pf-checkboxes penci-pf-price-range multi_select widget_price_filter">
            <div class="penci-pf-title">
				<span class="title-text">
					<?php echo esc_html( $settings['price_title'] ); ?>
				</span>

                <ul class="penci-pf-results"></ul>
            </div>

            <div class="penci-pf-dropdown">
                <div class="price_slider_wrapper">
                    <div class="price_slider_widget" style="display:none;"></div>

                    <div class="filter_price_slider_amount">
                        <input type="hidden" class="min_price" name="min_price"
                               value="<?php echo esc_attr( $min_price ); ?>" data-min="<?php echo esc_attr( $min ); ?>">
                        <input type="hidden" class="max_price" name="max_price"
                               value="<?php echo esc_attr( $max_price ); ?>" data-max="<?php echo esc_attr( $max ); ?>">

                        <div class="price_label" style="display:none;">
                            <span class="from"></span>
                            <span class="to"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php
	}

	public function orderby_filter_template() {
		$options = array(
			'menu_order' => esc_html__( 'Default sorting', 'woocommerce' ),
			'popularity' => esc_html__( 'Sort by popularity', 'woocommerce' ),
			'rating'     => esc_html__( 'Sort by average rating', 'woocommerce' ),
			'date'       => esc_html__( 'Sort by latest', 'woocommerce' ),
			'price'      => esc_html__( 'Sort by price: low to high', 'woocommerce' ),
			'price-desc' => esc_html__( 'Sort by price: high to low', 'woocommerce' ),
		);

		?>
        <div class="penci-pf-checkboxes penci-pf-sortby">
            <input type="hidden" class="result-input" name="orderby">

            <div class="penci-pf-title">
				<span class="title-text">
					<?php echo esc_html__( 'Sort by', 'soledad' ); ?>
				</span>

                <ul class="penci-pf-results"></ul>
            </div>

            <div class="penci-pf-dropdown penci-scroll">
                <ul class="penci-scroll-content">
					<?php foreach ( $options as $key => $value ) : ?>
                        <li>
							<span class="pf-value" data-val="<?php echo esc_attr( $key ); ?>"
                                  data-title="<?php echo esc_attr( $value ); ?>">
								<?php echo esc_html( $value ); ?>
							</span>
                        </li>
					<?php endforeach; ?>
                </ul>
            </div>
        </div>
		<?php
	}
}
