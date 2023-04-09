<?php
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PenggunaController;
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

/*Route::get('/', function () {
    return view('HalamanDepan.beranda');
});*/
Route::get('/',[BerandaController::class,'index'])->name('beranda');
Route::get('/home',[BerandaController::class,'index']);
Route::get('/data-pengguna',[PenggunaController::class,'index'])->name('data-pengguna');
Route::get('/create-pengguna',[PenggunaController::class,'create'])->name('create-pengguna');
Route::post('/simpan-pengguna',[PenggunaController::class,'store'])->name('simpan-pengguna');
Route::get('/edit-pengguna/{id}',[PenggunaController::class,'edit'])->name('edit-pengguna');
Route::post('/update-pengguna/{id}',[PenggunaController::class,'update'])->name('update-pengguna');
Route::get('/delete-pengguna/{id}',[PenggunaController::class,'destroy'])->name('delete-pengguna');