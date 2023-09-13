<?php

use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\ShopController;
use App\Http\Controllers\Site\MyAccountController;
use App\Http\Controllers\Site\CheckoutController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\WishlistController;
use App\Http\Controllers\Site\CompareController;
use App\Http\Controllers\Site\CartController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
// Client

Route::get('/login', [LoginController::class, 'loginForm'])->name('site.login');
Route::post('/login', [LoginController::class, 'login'])->name('site.login.post');
Route::get('/register', [RegisterController::class, 'registerForm'])->name('site.register');
Route::post('/register', [RegisterController::class, 'register'])->name('site.register.post');

Route::get('/', [HomeController::class, 'index'])->name('site.home');
Route::get('/blogs', [BlogController::class, 'index'])->name('site.blogs');
Route::get('/blog-single', [BlogController::class, 'blog_single'])->name('site.blog-single');
Route::get('/about', [AboutController::class, 'index'])->name('site.about-us');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('site.wishlist');
Route::get('/compare', [CompareController::class, 'index'])->name('site.compare');

//Shop
Route::get('/shop', [ShopController::class, 'index'])->name('site.shop');
Route::get('/{product}/product', [ShopController::class, 'showProductDetail'])->name('site.product');
//Contact
Route::get('/contact', [ContactController::class, 'index'])->name('site.contact-us');
Route::post('/contact', [ContactController::class, 'sendContact'])->name('site.contactUs.sendContact');
//Cart
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/my-profile', [MyAccountController::class, 'index'])->name('site.user.profile');
    Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('site.checkout.post');
    Route::get('/checkout-success', [CheckoutController::class, 'success'])->name('site.checkout.success');


    Route::get('logout',[LoginController::class, 'logout'] )->name('site.logout');
});

//Search
Route::get('/search', [HomeController::class, 'search'])->name('site.search');

require 'admin.php';

