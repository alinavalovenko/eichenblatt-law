<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
	    <?php the_date(); ?>
        <a href="<?php the_permalink();?>"><?php the_title( '<h2>', '</h2>' ); ?></a>
    </header>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink();?>"> <?php echo esc_html__('Read more'); ?></a>
</article>