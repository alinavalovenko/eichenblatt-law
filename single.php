<?php get_header(); ?>
<div class="container">
    <div class="row page-content">
        <div class="col-xs-12 col-sm-3">
			<?php get_sidebar(); ?>
        </div>
        <main class="col-xs-12 col-sm-9">

			<?php while ( have_posts() ) :
				the_post();
				?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-content">
						<?php the_content(); ?>
                    </div>

                </article>

			<?php endwhile; ?>

        </main>
    </div>
    <div class="row">
        <div class="container blog-section">
            <h2>Blog</h2>
            <div class="row">
				<?php $blog_list = get_blog_items();
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
