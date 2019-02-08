<?php
if ( ! defined( 'ELAW_DIR' ) ) {
	define( 'ELAW_DIR', get_stylesheet_directory() );
}
if ( ! defined( 'ELAW_URL' ) ) {
	define( 'ELAW_URL', get_stylesheet_directory_uri() );
}

if ( ! defined( 'ELAW_INCLUDE_DIR' ) ) {
	define( 'ELAW_INCLUDE_DIR', ELAW_DIR . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR );
}

if ( ! defined( 'ELAW_ASSETS_DIR' ) ) {
	define( 'ELAW_ASSETS_DIR', ELAW_DIR . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR );
}

if ( ! defined( 'ELAW_DEFAULT_IMG_URL' ) ) {
	define( 'ELAW_DEFAULT_IMG_URL', ELAW_URL . '/assets/images/home/bg-banner.jpg' );
}



/***
 * Include classes
 */
include_once ELAW_INCLUDE_DIR  . 'class-elaw-init.php';
include_once ELAW_INCLUDE_DIR  . 'class-elaw-post-type-init.php';
include_once ELAW_INCLUDE_DIR  . 'acf-fields-init.php';
include_once ELAW_INCLUDE_DIR  . 'controller.php';
