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
    <header class="site-header" <?php set_section_background(); ?>>
        <div class="elaw-header-overlay">
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
            <div class="container">
				<?php $big_banner = get_field( 'banner_section' ) ? get_field( 'banner_section' ) : false; ?>
				<?php if ( $big_banner ): $banner_section_data = get_field( 'banner_section_options' ); ?>
                    <div class="banner-section">
                        <h1><?php echo $banner_section_data['home_page_main_text'] ?></h1>
                        <div class="description"><?php echo $banner_section_data['introduction_text'] ?>
                                <a href="<?php echo $banner_section_data['action_button_link'] ?>" class="elaw-link"><span class="text-yellow-line"></span> <span class="yellow-text"><?php echo $banner_section_data['action_button_text'] ?></span></a>
                        </div>

                    </div>
				<?php endif; ?>
            </div>
        </div>
    </header>