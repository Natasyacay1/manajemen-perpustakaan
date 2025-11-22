<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\PegawaiDashboardController;
use App\Http\Controllers\MahasiswaDashboardController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Katalog Buku (guest & semua user)
|--------------------------------------------------------------------------
*/

Route::get('/', [BookController::class, 'catalog'])->name('home');
Route::get('/katalog', [BookController::class, 'catalog'])->name('books.catalog');


/*
|--------------------------------------------------------------------------
| Dashboard Redirect Otomatis (dipanggil oleh Breeze -> route('dashboard'))
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    $user = Auth::user();

    if (!$user) {
        return redirect()->route('login');
    }

    switch ($user->role) {
        case 'admin':
            return redirect()->route('admin.dashboard');
        case 'pegawai':
            return redirect()->route('pegawai.dashboard');
        case 'mahasiswa':
            return redirect()->route('mahasiswa.dashboard');
        default:
            return redirect()->route('home');
    }
})->middleware(['auth', 'verified'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Admin: Dashboard + Manajemen Buku
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
        ->name('admin.dashboard');

    Route::get('/admin/books', [BookController::class, 'index'])->name('admin.books.index');
    Route::get('/admin/books/create', [BookController::class, 'create'])->name('admin.books.create');
    Route::post('/admin/books', [BookController::class, 'store'])->name('admin.books.store');
    Route::get('/admin/books/{book}/edit', [BookController::class, 'edit'])->name('admin.books.edit');
    Route::put('/admin/books/{book}', [BookController::class, 'update'])->name('admin.books.update');
    Route::delete('/admin/books/{book}', [BookController::class, 'destroy'])->name('admin.books.destroy');
});


/*
|--------------------------------------------------------------------------
| Pegawai: Dashboard + Manajemen Buku
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified', 'pegawai'])->group(function () {
    Route::get('/pegawai/dashboard', [PegawaiDashboardController::class, 'index'])
        ->name('pegawai.dashboard');

    Route::get('/pegawai/books', [BookController::class, 'index'])->name('pegawai.books.index');
    Route::get('/pegawai/books/create', [BookController::class, 'create'])->name('pegawai.books.create');
    Route::post('/pegawai/books', [BookController::class, 'store'])->name('pegawai.books.store');
    Route::get('/pegawai/books/{book}/edit', [BookController::class, 'edit'])->name('pegawai.books.edit');
    Route::put('/pegawai/books/{book}', [BookController::class, 'update'])->name('pegawai.books.update');
    Route::delete('/pegawai/books/{book}', [BookController::class, 'destroy'])->name('pegawai.books.destroy');
});


/*
|--------------------------------------------------------------------------
| Mahasiswa: Dashboard
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified', 'mahasiswa'])->group(function () {
    Route::get('/mahasiswa/dashboard', [MahasiswaDashboardController::class, 'index'])
        ->name('mahasiswa.dashboard');
});


/*
|--------------------------------------------------------------------------
| Profile (bawaan Breeze)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
