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
        Route::get('/', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])
            ->name('admin.category.index');
        Route::get('/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/store', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/{category}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::put('/{category}/update', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/{category}/delete', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin.category.destroy');
    });
    //product
    Route::prefix('/products')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.products.index');
    });
});
