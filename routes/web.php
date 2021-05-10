<?php

use App\Http\Controllers\Books;
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

Route::get('/tests', function () {
    return 'Welcome into the Library';
});

Route::get('/home', [Books::class, 'home']);
Route::get('/view/{id}', [Books::class, 'view']);
Route::get('/create', [Books::class, 'create']);
Route::post('/store', [Books::class, 'store']);
Route::get('/edit/{id}', [Books::class, 'edit']);
Route::put('/update/{id}', [Books::class, 'update']);
Route::delete('/delete/{id}', [Books::class, 'delete']);
