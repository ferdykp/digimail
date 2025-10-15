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

    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        lucide.createIcons();
    </script>

    {{-- Animation Transition Our Feature --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const cards = document.querySelectorAll(".feature-card");

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Hilangkan efek awal
                        entry.target.classList.remove("opacity-0", "translate-y-10", "scale-95",
                            "blur-sm");
                        // Tambahkan efek jadi terlihat
                        entry.target.classList.add("opacity-100", "translate-y-0", "scale-100",
                            "blur-0");
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.15
            });

            cards.forEach((card, i) => {
                observer.observe(card);
                card.style.transitionDelay = `${i * 100}ms`; // jeda antar kartu
            });
        });
    </script>


    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // durasi animasi (ms)
            once: true, // animasi hanya muncul sekali
        });
    </script>
