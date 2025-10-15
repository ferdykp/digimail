<footer class="bg-[#EEC9B7]/40 text-[#4A4A4A] ">
    <div class="px-6 py-10 mx-auto max-w-7xl">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">

            <!-- Kolom 1: Logo & Deskripsi -->
            <div>
                <h2 class="text-2xl font-bold mb-3 text-[#4A4A4A]">💍 Digimail</h2>
                <p class="text-sm leading-relaxed">
                    Platform undangan pernikahan digital yang elegan, cepat, dan mudah digunakan.
                    Buat undanganmu secara instan dan bagikan ke tamu hanya dengan satu klik.
                </p>
            </div>

            <!-- Kolom 2: Navigasi -->
            <div class="text-sm">
                <h3 class="mb-3 text-lg font-semibold">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="{{ url('/') }}" class="hover:text-[#B9856A] transition-colors">Home</a></li>
                    <li><a href="#features" class="hover:text-[#B9856A] transition-colors">Our Features</a></li>
                    <li><a href="#order" class="hover:text-[#B9856A] transition-colors">How to Order</a></li>
                    <li><a href="{{ url('/login') }}" class="hover:text-[#B9856A] transition-colors">Login</a></li>
                    <li><a href="{{ url('/register') }}" class="hover:text-[#B9856A] transition-colors">Register</a>
                    </li>
                </ul>
            </div>

            <!-- Kolom 3: Kontak -->
            <div class="text-sm">
                <h3 class="mb-3 text-lg font-semibold">Contact Us</h3>
                <p class="flex items-center gap-2">
                    <i class="fa-solid fa-envelope text-[#B9856A]"></i>
                    support@wedcraft.com
                </p>
                <p class="flex items-center gap-2 mt-2">
                    <i class="fa-brands fa-whatsapp text-[#B9856A]"></i>
                    +62 812-3456-7890
                </p>
                <div class="flex items-center gap-4 mt-4">
                    <a href="#" class="hover:text-[#B9856A]"><i class="text-xl fa-brands fa-instagram"></i></a>
                    <a href="#" class="hover:text-[#B9856A]"><i class="text-xl fa-brands fa-tiktok"></i></a>
                    <a href="#" class="hover:text-[#B9856A]"><i class="text-xl fa-brands fa-facebook"></i></a>
                </div>
            </div>
        </div>

        <!-- Garis pemisah -->
        <div class="border-t border-[#D6B4A0]/70 my-6"></div>

        <!-- Copyright -->
        <div class="text-sm text-center">
            © {{ date('Y') }} <span class="font-semibold text-[#B9856A]">Digimail</span>. All rights reserved.
            <br>
            Made with ❤️ for beautiful weddings.
        </div>
    </div>
</footer>
