<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Peminjaman Buku') }}
        </h2>
    </x-slot>

    <div class="py-8 bg-slate-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-4 bg-emerald-100 border border-emerald-300 text-emerald-800 text-sm px-4 py-3 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="mb-4 bg-red-100 border border-red-300 text-red-800 text-sm px-4 py-3 rounded-lg">
                    {{ session('error') }}
                </div>
            @endif

            <div class="bg-white shadow rounded-xl p-6 border border-slate-100">
                <table class="w-full text-sm">
                    <thead class="border-b text-slate-600 uppercase text-xs bg-slate-50">
                        <tr>
                            <th class="py-2 text-left">Mahasiswa</th>
                            <th class="py-2 text-left">Buku</th>
                            <th class="py-2 text-left">Pinjam</th>
                            <th class="py-2 text-left">Jatuh Tempo</th>
                            <th class="py-2 text-left">Status</th>
                            <th class="py-2 text-left">Denda</th>
                            <th class="py-2 text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($loans as $loan)
                            <tr class="border-b">
                                <td class="py-2">{{ $loan->user->name }}</td>
                                <td class="py-2">{{ $loan->book->judul }}</td>
                                <td class="py-2">{{ $loan->tanggal_pinjam }}</td>
                                <td class="py-2">{{ $loan->tanggal_jatuh_tempo }}</td>
                                <td class="py-2">
                                    <span class="px-2 py-1 text-xs rounded
                                        @if($loan->status == 'dipinjam') bg-blue-100 text-blue-600
                                        @elseif($loan->status == 'dikembalikan') bg-emerald-100 text-emerald-700
                                        @else bg-red-100 text-red-700 @endif">
                                        {{ ucfirst($loan->status) }}
                                    </span>
                                </td>
                                <td class="py-2">Rp {{ number_format($loan->denda) }}</td>
                                <td class="py-2 text-center">
                                    @if($loan->status == 'dipinjam')
                                        <form action="{{ route('admin.loans.return', $loan) }}" method="POST">
                                            @csrf
                                            <button class="px-3 py-1 bg-indigo-600 hover:bg-indigo-700 text-white rounded text-xs">
                                                Tandai Dikembalikan
                                            </button>
                                        </form>
                                    @else
                                        <span class="text-slate-400 text-xs">Selesai</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="py-4 text-center text-slate-500">
                                    Belum ada data peminjaman.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $loans->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
