<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAllPosts(){
        return view("posts.all");
    }
    public function getPostById($id){
        return view("posts.byid")->with(["post_id"=>$id]);
    }
}
