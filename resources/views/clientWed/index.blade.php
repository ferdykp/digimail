@extends('layout.master')

@section('content')
    <div class="max-w-3xl p-8 mx-auto mt-10 bg-white shadow-md rounded-xl">
        <h2 class="mb-6 text-2xl font-bold text-center text-gray-700">Wedding Information Form</h2>

        <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            {{-- Groom Section --}}
            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label for="groom" class="block mb-1 text-sm font-medium text-gray-600">Groom</label>
                    <input type="text" name="groom" id="groom"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>

                <div>
                    <label for="groomParent" class="block mb-1 text-sm font-medium text-gray-600">Groom Parent</label>
                    <input type="text" name="groomParent" id="groomParent"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>
            </div>

            {{-- Bride Section --}}
            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label for="bride" class="block mb-1 text-sm font-medium text-gray-600">Bride</label>
                    <input type="text" name="bride" id="bride"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-400 focus:outline-none">
                </div>

                <div>
                    <label for="brideParent" class="block mb-1 text-sm font-medium text-gray-600">Bride Parent</label>
                    <input type="text" name="brideParent" id="brideParent"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-400 focus:outline-none">
                </div>
            </div>

            {{-- Wedding Details --}}
            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label for="weddingDate" class="block mb-1 text-sm font-medium text-gray-600">Wedding Date</label>
                    <input type="datetime-local" name="weddingDate" id="weddingDate"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                </div>

                <div>
                    <label for="location" class="block mb-1 text-sm font-medium text-gray-600">Location</label>
                    <input type="text" name="location" id="location"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                </div>
            </div>

            <div>
                <label for="mapLink" class="block mb-1 text-sm font-medium text-gray-600">Map Link</label>
                <input type="url" name="mapLink" id="mapLink"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none"
                    placeholder="https://maps.google.com/...">
            </div>

            {{-- Upload --}}
            <div>
                <label for="pictwed" class="block mb-1 text-sm font-medium text-gray-600">Pre-Wedding Photo</label>
                <input type="file" name="pictwed" id="pictwed"
                    class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer focus:outline-none">
            </div>

            {{-- Story --}}
            <div>
                <label for="story" class="block mb-1 text-sm font-medium text-gray-600">Love Story</label>
                <textarea name="story" id="story" rows="4"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-400 focus:outline-none"
                    placeholder="Tell your story..."></textarea>
            </div>

            {{-- Rekening --}}
            <div>
                <label for="norek" class="block mb-1 text-sm font-medium text-gray-600">Account Number</label>
                <input type="text" name="norek" id="norek"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none">
            </div>

            {{-- Submit Button --}}
            <div class="pt-4 text-center">
                <button type="submit"
                    class="px-6 py-2 text-white transition-all bg-blue-600 rounded-lg shadow-md hover:bg-blue-700">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
