<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   function getPosts(){
        $isActive=false;
        $all_posts=["first", "second", "third", "Fourth"];
        return view("posts")->with(["isA"=>$isActive, "all_posts"=>$all_posts]);
    }
}
