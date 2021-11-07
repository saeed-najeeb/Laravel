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

 

// Route::prefix('/admin') -> group( function(){
// 	Route::get('/','AdminController\AdminController@hello');
// 	Route::get('add','AdminController\AdminController@add');
// 	Route::get('delete','AdminController\AdminController@delete');
// 	Route::get('edit','AdminController\AdminController@edit');
// });

// another format
Route::group(['prefix'=>'admin'],function(){
		Route::get('/','AdminController\AdminController@hello');
	Route::get('add','AdminController\AdminController@add');
	Route::get('delete','AdminController\AdminController@delete');
	Route::get('edit','AdminController\AdminController@edit');
	Route::get('adminInfo1',function(){
		return view ('admin\adminInfo') ->with(['name'=>'saeed najeeb','age'=>'35']);
	});
	Route::get('adminInfo2',function(){
		$data=[];
		$data['name']='saeed najeeb';
		$data['age']='36';
		return view ('admin\adminInfo',$data);
	});
	Route::get('adminInfo3','AdminController\AdminController@getInfo1');
	
	Route::get('adminInfo4','AdminController\AdminController@getInfo2');

	Route::get('landing',function(){
		return view('landing1');
	});

	Route::get('landing0',function(){
		return view('layouts\landing');
	});

});


Route::namespace('AdminController\AdminController')->group(function(){
Route::get('/all','AdminController\AdminController@getAdmin');

});



//middleware formate
// Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
// 		Route::get('/','AdminController\AdminController@hello');
// 	Route::get('add','AdminController\AdminController@add');
// 	Route::get('delete','AdminController\AdminController@delete');
// 	Route::get('edit','AdminController\AdminController@edit');
// });
// or :
// Route::group(['prefix'=>'admin'],function(){
// 		Route::get('/','AdminController\AdminController@hello');
// 	Route::get('add','AdminController\AdminController@add');
// 	Route::get('delete','AdminController\AdminController@delete');
// 	Route::get('edit','AdminController\AdminController@edit')->middleware('auth');
// });