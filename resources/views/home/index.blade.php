{{-- @extends('layout.master') --}}

{{-- @section('content') --}}
<div class="relative flex items-center justify-center min-h-screen overflow-hidden bg-white">
    <!-- Background Image -->
    <img src="/img/bg-home.jpg" alt="home" class="absolute inset-0 object-cover w-full h-full opacity-70 blur-[1px]">

    <!-- Overlay ringan agar teks tetap terbaca -->
    <div class="absolute inset-0 bg-black/30"></div>

    <!-- Content -->
    <div class="relative z-10 grid w-full max-w-6xl grid-cols-1 gap-10 px-6 text-white md:grid-cols-2">

        <!-- Left Side -->
        <div class="flex flex-col justify-center space-y-5 animate-fadeIn">
            <h1 class="text-5xl font-extrabold tracking-wide drop-shadow-md">
                Digimail
            </h1>
            <p class="text-lg leading-relaxed text-gray-100 md:text-xl">
                Undangan digital auto-generate dengan desain modern dan kemudahan berbagi hanya dengan satu tautan.
            </p>
            <button
                class="px-6 py-3 font-semibold text-white transition-all duration-300 bg-[#EEC9B7] rounded-lg shadow-lg w-fit hover:scale-105 hover:bg-gradient-to-r hover:from-[#a57a5d] hover:to-[#d0946d] focus:ring-4 focus:ring-[#915e3c]">
                Mulai Sekarang
            </button>
        </div>

        <!-- Right Side -->
        <div class="flex flex-col justify-center text-right md:items-end animate-slideUp">
            <h2 class="mb-3 text-3xl font-semibold text-[#edb08a]">Buat Undangan Anda Sendiri</h2>
            <p class="max-w-md mb-6 text-gray-200 md:text-right">
                Personalisasikan undangan digital Anda dengan cepat, mudah, dan elegan.
                Tidak perlu repot, cukup isi detail acara dan Digimail akan menyiapkannya untuk Anda.
            </p>
            <button
                class="px-6 py-3 font-semibold text-[#e79158] transition-all duration-300 border-2 border-[#be967c] rounded-lg hover:bg-[#F8E9DF] hover:text-black hover:border-[#f1c5a7]">
                Lihat Contoh
            </button>
        </div>
    </div>
</div>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 1s ease-out forwards;
    }

    .animate-slideUp {
        animation: slideUp 1.2s ease-out forwards;
    }
</style>
{{-- @endsection --}}
