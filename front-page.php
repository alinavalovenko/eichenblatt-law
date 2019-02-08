<?php
/***
 * Template Name: Front Page
 */
?>

<?php get_header('home'); ?>

<?php if(!empty(get_field('banner_section', 'option'))):?>
<? echo 'Home banner section'; ?>
<?php endif; ?>

<?php get_footer(); ?>
