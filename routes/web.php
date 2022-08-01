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
//Route::get('/', function () {
//    return view('front.index');
//});
Route::resource('/',\App\Http\Controllers\MainPageController::class);
Route::get('/service-details',[\App\Http\Controllers\ServiceDetailsController::class,'index']);

//Route::get('/add-service', function () {
//    return view('front.add-service');
//});
Route::post('/add-service',[\App\Http\Controllers\AddServiceController::class,'store'])->name('add-service');

//Route::get('/front-login', function () {
//    return view('front.login');
//});
Route::get('front-login', [\App\Http\Controllers\TechnicalAuthController::class, 'index'])->name('front-login');
Route::post('post-login', [\App\Http\Controllers\TechnicalAuthController::class, 'postLogin'])->name('login.post');

Route::get('/sign-up-as', function () {
    return view('front.sign-up-as');
});
Route::get('/sign-up-tech', function () {
    return view('front.sign-up-tech');
});
Route::get('/sign-up-customer', function () {
    return view('front.sign-up-customer');
});

Route::get('/common-questions', function () {
    return view('front.common-questions');
});
Route::get('/about', function () {
    return view('front.about');
});
Route::get('/messages', function () {
    return view('front.messages');
});
Route::get('/notifications', function () {
    return view('front.notifications');
});
Route::get('/chat', function () {
    return view('front.chat');
});

Route::resource('/tech-profile',\App\Http\Controllers\ServiceProviderController::class);

Route::get('/resevations-list', function () {
    return view('front.resevations-list');
});
Route::get('/appointments', function () {
    return view('front.appointments');
});
Route::get('/forget-password', function () {
    return view('front.forget-password');
});







Route::get('/login', function () {
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
Route::resource('/technicals',\App\Http\Controllers\TechnicalsController::class);
Route::resource('/customers',\App\Http\Controllers\CustomerController::class);
Route::resource('/bookings',\App\Http\Controllers\BookingController::class);

});

Route::get('/{page}', [\App\Http\Controllers\AdminController::class, 'index']);
require __DIR__.'/auth.php';
