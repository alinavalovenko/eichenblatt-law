<?php $about_us = get_field( 'about_us' ) ? get_field( 'about_us' ) : false; ?>
<?php $practice_areas = get_field( 'practice_areas' ) ? get_field( 'practice_areas' ) : false; ?>
<?php $our_attorneys = get_field( 'our_attorneys' ) ? get_field( 'our_attorneys' ) : false; ?>
<?php $experience = get_field( 'experience' ) ? get_field( 'experience' ) : false; ?>
<?php $blog_section = get_field( 'blog_section' ) ? get_field( 'blog_section' ) : false; ?>
<?php $contact_us = get_field( 'contact_us' ) ? get_field( 'contact_us' ) : false; ?>


<section id="primary" class="content-area container">
    <main id="main" class="site-main">
		<?php if ( $about_us ): $about_us_data = get_field( 'about_us_options' ); ?>
            <div class="container elaw-about-us">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 section-title">
						<?php echo $about_us_data['section_title']; ?>
                    </div>
                    <div class="col-xs-12 col-sm-8 about-us-description">
						<?php echo substr( strip_tags( $about_us_data['about_us_page_link']->post_content ), 0, 500 ); ?>
                        <a href="<?php echo get_the_permalink($about_us_data['about_us_page_link']->ID)?>"><?php echo $about_us_data['read_more_button_text']?></a>
                    </div>
                </div>
            </div>
		<?php endif; ?>

		<?php if ( $practice_areas ): $practice_areas_data = get_field( 'practice_areas_options' ); ?>
            about_us_options
		<?php endif; ?>

		<?php if ( $our_attorneys ): $our_attorneys_data = get_field( 'our_attorneys_options' ); ?>
            about_us_options
		<?php endif; ?>

		<?php if ( $experience ): $experience_data = get_field( 'experience_options' ); ?>
            about_us_options
		<?php endif; ?>

		<?php if ( $blog_section ): $blog_section_data = get_field( 'blog_option' ); ?>
            about_us_options
		<?php endif; ?>

		<?php if ( $contact_us ): $contact_us_data = get_field( 'contact_us_option' ); ?>
            about_us_options
		<?php endif; ?>
    </main><!-- .site-main -->
</section><!-- .content-area -->


