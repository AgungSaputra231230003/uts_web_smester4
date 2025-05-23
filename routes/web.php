<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormBantuanController;


Route::get('/form-bantuan', [FormBantuanController::class, 'index'])->name('form-bantuan.index');
Route::get('/form-bantuan/create', [FormBantuanController::class, 'create'])->name('form-bantuan.create');
Route::post('/form-bantuan', [FormBantuanController::class, 'store'])->name('form-bantuan.store');
