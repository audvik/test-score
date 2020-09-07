<?php

/**
 * Template part for displaying archive,tag,category content in archive.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyber
 */

?>

<article id="post-<?php the_ID(); ?>" class="py-8 px-4 lg:w-1/3">
    <div class="h-full flex items-start">
        <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
            <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-300"><?php echo get_the_date('M'); ?></span>
            <span class="font-medium text-xl text-gray-800 title-font"><?php echo get_the_date('j'); ?></span>
        </div>
        <div class="flex-grow pl-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">
                <?php the_category(', '); ?>
            </h2>
            <h1 class="title-font text-xl font-medium text-gray-900 mb-3"><?php echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>'; ?></h1>
            <p class="leading-relaxed mb-5"><?php echo get_field('post_synopsis'); ?></p>
            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="inline-flex items-center">
                <img class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center" src="<?php echo get_template_directory_uri(); ?>/img/avatar.svg" alt="user avatar">
                <span class="flex-grow flex flex-col pl-3">
                    <span class="title-font font-medium text-gray-900">

                        <?php echo esc_html(get_the_author()); ?>
                    </span>
                </span>
            </a>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->