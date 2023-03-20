<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
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

// Route Pages
Route::get('/', [PagesController::class, 'home'])->name('home.page');
Route::get('/my-cart', [PagesController::class, 'cart'])->name('cart.page');
Route::get('/admin-panel', [PagesController::class, 'admin'])->name('admin.page');

// Product Routes
Route::get('/product-index', [ProductController::class, 'index'])->name('index.product');
Route::get('/product/add', [ProductController::class, 'create'])->name('create.product');
Route::post('/product/store', [ProductController::class, 'store'])->name('store.product');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('edit.product');
Route::put('/product/{id}/update', [ProductController::class, 'update'])->name('update.product');
Route::get('/product/{id}/delete', [ProductController::class, 'destroy'])->name('delete.product');

// Category Routes
Route::get('/category-index', [CategoryController::class, 'index'])->name('index.category');
Route::get('/category/add', [CategoryController::class, 'create'])->name('create.category');
Route::post('/category/store', [CategoryController::class, 'store'])->name('store.category');
Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('edit.category');
Route::put('/category/{id}/update', [CategoryController::class, 'update'])->name('update.category');
Route::get('/category/{id}/delete', [CategoryController::class, 'destroy'])->name('delete.category');

// Mendesain Tabel dan membuat migration (05.40 - 06. 40)
// Menyiapkan templating halaman admin (08.20 - 10.00)
// Menyiapkan view crud admin untuk product & category (13.30 - 16.00)
// Menyiapkan view crud admin untuk product & category part 2 (6.50 - 07.30)
// Persiapan Validasi form untuk CRUD (09.00 - 11.00)
// Menjalankan fungsi crud Product (13.00 - 13.30)
// Menjalankan fungsi crud Category (13.30 - 14.10)
// Mendinamiskan Product pada Halaman Beranda (14.10 - 15.35)
// Menyiapkan view untuk cart (07.07 - )
