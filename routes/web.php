<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController AS UC;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// User space group
Route::prefix('user')->name('user-')->group(function () {
    Route::get('/show', [UC::class, 'show'])->name('show');
    Route::get('/edit', [UC::class, 'edit'])->name('edit');
    Route::put('/update', [UC::class, 'update'])->name('update');
    Route::get('/changepw', [UC::class, 'changepw'])->name('changepw');
    Route::put('/updatepw', [UC::class, 'updatepw'])->name('updatepw');
    Route::get('/delete', [M::class, 'delete'])->name('delete');
    Route::delete('/destroy', [M::class, 'destroy'])->name('destroy');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

