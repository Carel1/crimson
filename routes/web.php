<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::get('auth-login/', [HomeController::class,'login'])->name('login');
Route::post('auth-login/cek-login', [HomeController::class,'cek_login'])->name('cek_login');
Route::get('auth-register/', [HomeController::class,'register'])->name('register');
Route::post('auth-register/daftar', [HomeController::class,'daftar'])->name('daftar');
Route::get('page/auth-logout', [HomeController::class,'logout'])->name('logout');


Route::group(['middleware'=>['auth','ceklevel:Admin']],function()
{
	Route::get('page/dashboard', [AdminController::class,'dashboard'])->name('dashboard');

	Route::get('page/data-user', [AdminController::class,'data_user'])->name('data_user');
	Route::post('page/data-user/update/{id}', [AdminController::class,'update_user'])->name('update_user');
	Route::get('page/data-user/hapus/{id}', [AdminController::class,'delete_user'])->name('delete_user');

	Route::get('page/data-kategori', [AdminController::class,'data_kategori'])->name('data_kategori');
	Route::post('page/data-kategori/tambah', [AdminController::class,'addkategori'])->name('addkategori');
	Route::post('page/data-kategori/update/{id_kategori}', [AdminController::class,'updatekategori'])->name('updatekategori');
	Route::get('page/data-kategori/hapus/{id_kategori}', [AdminController::class,'deletekategori'])->name('deletekategori');

	Route::get('page/data-buku', [AdminController::class, 'data_buku'])->name('data_buku');
	Route::post('page/data-buku/tambah', [AdminController::class, 'addbuku'])->name('addbuku');
	Route::post('page/data-buku/update/{id_buku}', [AdminController::class, 'updatebuku'])->name('updatebuku');
	Route::get('page/data-buku/hapus/{id_buku}', [AdminController::class, 'deletebuku'])->name('deletebuku');

	Route::post('page/profil-admin/ubah/{id}',[AdminController::class,'ubah_admin'])->name('ubah_admin');

});

Route::group(['middleware'=>['auth','ceklevel:User,Admin']],function()
{
	Route::get('/', [UserController::class,'home'])->name('home');

	Route::get('search-buku', [UserController::class,'search'])->name('search');

	Route::get('cek-buku/{id_buku}', [UserController::class,'cek_buku'])->name('cek_buku');

	Route::get('profil-user', [UserController::class,'profil_buyer'])->name('profil_buyer');
	Route::post('page/profil-user/lengkapi/{id}',[UserController::class,'lengkapi'])->name('lengkapi');

	Route::post('page/profil-user/ganti-password/{id}',[UserController::class,'ganti_password'])->name('ganti_password');
	
});
