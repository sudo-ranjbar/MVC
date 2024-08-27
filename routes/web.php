<?php

use App\Core\Routing\Route;
use App\Middleware\BlockFirefox;


Route::get('/', 'HomeController@index');




Route::get('/users', 'UserController@index');






Route::get('/posts', 'PostController@all');
Route::get('/post/{slug}', 'PostController@single');
Route::get('/post/{slug}/comment/{cid}', 'PostController@comments');



Route::get('/archives', 'ArchivesController@index');
Route::get('/archives/articles', 'ArchivesController@articles');

Route::get('/todo/list', 'TodoController@list', [BlockFirefox::class]);

