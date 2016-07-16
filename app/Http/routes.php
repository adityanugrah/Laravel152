<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', 'CategoryController');
Route::resource('products', 'ProductsController');
Route::resource('employee', 'EmployeeController');
Route::resource('suppliers', 'SuppliersController');
Route::resource('customers', 'CustomersController');
Route::resource('shippers', 'ShippersController');
Route::resource('order', 'OrderController');