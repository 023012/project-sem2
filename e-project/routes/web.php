<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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

Route::get('/homepage', function () {
    return view('site.pages.homepage');
});

Route::get('/shop', function () {
    return view('site.pages.shop');
});

Route::get('/wishlist', function () {
    return view('site.pages.wishlist');
});

Route::get('/product-details-tab-left', function () {
    return view('site.pages.product-details-tab-left');
});

Route::get('/my-account', function () {
    return view('site.pages.my-account');
});

Route::get('/contact-us', function () {
    return view('site.pages.contact-us');
});

Route::get('/checkout', function () {
    return view('site.pages.checkout');
});

Route::get('/cart', function () {
    return view('site.pages.cart');
});

Route::get('/blog-single-sidebar-left', function () {
    return view('site.pages.blog-single-sidebar-left');
});

Route::get('/blog-grid-sidebar-left', function () {
    return view('site.pages.blog-grid-sidebar-left');
});

Route::get('/about-us', function () {
    return view('site.pages.about-us');
});

Route::get('/404', function () {
    return view('site.pages.404');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/auth/login', function () {
    return view('auth.login');
});

Route::get('/admin', function () {
    return view('admin.pages.dashboard');
});


// Admin
Route::group(['prefix' => 'admin'], function () {

    // category
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])
            ->name('admin.category.index');
        Route::get('/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/store', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/{category}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::put('/{category}/update', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/{category}/delete', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin.category.destroy');
    });

    //product-comments
    Route::group(['prefix' => 'product-comments'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\ProductCommentsController::class, 'index'])
            ->name('admin.category.index');
        Route::get('/create', [\App\Http\Controllers\Admin\ProductCommentsController::class, 'create'])->name('admin.product-comments.create');
        Route::post('/store', [\App\Http\Controllers\Admin\ProductCommentsController::class, 'store'])->name('admin.product-comments.store');
        Route::get('/{category}/edit', [\App\Http\Controllers\Admin\ProductCommentsController::class, 'edit'])->name('admin.product-comments.edit');
        Route::put('/{category}/update', [\App\Http\Controllers\Admin\ProductCommentsController::class, 'update'])->name('admin.product-comments.update');
        Route::delete('/{category}/delete', [\App\Http\Controllers\Admin\ProductCommentsController::class, 'destroy'])->name('admin.product-comments.destroy');
    });
});