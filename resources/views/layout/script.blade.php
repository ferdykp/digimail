    <script src="https://unpkg.com/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script>
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const toggle = document.getElementById('sidebarToggle');
        const toggleIcon = document.getElementById('toggleIcon');

        // Toggle Sidebar
        toggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');

            // Ganti ikon (bars <-> xmark)
            if (sidebar.classList.contains('-translate-x-full')) {
                toggleIcon.classList.replace('fa-xmark', 'fa-bars');
            } else {
                toggleIcon.classList.replace('fa-bars', 'fa-xmark');
            }
        });

        // Tutup sidebar jika overlay diklik
        overlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
            toggleIcon.classList.replace('fa-xmark', 'fa-bars');
        });

        // Pastikan sidebar tampil di desktop
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.add('hidden');
                toggleIcon.classList.replace('fa-xmark', 'fa-bars');
            }
        });
    </script>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    // Durasi scroll (dalam milidetik)
                    const duration = 1000; // 1.2 detik — bisa ubah ke 2000 untuk lebih lambat
                    const startPosition = window.scrollY;
                    const targetPosition = targetElement.getBoundingClientRect().top;
                    const startTime = performance.now();

                    function easeInOutQuad(t) {
                        return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
                    }

                    function scrollAnimation(currentTime) {
                        const elapsed = currentTime - startTime;
                        const progress = Math.min(elapsed / duration, 1);
                        const ease = easeInOutQuad(progress);
                        window.scrollTo(0, startPosition + targetPosition * ease);

                        if (elapsed < duration) {
                            requestAnimationFrame(scrollAnimation);
                        }
                    }

                    requestAnimationFrame(scrollAnimation);
                }
            });
        });
    </script>

    <script>
        document.addEventListener("scroll", function() {
            const navbar = document.getElementById("mainNavbar");
            const logoContainer = navbar.querySelector("div");

            if (window.scrollY > 50) {
                // Saat di-scroll ke bawah
                navbar.classList.remove("bg-[#FFF8F0]/90");
                navbar.classList.add("bg-transparent", "backdrop-blur-none");

                logoContainer.classList.remove("bg-[#FDFDFD]/90");
                logoContainer.classList.add("bg-transparent", "border-transparent", "shadow-none");
            } else {
                // Saat kembali ke atas
                navbar.classList.add("bg-[#FFF8F0]/90");
                navbar.classList.remove("bg-transparent", "backdrop-blur-none");

                logoContainer.classList.add("bg-[#FDFDFD]/90");
                logoContainer.classList.remove("bg-transparent", "border-transparent", "shadow-none");
            }
        });
    </script>
