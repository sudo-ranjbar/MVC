<?php

use App\Controllers\HomeController;
use App\Controllers\UserController;
use App\Core\Routing\Route;
use App\Middleware\BlockFirefox;


Route::get('/', [HomeController::class, 'index']);
Route::get('/about/{me}', [HomeController::class, 'about']);


Route::get('/users', [UserController::class, 'index']);





