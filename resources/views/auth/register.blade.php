@extends('layout.master')

@section('content')
    <section class="flex items-center justify-center min-h-screen bg-[#FFF9F6] ">
        <div data-aos="zoom-in" class="flex flex-col mt-20 overflow-hidden bg-white shadow-xl md:flex-row rounded-2xl">

            <!-- Bagian Kiri (Gambar / Logo) -->
            <div class="flex items-center justify-center w-full md:w-1/2 bg-[#F8E9DF] p-8">
                <img src="{{ asset('img/img-login.png') }}" alt="Login Illustration" class="w-3/4 max-w-sm">
                {{-- Ganti src dengan logo/gambar kamu, misal asset('images/logo.png') --}}
            </div>

            <!-- Bagian Kanan (Form Login) -->
            <div class="w-full p-8 md:w-1/2">
                <!-- Judul -->
                <div class="mb-8 text-center">
                    <h2 class="text-3xl font-bold text-gray-800">Create an Account ✨</h2>
                    <p class="mt-2 text-sm text-gray-500">Daftar untuk mulai membuat undangan pernikahan online</p>
                </div>

                <!-- Form -->
                <form method="POST" action="{{ route('register') }}" class="space-y-5">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" name="name" required
                            class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#EEC9B7] focus:outline-none" />
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" required
                            class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#EEC9B7] focus:outline-none" />
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" required
                            class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#EEC9B7] focus:outline-none" />
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" required
                            class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#EEC9B7] focus:outline-none" />
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="w-full py-2.5 bg-[#EEC9B7] hover:bg-[#E7BFA6] text-white font-semibold rounded-lg transition">
                        Register
                    </button>
                </form>

                <!-- Divider -->
                <div class="flex items-center my-6">
                    <div class="flex-grow border-t border-gray-200"></div>
                    <span class="px-3 text-sm text-gray-500">OR</span>
                    <div class="flex-grow border-t border-gray-200"></div>
                </div>

                <!-- Login link -->
                <p class="text-sm text-center text-gray-600">
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="text-[#C47B59] font-semibold hover:underline">Masuk Sekarang</a>
                </p>
            </div>
        </div>
    </section>
@endsection
