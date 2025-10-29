<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/posts", [PostController::class, "getAllPosts"])->name("all_posts");
Route::get("/posts/id/{id}", [PostController::class, "getPostById"])->name("post_by_id");
