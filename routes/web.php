<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','PagesController@index');
route::get('/profile','PagesController@profile');
route::get('/produk','PagesController@produk');
route::get('/berita','PagesController@berita');
route::get('/analisa','PagesController@analisa');
route::get('/tutor','PagesController@tutor');
route::get('/legalitas','PagesController@legalitas');
route::get('/partner','PagesController@partner');
route::get('/login','AuthController@index');
route::get('/register','AuthController@register');
route::post('/postlogin','AuthController@login');
route::post('/postuser','AuthController@store');

route::get('/index','HomeController@index');

route::get('/user','UsersController@index');
route::get('/webinar','BinarsController@index');
route::get('/partner','PartnersController@index');
route::get('/news','NewsController@index');
route::get('/analyst','AnalysisController@index');
route::get('/logout','AuthController@logout');








