<?php

use Illuminate\Support\Facades\Route;

// Halaman Utama: Jadwal Kuliah
Route::get('/', function () {
    return view('jadwal');
})->name('jadwal');

// Halaman Kedua: Daftar Tugas
Route::get('/tugas', function () {
    return view('tugas');
})->name('tugas');