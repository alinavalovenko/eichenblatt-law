<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package sgo-2018
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="site-wrapper">
    <?php $blog_page_id = get_option( 'page_for_posts' );
    $image_url = get_the_post_thumbnail_url();
    if($blog_page_id && is_home()){
        $image_url = get_the_post_thumbnail_url($blog_page_id);
    }
    ?>
    <header class="page-header" <?php set_section_background($image_url); ?>>
        <div class="page-header-overlay">
            <div class="header-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 text-left">
							<?php elaw_get_menu_list( 'left-menu', 'elaw-left-menu' ); ?>
                        </div>
                        <div class="col-sm-4 text-center">
                            <a href="<?php echo get_site_url(); ?>" class="site-logo"><?php bloginfo( 'name' ); ?></a>
                        </div>
                        <div class="col-sm-4 text-right">
							<?php elaw_get_menu_list( 'right-menu', 'elaw-right-menu' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container page-title">
                <h1>
					<?php
					if ( is_home() ) {
						echo get_the_title( get_option( 'page_for_posts', true ) );
					} else {
						the_title();
					} ?>
                </h1>
            </div>
        </div>
    </header>

