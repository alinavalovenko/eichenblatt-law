<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
	    <span><?php the_date(); ?></span>
        <a href="<?php the_permalink();?>"><?php the_title( '<h4>', '</h4>' ); ?></a>
    </header>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink();?>"> <span class="text-yellow-line"></span> <span class="yellow-text"><?php echo esc_html__('Read more'); ?></span> </a>
</article>