@extends('layout.master')
@section('content')
    <section class="p-4 space-y-6">
        {{-- Header
        <div class="p-3 bg-[#EEC9B7] rounded-md flex justify-between items-center">
            <h2 class="text-lg font-semibold text-[#4A4A4A]">Dashboard Undangan</h2>

            @auth
                <div class="relative inline-block text-left">
                    <button id="userMenuButton"
                        class="flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-[#4A4A4A] bg-[#FFF8F4] rounded-lg hover:bg-[#F3D3C1] focus:outline-none focus:ring-2 focus:ring-[#D79A74]">
                        <i class="fa-solid fa-user-check text-[#4A4A4A]"></i>
                        <span>{{ Auth::user()->name }}</span>
                        <i class="text-xs fa-solid fa-chevron-down"></i>
                    </button>

                    <div id="userDropdown"
                        class="absolute right-0 hidden w-40 mt-2 bg-white border border-gray-100 rounded-lg shadow-md">
                        <a href="{{ url('/settings') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F3D3C1] rounded-t-lg">
                            <i class="mr-2 fa-solid fa-gear"></i> Setting
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-[#F3D3C1] rounded-b-lg">
                                <i class="mr-2 fa-solid fa-right-from-bracket"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const userMenuButton = document.getElementById('userMenuButton');
                        const userDropdown = document.getElementById('userDropdown');

                        userMenuButton.addEventListener('click', () => {
                            userDropdown.classList.toggle('hidden');
                        });

                        document.addEventListener('click', (e) => {
                            if (!userMenuButton.contains(e.target) && !userDropdown.contains(e.target)) {
                                userDropdown.classList.add('hidden');
                            }
                        });
                    });
                </script>
            @endauth
        </div> --}}

        {{-- Statistik --}}
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
            <div class="p-4 bg-[#FFF8F4] rounded-xl shadow-md flex items-center gap-3">
                <i class="fa-solid fa-user-group text-[#C98763] text-3xl"></i>
                <div>
                    <h3 class="text-lg font-semibold text-[#4A4A4A]">Tamu</h3>
                    <p class="text-sm text-gray-600">{{ $totalGuests }} Terdaftar</p>
                </div>
            </div>
            <div class="p-4 bg-[#FFF8F4] rounded-xl shadow-md flex items-center gap-3">
                <i class="fa-solid fa-envelope-open-text text-[#C98763] text-3xl"></i>
                <div>
                    <h3 class="text-lg font-semibold text-[#4A4A4A]">Undangan Terkirim</h3>
                    <p class="text-sm text-gray-600">{{ $openedInvites }} Sudah dibuka</p>
                </div>
            </div>
            <div class="p-4 bg-[#FFF8F4] rounded-xl shadow-md flex items-center gap-3">
                <i class="fa-solid fa-heart text-[#C98763] text-3xl"></i>
                <div>
                    <h3 class="text-lg font-semibold text-[#4A4A4A]">Ucapan Masuk</h3>
                    <p class="text-sm text-gray-600">{{ $totalWishes }} Pesan</p>
                </div>
            </div>
        </div>

        {{-- Daftar Undangan --}}
        <div class="bg-[#FFF8F4] rounded-xl shadow-md p-5">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-[#4A4A4A]">Undangan Saya</h3>
                <a href="{{ route('clientWed.create') }}"
                    class="px-4 py-2 bg-[#D79A74] hover:bg-[#C98763] text-white rounded-md text-sm font-medium shadow transition">
                    <i class="mr-1 fa-solid fa-plus"></i> Buat Undangan
                </a>
            </div>

            @if ($clients->count() > 0)
                <div class="overflow-x-auto">
                    <table class="w-full text-left border border-[#EEC9B7] rounded-lg overflow-hidden">
                        <thead class="bg-[#EEC9B7]/60 text-[#4A4A4A]">
                            <tr>
                                <th class="p-3 text-sm font-semibold">Nama Acara</th>
                                <th class="p-3 text-sm font-semibold">Tanggal</th>
                                <th class="p-3 text-sm font-semibold">Status</th>
                                <th class="p-3 text-sm font-semibold text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $item)
                                <tr>
                                    <td class="p-3">{{ $item->groom }} & {{ $item->bride }}</td>
                                    <td class="p-3">{{ \Carbon\Carbon::parse($item->weddingDate)->format('d F Y') }}</td>
                                    <td class="p-3">
                                        <span
                                            class="px-2 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full">Aktif</span>
                                    </td>
                                    <td class="flex justify-center gap-2 p-3">
                                        <a href="{{ route('clientWed.show', $item->id) }}"
                                            class="text-sm text-blue-600 hover:text-blue-800">
                                            <i class="fa-solid fa-eye"></i> Preview
                                        </a>
                                        <a href="{{ route('clientWed.edit', $item->id) }}"
                                            class="text-sm text-yellow-600 hover:text-yellow-800">
                                            <i class="fa-solid fa-pen-to-square"></i> Edit
                                        </a>
                                        <form action="{{ route('clientWed.destroy', $item->id) }}" method="POST"
                                            onsubmit="return confirm('Yakin hapus undangan ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-sm text-red-600 hover:text-red-800">
                                                <i class="fa-solid fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="flex flex-col items-center justify-center py-10 text-center text-gray-600">
                    <i class="fa-solid fa-circle-exclamation text-[#D79A74] text-4xl mb-3"></i>
                    <p class="text-base font-medium">Belum ada data undangan</p>
                    <p class="mb-3 text-sm">Yuk buat undangan pertamamu sekarang!</p>
                    <a href="{{ route('clientWed.index') }}"
                        class="px-5 py-2 bg-[#D79A74] hover:bg-[#C98763] text-white rounded-md shadow transition">
                        <i class="mr-1 fa-solid fa-plus"></i> Buat Undangan
                    </a>
                </div>
            @endif
        </div>
    </section>
@endsection
