<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin Perpustakaan') }}
        </h2>
    </x-slot>

    <div class="py-8 bg-slate-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Kartu ringkasan --}}
            <div class="grid gap-4 md:grid-cols-3">
                <div class="bg-white shadow-sm rounded-xl p-5 border border-slate-100">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide">
                        Total Buku
                    </p>
                    <p class="mt-2 text-3xl font-bold text-slate-800">
                        {{ $totalBooks ?? 0 }}
                    </p>
                    <p class="mt-1 text-xs text-slate-500">
                        Jumlah koleksi yang tercatat di sistem.
                    </p>
                </div>

                <div class="bg-white shadow-sm rounded-xl p-5 border border-slate-100">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide">
                        Peminjaman Aktif
                    </p>
                    <p class="mt-2 text-3xl font-bold text-slate-800">
                        0
                    </p>
                    <p class="mt-1 text-xs text-slate-500">
                        (Nanti diisi setelah fitur peminjaman jadi.)
                    </p>
                </div>

                <div class="bg-white shadow-sm rounded-xl p-5 border border-slate-100">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide">
                        Notifikasi
                    </p>
                    <p class="mt-2 text-sm text-slate-700">
                        Belum ada notifikasi baru.
                    </p>
                </div>
            </div>

            {{-- Aksi cepat --}}
            <div class="bg-white shadow-sm rounded-xl p-6 border border-slate-100">
                <h3 class="text-base font-semibold text-slate-800 mb-3">
                    Aksi Cepat
                </h3>

                <div class="grid gap-3 md:grid-cols-3">
                    <a href="{{ route('admin.books.index') }}"
                       class="flex items-center justify-between px-4 py-3 rounded-lg border border-slate-200 bg-slate-50 hover:bg-slate-100 transition text-sm">
                        <div>
                            <p class="font-semibold text-slate-800">Kelola Buku</p>
                            <p class="text-xs text-slate-500">Lihat, tambah, dan edit data buku.</p>
                        </div>
                        <span class="text-xs text-slate-500">&rarr;</span>
                    </a>

                    <a href="{{ route('books.catalog') }}"
                    class="flex items-center justify-between px-4 py-3 rounded-lg border border-slate-200 bg-slate-50 hover:bg-slate-100 transition text-sm">
                        <div>
                            <p class="font-semibold text-slate-800">Lihat Katalog</p>
                            <p class="text-xs text-slate-500">Tampilan seperti yang dilihat pengunjung.</p>
                        </div>
                        <span class="text-xs text-slate-500">&rarr;</span>
                    </a>

                    <div class="flex items-center justify-between px-4 py-3 rounded-lg border border-dashed border-slate-300 bg-slate-50 text-sm">
                        <div>
                            <p class="font-semibold text-slate-800">Fitur Berikutnya</p>
                            <p class="text-xs text-slate-500">Peminjaman, pengembalian, laporan, dll.</p>
                        </div>
                        <span class="text-[10px] px-2 py-1 rounded bg-amber-100 text-amber-700">
                            coming soon
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
