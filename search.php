<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package cyber
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if (have_posts()) : ?>
		<header class="page-header bg-white shadow-sm">
			<div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
				<h1 class="page-title text-center text-lg leading-6 font-semibold text-gray-900">
					<?php
					/* translators: %s: search query. */
					printf(esc_html__('Search Results for: %s', 'cyber'), '<span>' . get_search_query() . '</span>');
					?>
				</h1>
				<?php the_archive_description('<div class="archive-description text-center">', '</div>'); ?>
			</div>
		</header><!-- .page-header -->

		<section class="text-gray-700 body-font">
			<div class="container px-5 py-24 mx-auto">
				<div class="flex flex-wrap -mx-4 -my-8">
				<?php
				/* Start the Loop */
				while (have_posts()) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part('template-parts/content-category', 'search');

				endwhile;?>
				</div>
			</div>
		</section>
				<?php
				the_posts_navigation();

			else :

				get_template_part('template-parts/content', 'none');

			endif;
				?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
