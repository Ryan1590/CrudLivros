<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/book', [BookController::class, 'index'])->name('book');
Route::get('books/create', [BookController::class, 'create']);
Route::get('books/{id}', [BookController::class, 'show']); 
Route::post('books', [BookController::class, 'store']); 
Route::delete('books/{id}', [BookController::class, 'destroy'])->name('books.destroy');
Route::get('books/{id}/edit', [BookController::class, 'edit'])->name('book.edit');
Route::put('books/{id}', [BookController::class, 'update'])->name('book.update');