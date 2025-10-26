<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Wedding Preview</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body class="flex items-center justify-center min-h-screen bg-gradient-to-br from-pink-50 to-rose-50">

    <div id="previewCard" class="bg-white p-8 rounded-2xl shadow-lg text-center w-[90%] max-w-md border border-pink-100">
        <h2 class="mb-1 text-2xl font-semibold text-rose-500">Wedding Invitation</h2>
        <p class="mb-6 text-sm italic text-gray-400">You're cordially invited to celebrate the union of</p>

        <h3 id="groom" class="text-3xl font-[Great Vibes] text-gray-800">[Nama Mempelai Pria]</h3>
        <p class="text-gray-500">&</p>
        <h3 id="bride" class="text-3xl font-[Great Vibes] text-gray-800 mb-4">[Nama Mempelai Wanita]</h3>

        <img id="photo" class="hidden object-cover w-full h-48 mb-6 border rounded-xl border-rose-100" />

        <p id="date" class="text-lg font-medium text-rose-600">[Tanggal Pernikahan]</p>
        <p id="location" class="mb-2 text-gray-600">[Lokasi Acara]</p>
        <a id="map" href="#" target="_blank" class="hidden text-sm text-blue-500 underline">Lihat lokasi</a>

        <div class="mt-6">
            <h4 class="mb-2 text-lg font-semibold text-gray-700">Our Love Story</h4>
            <p id="story" class="text-sm italic text-gray-600">[Ceritakan kisah cinta kalian...]</p>
        </div>

        <p id="rek" class="mt-6 text-sm font-medium text-gray-700"></p>
        <p class="mt-6 text-xs italic text-gray-400">risen+ wedding template</p>
    </div>

    <script>
        window.addEventListener('message', event => {
            const data = event.data;

            document.getElementById('groom').textContent = data.groom || '[Nama Mempelai Pria]';
            document.getElementById('bride').textContent = data.bride || '[Nama Mempelai Wanita]';
            document.getElementById('location').textContent = data.location || '[Lokasi Acara]';
            document.getElementById('story').textContent = data.story || '[Ceritakan kisah cinta kalian...]';

            if (data.weddingDate) {
                const formatted = new Date(data.weddingDate).toLocaleString('id-ID', {
                    weekday: 'long',
                    day: 'numeric',
                    month: 'long',
                    year: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit'
                });
                document.getElementById('date').textContent = formatted;
            }

            if (data.mapLink) {
                const map = document.getElementById('map');
                map.href = data.mapLink;
                map.classList.remove('hidden');
            }

            if (data.norek) {
                document.getElementById('rek').textContent = `🎁 Hadiah Digital: ${data.norek}`;
            }

            if (data.pictwed instanceof File) {
                const reader = new FileReader();
                reader.onload = e => {
                    const img = document.getElementById('photo');
                    img.src = e.target.result;
                    img.classList.remove('hidden');
                };
                reader.readAsDataURL(data.pictwed);
            }
        });
    </script>
</body>

</html>
