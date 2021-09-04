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
Route::post('/api/supplier/store',[SuppliersController::class, 'store']);

Route::put('/api/supplier/update',[SuppliersController::class, 'update']);


//SELLERS
Route::post('/api/seller/store',[SellersController::class, 'store']);

Route::put('/api/seller/update',[SellersController::class, 'update']);


//BILLS

Route::post('/api/bill/store',[BillsController::class, 'store']);

Route::put('/api/bill/update',[BillsController::class, 'update']);

//CATEGORY_PRODS

Route::post('/api/categoryProd/store',[CategoryProdsController::class, 'store']);

Route::put('/api/categoryProd/update',[CategoryProdsController::class, 'update']);

//PURCHASES

Route::post('/api/purchase/store',[PurchasesController::class, 'store']);

Route::put('/api/purchase/update',[PurchasesController::class, 'update']);

//INPUTS

Route::post('/api/input/store',[InputsController::class, 'store']);

Route::put('/api/input/update',[InputsController::class, 'update']);

//HAY_PALMENTS

Route::post('/api/hay_palment/store',[Hay_palmentsController::class, 'store']);

Route::put('/api/hay_palment/update',[Hay_palmentsController::class, 'update']);

//PRODUCTS

Route::post('/api/product/store',[ProductsController::class, 'store']);

Route::put('/api/product/update',[ProductsController::class, 'update']);

//DETAILS

Route::post('/api/detail/store',[DetailsController::class, 'store']);

Route::put('/api/detail/update',[DetailsController::class, 'update']);
