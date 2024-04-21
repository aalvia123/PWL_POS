<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/tambah', function () {
    return view('user_tambah');
});

Route::get('/level/tambah', function () {
    return view('level_tambah');
});

Route::get('/hello', function () {
    return 'Hello World';
   });


Route::get('/level', [LevelController::class, 'index']);
Route::post('/level/tambah_simpan', [UserController::class, 'tambah_simpan']);


    Route::get('/', [UserController::class, 'index']);
    // Route::get('/user/tambah', [UserController::class, 'tambah']);
    Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
    Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
    Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
    Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);




Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::put('/kategori/update_simpan/{id}', [KategoriController::class, 'update_simpan'])->name('kategori.update_simpan');
Route::delete('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');

Route::resources(['m_user' => POSController::class,]);

Route::get('/', [WelcomeController::class,'index']);
//user
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::put('/user/{id}', [UserController::class, 'edit_simpan'])->name('user.edit_simpan');
Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
Route::put('/user/edit_simpan/{id}', [UserController::class, 'edit_simpan'])->name('user.edit_simpan');

//level
Route::get('/level', [LevelController::class, 'index'])->name('level.index');
Route::get('/level/create', [LevelController::class, 'create'])->name('level.create');
Route::post('/level', [LevelController::class, 'store'])->name('level.store');
Route::get('/level/edit/{id}', [LevelController::class, 'edit'])->name('level.edit');
Route::put('/level/{id}', [LevelController::class, 'edit_simpan'])->name('level.edit_simpan');
Route::get('/level/delete/{id}', [LevelController::class, 'delete'])->name('level.delete');

//POSController
Route::resource('m_user', POSController::class);

//WelcomeController
Route::get('/', [WelcomeController::class, 'index']);

//modifikasi CRUD user
Route::group(['prefix' => 'user'], function(){
    Route::get('/', [UserController::class, 'index']);             //menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);         //menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']);      //menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);            //meyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);          //menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);     //menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);        //meyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']);    //menghapus data user

});

//modifikasi CRUD Level
Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']); //menampilkan halaman awal level
    Route::post('/list', [LevelController::class, 'list']); //menampilkan data level dalam bentuk json untuk database
    Route::get('create', [LevelController::class, 'create']); //menampilkan halaman form tambah level
    Route::post('/', [LevelController::class, 'store']); //menyimpan data level baru
    Route::get('/{id}', [LevelController::class, 'show']); //menampilkan detail level
    Route::get('/{id}/edit', [LevelController::class, 'edit']); //menampilkan halaman form edit level
    Route::put('/{id}', [LevelController::class, 'update']); //menyimpan perubahan data level
    Route::delete('/{id}', [LevelController::class, 'destroy']); //menghapus data level
});

//modifikasi CRUD Kategori
Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']); //menampilkan halaman awal kategori
    Route::post('/list', [KategoriController::class, 'list']); //menampilkan data kategori dalam bentuk json untuk database
    Route::get('create', [KategoriController::class, 'create']); //menampilkan halaman form tambah
    Route::post('/', [KategoriController::class, 'store']); //menyimpan data kategori baru
    Route::get('/{id}', [KategoriController::class, 'show']); //menampilkan detail kategori
    Route::get('/{id}/edit', [KategoriController::class, 'edit']); //menampilkan halaman form edit k
    Route::put('/{id}', [KategoriController::class, 'update']); //menyimpan perubahan data kategori
    Route::delete('/{id}', [KategoriController::class, 'destroy']); //menghapus data kategori
});
