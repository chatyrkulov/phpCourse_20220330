<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Login;
use App\Http\Controllers\Registration;

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
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/mission', function () {
    return view('mission');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/donate', function () {
    return view('donate');
});
Route::get('/posts', [PostController::class, 'Submit']);

Route::get('/registration', [Registration::class, 'index']);

Route::post('/registration', [Registration::class, 'registration']);

Route::get('/login', [Login::class, 'login']);

Route::post('/login', [Login::class, 'getLogin']);
