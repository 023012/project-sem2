<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Admin\HomeController;
//use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductCommentsController;
use App\Http\Controllers\Admin\DiscountController;

// Admin
Route::group(['prefix' => 'admin'], function () {

    Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login.post');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {

        Route::get('/', function () {
            return view('admin.pages.dashboard');
        })->name('admin.dashboard');

    });


    //admin
    //    Route::prefix('/admin-manage')->group(function () {
    //        Route::get('/', [AdminController::class, 'index'])->name('admin.admin-manage.index');
    //        Route::get('/create', [AdminController::class, 'create'])->name('admin.admin-manage.create');
    //        Route::post('/store', [AdminController::class, 'store'])->name('admin.admin-manage.store');
    //        Route::get('/{admin}/edit', [AdminController::class, 'edit'])->name('admin.admin-manage.edit');
    //        Route::put('/{admin}/edit', [AdminController::class, 'update'])->name('admin.admin-manage.update');
    //        Route::delete('/{admin}', [AdminController::class, 'destroy'])->name('admin-manage.destroy');
    //    });


    // category
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, 'index'])
            ->name('admin.category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::put('/{category}/update', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/{category}/delete', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
    });

    //product-comments
    Route::group(['prefix' => 'product-comments'], function () {
        Route::get('/', [ProductCommentsController::class, 'index'])
            ->name('admin.product-comments.index');

        Route::delete('/{productComments}/delete', [ProductCommentsController::class, 'destroy'])->name('admin.product-comments.destroy');
    });
    //product
    Route::prefix('/products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.products.index');
        Route::get('/create', [ProductController::class, 'create'])->name('admin.product.create');
        Route::post('/store', [ProductController::class, 'store'])->name('admin.product.store');
        Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
        Route::put('/{product}/edit', [ProductController::class, 'update'])->name('admin.product.update');
        Route::delete('/{product}/delete', [ProductController::class, 'destroy'])->name('admin.product.destroy');
    });

    //user

    Route::prefix('/user-manage')->group(function () {
        Route::get('/user', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('/user-create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/user-create', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::put('/user/{user}/edit', [UserController::class, 'update'])->name('admin.user.update');
        Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('admin.user.destroy');
    });
    //contact

    Route::prefix('/contact')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('admin.contact.index');
        Route::get('/create', [ContactController::class, 'create'])->name('admin.contact.create');
        Route::post('/store', [ContactController::class, 'store'])->name('admin.contact.store');
        Route::get('/{contact}/edit', [ContactController::class, 'edit'])->name('admin.contact.edit');
        Route::put('/{contact}/edit', [ContactController::class, 'update'])->name('admin.contact.update');
        Route::delete('/{contact}/delete', [ContactController::class, 'destroy'])->name('admin.contact.destroy');
    });

    //discount
    
    Route::prefix('/discount')->group(function () {
        Route::get('/', [DiscountController::class, 'index'])->name('admin.discount.index');
        Route::get('/create', [DiscountController::class, 'create'])->name('admin.discount.create');
        Route::post('/store', [DiscountController::class, 'store'])->name('admin.discount.store');
        Route::get('/{discount}/edit', [DiscountController::class, 'edit'])->name('admin.discount.edit');
        Route::put('/{discount}/edit', [DiscountController::class, 'update'])->name('admin.discount.update');
        Route::delete('/{discount}/delete', [DiscountController::class, 'destroy'])->name('admin.discount.destroy');
    });
});
