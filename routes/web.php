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

  Route::group([ 'as'=> 'site.', 'prefix' => 'site' ],
     function (){
     Route::resource('home','SiteController'); 
     Route::get('singlepost/{id}','SiteController@singlepost')->name('singlepost'); 
      Route::get('category/{id}','SiteController@category')->name('category'); 
       Route::post('postComment','SiteController@postComment')->name('postComment');            
   });

Route::group(['as' => 'admin.', 'prefix'=>'admin','middleware'=>['auth','admin']],function(){
	Route::get('dashboard', 'Dashboardcontroller@index')->name('dashboard');
	Route::resource('categories', 'CategoryController');
	Route::resource('posts', 'PostController');
    Route::resource('comments', 'CommentController');
});
Auth::routes();
 // Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'UserController@user')->name('dashboard');