<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PostsController;

Route::get('/Home', [TestController::class, 'firstAction']);
Route::get('/Home2', [TestController::class, 'greet']);
Route::get('/blog', [PostsController::class ,'index']);
