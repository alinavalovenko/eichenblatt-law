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
    <div class="elaw-header" <?php the_header_bg_url(); ?>>
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
					<?php elaw_get_menu_list( 'left-menu', 'elaw-left-menu' ); ?>
                </div>
                <div class="col-xs-4">
                    <a href="<?php echo get_site_url(); ?>"><?php bloginfo( 'name' ); ?></a>
                </div>
                <div class="col-xs-4">
					<?php elaw_get_menu_list( 'right-menu', 'elaw-right-menu' ); ?>
                </div>
            </div>
        </div>
    </div>