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

//Route::get('/', function () {
//    return view('welcome');
//});

//首页
Route::get('/','PAgesController@root')->name('root')->middleware('verified');

//Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('products/{product}', 'ProductsController@show')->name('products.show');


Route::group(['middleware' => ['auth', 'verified']], function() {
    //获取收获地址
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
    //添加收货地址
    Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
    //添加方法
    Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
    //修改页面
    Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
    //修改方法
    Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
});