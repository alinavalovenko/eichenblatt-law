<?php
global $post;
get_header(); ?>
<div class="container">

    <main class="row">
		<?php $exclude = get_featured_post(); ?>
    </main>
    <div class="row">
        <div class="container blog-section">
            <h3>Others Themes</h3>
            <div class="row">
				<?php $blog_list = get_blog_items( 3, 'post', $exclude);
				if ( ! empty( $blog_list ) ):
					foreach ( $blog_list as $post ):
						setup_postdata( $post ); ?>
                        <div class="col-xs-12 col-sm-4">
							<?php get_template_part( 'template-parts/blog/item' ); ?>
                        </div>
						<?php wp_reset_postdata(); ?>
					<?php endforeach; ?>
				<?php endif; ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
