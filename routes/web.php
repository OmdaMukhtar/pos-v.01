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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::get('logout','Auth\AuthController@logout');
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/dashboard','DashboardController');
    
    Route::resource('/customers','CustomerController');
    Route::get('/customers/{customer}/confirm','CustomerController@confirm')->name('customers.confirm');
    
    Route::resource('/suppliers','SupplierController');
    Route::get('/suppliers/{supplier}/confirm','SupplierController@confirm')->name('suppliers.confirm');
});

