<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class, 'homeProductView'])->name('main-page');

Route::get('/catalog', [ProductController::class, 'allProducts'])->name('catalog');

Route::get('/add-product', function () {
    return view('add-product');
})->name('add_product');

Route::post('/add-product/create', [ProductController::class, 'create'])->name('add_product_submit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product/{id}', [ProductController::class, 'getProduct'])->name('product-detail-view');

Route::group(['middleware' => ['role:admin']], function() {
    Route::get('/test', function() {
        return view('test');
    });
});

Route::middleware(['role:admin'])->prefix('/admin-panel')->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('homeAdmin');

    Route::resource('product', ProductAdminController::class);
});
