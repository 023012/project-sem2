<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductCommentsController;
// Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin.dashboard');

    //admin
    Route::prefix('/admin-manage')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.admin-manage.index');
        Route::get('/create', [AdminController::class, 'create'])->name('admin.admin-manage.create');
        Route::post('/store', [AdminController::class, 'store'])->name('admin.admin-manage.store');
        Route::get('/{admin}/edit', [AdminController::class, 'edit'])->name('admin.admin-manage.edit');
        Route::put('/{admin}/edit', [AdminController::class, 'update'])->name('admin.admin-manage.update');
        Route::delete('/{admin}', [AdminController::class, 'destroy'])->name('admin-manage.destroy');
    });


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
        Route::get('/create', [ProductCommentsController::class, 'create'])->name('admin.product-comments.create');
        Route::post('/store', [ProductCommentsController::class, 'store'])->name('admin.product-comments.store');
        Route::get('/{category}/edit', [ProductCommentsController::class, 'edit'])->name('admin.product-comments.edit');
        Route::put('/{category}/update', [ProductCommentsController::class, 'update'])->name('admin.product-comments.update');
        Route::delete('/{category}/delete', [ProductCommentsController::class, 'destroy'])->name('admin.product-comments.destroy');
    });
    //product
    Route::prefix('/products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.products.index');
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
});
