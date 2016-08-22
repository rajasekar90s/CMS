<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware'=>'guest'],function(){

	Route::get('Admin',function () {
		return view('admin_login');
	});
	Route::post('Admin',['as'=>'Post-Login','uses'=>'Auth\AuthController@postLogin']); 
});
Route::group(['middleware'=>'auth'],function(){
//'prefix' => 'Admin'
	Route::get('AdminControl',['as'=>'Admin-control','uses'=>'Admin_controller@AdminControl']);

	Route::get('categories',['as'=>'cat','uses'=>'Admin_controller@Categories']);

	Route::get('categories-edit',['as'=>'edit-cat','uses'=>'Admin_controller@catEdit']);
	Route::get('categories-delete',['as'=>'delete-cat','uses'=>'Admin_controller@catDelete']);

	Route::get('categories-form',['as'=>'categories-form','uses'=>'Admin_controller@CatForm']);

	Route::post('categories-form',['as'=>'cat-form','uses'=>'Admin_controller@store']);

	Route::get('posts',['as'=>'posts','uses'=>'Admin_controller@Posts']);

	Route::get('posts-edit/{id}/edit',['as'=>'edit-post','uses'=>'Admin_controller@postEdit']);
	Route::get('posts-update/{id}',['as'=>'update-post','uses'=>'Admin_controller@postUpdate']);
	Route::any('posts-delete',['as'=>'delete-post','uses'=>'Admin_controller@postDelete']);

	Route::get('posts-form',['as'=>'posts-form','uses'=>'Admin_controller@PostsForm']);

	Route::post('posts-form',['as'=>'po-form','uses'=>'Admin_controller@PostsStore']);

	Route::get('comments',['as'=>'comments','uses'=>'Admin_controller@Comments']);
	Route::get('comments-form',['as'=>'comments-form','uses'=>'Admin_controller@CommentsForm']);
	
	Route::get('logout',['as'=>'log-out','uses'=>'Auth\AuthController@Logout']);
	
});
	Route::get('visitors-page',['as'=>'visitors-page','uses'=>'VisitorsController@VisitorsPage']);
	