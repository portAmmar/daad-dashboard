<aside class="w-52 bg-white dark:bg-gray-900 border-r border-gray-200 dark:border-gray-800 flex flex-col">
    <a href="{{ route('dashboard') }}">
        <div
            class="h-16 flex items-center justify-center border-b border-gray-200 dark:border-gray-800 text-lg font-semibold text-gray-800 dark:text-gray-100">
            {{ config('app.name', 'Laravel') }}
        </div>
    </a>


    <nav class="flex-1 overflow-y-auto px-2 py-3">
        <ul class="space-y-1">
            <li>
                <a href="{{ route('dashboard') }}"
                    class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm
                          text-gray-700 dark:text-gray-200
                          hover:bg-gray-100 dark:hover:bg-gray-800
                          transition
                          {{ request()->routeIs('dashboard') ? 'bg-gray-100 dark:bg-gray-800 font-medium' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 opacity-70" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7m-9 2v8m4-8v8m-9-8h18" />
                    </svg>
                    <span>Home</span>
                </a>
            </li>

            <li>
                <a href="{{ route('profile.edit') }}"
                    class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm
                          text-gray-700 dark:text-gray-200
                          hover:bg-gray-100 dark:hover:bg-gray-800
                          transition
                          {{ request()->routeIs('profile.edit') ? 'bg-gray-100 dark:bg-gray-800 font-medium' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 opacity-70" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span>Profile</span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="border-t border-gray-200 dark:border-gray-800 p-3">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="w-full flex items-center justify-center gap-2 py-2 text-sm
                           text-red-600 hover:bg-red-50 dark:hover:bg-gray-800 rounded-lg transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7" />
                </svg>
                Logout
            </button>
        </form>
    </div>
</aside>
