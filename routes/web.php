<?php

use App\Http\Controllers\CabinetController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
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
Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class,'show'])->name('register');
    Route::get('/login', [LoginController::class,'show'])->name('login');
});
Route::get('/cabinet', [CabinetController::class,'show'])->name('cabinet')->middleware('user.check');
Route::get('/posts', [PostController::class,'index'])->name('posts');
Route::get('/post/{post}', [PostController::class,'single'])->name('post');
Route::get('/post/{post}/edit', [CabinetController::class,'edit'])->name('update')->middleware('user.check');

//Аутентификация
Route::post('/register', [RegisterController::class,'register'])->name('register_user');
Route::post('/login', [LoginController::class,'login'])->name('login_user');
Route::get('/logout', [LogoutController::class,'logout'])->name('logout');

Route::name('post.')->group(function (){
    Route::post('/create', [CabinetController::class,'create'])->name('create');
    Route::post('/delete', [CabinetController::class,'delete'])->name('delete');
    Route::patch('/update/{post}', [CabinetController::class,'update'])->name('update');

});
