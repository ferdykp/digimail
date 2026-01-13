<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Wedding Invitation Preview</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@400;600&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Playfair Display', serif;
        }

        /* 🌸 Floating petals */
        .petal {
            position: absolute;
            width: 14px;
            height: 14px;
            background: radial-gradient(circle, #fda4af, #fb7185);
            border-radius: 50% 50% 50% 0;
            transform: rotate(45deg);
            opacity: .25;
            animation: float 12s linear infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(45deg);
                opacity: 0;
            }

            20% {
                opacity: .3;
            }

            100% {
                transform: translateY(-120vh) rotate(405deg);
                opacity: 0;
            }
        }

        /* ✨ Entrance animation */
        .fade-up {
            animation: fadeUp 1.2s ease-out both;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* 💗 Glow border */
        .glow {
            box-shadow: 0 0 40px rgba(251, 113, 133, .25);
        }

        /* 🌸 Decorative corners */
        .corner {
            position: absolute;
            width: 80px;
            height: 80px;
            border: 2px solid #fda4af;
            opacity: .4;
        }

        .corner.tl {
            top: 16px;
            left: 16px;
            border-right: none;
            border-bottom: none;
        }

        .corner.br {
            bottom: 16px;
            right: 16px;
            border-left: none;
            border-top: none;
        }
    </style>
</head>

<body
    class="relative flex items-center justify-center min-h-screen overflow-hidden bg-gradient-to-br from-rose-50 via-pink-100 to-rose-200">

    <!-- 🌸 Petals -->
    <div class="petal" style="left:10%; animation-delay:0s"></div>
    <div class="petal" style="left:30%; animation-delay:3s"></div>
    <div class="petal" style="left:55%; animation-delay:6s"></div>
    <div class="petal" style="left:80%; animation-delay:9s"></div>

    <!-- 💌 Card -->
    <div id="previewCard"
        class="relative w-full max-w-md p-10 text-center border bg-white/80 backdrop-blur-xl glow rounded-3xl border-rose-200 fade-up">

        <!-- Decorative corners -->
        <div class="corner tl"></div>
        <div class="corner br"></div>

        <!-- Header -->
        <h2 class="text-xs tracking-[0.3em] uppercase text-rose-400">
            Wedding Invitation
        </h2>

        <h1 class="mt-2 mb-6 text-5xl font-[Great_Vibes] text-rose-600">
            Save The Date
        </h1>

        <!-- Couple -->
        <div class="mb-6 space-y-1">
            <h3 id="groom" class="text-3xl font-[Great_Vibes] text-gray-800">
                Nama Mempelai Pria
            </h3>
            <p id="groomParents" class="text-xs italic text-gray-500">
                Putra dari Bapak & Ibu
            </p>

            <p class="my-2 text-xl text-rose-400">&</p>

            <h3 id="bride" class="text-3xl font-[Great_Vibes] text-gray-800">
                Nama Mempelai Wanita
            </h3>
            <p id="brideParents" class="text-xs italic text-gray-500">
                Putri dari Bapak & Ibu
            </p>
        </div>

        <!-- Photo -->
        <img id="photo"
            class="hidden object-cover w-full h-56 my-6 transition-all duration-700 border shadow-lg rounded-2xl border-rose-200 hover:scale-105" />

        <!-- Date & Location -->
        <div class="my-6 space-y-1">
            <p id="date" class="text-lg font-semibold text-rose-600"></p>
            <p id="location" class="text-sm text-gray-600"></p>
            <a id="map" href="#" target="_blank"
                class="hidden inline-block mt-1 text-xs text-blue-500 underline hover:text-blue-600">
                📍 Lihat lokasi di Google Maps
            </a>
        </div>

        <!-- Story -->
        <div class="mt-6">
            <h4 class="mb-2 text-lg font-semibold text-gray-700">
                Our Love Story
            </h4>
            <p id="story" class="text-sm italic leading-relaxed text-gray-600">
                Ceritakan kisah cinta kalian...
            </p>
        </div>

        <!-- Gift -->
        <div class="mt-6">
            <p id="rek" class="text-sm font-medium text-gray-700"></p>
        </div>

        <!-- Footer -->
        <p class="mt-8 text-xs italic text-gray-400">
            risen+ wedding template
        </p>
    </div>

    <script>
        window.addEventListener('message', event => {
            const data = event.data;

            groom.textContent = data.groom || groom.textContent;
            groomParents.textContent = data.groomParents || groomParents.textContent;
            bride.textContent = data.bride || bride.textContent;
            brideParents.textContent = data.brideParents || brideParents.textContent;
            location.textContent = data.location || location.textContent;
            story.textContent = data.story || story.textContent;

            if (data.weddingDate) {
                date.textContent = new Date(data.weddingDate).toLocaleString('id-ID', {
                    weekday: 'long',
                    day: 'numeric',
                    month: 'long',
                    year: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit'
                });
            }

            if (data.mapLink) {
                map.href = data.mapLink;
                map.classList.remove('hidden');
            }

            if (data.norek) {
                rek.textContent = `🎁 Hadiah Digital: ${data.norek}`;
            }

            if (data.pictwed instanceof File) {
                const reader = new FileReader();
                reader.onload = e => {
                    photo.src = e.target.result;
                    photo.classList.remove('hidden');
                };
                reader.readAsDataURL(data.pictwed);
            }
        });
    </script>

</body>

</html>
