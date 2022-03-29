<?php
use App\Http\Controllers\MainController;
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
Route::get('/', [MainController::class, 'index']);
Route::get('/aboutUs', [MainController::class, 'aboutUs']);
Route::get('/blogDetails', [MainController::class, 'blogDetails']);
Route::get('/blogLeftSidebar', [MainController::class, 'blogLeftSidebar']);
Route::get('/blog', [MainController::class, 'blog']);
Route::get('/cart', [MainController::class, 'cart']);
Route::get('/checkout', [MainController::class, 'checkout']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/index2', [MainController::class, 'index2']);
Route::get('/loginRegister', [MainController::class, 'loginRegister']);
Route::get('/myAccount', [MainController::class, 'myAccount']);
Route::get('/shopPage', [MainController::class, 'shopPage']);
Route::get('/productDetails', [MainController::class, 'productDetails']);
Route::get('/shopList', [MainController::class, 'shopList']);

Route::get('/wishlist', [MainController::class, 'wishlist']);

