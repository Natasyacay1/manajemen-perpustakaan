<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Katalog Buku Perpustakaan') }}
        </h2>
    </x-slot>

    <div class="py-8 bg-slate-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm rounded-xl p-6">
                @if ($books->count())
                    <div class="grid gap-4 md:grid-cols-3">
                        @foreach ($books as $book)
                            <div class="border rounded-lg p-4 bg-slate-50">
                                <h4 class="font-semibold text-base mb-1">{{ $book->judul }}</h4>
                                <p class="text-xs text-gray-600 mb-1">
                                    {{ $book->penulis ?? '-' }} — {{ $book->penerbit ?? '-' }}
                                </p>
                                <p class="text-xs text-gray-500 mb-2">
                                    Kategori: {{ $book->kategori ?? '-' }}
                                </p>
                                <p class="text-xs mb-2">
                                    Stok: <span class="font-semibold">{{ $book->stok }}</span>
                                </p>

                                @guest
                                    <a href="{{ route('login') }}" class="text-xs text-blue-600 underline">
                                        Login untuk meminjam
                                    </a>
                                @else
                                    @if (Auth::user()->role === 'mahasiswa')
                                        <button class="text-xs px-3 py-1 rounded bg-blue-600 text-white">
                                            Pinjam (nanti dihubungkan ke fitur peminjaman)
                                        </button>
                                    @endif
                                @endguest
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-4">
                        {{ $books->links() }}
                    </div>
                @else
                    <p class="text-sm text-gray-600">Belum ada data buku.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
