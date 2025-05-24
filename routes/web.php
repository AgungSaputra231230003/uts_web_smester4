<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormBantuanController;
use App\Http\Controllers\TentangKamiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// form bantuan
Route::get('/form-bantuan', [FormBantuanController::class, 'index'])->name('form-bantuan.index');
Route::get('/form-bantuan/create', [FormBantuanController::class, 'create'])->name('form-bantuan.create');
Route::post('/form-bantuan', [FormBantuanController::class, 'store'])->name('form-bantuan.store');

// login & beranda
Route::get('/beranda', fn() => view('login-beranda.beranda'));
// Route::get('/sekolah', fn() => view('sekolah.index'));
// Route::get('/form-bantuan', fn() => view('form-bantuan'));
Route::get('/cerita', fn() => view('cerita.cerita'));
// Route::get('/tentang-kami', fn() => view('tentang'));
Route::get('/', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);

// register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// tentang kami
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang-kami');

// sekolah
Route::get('/sekolah', function () {
    $sekolahs = [
        ['nama' => 'SD muhammadiyah', 'lokasi' => 'potianak', 'kebutuhan' => 'Buku & Seragam'],
        ['nama' => 'SMP Mandiri', 'lokasi' => 'Bandung', 'kebutuhan' => 'Laptop'],
        ['nama' => 'SMK 1 Ketapang', 'lokasi' => 'Ketapang', 'kebutuhan' => 'Peralatan Bengkel'],
    ];

    return view('sekolah.index', ['sekolahs' => $sekolahs]);
})->name('sekolah.index');

Route::get('/sekolah/bantu/{nama}', function ($nama) {
    return view('sekolah.form', ['nama' => $nama]);
})->name('sekolah.form');

Route::post('/sekolah/bantu/kirim', function (Request $request) {
    return view('sekolah.terima_kasih', [
        'nama' => $request->input('nama'),
        'donatur' => $request->input('donatur'),
        'bantuan' => $request->input('bantuan'),
    ]);
})->name('sekolah.kirim');
