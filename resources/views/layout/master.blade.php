<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    @stack('head')
</head>

<body class="flex min-h-screen font-serif bg-gray-100">
    <!-- Sidebar di kiri -->
    @if (request()->routeIs('clientWed.dashboard'))
        @include('layout.aside')
    @endif

    <!-- Bagian kanan (navbar + konten) -->
    <div class="flex flex-col flex-1 min-h-screen transition-all duration-300 ">
        <!-- Navbar -->
        @if (!request()->routeIs('login') && !request()->routeIs('register') && !request()->routeIs('clientWed.dashboard'))
            @include('layout.navbar')
        @endif

        <!-- Konten utama -->
        <main class="flex-1">
            @yield('content')

            {{-- Footer hanya muncul jika bukan di halaman login atau register --}}
            @if (!request()->routeIs('login') && !request()->routeIs('register') && !request()->routeIs('clientWed.dashboard'))
                @include('layout.footer')
            @endif
        </main>

    </div>

    @include('layout.script')
    @stack('scripts')

</body>
{{-- @include('layout.footer') --}}

</html>
