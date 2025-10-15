<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    @stack('head')
</head>

<body class="flex min-h-screen font-serif bg-gray-100">
    <!-- Sidebar di kiri -->
    {{-- @include('layout.aside') --}}

    <!-- Bagian kanan (navbar + konten) -->
    <div class="flex flex-col flex-1 min-h-screen transition-all duration-300 ">
        <!-- Navbar -->
        @include('layout.navbar')

        <!-- Konten utama -->
        <main class="flex-1">
            @yield('content')

            {{-- Footer hanya muncul jika bukan di halaman login atau register --}}
            @if (!request()->routeIs('login') && !request()->routeIs('register'))
                @include('layout.footer')
            @endif
        </main>

    </div>

    @include('layout.script')
</body>
{{-- @include('layout.footer') --}}

</html>
