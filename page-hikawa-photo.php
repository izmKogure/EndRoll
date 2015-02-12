<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package videosonic
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php echo do_shortcode( '[contact-form-7 id="17" title="氷川会館式辞メールフォーム"]' ); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
