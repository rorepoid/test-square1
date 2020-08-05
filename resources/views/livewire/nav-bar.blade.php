<nav x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-gray-800">
    <div class="container px-6 mx-auto lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center justify-between flex-grow">
                <div class="flex-shrink-0">
                    <h1 class="text-lg font-semibold tracking-widest text-white uppercase">
                        <a href="" class="hover:no-underline hover:text-white">{{ config('app.name', 'Laravel') }}</a>
                    </h1>
                </div>
                @auth
                <div class="hidden md:block">
                    <div class="flex items-center">
                        <a href="" class="flex flex-row items-center px-3 py-2 ml-4 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 hover:no-underline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill='none' stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"> <path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"/></svg>
                            <span class="ml-2">New Post</span>
                        </a>
                        <a href="" class="flex flex-row items-center px-3 py-2 ml-4 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 hover:no-underline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                            <span class="mx-2">My Posts</span>
                        </a>
                        <a href=""class="flex flex-row items-center px-3 py-2 ml-4 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 hover:no-underline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span class="mx-2">Log out</span>
                        </a>
                    </div>
                </div>
                @endauth
                @guest
                <div class="flex items-center">
                    <a href="{{ route('login') }}"class="flex flex-row items-center px-3 py-2 ml-4 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 hover:no-underline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span class="mx-2">Log in</span>
                    </a>
                </div>
                @endguest
            </div>
        </div>
    </div>
</nav>