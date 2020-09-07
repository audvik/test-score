<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyber
 */

?>

<header class="page-header bg-white shadow-sm">
	<div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
		<h1 class="page-title text-center text-lg leading-6 font-semibold text-gray-900">
			<?php esc_html_e('Nothing Found', 'cyber'); ?>
		</h1>
	</div>
</header><!-- .page-header -->
<section class="no-results not-found text-gray-700 body-font">
	<div class="page-content container px-5 py-24 mx-auto">
		<div class="flex flex-wrap -mx-4 -my-8">
			<?php
			if (is_home() && current_user_can('publish_posts')) :

				printf(
					'<p>' . wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'cyber'),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					) . '</p>',
					esc_url(admin_url('post-new.php'))
				);

			elseif (is_search()) :
			?>

				<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'cyber'); ?></p>
			<?php
				get_search_form();

			else :
			?>

				<p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'cyber'); ?></p>
			<?php
				get_search_form();

			endif;
			?>
		</div><!-- .page-content -->
	</div>
</section><!-- .no-results -->
