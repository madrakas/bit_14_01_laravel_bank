<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController AS UC;
use App\Http\Controllers\AccountController AS AC;
use App\Http\Controllers\TransactionController AS TC;


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
    Route::get('/delete', [UC::class, 'delete'])->name('delete');
    Route::delete('/destroy', [UC::class, 'destroy'])->name('destroy');
    Route::post('/add-account', [AC::class, 'StoreAccountByUser'])->name('add-account');
    Route::get('/show-accounts', [AC::class,  'showAccountsByUser'])->name('show-accounts');
    Route::get('/delete-account/{account}', [AC::class, 'deleteByUser'])->name('delete-account');
    Route::delete('/destroy-account/{account}', [AC::class, 'destroyByUser'])->name('destroy-account');
});

Route::prefix('transaction')->name('transaction-')->group(function () {
    Route::get('/create', [TC::class, 'create'])->name('create');
    Route::post('/', [TC::class, 'store'])->name('store');
    Route::get('/view-user', [TC::class, 'viewByUser'])->name('view-user');
    Route::get('/view-user-account/{account}', [TC::class, 'ViewByUserAccountID'])->name('view-user-account');
});

//Account space group
Route::prefix('account')->name('account-')->group(function(){
   
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

