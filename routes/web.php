<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IsuController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TambahSiswaController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function(){
    return view('landing');
});

// ROUTE UNTUK TIDAK ADA AKUN
 Route::middleware(['guest'])->group(function() {
     Route::get('/login',[IsuController::class, 'index'])->name('login');
     Route::post('/login',[IsuController::class, 'login']); 
 });

 //ROUTE UNTUK YANG SUDAH PUNYA AKUN
Route::middleware(['auth'])->group(function(){
    // ADMIN
    Route::get('/dashboard',[TambahSiswaController::class, 'index'])->name('dashboard');
    Route::get('/admin/profil', [AdminController::class, 'profil'])->name('profil');
    Route::get('/admin/tambah_siswa', [TambahSiswaController::class, 'tambah_siswa'])->name('tambah_siswa');
    Route::post('/tambahsiswa', [TambahSiswaController::class, 'create'])->name('create_siswa');
    Route::get('/edit{nisn}',[SiswaController::class, 'edit'])->name('edit');
    // SISWA
    Route::get('/dashboard/siswa',[SiswaController::class, 'index']);
    Route::get('/dashboard/profil',[SiswaController::class, 'profil'])->name('profil');
    Route::get('/dashboard/jadwal',[SiswaController::class, 'jadwal'])->name('jadwal');
    Route::get('/dashboard/materi',[SiswaController::class, 'materi'])->name('materi');
    Route::get('/dashboard/add',[SiswaController::class, 'add'])->name('add');
    
    Route::get('/logout',[IsuController::class, 'logout'])->name('logout');
});


