<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'featured-post' ) ); ?>>
    <header class="entry-header">
        <a href="<?php the_permalink(); ?>" class="post-img-link"><?php the_post_thumbnail( 'full' ); ?></a>
    </header>
    <time><?php the_date(); ?></time>
    <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title( '<h2>', '</h2>' ); ?></a>
	<?php the_content(); ?>
	<?php echo leave_comment_btn(); ?>
	<?php  comments_template(); ?>
</article>