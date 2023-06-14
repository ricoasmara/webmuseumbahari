<?php

use App\Http\Controllers\DashboardPerpustakaanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Models\Perpustakaan;


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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/perpustakaan', [PerpustakaanController::class, 'index']);




Route::get('/perpustakaan/{detail:id}', [PerpustakaanController::class, 'show']);


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "Nomer" => "0857****",
        "Email" => "museumB@gmail.com"
    ]);
});

Route::get('/koleksi', function () {
    return view('koleksi', [
        "title" => "Koleksi"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');


Route::resource('/dashboard/posts', DashboardPerpustakaanController::class)->middleware('auth');