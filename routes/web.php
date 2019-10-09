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
    return view('home');
})->name('home');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('blog', function () {
    return view('blog');
})->name('blog');

// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->name('admin.dashboard');

Route::group([
    'namespace' => 'Admin',
    'prefix' => 'admin'
], function (){
	// Trang dashboard
    Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
    // Quản lý sản phẩm
    Route::group(['prefix' => 'products'], function(){
       Route::get('/', 'ProductController@index')->name('admin.product.index');
       Route::get('/create', 'ProductController@create')->name('admin.product.create');
    });
    Route::group(['prefix' => 'categories'], function(){
       Route::get('/', 'CategoryController@index')->name('admin.categories.index');
       Route::get('/create', 'CategoryController@create')->name('admin.categories.create');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
