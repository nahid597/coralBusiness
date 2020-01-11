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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/products', 'ProductController@products')->name('products');
Route::get('/contact', 'ContactController@contact')->name('contact');

// admin section

//Route::get('/admin', 'AdminPagesController@index')->name('admin.index');
// Route::get('/admin/product/create', 'AdminPagesController@product_create')->name('admin.product.create');
// Route::get('/admin/product/edit/{id}', 'AdminPagesController@product_edit')->name('admin.product.edit');



// user login
Route::get('/login', 'LoginController@showLoginFormUser')->name('login');



Route::post('/admin/product/create', 'AdminPagesController@product_store')->name('admin.product.store');
Route::post('/admin/product/edit/{id}', 'AdminPagesController@product_update')->name('admin.product.update');
Route::post('/admin/product/delete/{id}', 'AdminPagesController@product_delete')->name('admin.product.delete');
Route::get('/search', 'ProductController@search')->name('search');

// carts route
Route::get('/carts', 'CartController@index')->name('carts');
Route::post('/carts/store', 'CartController@store')->name('carts.store');
Route::post('/carts/update/{id}', 'CartController@update')->name('carts.update');
Route::post('/carts/delete/{id}', 'CartController@delete')->name('carts.delete');

// cehckout controller

Route::get('/checkouts', 'CheckoutController@index')->name('checkouts');
Route::post('/checkouts/store', 'CheckoutController@store')->name('checkouts.store');


//order 
Route::get('/order/success', 'OrderController@index')->name('order.success');
Route::post('/order/success', 'OrderController@update')->name('order.success.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin login
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'AdminController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminPagesController@index')->name('admin.index');
Route::get('/admin/product/create', 'AdminPagesController@product_create')->name('admin.product.create');
Route::get('/admin/product/edit/{id}', 'AdminPagesController@product_edit')->name('admin.product.edit');
 
