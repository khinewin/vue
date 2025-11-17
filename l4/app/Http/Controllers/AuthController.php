<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    function getProfile(){
        return view("profile");
    }
    function getLogout(){
        Auth::logout();
        return redirect()->route("login");
    }
    function postLogin(Request $request){
        $request->validate([
                'email'=>'required|email|exists:users',
                'password'=>'required',
            ]);

          if(Auth::attempt(["email"=>$request->email, "password"=>$request->password])){
            return redirect("/");
          }else{
                return redirect()->back()->withErrors([
                    "password"=>"Password is invalid"
                ]);
          }
    }
    function postRegister(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:4',
            'confirm_password'=>'required|same:password'
        ]);

        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        return redirect()->back()->with("msg", "The user account has been created.");

    }
    function getLogin(){
        return view("auth.signin");
    }
    function getRegister(){
        return view("auth.signup");
    }
}
