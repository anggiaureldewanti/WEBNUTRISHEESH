<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
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

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/login', [LoginController::class, 'halamanlogin']);

//login-regis all
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('welcome');
});


//user
Route::group(['middleware' => ['auth','ceklevel:user']], function (){
    Route::get('/histori-laporanmu', function () {
        return view('pages/histori/histori-laporan');
    });

    //route komentar
    Route::resource('/komentar', \App\Http\Controllers\KomentarController::class);
    Route::resource('/kandungan-user', \App\Http\Controllers\KandunganUserController::class);
    Route::get('/kandungan-user', [\App\Http\Controllers\KandunganUserController::class, 'index'])->name('search');
    
    
});


// // admin
// Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
//     Route::resource('/kandungan', \App\Http\Controllers\KandunganController::class);
//     Route::resource('/resep', \App\Http\Controllers\ResepController::class, 'index')->names('resep');
// });
// admin
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::resource('/kandungan', \App\Http\Controllers\KandunganController::class);
    Route::resource('/resep', \App\Http\Controllers\ResepController::class)->names([
        'index' => 'resep.index',
        'create' => 'resep.create',
        'store' => 'resep.store',
        'show' => 'resep.show',
        'edit' => 'resep.edit',
        'update' => 'resep.update',
        'destroy' => 'resep.destroy',
    ]);
});



     Route::get('/search', [\App\Http\Controllers\KandunganController::class, 'index'])->name('search');


