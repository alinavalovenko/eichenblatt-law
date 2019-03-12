<div class="elaw-comments-wrap">
	<?php if ( have_comments() ) : ?>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'elaw' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'elaw' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'elaw' ) ); ?></div>
            </nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

        <div class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'       => 'div',
					'callback'    => 'elaw_comment',
					'avatar_size' => 0
				)
			);
			?>
        </div><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'elaw' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'elaw' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'elaw' ) ); ?></div>
            </nav><!-- #comment-nav-below -->
		<?php endif; // Check for comment navigation. ?>

		<?php if ( ! comments_open() ) : ?>
            <p class="no-comments"><?php _e( 'Comments are closed.', 'elaw' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php
	comment_form( array(
		'comment_field' => '<div class="comment-form-comment"><textarea id="comment" name="comment" aria-required="true"></textarea></div>',
        'title_reply'=>'',
	) ); ?>
</div>
