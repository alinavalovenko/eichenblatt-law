<section id="primary" class="content-area container">
    <main id="main" class="site-main">
		<?php if ( have_posts() ):
			$featured_post = true;
			while ( have_posts() ):
				the_post();
				if ( $featured_post ) {
					get_template_part( 'template-parts/blog/featured' );
					$featured_post = false;
				} else {
					get_template_part( 'template-parts/blog/item' );
				}
			endwhile;
		endif; ?>
    </main><!-- .site-main -->
</section><!-- .content-area -->
