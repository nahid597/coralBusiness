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

Route::post('/admin/product/create', 'AdminPagesController@product_store')->name('admin.product.store');

