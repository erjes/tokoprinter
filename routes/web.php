<?php

use App\Http\Controllers\addproductcontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\customercontroller;
use App\Http\Controllers\logacontroller;
use App\Http\Controllers\logccontroller;
use App\Http\Controllers\productscontroller;
use App\Http\Controllers\tekscontroller;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
//login admin
Route::get('loginadmin', [logacontroller::class, 'index']);
Route::post('loginadmin', [logacontroller::class, 'login']);
//add product
Route::get('addproduct', [addproductcontroller::class, 'index']);
Route::post('addproduct', [addproductcontroller::class, 'postprinter']);


//logincustomer
Route::get('signin', [logccontroller::class, 'index']);
Route::post('logincustomer', [logccontroller::class, 'login']);
//view product
Route::resource('products', productscontroller::class);

//routing customer
Route::resource('customer', customercontroller::class);
Route::post('postcustomer', [customercontroller::class, 'postcustomer']);
Route::post('postransaksi', [customercontroller::class, 'postransaksi']);

//tampil video
Route::get('/preview-video', [VideoController::class,'preview']);

Route::resource('crudfield', tekscontroller::class);
Route::post('updatefield', [tekscontroller::class,'update']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
