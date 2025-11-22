<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Buku') }}
        </h2>
    </x-slot>

    <div class="py-8 bg-slate-100">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm rounded-xl p-6">

                <form action="{{ route('admin.books.update', $book) }}" method="POST" class="grid md:grid-cols-2 gap-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="text-sm">Kode Buku</label>
                        <input type="text" name="kode_buku"
                            value="{{ old('kode_buku', $book->kode_buku) }}"
                            class="mt-1 w-full border rounded px-2 py-1 text-sm">                        @error('kode_buku') <p class="text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="text-sm">Judul</label>
                        <input type="text" name="judul"
                            value="{{ old('judul', $book->judul) }}"
                            class="mt-1 w-full border rounded px-2 py-1 text-sm">
                        @error('judul') <p class="text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="text-sm">Penulis</label>
                        <input type="text" name="penulis"
                            value="{{ old('penulis', $book->penulis) }}"
                            class="mt-1 w-full border rounded px-2 py-1 text-sm">
                    </div>

                    <div>
                        <label class="text-sm">Penerbit</label>
                        <input type="text" name="penerbit"
                            value="{{ old('penerbit', $book->penerbit) }}"
                            class="mt-1 w-full border rounded px-2 py-1 text-sm">
                    </div>

                    <div>
                        <label class="text-sm">Tahun Terbit</label>
                        <input type="number" name="tahun_terbit"
                            value="{{ old('tahun_terbit', $book->tahun_terbit) }}"
                            class="mt-1 w-full border rounded px-2 py-1 text-sm">
                    </div>

                    <div>
                        <label class="text-sm">Kategori</label>
                        <input type="text" name="kategori"
                            value="{{ old('kategori', $book->kategori) }}"
                            class="mt-1 w-full border rounded px-2 py-1 text-sm">
                    </div>

                    <div>
                        <label class="text-sm">Stok</label>
                        <input type="number" name="stok"
                            value="{{ old('stok', $book->stok) }}"
                            class="mt-1 w-full border rounded px-2 py-1 text-sm">
                        @error('stok') <p class="text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label class="text-sm">Deskripsi</label>
                        <textarea name="deskripsi" rows="3"
                                class="mt-1 w-full border rounded px-2 py-1 text-sm">{{ old('deskripsi', $book->deskripsi) }}</textarea>
                    </div>

                    <div class="md:col-span-2 flex justify-between mt-2">
                        <a href="{{ route('admin.books.index') }}"
                        class="px-4 py-2 text-sm rounded border border-slate-300 text-slate-700">
                            Kembali
                        </a>
                        <button type="submit"
                                class="px-4 py-2 text-sm rounded bg-blue-600 text-white">
                            Update
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
