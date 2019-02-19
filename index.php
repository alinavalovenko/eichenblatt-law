<?php
 global $post;
 get_header();?>
<div class="container">

    <main class="row">

		<?php
        $post = get_featured_blog_item();
        if($post) :
setup_postdata($post);			?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>

                <div class="entry-content">
					<?php the_content(); ?>
                </div>

                <div class="comment-form">
                    <?php comment_form();?>
                </div>
            </article>

		<?php endif; ?>

    </main>
    <div class="row">
        <div class="container blog-section">
            <h2>Blog</h2>
            <div class="row">
				<?php $blog_list = get_blog_items(3, 'post', 1);
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
