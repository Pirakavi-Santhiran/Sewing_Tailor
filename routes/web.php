<?php

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('Admin/dashboard');
});

Route::get('/login', function () {
    return view('Admin/login');
});

Route::get('/adminRegister', function () {
    return view('Admin/adminRegister');
});

Route::get('/adminOrders', function () {
    return view('Admin/adminOrders');
});

Route::get('/adminPatterns', function () {
    return view('Admin/adminPatterns');
});

Route::get('/adminMeasurements', function () {
    return view('Admin/adminMeasurements');
});

Route::get('/adminStates', function () {
    return view('Admin/adminStates');
});


Route::get('/customerOrder', function () {
    return view('customer_order');
});

Route::get('/customerHome', function () {
    return view('customerHomepage');
});

Route::get('/addDesign', function () {
    return view('Admin/addDesign');
});

Route::get('/adminPayments', 'PaymentController@show_payment_index');
Route::resource('/adminPayments', 'PaymentController');
Route::get('/adminPayments/create','PaymentController@create')->name('Admin.addPayments');
Route::get('/adminPayments/{adminPayment}','PaymentController@destroy');
//Route::get('/adminPayments/{adminPayment}','PaymentController@update');



