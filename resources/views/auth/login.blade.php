@extends('layout.master')

@section('content')
    <section class="flex items-center justify-center min-h-screen bg-[#FFF9F6] px-4">
        <div data-aos="zoom-in" data-aos-delay="100"
            class="flex flex-col w-full max-w-3xl overflow-hidden bg-white shadow-xl md:flex-row rounded-2xl">

            <!-- Bagian Kiri (Gambar / Logo) -->
            <div class="flex items-center justify-center w-full md:w-1/2 bg-[#F8E9DF] p-8">
                <img src="{{ asset('img/img-login.png') }}" alt="Login Illustration" class="w-3/4 max-w-sm">
                {{-- Ganti src dengan logo/gambar kamu, misal asset('images/logo.png') --}}
            </div>

            <!-- Bagian Kanan (Form Login) -->
            <div class="w-full p-8 md:w-1/2">
                <!-- Judul -->
                <div class="mb-8 text-center">
                    <h2 class="text-3xl font-bold text-gray-800">Welcome Back 👋</h2>
                    <p class="mt-2 text-sm text-gray-500">Masuk untuk mengelola undanganmu</p>
                </div>

                <!-- Form -->
                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf
                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" required autofocus
                            class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#EEC9B7] focus:outline-none" />
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" required
                            class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#EEC9B7] focus:outline-none" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between text-sm">
                        <label class="flex items-center gap-2 text-gray-600">
                            <input type="checkbox" class="rounded border-gray-300 text-[#EEC9B7] focus:ring-[#EEC9B7]">
                            Remember me
                        </label>
                        <a href="#" class="text-[#C47B59] hover:underline">Forgot password?</a>
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="w-full py-2.5 bg-[#EEC9B7] hover:bg-[#E7BFA6] text-white font-semibold rounded-lg transition">
                        Login
                    </button>
                </form>

                <!-- Register link -->
                <p class="mt-5 text-sm text-center text-gray-600">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="text-[#C47B59] font-semibold hover:underline">
                        Daftar Sekarang
                    </a>
                </p>
            </div>
        </div>
    </section>
@endsection
