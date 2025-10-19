@extends('layout.master')

@section('content')
    <section id="invitation" class="py-20 bg-[#FFF9F6]">
        <div class="max-w-6xl px-6 mx-auto">
            {{-- Header --}}
            <div class="mb-10 text-center">
                <h2 class="mb-2 text-4xl font-bold text-gray-800">You're Invited!</h2>
                <p class="text-gray-600">Celebrate the wedding of</p>
                <h3 class="text-3xl font-semibold text-[#C17B63] mt-2">
                    {{ $client->groom }} &amp; {{ $client->bride }}
                </h3>
                <p class="mt-1 text-gray-500">
                    {{ \Carbon\Carbon::parse($client->weddingDate)->format('l, d F Y') }}
                </p>
                <p class="text-gray-500">{{ $client->location }}</p>
            </div>

            {{-- Layout dua kolom --}}
            <div class="grid grid-cols-1 gap-10 md:grid-cols-2">
                {{-- Kolom kiri: Form ucapan --}}
                <div class="p-8 bg-white shadow-lg rounded-xl">
                    <h4 class="mb-6 text-2xl font-semibold text-gray-700">Confirm Your Attendance</h4>

                    @if (session('success'))
                        <div class="p-4 mb-4 text-green-700 bg-green-100 border border-green-200 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('guest.store') }}" method="POST" class="space-y-5">
                        @csrf

                        <input type="hidden" name="clientWed_id" value="{{ $client->id }}">

                        {{-- Name --}}
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-600">Full Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-[#C17B63] focus:outline-none">
                            @error('name')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- WhatsApp Number --}}
                        <div>
                            <label for="noWa" class="block text-sm font-medium text-gray-600">WhatsApp Number</label>
                            <input type="text" id="noWa" name="noWa" value="{{ old('noWa') }}"
                                class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-[#C17B63] focus:outline-none"
                                placeholder="08xxxxxxxxxx">
                            @error('noWa')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Attendance --}}
                        <div>
                            <label class="block mb-1 text-sm font-medium text-gray-600">Will you attend?</label>
                            <div class="flex gap-6">
                                <label class="flex items-center gap-2">
                                    <input type="radio" name="is_attending" value="1"
                                        class="text-[#C17B63] focus:ring-[#C17B63]"
                                        {{ old('is_attending') == '1' ? 'checked' : '' }}>
                                    <span>Yes</span>
                                </label>
                                <label class="flex items-center gap-2">
                                    <input type="radio" name="is_attending" value="0"
                                        class="text-[#C17B63] focus:ring-[#C17B63]"
                                        {{ old('is_attending') == '0' ? 'checked' : '' }}>
                                    <span>Sorry, I can’t</span>
                                </label>
                            </div>
                            @error('is_attending')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Message --}}
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-600">Your Message</label>
                            <textarea id="message" name="message" rows="4"
                                class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-[#C17B63] focus:outline-none"
                                placeholder="Write your wishes here...">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Submit --}}
                        <div class="text-right">
                            <button type="submit"
                                class="px-6 py-2 text-white bg-[#C17B63] rounded-lg shadow hover:bg-[#a9684e] transition-all">
                                Send
                            </button>
                        </div>
                    </form>
                </div>

                {{-- Kolom kanan: Daftar ucapan --}}
                <div class="bg-white p-8 rounded-xl shadow-lg overflow-y-auto max-h-[600px]">
                    <h4 class="mb-6 text-2xl font-semibold text-gray-700">Guest Wishes</h4>

                    @forelse ($guests as $guest)
                        <div class="pb-4 mb-4 border-b">
                            <p class="font-semibold text-gray-800">{{ $guest->name }}</p>
                            <p class="text-sm text-gray-600">
                                @if ($guest->is_attending)
                                    <span class="font-medium text-green-600">✔ Attending</span>
                                @else
                                    <span class="font-medium text-red-500">✘ Not Attending</span>
                                @endif
                            </p>
                            <p class="mt-2 text-gray-700">{{ $guest->message }}</p>
                        </div>
                    @empty
                        <p class="text-center text-gray-500">No messages yet. Be the first to write one!</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection
