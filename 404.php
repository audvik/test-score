<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cyber
 */

get_header();
?>

<style>
	.gradient {
		background-image: linear-gradient(135deg, #684ca0 35%, #1c4ca0 100%);
	}
</style>

<div class="gradient text-white min-h-screen flex items-center">
	<div class="container mx-auto p-4 flex flex-wrap items-center">
		<div class="w-full md:w-5/12 text-center p-4">
			<img src="<?php echo get_template_directory_uri(); ?>/img/not-found.svg"" alt=" Not Found" />
		</div>
		<div class="w-full md:w-7/12 text-center md:text-left p-4">
			<div class="text-6xl font-medium">404</div>
			<div class="text-xl md:text-3xl font-medium mb-4">
				Oops. This page has gone missing.
			</div>
			<div class="text-lg mb-8">
				You may have mistyped the address or the page may have moved.
			</div>
			<a href="<?php echo get_home_url(); ?>" class="border border-white rounded p-4">Go Home</a>
		</div>
	</div>
</div>

<?php
get_footer();
