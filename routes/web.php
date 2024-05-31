<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllerController;



Route::get('/', function () {
    return view('welcome');
});

//Route::get('/', [ProductController::class, 'index']);
Route::get('/', [UserController::class, 'index']);