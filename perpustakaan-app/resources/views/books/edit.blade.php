<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Buku') }}
        </h2>
    </x-slot>

    @php
        $rolePrefix = Auth::user()->role === 'pegawai' ? 'pegawai' : 'admin';
    @endphp

    <div class="py-8 bg-slate-100">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-xl p-6 border border-slate-100">

                @if ($errors->any())
                    <div class="mb-4 bg-red-100 border border-red-300 text-red-800 text-sm px-4 py-3 rounded-lg">
                        <p class="font-semibold mb-1">Terjadi kesalahan:</p>
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route($rolePrefix.'.books.update', $book) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="grid gap-4 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700">Kode Buku</label>
                            <input type="text" name="kode_buku" value="{{ old('kode_buku', $book->kode_buku) }}"
                                class="mt-1 block w-full rounded-md border-slate-300 text-sm"
                                required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700">Judul</label>
                            <input type="text" name="judul" value="{{ old('judul', $book->judul) }}"
                                class="mt-1 block w-full rounded-md border-slate-300 text-sm"
                                required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700">Penulis</label>
                            <input type="text" name="penulis" value="{{ old('penulis', $book->penulis) }}"
                                class="mt-1 block w-full rounded-md border-slate-300 text-sm">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700">Penerbit</label>
                            <input type="text" name="penerbit" value="{{ old('penerbit', $book->penerbit) }}"
                                class="mt-1 block w-full rounded-md border-slate-300 text-sm">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700">Tahun Terbit</label>
                            <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit', $book->tahun_terbit) }}"
                                class="mt-1 block w-full rounded-md border-slate-300 text-sm" min="1900" max="2100">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700">Kategori</label>
                            <input type="text" name="kategori" value="{{ old('kategori', $book->kategori) }}"
                                class="mt-1 block w-full rounded-md border-slate-300 text-sm">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700">Stok</label>
                            <input type="number" name="stok" value="{{ old('stok', $book->stok) }}"
                                class="mt-1 block w-full rounded-md border-slate-300 text-sm" min="0">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="block text-sm font-medium text-slate-700">Deskripsi</label>
                        <textarea name="deskripsi" rows="4"
                                class="mt-1 block w-full rounded-md border-slate-300 text-sm">{{ old('deskripsi', $book->deskripsi) }}</textarea>
                    </div>

                    <div class="mt-6 flex justify-end gap-3">
                        <a href="{{ route($rolePrefix.'.books.index') }}"
                        class="px-4 py-2 rounded-lg border border-slate-300 text-sm text-slate-700 hover:bg-slate-50">
                            Batal
                        </a>
                        <button type="submit"
                                class="px-4 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-sm text-white">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
