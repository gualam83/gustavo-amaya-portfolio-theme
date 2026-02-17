<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gustavo-amaya
 */

?>

<footer id="colophon" class="site-footer">
	<div class="ga-footer-container">

		<!-- Logo -->
		<div class="ga-footer-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-gustavo-amaya-developer-white.svg"
					 alt="<?php bloginfo('gustavo-amaya-developer'); ?>" />
			</a>
		</div>

		<!-- Social Links -->
		<div class="ga-footer-social">
			<a href="https://github.com/gualam83" target="_blank" aria-label="GitHub">
				<i class="fa-brands fa-github"></i>
			</a>
			<a href="https://linkedin.com/in/gustavo-amaya-bernal" target="_blank" aria-label="LinkedIn">
				<i class="fa-brands fa-linkedin"></i>
			</a>
		</div>

		<!-- Copyright -->
		<div class="ga-footer-copy">
			&copy; <?php echo date('Y'); ?> <?php bloginfo('gustavo-amaya-developer'); ?>
		</div>

	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
