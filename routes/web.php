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
Route::get('/admin', 'AdminPagesController@index')->name('admin.index');
Route::get('/admin/product/create', 'AdminPagesController@product_create')->name('admin.product.create');
Route::get('/admin/product/edit/{id}', 'AdminPagesController@product_edit')->name('admin.product.edit');

Route::post('/admin/product/create', 'AdminPagesController@product_store')->name('admin.product.store');
Route::post('/admin/product/edit/{id}', 'AdminPagesController@product_update')->name('admin.product.update');
Route::post('/admin/product/delete/{id}', 'AdminPagesController@product_delete')->name('admin.product.delete');
Route::get('/search', 'ProductController@search')->name('search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
