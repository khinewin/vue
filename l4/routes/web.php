<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get("/", [PostController::class, "getWelcome"]);

Route::post("/create/post", [PostController::class, "createPost"])->name("create.post");