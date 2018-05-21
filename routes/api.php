<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('buyers','Buyer\BuyerController',['only' => ['index','show']]);
Route::resource('categories','Categories\CategoriesController',['except' => ['create','edit']]);
Route::resource('products','Products\ProductsController',['only' => ['index','show']]);
Route::resource('sellers','Sellers\SellersController',['only' => ['index','show']]);
Route::resource('transactions','Transactions\TransactionsController',['only' => ['index','show']]);
Route::resource('users','Users\UsersController',['except' => ['create','edit']]);
