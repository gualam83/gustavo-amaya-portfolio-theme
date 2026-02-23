<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gustavo-amaya
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'It looks like nothing was found at this location.', 'gustavo-amaya' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'Maybe try one of the links below or a search?', 'gustavo-amaya' ); ?></p>

				<div class="error-404-actions">
					<a href="/" class="btn-primary">Back to Home</a>
					<a href="/#portfolio" class="btn-secondary">View My Work</a>
				</div>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
