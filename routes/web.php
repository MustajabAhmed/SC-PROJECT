<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\reviewController;
use App\Http\Controllers\ScriptController;
use App\Http\Controllers\SocialliteController;
use App\Http\Controllers\WishlistController;
use App\Models\Product;
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
    return view('pages.index');
});

Route::view('faq', 'pages.faq');
Route::view('about', 'pages.about');
Route::view('contact', 'pages.contact');
Route::view('offer', 'pages.offer');

Auth::routes();

Route::middleware(['isadmin'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::view('profile', 'pages.profile');

//Category
Route::get('all-catagory', [CategoryController::class, 'all_category']);
Route::get('add-category', [CategoryController::class, 'index']);
Route::post('store-category', [CategoryController::class, 'store']);
Route::get('category', [CategoryController::class, 'view']);
Route::get('delete-category/{id}', [CategoryController::class, 'delete']);

//Product
Route::get('add-product', [ProductController::class, 'index']);
Route::post('store-product', [ProductController::class, 'store']);
Route::get('product', [ProductController::class, 'view']);
Route::get('delete-product/{id}', [ProductController::class, 'delete']);

Route::get('auth/google', [SocialliteController::class, 'redirectToGoogle']);
Route::get('callback/google', [SocialliteController::class, 'handleCallback']);

Route::get('all-product', [ProductController::class, 'all_product']);
Route::get('product/{id}', [ProductController::class, 'specific_product']);
Route::post('add_review', [reviewController::class, 'index']);
Route::get('show_review', [reviewController::class, 'show']);

Route::get('add-wishlist/{id}', [WishlistController::class, 'store']);
Route::get('remove-wishlist/{id}', [WishlistController::class, 'delete']);

Route::get('wishlist', [WishlistController::class, 'view']);

Route::post('add-cart', [CartController::class, 'add']);
Route::get('remove-cart/{id}', [CartController::class, 'remove']);

Route::get('checkout', [CartController::class, 'view']);
