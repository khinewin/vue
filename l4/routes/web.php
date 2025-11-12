<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get("/", [PostController::class, "getWelcome"]);

Route::post("/create/post", [PostController::class, "createPost"])->name("create.post");
Route::get("/delete/post/{post_id}", [PostController::class, "deletePost"])->name("post.delete");
Route::get("/edit/post/{post_id}", [PostController::class, "editPost"])->name("post.edit");