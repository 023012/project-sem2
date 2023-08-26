<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\User\ProductDetailController;
use App\Http\Controllers\User\HomeController;
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
//Route::get('product',[\App\Http\Controllers\User\ShopController::class,'showProductDetail']);
//Route::get('product',function (){
//    return view('site.pages.product');
//});
// Client
Route::group(['prefix' => ''], function () {

    Route::get('/', [\App\Http\Controllers\User\HomeController::class, 'index'])->name('site.home');
    Route::get('/shop', [\App\Http\Controllers\User\ShopController::class, 'index'])->name('site.shop');
    Route::get('/blog-grid', [\App\Http\Controllers\User\BlogController::class, 'index'])->name('site.blog-grid-sidebar-left');
    Route::get('/blog-single', [\App\Http\Controllers\User\BlogController::class, 'blog_single_sidebar_left'])->name('site.blog-single-sidebar-left');
    Route::get('/about', [\App\Http\Controllers\User\AboutController::class, 'index'])->name('site.about-us');
    Route::get('/contact', [\App\Http\Controllers\User\ContactController::class, 'index'])->name('site.contact-us');
    Route::get('/wishlist', [\App\Http\Controllers\User\WishlistController::class, 'index'])->name('site.wishlist');
    Route::get('/cart', [\App\Http\Controllers\User\CartController::class, 'index'])->name('site.cart');
    Route::get('/checkout', [\App\Http\Controllers\User\CheckoutController::class, 'index'])->name('site.checkout');
    Route::get('/product/{id}', [\App\Http\Controllers\User\ShopController::class, 'showProductDetail'])->name('site.product');
    Route::get('/compare', [\App\Http\Controllers\User\CompareController::class, 'index'])->name('site.compare');
    Route::get('/my_account', [\App\Http\Controllers\User\MyAccountController::class, 'index'])->name('site.my_account');
    Route::get('/login', [\App\Http\Controllers\User\LoginController::class, 'index'])->name('auth.login');
});

require 'admin.php';

