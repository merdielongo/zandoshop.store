<?php

use App\Livewire\Counter;
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
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/counter', Counter::class);
//Route::get('/template', function () {
//    return view('layouts.template');
//});
Route::get('/', [\App\Http\Controllers\PageController::class, 'index'])->name('pages.index');
Route::get('/about', [\App\Http\Controllers\PageController::class, 'about'])->name('pages.about');
Route::get('/contact', [\App\Http\Controllers\PageController::class, 'contact'])->name('pages.contact');
Route::get('/shop', [\App\Http\Controllers\PageController::class, 'shop'])->name('pages.shop');
Route::get('/product', [\App\Http\Controllers\PageController::class, 'product'])->name('pages.product');
