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
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->group(function () {
Route::resource('/categories',\App\Http\Controllers\CategoryController::class);
Route::resource('/services',\App\Http\Controllers\ServiceController::class);

});

Route::get('/{page}', [\App\Http\Controllers\AdminController::class, 'index']);
require __DIR__.'/auth.php';
