<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/book', [BookController::class, 'index']);
Route::get('books/{id}', [BookController::class, 'show']);



