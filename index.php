<?php get_header(); ?>
<div class="container">

    <main class="row">

		<?php while ( have_posts() ) :
			the_post();
			?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>

                <div class="entry-content">
					<?php the_content(); ?>
                </div>

            </article>

		<?php endwhile; ?>

    </main>
    <div class="row">
        Similar Items
    </div>
</div>


<?php get_footer(); ?>
