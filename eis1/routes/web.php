<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchaseOrderController;
use App\Http\Controllers\PurchaseRequestController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;


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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dbconn', function () {
    return view('dbconn');
});

Route::get('/po', function () {
    return view('po');
});

Route::get('/create', function () {
    return view('create');
});

Route::resource('/purchase_order', PurchaseOrderController::class, ['names' => 'purchase_order']);

Route::post('/purchase_request/getPR',[PurchaseRequestController::class, 'getPR'])->name('PurchaseRequest.getPR');

//SUPPLIER
Route::resource('/supplier', SupplierController::class, ['names' => 'supplier']);

//SUPPLIER
Route::resource('/product', ProductController::class, ['names' => 'product']);

Route::resource('/product_category', ProductCategoryController::class);