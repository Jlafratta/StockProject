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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('dashboard')->name('admin.')->group(function(){

    Route::resource('/product', 'ProductController');
        Route::get('/product/new/{provider_id}', 'ProductController@createProv')->name('product.createProv');
        Route::post('/product/new/{provider_id}/store', 'ProductController@storeProv')->name('product.storeProv');
        
        Route::get('/stock', 'ProductController@choose')->name('product.choose');
    Route::resource('/sale', 'SaleController');
        Route::post('/sale/confirm/{sale?}', 'SaleController@confirm')->name('sale.confirm');

    Route::get('/settings', 'SettingController@index')->name('settings');
    Route::post('/settings', 'SettingController@store')->name('settings.store');

    Route::resource('/provider', 'ProviderController');
    Route::get('/provider/prod/{product}', 'ProviderController@showProd')->name('provider.showProd');
    Route::get('/provider/prod/{product}/edit', 'ProviderController@editProd')->name('provider.editProd');
    Route::put('/provider/prod/{product}/update', 'ProviderController@updateProd')->name('provider.updateProd');

    Route::get('/order/{product_id}', 'ProductOrderController@create')->name('order.create');
    Route::post('/order/store', 'ProductOrderController@store')->name('order.store');
    Route::get('/order', 'ProductOrderController@index')->name('order.index');

    // Route::get('/providers', 'ProviderController@index')->name('providers');
    // Route::get('/providers/create', 'ProviderController@create')->name('provider.create');
    // Route::post('/providers/store', 'ProviderController@store')->name('provider.store');

});

