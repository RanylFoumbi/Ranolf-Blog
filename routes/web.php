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

// Route::view('admin', 'layouts.master');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin-signUp', function(){
    return view('auth.admin-register');
});



Route::group(['middleware' => 'admin'], function(){

        Route::get('/admin-dashboard', 'Admin\AdminController@index')->name('dashboard');
        Route::get('/visitor', 'visitorController@index')->name('visitor');
        Route::get('/new-visitor', 'visitorController@create')->name('new-visitor');
        Route::post('store', 'visitorController@store');
        Route::get('visitor-edit/{id}', 'visitorController@editData')->name('editvisitor');
        Route::post('update/{id}', 'visitorController@updateData')->name('updatevisitor');
        Route::get('delete/{id}', 'visitorController@destroy')->name('deletevisitor');
});

//Route::get('admin/routes', 'HomeController@admin')->middleware('admin');