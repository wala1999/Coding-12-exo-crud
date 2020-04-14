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

//Route::get('/', function () {
  // return view('welcome');
 // });

//Route::get('/','WelcomeController@show')->name('welcome');
Route::get('/','WelcomeController@index')->name('welcome');
Route::get('/admin', 'AdminController@show');


//<======SECTION ABOUT=========section about==================SECION ABOUT ===========================>
Route::get('/aboutedit', 'AboutController@show')->name('about');


//create
//Route::get('/aboutedit/create', 'AboutController@create');
//Route::post('/aboutedit/store', 'AboutController@store');
//edit
//Route::get('/aboutedit/{id}/edit', 'AboutController@edit');
//Route::post('/aboutedit/{id}/update', 'AboutController@update');

//delete
//Route::get('/aboutedit/{id}/destroy', 'AboutController@destroy');

//<======SECTION PORTFOLIO=========section portfolio========================SECTION PORTFOLIO================>
//show the portfolio the portfolio
Route::get('/portfolioedit', 'PortfolioController@show')->name('portfolios');
Route::get('/portfolioedit/{id}/edit', 'PortfolioController@edit');
Route::post('/portfolioedit/{id}/update', 'PortfolioController@update');
//portfolio create
Route::get('/portfolioedit/create', 'PortfolioController@create');
Route::post('/portfolioedit/store', 'PortfolioController@store');
Route::get('portfolioedit/{id}/destroy','PortfolioController@destroy');
//portfolio edit


//<======SECTION SERIVCE=================section service=========================>
//show the service
Route::get('/serviceedit', 'ServiceController@show')->name('service');
//portfolio update pour pouvoir modifier le contenu
Route::post('/serviceedit/{id}/update', 'ServiceController@update');
Route::post('/serviceedit/store','ServiceController@store');
//service create
Route::get('/serviceedit/create','ServiceController@create');
Route::get('/serviceedit/{id}/destroy','ServiceController@destroy');

//<=========SECTION TEAM==============sectionTeam====================SECTION TEAM-=====================>
//show the team 
Route::get('/teamedit', 'TeamController@show')->name('teams');
//delete the team forever everyday
//team delete
Route::get('teamedit/{id}/destroy','TeamController@destroy');
//team edit

Route::post('/teamedit/store','TeamController@store');
Route::get('/teamedit/{id}/edit', 'TeamController@edit');
Route::post('/admin', 'TeamController@update');
//team create
Route::get('/teamedit/create', 'TeamController@create');

//<=========SECTION TESTIMONIAL==============sectionTESTIMONIAL====================SECTION TESTIMONIAL=====================>


Route::get('/edittestiminial', 'TestimonialController@show');

