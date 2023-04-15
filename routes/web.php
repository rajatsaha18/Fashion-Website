<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\AdminContactController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{id}', [HomeController::class, 'category'])->name('category');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/new-contact', [HomeController::class, 'createContact'])->name('new.contact');
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    Route::get('/add-category', [CategoryController::class,'index'])->name('add.category');
    Route::post('/new-category', [CategoryController::class,'create'])->name('new.category');
    Route::get('/manage-category', [CategoryController::class,'manage'])->name('manage.category');
    Route::get('/edit-category/{id}', [CategoryController::class,'edit'])->name('edit.category');
    Route::post('/update-category/{id}', [CategoryController::class,'update'])->name('update.category');
    Route::get('/delete-category/{id}', [CategoryController::class,'delete'])->name('delete.category');

    Route::get('/add-product', [ProductController::class,'index'])->name('index.product');
    Route::post('/new-product', [ProductController::class,'create'])->name('new.product');
    Route::get('/manage-product', [ProductController::class,'manage'])->name('manage.product');
    Route::get('/detail-product/{id}', [ProductController::class,'detailProduct'])->name('detail.product');
    Route::get('/edit-product/{id}', [ProductController::class,'edit'])->name('edit.product');
    Route::post('/update-product/{id}', [ProductController::class,'update'])->name('update.product');
    Route::get('/delete-product/{id}', [ProductController::class,'delete'])->name('delete.product');

    Route::get('/user-contact', [AdminContactController::class,'index'])->name('manage.contact');
    Route::get('/delete-contact/{id}', [AdminContactController::class,'delete'])->name('delete.contact');
});

