<?php $about_us = get_field( 'about_us' ) ? get_field( 'about_us' ) : false; ?>
<?php $practice_areas = get_field( 'practice_areas' ) ? get_field( 'practice_areas' ) : false; ?>
<?php $our_attorneys = get_field( 'our_attorneys' ) ? get_field( 'our_attorneys' ) : false; ?>
<?php $experience = get_field( 'experience' ) ? get_field( 'experience' ) : false; ?>
<?php $blog_section = get_field( 'blog_section' ) ? get_field( 'blog_section' ) : false; ?>
<?php $contact_us = get_field( 'contact_us' ) ? get_field( 'contact_us' ) : false; ?>
<?php global $post; ?>


<section id="primary" class="content-area">
    <main id="main" class="site-main">
		<?php if ( $about_us ): $about_us_data = get_field( 'about_us_options' ); ?>
            <div class="container about-us-section">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 section-title">
                        <h2><?php echo $about_us_data['section_title']; ?></h2>
                    </div>
                    <div class="col-xs-12 col-sm-8 about-us-description">
						<?php echo substr( strip_tags( $about_us_data['about_us_page_link']->post_content ), 0, 500 ); ?>
                        <a href="<?php echo get_the_permalink( $about_us_data['about_us_page_link']->ID ) ?>"><?php echo $about_us_data['read_more_button_text'] ?></a>
                    </div>
                </div>
            </div>
		<?php endif; ?>

		<?php if ( $practice_areas ):
			$practice_areas_data = get_field( 'practice_areas_options' ); ?>
            <div class="container-fluid practice-section">
                <div class="container">
                    <div class="row">
                        <h2><?php echo $practice_areas_data['section_title']; ?></h2>
                    </div>
					<?php if ( ! empty( $practice_areas_data['practice_areas_items'] ) ): ?>
                        <div class="row">
							<?php foreach ( $practice_areas_data['practice_areas_items'] as $item ): ?>
                                <div class="col-xs-12 col-sm-3">
                                    <img src="<?php echo $item['item_icon']; ?>"
                                         alt="<?php echo $item['item_title']; ?>">
                                    <h3><?php echo $item['item_title']; ?></h3>
                                    <p><?php echo $item['item_description']; ?></p>
                                </div>

							<?php endforeach; ?>
                        </div>
					<?php endif; ?>
                </div>
            </div>
		<?php endif; ?>

		<?php if ( $our_attorneys ): $our_attorneys_data = get_field( 'our_attorneys_options' ); ?>
            <div class="container attorneys-section">
                <div class="row">
                    <div class="col-xs-12 col-sm-3"><h2><?php echo $our_attorneys_data['section_title'] ?></h2></div>
                    <div class="col-xs-12 col-sm-6 description"><?php echo $our_attorneys_data['section_description']; ?></div>
                    <div class="col-xs-12 col-sm-3">
                        <a href="<?php echo $our_attorneys_data['join_us_link']; ?>"><?php echo $our_attorneys_data['join_us_button_text'] ?></a>
                    </div>
                </div>
				<?php if ( ! empty( $our_attorneys_data['our_attorneys'] ) ): ?>
                    <div class="row our-attorneys">
						<?php foreach ( $our_attorneys_data['our_attorneys'] as $item ): ?>
                            <div class="col-xs-12 col-sm-4">
                                <h4><?php echo $item->post_title; ?></h4>
                                <div class="position"><?php the_field( 'position', $item->ID ); ?></div>
                                <div class="description"><?php echo $item->post_content; ?></div>
                                <div class="social-links">
									<?php $social_link = get_field( 'social_media_links', $item->ID ); ?>
                                    <a href="<?php echo $social_link['facebook'] ?>"><i
                                                class="fab fa-facebook-f"></i></a>
                                    <a href="<?php echo $social_link['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                                    <a href="<?php echo $social_link['google-plus'] ?>"><i
                                                class="fab fa-google-plus-g"></i></a>
                                </div>
                            </div>
						<?php endforeach; ?>
                        <a href="<?php echo $our_attorneys_data['attorneys_page']; ?>"><?php echo $our_attorneys_data['view_more_button_text']; ?></a>
                    </div>
				<?php endif; ?>
            </div>
		<?php endif; ?>

		<?php if ( $experience ): $experience_data = get_field( 'experience_options' ); ?>
            <div class="experience-section container-fluid text-center">
                <h2><?php echo $experience_data['section_title'] ?></h2>
                <div class="description">
					<?php echo $experience_data['title_description'] ?>
                </div>
                <a href="<?php echo $experience_data['contact_us_link']; ?>">
					<?php echo $experience_data['contact_us_button_text']; ?>
                </a>
            </div>
		<?php endif; ?>

		<?php if ( $blog_section ): $blog_section_data = get_field( 'blog_option' ); ?>
            <div class="container blog-section">
                <h2>Blog</h2>
                <div class="row">
					<?php $blog_list = get_blog_items();
					if ( ! empty( $blog_list ) ):
						foreach ( $blog_list as $post ):
							setup_postdata( $post ); ?>
                            <div class="col-xs-12 col-sm-4">
								<?php get_template_part( 'template-parts/blog/item' ); ?>
                            </div>
							<?php wp_reset_postdata(); ?>
						<?php endforeach; ?>
					<?php endif; ?>
                </div>
            </div>
		<?php endif; ?>

		<?php if ( $contact_us ):
			$contact_us_data = get_field( 'contact_us_option' );
			$contact_us_bg = get_field( 'background_image_for_section', 'option' );
			$contact_form_code = get_field( 'contact_form_shortcode', 'option' );
			?>
            <div id="content-us"
                 class="container-fluid contact-us-section" <?php set_section_background( $contact_us_bg ); ?>>
                <div class="container">
                    <h3><?php echo $contact_us_data['section_title']; ?></h3>
                    <div class="description">
						<?php echo $contact_us_data['section_description']; ?>
                    </div>
                    <div class="elaw-contact-form">
						<?php do_shortcode( $contact_form_code ); ?>
                    </div>
                </div>
            </div>
		<?php endif; ?>
    </main><!-- .site-main -->
</section><!-- .content-area -->


