{{-- @extends('layouts.master') --}}

{{-- @section('content') --}}
<section id="packages" class="bg-[#ffe8dc] py-20 px-6">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="mb-4 text-4xl font-bold text-gray-800">Our Packages</h2>
        <p class="mb-12 text-gray-600">
            Pilih paket yang sesuai dengan kebutuhanmu — mulai dari versi gratis hingga layanan eksklusif dengan fitur
            lengkap 💌
        </p>

        <!-- Grid Packages -->
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <!-- FREE PLAN -->
            <div data-aos="zoom-in-up" data-aos-delay="100"
                class="bg-white rounded-2xl shadow-lg
                hover:shadow-xl transition transform hover:-translate-y-2 p-8 flex flex-col items-center justify-between
                border-t-4 border-[#EEC9B7]">
                <div>
                    <h3 class="mb-2 text-2xl font-semibold text-gray-800">Free Plan</h3>
                    <p class="mb-6 text-gray-500">Coba undangan digital secara gratis!</p>
                    <div class="text-4xl font-bold text-[#C47B59] mb-4">Rp 0</div>
                    <ul class="space-y-3 text-sm text-left text-gray-600">
                        <li>✅ 1 Template Umum</li>
                        <li>✅ Link Undangan Otomatis</li>
                        <li>✅ RSVP Form</li>
                        <li>❌ Tanpa Domain Custom</li>
                        <li>❌ Watermark Website</li>
                    </ul>
                </div>
                @guest
                    <!-- Jika BELUM login -->
                    <a href="{{ url('/login') }}"
                        class="mt-8 inline-block bg-[#EEC9B7] hover:bg-[#E7BFA6] text-white font-semibold py-2.5 px-6 rounded-lg transition">
                        Coba Sekarang
                    </a>
                @endguest

                @auth
                    <!-- Jika SUDAH login -->
                    <a href="{{ url('/package') }}"
                        class="mt-8 inline-block bg-[#EEC9B7] hover:bg-[#E7BFA6] text-white font-semibold py-2.5 px-6 rounded-lg transition">
                        Coba Sekarang
                    </a>
                @endauth

            </div>

            <!-- PREMIUM PLAN -->
            <div data-aos="zoom-in-up" data-aos-delay="100"
                class="bg-[#FDFDFD] rounded-2xl shadow-2xl hover:shadow-3xl transition transform hover:-translate-y-2 border-t-4 border-[#C47B59] relative">
                <div
                    class="absolute -top-4 right-6 bg-[#C47B59] text-white text-xs font-semibold px-3 py-1 rounded-full shadow">
                    Best Seller
                </div>
                <div class="flex flex-col items-center justify-between p-8">
                    <div>
                        <h3 class="mb-2 text-2xl font-semibold text-gray-800">Premium Plan</h3>
                        <p class="mb-6 text-gray-500">Desain elegan, tanpa watermark.</p>
                        <div class="text-4xl font-bold text-[#C47B59] mb-4">Rp 149.000</div>
                        <ul class="space-y-3 text-sm text-left text-gray-600">
                            <li>✅ Semua Fitur Free Plan</li>
                            <li>✅ Pilihan Template Premium</li>
                            <li>✅ Tanpa Watermark</li>
                            <li>✅ Statistik RSVP & Guestbook</li>
                            <li>✅ QR Code Invitation</li>
                        </ul>
                    </div>
                    @guest
                        <!-- Jika BELUM login -->
                        <a href="{{ url('/login') }}"
                            class="mt-8 inline-block bg-[#C47B59] hover:bg-[#A46649] text-white font-semibold py-2.5 px-6 rounded-lg transition">
                            Coba Sekarang
                        </a>
                    @endguest

                    @auth
                        <!-- Jika SUDAH login -->
                        <a href="{{ url('/package') }}"
                            class="mt-8 inline-block bg-[#C47B59] hover:bg-[#A46649] text-white font-semibold py-2.5 px-6 rounded-lg transition">
                            Coba Sekarang
                        </a>
                    @endauth
                </div>
            </div>

            <!-- EXCLUSIVE PLAN -->
            <div data-aos="zoom-in-up" data-aos-delay="100"
                class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition transform hover:-translate-y-2 p-8 flex flex-col items-center justify-between border-t-4 border-[#EEC9B7]">
                <div>
                    <h3 class="mb-2 text-2xl font-semibold text-gray-800">Exclusive Plan</h3>
                    <p class="mb-6 text-gray-500">Paket premium dengan fitur paling lengkap ✨</p>
                    <div class="text-4xl font-bold text-[#C47B59] mb-4">Rp 299.000</div>
                    <ul class="space-y-3 text-sm text-left text-gray-600">
                        <li>✅ Semua Fitur Premium Plan</li>
                        <li>✅ Domain Custom (.id / .my.id)</li>
                        <li>✅ Desain Custom by Request</li>
                        <li>✅ Support via WhatsApp</li>
                        <li>✅ Fitur Eksklusif (AI Text Helper, Multi-Language)</li>
                    </ul>
                </div>
                @guest
                    <!-- Jika BELUM login -->
                    <a href="{{ url('/login') }}"
                        class="mt-8 inline-block bg-[#EEC9B7] hover:bg-[#E7BFA6] text-white font-semibold py-2.5 px-6 rounded-lg transition">
                        Coba Sekarang
                    </a>
                @endguest

                @auth
                    <!-- Jika SUDAH login -->
                    <a href="{{ url('/package') }}"
                        class="mt-8 inline-block bg-[#EEC9B7] hover:bg-[#E7BFA6] text-white font-semibold py-2.5 px-6 rounded-lg transition">
                        Coba Sekarang
                    </a>
                @endauth
            </div>
        </div>

        <!-- Copywriting CTA -->
        {{-- <div class="mt-16 text-center">
            <p class="mb-6 text-lg font-medium text-gray-700">
                Setiap undangan adalah kisah cinta unik — buat undangan digitalmu dengan sentuhan personal 💕
            </p>
            <a href="{{ url('/register') }}"
                class="px-8 py-3 bg-[#EEC9B7] hover:bg-[#E7BFA6] text-white font-semibold rounded-lg shadow-md transition">
                Mulai Sekarang
            </a>
        </div> --}}
    </div>
</section>
{{-- @endsection --}}
