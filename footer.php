<footer class="site-footer-wrap">
    <div class="container site-footer-wrap">
        <div class="row">
			<?php if ( is_active_sidebar( 'elaw-footer-area' ) ): ?>
				<?php dynamic_sidebar( 'elaw-footer-area' ) ?>
			<?php endif; ?>
        </div>
        <div class="footer-bar">
            <a href="<?php echo get_site_url(); ?>" class="site-logo"><?php bloginfo( 'name' ); ?></a>
        </div>
    </div>

    <div class="copyright text-center">
        &copy;<?php echo date( 'Y' ) ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
    </div>
</footer>
</div><!-- site-wrapper end -->
<?php wp_footer(); ?>
</body>
</html>