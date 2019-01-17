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

Route::get('/yogurt','ContentsController@home');

Route::get('/tentang','ContentsController@about');

Route::get('/blog','ContentsController@blog');

Route::get('/kontak','ContentsController@contact');

Route::get('/product','ContentsController@product');

Route::get('/singlepost','ContentsController@singlepost');

Route::get('/admin','ContentsController@admin');


Route::get('/product_admin','ProductController@index');

Route::get('/product_admin/tambah','ProductController@tambah');

Route::post('/product_admin/store','ProductController@store');

Route::get('/product_admin/edit/{id}','ProductController@edit');

Route::post('/product_admin/update','ProductController@update');

Route::get('/product_admin/hapus/{id}','ProductController@hapus');


Route::get('/blog_admin','BlogController@index');

Route::get('/blog_admin/tambah','BlogController@tambah');

Route::post('/blog_admin/store','BlogController@store');

Route::get('/blog_admin/edit/{id}','BlogController@edit');

Route::post('/blog_admin/update','BlogController@update');

Route::get('/blog_admin/hapus/{id}','BlogController@hapus');