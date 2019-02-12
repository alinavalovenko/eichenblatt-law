<?php
function elaw_get_menu_list( $location = 'left-menu', $container_class = 'elaw-left-menu', $menu_class = '' ) {
	echo wp_nav_menu( array(
		'theme_location'  => $location,
		'menu'            => '',
		'container'       => 'nav',
		'container_class' => $container_class,
		'container_id'    => '',
		'menu_id'         => '',
		'menu_class'      => $menu_class,
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => '',
	) );
}

/***
 * Display link of big background welcome banner
 *
 * @param string $bg_url
 */
function set_section_background($bg_url = ELAW_DEFAULT_IMG_URL) {
	if(empty($bg_url)){
		$bg_url = ELAW_DEFAULT_IMG_URL;
	}
	if ( has_post_thumbnail() ) {
		$bg_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	}

	echo 'style="background-image:url(' . $bg_url . ')"';
}

/***
 * Display leave comment link on the blog index page
 */
function leave_comment_btn() {
	$comment_link = '#leave-comment-' . get_the_ID();

	return '<a href="' . $comment_link . '" class="leave-comment-link">' . esc_html__( 'Leave Comment' ) . '</a>';
}

/***
 * Get blog items list
 *
 * @param int $count
 * @param array $post_types
 *
 * @return array
 */
function get_blog_items( $count = 3, $post_types = [ 'post' ] ) {
	$list = [];
	$args = array(
		'post_type'   => $post_types,
		'numberposts' => $count,
		'post_status' => 'published',
		'orderby'     => 'date',
		'order'       => 'DESC',
	);

	$list = get_posts($args);

	return $list;
}