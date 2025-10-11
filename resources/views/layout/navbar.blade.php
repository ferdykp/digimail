{{-- <nav class="flex items-center justify-between px-4 py-3 m-3 bg-white border-b border-gray-200 rounded-lg shadow-sm">
    <button id="sidebarToggle" class="text-gray-700 md:hidden">
        <i class="text-2xl fa-solid fa-bars"></i>
    </button>
    <h1 class="text-xl font-semibold text-gray-700">Dashboard</h1>
</nav> --}}

<nav class="flex items-center justify-between px-6 py-3 rounded-sm shadow-sm" style="background-color: #F5DAA7">
    <!-- KIRI: Logo -->
    <div class="flex items-center p-2 space-x-2 bg-black border rounded-lg">
        <img src="/logo/logo-wed-nobg.png" alt="Logo" class="w-auto h-10">
    </div>

    <!-- TENGAH: Menu -->
    <div class="flex space-x-2 text-sm font-semibold text-gray-700">

        {{-- Tombol Home --}}
        <a href="{{ url('/') }}"
            class="relative overflow-hidden rounded-lg inline-flex items-center px-5 py-2.5 text-sm font-medium transition-all duration-300
                {{ Request::is('/') ? 'text-white bg-red-800' : 'text-blue-700 bg-white hover:bg-blue-100' }}">
            Home
        </a>

        {{-- Tombol Undangan Digital --}}
        <div class="relative">
            <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                type="button"
                class="inline-flex items-center px-5 py-2.5 text-sm font-medium rounded-lg transition-all duration-300
                    {{ Request::is('undangan*') ? 'text-white bg-red-800 shadow-lg' : 'text-red-800 bg-white hover:bg-red-100' }}">
                Undangan Digital
                <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <div id="dropdownHover"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                    <li><a href="{{ url('/undangan/dashboard') }}"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- KANAN: Tombol Login -->
    <div>
        <a href="{{ url('/login') }}"
            class="px-5 py-2.5 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-300">
            Login
        </a>
    </div>
</nav>
