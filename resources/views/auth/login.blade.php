@extends('layout.master')

@section('content')
    <section class="flex items-center justify-center min-h-screen bg-[#FFF9F6] px-4">
        <div data-aos="zoom-in" data-aos-delay="100"
            class="flex flex-col w-full max-w-4xl overflow-hidden bg-white shadow-2xl md:flex-row rounded-3xl">

            <!-- Bagian Kiri (Gambar / Logo) -->
            <div
                class="relative flex flex-col items-center justify-center w-full md:w-1/2 bg-[#F8E9DF] overflow-hidden group">

                <!-- Link meliputi seluruh area -->
                <a href="{{ route('landing') }}"
                    class="absolute inset-0 z-10 flex flex-col items-center justify-center cursor-pointer">

                    <!-- Teks Judul -->
                    <span
                        class="px-6 py-2.5 mb-5 rounded-xl bg-white/60 text-[#7B4B33] font-semibold text-xl tracking-wide
                   backdrop-blur-sm shadow-sm group-hover:bg-[#e8b69e]/90 group-hover:text-white
                   transition-all duration-500 ease-in-out">
                        Welcome to Digimail
                    </span>

                    <!-- Gambar -->
                    <img src="{{ asset('img/img-login.png') }}" alt="Login Illustration"
                        class="w-3/4 max-w-sm transition-transform duration-700 ease-in-out group-hover:scale-105 drop-shadow-lg">
                </a>

                <!-- Elemen Dekorasi -->
                <div class="absolute rounded-full w-72 h-72 bg-white/20 blur-3xl top-10 left-10 opacity-60"></div>
                <div class="absolute w-64 h-64 bg-[#eec9b7]/30 rounded-full blur-2xl bottom-10 right-10 opacity-50"></div>
            </div>



            <!-- Bagian Kanan (Form Login) -->
            <div class="flex flex-col justify-center w-full p-10 md:w-1/2">
                <!-- Judul -->
                <div class="mb-8 text-center">
                    <h2 class="text-3xl font-bold text-gray-800">Login First</h2>
                    <p class="mt-2 text-sm text-gray-500">Masuk untuk mengelola undanganmu</p>
                </div>

                <!-- Form -->
                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf
                    <!-- Email -->
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" required autofocus
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#EEC9B7] focus:outline-none transition duration-200" />
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" required
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#EEC9B7] focus:outline-none transition duration-200" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between mt-2 text-sm">
                        <label class="flex items-center gap-2 text-gray-600">
                            <input type="checkbox" class="rounded border-gray-300 text-[#EEC9B7] focus:ring-[#EEC9B7]">
                            Remember me
                        </label>
                        <a href="#" class="text-[#C47B59] hover:underline hover:text-[#b16b4a] transition">Forgot
                            password?</a>
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="w-full py-2.5 mt-2 bg-[#EEC9B7] hover:bg-[#E7BFA6] text-white font-semibold rounded-lg shadow-md transition duration-300 hover:shadow-lg">
                        Login
                    </button>
                </form>

                <!-- Register link -->
                <p class="mt-6 text-sm text-center text-gray-600">
                    Belum punya akun?
                    <a href="{{ route('register') }}"
                        class="text-[#C47B59] font-semibold hover:underline hover:text-[#b16b4a] transition">
                        Daftar Sekarang
                    </a>
                </p>
            </div>
        </div>
    </section>
@endsection
