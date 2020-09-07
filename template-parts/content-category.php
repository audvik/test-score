<?php

/**
 * Template part for displaying archive,tag,category content in archive.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyber
 */

?>

<article id="post-<?php the_ID(); ?>" class="xl:w-1/4 md:w-1/2 p-4">
    <div class="bg-gray-200 p-6 rounded-lg">
        <img class="h-40 rounded w-full object-cover object-center mb-6" src="<?php echo get_template_directory_uri(); ?>/img/demo-image.png" alt="content">
        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font"><?php the_category(', '); ?></h3>
        <h2 class="text-lg text-gray-900 font-medium title-font mb-4"><?php echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>'; ?></h2>
        <p class="leading-relaxed text-base"><?php echo get_field('post_synopsis'); ?></p>
        <div class="inline-flex items-center">
            <img class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center" src="<?php echo get_template_directory_uri(); ?>/img/avatar.svg" alt="user avatar">
            <span class="flex-grow flex flex-col pl-3">
                <span class="title-font font-medium text-gray-900">
                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php echo esc_html(get_the_author()); ?></a>
                </span>

            </span>

        </div>
        <span class="text-xs block w-full border-b-2">on <?php echo get_the_date('F j, Y'); ?></span>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->