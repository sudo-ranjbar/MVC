<?php

use App\Core\Routing\Route;

Route::get('/geturi');
Route::post('/posturi');
Route::put('/puturi');
Route::patch('/patchuri');

echo '<pre>';
var_dump(Route::routes());