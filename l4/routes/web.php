<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get("/auth/login", function(){
    return "I am login page";
})->name("login");

Route::group(["middleware"=>"auth"], function(){

    Route::get("/", [PostController::class, "getWelcome"]);//->middleware("auth");
    Route::post("/create/post", [PostController::class, "createPost"])->name("create.post");
    Route::get("/delete/post/{post_id}", [PostController::class, "deletePost"])->name("post.delete");
    Route::get("/edit/post/{post_id}", [PostController::class, "editPost"])->name("post.edit");
    Route::post("/update/post", [PostController::class, "updatePost"])->name("update.post");

});