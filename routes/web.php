<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/' , [HomeController::class , 'home'])->name('home1');

Route::get('/category/post' , [AdminController::class , 'CategoryPost'])->name('CategoryPost');

Route::get('/admin' , [AdminController::class , 'admin'])->name('admin')->middleware(['auth' , 'Role']);

Route::get('/admin/products/list' , [AdminController::class , 'productsList'])->name('productsList')->middleware(['auth' , 'Role']);

Route::get('/products' , [AdminController::class , 'productsList'])->name('productsList')->middleware(['auth' , 'Role']);

Route::get('/categories' , [AdminController::class , 'categoryList'])->name('categoryList')->middleware(['auth' , 'Role']);

Route::get('/product/create/move/to/insert' , [AdminController::class , 'productCreate'])->name('productCreate')->middleware(['auth' , 'Role']);

Route::get('/categories/create/move/to/insert' , [AdminController::class , 'categoryCreate'])->name('categoryCreate')->middleware(['auth' , 'Role']);

Route::post('/admin/product/insert' , [AdminController::class , 'productInsert'])->name('productInsert')->middleware(['auth' , 'Role']);

Route::post('admin/category/insert' , [AdminController::class , 'categoryInsert'])->name('categoryInsert')->middleware(['auth' , 'Role']);

Route::get('/admin/product/edit/{id}' , [AdminController::class , 'productEdit'])->name('productEdit')->middleware(['auth' , 'Role']);

Route::post('/admin/products/update' , [AdminController::class , 'productsUpdate'])->name('productsUpdate')->middleware(['auth' , 'Role']);

Route::get('/admin/category/edit/{id}' , [AdminController::class , 'categoryEdit'])->name('categoryEdit')->middleware(['auth' , 'Role']);

Route::post('/admin/category/update' , [AdminController::class , 'categoryUpdate'])->name('categoryUpdate')->middleware(['auth' , 'Role']);

Route::get('/admin/product/delete/{id}' , [AdminController::class , 'productDelete'])->name('productDelete')->middleware(['auth' , 'Role']);

Route::get('/admin/category/delete/{id}' , [AdminController::class , 'categoryDelete'])->name('categoryDelete')->middleware(['auth' , 'Role']);

Route::get('/category/{id}' , [AdminController::class , 'categories'])->name('categories');

Route::get('/product' , [AdminController::class , 'product'])->name('product');

Route::get('/product/slider/{id}' , [AdminController::class , 'productSlider'])->name('productSlider');

Route::get('/search' , [AdminController::class , 'search'])->name('search');

Route::get('/basket/add/{products_id}' , [BasketController::class , 'add'])->name('basket.add')->middleware('auth');

Route::get('/shopping/home' , [BasketController::class , 'Shopphome'])->name('shopp.home')->middleware('auth');

Route::get('/add/count/{id}' , [BasketController::class , 'addCount'])->name('addCount');

Route::get('min/count/{id}' , [BasketController::class , 'minCount'])->name('minCount');

Route::get('/delete/basket/{id}' , [BasketController::class , 'deleteBasket'])->name('deleteBasket');

Route::get('/checkout/{basket_id}' , [BasketController::class , 'checkout'])->name('checkout');

Route::get('/front/wallet/{id}' , [HomeController::class , 'frontWallet'])->name('frontWallet');

Route::post('/payment/request', [PaymentController::class, 'requestPayment'])->name('payment.request');

Route::get('/payment/verify', [PaymentController::class, 'verifyPayment'])->name('payment.verify');

Route::get('/wallet/addprice/{user_id}', [HomeController::class, 'addPrice'])->name('add.price');

// Route::get('/wallet/verify', [HomeController::class, 'verifyWallet'])->name('verify.wallet');

Route::get('/wallet/insert/price/{user_id}', [HomeController::class, 'insertPrice'])->name('insert.price');


Auth::routes();

Route::get('/logout' , [LogoutController::class , 'logout'])->name('logout');

// Route::get('/home', [HomeController::class, 'index'])->name('home');
