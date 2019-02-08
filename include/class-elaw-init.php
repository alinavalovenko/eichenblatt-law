<?php
if ( ! class_exists( 'ELaw_Init' ) ) {
	class ELaw_Init {

		function __construct() {
			add_filter( 'acf/settings/path', array($this, 'elaw_acf_settings_path') );
			add_filter( 'acf/settings/dir', array($this,'elaw_acf_settings_dir' ));
			//add_filter('acf/settings/show_admin', '__return_false');
			include_once( ELAW_ASSETS_DIR . 'acf/acf.php' );
			add_action('init', array($this,'elaw_acf_init'));
		}

		function elaw_acf_settings_path( $path ) {

			// update path
			$path = ELAW_ASSETS_DIR .'acf/';

			// return
			return $path;

		}

		function elaw_acf_settings_dir( $dir ) {

			// update path
			$dir = ELAW_ASSETS_DIR .'acf/';

			// return
			return $dir;

		}

		function elaw_acf_init(){
				$option_page = acf_add_options_page(array(
					'page_title' 	=> __('Theme General Settings', 'elaw'),
					'menu_title' 	=> __('Theme Settings', 'elaw'),
					'menu_slug' 	=> 'theme-general-settings',
				));

		}
	}

	new ELaw_Init();
}