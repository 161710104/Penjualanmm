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


Route::get('/baru', function () {
    return view('layouts.table');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/berita', function () {
    return view('frontend.berita');
});
Route::get('/merk', function () {
    return view('frontend.merk');
});
Route::get('/mobil', function () {
    return view('frontend.mobil');
});





Route::group(['prefix' => 'admin', 'middleware' =>['auth' , 'role:admin']],function (){
	Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/merkmobil','MerkController');
	Route::resource('/mobils','MobilController');
	Route::post('mobils/{publish}', 'MobilController@Publish')->name('mobils.publish');
	Route::resource('/beritas','BeritaController');
	Route::post('beritas/{publish}', 'BeritaController@Publish')->name('beritas.publish');
	Route::get('beritas', 'BeritaController@alasan_store')->name('beritas.alasan');
	Route::resource('/detail_mobil','DetailMobilController');
	Route::resource('/user','UserController');
	Route::resource('/contact','ContactController');
	Route::resource('/about','AboutController');
	Route::get('/mobils_terjual', function () {
    return view('mobil.terjual');
		});
	Route::get('/calender', function () {
    return view('backend.calender');
		});
	Route::get('/coba', function () {
    return view('backend.coba');
		});
    });

Route::group(['prefix' =>'member', 'middleware' =>['auth' , 'role:member|admin']],function (){
	Route::get('/', 'HomeController@index')->name('home');
	Route::resource('/mobils','MobilController');
	Route::get('/detail_mobil/{id}', 'DetailMobilController@create')->name('createdetail');
	Route::post('mobils/{terjual}', 'MobilController@Terjual')->name('mobils.terjual');
	Route::post('/detail_mobil/{id}/create', 'DetailMobilController@store')->name('createdetail.store');
	Route::resource('/detail_mobil','DetailMobilController');
	Route::resource('/beritas','BeritaController');
});

Route::get('/catalog/{id}', array('as' => 'showpermerk', 'uses' => 'FrontendController@showpermerk'));
Route::get('/viewdetail/{id}', 'FrontendController@viewdetail');
Route::get('berita/{id}', 'FrontendController@berita');



