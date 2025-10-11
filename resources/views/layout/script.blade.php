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
