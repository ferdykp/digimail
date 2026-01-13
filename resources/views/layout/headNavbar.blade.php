{{-- Header --}}
<nav>
    <div class="p-3 m-3 bg-[#EEC9B7] rounded-md flex justify-between items-center">
        <h2 class="text-lg font-semibold text-[#4A4A4A]">Dashboard Undangan</h2>

        @auth
            <div class="relative inline-block text-left">
                <button id="userMenuButton"
                    class="flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-[#4A4A4A] bg-[#FFF8F4] rounded-lg hover:bg-[#F3D3C1] focus:outline-none focus:ring-2 focus:ring-[#D79A74] transition">
                    <i class="fa-solid fa-user-check text-[#4A4A4A]"></i>
                    <span>{{ Auth::user()->name }}</span>
                    <i class="text-xs fa-solid fa-chevron-down"></i>
                </button>

                <!-- Dropdown -->
                <div id="userDropdown"
                    class="absolute right-0 hidden w-40 mt-2 transition-all duration-200 ease-out origin-top-right transform scale-95 bg-white border border-gray-100 rounded-lg shadow-md opacity-0">
                    <a href="{{ url('/settings') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F3D3C1] rounded-t-lg transition">
                        <i class="mr-2 fa-solid fa-gear"></i> Setting
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-[#F3D3C1] rounded-b-lg transition">
                            <i class="mr-2 fa-solid fa-right-from-bracket"></i> Logout
                        </button>
                    </form>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const userMenuButton = document.getElementById('userMenuButton');
                    const userDropdown = document.getElementById('userDropdown');

                    userMenuButton.addEventListener('click', (e) => {
                        e.stopPropagation(); // mencegah klik menutup dropdown langsung

                        const isHidden = userDropdown.classList.contains('hidden');

                        // Tutup dulu semua dropdown lain (jika ada)
                        document.querySelectorAll('[id^="userDropdown"]').forEach(d => {
                            d.classList.add('hidden', 'opacity-0', 'scale-95');
                            d.classList.remove('opacity-100', 'scale-100');
                        });

                        if (isHidden) {
                            // Tampilkan dengan animasi smooth
                            userDropdown.classList.remove('hidden');
                            requestAnimationFrame(() => {
                                userDropdown.classList.remove('opacity-0', 'scale-95');
                                userDropdown.classList.add('opacity-100', 'scale-100');
                            });
                        } else {
                            // Tutup dengan animasi halus
                            userDropdown.classList.remove('opacity-100', 'scale-100');
                            userDropdown.classList.add('opacity-0', 'scale-95');
                            setTimeout(() => userDropdown.classList.add('hidden'), 150);
                        }
                    });

                    // Klik di luar area menutup dropdown
                    document.addEventListener('click', (e) => {
                        if (!userMenuButton.contains(e.target) && !userDropdown.contains(e.target)) {
                            userDropdown.classList.remove('opacity-100', 'scale-100');
                            userDropdown.classList.add('opacity-0', 'scale-95');
                            setTimeout(() => userDropdown.classList.add('hidden'), 150);
                        }
                    });
                });
            </script>
        @endauth
    </div>
</nav>
