<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/',[MainController::class,'general'])->name('general');
Route::get('/news', [MainController::class, 'news'])->name('news');
Route::get('/news/{id}', [MainController::class, 'new_id'])->name('new');
Route::get('/fond', [MainController::class, 'info_fond'])->name('info_fond');
//Route::get('/catalog/{id}', [MainController::class, 'products'])->name('products');
//Route::get('/products/{id_product}', [MainController::class, 'product'])->name('product');
//Route::get('/our_works/{count}', [MainController::class, 'our_works_add'])->name('our_works_add');
//Route::post('/products/{id_product}', [MainController::class, 'form'])->name('product_form');


