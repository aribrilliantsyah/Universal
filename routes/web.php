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
//FrontEnd
Route::get('/', function () {
    return view('interface.frontend.home');
});
Route::get('/berita', function () {
    return view('interface.frontend.berita');
});
Route::get('/acara', function () {
    return view('interface.frontend.acara');
});
Route::get('/show', function () {
    return view('interface.frontend.show.berita');
});
Route::get('/contact', function () {
    return view('interface.frontend.contact');
});
	//tentang
	Route::get('/tentang/organisasi', function () {
    return view('interface.frontend.tentang.tentangkami');
	});
	Route::get('/tentang/sejarah', function () {
    return view('interface.frontend.tentang.sejarah');
	});
	Route::get('/tentang/visimisi', function () {
    return view('interface.frontend.tentang.visimisi');
	});
	Route::get('/tentang/tujuan', function () {
    return view('interface.frontend.tentang.tujuan');
	});
	

//Backend
 // Authentication Routes...
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...Disable
    Route::get('register', function (){
    	return view('errors.404');
    });

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group(['middleware'=>'web'],function(){
Route::get('/home', 'HomeController@index');
Route::get('/management-system', function(){
	return view('plugin.system');
});
//konten
Route::group(['prefix'=>'admin', 'middleware'=>['auth']],function(){
	Route::resource('konten','KontenController');
	Route::resource('tentang','TentangController');
});
});

