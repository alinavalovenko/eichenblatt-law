<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'full' ); ?></a>
    </header>
    <?php the_date();?>
	<?php the_title( '<h2>', '</h2>' ); ?>
    <?php the_content(); ?>
    <?php echo leave_comment_btn(); ?>
</article>