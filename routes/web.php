<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\DB;
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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/administrator', [App\Http\Controllers\AdminController::class, 'administrator'])->name('administrator');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('profil');

Route::get('post/hapus/{id}', [App\Http\Controllers\ProfilController::class, 'hapus']);

Route::middleware(['auth', 'admin:user'])->group(function () {
    Route::get('/profil', function () {
        $profiluser = DB::with('user')->get();
        return view('profil', ['user' => $profiluser]);
    })->name('profil');
    Route::get('/rujukan', [App\Http\Controllers\HomeController::class, 'rujukan'])->name('rujukan');
    Route::get('/test', [App\Http\Controllers\TestController::class, 'index'])->name('test');
    Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('profil');
    Route::get('/profil_update', [App\Http\Controllers\ProfilController::class, 'edit'])->name('profil_edit');
    Route::put('/profil', [App\Http\Controllers\ProfilController::class, 'update'])->name('profil_update');
});

Route::middleware(['auth', 'admin:admin'])->group(function () {
    Route::get('/administrator', [App\Http\Controllers\AdminController::class, 'administrator'])->name('administrator');
    Route::get('/administrasi/datauser', [App\Http\Controllers\KondisiController::class, 'index'])->name('kondisi');
    Route::get('/administrasi/index', [App\Http\Controllers\KondisiController::class, 'index'])->name('kondisi');
    Route::get('cari', [App\Http\Controllers\KondisiController::class, 'cari'])->name('pencarian');
    Route::get('lihat/{id}', [App\Http\Controllers\KondisiController::class, 'lihat'])->name('lihat');
});

