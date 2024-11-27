<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sambutan', [Controller::class, 'index']);
Route::get('/beranda', [Controller::class, 'beranda']);
Route::get('/contact', [Controller::class, 'contact']);
Route::get('/project', [Controller::class, 'project']);
Route::get('/resume', [Controller::class, 'resume']);
Route::get('/form', [Controller::class, 'form']);
// Route::get('/data', [Controller::class, 'data']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/data', [SiswaController::class, 'data']);
Route::post('/simpan', [SiswaController::class, 'dataRegister'])->name('regis');

Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');


Route::get('/hapus/{nama}', [SiswaController::class, 'hapus'])->name('delete.dt');

    Route::prefix('user')->group(function () {
        Route::get('/form', [SiswaController::class, 'showForm'])->name('user.form');
        Route::post('/submit', [SiswaController::class, 'submitForm'])->name('user.submit');
        // Tambahkan route lain untuk user di sini
    });

    Route::prefix('admin')->middleware('auth:admin')->group(function () {
        Route::get('/alumni-data', [AdminController::class, 'showAlumniData'])->name('admin.alumniData');
        // Tambahkan route lain untuk admin di sini
    });


