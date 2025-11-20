<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Katalog buku untuk guest & semua user
     */
    public function catalog()
    {
        $books = Book::orderBy('judul')->paginate(12);
        return view('books.catalog', compact('books'));
    }

    /**
     * Daftar buku untuk admin/pegawai
     */
    public function index()
    {
        $books = Book::orderBy('judul')->paginate(15);
        return view('books.index', compact('books'));
    }

    /**
     * Form tambah buku
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Simpan buku baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_buku'   => 'required|string|max:50|unique:books,kode_buku',
            'judul'       => 'required|string|max:255',
            'stok'        => 'required|integer|min:0',
            'penulis'     => 'nullable|string|max:255',
            'penerbit'    => 'nullable|string|max:255',
            'tahun_terbit'=> 'nullable|integer',
            'kategori'    => 'nullable|string|max:100',
            'deskripsi'   => 'nullable|string',
        ]);

        Book::create($request->all());

        return redirect()->back()->with('success', 'Buku berhasil ditambahkan.');
    }

    /**
     * Form edit buku
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update data buku
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'kode_buku'   => 'required|string|max:50|unique:books,kode_buku,' . $book->id,
            'judul'       => 'required|string|max:255',
            'stok'        => 'required|integer|min:0',
            'penulis'     => 'nullable|string|max:255',
            'penerbit'    => 'nullable|string|max:255',
            'tahun_terbit'=> 'nullable|integer',
            'kategori'    => 'nullable|string|max:100',
            'deskripsi'   => 'nullable|string',
        ]);

        $book->update($request->all());

        return redirect()->back()->with('success', 'Data buku berhasil diperbarui.');
    }

    /**
     * Hapus buku
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return back()->with('success', 'Buku berhasil dihapus.');
    }
}
