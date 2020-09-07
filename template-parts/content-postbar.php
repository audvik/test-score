<?php

/**
 * Template part for displaying activitiess
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyber
 */

?>

<?php
// the query
$catID = get_the_category();
$the_query = new WP_Query(array(
    'category_name' => $catID[0]->name,
    'posts_per_page' => 5,
));
?>

<?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <article id="post-<?php the_ID(); ?>" class="flex flex-row  items-start flex-wrap mb-4">
            <img class="h-12 rounded-full w-12" src="<?php echo get_template_directory_uri(); ?>/img/avatar.svg" alt="">
            <div class="flex-1 pl-4 text-gray-700 text-sm leading-snug">
                <span class="font-semibold inline text-gray-800">
                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                        <?php echo esc_html(get_the_author()); ?></a>
                </span> added
                <span class="font-semibold text-orange-600">
                    <?php echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';?>
                </span>
                <span class="text-xs pt-2 block w-full border-b-2">on <?php echo get_the_date('F j, Y'); ?></span>
            </div>
        </article><!-- #post-<?php the_ID(); ?> -->
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php __('No Activities'); ?></p>
<?php endif; ?>