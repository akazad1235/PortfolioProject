<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('admin.home');
});*/

Auth::routes();

Route::group(['middleware'=>'auth'], function(){
		Route::get('/', 'HomeController@index')->name('dashboard');

Route::prefix('home')->name('home.')->group(function(){

	//Route::get('/admin', 'Admin\AdminController@home');
	Route::get('/index', 'Admin\HomeController@index')->name('home');
	Route::get('/create', 'Admin\HomeController@create')->name('create');
	Route::post('/store', 'Admin\HomeController@store')->name('store');
	Route::get('/edit/{id}', 'Admin\HomeController@edit')->name('edit');
	Route::post('/update/{id}', 'Admin\HomeController@update')->name('update');

});
Route::prefix('experience')->name('experience.')->group(function(){

	//Route::get('/admin', 'Admin\AdminController@home');
	Route::get('/manage', 'Admin\ExperienceController@index')->name('manage');
	Route::get('/create', 'Admin\ExperienceController@create')->name('create');
	Route::post('/store', 'Admin\ExperienceController@store')->name('store');
	Route::get('/edit/{id}', 'Admin\ExperienceController@edit')->name('edit');
	Route::post('/update/{id}', 'Admin\ExperienceController@update')->name('update'); 
	Route::get('/delete/{id}', 'Admin\ExperienceController@destroy')->name('delete'); 

});

Route::prefix('service')->name('service.')->group(function(){
	Route::get('/manage', 'Admin\ServiceController@index')->name('manage');
	Route::get('/create', 'Admin\ServiceController@create')->name('create');
	Route::post('/store', 'Admin\ServiceController@store')->name('store');
	Route::get('/edit/{id}', 'Admin\ServiceController@edit')->name('edit');
	Route::post('/update/{id}', 'Admin\ServiceController@update')->name('update'); 
	Route::get('/delete/{id}', 'Admin\ServiceController@destroy')->name('delete'); 

});
Route::prefix('skill')->name('skill.')->group(function(){
	Route::get('/manage', 'Admin\SkillController@index')->name('manage');
	Route::get('/create', 'Admin\SkillController@create')->name('create');
	Route::post('/store', 'Admin\SkillController@store')->name('store');
	Route::get('/edit/{id}', 'Admin\SkillController@edit')->name('edit');
	Route::post('/update/{id}', 'Admin\SkillController@update')->name('update'); 
	Route::get('/delete/{id}', 'Admin\SkillController@destroy')->name('delete'); 

});
Route::prefix('projectcategory')->name('projectcategory.')->group(function(){
	Route::get('/manage', 'Admin\CategoryProjectController@index')->name('manage');
	Route::get('/create', 'Admin\CategoryProjectController@create')->name('create');
	Route::post('/store', 'Admin\CategoryProjectController@store')->name('store');
	Route::get('/edit/{id}', 'Admin\CategoryProjectController@edit')->name('edit');
	Route::post('/update/{id}', 'Admin\CategoryProjectController@update')->name('update'); 
	Route::get('/delete/{id}', 'Admin\CategoryProjectController@destroy')->name('delete');

});
Route::prefix('portfolio')->name('portfolio.')->group(function(){
	Route::get('/manage', 'Admin\PortfolioController@index')->name('manage');
	Route::get('/create', 'Admin\PortfolioController@create')->name('create');
	Route::post('/store', 'Admin\PortfolioController@store')->name('store');
	// Route::get('/edit/{id}', 'Admin\PortfolioController@edit')->name('edit');
	// Route::post('/update/{id}', 'Admin\PortfolioController@update')->name('update'); 
	// Route::get('/delete/{id}', 'Admin\PortfolioController@destroy')->name('delete');

});



});
Route::prefix('website')->name('website.')->group(function(){
//Route::get('/', 'websiteController@index');
Route::get('/', 'websiteHomeController@index');
//Route::get('/', 'websiteHomeController@service');
//Route::get('/', 'ExperienceController@index');

});



