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
function set_section_background( $bg_url = ELAW_DEFAULT_IMG_URL ) {
	if ( empty( $bg_url ) ) {
		if ( has_post_thumbnail() ) {
			$bg_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
		} else {
			$bg_url = ELAW_DEFAULT_IMG_URL;
		}
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
 * @param int $offset
 * @param null $exclude
 *
 * @return array
 */
function get_blog_items( $count = 3, $post_types = [ 'post' ], $exclude = null ) {
	$list = [];
	if ( ! $exclude ) {
		$exclude = get_the_ID();
	}
	$args = array(
		'post_type'    => $post_types,
		'numberposts'  => $count,
		'post_status'  => 'publish',
		'orderby'      => 'date',
		'order'        => 'DESC',
		'post__not_in' => array( $exclude ),
	);

	$list = get_posts( $args );

	return $list;
}

/***
 * Get blog items list
 *
 * @param int $count
 * @param array $post_types
 *
 * @return array
 */
function get_featured_blog_item( $count = 1, $post_types = [ 'post' ] ) {
	$list = [];
	$args = array(
		'post_type'   => $post_types,
		'numberposts' => $count,
		'post_status' => 'publish',
		'orderby'     => 'date',
		'order'       => 'DESC',
	);

	$list = get_posts( $args );

	return $list;
}

function get_featured_post() {
	global $post;
	$args = array(
		'post_type'   => 'post',
		'post_status' => 'publish',
		'numberposts' => '1',
		'orderby'     => 'date',
		'order'       => 'DESC',
		'meta_key'    => 'set_as_featured_post',
		'meta_value'  => '1'
	);

	$post = get_posts( $args )[0];
	if ( ! $post ) {

		$args = array(
			'post_type'   => 'post',
			'post_status' => 'publish',
			'numberposts' => '1',
			'orderby'     => 'date',
			'order'       => 'DESC',
		);
		$post = get_posts( $args )[0];
	}
	$featured = $post->ID;
	setup_postdata( $post );
	get_template_part( 'template-parts/blog/featured' );
	wp_reset_postdata();

	return $featured;
}

add_filter( 'comment_form_default_fields', 'remove_unnecessary_fields' );
function remove_unnecessary_fields( $fields ) {
	if ( isset( $fields['url'] ) ) {
		unset( $fields['url'] );
	}


	return $fields;
}

function elaw_comment( $comment, $args, $depth ) {
	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li';
		$add_below = 'div-comment';
	}

	$classes = ' ' . comment_class( empty( $args['has_children'] ) ? '' : 'parent', null, null, false );
	?>

    <<?php echo $tag, $classes; ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
	} ?>

    <div class="comment-author vcard">
		<?php
		if ( $args['avatar_size'] != 0 ) {
			echo get_avatar( $comment, $args['avatar_size'] );
		}
		printf(
			__( '<span class="fn">%s</span>' ),
			get_comment_author_link()
		);
		?>

        <span class="comment-meta commentmetadata">
            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">(
				<?php
				printf(
					__( '%1$s' ),
					get_comment_date()
				); ?>
                ) </a>
			<?php edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
        </span>
    </div>

	<?php if ( $comment->comment_approved == '0' ) { ?>
        <em class="comment-awaiting-moderation">
			<?php _e( 'Your comment is awaiting moderation.' ); ?>
        </em><br/>
	<?php } ?>

	<?php comment_text(); ?>

    <div class="reply">
		<?php
		comment_reply_link(
			array_merge(
				$args,
				array(
					'add_below' => $add_below,
					'depth'     => $depth,
					'max_depth' => $args['max_depth']
				)
			)
		); ?>
    </div>

	<?php if ( 'div' != $args['style'] ) { ?>
        </div>
	<?php }
}