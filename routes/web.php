<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
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
#Book function and detail
Route::get('/', [BookController::class, 'index']);
Route::get('/search', [BookController::class, 'searchBook'])->name('search_book');
Route::get('/bookdetail/{id}', [BookController::class, 'showBookDetails'])->name('book_Detail');

#Publisher, Contact, Publisher Detail
Route::get('/contact', [PublisherController::class, 'gbContact'])->name('GBContact');
Route::get('/publishers', [PublisherController::class, 'index']);
Route::get('/publisher/{id}', [PublisherController::class, 'showPublisherDetail'])->name('publisher_Detail');

#Category Detail
Route::get('/category/{id}', [CategoryController::class, 'showCategoryList'])->name('book_category_list');

