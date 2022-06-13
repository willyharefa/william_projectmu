<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GuruController;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware('guest:web,guru,admin')->group(function () {
    Route::get('/login', [Controller::class, 'login'])->name('login');
    Route::get('/registration', [Controller::class, 'registration'])->name('registration');
    Route::post('/registration-now', [Controller::class, 'registration'])->name('registration_now');
});


Route::middleware('guest')->group(function() {
    Route::get('/', [Controller::class, 'homepage'])->name('homepage');
    Route::post('/authenticate/user', [Controller::class, 'authenticate'])->name('authenticate');
});



// Hanya admin yang mengakses URL ini
Route::middleware('auth:web,guru,admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');         // Masuk kehalaman admin
    Route::get('/dashboard/admin/mapel', [AdminController::class, 'mapel'])->name('mapel');             // Masuk ke halaman Mata Pelajaran
    Route::get('/dashboard/admin/guru', [AdminController::class, 'guru'])->name('guru');                // Masuk ke halaman guru
    Route::get('/dashboard/admin/kelas', [AdminController::class, 'kelas'])->name('kelas');             // Masuk ke halaman kelas
    Route::get('/dashboard/admin/siswa', [AdminController::class, 'siswa'])->name('siswa');  
    Route::get('dashboard/admin/absensi/kelas/{tag}', [AdminController::class, 'absensiKelas'])->name('absensi_kelas');
    Route::post('/dashboard/admin/create/absen', [AdminController::class, 'createAbsent'])->name('create_absent');
    Route::get('/dashboard/data-absen/{id}/{tag}', [AdminController::class, 'dataAbsen'])->name('data_absen');
    

    Route::get('/logout', [Controller::class, 'logout'])->name('logout');
});

Route::middleware('auth:guru')->group(function () {
    Route::get('/dashboard/guru/absensi', [GuruController::class, 'absensi'])->name('absensi');       // Masuk ke halaman Input Data Kehadiran
    Route::get('/dashboard/nilai', [GuruController::class, 'nilai'])->name('nilai');
    Route::get('/dashboard/nilai/kelas/{tag}', [GuruController::class, 'nilaiKelas'])->name('nilai_kelas');
    Route::post('/dashboard/input/nilai', [GuruController::class, 'inputNilai'])->name('input_nilai');
});

// Kode program untuk menambah mapel dan membuat mapel
Route::post('/create/mapel', [AdminController::class, 'createMapel'])->name('create_mapel'); 
Route::post('/update/mapel/{id}', [AdminController::class, 'updateMapel'])->name('update_mapel');

// Kode program untuk membuat guru dan memperbaharui data guru
Route::post('/dashboard/admin/create/guru', [AdminController::class, 'createGuru'])->name('create_guru');
Route::post('/dashboard/admin/create/guru/{id}', [AdminController::class, 'updateGuru'])->name('update_guru');

// Kode program untuk membuat dan memperbaharui data siswa
Route::post('/dashboard/admin/create/siswa', [AdminController::class, 'createSiswa'])->name('create_siswa');
Route::post('/dashboard/admin/update/siswa/{id}', [AdminController::class, 'updateSiswa'])->name('update_siswa');

// Kode program untuk membuat dan menambahkan kelas pada database
Route::post('/dashboard/admin/create/kelas', [AdminController::class, 'createKelas'])->name('create_kelas');
Route::post('/dashboard/admin/update/kelas/{id}', [AdminController::class, 'updateKelas'])->name('update_kelas');

// Kode program untuk membuat dan menambahkan data absensi
Route::post('/dashboard/guru/create/absensi', [GuruController::class, 'createAbsensi'])->name('create_absensi');
Route::post('/dashboard/admin/update/absensi/{id}', [AdminController::class, 'updateAbsensi'])->name('update_absensi');

Route::get('/create-admin', function() {
    Admin::create([
        'name' => 'William',
        'username' => 'admin',
        'password' => Hash::make('admin')
    ]);
});
