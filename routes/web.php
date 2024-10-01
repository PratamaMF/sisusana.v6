<?php

use App\Http\Controllers\GrupController;
use Illuminate\Support\Facades\Route;

// ====== Sidebar ======
Route::get('/', function () {
    return view('survei');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/manajemen-pertanyaan', function () {
    return view('manajemen-pertanyaan.tampil');
});

Route::get('/manajemen-user', function () {
    return view('manajemen-user.tampil');
});

Route::get('/manajemen-grup', function () {
    return view('manajemen-grup.tampil');
});

Route::get('/adminlogin', function () {
    return view('login-admin');
}); 



// ====== Manajemen User ======
Route::get('/manajemen-user/tambah', function () {
    return view('manajemen-user.tambah');
});

Route::get('/manajemen-user/edit', function () {
    return view('manajemen-user.edit');
});

// ====== Manajemen Grup ======
Route::get('/manajemen-grup', [GrupController::class, 'tampil'])->name('manajemen-grup.tampil');
Route::get('/manajemen-grup/tambah', [GrupController::class, 'tambah'])->name('manajemen-grup.tambah');
Route::post('/manajemen-grup/submit', [GrupController::class, 'submit'])->name('manajemen-grup.submit');
Route::get('/edit-grup/{id}', [GrupController::class, 'edit'])->name('manajemen-grup.edit');
Route::post('/exedit-grup/{id}', [GrupController::class, 'exedit'])->name('manajemen-grup.exedit');
Route::post('/hapus-grup/{id}', [GrupController::class, 'hapus'])->name('manajemen-grup.hapus');

// ====== Hasil ======
Route::get('/hasil/grafik-keseluruhan', function () {
    return view('hasil.grafik-keseluruhan');
});

Route::get('/hasil/grafik-pertanyaan', function () {
    return view('hasil.grafik-pertanyaan');
});

Route::get('/hasil/kritikdansaran', function () {
    return view('hasil.kritikdansaran');
});

Route::get('/hasil/laporan', function () {
    return view('hasil.laporan');
});




