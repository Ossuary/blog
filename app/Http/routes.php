<?php
// Lang route
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);
//Auth Routes
Route::get('auth/login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'login']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'logout']);

//Registration Routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// Admin home route
Route::get('admin', 'AdminController@getIndex');

// Categories routes
Route::resource('categories', 'CategoryController', ['except' => ['create']]);

// Tags routes
Route::resource('tags', 'TagController', ['except' => ['create']]);

// Comments routes
Route::post('comments/{post_id}', [     'uses'=> 'CommentsController@store',      'as' => 'comments.store']);
Route::get('comments/{id}/edit', [      'uses'=> 'CommentsController@edit',       'as' => 'comments.edit']);
Route::put('comments/{id}', [           'uses'=> 'CommentsController@update',     'as' => 'comments.update']);
Route::delete('comments/{id}', [        'uses'=> 'CommentsController@destroy',    'as' => 'comments.destroy']);
Route::get('comments/{id}/delete', [    'uses'=> 'CommentsController@delete',     'as' => 'comments.delete']);


Route::get('blog/{slug}', ['uses' => 'BlogController@getSingle', 'as' => 'blog.single' ])->where('slug', '[\w\d\-\_]+');

Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);

Route::get('contacts', 'PagesController@getContacts');
Route::post('contacts', 'PagesController@postContact');

Route::get('portfolio', 'PagesController@getPortfolio');
Route::get('about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');

Route::resource('posts', 'PostController');