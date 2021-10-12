<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\SellersController;
use App\Http\Controllers\BillsController;
use App\Http\Controllers\CategoryProdsController;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\InputsController;
use App\Http\Controllers\HayPalmentController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DetailController;


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
    return view('welcome');
});

//CLIENTS
Route::get('/api/client/index',[ClientsController::class, 'index']);
Route::get('/api/client/getData',[ClientsController::class, 'getData']);
Route::post('/api/client/store',[ClientsController::class, 'store']);
Route::put('/api/client/update',[ClientsController::class, 'update']);
Route::delete('/api/client/delete',[ClientsController::class, 'delete']);

//SUPPLIERS
Route::get('/api/supplier/index',[SuppliersController::class, 'index']);
Route::get('/api/supplier/getData',[SuppliersController::class, 'getData']);
Route::post('/api/supplier/store',[SuppliersController::class, 'store']);
Route::put('/api/supplier/update',[SuppliersController::class, 'update']);
Route::delete('/api/supplier/update',[SuppliersController::class, 'delete']);



//SELLERS
Route::get('/api/seller/index',[SellersController::class, 'index']);
Route::get('/api/seller/getData',[SellersController::class, 'getData']);
Route::post('/api/seller/store',[SellersController::class, 'store']);
Route::put('/api/seller/update',[SellersController::class, 'update']);
Route::delete('/api/seller/update',[SellersController::class, 'delete']);



//BILLS
Route::get('/api/bill/index',[BillsController::class, 'index']);
Route::get('/api/bill/getData',[BillsController::class, 'getData']);
Route::post('/api/bill/store',[BillsController::class, 'store']);
Route::put('/api/bill/update',[BillsController::class, 'update']);
Route::delete('/api/bill/update',[BillsController::class, 'delete']);


//CATEGORY_PRODS
Route::get('/api/categoryProd/index',[CategoryProdsController::class, 'index']);
Route::get('/api/categoryProd/getData',[CategoryProdsController::class, 'getData']);
Route::post('/api/categoryProd/store',[CategoryProdsController::class, 'store']);
Route::put('/api/categoryProd/update',[CategoryProdsController::class, 'update']);
Route::delete('/api/categoryProd/update',[CategoryProdsController::class, 'delete']);


//PURCHASES
Route::get('/api/purchase/index',[PurchasesController::class, 'index']);
Route::get('/api/purchase/getData',[PurchasesController::class, 'getData']);
Route::post('/api/purchase/store',[PurchasesController::class, 'store']);
Route::put('/api/purchase/update',[PurchasesController::class, 'update']);
Route::delete('/api/purchase/update',[PurchasesController::class, 'delete']);


//INPUTS
Route::get('/api/input/index',[InputsController::class, 'index']);
Route::get('/api/input/getData',[InputsController::class, 'getData']);
Route::post('/api/input/store',[InputsController::class, 'store']);
Route::put('/api/input/update',[InputsController::class, 'update']);
Route::delete('/api/input/update',[InputsController::class, 'delete']);


//HAY_PALMENTS
Route::get('/api/hayPalment/index',[HayPalmentsController::class, 'index']);
Route::get('/api/hayPalment/getData',[HayPalmentsController::class, 'getData']);
Route::post('/api/hayPalment/store',[HayPalmentsController::class, 'store']);
Route::put('/api/hayPalment/update',[HayPalmentsController::class, 'update']);
Route::delete('/api/hayPalment/update',[HayPalmentsController::class, 'delete']);


//PRODUCTS
Route::get('/api/product/index',[ProductsController::class, 'index']);
Route::get('/api/product/getData',[ProductsController::class, 'getData']);
Route::post('/api/product/store',[ProductsController::class, 'store']);
Route::put('/api/product/store',[ProductsController::class, 'update']);
Route::delete('/api/product/update',[ProductsController::class, 'delete']);


//DETAILS
Route::get('/api/detail/index',[DetailsController::class, 'index']);
Route::get('/api/detail/getData',[DetailsController::class, 'getData']);
Route::post('/api/detail/store',[DetailsController::class, 'store']);
Route::put('/api/detail/update',[DetailsController::class, 'update']);
Route::delete('/api/detail/update',[DetailsController::class, 'delete']);

