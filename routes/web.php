<?php

use GuzzleHttp\RetryMiddleware;
use Illuminate\Support\Facades\Route;
use App\Models\Product;


// Route::bind('testBind', fn($id) => Product::where('id', (int)$id)->firstOrFail());
Route::bind('testBind', function($id) 
{
   return Product::where('id', (int)$id * 2)->firstOrFail();
});

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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('/products', [App\http\Controllers\ProductController::class, 'index'])->name('products.index');
    Route::get('/user', [App\http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('/user/edit', [App\http\Controllers\UserController::class, 'edit'])->name('user.edit');
});

Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::delete('/user/{user}', [App\http\Controllers\UserController::class, 'destroy'])->name('user.destroy');

Route::put('/user/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');

