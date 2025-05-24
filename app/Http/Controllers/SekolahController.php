<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah; // Jika menggunakan model Sekolah

class SekolahController extends Controller
{
    /**
     * Menampilkan daftar sekolah
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // $sekolahs = Sekolah::all(); // Jika menggunakan database
        // return view('sekolah.index', compact('sekolahs'));
        
        return view('beranda'); // Versi sederhana tanpa database
    }
}