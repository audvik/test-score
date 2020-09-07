<?php

/**
 * The template for displaying category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
                    <?php single_cat_title('Project Name : '); ?>
                </h1>
                <!--project of this author related to this post-->
                <?php $catID = get_the_category(); ?>
                <div class=" mx-auto max-w-sm rounded-sm border border-gray-200 bg-white shadow-lg">
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
                        <?php
                        the_archive_description('<div class="archive-description text-center text-gray-600">', '</div>');
                        ?>
                        <a class="text-indigo-500 inline-flex items-center">View Project Profile
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </header><!-- .page-header -->
        <section class="text-gray-700 body-font">
            <div class="container px-5 py-4 mx-auto">

                <div class="flex flex-wrap -mx-4">
                    <?php
                    /* Start the Loop */
                    while (have_posts()) :
                        the_post();
                        /*
                        * Include the Post-Type-specific template for the content.
                        * If you want to override this in a child theme, then include a file
                        * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                        */
                        get_template_part('template-parts/content-category', get_post_type());
                    endwhile; ?>
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
