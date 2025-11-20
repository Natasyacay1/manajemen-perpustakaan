<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiDashboardController extends Controller
{
    public function index()
    {
        return view('pegawai.dashboard');
    }
}
