<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

// prefixs url, seluruh url mengandung awalan v1
// contoh http://127.0.0.1:8000/v1/product dan seterusnya
Route::prefix('v1')->group(function () {
    
    // dashboard 
    Route::get('', [App\Http\Controllers\Backend\IndexController::class, 'index'])->name('dashboard');

    // route product
    Route::resource('product', App\Http\Controllers\Backend\ProductController::class);

    // route users
    Route::resource('users', App\Http\Controllers\Backend\ProductController::class);

    // route orders
    Route::get('orders', [App\Http\Controllers\Backend\OrderanController::class, 'index'])->name('orderan.index');

    // route reviews
    Route::get('review', [App\Http\Controllers\Backend\ReviewController::class, 'index'])->name('review.index');

});

