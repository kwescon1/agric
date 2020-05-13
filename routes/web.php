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

// Route::get('/', function () {
//     return view('welcome');
// });

// routes without controllers
Route::get('/', function () {
    return view('index');
});


Route::get('blog', function () {
    return view('blog');
});

// routes with controllers


//get
Route::get('contact', 'ContactController@create');
Route::get('list','PropertyController@list');

Route::get('property_details/{detail}', 'PropertyDetailController@property_detail');
Route::get('type/{type}', 'PropertyController@type');
Route::get('/searchcontent','SearchController@search');


//post
Route::post('contact', 'ContactController@store');


//admin routes
Route::get('/adminsearch','SearchController@adminsearch');
Route::get('/admincontact',function(){
	return view('admin.contact');
});
Route::get('/adminproperty',function(){
	return view('admin.property');
});
Route::post('request','PropertyController@request');

Auth::routes();





Route::middleware(['auth'])->group(function(){
	Route::get('/allitems','PropertyController@allitems');

	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('upload', 'PropertyController@create');

	Route::post('upload', 'PropertyController@upload');

	Route::get('requested','PropertyController@requested');
});
