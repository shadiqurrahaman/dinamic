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
});

// Auth::routes(['verify' => true]);


        Route::get('admin', 'Auth\LoginController@showLoginForm')->name('admin');
        Route::post('admin', 'Auth\LoginController@login');
        Route::post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Admin

        Route::get('dashboard/superadmin','Dashboard\SuperadminController@index');
        Route::get('dashboard/admin','Dashboard\AdminController@index');


Route::get('/home', 'HomeController@index')->name('home');
Route::post('search','SearchController@index')->name('search');




Route::get('get',function(){
	return "get ok";
});


Route::get('/test',function() {

	return "i am returning";
})->middleware('role:admin','auth');
