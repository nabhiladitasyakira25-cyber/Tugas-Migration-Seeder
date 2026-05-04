<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KrsController;


Route::get('/', function () {
    return view('menu');
});

Route::resource('dosen', DosenController::class);
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('matakuliah', MatakuliahController::class);
Route::resource('jadwal', JadwalController::class);
Route::resource('krs', KrsController::class);
// Route::get('/', function () {
//     return redirect('/dosen');
// });

// // DOSEN
// Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
// Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosen.create');
// Route::post('/dosen', [DosenController::class, 'store'])->name('dosen.store');

// // MAHASISWA
// Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
// Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
// Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');

// // MATAKULIAH
// Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
// Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])->name('matakuliah.create');
// Route::post('/matakuliah', [MatakuliahController::class, 'store'])->name('matakuliah.store');

// // JADWAL
// Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
// Route::get('/jadwal/create', [JadwalController::class, 'create'])->name('jadwal.create');
// Route::post('/jadwal', [JadwalController::class, 'store'])->name('jadwal.store');

// // KRS
// Route::get('/krs', [KrsController::class, 'index'])->name('krs.index');
// Route::get('/krs/create', [KrsController::class, 'create'])->name('krs.create');
// Route::post('/krs', [KrsController::class, 'store'])->name('krs.store');