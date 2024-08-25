<?php

use App\Core\Routing\Route;
use App\Middleware\BlockFirefox;

Route::get('/', 'HomeController@index');

Route::get('/archives', 'ArchivesController@index');
Route::get('/archives/articles', 'ArchivesController@articles');

Route::get('/todo/list', 'TodoController@list', [BlockFirefox::class]);

