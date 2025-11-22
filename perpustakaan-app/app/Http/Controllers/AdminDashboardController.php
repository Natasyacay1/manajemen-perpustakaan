<?php

namespace App\Http\Controllers;

use App\Models\Book;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalBooks = Book::count();

        return view('admin.dashboard', compact('totalBooks'));
    }
}