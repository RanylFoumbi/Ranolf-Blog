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
Route::get('redirect/{service}', 'SocialAuthController@redirect');
Route::get('/callback/{service}', 'SocialAuthController@callback');


Route::get('/', 'CathegoryController@index')->name('User-cathegoryList');




                    /*cathegory user route*/
Route::get('/', 'CathegoryController@index')->name('User-cathegoryList');



        /* Authentication routes of Admin */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin-signUp', function(){
    return view('admin.admin-register');
});


Route::group(['middleware' => 'admin'], function(){
        Route::get('/admin-profile', 'Admin\AdminController@profile')->name('profile');
        Route::post('/admin-profile', 'Admin\AdminController@update_avatar')->name('update_avatar');
       
                        /* Dashboard routes of Adamin */
        Route::get('/admin-dashboard', 'Admin\AdminController@index')->name('dashboard');
        
                                /* Visitor routes of Admin */
        Route::get('/visitor', 'visitorController@index')->name('visitor');
        Route::get('/new-visitor', 'visitorController@create')->name('new-visitor');
        Route::post('store', 'visitorController@store');
        Route::get('visitor-edit/{id}', 'visitorController@editData')->name('editvisitor');
        Route::post('update/{id}', 'visitorController@updateData')->name('updatevisitor');
        Route::get('delete/{id}', 'visitorController@destroy')->name('deletevisitor');


                         /* Post routes of Adamin */
        Route::get('/createPost', 'Admin\PostController@create')->name('createPost');


                         /* Cathegory routes of Adamin */
        Route::get('/Admin-cathegory', 'Admin\CathegoryController@index')->name('Admin-cathegoryList');
        Route::get('/createCathegory', 'Admin\CathegoryController@create')->name('createCathegory');
        Route::post('store', 'Admin\CathegoryController@store');
        Route::get('edit-cathegory/{id}', 'Admin\cathegoryController@editData')->name('editcathegory');
        Route::post('update-cathegory/{id}', 'Admin\cathegoryController@updateData')->name('updatecathegory');
        Route::get('delete-cathegory/{id}', 'Admin\cathegoryController@destroy')->name('deletecathegory');

               /* Posts Route */

        Route::resource('/posts', 'Admin\PostController');

                 /* Contact-us Admin */
        Route::get('/contact-message', 'Admin\ContactController@index')->name('contact');

        // Route::post('/posts/{post}/comment', 'CommentController@store');
});

        Route::resource('/user-posts', 'UserPostListController');

        Route::resource('/user-post-id', 'UserPostController');

        
        Route::resource('/contact-us', 'userContactController');


        Route::post('/user-post-id/{id}/comments', 'userCommentController@store');
        Route::get('/user-post-id/{id}', 'userCommentController@index');
    
                 