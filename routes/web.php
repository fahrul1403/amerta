<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataIbuHamilController;
use App\Http\Controllers\DataPemeriksaanController;
use App\Http\Controllers\DataPenilaianController;
use App\Http\Controllers\FormPenilaianController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasukanKaderController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificatorController;
use App\Http\Controllers\DataPenilaianIbuHamilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenilaianFaktorRisikoController;

// Route untuk memproses login
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'v_register'])->name('register');
Route::get('/verificator', [AuthController::class, 'v_verifikator_login'])->name('v_verifikator_login');
Route::get('/kader', [AuthController::class, 'v_kader_login'])->name('v_kader_login');
Route::post('/', [LoginController::class, 'dologin'])->name('dologin');
Route::post('/verifikator', [AuthController::class, 'login_verifikator'])->name('login_verifikator');
Route::post('/kader', [AuthController::class, 'login_kader'])->name('login_kader');
Route::post('/register', [AuthController::class, 'register'])->name('postregister');

// Route untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin
Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('dashboard.dashboard');
Route::get('/dashboard/admin/dataibuhamil', [DataIbuHamilController::class, 'index'])->name('dataibuhamil.index');
Route::get('/dashboard/admin/dataibuhamil/show/{id}', [DataIbuHamilController::class, 'show'])->name('dataibuhamil.show');
Route::get('/dashboard/admin/dataibuhamil/edit/{id}', [DataIbuHamilController::class, 'edit'])->name('dataibuhamil.adit');
Route::put('/dashboard/admin/dataibuhamil/update/{id}', [DataIbuHamilController::class, 'update'])->name('dataibuhamil.update');
Route::get('/dashboard/admin/dataibuhamil/inputdatasuami/{id}', [DataIbuHamilController::class, 'inputdatasuami'])->name('dataibuhamil.inputdatasuami');
Route::get('/dashboard/admin/dataibuhamil/inputdatapenilaianibuhamil/{id}', [DataIbuHamilController::class, 'inputdatapenilaianibuhamil'])->name('dataibuhamil.create_');
Route::put('/dashboard/admin/dataibuhamil/inputdatasuami/{id}', [DataIbuHamilController::class, 'saveinputdatasuami'])->name('dataibuhamil.inputdatasuami');
Route::get('/dashboard/admin/datapemeriksaan', [DataPemeriksaanController::class, 'index'])->name('datapemeriksaan.index');
Route::get('/dashboard/admin/dataListPenilaian', [DataPenilaianController::class, 'listUser'])->name('datapenilaian.listUser');
Route::get('/dashboard/admin/datapenilaian/{id}', [DataPenilaianController::class, 'index'])->name('datapenilaian.index');
Route::get('/dashboard/dataibuhamil/create_datapenilaianibuhamil/{id}', [DataIbuHamilController::class, 'createPenilaian'])->name('dataibuhamil.create_penilaian');
Route::post('/dashboard/dataibuhamil/dataibuhamil/store_penilaian/{id}', [DataIbuHamilController::class, 'storePenilaian'])->name('dataibuhamil.store_penilaian');
Route::post('/dashboard/admin/dataibuhamil/store_penilaian/{id}', [DataIbuHamilController::class, 'storePenilaian'])->name('dataibuhamil.store_penilaian');
Route::get('/dashboard/admin/datapenilaianibuhamil/inputdatapenilaianibuhamil/{id}', [PenilaianFaktorRisikoController::class, 'create'])->name('penilaian.faktor_risiko.create');
Route::post('/dashboard/admin/datapenilaianibuhamil/store', [PenilaianFaktorRisikoController::class, 'store'])->name('penilaian.faktor_risiko.store');
Route::get('/dashboard/admin/datapenilaianibuhamil', [DataPenilaianIbuHamilController::class, 'index'])->name('dataibuhamil.index');
// Route to display the index page
Route::get('/dashboard/admin/datapenilaianibuhamil', [DataPenilaianIbuHamilController::class, 'index'])->name('datapenilaianibuhamil.index');

// Route to show a specific record
Route::get('/dashboard/admin/datapenilaianibuhamil/show/{id}', [DataPenilaianIbuHamilController::class, 'show'])->name('datapenilaianibuhamil.show');

// Route to edit a specific record
Route::get('/dashboard/admin/datapenilaianibuhamil/edit/{id}', [DataPenilaianIbuHamilController::class, 'edit'])->name('datapenilaianibuhamil.edit');

// Route to delete a specific record
Route::delete('/dashboard/admin/datapenilaianibuhamil/delete/{id}', [DataPenilaianIbuHamilController::class, 'destroy'])->name('datapenilaianibuhamil.delete');

//user
Route::get('/dashboard/user', [UserController::class, 'user'])->name('dashboard.user');
Route::get('/dashboard/user/dataibuhamil', [DataIbuHamilController::class, 'index'])->name('dataibuhamil');
Route::get('/dashboard/user/formpenilaian', [FormPenilaianController::class, 'index'])->name('formpenilaian.index');
Route::get('/dashboard/user/masukankader', [MasukanKaderController::class, 'index'])->name('masukankader.indexx');


// Verificator
Route::get('/dashboard/verificator', [VerificatorController::class, 'index'])->name('verificator.index');
Route::get('/dashboard/verificator/check', [VerificatorController::class, 'check'])->name('verificator.check');
Route::post('/dashboard/verificator/approve/{id}', [DataPemeriksaanController::class, 'approve'])->name('datapemeriksaan.approve');
Route::post('/dashboard/verificator/reject/{id}', [DataPemeriksaanController::class, 'reject'])->name('datapemeriksaan.reject');


Route::resource('dataibuhamil', DataIbuHamilController::class);
Route::resource('datapemeriksaan', DataPemeriksaanController::class);
Route::resource('datapenilaian', DataPenilaianController::class);
Route::resource('formpenilaian', FormPenilaianController::class);
Route::resource('user', PenggunaController::class);

// DATA PEMERIKSAAN
Route::get('/dashboard/admin/ibuhamil', [DataPemeriksaanController::class, 'ibuhamil'])->name('ibuhamil');
Route::get('/dashboard/admin/datapemeriksaan/shows/{id}', [DataPemeriksaanController::class, 'show'])->name('datapemeriksaan.shows');
Route::post('/dashboard/admin/datapemeriksaan/stores', [DataPemeriksaanController::class, 'store'])->name('datapemeriksaan.stores');
