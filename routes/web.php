<?php

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
Route::get('user','UserController@index');

Route::get('/WGaUaHcPBrLDSLclDKMvJzftVrfLIYgS', function () {
    return view('admin/users');
});

Route::get('/Ojxmxeg4d9JmtK6xoQUwbARxFciLgm3e', function () {
    return view('admin/clienti');
});

Route::get('/x9un8QvL4eHMHZK8sANGUA8Z2qu7qGs5', function () {
    return view('admin/orders');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/add-to-cart', function () {
    return view('addtocart');
});
