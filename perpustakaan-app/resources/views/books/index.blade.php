<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Buku') }}
        </h2>
    </x-slot>

    <div class="py-8 bg-slate-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">

            <div class="bg-white shadow-sm rounded-xl p-6">
                <h3 class="font-semibold mb-3">Tambah Buku</h3>

                @if (session('success'))
                    <div class="mb-3 text-sm text-emerald-700 bg-emerald-50 border border-emerald-200 rounded px-3 py-2">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ url()->current() }}" method="POST" class="grid md:grid-cols-2 gap-4">
                    @csrf
                    <div>
                        <label class="text-sm">Kode Buku</label>
                        <input type="text" name="kode_buku" class="mt-1 w-full border rounded px-2 py-1 text-sm">
                    </div>
                    <div>
                        <label class="text-sm">Judul</label>
                        <input type="text" name="judul" class="mt-1 w-full border rounded px-2 py-1 text-sm">
                    </div>
                    <div>
                        <label class="text-sm">Penulis</label>
                        <input type="text" name="penulis" class="mt-1 w-full border rounded px-2 py-1 text-sm">
                    </div>
                    <div>
                        <label class="text-sm">Penerbit</label>
                        <input type="text" name="penerbit" class="mt-1 w-full border rounded px-2 py-1 text-sm">
                    </div>
                    <div>
                        <label class="text-sm">Tahun Terbit</label>
                        <input type="number" name="tahun_terbit" class="mt-1 w-full border rounded px-2 py-1 text-sm">
                    </div>
                    <div>
                        <label class="text-sm">Kategori</label>
                        <input type="text" name="kategori" class="mt-1 w-full border rounded px-2 py-1 text-sm">
                    </div>
                    <div>
                        <label class="text-sm">Stok</label>
                        <input type="number" name="stok" class="mt-1 w-full border rounded px-2 py-1 text-sm">
                    </div>
                    <div class="md:col-span-2">
                        <label class="text-sm">Deskripsi</label>
                        <textarea name="deskripsi" rows="3" class="mt-1 w-full border rounded px-2 py-1 text-sm"></textarea>
                    </div>
                    <div class="md:col-span-2">
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded text-sm">
                            Simpan Buku
                        </button>
                    </div>
                </form>
            </div>

            <div class="bg-white shadow-sm rounded-xl p-6">
                <h3 class="font-semibold mb-3">Daftar Buku</h3>

                @if ($books->count())
                    <table class="w-full text-sm">
                        <thead class="bg-slate-100">
                            <tr>
                                <th class="px-2 py-1 text-left">Kode</th>
                                <th class="px-2 py-1 text-left">Judul</th>
                                <th class="px-2 py-1 text-left">Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr class="border-b">
                                    <td class="px-2 py-1">{{ $book->kode_buku }}</td>
                                    <td class="px-2 py-1">{{ $book->judul }}</td>
                                    <td class="px-2 py-1">{{ $book->stok }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-3">{{ $books->links() }}</div>
                @else
                    <p class="text-sm text-gray-600">Belum ada data buku.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
