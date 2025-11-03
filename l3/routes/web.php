<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about", function(){
    return view("about");
});

Route::get("/posts", [PostController::class, "getPosts"]);