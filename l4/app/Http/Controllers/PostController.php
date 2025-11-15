<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function updatePost(Request $r){
        $id=$r->id;
        $title=$r->title;
        $content=$r->content;
        $post=Post::whereId($id)->firstOrFail();
        $post->title=$title;
        $post->content=$content;
        $post->update();
        return redirect()->back()->with("msg", "The post has been updated.");
    }
    function editPost($post_id){
        $post=Post::whereId($post_id)->firstOrFail();
        return view("edit")->with(["p"=>$post]);
    }
    function deletePost($post_id){
        $post=Post::where("id", $post_id)->firstOrFail(); //first();
        $post->delete();
        return redirect()->back()->with("msg", "The selected post has been deleted.");
    }
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
