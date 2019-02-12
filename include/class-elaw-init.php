<?php
if ( ! class_exists( 'ELaw_Init' ) ) {
	class ELaw_Init {

		function __construct() {
			//common thisngs
			add_theme_support( 'post-thumbnails' );
			set_post_thumbnail_size( 350, 350, false );
			add_theme_support( 'title-tag' );

			// 1. customize ACF path
			add_filter( 'acf/settings/path', array( $this, 'elaw_acf_settings_path' ) );

			// 2. customize ACF dir
			add_filter( 'acf/settings/dir', array( $this, 'elaw_acf_settings_dir' ) );

			// 3. Hide ACF field group menu item
			//add_filter('acf/settings/show_admin', '__return_false');

			// 4. Include ACF
			include_once( get_stylesheet_directory() . '/assets/acf/acf.php' );

			add_action( 'init', array( $this, 'elaw_acf_init' ) );

			//script and styles
			add_action( 'wp_enqueue_scripts', array( $this, 'elaw_enqueue_scripts' ) );

			add_action( 'init', array( $this, 'register_menus_area' ) );

			add_action( 'widgets_init', array( $this, 'register_widgets_area' ) );


		}

		function elaw_acf_init() {
			$option_page = acf_add_options_page( array(
				'page_title' => __( 'Theme General Settings', 'elaw' ),
				'menu_title' => __( 'Theme Settings', 'elaw' ),
				'menu_slug'  => 'theme-general-settings',
			) );

		}

		function elaw_acf_settings_path( $path ) {

			// update path
			$path = get_stylesheet_directory() . '/acf/';

			// return
			return $path;

		}

		function elaw_acf_settings_dir( $dir ) {

			// update path
			$dir = get_stylesheet_directory_uri() . '/assets/acf/';

			// return
			return $dir;

		}


		function elaw_enqueue_scripts() {
			wp_enqueue_style( 'elaw-styles', ELAW_ASSETS_URL . '/css/styles.min.css' );
			wp_enqueue_style( 'elaw-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' );
			wp_enqueue_style( 'elaw-icons', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css' );

			wp_enqueue_script( 'elaw-jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', '', '3.3.1', true );
			wp_localize_script( 'elaw-js-prop', 'elawInit', $this->elaw_global_js_properties() );
			wp_enqueue_script( 'elaw-libs', ELAW_ASSETS_URL . '/js/libs.min.js', array( 'elaw-jquery' ), '', true );
			wp_enqueue_script( 'elaw-scripts', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array( 'elaw-jquery' ), '', true );
			wp_enqueue_script( 'elaw-scripts', ELAW_ASSETS_URL . '/js/scripts.js', array( 'elaw-scripts' ), '', true );
		}

		function elaw_global_js_properties() {
			$properties = array(
				'ajaxurl' => admin_url( 'admin-ajax.php' ),
			);

			return $properties;
		}

		function register_menus_area() {
			register_nav_menus(
				array(
					'left-menu'   => esc_html__( 'Left Menu', 'elaw' ),
					'right-menu'  => esc_html__( 'Right Menu', 'elaw' ),
					'mobile-menu' => esc_html__( 'Mobile Menu', 'elaw' ),
				)
			);
		}

		function register_widgets_area() {
			register_sidebar( array(
				'name'          => esc_html__( 'Footer Widgets' ),
				'id'            => "elaw-footer-area",
				'description'   => '',
				'class'         => 'elaw-footer-widget',
				'before_widget' => '<div class="footer-widget col-xs-12 col-sm-3">',
				'after_widget'  => "</div>\n",
				'before_title'  => '<h4 class="elaw-footer-widget-title">',
				'after_title'   => "</h4>\n",
			) );
		}
	}

	new ELaw_Init();
}