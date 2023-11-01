<?php

use App\Http\Controllers\addproductcontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\cartcontroller;
use App\Http\Controllers\customercontroller;
use App\Http\Controllers\productscontroller;
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
Route::get('loginadmin', [admincontroller::class, 'index']);
Route::post('loginadmin', [admincontroller::class, 'login']);
//add product
Route::get('addproduct', [addproductcontroller::class, 'index']);
Route::post('addproduct', [addproductcontroller::class, 'postprinter']);


//logincustomer
Route::get('login', [customercontroller::class, 'index']);
Route::post('login', [customercontroller::class, 'login']);
Route::get('register', [customercontroller::class, 'regindex']);
Route::post('register', [customercontroller::class, 'register']);

//view product
Route::resource('products', productscontroller::class);

//routing customer
Route::resource('customer', customercontroller::class);
Route::post('postcustomer', [customercontroller::class, 'postcustomer']);
Route::post('postransaksi', [customercontroller::class, 'postransaksi']);

//tampil video
// Route::get('/preview-video', [VideoController::class,'preview']);

//cart
Route::get('/cart', [cartcontroller::class, 'index'])->name('cart.index');
Route::post('/cart/add', [carcartcontrollert::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{id}', [cartcontroller::class, 'remove'])->name('cart.remove');
Route::get('/checkout', [cartcontroller::class, 'checkout'])->name('checkout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
