<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function createPost(Request $request){
        dd($request->all());
    }
    function getWelcome(){
        return view("welcome");
    }
}
