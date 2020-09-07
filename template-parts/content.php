<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyber
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section class="text-gray-700 body-font">
		<div class="flex flex-col">

			<div class="rounded-lg h-64 overflow-hidden">
				<?php cyber_post_thumbnail(); ?>


			</div>

			<div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start  -mt-16 mx-auto rounded p-2 bg-gray-100 opacity-75">
				<button class="bg-red-500 inline-flex py-3 px-5 rounded-lg items-center hover:bg-red-700 focus:outline-none">
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 512 512">
						<path d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z"></path>
					</svg>
					<span class="ml-4 flex items-start flex-col leading-none">
						<span class="text-sm text-black">Video on Youtube</span>

					</span>
				</button>

				<h1 class="flex-grow sm:pr-16 text-2xl font-medium text-black"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></h1>

				<!--slideshow or youtube link-->
			</div>

			<div class="flex flex-col sm:flex-row mt-4">
				<div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
					<!--project of this author related to this post-->
					<?php $catID = get_the_category(); ?>
					<div class="max-w-sm rounded-sm border border-gray-200 bg-white shadow-lg">
						<div class="text-right p-4">
							<span class="text-xs text-gray-600 tracking-widest uppercase">Project Detail</span>
						</div>

						<div class="flex items-center relative mb-8">
							<div class="border-t border-gray-200 z-20 w-full"></div>

							<div class="rounded-full bg-red-400 z-30 p-2 inline-block absolute mx-8">

								<img class="w-16 h-16 rounded-full" src="<?php echo get_field('cat_image', $catID[0]);  ?>" />
							</div>
						</div>
						<div class="px-8 pb-4">
							<h4 class="text-gray-500 text-sm font-light">InVision</h4>
							<h2 class="text-gray-800 text-xl font-bold"><?php the_category(', '); ?></h2>
							<div class="w-full h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
							<p class="text-gray-600 text-xs">
								<?php echo category_description($catID[0]);  ?>
								<!--company / project info fields in future -->
							</p>
							<a class="text-indigo-500 inline-flex items-center">View Project Profile
								<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
									<path d="M5 12h14M12 5l7 7-7 7"></path>
								</svg>
							</a>
						</div>
					</div>
				</div>
				<div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-300 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
					<?php echo the_title('<h1 class="text-gray-900 text-3xl title-font font-medium mb-1">', '</h1>'); ?>
					<?php cyber_posted_by();
						echo '<a href="' . esc_url(get_category_link($catID[0]->term_id)) . '"> || Project : ' . esc_html($catID[0]->name) . '</a>';
					?>

					<div class="flex mb-4">
						<span class="flex items-center">
							<svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
								<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
							</svg>
							<svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
								<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
							</svg>
							<svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
								<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
							</svg>
							<svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
								<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
							</svg>
							<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
								<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
							</svg>
							<span class="text-gray-600 ml-3">4 Reviews</span>
						</span>
						<span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
							<a class="text-gray-500">
								<svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
									<path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
								</svg>
							</a>
							<a class="ml-2 text-gray-500">
								<svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
									<path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
								</svg>
							</a>
							<a class="ml-2 text-gray-500">
								<svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
									<path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
								</svg>
							</a>
						</span>
					</div>
					<p class="font-bold">
						<?php
						$posttags = get_the_tags();
						$i = 0;
						if ($posttags) {
							foreach ($posttags as $tag) { ?>
								<span class="m-1 p-1 bg-gray-400"><a href="<?php echo get_tag_link($tag->term_id); ?>">#<?php echo $tag->name; ?></a>
								</span>
						<?php $i++;
							}
						} ?>
					</p>
					<!-- scubscribe form or email full report pdf-->
					<p class="leading-relaxed text-lg"><?php echo get_field('post_synopsis'); ?></p>
					<a class="text-indigo-500 inline-flex items-center">Get Full Story in your E-mail
						<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
							<path d="M5 12h14M12 5l7 7-7 7"></path>
						</svg>
					</a><br/>
					<?php echo do_shortcode("[kv_email_subscriptions]"); ?>
				</div>
			</div>

		</div>
		<div class="entry-content leading-relaxed text-lg mb-4">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'cyber'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'cyber'),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
	</section>
</article><!-- #post-<?php the_ID(); ?> -->