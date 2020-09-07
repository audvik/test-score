<?php /* 
This page is used to display the static frontpage. 
*/

// Fetch theme header template
get_header(); ?>
<div id="root" class="flex flex-col h-screen">
    <header class="text-white bg-purple-700">
        <div class="container mx-auto">
            <div class="flex items-center justify-center mt-12 lg:justify-between">
                <div class="flex items-center">
                    <span class="px-2 ml-2 text-xs font-semibold text-blue-700 uppercase bg-blue-200 border border-blue-700 rounded-full">ejanakpur -></span>
                    <a href="/">
                        <span class="h-8 text-3xl text-white">CyberPur</span>
                    </a>

                </div>
                <ul class="hidden lg:flex list-reset">
                    <li class="mr-8">
                        <a class="py-1 font-semibold text-white no-underline uppercase hover:border-b-2 hover:border-white" href="/#boredom">Boredom</a>
                    </li>
                    <li class="mr-8">
                        <a class="py-1 font-semibold text-white no-underline uppercase hover:border-b-2 hover:border-white" href="/#productive">Productive</a>
                    </li>
                    <li class="mr-8">
                        <a class="py-1 font-semibold text-white no-underline uppercase hover:border-b-2 hover:border-white" href="/#action">Action</a>
                        <!--keep subs.form here-->
                    </li>
                    <li class="mr-8">
                        <a class="py-1 font-semibold text-white no-underline uppercase hover:border-b-2 hover:border-white" href="<?php echo get_home_url(); ?>/login">Sign In</a>
                    </li>
                    <li>
                        <a class="px-4 py-2 font-semibold text-white no-underline uppercase bg-purple-700 border-2 border-white rounded-lg hover:bg-white hover:text-purple-700" href="<?php echo get_home_url(); ?>/register">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                <p class="uppercase tracking-loose w-full">Do something new during this lockdown</p>
                <h1 class="my-4 text-5xl font-bold leading-tight">Make Janakpur dham a Cyber City</h1>
                <p class="leading-normal text-2xl mb-8">Being Smart Citizen, together we can shape ideas to develop our city Smart using Cyber technology.</p>
                <a href="/startups" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full py-4 px-8 shadow-lg">Start Up !</a>
            </div>
            <!--Right Col-->
            <div class="w-full md:w-3/5 text-center">
                <img class="w-full md:w-4/5 z-50" src="<?php echo get_template_directory_uri(); ?>/img/data-trend.svg">
            </div>
        </div>

        <svg viewBox="0 0 1428 174" class="text-gray-100">
            <g class="fill-current">
                <path d="M-2 44c90.728.928 147.913 27.188 291.91 59.912 95.998 21.816 251.695 29.423 467.09 22.82-289.664 73.522-542.664 70.936-759-7.759" opacity="0.1"></path>
                <path d="M98 148.708c177.413-32.473 326.148-52.183 446.204-59.13 120.055-6.945 264.32-3.78 432.796 9.496-47.93 1.049-168.697 19.772-362.3 56.17-193.603 36.397-365.837 34.219-516.7-6.536z" opacity="0.1"></path>
                <path d="M1044 95.652c84.83-22.323 233.083-34.044 393-11.486V164c-167.828-42.056-298.828-64.84-393-68.348z" opacity="0.2"></path>
                <g>
                    <path d="M-3.543 110.035c56.629 19.163 97.751 31.774 123.365 37.83 57.632 13.63 110.473 18.425 148.211 21.594 39.322 3.3 124.602 2.342 188.992-1.796 25.735-1.653 57.702-5.291 95.901-10.911 38.821-6.156 65.446-10.744 79.873-13.761 27.114-5.667 75.702-17.488 90.806-20.863 52.865-11.811 91.234-23.596 128.719-30.224 66.365-11.735 99.352-13.382 154.861-15.472 49.52 1.045 86.205 2.697 110.051 4.955 40.467 3.832 87.385 12.434 114.164 16.917 50.455 8.444 118.951 25.128 205.486 50.05l.305 31.998-1440.07-.321-.664-69.996z"></path>
                </g>
            </g>
        </svg>
    </header>

    <main>
        <section id="boredom" class="bg-gray-100 flex flex-col text-center py-16 px-4 lg:px-16 md:px-8 xl:px-24 xxl:px-40">
            <div>
                <h2 class="text-xl lg:text-3xl font-bold text-gray-900">Activities done during LockDown !</h2>
            </div>

            <div class="mt-12 sm:flex items-start justify-between sm:-mx-2">
                <div class="w-full bg-white rounded-lg shadow-lg py-8 px-4 sm:w-1/3 sm:mx-2 lg:mx-6">
                    <div class="card-body h-full flex flex-col justify-between">

                        <div>
                            <h1 class="text-lg font-bold tracking-wide">Watching Television</h1>
                            <p class="text-gray-600 mt-2">Watching TV is the favorite time-pass during lockdown</p>
                        </div>

                        <div class="flex flex-row mt-10 items-end">

                            <div class="flex-1">
                                <h1 class="font-extrabold text-4xl text-purple-400">~ 6 hrs.</h1>
                                <p class="mt-3 mb-4 text-xs text-gray-500">People watched TV around 33.33% more.</p>
                                <a href="#" class="btn-shadow py-3">
                                    Advice : Watch only your favorite program
                                </a>
                            </div>

                            <div class="flex-1 ml-10 w-32 h-32 lg:w-auto lg:h-auto overflow-hidden">
                                <img class="object-cover" src="<?php echo get_template_directory_uri(); ?>/img/sitting.svg">
                            </div>

                        </div>

                    </div>
                </div>

                <div class="w-full bg-white rounded-lg shadow-lg py-8 px-4 mt-6 sm:mt-0 sm:w-1/3 sm:mx-2 lg:mx-6">
                    <div class="card-body h-full flex flex-col justify-between">

                        <div>
                            <h1 class="text-lg font-bold tracking-wide">Surfing Internet</h1>
                            <p class="text-gray-600 mt-2">Surfing internet lying in sofa is the most common thing among youngsters</p>
                        </div>

                        <div class="flex flex-row mt-10 items-end">

                            <div class="flex-1">
                                <h1 class="font-extrabold text-4xl text-purple-400">~ 8 hrs.</h1>
                                <p class="mt-3 mb-4 text-xs text-gray-500">Internet Usage goes higher during this time up by 40%.</p>
                                <a href="#" class="btn-shadow py-3">
                                    Advice : Surf websites which you are used to
                                </a>
                            </div>

                            <div class="flex-1 ml-10 w-32 h-32 lg:w-auto lg:h-auto overflow-hidden">
                                <img class="object-cover" src="<?php echo get_template_directory_uri(); ?>/img/sleeping.svg">
                            </div>

                        </div>

                    </div>
                </div>

                <div class="w-full bg-white rounded-lg shadow-lg py-8 px-4 mt-6 sm:mt-0 sm:w-1/3 sm:mx-2 lg:mx-6">
                    <div class="card-body h-full flex flex-col justify-between">

                        <div>
                            <h1 class="text-lg font-bold tracking-wide">Hang up in Mobile</h1>
                            <p class="text-gray-600 mt-2">Chat with friends and playing games in Mobile phone is what all loves to do </p>
                        </div>

                        <div class="flex flex-row mt-10 items-end">

                            <div class="flex-1">
                                <h1 class="font-extrabold text-4xl text-purple-400">~ 10 hrs.</h1>
                                <p class="mt-3 mb-4 text-xs text-gray-500">Bandwidth surge as well as social network sites are busiest</p>
                                <a href="#" class="btn-shadow py-3">
                                    Advice : Protect your eyes, talk with family
                                </a>
                            </div>

                            <div class="flex-1 ml-10 w-32 h-32 lg:w-auto lg:h-auto overflow-hidden">
                                <img class="object-cover" src="<?php echo get_template_directory_uri(); ?>/img/reading.svg">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="productive" class="relative bg-gray-200">
            <div class="-mt-20 top-0 bottom-auto left-0 right-0 w-full absolute" style="height: 80px; transform: translateZ(0px);">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="justify-center text-center flex flex-wrap py-8">
                <div class="w-full md:w-6/12 px-12 md:px-4">
                    <h2 class="font-semibold text-4xl">Being Productive , Planning Future</h2>
                    <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-600">
                        So what's our baby-step or action plan for making a cyber city..
                    </p>
                </div>
            </div>

            <div class="container mx-auto px-4 py-8">
                <div class="items-center flex flex-col md:flex-row">
                    <div class="w-full md:w-4/12 mr-auto px-4 md:pt-0 my-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/chat.svg">
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <div class="md:pr-4">
                            <div class="text-purple-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                                <i class="text-3xl">1</i>
                            </div>
                            <h3 class="text-3xl font-semibold">Sharing ideas among friends</h3>
                            <p class="mt-4 text-lg leading-relaxed text-gray-600">
                                First we are going to share our rough ideas with friends and ask them to give us feedback. Suggestions are most welcome. You can also give suggestions on this Initiative Idea !
                                <span class="px-2 ml-2 text-xs font-semibold text-blue-700 uppercase bg-blue-200 border border-blue-700 rounded-full"><a href="<?php echo get_home_url(); ?>/suggestion">Give Suggestion</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mx-auto px-4 py-8">
                <div class="items-center flex flex-col md:flex-row-reverse">
                    <div class="w-full md:w-4/12 mr-auto px-4 md:pt-0 my-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/work-together.svg">
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <div class="md:pr-4">
                            <div class="text-purple-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                                <i class="text-3xl">2</i>
                            </div>
                            <h3 class="text-3xl font-semibold">Creating Online Web Portal</h3>
                            <p class="mt-4 text-lg leading-relaxed text-gray-600">
                                We are creating an online web portal so that we can reach to different interest group and more internet users. You can give a look to web-portal ans view Roadmap of our progress.
                                <span class="px-2 ml-2 text-xs font-semibold text-blue-700 uppercase bg-blue-200 border border-blue-700 rounded-full"><a href="<?php echo get_home_url(); ?>/webportal">Web Portal</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mx-auto px-4 py-8">
                <div class="items-center flex flex-col md:flex-row">
                    <div class="w-full md:w-4/12 mr-auto px-4 md:pt-0 my-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/docs.svg">
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <div class="md:pr-4">
                            <div class="text-purple-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                                <i class="text-3xl">3</i>
                            </div>
                            <h3 class="text-3xl font-semibold">Collaborate to write Blogs</h3>
                            <p class="mt-4 text-lg leading-relaxed text-gray-600">
                                During Ideation phase, It is most important to collect ideas from various sources and have a dedicated team to collaborate for discussion on those raw ideas. You can also Connect here.
                                <span class="px-2 ml-2 text-xs font-semibold text-blue-700 uppercase bg-blue-200 border border-blue-700 rounded-full"><a href="<?php echo get_home_url(); ?>/connect">Let's Connect</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="action" class="relative bg-gray-200 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-12 text-center md:text-left">
            <div class="md:flex md:items-center md:justify-center">
                <h2 class="text-xl font-bold">Got some ideas to share! <br class="block md:hidden">Want to get it on CyberPur Website?</h2>
                <a href="<?php echo get_home_url(); ?>/contact-us/" class="px-8 py-4 bg-indigo-200 text-gray-800 rounded shadow inline-block font-semibold md:ml-8 mt-4 md:mt-0">Contact Us</a>
            </div>
        </section>
    </main>

    <!--footer-->
    <div class="w-full h-auto"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#6b46c1" d="M0 224l48-5.3C96 213 192 203 288 192s192-21 288-32 192-21 288-42.7C960 96 1056 64 1152 90.7c96 26.3 192 112.3 240 154.6l48 42.7v32H0z"></path>
        </svg>
        <div class="bg-purple-700 h-auto flex justify-end">
            <div class="flex flex-col h-auto mr-16 sm:-my-20 sm:mr-24 lg:mr-56">
                <h3 class="text-white text-3xl font-bold">Ready to get started?</h3>
                <div class="flex justify-center pt-2 bg-purple-700 z-10"> <a href="<?php echo get_home_url(); ?>/login" class="bg-indigo-200 text-gray-800 font-bold rounded-lg py-4 px-4 shadow-lg text-2xl hover:shadow-none focus:shadow-none">Sign In</a>
                    <div class="w-4"></div>
                    <a href="<?php echo get_home_url(); ?>/register" class="bg-white text-indigo-700 font-bold rounded-lg py-4 px-4 shadow-lg text-2xl hover:shadow-none focus:shadow-none">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-purple-700">
        <div class="container mx-auto px-6 py-12 text-white text-center">
            <p>Cyberpur.com - Maintained by <a href="https://facebook.com/arthavatar" class="text-secondary-900 font-bold underline">Manish Sahu</a> | Photos by Undraw.co</p>
        </div>
    </footer>

</div>
