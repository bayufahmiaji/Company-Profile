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
route::get('/berita/{news}/detail','PagesController@berita2');

route::get('/analisa','PagesController@analisa');
route::get('/analisa/{analysis}/detail','PagesController@analisa2');


route::get('/tutor','PagesController@tutor');
route::get('/legalitas','PagesController@legalitas');
route::get('/partners','PagesController@partner');
route::get('/login','AuthController@index');
route::get('/register','AuthController@register');
route::post('/postlogin','AuthController@login');
route::post('/postuser','AuthController@store');

route::get('/index','HomeController@index');

route::get('/user','UsersController@index');

route::get('/webinar','BinarsController@index');
route::get('/webinar/add','BinarsController@create');
route::post('/webinar/adds','BinarsController@store');

route::get('/partner','PartnersController@index');
route::get('/partner/add','PartnersController@create');
route::post('/partners/add','PartnersController@store');

route::get('/news','NewsController@index');
route::get('/news/add','NewsController@create');
route::post('/new/add','NewsController@store');
route::get('/news/{news}/detail','NewsController@show');

route::get('/analyst','AnalysisController@index');
route::get('/analyst/add','AnalysisController@create');
route::post('/analyst/adds','AnalysisController@store');
route::get('/analyst/{analysis}/detail','AnalysisController@show');

route::get('/logout','AuthController@logout');








