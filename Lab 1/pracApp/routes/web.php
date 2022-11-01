<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
    return view('welcome');
});


Route::get('/home', [HomeController::class, 'get']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'postLogin']);
Route::get('/register', [HomeController::class, 'register']);
Route::post('/register', [HomeController::class, 'postRegister']);
Route::get('/profile', [HomeController::class, 'profile']);