@extends('layout.master')
@section('content')
    @include('home.index')
    @include('feature.index')
    @include('order.index')
    @include('package.index')
    {{-- @include('clientWed.index') --}}
    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/6281234567890?text=Halo%20saya%20ingin%20bertanya%20tentang%20paket%20undangan" target="_blank"
        class="fixed z-50 p-3 text-white transition transform bg-green-500 rounded-full shadow-lg bottom-6 right-6 hover:bg-green-600 hover:scale-110">
        <i class="text-3xl fab fa-whatsapp"></i>
    </a>
@endsection
