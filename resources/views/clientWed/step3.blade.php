@extends('layout.master')

@section('content')
    <section class="min-h-screen px-3">
        @include('clientWed.partials.progress', ['step' => 3])

        <div class="max-w-4xl p-10 mx-auto mt-10 bg-white shadow rounded-2xl">
            <h2 class="mb-6 text-2xl font-bold">Detail Pernikahan</h2>

            <form action="{{ route('clientWed.final') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="datetime-local" name="weddingDate" class="w-full px-4 py-2 mb-4 border rounded">
                <input type="text" name="location" class="w-full px-4 py-2 mb-4 border rounded">
                <input type="url" name="mapLink" class="w-full px-4 py-2 mb-4 border rounded">
                <textarea name="story" class="w-full px-4 py-2 mb-4 border rounded"></textarea>
                <input type="text" name="norek" class="w-full px-4 py-2 mb-4 border rounded">
                <input type="file" name="pictwed" class="w-full mb-6">

                <div class="flex justify-between">
                    <a href="{{ route('clientWed.step2') }}" class="text-gray-500">← Back</a>
                    <button class="px-6 py-2 text-white bg-pink-600 rounded">
                        Finish 🎉
                    </button>
                </div>
            </form>
        </div>
        <div class="hidden md:block">
            <iframe id="previewFrame" src="{{ route('preview.wedding') }}"
                class="w-full h-[70vh] border rounded-xl shadow-inner">
            </iframe>
        </div>
    </section>
@endsection
