<section id="order" class="py-20 bg-[#FFF9F6]">
    <div class="max-w-6xl px-6 mx-auto text-center">
        <!-- Judul -->
        <h2 class="mb-4 text-4xl font-bold text-gray-800">How to Order</h2>
        <p class="mb-16 text-gray-600">
            Proses mudah dan cepat! Dalam hitungan menit, undangan digitalmu siap dibagikan ke tamu 💌
        </p>

        <!-- Langkah-langkah -->
        <div class="grid grid-cols-1 gap-8 text-left sm:grid-cols-2 lg:grid-cols-4">

            {{-- <div class="p-6 text-center transition bg-white shadow-md rounded-2xl hover:shadow-lg">
                <div
                    class="flex items-center justify-center w-14 h-14 mx-auto bg-[#F8E9DF] text-[#C47B59] rounded-full mb-4">
                    <span class="text-2xl font-bold">1</span>
                </div>
                <h3 class="mb-2 text-lg font-semibold text-gray-800">Pilih Template</h3>
                <p class="text-sm text-gray-600">
                    Login atau Registrasi pada laman website kamu untuk memulai pemesanan.
                </p>
            </div> --}}
            <!-- Step 1 -->
            <div data-aos="zoom-in-right" data-aos-delay="100"
                class="p-6 text-center transition bg-white shadow-md rounded-2xl hover:shadow-lg">
                <div
                    class="flex items-center justify-center w-14 h-14 mx-auto bg-[#F8E9DF] text-[#C47B59] rounded-full mb-4">
                    <span class="text-2xl font-bold">1</span>
                </div>
                <h3 class="mb-2 text-lg font-semibold text-gray-800">Pilih Template</h3>
                <p class="text-sm text-gray-600">
                    Pilih desain undangan favoritmu dari koleksi tema elegan, rustic, islami, hingga modern.
                </p>
            </div>

            <!-- Step 2 -->
            <div data-aos="zoom-in-right" data-aos-delay="100"
                class="p-6 text-center transition bg-white shadow-md rounded-2xl hover:shadow-lg">
                <div
                    class="flex items-center justify-center w-14 h-14 mx-auto bg-[#F8E9DF] text-[#C47B59] rounded-full mb-4">
                    <span class="text-2xl font-bold">2</span>
                </div>
                <h3 class="mb-2 text-lg font-semibold text-gray-800">Isi Data & Detail Acara</h3>
                <p class="text-sm text-gray-600">
                    Masukkan nama pasangan, tanggal acara, lokasi, dan detail lainnya. Kami bantu format otomatis!
                </p>
            </div>

            <!-- Step 3 -->
            <div data-aos="zoom-in-right" data-aos-delay="100"
                class="p-6 text-center transition bg-white shadow-md rounded-2xl hover:shadow-lg">
                <div
                    class="flex items-center justify-center w-14 h-14 mx-auto bg-[#F8E9DF] text-[#C47B59] rounded-full mb-4">
                    <span class="text-2xl font-bold">3</span>
                </div>
                <h3 class="mb-2 text-lg font-semibold text-gray-800">Preview & Checkout</h3>
                <p class="text-sm text-gray-600">
                    Lihat tampilan undanganmu sebelum final. Setelah cocok, lakukan pembayaran dengan mudah.
                </p>
            </div>

            <!-- Step 4 -->
            <div data-aos="zoom-in-right" data-aos-delay="100"
                class="p-6 text-center transition bg-white shadow-md rounded-2xl hover:shadow-lg">
                <div
                    class="flex items-center justify-center w-14 h-14 mx-auto bg-[#F8E9DF] text-[#C47B59] rounded-full mb-4">
                    <span class="text-2xl font-bold">4</span>
                </div>
                <h3 class="mb-2 text-lg font-semibold text-gray-800">Undangan Siap Dibagikan!</h3>
                <p class="text-sm text-gray-600">
                    Setelah pembayaran diverifikasi, undanganmu otomatis aktif dan siap dibagikan ke tamu lewat link
                    atau QR Code.
                </p>
            </div>
        </div>

        <!-- CTA -->
        <div class="mt-16">
            <a href="{{ url('/templates') }}"
                class="px-8 py-3 bg-[#EEC9B7] hover:bg-[#E7BFA6] text-white font-semibold rounded-lg shadow-md transition">
                Mulai Buat Undangan Sekarang
            </a>
        </div>
    </div>
</section>
