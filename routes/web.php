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
    return view('welcome');
});

Route::get('/shop', function () {
    return view('pages.guest.shop');
});

Route::get('/product-detail', function () {
    return view('pages.guest.product-detail');
});

Route::get('/lookbook', function () {
    return view('pages.guest.lookbook');
});

Route::get('/news', function () {
    return view('pages.guest.news');
});

Route::get('/myth', function () {
    return view('pages.guest.myth');
});

Route::get('/myth-detail', function () {
    return view('pages.guest.myth-detail');
});

Route::get('/test', [App\Http\Controllers\ArticleController::class, 'index']);

Auth::routes();

Route::get('/article', [App\Http\Controllers\ArticleController::class, 'index']);
Route::get('/article/create', [App\Http\Controllers\ArticleController::class, 'create']);
Route::post('article/store', [App\Http\Controllers\ArticleController::class, 'store']);
Route::get('/article/{id}', [App\Http\Controllers\ArticleController::class, 'detail']);
Route::get('/article/edit/{id}', [App\Http\Controllers\ArticleController::class, 'edit']);
Route::patch('/article/update/{id}', [App\Http\Controllers\ArticleController::class, 'update']);
Route::delete('/article/delete/{id}', [App\Http\Controllers\ArticleController::class, 'destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
