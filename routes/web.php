<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/register', [RegisterController::class,'show'])->name('register');
Route::get('/login', [LoginController::class,'show'])->name('login');

Route::post('/register', [RegisterController::class,'register_user'])->name('register_user');
Route::post('/login', [LoginController::class,'login_user'])->name('login_user');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

