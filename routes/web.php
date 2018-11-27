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
    $data=App\Order::all();
    return view('Admin/adminOrders')->with('tasks',$data);
});

Route::get('/adminPatterns', function () {
    return view('Admin/adminPatterns');
});

Route::get('/adminMeasurements', function () {
    return view('Admin/adminMeasurements');
});

Route::get('/adminStates', function () {
    $data=App\Order::all();
    return view('Admin/adminStates')->with('tasks',$data);
});


Route::get('/customerOrder', function () {
    return view('Customer/customer_order');
});
Route::get('/adminAddOrder', function () {
    return view('Admin/adminAddOrders');
});

Route::get('/customerHome', function () {
    return view('Customer/customerHomepage');
});

Route::get('/addDesign', function () {
    return view('Admin/addDesign');
});
Route::get('/customerOrder', function () {
    return view('Customer/customer_order');
});

Route::get('/cusDesign', function () {
    return view('Customer/cusDesign');
});



Route::get('/customerHome', function () {
    return view('Customer/customerHomepage');
});

Route::get('/customerAcceptedOrder', function () {
    $data=App\Order::all();
    return view('Customer/customerAcceptedOrders')->with('tasks',$data);
});
Route::get('/customerStateDress', function () {
    $data=App\Order::all();
    return view('Customer/customerStateDress')->with('tasks',$data);
});

Route::get('/adminPayments', 'PaymentController@show_payment_index');
Route::resource('/adminPayments', 'PaymentController');
Route::get('/adminPayments/create','PaymentController@create')->name('Admin.addPayments');

//Route::get('/adminPayments','PaymentController@destroy')->name('Admin.addPayments');
Route::post('/saveorder','CustomerOrderController@store');
Route::get('/markasaccepted/{id}','CustomerOrderController@UpdatedTaskAccepted');
Route::get('/markasnotaccepted/{id}','CustomerOrderController@UpdatedTaskNotAccepted');
Route::get('/markascompleted/{id}','CustomerOrderController@UpdatedTaskCompleted');
Route::get('/markasnotcompleted/{id}','CustomerOrderController@UpdatedTaskNotCompleted');
Route::post('/adminsaveorder','CustomerOrderController@adminstore');
Route::get('/deleteorder/{id}','CustomerOrderController@DeleteOrder');


Route::get('/adminPayments/{adminPayment}','PaymentController@destroy');
//Route::get('/adminPayments/{adminPayment}','PaymentController@update');

Route::get('/staffDashboard', function () {
    return view('Staff/staffDashboard');
});

Route::get('/staffPatterns', function () {
    return view('Staff/staffPatterns');
});


Route::get('/staffMeasurements', function () {
    return view('Staff/staffMeasurements');
});

Route::get('/staffStates', function () {
    return view('Staff/staffStates');
});





