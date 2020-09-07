<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyber
 */

get_header();
?>

<main id="primary" class="container">
	<div class="max-w-sm rounded overflow-hidden shadow-lg">
		<div class="px-6 py-4">
			<div class="font-bold text-xl mb-2">The Coldest Sunset</div>
			<p class="text-gray-700 text-base">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
			</p>
		</div>
		<div class="px-6 py-4">
			<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
			<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
			<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
		</div>
	</div>

	<?php
	if (have_posts()) :

		if (is_home() && !is_front_page()) :
	?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>
	<?php
		endif;

		/* Start the Loop */
		while (have_posts()) :
			the_post();

			/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
			get_template_part('template-parts/content', get_post_type());

		endwhile;

		the_posts_navigation();

	else :

		get_template_part('template-parts/content', 'none');

	endif;
	?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
