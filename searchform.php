<form id="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="flex">
    <input type="text" class="search-field shadow appearance-none border rounded w-8/12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>">
    <input type="submit" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-4 focus:outline-none hover:bg-indigo-600 rounded" value="Search">
    </div>
</form>
