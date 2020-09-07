<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cyber
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="flex flex-wrap bg-gray-100">
		<div class="hidden p-8 w-1/2 lg:block lg:w-1/5">
			<?php get_template_part('template-parts/left-bar'); ?>
		</div>
		<div class="p-4 bg-white shadow-lg w-full lg:w-3/5">
			<?php
			while (have_posts()) :
				the_post();

				get_template_part('template-parts/content', get_post_type());
				if(is_user_logged_in()) :
				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;
				endif;
			endwhile; // End of the loop.
			?>
			<div class="hidden md:block bg-gray-200 rounded flex p-4 items-center">
				<span class="title-font font-medium">&copy; 2020, <a href="https://lokbidhi.com" target="_blank">Lokbidhi Cyberlab</a></span>
			</div>
		</div>
		<div class="px-2 w-full lg:w-1/5">
			<?php get_template_part('template-parts/right-bar'); ?>
		</div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
