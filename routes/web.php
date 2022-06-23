<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\DetailPageController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('TentangKami' , function(){
    return view('tentangKami');
})->name('tentang_kami');

Route::get('Edukasi' , function(){
    return view('edukasi');
})->name('edukasi');

// Route::get('DetaiPage/{edukasiPage:slug}', function() {
//     return view('detailPage');
// })->name('detail');

Route::get('detailPage/{edukasiBlog:slug}', [DetailPageController::class, 'create'])->name('detail.create');


// socialite routes
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
