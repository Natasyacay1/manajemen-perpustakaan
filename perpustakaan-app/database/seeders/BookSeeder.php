<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        $books = [
            [
                'kode_buku'     => 'BK-001',
                'judul'         => 'Pemrograman Laravel Dasar',
                'penulis'       => 'Dewi Aulia',
                'penerbit'      => 'Informatika Press',
                'tahun_terbit'  => 2022,
                'kategori'      => 'Teknologi',
                'stok'          => 10,
                'deskripsi'     => 'Buku pengantar framework Laravel untuk pemula.',
            ],
            [
                'kode_buku'     => 'BK-002',
                'judul'         => 'Belajar PHP Untuk Pemula',
                'penulis'       => 'Rizky Syahputra',
                'penerbit'      => 'Nusantara Media',
                'tahun_terbit'  => 2020,
                'kategori'      => 'Teknik',
                'stok'          => 8,
                'deskripsi'     => 'Dasar-dasar pemrograman PHP dengan contoh sederhana.',
            ],
            [
                'kode_buku'     => 'BK-003',
                'judul'         => 'Algoritma & Struktur Data',
                'penulis'       => 'Tri Handayani',
                'penerbit'      => 'Global Academy',
                'tahun_terbit'  => 2019,
                'kategori'      => 'Komputer',
                'stok'          => 12,
                'deskripsi'     => 'Konsep dasar algoritma dan struktur data.',
            ],
            [
                'kode_buku'     => 'BK-004',
                'judul'         => 'Data Mining Untuk Semua',
                'penulis'       => 'Fajar Nugraha',
                'penerbit'      => 'DeepLearning ID',
                'tahun_terbit'  => 2021,
                'kategori'      => 'Teknologi',
                'stok'          => 6,
                'deskripsi'     => 'Pengantar data mining dengan studi kasus sederhana.',
            ],
            [
                'kode_buku'     => 'BK-005',
                'judul'         => 'Machine Learning Basic',
                'penulis'       => 'Adit Prakoso',
                'penerbit'      => 'AI Nation',
                'tahun_terbit'  => 2020,
                'kategori'      => 'Teknologi',
                'stok'          => 9,
                'deskripsi'     => 'Dasar-dasar machine learning untuk pemula.',
            ],
            [
                'kode_buku'     => 'BK-006',
                'judul'         => 'Bahasa Indonesia Akademik',
                'penulis'       => 'Sinta Lestari',
                'penerbit'      => 'Gramedia',
                'tahun_terbit'  => 2018,
                'kategori'      => 'Umum',
                'stok'          => 5,
                'deskripsi'     => 'Panduan penulisan akademik Bahasa Indonesia.',
            ],
            [
                'kode_buku'     => 'BK-007',
                'judul'         => 'Metode Penelitian Kualitatif',
                'penulis'       => 'Dr. Yani Purwanto',
                'penerbit'      => 'Cendekia Press',
                'tahun_terbit'  => 2017,
                'kategori'      => 'Pendidikan',
                'stok'          => 4,
                'deskripsi'     => 'Dasar metode penelitian kualitatif.',
            ],
            [
                'kode_buku'     => 'BK-008',
                'judul'         => 'UI/UX Fundamentals',
                'penulis'       => 'Sarah Kartika',
                'penerbit'      => 'Designers Hub',
                'tahun_terbit'  => 2023,
                'kategori'      => 'Desain',
                'stok'          => 10,
                'deskripsi'     => 'Konsep dasar desain UI/UX modern.',
            ],
            [
                'kode_buku'     => 'BK-009',
                'judul'         => 'Database MySQL Lengkap',
                'penulis'       => 'Budi Santoso',
                'penerbit'      => 'Informatika Group',
                'tahun_terbit'  => 2022,
                'kategori'      => 'Teknologi',
                'stok'          => 7,
                'deskripsi'     => 'Pemodelan dan query MySQL dari dasar.',
            ],
            [
                'kode_buku'     => 'BK-010',
                'judul'         => 'Jaringan Komputer Modern',
                'penulis'       => 'Dimas Ananda',
                'penerbit'      => 'Networkers',
                'tahun_terbit'  => 2021,
                'kategori'      => 'Teknik',
                'stok'          => 11,
                'deskripsi'     => 'Konsep dan implementasi jaringan komputer.',
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}