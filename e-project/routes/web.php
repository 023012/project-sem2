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

Route::get('/', function () {
    return view('site.pages.homepage');
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

    //user
    
    Route::prefix('/user-manage')->group(function(){
        Route::get('/user', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.user.index');
        Route::get('/user-create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin.user.create');
        Route::post('/user-create', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin.user.store');
        Route::get('/user/{user}/edit', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin.user.edit');
        Route::put('/user/{user}/edit', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin.user.update');
        Route::delete('/user/{user}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin.user.destroy');
    });
    //contact
     
    Route::prefix('/contact-manage')->group(function(){
        Route::get('/contact', [\App\Http\Controllers\Admin\ContactController::class, 'index'])->name('admin.contact.index');
        Route::get('/contact-create', [\App\Http\Controllers\Admin\ContactController::class, 'create'])->name('admin.contact.create');
        Route::post('/contact-create', [\App\Http\Controllers\Admin\ContactController::class, 'store'])->name('admin.contact.store');
        Route::get('/contact/{contact}/edit', [\App\Http\Controllers\Admin\ContactController::class, 'edit'])->name('admin.contact.edit');
        Route::put('/contact/{contact}/edit', [\App\Http\Controllers\Admin\ContactController::class, 'update'])->name('admin.contact.update');
        Route::delete('/contact/{contact}', [\App\Http\Controllers\Admin\ContactController::class, 'destroy'])->name('admin.contact.destroy');
});
});
