<?php

use App\Http\Controllers\Books;
use App\Http\Controllers\Users;
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
    return view('users/login');
});

Route::get('/tests', function () {
    return 'Welcome into the Library';
});

// Book Routes
Route::get('/home', [Books::class, 'home']);
Route::get('/view/{id}', [Books::class, 'view']);
Route::get('/create', [Books::class, 'create']);
Route::post('/store', [Books::class, 'store']);
Route::get('/edit/{id}', [Books::class, 'edit']);
Route::patch('/update/{id}', [Books::class, 'update']);
Route::get('/delete/{id}', [Books::class, 'delete']);

// User Routes
Route::get('/login', [Users::class, 'login']);
Route::get('/logout', [Users::class, 'logout']);
Route::post('/auth', [Users::class, 'auth']);
Route::get('/register', [Users::class, 'register']);
Route::get('/refresh-captcha', [Users::class, 'refreshCaptcha']);
Route::post('/save', [Users::class, 'save']);
Route::get('/profile', [Users::class, 'profile']);
Route::patch('/update-user', [Users::class, 'update']);
