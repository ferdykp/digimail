<!-- Overlay -->
<div id="overlay" class="fixed inset-0 z-40 hidden bg-black bg-opacity-50 md:hidden"></div>

<!-- Sidebar -->
<aside id="sidebar"
    class="fixed inset-y-0 left-0 z-50 w-64 px-4 py-6 m-3 space-y-6 text-white transition-transform duration-300 ease-in-out transform -translate-x-full bg-gray-800 rounded-lg md:translate-x-0 md:relative md:block">
    <a href="{{ url('/') }}" class="flex items-center px-4 space-x-2 text-white">
        <i class="text-xl fa-solid fa-layer-group"></i>
        <span class="text-2xl font-bold">MyApp</span>
    </a>

    <nav class="mt-10 space-y-1">
        <a href="{{ route('clientWed.index') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">
            <i class="mr-2 fa-solid fa-gauge-high"></i> Wedding
        </a>

        @auth
            <div class="px-4 py-2 text-sm text-gray-300">
                <i class="mr-1 fa-solid fa-user"></i> Hello, {{ Auth::user()->fullname }}
            </div>
            <form action="" method="POST" class="px-4">
                @csrf
                <button type="submit" class="text-red-400 hover:underline">
                    <i class="mr-1 fa-solid fa-right-from-bracket"></i> Logout
                </button>
            </form>
        @else
            <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700">
                <i class="mr-2 fa-solid fa-right-to-bracket"></i> Login
            </a>
            <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700">
                <i class="mr-2 fa-solid fa-user-plus"></i> Register
            </a>
        @endauth
    </nav>
</aside>
