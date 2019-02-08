<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
class Elaw_Post_Type_Init {
	public function __construct() {
		add_action( 'init', array($this, 'elaw_register_post_types'));
	}

	public function elaw_register_post_types(){
		register_post_type('attorney', array(
			'label'  => null,
			'labels' => array(
				'name'               => 'Our Attorneys',
				'singular_name'      => 'Attorney',
				'add_new'            => 'Add Attorney',
				'add_new_item'       => 'Add new Attorney',
				'edit_item'          => 'Edit Attorney',
				'new_item'           => 'New Attorney',
				'view_item'          => 'View Attorney',
				'search_items'       => 'Find Attorney',
				'not_found'          => 'Attorneys didn\'t find',
				'not_found_in_trash' => 'There are no Attorneys in the trash',
				'menu_name'          => 'Our Attorneys',
			),
			'public'            => false,
			'has_archive'       => false,
			'show_ui'           => true,
			'show_in_menu'      => true,
			'show_in_nav_menus' => false,
			'menu_icon'         => 'dashicons-awards',
			'supports'          => array (
				'title',
				'editor',
				'custom-fields',
				'thumbnail',
			),
		) );
	}
} new Elaw_Post_Type_Init();