<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\User\HomerController;
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

// Route::get('/homepage', function () {
//     return view('site.pages.homepage');
// });

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

    //admin
    Route::prefix('/admin-manage')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.admin-manage.index');
        Route::get('/create', [\App\Http\Controllers\Admin\AdminController::class, 'create'])->name('admin.admin-manage.create');
        Route::post('/store', [\App\Http\Controllers\Admin\AdminController::class, 'store'])->name('admin.admin-manage.store');
        Route::get('/{admin}/edit', [\App\Http\Controllers\Admin\AdminController::class, 'edit'])->name('admin.admin-manage.edit');
        Route::put('/{admin}/edit', [\App\Http\Controllers\Admin\AdminController::class, 'update'])->name('admin.admin-manage.update');
        Route::delete('/{admin}', [\App\Http\Controllers\Admin\AdminController::class, 'destroy'])->name('admin-manage.destroy');
    });


    // category
    Route::group(['prefix' => 'category'], function () {
        Route::get('/index', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])
            ->name('admin.category.index');
        Route::get('/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/store', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/{category}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::put('/{category}/update', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/{category}/delete', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin.category.destroy');
    });

        //product-comments
    Route::group(['prefix' => 'product-comments'], function () {
        Route::get('/index', [\App\Http\Controllers\Admin\ProductCommentsController::class, 'index'])
            ->name('admin.category.index');
        Route::get('/create', [\App\Http\Controllers\Admin\ProductCommentsController::class, 'create'])->name('admin.product-comments.create');
        Route::post('/store', [\App\Http\Controllers\Admin\ProductCommentsController::class, 'store'])->name('admin.product-comments.store');
        Route::get('/{category}/edit', [\App\Http\Controllers\Admin\ProductCommentsController::class, 'edit'])->name('admin.product-comments.edit');
        Route::put('/{category}/update', [\App\Http\Controllers\Admin\ProductCommentsController::class, 'update'])->name('admin.product-comments.update');
        Route::delete('/{category}/delete', [\App\Http\Controllers\Admin\ProductCommentsController::class, 'destroy'])->name('admin.product-comments.destroy');
    });
      //product
    Route::prefix('/products')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.products.index');
    });

});

// Client
Route::group(['prefix' => ''], function(){
    
    Route::get('/',[\App\Http\Controllers\User\HomeController::class, 'index'])->name('site.home');
    Route::get('/shop',[\App\Http\Controllers\User\ShopController::class, 'index'])->name('site.shop');
    Route::get('/blog-grid',[\App\Http\Controllers\User\BlogController::class, 'index'])->name('site.blog-grid-sidebar-left');
    Route::get('/blog-single',[\App\Http\Controllers\User\BlogController::class, 'blog_single_sidebar_left'])->name('site.blog-single-sidebar-left');
    Route::get('/about',[\App\Http\Controllers\User\AboutController::class, 'index'])->name('site.about-us');
    Route::get('/contact',[\App\Http\Controllers\User\ContactController::class, 'index'])->name('site.contact-us');
    Route::get('/wishlist',[\App\Http\Controllers\User\WishlistController::class, 'index'])->name('site.wishlist');
    Route::get('/cart',[\App\Http\Controllers\User\CartController::class, 'index'])->name('site.cart');
    Route::get('/checkout',[\App\Http\Controllers\User\CheckoutController::class, 'index'])->name('site.checkout');
    Route::get('/produc_details_default',[\App\Http\Controllers\User\ProductDetailsDefaultController::class, 'index'])->name('site.product_details_default');
    Route::get('/compare',[\App\Http\Controllers\User\CompareController::class, 'index'])->name('site.compare');
    Route::get('/my_account',[\App\Http\Controllers\User\MyAccountController::class, 'index'])->name('site.my_account');
    Route::get('/login',[\App\Http\Controllers\User\LoginController::class, 'index'])->name('auth.login');
});
