<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function createPost(Request $request){
        $title=$request->title;
        $content=$request->content;

        $request->validate([
            "title"=>"required",
            "content"=>'required'
        ]);

        //Validation, Authentication, Authorization
        
    }
    function getWelcome(){
        return view("welcome");
    }
}
