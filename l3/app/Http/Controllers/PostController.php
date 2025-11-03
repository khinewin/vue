<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   function getPosts(){
        $isActive=false;
        return view("posts")->with(["isA"=>$isActive]);
    }
}
