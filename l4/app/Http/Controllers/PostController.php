<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function createPost(Request $request){
        $title=$request->title;
        $content=$request->content;

        $request->validate([
            "title"=>"required|max:100",
            "content"=>'required|min:5'
        ]);

        $p=new Post();
        $p->title=$title;
        $p->content=$content;
        $p->save();

        return redirect()->back()->with("msg", "The post has been created.");
        //return redirect()->route("welcome");
        //return redirect("/");
        //Validation, Authentication, Authorization
        
    }
    function getWelcome(){
        ///$posts=Post::all(); //laravel eloquent
      //  $posts=Post::orderBy("id", "desc")->get();
      $posts=Post::orderBy("id", 'desc')->paginate(2);
        return view("welcome")->with(['posts'=>$posts]);
    }
}
