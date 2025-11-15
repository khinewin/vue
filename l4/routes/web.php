<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;

Route::get("/auth/login", [AuthController::class, "getLogin"])->name("login");
Route::get("/auth/register", [AuthController::class, 'getRegister'])->name("register");

Route::group(["middleware"=>"auth"], function(){

    Route::get("/", [PostController::class, "getWelcome"]);//->middleware("auth");
    Route::post("/create/post", [PostController::class, "createPost"])->name("create.post");
    Route::get("/delete/post/{post_id}", [PostController::class, "deletePost"])->name("post.delete");
    Route::get("/edit/post/{post_id}", [PostController::class, "editPost"])->name("post.edit");
    Route::post("/update/post", [PostController::class, "updatePost"])->name("update.post");

});
