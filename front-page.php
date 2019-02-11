<?php
/***
 * Template Name: Front Page
 */
?>

<?php get_header( 'home' ); ?>

<?php if ( is_home() ):
	get_template_part('template-parts/content/blog');
else:
	get_template_part('template-parts/content/home');
endif; ?>
<?php get_footer(); ?>
