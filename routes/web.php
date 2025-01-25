<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/Home', [TestController::class, 'firstAction']);
Route::get('/Home2', [TestController::class, 'greet']);
Route::get('/blog',  function(){
    return view("blog");
});
