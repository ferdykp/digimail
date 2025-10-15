@extends('layout.master')

@section('content')
    <section id="clientWed" class="bg-[#FFF9F6] min-h-screen py-16 px-6">
        <div class="p-10 mt-10 bg-white border border-gray-100 shadow-xl max-w-8xl rounded-2xl md:flex md:gap-10">

            {{-- FORM SECTION (Kiri) --}}
            <div class="w-full md:w-2/3">
                <h2 class="mb-8 text-3xl font-bold text-gray-800">Wedding Information Form</h2>

                <form action="{{ route('clientWed.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    {{-- Groom Section --}}
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label for="groom" class="block mb-2 text-sm font-semibold text-gray-700">Groom</label>
                            <input type="text" name="groom" id="groom" value="{{ old('groom') }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                            @error('groom')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="groomParent" class="block mb-2 text-sm font-semibold text-gray-700">Groom
                                Parents</label>
                            <input type="text" name="groomParent" id="groomParent" value="{{ old('groomParent') }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
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
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-400 focus:outline-none">
                            @error('bride')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="brideParent" class="block mb-2 text-sm font-semibold text-gray-700">Bride
                                Parents</label>
                            <input type="text" name="brideParent" id="brideParent" value="{{ old('brideParent') }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-400 focus:outline-none">
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
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                            @error('weddingDate')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="location" class="block mb-2 text-sm font-semibold text-gray-700">Location</label>
                            <input type="text" name="location" id="location" value="{{ old('location') }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                            @error('location')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Map Link --}}
                    <div>
                        <label for="mapLink" class="block mb-2 text-sm font-semibold text-gray-700">Google Map Link</label>
                        <input type="url" name="mapLink" id="mapLink" value="{{ old('mapLink') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none"
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
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-400 focus:outline-none"
                            placeholder="Ceritakan kisah cinta kalian...">{{ old('story') }}</textarea>
                        @error('story')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Rekening --}}
                    <div>
                        <label for="norek" class="block mb-2 text-sm font-semibold text-gray-700">Account Number</label>
                        <input type="text" name="norek" id="norek" value="{{ old('norek') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                            placeholder="Nomor rekening untuk hadiah digital">
                        @error('norek')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Submit Button --}}
                    <div class="pt-6 text-center">
                        <button type="submit"
                            class="px-8 py-2 text-lg font-semibold text-white transition-all rounded-lg shadow-md bg-gradient-to-r from-blue-500 to-indigo-500 hover:opacity-90 hover:shadow-lg">
                            Submit
                        </button>
                    </div>
                </form>
            </div>

            {{-- EMPTY RIGHT AREA (kanan, untuk keseimbangan visual atau ilustrasi di masa depan) --}}
            <div
                class="items-center justify-center hidden w-1/3 border border-gray-200 border-dashed md:flex bg-gradient-to-br from-pink-50 to-blue-50 rounded-xl">
                <p class="italic text-gray-400">Wedding preview area (coming soon)</p>
            </div>
        </div>
    </section>
@endsection
