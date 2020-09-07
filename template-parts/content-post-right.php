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
                <?php echo the_title('<h1 class="flex-grow sm:pr-16 text-2xl font-medium text-black">', '</h1>'); ?>
                <a href="#" class="hidden md:block flex-shrink-0 text-white bg-indigo-500 border-0 py-2 px-8 mb-2 focus:outline-none hover:bg-indigo-600 rounded text-lg">Full Story</a>
            </div>

            <div class="flex flex-col sm:flex-row mt-4">
                <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                    <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex flex-col items-center text-center justify-center">
                        <h2 class="font-medium title-font mt-4 text-gray-900 text-lg"><?php cyber_posted_by(); ?></h2>
                        <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                        <p class="text-base text-gray-600"><?php echo the_author_meta('description'); ?></p>
                    </div>
                </div>
                <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-300 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                    <?php cyber_posted_on(); ?>
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
                    <a class="text-indigo-500 inline-flex items-center">Read Full Story
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </section>
</article><!-- #post-<?php the_ID(); ?> -->