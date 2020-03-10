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




