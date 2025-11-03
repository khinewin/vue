<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   function getPosts(){
        return view("posts");
    }
}
