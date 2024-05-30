<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReturnController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get("/logout", function(){
    Auth::logout();
    return redirect()->route('login');
})->name('logout');


Route::group(['middleware' => ['auth']] , function() {
    Route::get('/auth', [HomeController::class, '__construst'])->name('auth');
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/books', [BookController::class, 'index'])->name('books');
    Route::get('/borrows', [BorrowController::class, 'index'])->name('borrows');
});

Route::group(['middleware' => ['auth','check.roles:99']] , function() {
    Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
    Route::get('/book/edit/{book_id}', [BookController::class, 'edit'])->name('book.edit');
    Route::get('/book/destroy/{book_id}', [BookController::class, 'destroy'])->name('book.destroy');

    Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
    Route::post('/book/update', [BookController::class, 'update'])->name('book.update');

    Route::get('/borrow/create', [BorrowController::class, 'create'])->name('borrow.create');
    Route::get('/borrow/edit/{borrow_id}', [BorrowController::class, 'edit'])->name('borrow.edit');
    Route::get('/borrow/destroy/{borrow_id}', [BorrowController::class, 'destroy'])->name('borrow.destroy');

    Route::post('/borrow/store', [BorrowController::class, 'store'])->name('borrow.store');
    Route::post('/borrow/update', [BorrowController::class, 'update'])->name('borrow.update');
});
