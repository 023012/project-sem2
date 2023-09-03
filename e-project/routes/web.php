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


Route::get('/cart', [CartController::class, 'index'])->name('site.cart');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/my-profile', [MyAccountController::class, 'index'])->name('site.user.profile');
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('site.checkout');

    Route::get('logout',[LoginController::class, 'logout'] )->name('site.logout');
});


require 'admin.php';

