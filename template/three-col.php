<?php
//template name:Three Col

get_header(); ?>
<main>
    <div class="flex flex-wrap bg-gray-100">
        <div class="hidden p-8 w-1/2 lg:block lg:w-1/5">
            <?php get_template_part('template-parts/left-bar'); ?>
        </div>
        <div class="p-4 bg-white shadow-lg w-full lg:w-3/5">
            <div class="bg-indigo-100 text-gray-700 border-t-4 border-indigo-300 px-6 py-4 rounded-lg relative mb-4" role="alert" x-data="{ open: true }" x-show.transition="open">
                <div class="mr-4">
                    <strong class="font-bold">Get Listed for free ! </strong>
                    <span class="block sm:inline">
                        Upload your visiting card
                        <a href="/vcard" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Upload
                        </a>
                    </span>
                </div>
                <span class="cursor-pointer absolute top-0 bottom-0 right-0 hover:bg-indigo-300 hover:text-indigo-600 w-10 h-10 rounded-full inline-flex items-center justify-center mt-2 mr-3" x-on:click="open = false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </span>
            </div>
            <section class="text-gray-700 body-font">
                <div class="flex flex-col">

                    <div class="rounded-lg h-64 overflow-hidden">

                        <img alt="content" class="object-cover object-center h-full w-full" src="<?php echo get_template_directory_uri(); ?>/img/chat.svg">

                    </div>

                    <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start  -mt-16 mx-auto bg-gray-100 opacity-75">
                        <h3 class="flex-grow sm:pr-16 text-2xl font-medium text-gray-900">Slow-carb shoindxgoitch ethical authentic, scenester sriracha.</h3>
                        <button class="flex-shrink-0 text-white bg-indigo-500 border-0 py-2 px-8 mb-2 focus:outline-none hover:bg-indigo-600 rounded text-lg mt-10 sm:mt-0">Button</button>
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
                                <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">Phoebe Caulfield</h2>
                                <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                                <p class="text-base text-gray-600">Raclette knausgaard hella meggs normcore williamsburg enamel pin sartorial venmo tbh hot chicken gentrify portland.</p>
                            </div>
                        </div>
                        <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-300 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                            <p class="leading-relaxed text-lg mb-4">Meggings portland fingerstache lyft, post-ironic fixie man bun banh mi umami everyday carry hexagon locavore direct trade art party. Locavore small batch listicle gastropub farm-to-table lumbersexual salvia messenger bag. Coloring book flannel truffaut craft beer drinking vinegar sartorial, disrupt fashion axe normcore meh butcher. Portland 90's scenester vexillologist forage post-ironic asymmetrical, chartreuse disrupt butcher paleo intelligentsia pabst before they sold out four loko. 3 wolf moon brooklyn.</p>
                            <a class="text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        <div class="px-2 w-full lg:w-1/5">
            <?php get_template_part('template-parts/right-bar'); ?>
        </div>

    </div>
</main>