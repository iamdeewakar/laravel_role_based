<?php

use App\Http\Controllers\AuthController;
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

Route::get('/register', function () {
    return view('register');
});


Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/user-dashboard', function () {
    return view('user_dashboard');
})->name('user.dashboard')->middleware('auth');

Route::get('/admin-dashboard', function () {
    return view('admin_dashboard');
})->name('admin.dashboard')->middleware('auth');


