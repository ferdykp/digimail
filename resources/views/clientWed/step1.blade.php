@extends('layout.master')

@section('content')
    <section class="min-h-screen px-3">
        @include('clientWed.partials.progress', ['step' => 1])

        <div class="max-w-4xl p-10 mx-auto mt-10 bg-white shadow rounded-2xl">
            <h2 class="mb-6 text-2xl font-bold">Mempelai Pria</h2>

            <form action="{{ route('clientWed.step1') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block mb-1">Nama Mempelai Pria</label>
                    <input name="groom" value="{{ old('groom', session('wedding.step1.groom')) }}"
                        class="w-full px-4 py-2 border rounded">
                </div>

                <div class="mb-6">
                    <label class="block mb-1">Nama Orang Tua</label>
                    <input name="groomParents" value="{{ old('groomParents', session('wedding.step1.groomParents')) }}"
                        class="w-full px-4 py-2 border rounded">
                </div>

                <button class="px-6 py-2 text-white bg-pink-500 rounded">
                    Next →
                </button>
            </form>
        </div>
        <div class="hidden md:block">
            <iframe id="previewFrame" src="{{ route('preview.wedding') }}"
                class="w-full h-[70vh] border rounded-xl shadow-inner">
            </iframe>
        </div>
    </section>
@endsection
