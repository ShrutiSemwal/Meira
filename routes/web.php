<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\doctorController;

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
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/aboutUs', function () {
    return view('about');
});

Route::get('/contactUs', function () {
    return view('contact');
});

Route::post('/register',[registerController::class,'registerDisplay']);

Route::post('/login',[registerController::class,'loginDisplay']);

Route::post('/contactUs',[registerController::class,'contactDisplay']);

Route::get('/doctors',[doctorController::class,'index']);
