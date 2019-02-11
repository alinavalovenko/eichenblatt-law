<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <a href="<?php the_permalink();?>"><?php the_title( '<h2>', '</h2>' ); ?></a>
		<?php the_date(); ?>
    </header>
    <?php the_excerpt(); ?>
</article>