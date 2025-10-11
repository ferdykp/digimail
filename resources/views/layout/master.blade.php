<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    @stack('head')
</head>

<body class="flex min-h-screen bg-gray-100">
    <!-- Sidebar di kiri -->
    {{-- @include('layout.aside') --}}

    <!-- Bagian kanan (navbar + konten) -->
    <div class="flex flex-col flex-1 min-h-screen transition-all duration-300 ">
        <!-- Navbar -->
        @include('layout.navbar')

        <!-- Konten utama -->
        <main class="flex-1">
            @yield('content')
        </main>
    </div>

    @include('layout.script')
</body>

</html>
