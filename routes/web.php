<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\customercontroller;
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
//routing admin
Route::resource('admin', admincontroller::class);
Route::post('loginadmin', [admincontroller::class, 'login']);
Route::post('postprinter', [admincontroller::class, 'postprinter']);

//routing customer
Route::resource('customer', customercontroller::class);
Route::post('login', [customercontroller::class, 'login']);
Route::post('postcustomer', [customercontroller::class, 'postcustomer']);
Route::post('postransaksi', [customercontroller::class, 'postransaksi']);

