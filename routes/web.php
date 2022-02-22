<?php

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

Route::get('/about', function () {
    return view('about' , [
        "title" => "about",
        "nama" => "fatikhul rafi musaffa",
        "email" => "fatihmusyafa72@gmail.com",
        "gambar" => "images/profile.jpg"
    ]);
});

Route::get('/', function () {
    return view('index', [
        "title" => "beranda"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "gallery"
    ]);
});

use App\Http\Controllers\ContactController;
Route::resource('/contacts',ContactController::class);
Auth::routes();

Route::group(['middleware' => ['auth']], Function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
    
