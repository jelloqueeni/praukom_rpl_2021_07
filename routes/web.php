<?php

use App\Http\Controllers\OtentikasiController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\JurusanKelasController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\KelasController;
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

Route::controller(OtentikasiController::class)->group(function () {
  Route::get('/auth', 'formlogin')->name('login');
  Route::post('/auth', 'authenticate')->name('as');
  Route::get('logout', 'logout')->name('logout');
  // Route::get('/auth', [OtentikasiController::class, 'login']);
});

// Route::middleware('cekLevel:lv1')->group(function () {
//   // admin
//   Route::redirect('/', '/dashboard');
// });

Route::redirect('/', '/dashboard');

Route::prefix('/dashboard')->group(function () {
  Route::get('/', fn () => view('dashboard.index'));
  Route::get('/jurusan-dan-kelas', JurusanKelasController::class)->name('jurusan.kelas.index');

  Route::prefix('/jurusan')->controller(JurusanController::class)->group(function () {
    Route::get('/tambah', 'create')->name('jurusan.create');
    Route::post('/', 'store')->name('jurusan.store');
    Route::get('/{jurusan}/edit', 'edit')->name('jurusan.edit');
    Route::put('/{jurusan}', 'update')->name('jurusan.update');
    Route::delete('/{jurusan}', 'destroy')->name('jurusan.delete');
  });

  Route::prefix('/kelas')->controller(KelasController::class)->group(function () {
    Route::get('/tambah', 'create')->name('kelas.create');
    Route::post('/', 'store')->name('kelas.store');
    Route::get('/{kelas}/edit', 'edit')->name('kelas.edit');
    Route::put('/{kelas}', 'update')->name('kelas.update');
    Route::delete('/{kelas}', 'destroy')->name('kelas.delete');
  });

  Route::prefix('/form')->controller(FormController::class)->group(function () {
    Route::get('/', 'index')
        ->name('form.create');
    Route::post('/', 'store')
        ->name('form.store');
  });
});
