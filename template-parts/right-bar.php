<div class="flex flex-col">
    <div class="px-6 border-b-2">
        <section id="recent">
            <h2 class="my-6 text-gray-500 text-xs tracking-wider font-bold uppercase">Recent Activity</h2>
            <?php get_template_part('template-parts/content-postbar', get_post_type()); ?>
        </section>
        <a class="text-indigo-500 inline-flex items-center">View Activity Report Card
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
    <div id="coupon" class="flex-grow flex flex-col pl-6 justify-end">
        <div class="flex justify-between items-center text-red-600">Previos || Next Post</div>
        <?php
        $prev_post = get_adjacent_post(true, '', true, 'category');
        $prev_url = (is_a($prev_post, 'WP_Post')) ? get_permalink($prev_post->ID) : null;
        $next_post = get_adjacent_post(true, '', false, 'category');
        $next_url = (is_a($next_post, 'WP_Post')) ? get_permalink($next_post->ID) : null;
        ?>
        <div class="flex justify-between font-bold">

            <div class="flex items-center">
                <div class="border rounded-full m-2 p-2 bg-gray-400"><a href="<?php echo $prev_url; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="#667eea">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                        </svg>
                    </a></div>
                <div class="border rounded-full m-2 p-2 bg-gray-400"><a href="<?php echo $next_url; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="#667eea">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a></div>
            </div>
            <div class="ml-auto bg-indigo-500 text-white p-2 text-2xl rounded-l-lg">
                Cyberpur
            </div>

        </div>

    </div>
    <div class="bg-gray-200 rounded flex p-4 h-full items-center lg:hidden">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
        </svg>
        <span class="title-font font-medium">&copy; 2020, <a href="https://lokbidhi.com" target="_blank">Lokbidhi Cyberlab</a></span>
    </div>
</div>