<?php
class ELaw_Init {

	function __construct() {
		add_filter('acf/settings/path', 'elaw_acf_settings_path');
		add_filter('acf/settings/dir', 'elaw_acf_settings_dir');
		add_filter('acf/settings/show_admin', '__return_false');
		include_once( get_stylesheet_directory() . '/assets/acf/acf.php' );


	}
	function elaw_acf_settings_path( $path ) {

		// update path
		$path = ELAW_DIR . '/assets/acf/';

		// return
		return $path;

	}
	function elaw_acf_settings_dir( $dir ) {

		// update path
		$dir = ELAW_DIR . '/assets/acf/';

		// return
		return $dir;

	}
}