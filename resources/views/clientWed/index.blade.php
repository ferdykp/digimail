@extends('layout.master')

@section('content')
    <section id="clientWed" class="bg-[#FFF9F6] min-h-screen py-16 px-6">
        {{-- 🌸 PROGRESS BAR AREA --}}
        <div class="mt-10 bg-white border border-gray-100 shadow-xl rounded-2xl">
            <div class="left-0 right-0 px-6 py-16 ">
                <div class="max-w-5xl mx-auto">
                    <div class="relative flex items-center justify-between">

                        {{-- Step 1 --}}
                        <div class="z-10 flex flex-col items-center">
                            <div
                                class="flex items-center justify-center w-12 h-12 font-semibold text-white rounded-full shadow-lg bg-gradient-to-r from-pink-400 to-rose-400 ring-4 ring-pink-100">
                                1
                            </div>
                            <p class="mt-2 text-sm font-medium text-pink-600">Data Mempelai</p>
                        </div>

                        {{-- Garis progress animasi --}}
                        <div class="absolute top-6 left-[12.5%] right-[12.5%] h-1 bg-gray-200 rounded-full">
                            <div
                                class="h-1 bg-gradient-to-r from-pink-400 via-rose-300 to-amber-200 rounded-full animate-[progress_1.5s_ease-in-out_forwards]">
                            </div>
                        </div>

                        {{-- Step 2 --}}
                        <div class="z-10 flex flex-col items-center">
                            <div
                                class="flex items-center justify-center w-12 h-12 font-semibold text-gray-500 bg-gray-200 rounded-full shadow-md">
                                2
                            </div>
                            <p class="mt-2 text-sm font-medium text-gray-400">Daftar Tamu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative p-10 mt-10 bg-white border border-gray-100 shadow-xl max-w-8xl rounded-2xl md:flex md:gap-10">
            {{-- FORM SECTION --}}
            <div class="w-full mt-20 md:w-2/3">
                <h2 class="mb-8 text-3xl font-bold text-gray-800">Wedding Information Form</h2>

                <form id="weddingForm" action="{{ route('clientWed.store') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-6">
                    @csrf

                    {{-- Groom Section --}}
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label for="groom" class="block mb-2 text-sm font-semibold text-gray-700">Groom</label>
                            <input type="text" name="groom" id="groom" value="{{ old('groom') }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-400 focus:outline-none">
                            @error('groom')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="groomParent" class="block mb-2 text-sm font-semibold text-gray-700">Groom
                                Parents</label>
                            <input type="text" name="groomParent" id="groomParent" value="{{ old('groomParent') }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-400 focus:outline-none">
                            @error('groomParent')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Bride Section --}}
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label for="bride" class="block mb-2 text-sm font-semibold text-gray-700">Bride</label>
                            <input type="text" name="bride" id="bride" value="{{ old('bride') }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-rose-400 focus:outline-none">
                            @error('bride')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="brideParent" class="block mb-2 text-sm font-semibold text-gray-700">Bride
                                Parents</label>
                            <input type="text" name="brideParent" id="brideParent" value="{{ old('brideParent') }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-rose-400 focus:outline-none">
                            @error('brideParent')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Wedding Details --}}
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label for="weddingDate" class="block mb-2 text-sm font-semibold text-gray-700">Wedding
                                Date</label>
                            <input type="datetime-local" name="weddingDate" id="weddingDate"
                                value="{{ old('weddingDate') }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-300 focus:outline-none">
                            @error('weddingDate')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="location" class="block mb-2 text-sm font-semibold text-gray-700">Location</label>
                            <input type="text" name="location" id="location" value="{{ old('location') }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-300 focus:outline-none">
                            @error('location')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Map Link --}}
                    <div>
                        <label for="mapLink" class="block mb-2 text-sm font-semibold text-gray-700">Google Map Link</label>
                        <input type="url" name="mapLink" id="mapLink" value="{{ old('mapLink') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-300 focus:outline-none"
                            placeholder="https://maps.google.com/...">
                        @error('mapLink')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Upload --}}
                    <div>
                        <label for="pictwed" class="block mb-2 text-sm font-semibold text-gray-700">Pre-Wedding
                            Photo</label>
                        <input type="file" name="pictwed" id="pictwed"
                            class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer focus:outline-none bg-gray-50">
                        @error('pictwed')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Story --}}
                    <div>
                        <label for="story" class="block mb-2 text-sm font-semibold text-gray-700">Love Story</label>
                        <textarea name="story" id="story" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-rose-300 focus:outline-none"
                            placeholder="Ceritakan kisah cinta kalian...">{{ old('story') }}</textarea>
                        @error('story')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Rekening --}}
                    <div>
                        <label for="norek" class="block mb-2 text-sm font-semibold text-gray-700">Account Number</label>
                        <input type="text" name="norek" id="norek" value="{{ old('norek') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-300 focus:outline-none"
                            placeholder="Nomor rekening untuk hadiah digital">
                        @error('norek')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Submit Button --}}
                    <div class="pt-6 text-center">
                        <button type="submit"
                            class="px-8 py-2 text-lg font-semibold text-white transition-all rounded-lg shadow-md bg-gradient-to-r from-pink-400 via-rose-400 to-amber-300 hover:opacity-90 hover:shadow-lg">
                            Lanjut ke Daftar Tamu →
                        </button>
                    </div>
                </form>
            </div>

            {{-- RIGHT SIDE --}}
            {{-- <div
                class="items-center justify-center hidden w-1/3 border border-gray-200 border-dashed md:flex bg-gradient-to-br from-pink-50 to-rose-50 rounded-xl">
                <p class="italic text-gray-400">Wedding preview area (coming soon)</p>
            </div> --}}
            <div class="hidden w-1/3 md:block">
                <iframe id="previewFrame" src="{{ route('preview.wedding') }}"
                    class="w-full h-[85vh] border border-gray-200 rounded-xl shadow-inner bg-white"></iframe>
            </div>
        </div>

        {{-- Animasi progress --}}
        <style>
            @keyframes progress {
                from {
                    width: 0%;
                }

                to {
                    width: 50%;
                }
            }
        </style>
    </section>

    {{-- Realtime update ke iframe --}}
    @push('scripts')
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                const form = document.getElementById('weddingForm');
                const iframe = document.getElementById('previewFrame');

                form.addEventListener('input', () => {
                    const data = new FormData(form);
                    const values = Object.fromEntries(data.entries());
                    iframe.contentWindow.postMessage(values, '*');
                });

                // Untuk file (gambar prewedding)
                form.addEventListener('change', (event) => {
                    const data = new FormData(form);
                    const values = Object.fromEntries(data.entries());
                    values.pictwed = form.pictwed.files[0]; // kirim file-nya
                    iframe.contentWindow.postMessage(values, '*');
                });
            });
        </script>
    @endpush
@endsection
