<?php

use App\Core\Routing\Route;

Route::get('/', 'HomeController@index');

Route::get('/a', function () {
    echo 'Hello World! AA';
});
Route::get('/b', function () {
    echo 'Hello World! BB';
});
Route::put('/c');
Route::patch('/d');
