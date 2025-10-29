<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/posts", [PostController::class, "getAllPosts"])->name("all_posts");
Route::get("/posts/id/{id}", [PostController::class, "getPostById"])->name("post_by_id");

/*
Route::get("/users", function(){
    return "Users";
});
Route::get("/users/id/{id}", function($id){
    return "User id $id";
});
Route::get("/users/id/{id}/edit", function($id){
    return "Edit user Id $id";
});
*/

Route::group(["prefix"=>"users"], function(){
    Route::get("/", function(){
         return "Users";
    });
    Route::get("/id/{id}", function($id){
        return "User id $id";
    });
    Route::get("/id/{id}/edit", function($id){
        return "Edit user Id $id";
    });
});